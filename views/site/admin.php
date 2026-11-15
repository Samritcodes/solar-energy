<?php

declare(strict_types=1);

/** @var yii\web\View $this */
/** @var array<int, array> $inquiries */
/** @var array<string, int> $stats */
/** @var string $currentFilter */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Admin Panel - Solar Inquiry Management | Solar Energy';
$this->params['meta_description'] = 'Admin dashboard to review and verify incoming customer solar inquiries.';

// Prevent search engine indexing and caching of admin control panel
$this->registerMetaTag(['name' => 'robots', 'content' => 'noindex, nofollow, noarchive']);
?>

<div class="admin-dashboard-page py-4 py-lg-5" style="background-color: #f8fafc; min-height: 85vh;">
    <div class="container">
        
        <!-- Header Banner -->
        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-4">
            <div>
                <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill mb-2" style="background: #e0f2fe; color: #0284c7; font-size: 0.8rem; font-weight: 700;">
                    <i class="bi bi-shield-lock-fill"></i>
                    <span>ADMIN CONTROL PANEL</span>
                </div>
                <h1 class="fw-bold text-navy mb-1" style="font-size: 1.85rem;">
                    Customer Inquiry Management
                </h1>
                <p class="text-muted small mb-0">
                    Review incoming "Talk to Our Expert" inquiries, verify genuine leads, and proceed to consultation.
                </p>
            </div>
            <div class="d-flex align-items-center gap-2">
                <a href="<?= Url::to(['/site/index']) ?>" class="btn btn-outline-secondary btn-sm rounded-pill px-3">
                    <i class="bi bi-arrow-left me-1"></i> View Website
                </a>
                <a href="<?= Url::to(['/site/admin']) ?>" class="btn btn-orange-hero btn-sm rounded-pill px-3">
                    <i class="bi bi-arrow-clockwise me-1"></i> Refresh
                </a>
                <form action="<?= Url::to(['/site/logout']) ?>" method="post" class="d-inline">
                    <input type="hidden" name="<?= Yii::$app->request->csrfParam ?>" value="<?= Yii::$app->request->getCsrfToken() ?>">
                    <button type="submit" class="btn btn-outline-danger btn-sm rounded-pill px-3" title="Log out of admin session">
                        <i class="bi bi-box-arrow-right me-1"></i> Logout
                    </button>
                </form>
            </div>
        </div>

        <!-- Metric Stat Cards Row -->
        <div class="row g-3 mb-4">
            <!-- Total -->
            <div class="col-sm-6 col-lg-3">
                <div class="card border-0 shadow-sm rounded-4 p-3 bg-white h-100">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <span class="text-muted small fw-bold text-uppercase">Total Inquiries</span>
                        <div class="d-flex align-items-center justify-content-center rounded-3" style="width: 40px; height: 40px; background-color: #e2e8f0; color: #0f172a;">
                            <i class="bi bi-inbox-fill fs-5"></i>
                        </div>
                    </div>
                    <div class="fs-2 fw-bold text-navy"><?= (int)($stats['total'] ?? 0) ?></div>
                    <span class="text-muted" style="font-size: 0.8rem;">All customer requests</span>
                </div>
            </div>

            <!-- Pending Review -->
            <div class="col-sm-6 col-lg-3">
                <div class="card border-0 shadow-sm rounded-4 p-3 bg-white h-100 border-start border-4 border-warning">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <span class="text-muted small fw-bold text-uppercase">Pending Review</span>
                        <div class="d-flex align-items-center justify-content-center rounded-3" style="width: 40px; height: 40px; background-color: #fef3c7; color: #d97706;">
                            <i class="bi bi-clock-history fs-5"></i>
                        </div>
                    </div>
                    <div class="fs-2 fw-bold text-warning"><?= (int)($stats['pending'] ?? 0) ?></div>
                    <span class="text-warning-emphasis fw-medium" style="font-size: 0.8rem;">Needs admin verification</span>
                </div>
            </div>

            <!-- Genuine / Approved -->
            <div class="col-sm-6 col-lg-3">
                <div class="card border-0 shadow-sm rounded-4 p-3 bg-white h-100 border-start border-4 border-success">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <span class="text-muted small fw-bold text-uppercase">Genuine &amp; Approved</span>
                        <div class="d-flex align-items-center justify-content-center rounded-3" style="width: 40px; height: 40px; background-color: #dcfce7; color: #16a34a;">
                            <i class="bi bi-patch-check-fill fs-5"></i>
                        </div>
                    </div>
                    <div class="fs-2 fw-bold text-success"><?= (int)($stats['approved'] ?? 0) ?></div>
                    <span class="text-success fw-medium" style="font-size: 0.8rem;">Ready for team follow-up</span>
                </div>
            </div>

            <!-- Spam / Rejected -->
            <div class="col-sm-6 col-lg-3">
                <div class="card border-0 shadow-sm rounded-4 p-3 bg-white h-100 border-start border-4 border-danger">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <span class="text-muted small fw-bold text-uppercase">Spam / Rejected</span>
                        <div class="d-flex align-items-center justify-content-center rounded-3" style="width: 40px; height: 40px; background-color: #fee2e2; color: #dc2626;">
                            <i class="bi bi-slash-circle fs-5"></i>
                        </div>
                    </div>
                    <div class="fs-2 fw-bold text-danger"><?= (int)($stats['rejected'] ?? 0) ?></div>
                    <span class="text-muted" style="font-size: 0.8rem;">Discarded / Fake entries</span>
                </div>
            </div>
        </div>

        <!-- Filter Bar & Search -->
        <div class="card border-0 shadow-sm rounded-4 p-3 bg-white mb-4">
            <div class="row g-3 align-items-center justify-content-between">
                <!-- Status Filter Pills -->
                <div class="col-md-7">
                    <div class="d-flex flex-wrap gap-2">
                        <a href="<?= Url::to(['/site/admin', 'filter' => 'all']) ?>"
                           class="btn btn-sm rounded-pill <?= $currentFilter === 'all' ? 'btn-dark' : 'btn-outline-secondary' ?>">
                            All (<?= (int)($stats['total'] ?? 0) ?>)
                        </a>
                        <a href="<?= Url::to(['/site/admin', 'filter' => 'pending']) ?>"
                           class="btn btn-sm rounded-pill <?= $currentFilter === 'pending' ? 'btn-warning text-dark fw-bold' : 'btn-outline-warning text-dark' ?>">
                            <i class="bi bi-hourglass-split me-1"></i> Pending Review (<?= (int)($stats['pending'] ?? 0) ?>)
                        </a>
                        <a href="<?= Url::to(['/site/admin', 'filter' => 'approved']) ?>"
                           class="btn btn-sm rounded-pill <?= $currentFilter === 'approved' ? 'btn-success' : 'btn-outline-success' ?>">
                            <i class="bi bi-check-circle-fill me-1"></i> Genuine (<?= (int)($stats['approved'] ?? 0) ?>)
                        </a>
                        <a href="<?= Url::to(['/site/admin', 'filter' => 'rejected']) ?>"
                           class="btn btn-sm rounded-pill <?= $currentFilter === 'rejected' ? 'btn-danger' : 'btn-outline-danger' ?>">
                            <i class="bi bi-x-circle-fill me-1"></i> Spam (<?= (int)($stats['rejected'] ?? 0) ?>)
                        </a>
                    </div>
                </div>

                <!-- Instant Search Input -->
                <div class="col-md-4">
                    <div class="input-group input-group-sm">
                        <span class="input-group-text bg-light border-end-0 text-muted"><i class="bi bi-search"></i></span>
                        <input type="text" id="adminSearchInput" class="form-control border-start-0" placeholder="Filter by Name, Phone, or Topic...">
                    </div>
                </div>
            </div>
        </div>

        <!-- Inquiries Table Card -->
        <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white">
            <div class="card-header bg-white border-bottom py-3 px-4 d-flex justify-content-between align-items-center">
                <h5 class="fw-bold text-navy mb-0" style="font-size: 1.1rem;">
                    Inquiry Queue (<?= count($inquiries) ?> records)
                </h5>
                <span class="badge bg-light text-muted border">
                    <i class="bi bi-shield-lock-fill text-warning me-1"></i> Admin: <strong><?= Html::encode(Yii::$app->user->identity->username ?? 'solarenergy.admin@gmail.com') ?></strong>
                </span>
            </div>

            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0" id="inquiriesTable">
                    <thead class="table-light text-muted small text-uppercase" style="font-size: 0.76rem; letter-spacing: 0.5px;">
                        <tr>
                            <th class="ps-4">ID &amp; Time</th>
                            <th>Customer Info</th>
                            <th>Topic / Solution</th>
                            <th>Query &amp; Requirements</th>
                            <th>Status</th>
                            <th class="text-end pe-4">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($inquiries)): ?>
                            <tr>
                                <td colspan="6" class="text-center py-5 text-muted">
                                    <div class="fs-1 mb-2 text-muted opacity-50"><i class="bi bi-inbox"></i></div>
                                    <div class="fw-bold">No inquiries found in this filter</div>
                                    <p class="small mb-0">New inquiries from "Talk to Our Expert" will appear here automatically.</p>
                                </td>
                            </tr>
                        <?php else: ?>
                            <?php foreach ($inquiries as $inq): 
                                $status = $inq['status'] ?? 'pending';
                                $statusBadgeClass = match($status) {
                                    'approved' => 'bg-success-subtle text-success border border-success-subtle',
                                    'rejected' => 'bg-danger-subtle text-danger border border-danger-subtle',
                                    default => 'bg-warning-subtle text-warning-emphasis border border-warning-subtle',
                                };
                                $statusLabel = match($status) {
                                    'approved' => 'Genuine & Approved',
                                    'rejected' => 'Spam / Rejected',
                                    default => 'Pending Review',
                                };
                            ?>
                                <tr class="inquiry-row"
                                    id="inq-row-<?= Html::encode($inq['id'] ?? '') ?>"
                                    data-id="<?= Html::encode($inq['id'] ?? '') ?>"
                                    data-search="<?= Html::encode(strtolower(($inq['name'] ?? '') . ' ' . ($inq['phone'] ?? '') . ' ' . ($inq['topic'] ?? '') . ' ' . ($inq['email'] ?? '') . ' ' . ($inq['message'] ?? ''))) ?>"
                                    data-inquiry='<?= Html::encode(json_encode($inq, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP)) ?>'>
                                    
                                    <!-- ID & Date -->
                                    <td class="ps-4 text-nowrap">
                                        <strong class="text-navy d-block"><?= Html::encode($inq['id'] ?? 'N/A') ?></strong>
                                        <span class="text-muted small" style="font-size: 0.78rem;">
                                            <i class="bi bi-calendar3 me-1"></i><?= Html::encode($inq['created_at'] ?? 'Recently') ?>
                                        </span>
                                    </td>

                                    <!-- Customer Info -->
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="rounded-circle d-flex align-items-center justify-content-center text-white fw-bold flex-shrink-0"
                                                 style="width: 38px; height: 38px; background-color: #f97316; font-size: 0.95rem;">
                                                <?= strtoupper(substr($inq['name'] ?? 'U', 0, 1)) ?>
                                            </div>
                                            <div>
                                                <div class="fw-bold text-navy"><?= Html::encode($inq['name'] ?? 'N/A') ?></div>
                                                <div class="small">
                                                    <a href="tel:<?= Html::encode($inq['phone'] ?? '') ?>" class="text-decoration-none fw-semibold text-primary" title="Call <?= Html::encode($inq['phone'] ?? '') ?>">
                                                        <i class="bi bi-telephone-fill me-1"></i><?= Html::encode($inq['phone'] ?? '') ?>
                                                    </a>
                                                </div>
                                                <?php if (!empty($inq['email'])): ?>
                                                    <div class="small mt-1 d-flex align-items-center gap-1">
                                                        <a href="mailto:<?= Html::encode($inq['email']) ?>" class="text-decoration-none text-primary fw-semibold text-truncate d-inline-block" style="max-width: 170px; font-size: 0.78rem;" title="Send email via default Mail app">
                                                            <i class="bi bi-envelope-fill me-1 text-primary"></i><?= Html::encode($inq['email']) ?>
                                                        </a>
                                                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=<?= urlencode($inq['email']) ?>" target="_blank" rel="noopener" class="badge bg-danger-subtle text-danger border border-danger-subtle text-decoration-none p-1" title="Compose in Gmail" style="font-size: 0.68rem; line-height: 1.1;">
                                                            <i class="bi bi-google"></i> Gmail
                                                        </a>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- Topic / Solution -->
                                    <td>
                                        <span class="badge rounded-pill bg-light text-navy border px-2 py-1 fw-bold" style="font-size: 0.8rem;">
                                            <i class="bi bi-sun-fill text-warning me-1"></i><?= Html::encode($inq['topic'] ?? 'Solar Consultation') ?>
                                        </span>
                                    </td>

                                    <!-- Query Message -->
                                    <td style="max-width: 260px;">
                                        <div class="text-muted small mb-1" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; line-height: 1.4;" title="<?= Html::encode($inq['message'] ?? 'No message provided.') ?>">
                                            <?= Html::encode($inq['message'] ?: 'Requested a call back regarding solar solutions.') ?>
                                        </div>
                                        <button type="button" class="btn btn-link btn-sm p-0 text-decoration-none text-primary small fw-semibold view-inquiry-btn" data-id="<?= Html::encode($inq['id']) ?>">
                                            <i class="bi bi-eye-fill me-1"></i>View Full Details &rarr;
                                        </button>
                                    </td>

                                    <!-- Status -->
                                    <td class="text-nowrap">
                                        <span class="badge rounded-pill <?= $statusBadgeClass ?> px-3 py-1">
                                            <?= $statusLabel ?>
                                        </span>
                                        <?php if (!empty($inq['reviewed_at'])): ?>
                                            <span class="d-block text-muted" style="font-size: 0.7rem;">
                                                Updated <?= Html::encode($inq['reviewed_at']) ?>
                                            </span>
                                        <?php endif; ?>
                                    </td>

                                    <!-- Actions -->
                                    <td class="text-end pe-4 text-nowrap">
                                        <div class="d-inline-flex align-items-center gap-1">
                                            <!-- View Full Details Button -->
                                            <button type="button" class="btn btn-sm btn-outline-primary fw-semibold view-inquiry-btn" data-id="<?= Html::encode($inq['id']) ?>" title="View Complete Inquiry & Query Details">
                                                <i class="bi bi-eye-fill me-1"></i> View
                                            </button>

                                            <?php if (!empty($inq['email'])): ?>
                                                <!-- Direct Gmail Button -->
                                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=<?= urlencode($inq['email']) ?>" target="_blank" rel="noopener" class="btn btn-sm btn-outline-danger fw-semibold" title="Compose in Gmail to <?= Html::encode($inq['email']) ?>">
                                                    <i class="bi bi-envelope-fill me-1"></i> Email
                                                </a>
                                            <?php endif; ?>

                                            <?php if ($status === 'pending'): ?>
                                                <!-- Approve Button (Mark Genuine) -->
                                                <form method="post" action="<?= Url::to(['/site/update-inquiry-status']) ?>" class="d-inline">
                                                    <input type="hidden" name="<?= Yii::$app->request->csrfParam ?>" value="<?= Yii::$app->request->getCsrfToken() ?>">
                                                    <input type="hidden" name="id" value="<?= Html::encode($inq['id']) ?>">
                                                    <input type="hidden" name="status" value="approved">
                                                    <input type="hidden" name="filter" value="<?= Html::encode($currentFilter) ?>">
                                                    <button type="submit" class="btn btn-sm btn-outline-success fw-semibold" title="Verify as Genuine and Proceed">
                                                        <i class="bi bi-check-lg me-1"></i> Approve
                                                    </button>
                                                </form>

                                                <!-- Mark as Spam -->
                                                <form method="post" action="<?= Url::to(['/site/update-inquiry-status']) ?>" class="d-inline">
                                                    <input type="hidden" name="<?= Yii::$app->request->csrfParam ?>" value="<?= Yii::$app->request->getCsrfToken() ?>">
                                                    <input type="hidden" name="id" value="<?= Html::encode($inq['id']) ?>">
                                                    <input type="hidden" name="status" value="rejected">
                                                    <input type="hidden" name="filter" value="<?= Html::encode($currentFilter) ?>">
                                                    <button type="submit" class="btn btn-sm btn-outline-danger fw-semibold" title="Reject as Spam / Non-genuine">
                                                        <i class="bi bi-x-lg me-1"></i> Spam
                                                    </button>
                                                </form>

                                            <?php elseif ($status === 'approved'): ?>
                                                <!-- Revert to Pending -->
                                                <form method="post" action="<?= Url::to(['/site/update-inquiry-status']) ?>" class="d-inline">
                                                    <input type="hidden" name="<?= Yii::$app->request->csrfParam ?>" value="<?= Yii::$app->request->getCsrfToken() ?>">
                                                    <input type="hidden" name="id" value="<?= Html::encode($inq['id']) ?>">
                                                    <input type="hidden" name="status" value="pending">
                                                    <input type="hidden" name="filter" value="<?= Html::encode($currentFilter) ?>">
                                                    <button type="submit" class="btn btn-sm btn-outline-secondary" title="Revert to Pending Review">
                                                        <i class="bi bi-arrow-counterclockwise" title="Revert to Pending"></i>
                                                    </button>
                                                </form>

                                            <?php elseif ($status === 'rejected'): ?>
                                                <!-- Restore back to Pending (Never show Approve here!) -->
                                                <form method="post" action="<?= Url::to(['/site/update-inquiry-status']) ?>" class="d-inline">
                                                    <input type="hidden" name="<?= Yii::$app->request->csrfParam ?>" value="<?= Yii::$app->request->getCsrfToken() ?>">
                                                    <input type="hidden" name="id" value="<?= Html::encode($inq['id']) ?>">
                                                    <input type="hidden" name="status" value="pending">
                                                    <input type="hidden" name="filter" value="<?= Html::encode($currentFilter) ?>">
                                                    <button type="submit" class="btn btn-sm btn-outline-secondary" title="Restore back to Pending Review">
                                                        <i class="bi bi-arrow-counterclockwise me-1"></i> Restore
                                                    </button>
                                                </form>

                                            <?php endif; ?>

                                            <!-- Delete Permanently -->
                                            <form method="post" action="<?= Url::to(['/site/update-inquiry-status']) ?>" class="d-inline" onsubmit="return confirm('Permanently remove this inquiry?');">
                                                <input type="hidden" name="<?= Yii::$app->request->csrfParam ?>" value="<?= Yii::$app->request->getCsrfToken() ?>">
                                                <input type="hidden" name="id" value="<?= Html::encode($inq['id']) ?>">
                                                <input type="hidden" name="status" value="delete">
                                                <input type="hidden" name="filter" value="<?= Html::encode($currentFilter) ?>">
                                                <button type="submit" class="btn btn-sm btn-outline-secondary" title="Permanently delete record">
                                                    <i class="bi bi-trash3"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

            <!-- Card Footer -->
            <div class="card-footer bg-light border-top py-2 px-4 d-flex justify-content-between align-items-center small text-muted">
                <span>Direct inquiries are verified by Admin before customer dispatch.</span>
                <span>Yii2 Solar Admin System</span>
            </div>
        </div>

    </div>
</div>

<!-- =========================================================================
     INQUIRY DETAIL MODAL (Displays Full Query, All Details & Action Buttons)
     ========================================================================= -->
<div class="modal fade" id="inquiryDetailModal" tabindex="-1" aria-labelledby="inquiryDetailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">
            <div class="modal-header text-white py-3 px-4" style="background: linear-gradient(135deg, #0a1128 0%, #1c2d5a 100%);">
                <div class="d-flex align-items-center gap-2">
                    <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 38px; height: 38px; background: rgba(255,255,255,0.15);">
                        <i class="bi bi-file-earmark-person-fill text-warning fs-5"></i>
                    </div>
                    <div>
                        <h5 class="modal-title fw-bold mb-0 text-white" id="inquiryDetailModalLabel" style="font-size: 1.15rem;">
                            Inquiry Details &bull; <span id="modalInqId" class="text-orange"></span>
                        </h5>
                        <span class="text-white-50 small" id="modalInqDate"></span>
                    </div>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body p-4 bg-white">
                <!-- Status Banner -->
                <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center p-3 rounded-3 mb-4 border bg-light gap-2">
                    <div>
                        <span class="text-muted small d-block">Current Review Status:</span>
                        <div id="modalInqStatusBadge" class="mt-1"></div>
                    </div>
                    <div class="text-sm-end" id="modalInqReviewedWrapper">
                        <span class="text-muted small d-block">Last Action Timestamp:</span>
                        <strong class="text-navy small" id="modalInqReviewedAt"></strong>
                    </div>
                </div>

                <!-- Customer Details Grid -->
                <div class="row g-3 mb-4">
                    <div class="col-md-6">
                        <div class="p-3 rounded-3 border h-100 bg-white">
                            <span class="text-muted small fw-semibold text-uppercase d-block mb-1">
                                <i class="bi bi-person-fill text-orange me-1"></i> Customer Name
                            </span>
                            <h5 class="fw-bold text-navy mb-0" id="modalInqName"></h5>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 rounded-3 border h-100 bg-white">
                            <span class="text-muted small fw-semibold text-uppercase d-block mb-1">
                                <i class="bi bi-sun-fill text-warning me-1"></i> Interested Solution
                            </span>
                            <h6 class="fw-bold text-navy mb-0" id="modalInqTopic"></h6>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 rounded-3 border h-100 bg-white">
                            <span class="text-muted small fw-semibold text-uppercase d-block mb-1">
                                <i class="bi bi-telephone-fill text-success me-1"></i> Mobile Number
                            </span>
                            <div class="d-flex align-items-center justify-content-between mt-1">
                                <span class="fw-bold text-navy fs-5" id="modalInqPhone"></span>
                                <div class="d-flex gap-1">
                                    <a href="#" id="modalPhoneCallBtn" class="btn btn-sm btn-outline-primary" title="Call on phone">
                                        <i class="bi bi-telephone-outbound me-1"></i> Call
                                    </a>
                                    <button type="button" id="modalCopyPhoneBtn" class="btn btn-sm btn-outline-secondary" title="Copy phone number">
                                        <i class="bi bi-clipboard"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 rounded-3 border h-100 bg-white">
                            <span class="text-muted small fw-semibold text-uppercase d-block mb-1">
                                <i class="bi bi-envelope-fill text-primary me-1"></i> Email Address
                            </span>
                            <div class="d-flex align-items-center justify-content-between mt-1">
                                <span class="text-navy fw-semibold text-truncate me-2" id="modalInqEmail" style="max-width: 170px;"></span>
                                <div class="d-flex gap-1" id="modalEmailActions">
                                    <a href="#" id="modalGmailBtn" target="_blank" rel="noopener" class="btn btn-sm btn-outline-danger" title="Compose in Gmail">
                                        <i class="bi bi-google me-1"></i> Gmail
                                    </a>
                                    <a href="#" id="modalMailtoBtn" class="btn btn-sm btn-outline-secondary" title="Default Mail App">
                                        <i class="bi bi-envelope"></i>
                                    </a>
                                    <button type="button" id="modalCopyEmailBtn" class="btn btn-sm btn-outline-secondary" title="Copy email">
                                        <i class="bi bi-clipboard"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Complete Query / Requirements Card -->
                <div class="mb-2">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <label class="form-label fw-bold text-navy mb-0 small text-uppercase">
                            <i class="bi bi-chat-left-text-fill text-primary me-1"></i> Full Customer Query &amp; Requirements
                        </label>
                        <button type="button" id="modalCopyMessageBtn" class="btn btn-link btn-sm p-0 text-decoration-none text-muted small">
                            <i class="bi bi-clipboard me-1"></i> Copy Message
                        </button>
                    </div>
                    <div class="p-3 bg-light rounded-3 border text-secondary" style="white-space: pre-wrap; font-size: 0.95rem; line-height: 1.6; min-height: 90px; max-height: 240px; overflow-y: auto;" id="modalInqMessage">
                    </div>
                </div>

            </div>

            <!-- Modal Action Footer -->
            <div class="modal-footer bg-light border-top py-3 px-4 d-flex justify-content-between align-items-center">
                <button type="button" class="btn btn-outline-secondary px-3" data-bs-dismiss="modal">
                    Close
                </button>
                <div id="modalActionButtons" class="d-flex align-items-center gap-2">
                    <!-- Dynamic action buttons injected via JS depending on status -->
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('adminSearchInput');
    const rows = document.querySelectorAll('.inquiry-row');

    // Search filter
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            const query = this.value.trim().toLowerCase();
            rows.forEach(function(row) {
                const text = row.getAttribute('data-search') || '';
                if (!query || text.includes(query)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    }

    // Modal elements
    const detailModalEl = document.getElementById('inquiryDetailModal');
    const modalBs = detailModalEl ? new bootstrap.Modal(detailModalEl) : null;
    const modalInqId = document.getElementById('modalInqId');
    const modalInqDate = document.getElementById('modalInqDate');
    const modalInqStatusBadge = document.getElementById('modalInqStatusBadge');
    const modalInqReviewedWrapper = document.getElementById('modalInqReviewedWrapper');
    const modalInqReviewedAt = document.getElementById('modalInqReviewedAt');
    const modalInqName = document.getElementById('modalInqName');
    const modalInqTopic = document.getElementById('modalInqTopic');
    const modalInqPhone = document.getElementById('modalInqPhone');
    const modalPhoneCallBtn = document.getElementById('modalPhoneCallBtn');
    const modalCopyPhoneBtn = document.getElementById('modalCopyPhoneBtn');
    const modalInqEmail = document.getElementById('modalInqEmail');
    const modalEmailActions = document.getElementById('modalEmailActions');
    const modalGmailBtn = document.getElementById('modalGmailBtn');
    const modalMailtoBtn = document.getElementById('modalMailtoBtn');
    const modalCopyEmailBtn = document.getElementById('modalCopyEmailBtn');
    const modalInqMessage = document.getElementById('modalInqMessage');
    const modalCopyMessageBtn = document.getElementById('modalCopyMessageBtn');
    const modalActionButtons = document.getElementById('modalActionButtons');

    const csrfParam = '<?= Yii::$app->request->csrfParam ?>';
    const csrfToken = '<?= Yii::$app->request->getCsrfToken() ?>';
    const updateUrl = '<?= Url::to(['/site/update-inquiry-status']) ?>';
    const currentFilter = '<?= Html::encode($currentFilter) ?>';

    function setupCopyBtn(btn, textToCopy) {
        if (!btn) return;
        btn.onclick = function() {
            if (!textToCopy) return;
            navigator.clipboard.writeText(textToCopy).then(function() {
                const origHtml = btn.innerHTML;
                btn.innerHTML = '<i class="bi bi-check-lg text-success"></i>';
                setTimeout(function() { btn.innerHTML = origHtml; }, 1800);
            }).catch(function() {
                // Fallback for clipboard
                const ta = document.createElement('textarea');
                ta.value = textToCopy;
                document.body.appendChild(ta);
                ta.select();
                document.execCommand('copy');
                document.body.removeChild(ta);
                const origHtml = btn.innerHTML;
                btn.innerHTML = '<i class="bi bi-check-lg text-success"></i>';
                setTimeout(function() { btn.innerHTML = origHtml; }, 1800);
            });
        };
    }

    // Handle View Button Clicks
    document.querySelectorAll('.view-inquiry-btn').forEach(function(btn) {
        btn.addEventListener('click', function() {
            const inqId = this.getAttribute('data-id');
            const row = document.getElementById('inq-row-' + inqId);
            if (!row) return;

            let inq = {};
            try {
                inq = JSON.parse(row.getAttribute('data-inquiry') || '{}');
            } catch (e) {
                console.error('Invalid JSON for inquiry', e);
                return;
            }

            // Populate Modal Fields
            if (modalInqId) modalInqId.textContent = inq.id || '';
            if (modalInqDate) modalInqDate.textContent = 'Submitted: ' + (inq.created_at || 'Recently');
            if (modalInqName) modalInqName.textContent = inq.name || 'N/A';
            if (modalInqTopic) modalInqTopic.textContent = inq.topic || 'General Consultation';
            if (modalInqPhone) modalInqPhone.textContent = inq.phone ? ('+91 ' + inq.phone) : 'N/A';
            if (modalInqMessage) modalInqMessage.textContent = inq.message || 'Customer requested a direct consultation regarding solar systems. No additional message was entered.';

            // Phone Actions
            if (modalPhoneCallBtn) {
                modalPhoneCallBtn.href = inq.phone ? ('tel:' + inq.phone) : '#';
                modalPhoneCallBtn.style.display = inq.phone ? 'inline-block' : 'none';
            }
            setupCopyBtn(modalCopyPhoneBtn, inq.phone);

            // Email Actions
            if (inq.email) {
                if (modalInqEmail) modalInqEmail.textContent = inq.email;
                if (modalEmailActions) modalEmailActions.style.display = 'flex';
                if (modalGmailBtn) modalGmailBtn.href = 'https://mail.google.com/mail/?view=cm&fs=1&to=' + encodeURIComponent(inq.email);
                if (modalMailtoBtn) modalMailtoBtn.href = 'mailto:' + encodeURIComponent(inq.email);
                setupCopyBtn(modalCopyEmailBtn, inq.email);
            } else {
                if (modalInqEmail) modalInqEmail.textContent = 'Not provided';
                if (modalEmailActions) modalEmailActions.style.display = 'none';
            }

            setupCopyBtn(modalCopyMessageBtn, inq.message || '');

            // Status Badge & Timestamp
            const status = inq.status || 'pending';
            let badgeHtml = '';
            if (status === 'approved') {
                badgeHtml = '<span class="badge rounded-pill bg-success-subtle text-success border border-success-subtle px-3 py-1 fw-bold fs-6"><i class="bi bi-check-circle-fill me-1"></i> Genuine &amp; Approved</span>';
            } else if (status === 'rejected') {
                badgeHtml = '<span class="badge rounded-pill bg-danger-subtle text-danger border border-danger-subtle px-3 py-1 fw-bold fs-6"><i class="bi bi-x-circle-fill me-1"></i> Spam / Rejected</span>';
            } else {
                badgeHtml = '<span class="badge rounded-pill bg-warning-subtle text-warning-emphasis border border-warning-subtle px-3 py-1 fw-bold fs-6"><i class="bi bi-clock-history me-1"></i> Pending Review</span>';
            }
            if (modalInqStatusBadge) modalInqStatusBadge.innerHTML = badgeHtml;

            if (modalInqReviewedWrapper) {
                if (inq.reviewed_at) {
                    modalInqReviewedWrapper.style.display = 'block';
                    if (modalInqReviewedAt) modalInqReviewedAt.textContent = inq.reviewed_at;
                } else {
                    modalInqReviewedWrapper.style.display = 'none';
                }
            }

            // Build Modal Action Buttons
            if (modalActionButtons) {
                let actionHtml = '';
                if (status === 'pending') {
                    actionHtml += '<form method="post" action="' + updateUrl + '" class="d-inline">' +
                        '<input type="hidden" name="' + csrfParam + '" value="' + csrfToken + '">' +
                        '<input type="hidden" name="id" value="' + inq.id + '">' +
                        '<input type="hidden" name="status" value="approved">' +
                        '<input type="hidden" name="filter" value="' + currentFilter + '">' +
                        '<button type="submit" class="btn btn-success fw-bold px-3"><i class="bi bi-check-lg me-1"></i> Approve Lead</button>' +
                        '</form>';
                    actionHtml += '<form method="post" action="' + updateUrl + '" class="d-inline">' +
                        '<input type="hidden" name="' + csrfParam + '" value="' + csrfToken + '">' +
                        '<input type="hidden" name="id" value="' + inq.id + '">' +
                        '<input type="hidden" name="status" value="rejected">' +
                        '<input type="hidden" name="filter" value="' + currentFilter + '">' +
                        '<button type="submit" class="btn btn-danger fw-bold px-3"><i class="bi bi-x-lg me-1"></i> Mark as Spam</button>' +
                        '</form>';
                } else if (status === 'approved') {
                    actionHtml += '<form method="post" action="' + updateUrl + '" class="d-inline">' +
                        '<input type="hidden" name="' + csrfParam + '" value="' + csrfToken + '">' +
                        '<input type="hidden" name="id" value="' + inq.id + '">' +
                        '<input type="hidden" name="status" value="pending">' +
                        '<input type="hidden" name="filter" value="' + currentFilter + '">' +
                        '<button type="submit" class="btn btn-outline-secondary px-3"><i class="bi bi-arrow-counterclockwise me-1"></i> Reopen / Move to Pending</button>' +
                        '</form>';
                } else if (status === 'rejected') {
                    actionHtml += '<form method="post" action="' + updateUrl + '" class="d-inline">' +
                        '<input type="hidden" name="' + csrfParam + '" value="' + csrfToken + '">' +
                        '<input type="hidden" name="id" value="' + inq.id + '">' +
                        '<input type="hidden" name="status" value="pending">' +
                        '<input type="hidden" name="filter" value="' + currentFilter + '">' +
                        '<button type="submit" class="btn btn-outline-secondary px-3"><i class="bi bi-arrow-counterclockwise me-1"></i> Restore to Pending</button>' +
                        '</form>';
                }
                modalActionButtons.innerHTML = actionHtml;
            }

            if (modalBs) modalBs.show();
        });
    });
});
</script>
