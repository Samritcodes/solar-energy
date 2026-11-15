<?php

declare(strict_types=1);

use yii\helpers\Html;

// Do not render floating widget on admin dashboard or login page
$controllerId = Yii::$app->controller->id ?? '';
$actionId = Yii::$app->controller->action->id ?? '';
if ($controllerId === 'site' && in_array($actionId, ['admin', 'login', 'update-inquiry-status'], true)) {
    return;
}

$whatsappUrl = Yii::$app->params['whatsappUrl'] ?? (Yii::$app->params['socials']['whatsapp'] ?? 'https://wa.me/918658868780?text=Hello%21+I+am+interested+in+Solar+Energy+solutions.');
?>

<!-- Floating WhatsApp Quick-Chat Widget -->
<div class="floating-whatsapp-widget" id="floatingWhatsappWidget">
    <a href="<?= Html::encode($whatsappUrl) ?>"
       target="_blank"
       rel="noopener noreferrer"
       class="floating-whatsapp-link"
       aria-label="Chat with Solar Energy on WhatsApp"
       title="Chat with Solar Energy on WhatsApp">
        
        <div class="whatsapp-pill shadow-sm">
            <span class="whatsapp-online-dot"></span>
            <span class="whatsapp-pill-text">Chat with us</span>
        </div>

        <div class="whatsapp-button shadow">
            <i class="bi bi-whatsapp"></i>
            <span class="whatsapp-pulse-ring"></span>
        </div>
    </a>
</div>
