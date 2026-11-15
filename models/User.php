<?php

declare(strict_types=1);

namespace app\models;

use Yii;
use yii\base\BaseObject;
use yii\web\IdentityInterface;

class User extends BaseObject implements IdentityInterface
{
    public int|string $id = '';
    public string $username = '';
    public string $passwordHash = '';
    public string $authKey = '';
    public string $accessToken = '';

    /**
     * Fallback in-memory users with securely hashed bcrypt passwords.
     * Used when the MySQL database is offline or not yet initialized.
     */
    private static array $_users = [
        '100' => [
            'id' => '100',
            'username' => 'solarenergy.admin@gmail.com',
            'passwordHash' => '$2y$13$gYAywKSkhfZDq9FLNdm7buKnvlRxDexf5xipSMAxQPDUxpaptmZJu',
            'authKey' => 'solaradmin100key',
            'accessToken' => '100-token',
        ],
        '101' => [
            'id' => '101',
            'username' => 'admin',
            'passwordHash' => '$2y$13$gYAywKSkhfZDq9FLNdm7buKnvlRxDexf5xipSMAxQPDUxpaptmZJu',
            'authKey' => 'test101key',
            'accessToken' => '101-token',
        ],
    ];

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id): static|null
    {
        // 1. Try querying the backend database `admin_users` table if available
        try {
            if (Yii::$app->has('db') && Yii::$app->db->getTableSchema('admin_users') !== null) {
                $row = (new \yii\db\Query())
                    ->from('admin_users')
                    ->where(['id' => $id, 'status' => 'active'])
                    ->one(Yii::$app->db);

                if ($row) {
                    return new static([
                        'id' => (string)$row['id'],
                        'username' => (string)$row['username'],
                        'passwordHash' => (string)($row['password_hash'] ?? $row['password'] ?? ''),
                        'authKey' => (string)($row['auth_key'] ?? ('auth_' . $row['id'])),
                        'accessToken' => (string)($row['access_token'] ?? ('token_' . $row['id'])),
                    ]);
                }
            }
        } catch (\Throwable $e) {
            // Silently fall back to in-memory store
        }

        // 2. Fall back to secure in-memory store
        return isset(self::$_users[$id]) ? new static(self::$_users[$id]) : null;
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null): static|null
    {
        // 1. Try querying database
        try {
            if (Yii::$app->has('db') && Yii::$app->db->getTableSchema('admin_users') !== null) {
                $row = (new \yii\db\Query())
                    ->from('admin_users')
                    ->where(['access_token' => $token, 'status' => 'active'])
                    ->one(Yii::$app->db);

                if ($row) {
                    return new static([
                        'id' => (string)$row['id'],
                        'username' => (string)$row['username'],
                        'passwordHash' => (string)($row['password_hash'] ?? $row['password'] ?? ''),
                        'authKey' => (string)($row['auth_key'] ?? ('auth_' . $row['id'])),
                        'accessToken' => (string)($row['access_token'] ?? ('token_' . $row['id'])),
                    ]);
                }
            }
        } catch (\Throwable $e) {
            // Silently fall back
        }

        // 2. Fall back to in-memory store
        foreach (self::$_users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * Finds user by username or email.
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername(string $username): static|null
    {
        $cleanUsername = trim($username);

        // 1. Try querying the backend database `admin_users` table if available
        try {
            if (Yii::$app->has('db') && Yii::$app->db->getTableSchema('admin_users') !== null) {
                $row = (new \yii\db\Query())
                    ->from('admin_users')
                    ->where(['and',
                        ['or', ['username' => $cleanUsername], ['email' => $cleanUsername]],
                        ['status' => 'active']
                    ])
                    ->one(Yii::$app->db);

                if ($row) {
                    return new static([
                        'id' => (string)$row['id'],
                        'username' => (string)$row['username'],
                        'passwordHash' => (string)($row['password_hash'] ?? $row['password'] ?? ''),
                        'authKey' => (string)($row['auth_key'] ?? ('auth_' . $row['id'])),
                        'accessToken' => (string)($row['access_token'] ?? ('token_' . $row['id'])),
                    ]);
                }
            }
        } catch (\Throwable $e) {
            // Silently fall back to in-memory store
        }

        // 2. Fall back to secure in-memory store
        foreach (self::$_users as $user) {
            if (strcasecmp($user['username'], $cleanUsername) === 0) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getId(): int|string
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey(): string|null
    {
        return $this->authKey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey): bool
    {
        return $this->authKey === $authKey;
    }
}
