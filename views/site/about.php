<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'About Us - Solar Energy';
$this->params['meta_description'] = 'We are a team of clean energy enthusiasts, working to make solar simple, affordable and accessible for every home, business and community.';
$this->params['meta_keywords'] = 'Solar Energy, About Us, Clean Energy, Renewable Energy India, Solar Panels, Solar Mission';
?>

<div class="about-page">

    <!-- =========================================================================
         SECTION 1: HERO (Seamless slow fade-out hero image fitted into hero section)
         ========================================================================= -->
    <section class="about-hero-section position-relative overflow-hidden">
        <!-- Squished/fitted hero background image layer with slow fade-out overlay -->
        <div class="about-hero-bg-layer" role="img" aria-label="Solar installation team on rooftop"></div>
        <div class="about-hero-fade-overlay"></div>

        <div class="container position-relative z-2">
            <div class="row align-items-center min-vh-about-hero py-5 py-lg-6">
                <div class="col-lg-7 col-xl-6 about-hero-left">
                    <div class="about-eyebrow mb-2">
                        <span class="eyebrow-dash"></span>
                        <span class="eyebrow-label">ABOUT US</span>
                    </div>

                    <h1 class="about-hero-title mb-3">
                        People. Innovation.<br>
                        A <span class="text-orange">Brighter</span> Tomorrow.
                    </h1>

                    <p class="about-hero-desc mb-4">
                        We are a team of clean energy enthusiasts, working to make solar simple, affordable and accessible for every home, business and community.
                    </p>

                    <div class="about-hero-cta d-flex align-items-center gap-3">
                        <a href="#our-journey" class="btn btn-orange-hero">
                            <span>Our Story</span>
                            <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                        <a href="#our-vision" class="btn btn-outline-hero">
                            <span>Our Vision</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         SECTION 2: WHO WE ARE
         ========================================================================= -->
    <section class="about-who-section py-5 py-lg-6">
        <div class="container">
            <div class="row align-items-center g-4 g-lg-5">
                <!-- Left: House with rooftop solar panels -->
                <div class="col-lg-6">
                    <div class="about-who-img-frame">
                        <img src="<?= Url::to('@web/images/about_who_we_are.webp') ?>" 
                             alt="Modern villa powered by rooftop solar energy" 
                             class="img-fluid about-who-img"
                             loading="lazy">
                    </div>
                </div>

                <!-- Right: Text Content -->
                <div class="col-lg-6 ps-lg-4">
                    <div class="about-eyebrow mb-2">
                        <span class="eyebrow-dash"></span>
                        <span class="eyebrow-label">WHO WE ARE</span>
                    </div>

                    <h2 class="about-section-heading mb-3">
                        Making Solar Simple<br>and Accessible
                    </h2>

                    <p class="about-body-text mb-3">
                        Solar Energy is a dedicated team working towards a cleaner and greener tomorrow. We help homeowners, businesses and communities adopt solar power with the right guidance, quality products and end-to-end support.
                    </p>

                    <p class="about-body-text mb-0">
                        From solar installations to expert advice, maintenance and after-sales service, we make the switch to solar simple, transparent and hassle-free.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         SECTION 3: STATS BANNER
         ========================================================================= -->
    <section class="about-stats-banner py-4 py-lg-5 text-white">
        <div class="container">
            <div class="row text-center g-4 justify-content-between align-items-center">
                <!-- Stat 1 -->
                <div class="col-6 col-md-3 stat-col stat-col-divider">
                    <div class="stat-icon-wrap mb-2">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="stat-number">10,000+</div>
                    <div class="stat-text">Happy Customers</div>
                </div>

                <!-- Stat 2 -->
                <div class="col-6 col-md-3 stat-col stat-col-divider">
                    <div class="stat-icon-wrap mb-2">
                        <i class="bi bi-lightning-charge-fill"></i>
                    </div>
                    <div class="stat-number">50MW+</div>
                    <div class="stat-text">Clean Energy Installed</div>
                </div>

                <!-- Stat 3 -->
                <div class="col-6 col-md-3 stat-col stat-col-divider">
                    <div class="stat-icon-wrap mb-2">
                        <i class="bi bi-gear-fill"></i>
                    </div>
                    <div class="stat-number">99%</div>
                    <div class="stat-text">Service Satisfaction</div>
                </div>

                <!-- Stat 4 -->
                <div class="col-6 col-md-3 stat-col">
                    <div class="stat-icon-wrap mb-2">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="display:inline-block; vertical-align:middle;">
                            <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM11.06 6.03C12.42 5.09 14.18 5.48 15.11 6.84C15.65 7.63 15.75 8.6 15.44 9.46C16.89 8.7 18.73 9.21 19.5 10.66C20.25 12.06 19.74 13.84 18.34 14.59L17.15 15.22C16.86 16.65 15.82 17.81 14.4 18.27C12.72 18.82 10.9 17.9 10.35 16.22C10.15 15.61 10.16 14.97 10.35 14.39C9.25 14.88 7.95 14.52 7.28 13.54C6.46 12.33 6.77 10.69 7.98 9.87C8.74 9.35 9.71 9.41 10.42 9.94C10.22 8.71 10.95 7.51 12.23 7.21L11.06 6.03Z" opacity="0.3"/>
                            <path d="M12 22C17.5228 22 22 17.5228 22 12H2C2 17.5228 6.47715 22 12 22Z" fill="none"/>
                            <path d="M17 12C17 7.5 13 4 7 4C7 8.5 11 12 17 12Z"/>
                            <path d="M7 12C7 16.5 11 20 17 20C17 15.5 13 12 7 12Z" opacity="0.6"/>
                        </svg>
                    </div>
                    <div class="stat-number">20+</div>
                    <div class="stat-text">States Covered</div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         SECTION 4: MISSION & VISION CARDS
         ========================================================================= -->
    <section id="our-vision" class="about-mission-section py-5 py-lg-6">
        <div class="container">
            <div class="row g-4">
                <!-- Our Mission -->
                <div class="col-lg-6">
                    <div class="mission-vision-card mission-card h-100">
                        <div class="card-icon-container orange-circle">
                            <svg width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="#ea580c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <circle cx="12" cy="12" r="6"></circle>
                                <circle cx="12" cy="12" r="2"></circle>
                            </svg>
                        </div>
                        <div class="card-content">
                            <h3 class="card-heading mb-2">Our Mission</h3>
                            <p class="card-desc mb-0">
                                To make clean and affordable solar energy simple and accessible for every home and business.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Our Vision -->
                <div class="col-lg-6">
                    <div class="mission-vision-card vision-card h-100">
                        <div class="card-icon-container green-circle">
                            <svg width="34" height="34" viewBox="0 0 24 24" fill="#16a34a" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 3C21 3 17 4 12 9C7 14 6 18 6 18C6 18 10 17 15 12C20 7 21 3 21 3Z"/>
                                <path d="M3 21C3 21 6.5 17.5 10 14" stroke="#16a34a" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <div class="card-content">
                            <h3 class="card-heading mb-2">Our Vision</h3>
                            <p class="card-desc mb-0">
                                A cleaner, brighter and more sustainable future through renewable solar energy for a better, greener tomorrow.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         SECTION 5: OUR JOURNEY
         ========================================================================= -->
    <section id="our-journey" class="about-journey-section py-5 py-lg-6">
        <div class="container">
            <div class="row align-items-center g-4 g-lg-5">
                <!-- Left: Text -->
                <div class="col-lg-6 pe-lg-4">
                    <div class="about-eyebrow mb-2">
                        <span class="eyebrow-dash"></span>
                        <span class="eyebrow-label">OUR JOURNEY</span>
                    </div>

                    <h2 class="about-section-heading mb-3">
                        A Step Towards a Sustainable Tomorrow
                    </h2>

                    <p class="about-body-text mb-4">
                        Our journey started with a simple idea – to make solar energy accessible and affordable for everyone. Today, we continue to work towards a cleaner, greener and more sustainable world with reliable solar solutions.
                    </p>

                    <div>
                        <a href="<?= Url::to(['/site/contact']) ?>" class="btn btn-navy-journey">
                            <span>Know More About Our Journey</span>
                            <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Right: Image of Family looking towards sunset skyline -->
                <div class="col-lg-6">
                    <div class="about-journey-img-frame">
                        <img src="<?= Url::to('@web/images/about_journey_family.webp') ?>" 
                             alt="Family overlooking sunset skyline representing sustainable future" 
                             class="img-fluid about-journey-img"
                             loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         SECTION 6: PARTNER WITH US (Full-bleed fade-out bottom CTA banner)
         ========================================================================= -->
    <section class="about-partner-banner-section position-relative overflow-hidden">
        <div class="about-partner-banner">
            <div class="container position-relative z-2">
                <div class="row align-items-center min-vh-partner py-5 py-lg-6">
                    <div class="col-lg-7 col-xl-6 partner-content-col">
                        <div class="about-eyebrow mb-2">
                            <span class="eyebrow-dash bg-orange"></span>
                            <span class="eyebrow-label text-white-75">LET'S BUILD A CLEANER &amp; GREENER TOMORROW</span>
                        </div>

                        <h2 class="partner-heading text-white mb-3">
                            Partner with Us for a <span class="text-orange">Greener Tomorrow</span>
                        </h2>

                        <p class="partner-subtext text-white-75 mb-4">
                            Whether you're a homeowner, business or community, we are here to help you find the best solar solution.
                        </p>

                        <div class="partner-cta-group d-flex flex-wrap align-items-center gap-3">
                            <button type="button" class="btn btn-orange-hero" data-bs-toggle="modal" data-bs-target="#expertModal" data-topic="General Consultation">
                                <span>Talk to Our Expert</span>
                                <i class="bi bi-arrow-right ms-2"></i>
                            </button>
                            <a href="<?= Url::to(['/site/contact']) ?>" class="btn btn-outline-white-hero">
                                <span>Request a Free Consultation</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
