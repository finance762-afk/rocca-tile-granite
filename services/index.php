<?php
$pageTitle       = "Our Services | Rocca Tile & Granite LLC — Chino, CA";
$pageDescription = "Explore tile installation, granite countertops, kitchen and bathroom remodeling, cabinet services, and flooring from Rocca Tile & Granite in Chino, CA.";
$canonicalUrl    = "https://www.roccatileandgranite.com/services";
$ogImage         = "https://www.roccatileandgranite.com/assets/images/og-services.jpg";
$currentPage     = "services";
$heroImage       = "https://i.imgur.com/SUDtWdP.jpeg";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;

$schemaMarkup = '{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Home",
      "item": "https://www.roccatileandgranite.com/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Services",
      "item": "https://www.roccatileandgranite.com/services"
    }
  ]
}';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

  <main id="main-content">

    <!-- Page Hero -->
    <section class="page-hero" style="background-image: url('https://i.imgur.com/SUDtWdP.jpeg');">
      <div class="page-hero-overlay"></div>
      <div class="container page-hero-content">
        <h1>Our Services</h1>
        <p class="page-hero-subtitle">Complete Kitchen, Bathroom &amp; Flooring Solutions for Inland Empire Homeowners</p>
        <a href="tel:9092383188" class="hero-phone"><i data-lucide="phone" style="width:20px;height:20px;"></i> (909) 238-3188</a>
      </div>
    </section>

    <!-- Breadcrumb -->
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <div class="container">
        <ol class="breadcrumb-list">
          <li><a href="/">Home</a></li>
          <li aria-current="page">Services</li>
        </ol>
      </div>
    </nav>

    <!-- Identity & Intro -->
    <section class="section services-intro">
      <div class="container">
        <p class="prose-centered identity-sentence">Rocca Tile &amp; Granite LLC is a licensed and insured remodeling contractor based in Chino, California, providing complete kitchen, bathroom, tile, granite, cabinet, and flooring services across the Inland Empire.</p>
      </div>
    </section>

    <!-- Services Grid -->
    <section class="section bg-alt">
      <div class="container">
        <h2 class="section-title" data-animate="fade-up">What We Do</h2>
        <div class="grid-3" data-animate="fade-up">

          <!-- Kitchen Remodeling -->
          <a href="/services/kitchen-remodeling" class="service-card">
            <div class="service-card-img">
              <img src="https://i.imgur.com/SUDtWdP.jpeg" alt="Kitchen remodeling services in Chino and the Inland Empire" width="600" height="450" loading="lazy">
            </div>
            <div class="service-card-body">
              <h3>Kitchen Remodeling</h3>
              <p>Complete kitchen transformations — countertops, cabinets, tile backsplashes, flooring, and layout redesigns tailored to how your family uses the space.</p>
              <span class="service-card-link">Learn More <i data-lucide="arrow-right" style="width:16px;height:16px;"></i></span>
            </div>
          </a>

          <!-- Bathroom Remodeling -->
          <a href="/services/bathroom-remodeling" class="service-card">
            <div class="service-card-img">
              <img src="https://i.imgur.com/7135LDU.jpeg" alt="Bathroom remodeling services in Chino and the Inland Empire" width="600" height="450" loading="lazy">
            </div>
            <div class="service-card-body">
              <h3>Bathroom Remodeling</h3>
              <p>Custom tile showers, granite vanities, tub-to-shower conversions, and full bathroom renovations that increase your home's value and daily comfort.</p>
              <span class="service-card-link">Learn More <i data-lucide="arrow-right" style="width:16px;height:16px;"></i></span>
            </div>
          </a>

          <!-- Tile Installation -->
          <a href="/services/tile-installation" class="service-card">
            <div class="service-card-img">
              <img src="https://i.imgur.com/Uvaj7ZZ.jpeg" alt="Tile installation services in Chino and the Inland Empire" width="600" height="450" loading="lazy">
            </div>
            <div class="service-card-body">
              <h3>Tile Installation</h3>
              <p>Porcelain, ceramic, natural stone, and decorative mosaic tile installed across floors, walls, showers, backsplashes, and outdoor patios.</p>
              <span class="service-card-link">Learn More <i data-lucide="arrow-right" style="width:16px;height:16px;"></i></span>
            </div>
          </a>

          <!-- Granite Countertops -->
          <a href="/services/granite-countertops" class="service-card">
            <div class="service-card-img">
              <img src="https://i.imgur.com/Ri0nHhg.jpeg" alt="Granite countertop installation in Chino and the Inland Empire" width="600" height="450" loading="lazy">
            </div>
            <div class="service-card-body">
              <h3>Granite Countertops</h3>
              <p>Custom-fabricated granite, quartz, and marble countertops — templated, cut, polished, and installed for kitchens, bathrooms, and islands.</p>
              <span class="service-card-link">Learn More <i data-lucide="arrow-right" style="width:16px;height:16px;"></i></span>
            </div>
          </a>

          <!-- Cabinet Services -->
          <a href="/services/cabinet-services" class="service-card">
            <div class="service-card-img">
              <img src="https://i.imgur.com/dg0mcaN.jpeg" alt="Cabinet installation and refinishing in Chino and the Inland Empire" width="600" height="450" loading="lazy">
            </div>
            <div class="service-card-body">
              <h3>Cabinet Services</h3>
              <p>New cabinet construction, painting, refinishing, refacing, and installation — from modern flat-panel to traditional raised-panel styles.</p>
              <span class="service-card-link">Learn More <i data-lucide="arrow-right" style="width:16px;height:16px;"></i></span>
            </div>
          </a>

          <!-- Flooring Installation -->
          <a href="/services/flooring-installation" class="service-card">
            <div class="service-card-img">
              <img src="https://i.imgur.com/4vCoIlC.jpeg" alt="Flooring installation services in Chino and the Inland Empire" width="600" height="450" loading="lazy">
            </div>
            <div class="service-card-body">
              <h3>Flooring Installation</h3>
              <p>Tile, hardwood, luxury vinyl plank, laminate, carpet, and epoxy — professional flooring installation for every room in your home.</p>
              <span class="service-card-link">Learn More <i data-lucide="arrow-right" style="width:16px;height:16px;"></i></span>
            </div>
          </a>

        </div>
      </div>
    </section>

    <!-- Why Choose Rocca -->
    <section class="section">
      <div class="container">
        <h2 class="section-title" data-animate="fade-up">Why Inland Empire Homeowners Choose Rocca Tile &amp; Granite</h2>
        <div class="benefits-grid" data-animate="fade-up">

          <div class="benefit-item">
            <div class="benefit-icon"><i data-lucide="shield-check" style="width:32px;height:32px;"></i></div>
            <h3>Licensed &amp; Insured</h3>
            <p>CSLB #927459, active and in good standing since 2004.</p>
          </div>

          <div class="benefit-item">
            <div class="benefit-icon"><i data-lucide="hammer" style="width:32px;height:32px;"></i></div>
            <h3>Single-Source Contractor</h3>
            <p>Tile, stone, cabinets, countertops, and flooring — one crew, one point of contact.</p>
          </div>

          <div class="benefit-item">
            <div class="benefit-icon"><i data-lucide="calendar" style="width:32px;height:32px;"></i></div>
            <h3>20+ Years Experience</h3>
            <p>Over two decades of hands-on remodeling across the Inland Empire.</p>
          </div>

          <div class="benefit-item">
            <div class="benefit-icon"><i data-lucide="file-text" style="width:32px;height:32px;"></i></div>
            <h3>Free On-Site Estimates</h3>
            <p>Detailed written estimates with material options and clear pricing.</p>
          </div>

        </div>
      </div>
    </section>

    <!-- Closing CTA -->
    <section class="closing-cta" style="background-image: url('https://i.imgur.com/FJdxDpq.jpeg');">
      <div class="closing-cta-overlay"></div>
      <div class="container closing-cta-content" data-animate="fade-up">
        <h2>Start Your Remodel with a Free Estimate</h2>
        <p>Tell us about your project and we'll provide a detailed quote — no pressure, no obligation. Call now or fill out our contact form to get started.</p>
        <div class="closing-cta-actions">
          <a href="tel:9092383188" class="btn-primary"><i data-lucide="phone" style="width:18px;height:18px;"></i> (909) 238-3188</a>
          <a href="/contact" class="btn-secondary">Request a Free Estimate</a>
        </div>
      </div>
    </section>

  </main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
