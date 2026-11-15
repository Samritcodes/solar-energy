<?php

declare(strict_types=1);

namespace app\models;

use Yii;
use yii\base\Model;

class ExpertInquiry extends Model
{
    private static function getStorageFile(): string
    {
        return Yii::getAlias('@runtime/admin_inquiries.json');
    }

    /**
     * Retrieve all inquiries sorted by created_at DESC.
     *
     * @return array<int, array>
     */
    public static function getAll(): array
    {
        // Try reading from MySQL if database is connected and table exists
        try {
            if (Yii::$app->has('db') && Yii::$app->db->getTableSchema('inquiries') !== null) {
                $rows = (new \yii\db\Query())
                    ->from('inquiries')
                    ->orderBy(['created_at' => SORT_DESC])
                    ->all(Yii::$app->db);
                if (!empty($rows)) {
                    // Keep JSON cache in sync
                    file_put_contents(self::getStorageFile(), json_encode($rows, JSON_PRETTY_PRINT), LOCK_EX);
                    return $rows;
                }
            }
        } catch (\Throwable $e) {
            // Silently fall back to JSON storage
        }

        $file = self::getStorageFile();
        if (!file_exists($file)) {
            // Seed with a sample inquiry so the admin dashboard isn't completely empty initially
            $sample = [
                [
                    'id' => 'INQ-1001',
                    'name' => 'Rajesh Sharma',
                    'phone' => '9876543210',
                    'email' => 'rajesh.sharma@example.com',
                    'topic' => 'PM Surya Ghar Rooftop Solar',
                    'message' => 'Looking for 3kW rooftop solar setup under PM Surya Ghar Yojana. Need subsidy calculation.',
                    'status' => 'pending',
                    'created_at' => date('d M Y, h:i A', strtotime('-2 hours')),
                    'reviewed_at' => null,
                ],
            ];
            file_put_contents($file, json_encode($sample, JSON_PRETTY_PRINT));
            return $sample;
        }

        $content = file_get_contents($file);
        $data = json_decode($content, true);
        return is_array($data) ? $data : [];
    }

    /**
     * Save a new inquiry to persistent storage.
     *
     * @param array $inquiryData
     * @return array
     */
    public static function create(array $inquiryData): array
    {
        $all = self::getAll();
        
        $newId = 'INQ-' . (count($all) > 0 ? (intval(substr($all[0]['id'], 4)) + 1) : 1001);
        if ($newId === 'INQ-1') {
            $newId = 'INQ-' . (1000 + count($all) + 1);
        }

        $record = [
            'id' => $newId,
            'name' => trim($inquiryData['name'] ?? 'Anonymous'),
            'phone' => trim($inquiryData['phone'] ?? ''),
            'email' => trim($inquiryData['email'] ?? ''),
            'topic' => trim($inquiryData['topic'] ?? 'General Consultation'),
            'message' => trim($inquiryData['message'] ?? ''),
            'status' => 'pending', // pending, approved, rejected
            'created_at' => date('d M Y, h:i A'),
            'reviewed_at' => null,
            'ip_address' => Yii::$app->request->userIP ?? '127.0.0.1',
        ];

        // Prepend to top of JSON
        array_unshift($all, $record);
        file_put_contents(self::getStorageFile(), json_encode($all, JSON_PRETTY_PRINT), LOCK_EX);

        // Also persist to MySQL if available
        try {
            if (Yii::$app->has('db') && Yii::$app->db->getTableSchema('inquiries') !== null) {
                Yii::$app->db->createCommand()->insert('inquiries', [
                    'id' => $record['id'],
                    'name' => $record['name'],
                    'phone' => $record['phone'],
                    'email' => $record['email'],
                    'topic' => $record['topic'],
                    'message' => $record['message'],
                    'status' => $record['status'],
                    'created_at' => $record['created_at'],
                    'reviewed_at' => $record['reviewed_at'],
                    'ip_address' => $record['ip_address'],
                ])->execute();
            }
        } catch (\Throwable $e) {
            // Fail-safe: JSON already saved
        }

        return $record;
    }

    /**
     * Update inquiry review status.
     *
     * @param string $id
     * @param string $status ('approved', 'rejected', 'pending')
     * @return bool
     */
    public static function updateStatus(string $id, string $status): bool
    {
        $all = self::getAll();
        $updated = false;

        foreach ($all as &$inquiry) {
            if ($inquiry['id'] === $id) {
                $inquiry['status'] = in_array($status, ['approved', 'rejected', 'pending'], true) ? $status : 'pending';
                $inquiry['reviewed_at'] = date('d M Y, h:i A');
                $updated = true;
                break;
            }
        }

        if ($updated) {
            file_put_contents(self::getStorageFile(), json_encode($all, JSON_PRETTY_PRINT), LOCK_EX);

            // Also update in MySQL if available
            try {
                if (Yii::$app->has('db') && Yii::$app->db->getTableSchema('inquiries') !== null) {
                    Yii::$app->db->createCommand()->update('inquiries', [
                        'status' => in_array($status, ['approved', 'rejected', 'pending'], true) ? $status : 'pending',
                        'reviewed_at' => date('d M Y, h:i A'),
                    ], ['id' => $id])->execute();
                }
            } catch (\Throwable $e) {
                // Fail-safe: JSON already updated
            }
        }

        return $updated;
    }

    /**
     * Delete an inquiry by ID.
     *
     * @param string $id
     * @return bool
     */
    public static function delete(string $id): bool
    {
        $all = self::getAll();
        $filtered = array_values(array_filter($all, fn($item) => $item['id'] !== $id));

        if (count($filtered) !== count($all)) {
            file_put_contents(self::getStorageFile(), json_encode($filtered, JSON_PRETTY_PRINT), LOCK_EX);

            // Also delete from MySQL if available
            try {
                if (Yii::$app->has('db') && Yii::$app->db->getTableSchema('inquiries') !== null) {
                    Yii::$app->db->createCommand()->delete('inquiries', ['id' => $id])->execute();
                }
            } catch (\Throwable $e) {
                // Fail-safe: JSON already deleted
            }

            return true;
        }

        return false;
    }

    /**
     * Return counts by status.
     *
     * @return array
     */
    public static function getStats(): array
    {
        $all = self::getAll();
        $total = count($all);
        $pending = 0;
        $approved = 0;
        $rejected = 0;

        foreach ($all as $item) {
            if (($item['status'] ?? 'pending') === 'approved') {
                $approved++;
            } elseif (($item['status'] ?? 'pending') === 'rejected') {
                $rejected++;
            } else {
                $pending++;
            }
        }

        return [
            'total' => $total,
            'pending' => $pending,
            'approved' => $approved,
            'rejected' => $rejected,
        ];
    }
}
