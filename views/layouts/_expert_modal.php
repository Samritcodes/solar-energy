<?php

declare(strict_types=1);

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;
?>

<!-- =========================================================================
     MODAL: TALK TO OUR EXPERT
     ========================================================================= -->
<div class="modal fade" id="expertModal" tabindex="-1" aria-labelledby="expertModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width: 500px;">
        <div class="modal-content border-0 rounded-4 shadow-lg overflow-hidden position-relative">
            
            <!-- Close Button for Success Screen -->
            <button type="button" 
                    id="expertModalSuccessCloseBtn" 
                    class="btn-close position-absolute top-0 end-0 m-3 d-none" 
                    data-bs-dismiss="modal" 
                    aria-label="Close"
                    style="z-index: 10;"></button>

            <!-- Modal Header (Visible during form fill, hidden on success) -->
            <div class="modal-header border-0 px-4 pt-4 pb-3" id="expertModalHeader" style="background: linear-gradient(135deg, #071a2e 0%, #0f2c4c 100%); color: #ffffff;">
                <div>
                    <h4 class="modal-title fw-bold text-white mb-1" id="expertModalLabel" style="font-size: 1.35rem;">
                        Talk to Our <span style="color: #f97316;">Solar Expert</span>
                    </h4>
                    <p class="text-white-50 small mb-0">
                        Share your requirement and our solar expert will get in touch with you.
                    </p>
                </div>
                <button type="button" class="btn-close btn-close-white align-self-start mt-1" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body: Form / Clean Success State -->
            <div class="modal-body p-4 bg-white position-relative">
                
                <!-- 1. Inquiry Form View -->
                <form id="expertInquiryForm" class="needs-validation" novalidate>
                    <div class="row g-3">
                        
                        <!-- Full Name -->
                        <div class="col-12">
                            <label for="expertName" class="form-label small fw-bold text-navy mb-1">
                                Full Name <span class="text-danger">*</span>
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0 text-muted">
                                    <i class="bi bi-person-fill"></i>
                                </span>
                                <input type="text"
                                       class="form-control border-start-0 ps-1"
                                       id="expertName"
                                       name="expert_name"
                                       placeholder="Enter your full name"
                                       minlength="2"
                                       maxlength="60"
                                       required>
                            </div>
                        </div>

                        <!-- Phone Number with +91 indicator and 10-digit lock -->
                        <div class="col-12">
                            <label for="expertPhone" class="form-label small fw-bold text-navy mb-1">
                                Mobile Number <span class="text-danger">*</span>
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0 fw-bold text-navy" style="font-size: 0.88rem;">
                                    +91
                                </span>
                                <input type="tel"
                                       class="form-control border-start-0 ps-2"
                                       id="expertPhone"
                                       name="expert_phone"
                                       placeholder="10-digit mobile number"
                                       maxlength="10"
                                       inputmode="numeric"
                                       pattern="[6-9][0-9]{9}"
                                       required>
                            </div>
                            <div class="form-text text-muted" style="font-size: 0.74rem;">
                                Enter genuine 10-digit Indian mobile number (starts with 6, 7, 8, or 9).
                            </div>
                        </div>

                        <!-- Anti-bot Security Honeypot (Hidden from genuine users) -->
                        <div class="d-none" aria-hidden="true">
                            <input type="text" name="security_hp_check" id="securityHpCheck" tabindex="-1" autocomplete="off">
                        </div>

                        <!-- Email Address -->
                        <div class="col-12">
                            <label for="expertEmail" class="form-label small fw-bold text-navy mb-1">
                                Email Address <span class="text-muted fw-normal">(Optional)</span>
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0 text-muted">
                                    <i class="bi bi-envelope-fill"></i>
                                </span>
                                <input type="email"
                                       class="form-control border-start-0 ps-1"
                                       id="expertEmail"
                                       name="expert_email"
                                       placeholder="name@example.com">
                            </div>
                        </div>

                        <!-- Interested Solution / Topic -->
                        <div class="col-12">
                            <label for="expertTopic" class="form-label small fw-bold text-navy mb-1">
                                Interested Solution <span class="text-danger">*</span>
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0 text-muted">
                                    <i class="bi bi-sun-fill text-warning"></i>
                                </span>
                                <select class="form-select border-start-0 ps-1" id="expertTopic" name="expert_topic" required>
                                    <option value="Rooftop Solar (PM Surya Ghar)">PM Surya Ghar Rooftop Solar</option>
                                    <option value="Solar Panels">Solar Panels</option>
                                    <option value="Solar Inverters">Solar Inverters</option>
                                    <option value="Solar Batteries">Solar Batteries</option>
                                    <option value="Solar Water Pump">Solar Water Pump</option>
                                    <option value="Solar Water Heater">Solar Water Heater</option>
                                    <option value="Solar Street Lights">Solar Street Lights</option>
                                    <option value="On-Grid Solar System">On-Grid Solar System</option>
                                    <option value="Off-Grid Solar System">Off-Grid Solar System</option>
                                    <option value="Hybrid Solar System">Hybrid Solar System</option>
                                    <option value="Commercial / Industrial Solar">Commercial / Industrial Solar</option>
                                    <option value="General Consultation">General Solar Consultation</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>

                        <!-- Short Message / Requirement -->
                        <div class="col-12">
                            <label for="expertMessage" class="form-label small fw-bold text-navy mb-1">
                                Your Query / Roof Details <span class="text-muted fw-normal">(Optional)</span>
                            </label>
                            <textarea class="form-control"
                                      id="expertMessage"
                                      name="expert_message"
                                      rows="3"
                                      placeholder="e.g. Monthly electricity bill is approx ₹2,500. Need guidance on 3kW system."></textarea>
                        </div>

                        <!-- Submission Alert / Status -->
                        <div class="col-12 d-none" id="expertFormAlert">
                            <div class="alert alert-danger py-2 px-3 small mb-0 d-flex align-items-center gap-2">
                                <i class="bi bi-exclamation-triangle-fill flex-shrink-0"></i>
                                <span id="expertFormAlertText"></span>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="col-12 pt-2">
                            <button type="submit" id="expertSubmitBtn" class="btn btn-orange-hero w-100 py-2 fw-bold shadow-sm d-flex align-items-center justify-content-center gap-2">
                                <span id="expertSubmitText">Submit Enquiry &amp; Call Me</span>
                                <i class="bi bi-arrow-right" id="expertSubmitIcon"></i>
                                <span class="spinner-border spinner-border-sm d-none" id="expertSubmitSpinner" role="status" aria-hidden="true"></span>
                            </button>
                        </div>

                    </div>
                </form>

                <!-- 2. Clean, Subtle Success View (Only Thank You, No Technical Jargon) -->
                <div id="expertSuccessView" class="text-center py-4 px-2 d-none">
                    <div class="mx-auto mb-3 d-flex align-items-center justify-content-center rounded-circle shadow-sm"
                         style="width: 72px; height: 72px; background-color: #dcfce7; color: #16a34a; font-size: 2.4rem;">
                        <i class="bi bi-check-lg"></i>
                    </div>
                    <h3 class="fw-bold text-navy mb-2" style="font-size: 1.5rem;">Thank You!</h3>
                    <p class="text-muted mb-4" style="font-size: 0.95rem; max-width: 360px; margin-left: auto; margin-right: auto; line-height: 1.5;">
                        We have received your enquiry. Our solar expert will review your requirements and call you shortly.
                    </p>
                    <div class="d-flex justify-content-center gap-2 flex-wrap mb-3">
                        <button type="button" class="btn btn-outline-secondary px-4 py-2" data-bs-dismiss="modal">
                            <span>Close</span>
                        </button>
                        <a href="<?= Html::encode(Yii::$app->params['whatsappUrl'] ?? 'https://wa.me/918658868780') ?>"
                           target="_blank" rel="noopener noreferrer"
                           class="btn btn-success px-3 py-2 fw-semibold d-inline-flex align-items-center gap-2 shadow-sm" style="background-color: #25D366; border-color: #25D366;">
                            <i class="bi bi-whatsapp"></i> Chat on WhatsApp
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const expertModalEl = document.getElementById('expertModal');
    const headerEl = document.getElementById('expertModalHeader');
    const successCloseBtn = document.getElementById('expertModalSuccessCloseBtn');
    const form = document.getElementById('expertInquiryForm');
    const successView = document.getElementById('expertSuccessView');
    const submitBtn = document.getElementById('expertSubmitBtn');
    const submitText = document.getElementById('expertSubmitText');
    const submitIcon = document.getElementById('expertSubmitIcon');
    const submitSpinner = document.getElementById('expertSubmitSpinner');
    const alertBox = document.getElementById('expertFormAlert');
    const alertText = document.getElementById('expertFormAlertText');
    const topicSelect = document.getElementById('expertTopic');
    const phoneInput = document.getElementById('expertPhone');

    // Restrict phone input to numbers only
    if (phoneInput) {
        phoneInput.addEventListener('input', function() {
            this.value = this.value.replace(/\D/g, '').slice(0, 10);
        });
    }

    function showFormError(msg) {
        if (alertBox && alertText) {
            alertText.textContent = msg;
            alertBox.classList.remove('d-none');
            alertBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }
    }

    function hideFormError() {
        if (alertBox) alertBox.classList.add('d-none');
    }

    // Pre-fill topic when modal opens if triggered with data-topic
    if (expertModalEl) {
        expertModalEl.addEventListener('show.bs.modal', function(event) {
            const trigger = event.relatedTarget;
            if (trigger) {
                const topic = trigger.getAttribute('data-topic');
                if (topic && topicSelect) {
                    let matched = false;
                    for (let i = 0; i < topicSelect.options.length; i++) {
                        if (topicSelect.options[i].value.toLowerCase() === topic.toLowerCase() ||
                            topicSelect.options[i].text.toLowerCase().includes(topic.toLowerCase())) {
                            topicSelect.selectedIndex = i;
                            matched = true;
                            break;
                        }
                    }
                    if (!matched) {
                        const newOpt = new Option(topic, topic, true, true);
                        topicSelect.add(newOpt);
                    }
                }
            }
        });

        // Reset view when modal is closed
        expertModalEl.addEventListener('hidden.bs.modal', function() {
            if (form && successView) {
                form.reset();
                form.classList.remove('d-none');
                successView.classList.add('d-none');
                if (headerEl) headerEl.classList.remove('d-none');
                if (successCloseBtn) successCloseBtn.classList.add('d-none');
                hideFormError();
                if (submitBtn) submitBtn.disabled = false;
                if (submitText) submitText.textContent = 'Submit Enquiry & Call Me';
                if (submitIcon) submitIcon.classList.remove('d-none');
                if (submitSpinner) submitSpinner.classList.add('d-none');
            }
        });
    }

    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            hideFormError();

            const name = (document.getElementById('expertName') || {}).value.trim();
            const rawPhone = (document.getElementById('expertPhone') || {}).value.trim();
            const email = (document.getElementById('expertEmail') || {}).value.trim();
            const topic = (document.getElementById('expertTopic') || {}).value;
            const message = (document.getElementById('expertMessage') || {}).value.trim();
            const honeypot = (document.getElementById('securityHpCheck') || {}).value;

            // Honeypot check
            if (honeypot) {
                showFormError('Security validation failed.');
                return;
            }

            // Name validation
            if (!name || name.length < 2) {
                showFormError('Please enter your full name (at least 2 letters).');
                return;
            }
            if (!/^[a-zA-Z\s\.\-']{2,60}$/.test(name)) {
                showFormError('Name contains invalid characters. Please use letters only.');
                return;
            }

            // High Security Phone Validation (Indian Mobile Format)
            const digits = rawPhone.replace(/\D/g, '');
            if (digits.length !== 10) {
                showFormError('Phone number must be exactly 10 digits.');
                return;
            }
            if (!/^[6-9]/.test(digits)) {
                showFormError('Invalid Indian mobile number. Mobile numbers must start with 6, 7, 8, or 9.');
                return;
            }
            if (/^(\d)\1{9}$/.test(digits)) {
                showFormError('Invalid number. Repeated digit sequence (e.g. 9999999999) is not accepted.');
                return;
            }
            const fakeNumbers = ['1234567890', '0123456789', '9876543210', '9876543211', '9012345678', '8901234567'];
            if (fakeNumbers.includes(digits)) {
                showFormError('Dummy test sequence detected. Please enter your real active phone number.');
                return;
            }

            // Email format validation (if provided)
            if (email && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                showFormError('Please enter a valid email address (or leave it blank).');
                return;
            }

            if (submitBtn) submitBtn.disabled = true;
            if (submitText) submitText.textContent = 'Verifying & Submitting...';
            if (submitIcon) submitIcon.classList.add('d-none');
            if (submitSpinner) submitSpinner.classList.remove('d-none');

            // Dispatch payload to backend Admin Panel endpoint
            const payload = {
                name: name,
                phone: digits,
                email: email,
                topic: topic,
                message: message,
                security_hp_check: honeypot
            };

            fetch('<?= Url::to(['/site/submit-expert-inquiry']) ?>', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify(payload)
            })
            .then(function(res) { return res.json(); })
            .then(function(data) {
                if (data && data.success) {
                    // Show success screen ONLY when server confirms high security verification passed
                    if (headerEl) headerEl.classList.add('d-none');
                    if (successCloseBtn) successCloseBtn.classList.remove('d-none');
                    form.classList.add('d-none');
                    successView.classList.remove('d-none');
                } else {
                    showFormError((data && data.message) ? data.message : 'Validation failed. Please verify your details.');
                }
            })
            .catch(function(err) {
                showFormError('Network connection issue. Please check your connection and try again.');
            })
            .finally(function() {
                if (submitBtn) submitBtn.disabled = false;
                if (submitText) submitText.textContent = 'Submit Enquiry & Call Me';
                if (submitIcon) submitIcon.classList.remove('d-none');
                if (submitSpinner) submitSpinner.classList.add('d-none');
            });
        });
    }
});
</script>
