<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Our Services - Solar Energy';
$this->params['meta_description'] = 'From rooftop solar to complete solar solutions, we help homes, businesses and communities make the switch to clean and reliable energy.';
$this->params['meta_keywords'] = 'Solar Services, On-Grid Solar, Off-Grid Solar, Hybrid Solar, Rooftop Solar, Solar Street Lighting, Solar Water Pump, Solar Water Heating, Solar EV Charging, PM Surya Ghar';
?>

<div class="services-page">

    <!-- =========================================================================
         SECTION 1: HERO SECTION
         ========================================================================= -->
    <section class="services-hero-section position-relative overflow-hidden">
        <div class="services-hero-bg-layer" role="img" aria-label="Solar engineer overlooking city skyline at sunrise"></div>
        <div class="services-hero-fade-overlay"></div>

        <div class="container position-relative z-2">
            <div class="row align-items-center min-vh-services-hero py-5">
                <div class="col-lg-6 col-xl-6 services-hero-left">
                    <div class="about-eyebrow mb-2">
                        <span class="eyebrow-dash"></span>
                        <span class="eyebrow-label">OUR SERVICES</span>
                    </div>

                    <h1 class="services-hero-title mb-3">
                        Solar Solutions<br>
                        for a <span class="text-orange">Brighter Future</span>
                    </h1>

                    <p class="services-hero-desc mb-4">
                        From rooftop solar to complete solar solutions, we help homes, businesses and communities make the switch to clean and reliable energy.
                    </p>

                    <div class="services-hero-cta d-flex flex-wrap align-items-center gap-3">
                        <a href="#complete-solutions" class="btn btn-orange-hero">
                            <span>Explore Our Services</span>
                        </a>
                        <button type="button" class="btn btn-outline-services-hero" data-bs-toggle="modal" data-bs-target="#expertModal" data-topic="General Consultation">
                            <span>Talk to Our Expert</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         SECTION 2: COMPLETE SOLAR SOLUTIONS
         ========================================================================= -->
    <section id="complete-solutions" class="services-solutions-section py-5">
        <div class="container py-lg-2">
            <!-- Section Header Row -->
            <div class="row align-items-end justify-content-between mb-4 pb-2 g-3">
                <div class="col-lg-6">
                    <div class="about-eyebrow mb-2">
                        <span class="eyebrow-dash"></span>
                        <span class="eyebrow-label">OUR SERVICES</span>
                    </div>
                    <h2 class="services-section-heading mb-0">Complete Solar Solutions</h2>
                </div>
                <div class="col-lg-5">
                    <p class="services-header-subtext mb-0">
                        We provide a range of solar solutions for homes, businesses and communities. Choose the right solution based on your energy needs.
                    </p>
                </div>
            </div>

            <!-- Row 1: 3 Primary Solar System Cards -->
            <div class="row g-4 mb-4">
                <!-- Card 1: On-Grid Solar System -->
                <div class="col-lg-4 col-md-6">
                    <a href="<?= Url::to(['/site/contact', 'topic' => 'On-Grid Solar System']) ?>" class="service-solution-card service-card-lg h-100 text-decoration-none">
                        <div class="service-card-img-wrap">
                            <img src="<?= Url::to('@web/images/hero_solar_house.webp') ?>" 
                                 alt="On-Grid Solar System" 
                                 class="service-card-img"
                                 loading="lazy">
                        </div>
                        <div class="service-card-body">
                            <div class="service-card-icon-badge">
                                <div class="service-card-icon-inner">
                                    <!-- House with solar/window outline icon -->
                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M3 10.5L12 3l9 7.5"></path>
                                        <path d="M5 9.5V19a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5"></path>
                                        <rect x="9" y="12" width="6" height="5" rx="0.5"></rect>
                                        <line x1="12" y1="12" x2="12" y2="17"></line>
                                        <line x1="9" y1="14.5" x2="15" y2="14.5"></line>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="service-card-title">On-Grid Solar System</h3>
                            <p class="service-card-desc mb-0">
                                Grid-connected solar systems to reduce your electricity bills.
                            </p>
                        </div>
                    </a>
                </div>

                <!-- Card 2: Off-Grid Solar System -->
                <div class="col-lg-4 col-md-6">
                    <a href="<?= Url::to(['/site/contact', 'topic' => 'Off-Grid Solar System']) ?>" class="service-solution-card service-card-lg h-100 text-decoration-none">
                        <div class="service-card-img-wrap">
                            <img src="<?= Url::to('@web/images/services_offgrid_solar.webp') ?>" 
                                 alt="Off-Grid Solar System" 
                                 class="service-card-img"
                                 loading="lazy">
                        </div>
                        <div class="service-card-body">
                            <div class="service-card-icon-badge">
                                <div class="service-card-icon-inner">
                                    <!-- Battery with +/- terminals outline icon -->
                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="3" y="7" width="18" height="13" rx="2"></rect>
                                        <path d="M7 7V5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2"></path>
                                        <path d="M13 7V5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2"></path>
                                        <line x1="8" y1="13.5" x2="10" y2="13.5"></line>
                                        <line x1="9" y1="12.5" x2="9" y2="14.5"></line>
                                        <line x1="14" y1="13.5" x2="16" y2="13.5"></line>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="service-card-title">Off-Grid Solar System</h3>
                            <p class="service-card-desc mb-0">
                                Independent solar systems with battery storage for reliable power.
                            </p>
                        </div>
                    </a>
                </div>

                <!-- Card 3: Hybrid Solar System -->
                <div class="col-lg-4 col-md-12">
                    <a href="<?= Url::to(['/site/contact', 'topic' => 'Hybrid Solar System']) ?>" class="service-solution-card service-card-lg h-100 text-decoration-none">
                        <div class="service-card-img-wrap">
                            <img src="<?= Url::to('@web/images/services_hybrid_solar.webp') ?>" 
                                 alt="Hybrid Solar System" 
                                 class="service-card-img"
                                 loading="lazy">
                        </div>
                        <div class="service-card-body">
                            <div class="service-card-icon-badge">
                                <div class="service-card-icon-inner">
                                    <!-- Lightning bolt outline icon -->
                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                        <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="service-card-title">Hybrid Solar System</h3>
                            <p class="service-card-desc mb-0">
                                Combination of solar, grid and battery backup for uninterrupted power.
                            </p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Row 2: 5 Specialized Solar Service Cards -->
            <div class="services-five-col-grid">
                <!-- Card 4: Rooftop Solar -->
                <a href="<?= Url::to(['/site/contact', 'topic' => 'Rooftop Solar Installation']) ?>" class="service-solution-card service-card-sm h-100 text-decoration-none">
                    <div class="service-card-img-wrap">
                        <img src="<?= Url::to('@web/images/solar_panels.webp') ?>" 
                             alt="Rooftop Solar" 
                             class="service-card-img"
                             loading="lazy">
                    </div>
                    <div class="service-card-body">
                        <div class="service-card-icon-badge">
                            <div class="service-card-icon-inner">
                                <!-- Solar panel grid outline icon -->
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="4 6 20 6 22 16 2 16 4 6"></polygon>
                                    <line x1="3" y1="11" x2="21" y2="11"></line>
                                    <line x1="9" y1="6" x2="8" y2="16"></line>
                                    <line x1="15" y1="6" x2="16" y2="16"></line>
                                    <line x1="12" y1="16" x2="12" y2="20"></line>
                                    <line x1="8" y1="20" x2="16" y2="20"></line>
                                </svg>
                            </div>
                        </div>
                        <h3 class="service-card-title">Rooftop Solar</h3>
                        <p class="service-card-desc mb-0">
                            Solar solutions for residential, commercial and institutional buildings.
                        </p>
                    </div>
                </a>

                <!-- Card 5: Solar Street Lighting -->
                <a href="<?= Url::to(['/site/contact', 'topic' => 'Solar Street Lighting']) ?>" class="service-solution-card service-card-sm h-100 text-decoration-none">
                    <div class="service-card-img-wrap">
                        <img src="<?= Url::to('@web/images/services_street_lighting.webp') ?>" 
                             alt="Solar Street Lighting" 
                             class="service-card-img"
                             loading="lazy">
                    </div>
                    <div class="service-card-body">
                        <div class="service-card-icon-badge">
                            <div class="service-card-icon-inner">
                                <!-- Street lamp outline icon -->
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 20V6"></path>
                                    <path d="M9 20h6"></path>
                                    <path d="M6 6h12"></path>
                                    <path d="M8 6l1 3h6l1-3"></path>
                                    <line x1="7" y1="4" x2="17" y2="4"></line>
                                </svg>
                            </div>
                        </div>
                        <h3 class="service-card-title">Solar Street Lighting</h3>
                        <p class="service-card-desc mb-0">
                            Solar-powered street lights for roads, societies, campuses and public spaces.
                        </p>
                    </div>
                </a>

                <!-- Card 6: Solar Water Pump -->
                <a href="<?= Url::to(['/site/contact', 'topic' => 'Solar Water Pump']) ?>" class="service-solution-card service-card-sm h-100 text-decoration-none">
                    <div class="service-card-img-wrap">
                        <img src="<?= Url::to('@web/images/services_water_pump.webp') ?>" 
                             alt="Solar Water Pump" 
                             class="service-card-img"
                             loading="lazy">
                    </div>
                    <div class="service-card-body">
                        <div class="service-card-icon-badge">
                            <div class="service-card-icon-inner">
                                <!-- Water droplet outline icon -->
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="service-card-title">Solar Water Pump</h3>
                        <p class="service-card-desc mb-0">
                            Solar pumping solutions for agriculture, irrigation and water supply.
                        </p>
                    </div>
                </a>

                <!-- Card 7: Solar Water Heating -->
                <a href="<?= Url::to(['/site/contact', 'topic' => 'Solar Water Heating']) ?>" class="service-solution-card service-card-sm h-100 text-decoration-none">
                    <div class="service-card-img-wrap">
                        <img src="<?= Url::to('@web/images/services_water_heating.webp') ?>" 
                             alt="Solar Water Heating" 
                             class="service-card-img"
                             loading="lazy">
                    </div>
                    <div class="service-card-body">
                        <div class="service-card-icon-badge">
                            <div class="service-card-icon-inner">
                                <!-- Rising heat waves outline icon -->
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M8 18c0-2.5 2-2.5 2-5s-2-2.5-2-5 2-2.5 2-5"></path>
                                    <path d="M12 18c0-2.5 2-2.5 2-5s-2-2.5-2-5 2-2.5 2-5"></path>
                                    <path d="M16 18c0-2.5 2-2.5 2-5s-2-2.5-2-5 2-2.5 2-5"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="service-card-title">Solar Water Heating</h3>
                        <p class="service-card-desc mb-0">
                            Use solar energy to heat water for homes, hotels, institutions and industries.
                        </p>
                    </div>
                </a>

                <!-- Card 8: Solar EV Charging -->
                <a href="<?= Url::to(['/site/contact', 'topic' => 'Solar EV Charging']) ?>" class="service-solution-card service-card-sm h-100 text-decoration-none">
                    <div class="service-card-img-wrap">
                        <img src="<?= Url::to('@web/images/services_ev_charging.webp') ?>" 
                             alt="Solar EV Charging" 
                             class="service-card-img"
                             loading="lazy">
                    </div>
                    <div class="service-card-body">
                        <div class="service-card-icon-badge">
                            <div class="service-card-icon-inner">
                                <!-- Electric car front outline icon -->
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 11l2-5h10l2 5"></path>
                                    <rect x="3" y="11" width="18" height="6" rx="2"></rect>
                                    <circle cx="7" cy="14" r="1"></circle>
                                    <circle cx="17" cy="14" r="1"></circle>
                                    <path d="M5 17v2"></path>
                                    <path d="M19 17v2"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="service-card-title">Solar EV Charging</h3>
                        <p class="service-card-desc mb-0">
                            Solar-powered charging solutions for electric vehicles.
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         SECTION 3: GOVERNMENT SCHEME SUPPORT (PM SURYA GHAR SOLAR SOLUTION)
         ========================================================================= -->
    <section class="services-scheme-section py-5">
        <div class="container py-lg-2">
            <div class="row align-items-center g-4 g-lg-5">
                <!-- Left Column: Scheme Info & CTA -->
                <div class="col-lg-4">
                    <div class="about-eyebrow mb-2">
                        <span class="eyebrow-dash"></span>
                        <span class="eyebrow-label">GOVERNMENT SCHEME SUPPORT</span>
                    </div>

                    <h2 class="services-section-heading mb-3">
                        PM Surya Ghar Solar Solution
                    </h2>

                    <p class="services-scheme-desc mb-4">
                        We help you install rooftop solar under the PM Surya Ghar scheme with complete guidance, from application to installation and grid connection.
                    </p>

                    <a href="<?= Url::to(['/site/index', '#' => 'pm-surya-ghar']) ?>" class="btn btn-orange-hero">
                        <span>Know More About PM Surya Ghar</span>
                    </a>
                </div>

                <!-- Center Column: Rooftop Solar House Image -->
                <div class="col-lg-4">
                    <div class="services-scheme-img-frame">
                        <img src="<?= Url::to('@web/images/hero_solar_house.webp') ?>" 
                             alt="PM Surya Ghar Rooftop Solar Home" 
                             class="img-fluid services-scheme-img"
                             loading="lazy">
                    </div>
                </div>

                <!-- Right Column: 4 Scheme Support Steps -->
                <div class="col-lg-4">
                    <div class="services-scheme-list">
                        <!-- Item 1: Check Eligibility -->
                        <a href="<?= Url::to(['/site/index', '#' => 'faq']) ?>" class="scheme-list-item text-decoration-none">
                            <div class="scheme-item-icon">
                                <i class="bi bi-clipboard-check"></i>
                            </div>
                            <div class="scheme-item-content">
                                <h3 class="scheme-item-title">Check Eligibility</h3>
                                <p class="scheme-item-desc mb-0">Understand if you are eligible under the scheme.</p>
                            </div>
                        </a>

                        <!-- Item 2: Application Support -->
                        <a href="<?= Url::to(['/site/contact', 'topic' => 'PM Surya Ghar Rooftop Solar Subsidy']) ?>" class="scheme-list-item text-decoration-none">
                            <div class="scheme-item-icon">
                                <i class="bi bi-file-earmark-text"></i>
                            </div>
                            <div class="scheme-item-content">
                                <h3 class="scheme-item-title">Application Support</h3>
                                <p class="scheme-item-desc mb-0">Guidance with documents and online application.</p>
                            </div>
                        </a>

                        <!-- Item 3: Installation & Inspection -->
                        <a href="<?= Url::to(['/site/contact', 'topic' => 'Rooftop Solar Installation']) ?>" class="scheme-list-item text-decoration-none">
                            <div class="scheme-item-icon">
                                <i class="bi bi-tools"></i>
                            </div>
                            <div class="scheme-item-content">
                                <h3 class="scheme-item-title">Installation &amp; Inspection</h3>
                                <p class="scheme-item-desc mb-0">Professional installation and support for inspection.</p>
                            </div>
                        </a>

                        <!-- Item 4: Grid Connection & Net Metering -->
                        <a href="<?= Url::to(['/site/contact', 'topic' => 'On-Grid Solar System']) ?>" class="scheme-list-item text-decoration-none">
                            <div class="scheme-item-icon">
                                <i class="bi bi-diagram-3"></i>
                            </div>
                            <div class="scheme-item-content">
                                <h3 class="scheme-item-title">Grid Connection &amp; Net Metering</h3>
                                <p class="scheme-item-desc mb-0">Help with grid connection and net metering process.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         SECTION 4: WHY CHOOSE OUR SERVICES
         ========================================================================= -->
    <section class="services-why-section py-5">
        <div class="container py-lg-2">
            <div class="about-eyebrow mb-2">
                <span class="eyebrow-dash"></span>
                <span class="eyebrow-label">WHY CHOOSE OUR SERVICES</span>
            </div>
            <h2 class="services-section-heading mb-4 pb-2">Simple Process. Reliable Support.</h2>

            <div class="row g-4 align-items-center services-why-row">
                <!-- Feature 1: Expert Guidance -->
                <div class="col-lg-3 col-sm-6 services-why-col">
                    <div class="services-why-item d-flex align-items-center gap-3">
                        <div class="services-why-icon bg-why-orange">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <div class="services-why-text">
                            <h3 class="services-why-title">Expert Guidance</h3>
                            <p class="services-why-desc mb-0">We help you choose the right solution for your needs.</p>
                        </div>
                    </div>
                </div>

                <!-- Feature 2: Quality Installation -->
                <div class="col-lg-3 col-sm-6 services-why-col">
                    <div class="services-why-item d-flex align-items-center gap-3">
                        <div class="services-why-icon bg-why-green">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <div class="services-why-text">
                            <h3 class="services-why-title">Quality Installation</h3>
                            <p class="services-why-desc mb-0">Professional and safe installation by trained team.</p>
                        </div>
                    </div>
                </div>

                <!-- Feature 3: After-Sales Support -->
                <div class="col-lg-3 col-sm-6 services-why-col">
                    <div class="services-why-item d-flex align-items-center gap-3">
                        <div class="services-why-icon bg-why-blue">
                            <i class="bi bi-headset"></i>
                        </div>
                        <div class="services-why-text">
                            <h3 class="services-why-title">After-Sales Support</h3>
                            <p class="services-why-desc mb-0">Ongoing support for smooth performance.</p>
                        </div>
                    </div>
                </div>

                <!-- Feature 4: Cost Savings -->
                <div class="col-lg-3 col-sm-6 services-why-col">
                    <div class="services-why-item d-flex align-items-center gap-3">
                        <div class="services-why-icon bg-why-purple">
                            <i class="bi bi-currency-rupee"></i>
                        </div>
                        <div class="services-why-text">
                            <h3 class="services-why-title">Cost Savings</h3>
                            <p class="services-why-desc mb-0">Practical solutions to reduce your electricity bills.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         SECTION 5: BOTTOM CTA BANNER (READY TO GO SOLAR?)
         ========================================================================= -->
    <section class="services-cta-banner position-relative overflow-hidden py-4 py-lg-5">
        <div class="services-cta-bg-layer"></div>
        <div class="services-cta-overlay"></div>

        <div class="container position-relative z-2">
            <div class="row align-items-center justify-content-between g-4">
                <div class="col-lg-7">
                    <h2 class="services-cta-heading text-white mb-2">Ready to Go Solar?</h2>
                    <p class="services-cta-subtext mb-0">
                        Talk to our team and find the right solar solution for your home, business or community.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <button type="button" class="btn btn-orange-hero px-4" data-bs-toggle="modal" data-bs-target="#expertModal" data-topic="General Consultation">
                        <span>Talk to Our Expert</span>
                        <i class="bi bi-arrow-right ms-2"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

</div>
