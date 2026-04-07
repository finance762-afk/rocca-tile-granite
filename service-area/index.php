<?php
$pageTitle       = "Service Area | Rocca Tile & Granite LLC — Chino & Inland Empire, CA";
$pageDescription = "Rocca Tile & Granite LLC serves Chino, Ontario, Pomona, Rancho Cucamonga, Upland, Diamond Bar, Corona, Riverside, and communities within 75 miles. Call (909) 238-3188.";
$canonicalUrl    = "https://rocca-tile.com/service-area";
$ogImage         = "https://i.imgur.com/h0utYwx.png";
$currentPage     = "service-area";
$heroImage       = "";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;

$schemaMarkup = '{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://rocca-tile.com/"},
    {"@type": "ListItem", "position": 2, "name": "Service Area", "item": "https://rocca-tile.com/service-area"}
  ]
}';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

  <main id="main-content">

    <!-- Page Hero -->
    <section class="page-hero" style="background: var(--bg-dark);">
      <div class="container">
        <h1>Serving Chino &amp; the Inland Empire — 75-Mile Radius</h1>
        <p>Kitchen Remodeling, Bathroom Remodeling, Tile, Granite, Cabinets &amp; Flooring Across Southern California</p>
        <a href="tel:+19092383188" class="hero-phone"><i data-lucide="phone" style="width:22px;height:22px;"></i> (909) 238-3188</a>
      </div>
    </section>

    <!-- Breadcrumb -->
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <div class="container">
        <a href="/">Home</a> <span>/</span> Service Area
      </div>
    </nav>

    <!-- Identity & Intro -->
    <section>
      <div class="container">
        <div class="prose-centered" style="text-align:center;">
          <p style="font-size:1.05rem;">Rocca Tile &amp; Granite LLC is a licensed and insured remodeling contractor based in Chino, California. We provide kitchen remodeling, bathroom remodeling, tile installation, granite countertops, cabinet services, and flooring installation across a 75-mile radius — covering the Inland Empire, San Gabriel Valley, North Orange County, and parts of eastern Los Angeles County.</p>
        </div>
      </div>
    </section>

    <!-- Inland Empire -->
    <section style="background: var(--bg-alt);">
      <div class="container">
        <h2 class="section-title" data-animate="fade-up">Inland Empire</h2>
        <div class="prose" data-animate="fade-up">
          <p>The Inland Empire is our home territory. From our base in Chino, we serve homeowners throughout the IE including <strong>Chino, Chino Hills, Ontario, Rancho Cucamonga, Upland, Fontana, Montclair, Eastvale, Corona, Norco,</strong> and <strong>Riverside</strong>. Whether you need a full kitchen gut-and-rebuild in Ontario or a custom tile shower in Rancho Cucamonga, our crew is typically 20 to 40 minutes from your front door.</p>
        </div>
      </div>
    </section>

    <!-- San Gabriel Valley -->
    <section>
      <div class="container">
        <h2 class="section-title" data-animate="fade-up">San Gabriel Valley</h2>
        <div class="prose" data-animate="fade-up">
          <p>We regularly work throughout the San Gabriel Valley, including <strong>Pomona, Diamond Bar, Walnut, West Covina, Covina, Azusa, Glendora, La Verne, Claremont, San Dimas, Arcadia, Pasadena, Rowland Heights,</strong> and <strong>Whittier</strong>. Granite countertop installations, bathroom remodels, and whole-house flooring projects are common calls from this area — and we're just a short drive east on the 60 or 10 freeway.</p>
        </div>
      </div>
    </section>

    <!-- North Orange County -->
    <section style="background: var(--bg-alt);">
      <div class="container">
        <h2 class="section-title" data-animate="fade-up">North Orange County</h2>
        <div class="prose" data-animate="fade-up">
          <p>We also serve North Orange County communities including <strong>Brea, Yorba Linda, Placentia, Fullerton, Anaheim, Anaheim Hills,</strong> and <strong>La Habra</strong>. Kitchen and bathroom remodeling projects in this area are a natural fit — we're close enough for easy coordination and our material suppliers serve both the IE and OC markets, keeping lead times short.</p>
        </div>
      </div>
    </section>

    <!-- All Services Available -->
    <section>
      <div class="container">
        <h2 class="section-title" style="text-align:center;" data-animate="fade-up">Every Service, Everywhere We Go</h2>
        <p class="section-subtitle prose-centered" style="text-align:center;">All of our services are available throughout our entire service area. No matter where you are in the 75-mile radius, you get the same crew, the same quality, and the same licensed contractor.</p>
        <div class="grid-3" data-animate="fade-up">
          <a href="/services/kitchen-remodeling" class="related-card">
            <h3>Kitchen Remodeling</h3>
            <p>Complete kitchen renovations from countertops to cabinets to flooring.</p>
            <span class="service-card-link">Learn more <i data-lucide="arrow-right" style="width:16px;height:16px;"></i></span>
          </a>
          <a href="/services/bathroom-remodeling" class="related-card">
            <h3>Bathroom Remodeling</h3>
            <p>Custom tile showers, granite vanities, and full bathroom renovations.</p>
            <span class="service-card-link">Learn more <i data-lucide="arrow-right" style="width:16px;height:16px;"></i></span>
          </a>
          <a href="/services/tile-installation" class="related-card">
            <h3>Tile Installation</h3>
            <p>Floors, walls, showers, backsplashes, and patios in all tile types.</p>
            <span class="service-card-link">Learn more <i data-lucide="arrow-right" style="width:16px;height:16px;"></i></span>
          </a>
          <a href="/services/granite-countertops" class="related-card">
            <h3>Granite Countertops</h3>
            <p>Custom-fabricated granite, quartz, and marble for kitchens and baths.</p>
            <span class="service-card-link">Learn more <i data-lucide="arrow-right" style="width:16px;height:16px;"></i></span>
          </a>
          <a href="/services/cabinet-services" class="related-card">
            <h3>Cabinet Services</h3>
            <p>Custom construction, refacing, refinishing, and installation.</p>
            <span class="service-card-link">Learn more <i data-lucide="arrow-right" style="width:16px;height:16px;"></i></span>
          </a>
          <a href="/services/flooring-installation" class="related-card">
            <h3>Flooring Installation</h3>
            <p>Tile, hardwood, luxury vinyl plank, laminate, carpet, and epoxy.</p>
            <span class="service-card-link">Learn more <i data-lucide="arrow-right" style="width:16px;height:16px;"></i></span>
          </a>
        </div>
      </div>
    </section>

    <!-- Google Map -->
    <section style="background: var(--bg-alt);">
      <div class="container">
        <h2 class="section-title" style="text-align:center;" data-animate="fade-up">Find Us in Chino, CA</h2>
        <div style="border-radius:var(--radius);overflow:hidden;box-shadow:var(--elevation-2);" data-animate="fade-up">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3315.8!2d-117.689!3d34.012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c32dc0b0b0b0b0%3A0x0!2s13641+Central+Ave%2C+Chino%2C+CA+91710!5e0!3m2!1sen!2sus!4v1700000000000!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Rocca Tile and Granite service area centered on Chino, CA"></iframe>
        </div>
      </div>
    </section>

    <!-- Closing CTA -->
    <section class="closing-cta" style="background-image: url('https://i.imgur.com/FJdxDpq.jpeg');">
      <div class="container" data-animate="fade-up">
        <h2>In Our Service Area? Let's Talk.</h2>
        <p class="prose-centered">Whether you're in Chino, Rancho Cucamonga, Diamond Bar, or anywhere within 75 miles, we'd love to see your space and give you a straight answer on cost, timeline, and scope.</p>
        <a href="tel:+19092383188" class="hero-phone"><i data-lucide="phone" style="width:24px;height:24px;"></i> (909) 238-3188</a>
        <br>
        <a href="/contact" class="btn-primary" style="margin-top:var(--space-md);">Request Your Free Estimate</a>
      </div>
    </section>

  </main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
