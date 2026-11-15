<?php

declare(strict_types=1);

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\helpers\Url;

$this->title = 'Admin Portal Login - Solar Energy';
$this->params['breadcrumbs'][] = $this->title;

// Prevent search engine indexing and caching of admin login
$this->registerMetaTag(['name' => 'robots', 'content' => 'noindex, nofollow, noarchive']);

$htmlIcon = <<<HTML
{label}<div class="input-group"><span class="input-group-text bg-light border-end-0 text-muted">%s</span>{input}</div>{error}{hint}
HTML;
$labelOptions = ['class' => 'form-label fw-bold text-navy small mb-1'];
?>

<div class="site-login d-flex align-items-center justify-content-center py-5 bg-light min-vh-100">
    <div class="card border-0 shadow-lg rounded-4 overflow-hidden" style="max-width: 860px; width: 100%;">
        <div class="row g-0">

            <!-- Brand panel -->
            <div class="col-md-5 d-none d-md-flex text-white p-4 p-lg-5 flex-column justify-content-between position-relative"
                 style="background: linear-gradient(135deg, #0a1128 0%, #1c2d5a 100%);">
                <div>
                    <a href="<?= Yii::$app->homeUrl ?>" class="d-inline-flex align-items-center gap-2 text-decoration-none">
                        <img src="<?= Url::to('@web/images/logo.png') ?>" alt="Solar Energy" height="42" class="solar-logo-img">
                        <div class="solar-brand-text">
                            <span class="brand-solar text-white">Solar</span>
                            <span class="brand-energy" style="color: #f97316;">Energy</span>
                        </div>
                    </a>
                </div>

                <div class="my-5">
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-white-10 text-orange small fw-bold mb-3 border border-white-15">
                        <i class="bi bi-shield-lock-fill"></i>
                        <span>RESTRICTED ACCESS</span>
                    </div>
                    <h2 class="fw-bold text-white mb-2" style="font-size: 1.75rem;">
                        Admin Review Portal
                    </h2>
                    <p class="text-white-75 small mb-0" style="line-height: 1.6;">
                        Securely manage, verify genuine customer leads, and review "Talk to Our Expert" inquiries.
                    </p>
                </div>

                <div class="small text-white-50">
                    <i class="bi bi-geo-alt-fill me-1 text-orange"></i> Bhubaneswar, Odisha
                </div>
            </div>

            <!-- Form panel -->
            <div class="col-md-7 bg-white p-4 p-lg-5">
                <div class="text-center mb-4">
                    <!-- Mobile Brand Logo -->
                    <div class="d-md-none mb-3">
                        <a href="<?= Yii::$app->homeUrl ?>" class="d-inline-flex align-items-center gap-2 text-decoration-none">
                            <img src="<?= Url::to('@web/images/logo.png') ?>" alt="Solar Energy" height="34" class="solar-logo-img">
                            <div class="solar-brand-text">
                                <span class="brand-solar text-navy">Solar</span>
                                <span class="brand-energy" style="color: #f97316;">Energy</span>
                            </div>
                        </a>
                    </div>
                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle mb-3 shadow-sm"
                         style="width: 56px; height: 56px; background-color: #ffedd5; color: #ea580c; font-size: 1.5rem;">
                        <i class="bi bi-person-lock"></i>
                    </div>
                    <h3 class="fw-bold text-navy mb-1" style="font-size: 1.45rem;">Sign In to Continue</h3>
                    <p class="text-muted small mb-0">Authorized Solar Energy administrator credentials required.</p>
                </div>

                <?php $form = ActiveForm::begin([
                    'id' => 'login-form',
                    'enableClientValidation' => true,
                ]); ?>

                <div class="mb-3">
                    <?= $form->field($model, 'username', [
                        'options' => ['class' => 'mb-0'],
                        'template' => sprintf($htmlIcon, '<i class="bi bi-person-fill"></i>'),
                        'inputOptions' => [
                            'class' => 'form-control border-start-0 ps-1',
                            'placeholder' => 'Enter authorized username or email',
                            'autofocus' => true,
                        ],
                    ])->textInput()->label('Username or Email', $labelOptions) ?>
                </div>

                <div class="mb-3">
                    <?= $form->field($model, 'password', [
                        'options' => ['class' => 'mb-0'],
                        'template' => sprintf($htmlIcon, '<i class="bi bi-key-fill"></i>'),
                        'inputOptions' => [
                            'class' => 'form-control border-start-0 ps-1',
                            'placeholder' => 'Enter password',
                        ],
                    ])->passwordInput()->label('Password', $labelOptions) ?>
                </div>

                <div class="mb-4 d-flex justify-content-between align-items-center">
                    <?= $form->field($model, 'rememberMe', [
                        'options' => ['class' => 'mb-0'],
                    ])->checkbox(['class' => 'form-check-input']) ?>
                </div>

                <div class="d-grid mb-3">
                    <?= Html::submitButton(
                        '<i class="bi bi-box-arrow-in-right me-2"></i>Sign In to Admin Panel',
                        [
                            'class' => 'btn btn-orange-hero py-2 fw-bold shadow-sm',
                            'name' => 'login-button',
                        ],
                    ) ?>
                </div>

                <?php ActiveForm::end(); ?>

                <div class="text-center mt-3 pt-2 border-top">
                    <a href="<?= Url::to(['/site/index']) ?>" class="text-decoration-none small text-muted hover-orange">
                        <i class="bi bi-arrow-left me-1"></i> Return to Main Website
                    </a>
                </div>

            </div>

        </div>
    </div>
</div>
