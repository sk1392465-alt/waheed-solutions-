<?php
$page_title = 'Professional Digital Services at 40% Lower Cost';
$page_description = 'Waheed Ahmed offers premium digital services including web development, graphic design, SEO, and e-commerce solutions at 40% lower cost than market rates.';
require_once 'includes/header.php';

// Get testimonials
global $pdo;
$stmt = $pdo->prepare("SELECT * FROM testimonials WHERE status = 'active' ORDER BY sort_order ASC LIMIT 6");
$stmt->execute();
$testimonials = $stmt->fetchAll();

// Get FAQs
$stmt = $pdo->prepare("SELECT * FROM faqs WHERE status = 'active' ORDER BY sort_order ASC LIMIT 6");
$faqs = $stmt->fetchAll();

// Services data
$services = [
    [
        'icon' => 'fas fa-globe',
        'title' => 'Website & Online Setup',
        'description' => 'Modern, mobile-friendly websites and complete online presence setup for your business.',
        'features' => ['Website Design & Development', 'Shopify / WordPress Setup', 'Website Maintenance', 'Domain & Hosting Setup']
    ],
    [
        'icon' => 'fas fa-palette',
        'title' => 'Graphic Design & Branding',
        'description' => 'Professional visual identity and branding materials to make your business stand out.',
        'features' => ['Logo Design', 'Business Card Design', 'Poster & Flyer Design', 'Social Media Graphics', 'UI/UX Design']
    ],
    [
        'icon' => 'fab fa-youtube',
        'title' => 'YouTube & Social Media',
        'description' => 'Complete YouTube and social media solutions to grow your online presence and engagement.',
        'features' => ['YouTube Thumbnail Creation', 'Channel Setup & Optimization', 'Social Media Account Creation', 'Video Editing']
    ],
    [
        'icon' => 'fas fa-user-cog',
        'title' => 'Account & Setup Services',
        'description' => 'Professional account creation and setup services for all your business needs.',
        'features' => ['Gmail Account Creation', 'Google Business Profile', 'Social Media Page Setup', 'Professional Email Setup']
    ],
    [
        'icon' => 'fas fa-chart-line',
        'title' => 'Marketing & SEO',
        'description' => 'Boost your online visibility and grow your audience with proven marketing strategies.',
        'features' => ['SEO Optimization', 'Social Media Marketing', 'Google Ads Setup', 'Audience Growth Services']
    ],
    [
        'icon' => 'fas fa-file-alt',
        'title' => 'Business & Data Services',
        'description' => 'Professional business documentation and data management services for efficiency.',
        'features' => ['Data Entry & Management', 'Excel / PowerPoint / Word', 'Resume & CV Design', 'Email Templates']
    ]
];
?>

<!-- Hero Section -->
<section class="hero-section bg-primary text-white position-relative overflow-hidden" style="min-height: 100vh;">
    <div class="container">
        <div class="row align-items-center" style="min-height: calc(100vh - 120px);">
            <div class="col-lg-6 text-white">
                <div class="hero-content">
                    <h1 class="display-3 fw-bold mb-3 mb-md-4 animate__animated animate__fadeInUp">
                        Hi, I'm <span class="text-warning">Waheed Ahmed</span>
                    </h1>
                    <h2 class="h3 mb-3 mb-md-4 animate__animated animate__fadeInUp animate__delay-1s">
                        Professional Digital Services at <span class="text-warning">40% Lower Cost</span>
                    </h2>
                    <p class="lead mb-3 mb-md-4 animate__animated animate__fadeInUp animate__delay-2s">
                        Transform your business with premium web development, graphic design, SEO, and digital marketing services. Quality work, fast delivery, unbeatable prices.
                    </p>
                    <div class="d-flex flex-wrap gap-3 mb-4 mb-md-5 animate__animated animate__fadeInUp animate__delay-3s">
                        <a href="#quote-form" class="btn btn-warning btn-lg px-3 px-md-4 text-dark fw-bold">
                            <i class="fas fa-rocket me-2"></i>
                            <span class="d-none d-sm-inline">Get a Free Quote Now</span>
                            <span class="d-sm-none">Get Quote</span>
                        </a>
                        <a href="#services" class="btn btn-outline-light btn-lg px-3 px-md-4">
                            <i class="fas fa-eye me-2"></i>
                            <span class="d-none d-sm-inline">View Services</span>
                            <span class="d-sm-none">Services</span>
                        </a>
                    </div>
                    
                    <!-- Key Benefits -->
                    <div class="row g-2 g-md-3 animate__animated animate__fadeInUp animate__delay-4s">
                        <div class="col-12 col-sm-4">
                            <div class="d-flex align-items-center justify-content-center justify-content-sm-start">
                                <i class="fas fa-check-circle text-warning me-2 fa-lg"></i>
                                <span class="small">40% Lower Fees</span>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="d-flex align-items-center justify-content-center justify-content-sm-start">
                                <i class="fas fa-clock text-warning me-2 fa-lg"></i>
                                <span class="small">Fast Delivery</span>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="d-flex align-items-center justify-content-center justify-content-sm-start">
                                <i class="fas fa-star text-warning me-2 fa-lg"></i>
                                <span class="small">Top Quality</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-image text-center animate__animated animate__fadeInRight animate__delay-1s mt-4 mt-lg-0">
                    <div class="position-relative d-inline-block">
                        <img src="<?php echo BASE_URL; ?>assets/img/team/waheed-ahmed.jpg" 
                             alt="Waheed Ahmed - Digital Services Expert" 
                             class="img-fluid rounded-circle shadow-lg" 
                             style="width: 300px; height: 300px; object-fit: cover; border: 5px solid rgba(255,255,255,0.2); max-width: 100%;">
                        <div class="position-absolute bottom-0 end-0 bg-warning text-dark rounded-circle d-flex align-items-center justify-content-center" 
                             style="width: 60px; height: 60px; transform: translate(10px, 10px);">
                            <div class="text-center">
                                <div class="fw-bold small">40%</div>
                                <small style="font-size: 0.6rem;">LESS</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold mb-3">Our Digital Services – Creative & Affordable Solutions (40% Lower Cost)</h2>
            <p class="lead text-muted">Comprehensive digital solutions to grow your business online with unbeatable pricing</p>
        </div>
        
        <div class="row g-4">
            <?php foreach ($services as $index => $service): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card h-100 p-4 rounded-4 shadow-sm bg-white border-0 hover-lift">
                        <!-- Service Image -->
                        <div class="service-image mb-3">
                            <?php 
                            $service_images = [
                                'Website & Online Setup' => 'website-development.svg',
                                'Graphic Design & Branding' => 'graphic-design.svg',
                                'YouTube & Social Media' => 'youtube-social.svg',
                                'Account & Setup Services' => 'account-setup.svg',
                                'Marketing & SEO' => 'marketing-seo.svg',
                                'Business & Data Services' => 'business-data.svg'
                            ];
                            $image_file = $service_images[$service['title']] ?? 'website-development.svg';
                            ?>
                            <img src="<?php echo BASE_URL; ?>assets/img/services/<?php echo $image_file; ?>" 
                                 alt="<?php echo $service['title']; ?>" 
                                 class="img-fluid rounded-3" 
                                 style="height: 150px; width: 100%; object-fit: cover;">
                        </div>
                        
                        <div class="service-icon mb-3">
                            <div class="bg-primary bg-gradient rounded-circle d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <i class="<?php echo $service['icon']; ?> fa-lg text-white"></i>
                            </div>
                        </div>
                        <h4 class="fw-bold mb-3"><?php echo $service['title']; ?></h4>
                        <p class="text-muted mb-3"><?php echo $service['description']; ?></p>
                        <ul class="list-unstyled">
                            <?php foreach ($service['features'] as $feature): ?>
                                <li class="mb-2">
                                    <i class="fas fa-check text-success me-2"></i>
                                    <?php echo $feature; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="mt-auto pt-3">
                            <a href="#quote-form" class="btn btn-outline-primary">Get Quote</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold mb-3">Why Choose Waheed Digital Solutions?</h2>
            <p class="lead">Trusted by businesses across Pakistan and worldwide</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="text-center">
                    <div class="stat-icon mb-3">
                        <i class="fas fa-project-diagram fa-3x text-warning"></i>
                    </div>
                    <h3 class="fw-bold counter" data-target="100">0</h3>
                    <p class="mb-0">Projects Completed</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center">
                    <div class="stat-icon mb-3">
                        <i class="fas fa-users fa-3x text-warning"></i>
                    </div>
                    <h3 class="fw-bold counter" data-target="50">0</h3>
                    <p class="mb-0">Happy Clients</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center">
                    <div class="stat-icon mb-3">
                        <i class="fas fa-calendar-alt fa-3x text-warning"></i>
                    </div>
                    <h3 class="fw-bold counter" data-target="5">0</h3>
                    <p class="mb-0">Years Experience</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center">
                    <div class="stat-icon mb-3">
                        <i class="fas fa-percentage fa-3x text-warning"></i>
                    </div>
                    <h3 class="fw-bold counter" data-target="40">0</h3>
                    <p class="mb-0">Cost Savings</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How We Work Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold mb-3">How We Work - Simple 4-Step Process</h2>
            <p class="lead text-muted">From consultation to delivery, we make it easy</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="process-card text-center p-4 h-100">
                    <div class="process-number mb-3">
                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center mx-auto" style="width: 80px; height: 80px;">
                            <span class="h3 mb-0">1</span>
                        </div>
                    </div>
                    <div class="process-icon mb-3">
                        <i class="fas fa-comments fa-2x text-primary"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Consultation</h5>
                    <p class="text-muted">We discuss your requirements, goals, and vision for the project</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="process-card text-center p-4 h-100">
                    <div class="process-number mb-3">
                        <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center mx-auto" style="width: 80px; height: 80px;">
                            <span class="h3 mb-0">2</span>
                        </div>
                    </div>
                    <div class="process-icon mb-3">
                        <i class="fas fa-clipboard-list fa-2x text-success"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Planning</h5>
                    <p class="text-muted">Create detailed strategy, timeline, and project roadmap</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="process-card text-center p-4 h-100">
                    <div class="process-number mb-3">
                        <div class="bg-warning text-white rounded-circle d-flex align-items-center justify-content-center mx-auto" style="width: 80px; height: 80px;">
                            <span class="h3 mb-0">3</span>
                        </div>
                    </div>
                    <div class="process-icon mb-3">
                        <i class="fas fa-code fa-2x text-warning"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Development</h5>
                    <p class="text-muted">Execute the project with regular updates and feedback</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="process-card text-center p-4 h-100">
                    <div class="process-number mb-3">
                        <div class="bg-info text-white rounded-circle d-flex align-items-center justify-content-center mx-auto" style="width: 80px; height: 80px;">
                            <span class="h3 mb-0">4</span>
                        </div>
                    </div>
                    <div class="process-icon mb-3">
                        <i class="fas fa-rocket fa-2x text-info"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Delivery</h5>
                    <p class="text-muted">Launch your project with ongoing support and maintenance</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Preview Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold mb-3">Recent Projects</h2>
            <p class="lead text-muted">See what we've created for our amazing clients</p>
        </div>
        <div class="row g-4 mb-5">
            <div class="col-lg-4 col-md-6">
                <div class="portfolio-item bg-white rounded-4 shadow-sm overflow-hidden hover-lift">
                    <div class="portfolio-image" style="height: 200px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); position: relative;">
                        <div class="d-flex align-items-center justify-content-center h-100">
                            <div class="text-center text-white">
                                <i class="fas fa-globe fa-3x mb-3"></i>
                                <h6>E-commerce Website</h6>
                            </div>
                        </div>
                        <div class="portfolio-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-75 d-flex align-items-center justify-content-center opacity-0 transition-all">
                            <a href="#" class="btn btn-warning btn-sm">View Project</a>
                        </div>
                    </div>
                    <div class="p-3">
                        <h6 class="fw-bold mb-2">Karachi Fashion Store</h6>
                        <p class="text-muted small mb-0">Complete e-commerce solution with payment integration</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="portfolio-item bg-white rounded-4 shadow-sm overflow-hidden hover-lift">
                    <div class="portfolio-image" style="height: 200px; background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); position: relative;">
                        <div class="d-flex align-items-center justify-content-center h-100">
                            <div class="text-center text-white">
                                <i class="fas fa-palette fa-3x mb-3"></i>
                                <h6>Brand Identity</h6>
                            </div>
                        </div>
                        <div class="portfolio-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-75 d-flex align-items-center justify-content-center opacity-0 transition-all">
                            <a href="#" class="btn btn-warning btn-sm">View Project</a>
                        </div>
                    </div>
                    <div class="p-3">
                        <h6 class="fw-bold mb-2">Restaurant Branding</h6>
                        <p class="text-muted small mb-0">Logo, menu design, and complete brand package</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="portfolio-item bg-white rounded-4 shadow-sm overflow-hidden hover-lift">
                    <div class="portfolio-image" style="height: 200px; background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); position: relative;">
                        <div class="d-flex align-items-center justify-content-center h-100">
                            <div class="text-center text-white">
                                <i class="fab fa-youtube fa-3x mb-3"></i>
                                <h6>YouTube Channel</h6>
                            </div>
                        </div>
                        <div class="portfolio-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-75 d-flex align-items-center justify-content-center opacity-0 transition-all">
                            <a href="#" class="btn btn-warning btn-sm">View Project</a>
                        </div>
                    </div>
                    <div class="p-3">
                        <h6 class="fw-bold mb-2">Tech Channel Setup</h6>
                        <p class="text-muted small mb-0">Complete channel branding and thumbnail designs</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="portfolio.php" class="btn btn-primary btn-lg">
                <i class="fas fa-eye me-2"></i>View All Projects
            </a>
        </div>
    </div>
</section>

<!-- Pricing Plans Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold mb-3">Affordable Packages</h2>
            <p class="lead text-muted">Choose the perfect package for your business needs</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="pricing-card bg-white rounded-4 shadow-sm p-4 h-100 text-center hover-lift">
                    <div class="pricing-header mb-4">
                        <h5 class="fw-bold text-primary">Basic Package</h5>
                        <div class="price mb-3">
                            <span class="h2 fw-bold text-dark currency-price" data-pkr="5000" data-usd="20">Rs. 5,000</span>
                            <small class="text-muted">/project</small>
                        </div>
                        <p class="text-muted">Perfect for startups</p>
                    </div>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Logo Design</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Business Card Design</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>2 Revisions</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>High-Quality Files</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>7-Day Delivery</li>
                    </ul>
                    <a href="#quote-form" class="btn btn-outline-primary w-100">Get Started</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="pricing-card bg-primary text-white rounded-4 shadow-lg p-4 h-100 text-center hover-lift position-relative">
                    <div class="position-absolute top-0 start-50 translate-middle">
                        <span class="badge bg-warning text-dark px-3 py-2">Most Popular</span>
                    </div>
                    <div class="pricing-header mb-4 mt-3">
                        <h5 class="fw-bold">Standard Package</h5>
                        <div class="price mb-3">
                            <span class="h2 fw-bold currency-price" data-pkr="15000" data-usd="60">Rs. 15,000</span>
                            <small>/project</small>
                        </div>
                        <p>Complete branding solution</p>
                    </div>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="fas fa-check text-warning me-2"></i>Complete Brand Identity</li>
                        <li class="mb-2"><i class="fas fa-check text-warning me-2"></i>Logo + Business Cards</li>
                        <li class="mb-2"><i class="fas fa-check text-warning me-2"></i>Social Media Graphics</li>
                        <li class="mb-2"><i class="fas fa-check text-warning me-2"></i>Unlimited Revisions</li>
                        <li class="mb-2"><i class="fas fa-check text-warning me-2"></i>5-Day Delivery</li>
                    </ul>
                    <a href="#quote-form" class="btn btn-warning text-dark w-100 fw-bold">Get Started</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="pricing-card bg-white rounded-4 shadow-sm p-4 h-100 text-center hover-lift">
                    <div class="pricing-header mb-4">
                        <h5 class="fw-bold text-primary">Premium Package</h5>
                        <div class="price mb-3">
                            <span class="h2 fw-bold text-dark currency-price" data-pkr="25000" data-usd="100">Rs. 25,000</span>
                            <small class="text-muted">/project</small>
                        </div>
                        <p class="text-muted">Everything you need</p>
                    </div>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Website + Branding</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Mobile Responsive</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>SEO Optimization</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Social Media Setup</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>3-Day Delivery</li>
                    </ul>
                    <a href="#quote-form" class="btn btn-outline-primary w-100">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Me Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="display-6 fw-bold mb-4">Why Choose Waheed Digital Solutions?</h2>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="feature-item">
                            <div class="feature-icon mb-3">
                                <i class="fas fa-dollar-sign fa-2x text-success"></i>
                            </div>
                            <h5 class="fw-bold">40% Lower Fees</h5>
                            <p class="text-muted">Get premium quality services at significantly lower rates than market standards.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-item">
                            <div class="feature-icon mb-3">
                                <i class="fas fa-rocket fa-2x text-primary"></i>
                            </div>
                            <h5 class="fw-bold">Fast Delivery</h5>
                            <p class="text-muted">Quick turnaround times without compromising on quality or attention to detail.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-item">
                            <div class="feature-icon mb-3">
                                <i class="fas fa-award fa-2x text-warning"></i>
                            </div>
                            <h5 class="fw-bold">Top Quality</h5>
                            <p class="text-muted">Professional-grade work that meets industry standards and exceeds expectations.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-item">
                            <div class="feature-icon mb-3">
                                <i class="fas fa-headset fa-2x text-info"></i>
                            </div>
                            <h5 class="fw-bold">24/7 Support</h5>
                            <p class="text-muted">Dedicated support throughout the project and beyond completion.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-center">
                    <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" 
                         alt="Digital Services" class="img-fluid rounded-4 shadow-lg">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Preview Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold mb-3">Recent Work</h2>
            <p class="lead text-muted">A glimpse of my latest projects and successful deliveries</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="portfolio-item">
                    <div class="card border-0 shadow-sm hover-lift">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" 
                             class="card-img-top" alt="E-commerce Website" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">E-commerce Platform</h5>
                            <p class="card-text text-muted">Complete online store with payment integration and inventory management.</p>
                            <span class="badge bg-primary">Web Development</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="portfolio-item">
                    <div class="card border-0 shadow-sm hover-lift">
                        <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" 
                             class="card-img-top" alt="Brand Identity" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Brand Identity Package</h5>
                            <p class="card-text text-muted">Complete branding solution including logo, business cards, and style guide.</p>
                            <span class="badge bg-success">Graphic Design</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="portfolio-item">
                    <div class="card border-0 shadow-sm hover-lift">
                        <img src="https://images.unsplash.com/photo-1432888622747-4eb9a8efeb07?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" 
                             class="card-img-top" alt="SEO Campaign" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">SEO Campaign</h5>
                            <p class="card-text text-muted">Increased organic traffic by 300% through strategic SEO optimization.</p>
                            <span class="badge bg-warning text-dark">Digital Marketing</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="portfolio.php" class="btn btn-outline-primary btn-lg px-4">
                <i class="fas fa-eye me-2"></i>
                View Full Portfolio
            </a>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<!-- Skills & Expertise Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold mb-3">Technical Skills & Expertise</h2>
            <p class="lead text-muted">Professional tools and technologies I work with</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="skill-category bg-white rounded-4 shadow-sm p-4 h-100">
                    <h5 class="fw-bold mb-4 text-primary">
                        <i class="fas fa-code me-2"></i>Web Development
                    </h5>
                    <div class="skill-item mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="fw-bold">HTML/CSS/JavaScript</span>
                            <span class="text-muted">95%</span>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar bg-primary" style="width: 95%"></div>
                        </div>
                    </div>
                    <div class="skill-item mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="fw-bold">WordPress & PHP</span>
                            <span class="text-muted">90%</span>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar bg-success" style="width: 90%"></div>
                        </div>
                    </div>
                    <div class="skill-item mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="fw-bold">Shopify Development</span>
                            <span class="text-muted">85%</span>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar bg-info" style="width: 85%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="skill-category bg-white rounded-4 shadow-sm p-4 h-100">
                    <h5 class="fw-bold mb-4 text-primary">
                        <i class="fas fa-palette me-2"></i>Design & Creative
                    </h5>
                    <div class="skill-item mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="fw-bold">Photoshop & Illustrator</span>
                            <span class="text-muted">95%</span>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar bg-warning" style="width: 95%"></div>
                        </div>
                    </div>
                    <div class="skill-item mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="fw-bold">Figma & UI/UX</span>
                            <span class="text-muted">88%</span>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar bg-danger" style="width: 88%"></div>
                        </div>
                    </div>
                    <div class="skill-item mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="fw-bold">Video Editing</span>
                            <span class="text-muted">80%</span>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar bg-secondary" style="width: 80%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-2">
            <div class="col-lg-6">
                <div class="skill-category bg-white rounded-4 shadow-sm p-4 h-100">
                    <h5 class="fw-bold mb-4 text-primary">
                        <i class="fas fa-chart-line me-2"></i>Digital Marketing
                    </h5>
                    <div class="skill-item mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="fw-bold">SEO & Analytics</span>
                            <span class="text-muted">92%</span>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar bg-success" style="width: 92%"></div>
                        </div>
                    </div>
                    <div class="skill-item mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="fw-bold">Google Ads & Facebook</span>
                            <span class="text-muted">85%</span>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar bg-primary" style="width: 85%"></div>
                        </div>
                    </div>
                    <div class="skill-item mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="fw-bold">Social Media Marketing</span>
                            <span class="text-muted">90%</span>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar bg-info" style="width: 90%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="skill-category bg-white rounded-4 shadow-sm p-4 h-100">
                    <h5 class="fw-bold mb-4 text-primary">
                        <i class="fas fa-tools me-2"></i>Business Tools
                    </h5>
                    <div class="skill-item mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="fw-bold">Excel & Data Analysis</span>
                            <span class="text-muted">88%</span>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar bg-warning" style="width: 88%"></div>
                        </div>
                    </div>
                    <div class="skill-item mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="fw-bold">PowerPoint & Presentations</span>
                            <span class="text-muted">95%</span>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar bg-danger" style="width: 95%"></div>
                        </div>
                    </div>
                    <div class="skill-item mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="fw-bold">Project Management</span>
                            <span class="text-muted">90%</span>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar bg-secondary" style="width: 90%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Industries We Serve Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold mb-3">Industries We Work With</h2>
            <p class="lead text-muted">Serving diverse businesses across Pakistan and worldwide</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="industry-card bg-white rounded-4 shadow-sm p-4 text-center hover-lift h-100">
                    <div class="industry-icon mb-3">
                        <div class="bg-primary bg-gradient rounded-circle d-flex align-items-center justify-content-center mx-auto" style="width: 80px; height: 80px;">
                            <i class="fas fa-utensils fa-2x text-white"></i>
                        </div>
                    </div>
                    <h5 class="fw-bold mb-3">Restaurants & Food</h5>
                    <p class="text-muted small">Menu design, branding, online ordering systems, and social media marketing for food businesses</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="industry-card bg-white rounded-4 shadow-sm p-4 text-center hover-lift h-100">
                    <div class="industry-icon mb-3">
                        <div class="bg-success bg-gradient rounded-circle d-flex align-items-center justify-content-center mx-auto" style="width: 80px; height: 80px;">
                            <i class="fas fa-heartbeat fa-2x text-white"></i>
                        </div>
                    </div>
                    <h5 class="fw-bold mb-3">Healthcare & Medical</h5>
                    <p class="text-muted small">Professional websites, appointment systems, and digital marketing for clinics and hospitals</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="industry-card bg-white rounded-4 shadow-sm p-4 text-center hover-lift h-100">
                    <div class="industry-icon mb-3">
                        <div class="bg-warning bg-gradient rounded-circle d-flex align-items-center justify-content-center mx-auto" style="width: 80px; height: 80px;">
                            <i class="fas fa-home fa-2x text-white"></i>
                        </div>
                    </div>
                    <h5 class="fw-bold mb-3">Real Estate</h5>
                    <p class="text-muted small">Property websites, lead generation systems, and marketing materials for real estate agencies</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="industry-card bg-white rounded-4 shadow-sm p-4 text-center hover-lift h-100">
                    <div class="industry-icon mb-3">
                        <div class="bg-info bg-gradient rounded-circle d-flex align-items-center justify-content-center mx-auto" style="width: 80px; height: 80px;">
                            <i class="fas fa-shopping-cart fa-2x text-white"></i>
                        </div>
                    </div>
                    <h5 class="fw-bold mb-3">E-commerce</h5>
                    <p class="text-muted small">Online stores, product catalogs, payment integration, and digital marketing for retail businesses</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="industry-card bg-white rounded-4 shadow-sm p-4 text-center hover-lift h-100">
                    <div class="industry-icon mb-3">
                        <div class="bg-danger bg-gradient rounded-circle d-flex align-items-center justify-content-center mx-auto" style="width: 80px; height: 80px;">
                            <i class="fas fa-graduation-cap fa-2x text-white"></i>
                        </div>
                    </div>
                    <h5 class="fw-bold mb-3">Education</h5>
                    <p class="text-muted small">Educational websites, online learning platforms, and digital marketing for schools and institutes</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="industry-card bg-white rounded-4 shadow-sm p-4 text-center hover-lift h-100">
                    <div class="industry-icon mb-3">
                        <div class="bg-secondary bg-gradient rounded-circle d-flex align-items-center justify-content-center mx-auto" style="width: 80px; height: 80px;">
                            <i class="fas fa-laptop-code fa-2x text-white"></i>
                        </div>
                    </div>
                    <h5 class="fw-bold mb-3">Technology</h5>
                    <p class="text-muted small">Tech company websites, software documentation, and digital marketing for IT businesses</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if (!empty($testimonials)): ?>
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold mb-3">What Clients Say</h2>
            <p class="lead text-muted">Join satisfied clients who trust Waheed Digital Solutions</p>
        </div>
        
        <div class="row g-4">
            <?php foreach (array_slice($testimonials, 0, 3) as $testimonial): ?>
                <div class="col-lg-4">
                    <div class="testimonial-card h-100 p-4 bg-white rounded-4 shadow-sm">
                        <div class="mb-3">
                            <?php for ($i = 1; $i <= 5; $i++): ?>
                                <i class="fas fa-star text-warning"></i>
                            <?php endfor; ?>
                        </div>
                        <blockquote class="mb-4">
                            <p class="text-muted">"<?php echo escape($testimonial['content']); ?>"</p>
                        </blockquote>
                        <div class="d-flex align-items-center">
                            <div class="bg-primary bg-gradient rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                <?php 
                                // Service-specific icons based on testimonial content
                                $content = strtolower($testimonial['content'] ?? '');
                                if (strpos($content, 'youtube') !== false || strpos($content, 'thumbnail') !== false) {
                                    echo '<i class="fab fa-youtube text-white"></i>';
                                } elseif (strpos($content, 'logo') !== false || strpos($content, 'branding') !== false) {
                                    echo '<i class="fas fa-palette text-white"></i>';
                                } elseif (strpos($content, 'website') !== false || strpos($content, 'development') !== false) {
                                    echo '<i class="fas fa-code text-white"></i>';
                                } elseif (strpos($content, 'google') !== false || strpos($content, 'social') !== false) {
                                    echo '<i class="fas fa-share-alt text-white"></i>';
                                } elseif (strpos($content, 'data') !== false || strpos($content, 'excel') !== false) {
                                    echo '<i class="fas fa-chart-bar text-white"></i>';
                                } elseif (strpos($content, 'cv') !== false || strpos($content, 'resume') !== false) {
                                    echo '<i class="fas fa-file-alt text-white"></i>';
                                } else {
                                    echo '<i class="fas fa-user text-white"></i>';
                                }
                                ?>
                            </div>
                            <div>
                                <h6 class="mb-0 fw-bold"><?php echo escape($testimonial['author_name'] ?? 'Anonymous'); ?></h6>
                                <small class="text-muted"><?php echo escape($testimonial['author_title'] ?? 'Client'); ?></small>
                                <div class="mt-1">
                                    <span class="badge bg-light text-dark small">
                                        <i class="fas fa-map-marker-alt me-1"></i>Karachi
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Quote Form Section -->
<section id="quote-form" class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5">
                    <h2 class="display-5 fw-bold mb-3">Get Your Free Quote</h2>
                    <p class="lead text-muted">Tell me about your project and get a personalized quote within 24 hours</p>
                </div>
                
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-5">
                        <form method="POST" action="contact.php" class="needs-validation" novalidate>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Full Name *</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                    <div class="invalid-feedback">Please provide your name.</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email Address *</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                    <div class="invalid-feedback">Please provide a valid email.</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" name="phone">
                                </div>
                                <div class="col-md-6">
                                    <label for="service" class="form-label">Service Needed *</label>
                                    <select class="form-select" id="service" name="service" required>
                                        <option value="">Select a service...</option>
                                        <option value="web-development">Website Design & Development</option>
                                        <option value="graphic-design">Graphic Design & Branding</option>
                                        <option value="seo-marketing">SEO & Digital Marketing</option>
                                        <option value="ecommerce">E-Commerce Setup & Management</option>
                                        <option value="analytics">Data Analytics & Business Insights</option>
                                        <option value="other">Other (Please specify in message)</option>
                                    </select>
                                    <div class="invalid-feedback">Please select a service.</div>
                                </div>
                                <div class="col-12">
                                    <label for="budget" class="form-label">Project Budget</label>
                                    <select class="form-select" id="budget" name="budget">
                                        <option value="">Select budget range...</option>
                                        <option value="under-500">Under $500</option>
                                        <option value="500-1000">$500 - $1,000</option>
                                        <option value="1000-2500">$1,000 - $2,500</option>
                                        <option value="2500-5000">$2,500 - $5,000</option>
                                        <option value="over-5000">Over $5,000</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label">Project Details *</label>
                                    <textarea class="form-control" id="message" name="message" rows="5" 
                                              placeholder="Please describe your project requirements, timeline, and any specific features you need..." required></textarea>
                                    <div class="invalid-feedback">Please describe your project.</div>
                                </div>
                            </div>
                            
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="fas fa-paper-plane me-2"></i>
                                    Send Quote Request
                                </button>
                            </div>
                            
                            <div class="text-center mt-3">
                                <small class="text-muted">
                                    <i class="fas fa-clock me-1"></i>
                                    You'll receive a detailed quote within 24 hours
                                </small>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<?php if (!empty($faqs)): ?>
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold mb-3">Frequently Asked Questions</h2>
            <p class="lead text-muted">Everything you need to know about my services</p>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="faqAccordion">
                    <?php foreach ($faqs as $index => $faq): ?>
                        <div class="accordion-item border-0 mb-3 shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button <?php echo $index === 0 ? '' : 'collapsed'; ?>" type="button" 
                                        data-bs-toggle="collapse" data-bs-target="#faq<?php echo $index; ?>">
                                    <?php echo escape($faq['question']); ?>
                                </button>
                            </h2>
                            <div id="faq<?php echo $index; ?>" class="accordion-collapse collapse <?php echo $index === 0 ? 'show' : ''; ?>" 
                                 data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <?php echo nl2br(escape($faq['answer'])); ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php
$additional_scripts = '
<script>
// Form validation
(function() {
    "use strict";
    window.addEventListener("load", function() {
        var forms = document.getElementsByClassName("needs-validation");
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener("submit", function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add("was-validated");
            }, false);
        });
    }, false);
})();

// Smooth scrolling for anchor links
document.querySelectorAll("a[href^=\"#\"]").forEach(anchor => {
    anchor.addEventListener("click", function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute("href"));
        if (target) {
            target.scrollIntoView({
                behavior: "smooth",
                block: "start"
            });
        }
    });
});

// Add hover effects
document.addEventListener("DOMContentLoaded", function() {
    const cards = document.querySelectorAll(".hover-lift");
    cards.forEach(card => {
        card.addEventListener("mouseenter", function() {
            this.style.transform = "translateY(-5px)";
            this.style.transition = "transform 0.3s ease";
        });
        card.addEventListener("mouseleave", function() {
            this.style.transform = "translateY(0)";
        });
    });
    
    // Counter Animation
    function animateCounters() {
        const counters = document.querySelectorAll(".counter");
        const speed = 200;

        counters.forEach(counter => {
            const animate = () => {
                const value = +counter.getAttribute("data-target");
                const data = +counter.innerText;
                const time = value / speed;
                
                if (data < value) {
                    counter.innerText = Math.ceil(data + time);
                    setTimeout(animate, 1);
                } else {
                    counter.innerText = value;
                }
            }
            animate();
        });
    }

    // Intersection Observer for counter animation
    const counterSection = document.querySelector(".counter");
    if (counterSection) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    observer.unobserve(entry.target);
                }
            });
        });
        
        const statsSection = document.querySelector(".counter").closest("section");
        if (statsSection) {
            observer.observe(statsSection);
        }
    }
    
    // Progress bar animation
    const progressBars = document.querySelectorAll(".progress-bar");
    const progressObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const progressBar = entry.target;
                const width = progressBar.style.width;
                progressBar.style.width = "0%";
                setTimeout(() => {
                    progressBar.style.width = width;
                }, 100);
                progressObserver.unobserve(entry.target);
            }
        });
    });
    
    progressBars.forEach(bar => {
        progressObserver.observe(bar);
    });
    
    // Currency Detection based on IP
    function detectCurrency() {
        fetch("https://ipapi.co/json/")
            .then(response => response.json())
            .then(data => {
                const country = data.country_code;
                const currencyPrices = document.querySelectorAll(".currency-price");
                
                currencyPrices.forEach(price => {
                    const pkrPrice = price.getAttribute("data-pkr");
                    const usdPrice = price.getAttribute("data-usd");
                    
                    if (country === "PK") {
                        // Pakistani IP - show PKR
                        price.textContent = "Rs. " + parseInt(pkrPrice).toLocaleString();
                    } else {
                        // International IP - show USD
                        price.textContent = "$" + parseInt(usdPrice).toLocaleString();
                    }
                });
            })
            .catch(error => {
                // Fallback to PKR if API fails
                console.log("Currency detection failed, showing PKR");
            });
    }
    
    // Call currency detection
    detectCurrency();
});
</script>
';

echo $additional_scripts;
?>

<!-- Payment Methods Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold mb-3">Secure & Convenient Payment Options</h2>
            <p class="lead text-muted">Pay easily from anywhere — Pakistan or worldwide</p>
        </div>
        
        <div class="row mb-5">
            <div class="col-lg-6 mb-4">
                <h4 class="fw-bold mb-4 text-primary">
                    <i class="fas fa-flag me-2"></i>🇵🇰 Local Pakistan Payments
                </h4>
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="payment-card h-100 p-3 bg-white rounded-4 shadow-sm hover-lift">
                            <div class="text-center">
                                <div class="payment-icon mb-3">
                                    <div class="bg-success rounded-circle d-flex align-items-center justify-content-center mx-auto" style="width: 60px; height: 60px;">
                                        <i class="fas fa-mobile-alt fa-lg text-white"></i>
                                    </div>
                                </div>
                                <h6 class="fw-bold">Easypaisa</h6>
                                <small class="text-muted">Fast mobile wallet payments</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="payment-card h-100 p-3 bg-white rounded-4 shadow-sm hover-lift">
                            <div class="text-center">
                                <div class="payment-icon mb-3">
                                    <div class="bg-warning rounded-circle d-flex align-items-center justify-content-center mx-auto" style="width: 60px; height: 60px;">
                                        <i class="fas fa-mobile-alt fa-lg text-white"></i>
                                    </div>
                                </div>
                                <h6 class="fw-bold">JazzCash</h6>
                                <small class="text-muted">Easy and instant local transfer</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="payment-card h-100 p-3 bg-white rounded-4 shadow-sm hover-lift">
                            <div class="text-center">
                                <div class="payment-icon mb-3">
                                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mx-auto" style="width: 60px; height: 60px;">
                                        <i class="fas fa-university fa-lg text-white"></i>
                                    </div>
                                </div>
                                <h6 class="fw-bold">Bank Transfer</h6>
                                <small class="text-muted">HBL, UBL, Meezan, Allied Bank</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="payment-card h-100 p-3 bg-white rounded-4 shadow-sm hover-lift">
                            <div class="text-center">
                                <div class="payment-icon mb-3">
                                    <div class="bg-info rounded-circle d-flex align-items-center justify-content-center mx-auto" style="width: 60px; height: 60px;">
                                        <i class="fas fa-credit-card fa-lg text-white"></i>
                                    </div>
                                </div>
                                <h6 class="fw-bold">Bank Alfalah</h6>
                                <small class="text-muted">Direct deposit accepted</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 mb-4">
                <h4 class="fw-bold mb-4 text-primary">
                    <i class="fas fa-globe me-2"></i>🌍 International Payments
                </h4>
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="payment-card h-100 p-3 bg-white rounded-4 shadow-sm hover-lift">
                            <div class="text-center">
                                <div class="payment-icon mb-3">
                                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mx-auto" style="width: 60px; height: 60px;">
                                        <i class="fab fa-paypal fa-lg text-white"></i>
                                    </div>
                                </div>
                                <h6 class="fw-bold">PayPal</h6>
                                <small class="text-muted">For international clients</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="payment-card h-100 p-3 bg-white rounded-4 shadow-sm hover-lift">
                            <div class="text-center">
                                <div class="payment-icon mb-3">
                                    <div class="bg-success rounded-circle d-flex align-items-center justify-content-center mx-auto" style="width: 60px; height: 60px;">
                                        <i class="fas fa-credit-card fa-lg text-white"></i>
                                    </div>
                                </div>
                                <h6 class="fw-bold">Payoneer</h6>
                                <small class="text-muted">Global freelance payments</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="payment-card h-100 p-3 bg-white rounded-4 shadow-sm hover-lift">
                            <div class="text-center">
                                <div class="payment-icon mb-3">
                                    <div class="bg-danger rounded-circle d-flex align-items-center justify-content-center mx-auto" style="width: 60px; height: 60px;">
                                        <i class="fas fa-exchange-alt fa-lg text-white"></i>
                                    </div>
                                </div>
                                <h6 class="fw-bold">Wise Transfer</h6>
                                <small class="text-muted">Worldwide low-fee transfers</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="payment-card h-100 p-3 bg-white rounded-4 shadow-sm hover-lift">
                            <div class="text-center">
                                <div class="payment-icon mb-3">
                                    <div class="bg-warning rounded-circle d-flex align-items-center justify-content-center mx-auto" style="width: 60px; height: 60px;">
                                        <i class="fas fa-money-bill-wave fa-lg text-white"></i>
                                    </div>
                                </div>
                                <h6 class="fw-bold">Western Union</h6>
                                <small class="text-muted">Cash-based global transfer</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Payment Info & Contact -->
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="bg-white rounded-4 shadow-sm p-4 mb-4">
                    <div class="text-center mb-4">
                        <h5 class="fw-bold text-primary mb-3">
                            <i class="fas fa-shield-alt me-2"></i>Payment Information
                        </h5>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="d-flex align-items-center justify-content-center">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    <span class="small">100% Secure</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex align-items-center justify-content-center">
                                    <i class="fas fa-clock text-info me-2"></i>
                                    <span class="small">24h Confirmation</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex align-items-center justify-content-center">
                                    <i class="fas fa-receipt text-warning me-2"></i>
                                    <span class="small">Invoice Provided</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-light rounded-3 p-3 mb-4">
                        <h6 class="fw-bold mb-2">📋 Payment Process:</h6>
                        <ul class="list-unstyled mb-0 small">
                            <li class="mb-1">✅ All payments are 100% secure and verified</li>
                            <li class="mb-1">✅ After payment, share receipt via WhatsApp or email</li>
                            <li class="mb-0">✅ Invoice and confirmation within 24 hours</li>
                        </ul>
                    </div>
                    
                    <div class="text-center">
                        <h6 class="fw-bold mb-3">📞 Payment Confirmation Contact:</h6>
                        <div class="row g-2 mb-3">
                            <div class="col-md-4">
                                <div class="d-flex align-items-center justify-content-center">
                                    <i class="fas fa-user text-primary me-2"></i>
                                    <strong>Waheed Ahmed</strong>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex align-items-center justify-content-center">
                                    <i class="fab fa-whatsapp text-success me-2"></i>
                                    <a href="https://wa.me/923223558510" class="text-decoration-none">+92 322 3558510</a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex align-items-center justify-content-center">
                                    <i class="fas fa-envelope text-info me-2"></i>
                                    <a href="mailto:bauth652@gmail.com" class="text-decoration-none">bauth652@gmail.com</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="d-flex flex-wrap gap-2 justify-content-center">
                            <a href="https://wa.me/923223558510" class="btn btn-success btn-sm">
                                <i class="fab fa-whatsapp me-1"></i>Send Payment Confirmation
                            </a>
                            <a href="mailto:bauth652@gmail.com" class="btn btn-outline-primary btn-sm">
                                <i class="fas fa-envelope me-1"></i>Email Receipt
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="text-center">
                    <div class="bg-primary bg-gradient rounded-3 p-3 text-white">
                        <i class="fas fa-lock me-2"></i>
                        <strong>"Your trust and security are my top priority. I accept both local and international payments with 100% transparency."</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
