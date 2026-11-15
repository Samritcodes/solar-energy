<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$posts = [
    'pm-surya-ghar-subsidy-guide' => [
        'slug' => 'pm-surya-ghar-subsidy-guide',
        'category' => 'Government Scheme',
        'read_time' => '4 Min Read',
        'date' => 'October 2026',
        'author' => 'Rajesh Sharma',
        'author_role' => 'Senior Solar Policy Advisor',
        'author_img' => '@web/images/user_rohit.webp',
        'image' => '@web/images/hero_solar_house.webp',
        'title' => 'Complete Guide to Claiming Up to ₹1,08,000 PM Surya Ghar Subsidy',
        'excerpt' => 'Learn the step-by-step documentation, eligibility criteria, and Direct Benefit Transfer (DBT) disbursement process for residential rooftop solar in India.',
        'takeaways' => [
            'Central subsidy of ₹30,000 for 1 kW, ₹60,000 for 2 kW, and ₹78,000 (up to ₹1,08,000 with state top-up) for 3 kW+ rooftop systems.',
            'Up to 300 units of free electricity every month for eligible residential households.',
            'Subsidy is credited directly to your bank account within 30 days of net-meter commissioning.',
        ],
        'sections' => [
            [
                'heading' => 'What is PM Surya Ghar: Muft Bijli Yojana?',
                'body' => 'PM Surya Ghar: Muft Bijli Yojana is the Government of India’s flagship residential rooftop solar programme aimed at powering 1 crore Indian households with clean solar energy. By generating your own electricity on your roof, your household can save up to ₹15,000–₹25,000 annually on electricity bills while selling surplus power back to the grid.',
            ],
            [
                'heading' => 'Subsidy Slab Breakdown by System Capacity',
                'body' => 'Under the scheme, the central financial assistance is structured based on your average monthly electricity consumption and rooftop capacity:
                <ul>
                    <li><strong>1 kW Rooftop System (0–150 units/month):</strong> ₹30,000 Central Subsidy</li>
                    <li><strong>2 kW Rooftop System (150–300 units/month):</strong> ₹60,000 Central Subsidy</li>
                    <li><strong>3 kW or Higher System (Above 300 units/month):</strong> ₹78,000 Central Subsidy + additional State Government top-up (up to ₹30,000 in states like UP/Delhi, bringing total benefit up to ₹1,08,000).</li>
                </ul>',
            ],
            [
                'heading' => 'Documents Required for Online Application',
                'body' => 'To ensure fast approval from your local DISCOM, keep the following documents ready before submitting your application:
                <ul>
                    <li>Latest electricity bill (within the last 3 months) showing your consumer number and sanctioned load.</li>
                    <li>Aadhaar Card and PAN Card of the registered electricity consumer.</li>
                    <li>Cancelled cheque or bank passbook copy for Direct Benefit Transfer (DBT).</li>
                    <li>Clear photographs of your shadow-free rooftop area.</li>
                </ul>',
            ],
            [
                'heading' => 'Step-by-Step Disbursement Timeline',
                'body' => 'Once you register and choose an empanelled solar vendor like Solar Energy, our engineers conduct a site survey and submit the technical feasibility request to your DISCOM. After physical installation of ALMM-approved solar modules and net-meter testing by the DISCOM officer, the commissioning certificate is generated online and the subsidy is credited directly to your bank account within 30 days.',
            ],
        ],
    ],
    'ongrid-vs-offgrid-vs-hybrid' => [
        'slug' => 'ongrid-vs-offgrid-vs-hybrid',
        'category' => 'Solar Technology',
        'read_time' => '5 Min Read',
        'date' => 'October 2026',
        'author' => 'Ananya Verma',
        'author_role' => 'Chief Solar Design Engineer',
        'author_img' => '@web/images/user_anjali.webp',
        'image' => '@web/images/services_hybrid_solar.webp',
        'title' => 'On-Grid vs. Off-Grid vs. Hybrid Solar: Which One Suits Your Home?',
        'excerpt' => 'Compare net-metering savings, battery backup options, and system sizing to pick the best solar setup for your family or business.',
        'takeaways' => [
            'On-Grid Solar is the most cost-effective choice for cities with reliable grid power and qualifies for maximum net-metering benefits.',
            'Off-Grid Solar uses dedicated lithium/tubular battery banks for areas experiencing frequent or prolonged power cuts.',
            'Hybrid Solar combines grid net-metering with automatic battery backup so your home stays powered 24/7 even during outages.',
        ],
        'sections' => [
            [
                'heading' => '1. On-Grid Solar System: Maximum Bill Savings',
                'body' => 'An On-Grid (grid-tied) solar system connects directly to your utility electricity grid via a bi-directional net meter. During the day, solar power runs your home loads first; any extra power is exported to the DISCOM grid. At night, you draw power back from the grid. Because it requires no batteries, it has the lowest upfront cost and fastest payback period (typically 3 to 4 years).',
            ],
            [
                'heading' => '2. Off-Grid Solar System: Complete Energy Independence',
                'body' => 'An Off-Grid system operates independently of the utility grid and stores excess daytime solar energy inside a solar battery bank. It is ideal for farmhouses, rural homes, and regions with frequent daytime and nighttime power outages where grid reliability is low.',
            ],
            [
                'heading' => '3. Hybrid Solar System: The Best of Both Worlds',
                'body' => 'A Hybrid solar system uses a smart hybrid inverter that manages solar panels, lithium battery storage, and the utility grid simultaneously. During normal operation, it exports surplus energy via net metering just like an on-grid system. The moment a grid outage occurs, it switches in milliseconds to battery backup to keep your essential appliances running without interruption.',
            ],
            [
                'heading' => 'How to Choose the Right System for Your Roof',
                'body' => 'If your area has fewer than 1–2 hours of power cuts per week and your primary goal is eliminating your monthly electricity bill under PM Surya Ghar Yojana, choose an <strong>On-Grid System</strong>. If you need uninterrupted backup for work-from-home, medical equipment, or air conditioning during outages, opt for a <strong>Hybrid Solar System</strong>.',
            ],
        ],
    ],
    'maximize-solar-panel-efficiency' => [
        'slug' => 'maximize-solar-panel-efficiency',
        'category' => 'Maintenance & ROI',
        'read_time' => '3 Min Read',
        'date' => 'September 2026',
        'author' => 'Suresh Nair',
        'author_role' => 'Head of O&M Services',
        'author_img' => '@web/images/user_suresh.webp',
        'image' => '@web/images/solar_panels.webp',
        'title' => 'How to Maximize Solar Panel Efficiency & Save 80% on Monthly Bills',
        'excerpt' => 'Simple panel cleaning schedules, shadow-free tilt angles, and smart inverter monitoring habits to boost your daily kWh generation.',
        'takeaways' => [
            'Regular bi-weekly water cleaning prevents dust accumulation from reducing solar output by 15%–25%.',
            'True-south orientation at a tilt angle equal to your city’s latitude maximizes year-round solar harvesting in India.',
            'Real-time mobile app monitoring helps detect string shading or inverter alerts immediately.',
        ],
        'sections' => [
            [
                'heading' => 'Why Dust and Shading Matter More Than You Think',
                'body' => 'In Indian cities, airborne dust, pollen, and bird droppings settle on glass solar modules over 2–3 weeks. Left uncleaned, a thin layer of dust can block sunlight and reduce energy generation by 15% to 25%. Similarly, even partial shading from a Growing tree branch or water tank on a single panel can drop output across the string.',
            ],
            [
                'heading' => 'Best Practices for Cleaning Your Rooftop Panels',
                'body' => '<ul>
                    <li><strong>Clean Early Morning or Evening:</strong> Never spray cold water on hot glass panels under midday sun, as thermal shock can micro-crack the glass.</li>
                    <li><strong>Use Soft Brushes & Clean Water:</strong> Avoid abrasive scrubbers or harsh detergents. A soft microfiber squeegee and normal water are sufficient.</li>
                    <li><strong>Inspect Mounting Fasteners Annually:</strong> Before monsoon season, ensure galvanized mounting bolts and earthing cables remain tight and corrosion-free.</li>
                </ul>',
            ],
            [
                'heading' => 'Using Smart Monitoring to Track Daily Generation',
                'body' => 'A healthy 3 kW rooftop solar system in India generates roughly 12 to 15 units (kWh) per sunny day. By checking your smart inverter Wi-Fi app once a week, you can track daily generation curves, compare monthly savings, and schedule preventive maintenance whenever generation dips.',
            ],
        ],
    ],
    'net-metering-india-explained' => [
        'slug' => 'net-metering-india-explained',
        'category' => 'Government Scheme',
        'read_time' => '4 Min Read',
        'date' => 'September 2026',
        'author' => 'Rajesh Sharma',
        'author_role' => 'Senior Solar Policy Advisor',
        'author_img' => '@web/images/user_rohit.webp',
        'image' => '@web/images/why_solar_house.webp',
        'title' => 'How Net Metering Works in India: Turn Your Roof into a Power Plant',
        'excerpt' => 'Understand bi-directional smart meters, export-import billing cycles, and how DISCOMs credit your surplus solar electricity.',
        'takeaways' => [
            'A bi-directional net meter records both electricity imported from the grid and solar electricity exported to the grid.',
            'You only pay for the "Net Energy" (Import minus Export) at the end of each billing cycle.',
            'Excess solar units banked during sunny spring/summer months carry forward to offset monsoon/winter bills.',
        ],
        'sections' => [
            [
                'heading' => 'What is Solar Net Metering?',
                'body' => 'Net metering is a billing mechanism enacted by state electricity regulatory commissions that allows residential and commercial rooftop solar owners to send unused daytime solar electricity back into the local DISCOM grid in exchange for unit-for-unit energy credits.',
            ],
            [
                'heading' => 'How Your Monthly Bill is Calculated',
                'body' => 'Suppose your home consumes 350 units from the grid at night, and your rooftop solar plant exports 320 surplus units to the grid during the day. Your bi-directional meter calculates the net consumption as <strong>350 − 320 = 30 units</strong>. You are billed only for those 30 net units—slashing your bill by over 85%!',
            ],
        ],
    ],
    'solar-ev-charging-at-home' => [
        'slug' => 'solar-ev-charging-at-home',
        'category' => 'EV & Agriculture',
        'read_time' => '4 Min Read',
        'date' => 'August 2026',
        'author' => 'Ananya Verma',
        'author_role' => 'Chief Solar Design Engineer',
        'author_img' => '@web/images/user_anjali.webp',
        'image' => '@web/images/services_ev_charging.webp',
        'title' => 'Charging Your Electric Vehicle with Home Rooftop Solar: Cost & Setup',
        'excerpt' => 'See how pairing a 3 kW to 5 kW rooftop solar carport with a home AC wallbox charger lets you drive your EV at virtually zero fuel cost.',
        'takeaways' => [
            'Adding 2 kW of dedicated rooftop capacity generates ~8–10 units daily—enough for 50–65 km of daily electric car driving.',
            'Solar EV carports protect your vehicle from heat while generating clean power overhead.',
            'Reduces per-kilometre running cost from ₹1.50/km (grid power) to nearly ₹0/km after system payback.',
        ],
        'sections' => [
            [
                'heading' => 'Why Solar + EV is the Ultimate Clean Energy Pairing',
                'body' => 'Electric two-wheelers and cars are rapidly replacing petrol vehicles across India. However, charging an EV from high-tariff domestic grid slabs can still add ₹2,500–₹4,000 to your monthly electricity bill. By sizing your rooftop solar system 1.5 kW to 2 kW higher, you can offset 100% of your EV charging consumption with free sunlight.',
            ],
            [
                'heading' => 'Sizing Your Solar System for an EV',
                'body' => 'A typical compact electric SUV with a 30–40 kWh battery uses roughly 1 unit (kWh) per 6.5 km. If you drive 40 km a day, you need about 6 units per day—which a single 1.5 kW solar array easily produces every afternoon.',
            ],
        ],
    ],
    'solar-water-pump-agriculture' => [
        'slug' => 'solar-water-pump-agriculture',
        'category' => 'EV & Agriculture',
        'read_time' => '4 Min Read',
        'date' => 'August 2026',
        'author' => 'Suresh Nair',
        'author_role' => 'Head of O&M Services',
        'author_img' => '@web/images/user_suresh.webp',
        'image' => '@web/images/services_water_pump.webp',
        'title' => 'Solar Water Pumps for Agriculture: Eliminating Diesel & Grid Delays',
        'excerpt' => 'How submersible and surface solar water pumps empower farmers with reliable daytime irrigation and zero diesel expenses.',
        'takeaways' => [
            'Available in 3 HP, 5 HP, 7.5 HP, and 10 HP DC/AC configurations for deep borewells and canal irrigation.',
            'Eliminates costly diesel fuel expenses and erratic nighttime agricultural grid supply.',
            'Rugged weatherproof mounting with MPPT pump controllers for high water discharge even on partly cloudy days.',
        ],
        'sections' => [
            [
                'heading' => 'Reliable Daytime Irrigation for Indian Farmers',
                'body' => 'Traditional agricultural water pumps rely either on expensive diesel generators or rural grid supply that often arrives late at night. Solar water pumping systems use high-efficiency PV modules paired with an MPPT VFD controller to run submersible or surface pumps throughout sunny daytime hours.',
            ],
            [
                'heading' => 'Choosing Between DC and AC Solar Pumps',
                'body' => 'DC solar pumps offer higher efficiency and start pumping earlier in the morning, making them ideal for 3 HP to 5 HP borewells. AC solar pumps are easy to service locally and work well for larger 7.5 HP to 10 HP agricultural holdings.',
            ],
        ],
    ],
];

$requestedSlug = Yii::$app->request->get('post', '');
$activePost = ($requestedSlug && isset($posts[$requestedSlug])) ? $posts[$requestedSlug] : null;

if ($activePost) {
    $this->title = $activePost['title'] . ' - Solar Energy Blog';
    $this->params['meta_description'] = $activePost['excerpt'];
} else {
    $this->title = 'Solar Energy Blog - Guides, Subsidies & Clean Energy Insights';
    $this->params['meta_description'] = 'Explore expert articles on PM Surya Ghar Yojana subsidies, On-Grid vs Hybrid solar systems, panel maintenance, net metering, and EV charging.';
}
?>

<div class="blog-page">

<?php if ($activePost): ?>
    <!-- =========================================================================
         SINGLE BLOG ARTICLE READER VIEW (?r=site/blog&post=...)
         ========================================================================= -->
    <section class="py-4 bg-light-soft border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 small">
                        <li class="breadcrumb-item"><a href="<?= Url::to(['/site/index']) ?>" class="text-decoration-none text-muted">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= Url::to(['/site/blog']) ?>" class="text-decoration-none text-muted">Blog</a></li>
                        <li class="breadcrumb-item active text-navy fw-semibold" aria-current="page"><?= Html::encode($activePost['category']) ?></li>
                    </ol>
                </nav>
                <a href="<?= Url::to(['/site/blog']) ?>" class="btn btn-outline-hero btn-sm py-1 px-3">
                    <i class="bi bi-arrow-left me-1"></i> All Blog Articles
                </a>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row g-4 g-lg-5">
                <!-- Left: Main Article Content -->
                <div class="col-lg-8">
                    <div class="mb-3 d-flex flex-wrap align-items-center gap-2">
                        <span class="badge rounded-pill px-3 py-2" style="background-color: #ffedd5; color: #ea580c; font-weight: 700;">
                            <?= Html::encode($activePost['category']) ?>
                        </span>
                        <span class="text-muted small"><i class="bi bi-clock me-1"></i><?= Html::encode($activePost['read_time']) ?></span>
                        <span class="text-muted small">•</span>
                        <span class="text-muted small"><i class="bi bi-calendar3 me-1"></i><?= Html::encode($activePost['date']) ?></span>
                    </div>

                    <h1 class="fw-bold mb-3" style="font-size: 2.35rem; line-height: 1.22; color: #0b1f3b;">
                        <?= Html::encode($activePost['title']) ?>
                    </h1>

                    <p class="lead text-muted mb-4" style="font-size: 1.1rem; line-height: 1.65;">
                        <?= Html::encode($activePost['excerpt']) ?>
                    </p>

                    <!-- Author Bar -->
                    <div class="d-flex align-items-center gap-3 pb-4 mb-4 border-bottom">
                        <img src="<?= Url::to($activePost['author_img']) ?>" alt="<?= Html::encode($activePost['author']) ?>" class="rounded-circle object-fit-cover" style="width: 48px; height: 48px; border: 2px solid #e2e8f0;">
                        <div>
                            <div class="fw-bold text-navy"><?= Html::encode($activePost['author']) ?></div>
                            <div class="small text-muted"><?= Html::encode($activePost['author_role']) ?></div>
                        </div>
                    </div>

                    <!-- Featured Article Image -->
                    <div class="rounded-4 overflow-hidden shadow-sm mb-4">
                        <img src="<?= Url::to($activePost['image']) ?>" alt="<?= Html::encode($activePost['title']) ?>" class="w-100 object-fit-cover" style="max-height: 420px;">
                    </div>

                    <!-- Key Takeaways Box -->
                    <div class="p-4 rounded-4 mb-4" style="background: linear-gradient(135deg, #fffcf6 0%, #fff7eb 100%); border: 1.5px solid #fed7aa;">
                        <h3 class="h5 fw-bold mb-3 d-flex align-items-center gap-2" style="color: #0b1f3b;">
                            <i class="bi bi-lightning-charge-fill text-orange"></i> Key Takeaways
                        </h3>
                        <ul class="mb-0 d-flex flex-column gap-2" style="color: #334155; font-size: 0.95rem;">
                            <?php foreach ($activePost['takeaways'] as $point): ?>
                                <li><?= Html::encode($point) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <!-- Article Sections -->
                    <div class="article-body-content d-flex flex-column gap-4">
                        <?php foreach ($activePost['sections'] as $sec): ?>
                            <div>
                                <h2 class="h4 fw-bold mb-2" style="color: #0b1f3b;"><?= Html::encode($sec['heading']) ?></h2>
                                <div class="text-secondary" style="font-size: 1.02rem; line-height: 1.75; color: #334155 !important;">
                                    <?= $sec['body'] ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Bottom Article CTA Box -->
                    <div class="mt-5 p-4 p-lg-5 rounded-4 text-white d-flex flex-wrap align-items-center justify-content-between gap-4" style="background: linear-gradient(135deg, #071a2e 0%, #1e3a5f 100%);">
                        <div style="max-width: 460px;">
                            <h3 class="h4 fw-bold text-white mb-2">Need Expert Guidance for Your Roof?</h3>
                            <p class="text-white-50 mb-0 small">
                                Book a free site survey with our solar engineers and get a customized quotation with subsidy calculation.
                            </p>
                        </div>
                        <div class="d-flex gap-2 flex-wrap">
                            <a href="<?= Url::to(['/site/contact', 'topic' => $activePost['title']]) ?>" class="btn btn-orange-hero">
                                <span>Talk to Our Expert</span>
                                <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right: Sticky Sidebar (Subsidy Summary + Other Articles) -->
                <div class="col-lg-4">
                    <div class="sticky-top" style="top: 100px;">
                        <!-- Quick Subsidy Card -->
                        <div class="card border-0 shadow-sm rounded-4 p-4 mb-4" style="background-color: #f8fafc; border: 1px solid #e2e8f0 !important;">
                            <div class="about-eyebrow mb-2">
                                <span class="eyebrow-dash"></span>
                                <span class="eyebrow-label">PM SURYA GHAR SUBSIDY</span>
                            </div>
                            <h3 class="h5 fw-bold text-navy mb-3">Quick Subsidy Reference</h3>
                            <div class="d-flex flex-column gap-2 mb-3 small">
                                <div class="d-flex justify-content-between p-2 rounded bg-white border">
                                    <span class="fw-semibold text-navy">1 kW Rooftop Solar</span>
                                    <span class="fw-bold text-success">₹30,000</span>
                                </div>
                                <div class="d-flex justify-content-between p-2 rounded bg-white border">
                                    <span class="fw-semibold text-navy">2 kW Rooftop Solar</span>
                                    <span class="fw-bold text-success">₹60,000</span>
                                </div>
                                <div class="d-flex justify-content-between p-2 rounded bg-white border">
                                    <span class="fw-semibold text-navy">3 kW+ Rooftop Solar</span>
                                    <span class="fw-bold text-orange">Up to ₹1,08,000</span>
                                </div>
                            </div>
                            <a href="<?= Url::to(['/site/contact', 'topic' => 'PM Surya Ghar Rooftop Solar Subsidy']) ?>" class="btn btn-orange-hero w-100 justify-content-center">
                                <span>Check Eligibility &amp; Apply</span>
                            </a>
                        </div>

                        <!-- Related Articles List -->
                        <div class="card border-0 shadow-sm rounded-4 p-4" style="border: 1px solid #e2e8f0 !important;">
                            <h3 class="h5 fw-bold text-navy mb-3">More Solar Articles</h3>
                            <div class="d-flex flex-column gap-3">
                                <?php foreach ($posts as $slug => $p): ?>
                                    <?php if ($slug === $activePost['slug']) continue; ?>
                                    <a href="<?= Url::to(['/site/blog', 'post' => $slug]) ?>" class="d-flex align-items-center gap-3 text-decoration-none p-2 rounded-3 related-blog-link">
                                        <img src="<?= Url::to($p['image']) ?>" alt="<?= Html::encode($p['title']) ?>" class="rounded-3 object-fit-cover flex-shrink-0" style="width: 72px; height: 56px;">
                                        <div>
                                            <div class="small fw-bold text-orange" style="font-size: 0.7rem;"><?= Html::encode($p['category']) ?></div>
                                            <div class="fw-bold text-navy small lh-sm"><?= Html::encode($p['title']) ?></div>
                                        </div>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php else: ?>
    <!-- =========================================================================
         BLOG LISTING VIEW (?r=site/blog)
         ========================================================================= -->
    <section class="services-hero-section position-relative overflow-hidden" style="min-height: 360px;">
        <div class="services-hero-bg-layer" role="img" aria-label="Solar Energy Knowledge Hub and Blog"></div>
        <div class="services-hero-fade-overlay"></div>

        <div class="container position-relative z-2">
            <div class="row align-items-center py-5" style="min-height: 340px;">
                <div class="col-lg-7">
                    <div class="about-eyebrow mb-2">
                        <span class="eyebrow-dash"></span>
                        <span class="eyebrow-label">OUR BLOG &amp; KNOWLEDGE HUB</span>
                    </div>

                    <h1 class="services-hero-title mb-3">
                        Solar Insights, Guides &amp; <span class="text-orange">Updates</span>
                    </h1>

                    <p class="services-hero-desc mb-0">
                        Expert articles on PM Surya Ghar government subsidies, solar system comparisons, net metering, and practical tips to lower your electricity bills.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Category Filter Bar & Articles Grid -->
    <section class="py-5">
        <div class="container py-lg-2">
            <!-- Category Filter Pills -->
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-4 pb-2">
                <div>
                    <div class="about-eyebrow mb-1">
                        <span class="eyebrow-dash"></span>
                        <span class="eyebrow-label">LATEST ARTICLES</span>
                    </div>
                    <h2 class="services-section-heading mb-0">Explore Solar Knowledge</h2>
                </div>
                <div class="d-flex flex-wrap gap-2" id="blogFilterGroup">
                    <button type="button" class="btn btn-orange-hero btn-sm py-2 px-3 blog-filter-btn active" data-category="all">All Articles</button>
                    <button type="button" class="btn btn-outline-hero btn-sm py-2 px-3 blog-filter-btn" data-category="Government Scheme">Government Scheme</button>
                    <button type="button" class="btn btn-outline-hero btn-sm py-2 px-3 blog-filter-btn" data-category="Solar Technology">Solar Technology</button>
                    <button type="button" class="btn btn-outline-hero btn-sm py-2 px-3 blog-filter-btn" data-category="Maintenance & ROI">Maintenance &amp; ROI</button>
                    <button type="button" class="btn btn-outline-hero btn-sm py-2 px-3 blog-filter-btn" data-category="EV & Agriculture">EV &amp; Agriculture</button>
                </div>
            </div>

            <!-- 6 Blog Cards Grid -->
            <div class="row g-4" id="blogArticlesGrid">
                <?php foreach ($posts as $slug => $post): ?>
                    <div class="col-lg-4 col-md-6 blog-card-col" data-category="<?= Html::encode($post['category']) ?>">
                        <a href="<?= Url::to(['/site/blog', 'post' => $slug]) ?>" class="service-solution-card service-card-lg h-100 text-decoration-none d-flex flex-column justify-content-between">
                            <div>
                                <div class="service-card-img-wrap">
                                    <img src="<?= Url::to($post['image']) ?>" alt="<?= Html::encode($post['title']) ?>" class="service-card-img" loading="lazy">
                                </div>
                                <div class="service-card-body pt-3">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <span class="badge rounded-pill px-2 py-1" style="background-color: #ffedd5; color: #ea580c; font-size: 0.72rem; font-weight: 700;">
                                            <?= Html::encode($post['category']) ?>
                                        </span>
                                        <span class="text-muted" style="font-size: 0.75rem;">
                                            <i class="bi bi-clock me-1"></i><?= Html::encode($post['read_time']) ?>
                                        </span>
                                    </div>
                                    <h3 class="service-card-title mb-2"><?= Html::encode($post['title']) ?></h3>
                                    <p class="service-card-desc mb-3">
                                        <?= Html::encode($post['excerpt']) ?>
                                    </p>
                                </div>
                            </div>
                            <div class="px-3 pb-3 pt-2 border-top d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="<?= Url::to($post['author_img']) ?>" alt="<?= Html::encode($post['author']) ?>" class="rounded-circle object-fit-cover" style="width: 28px; height: 28px;">
                                    <span class="small fw-semibold text-navy" style="font-size: 0.8rem;"><?= Html::encode($post['author']) ?></span>
                                </div>
                                <span class="small fw-bold text-orange">
                                    Read Article <i class="bi bi-arrow-right ms-1"></i>
                                </span>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Bottom CTA Banner -->
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
                    <a href="<?= Url::to(['/site/contact']) ?>" class="btn btn-orange-hero px-4">
                        <span>Talk to Our Expert</span>
                        <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php
    $filterScript = <<<JS
    (function() {
        const filterBtns = document.querySelectorAll('.blog-filter-btn');
        const blogCols = document.querySelectorAll('.blog-card-col');

        filterBtns.forEach(function(btn) {
            btn.addEventListener('click', function() {
                const selectedCat = this.getAttribute('data-category');
                filterBtns.forEach(function(b) {
                    b.classList.remove('btn-orange-hero', 'active');
                    b.classList.add('btn-outline-hero');
                });
                this.classList.remove('btn-outline-hero');
                this.classList.add('btn-orange-hero', 'active');

                blogCols.forEach(function(col) {
                    if (selectedCat === 'all' || col.getAttribute('data-category') === selectedCat) {
                        col.style.display = '';
                    } else {
                        col.style.display = 'none';
                    }
                });
            });
        });
    })();
    JS;
    $this->registerJs($filterScript);
    ?>
<?php endif; ?>

</div>
