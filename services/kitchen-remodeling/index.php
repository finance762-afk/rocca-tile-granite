<?php
$pageTitle       = "Kitchen Remodeling in Chino, CA | Rocca Tile & Granite LLC";
$pageDescription = "Professional kitchen remodeling in Chino and the Inland Empire. Custom cabinets, granite countertops, tile backsplashes, and full kitchen renovations. CSLB #927459. Call (909) 238-3188.";
$canonicalUrl    = "https://rocca-tile.com/services/kitchen-remodeling";
$ogImage         = "https://i.imgur.com/SUDtWdP.jpeg";
$currentPage     = "kitchen-remodeling";
$heroImage       = "https://i.imgur.com/SUDtWdP.jpeg";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;

$schemaMarkup = '[
  {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
      {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://rocca-tile.com/"},
      {"@type": "ListItem", "position": 2, "name": "Services", "item": "https://rocca-tile.com/services"},
      {"@type": "ListItem", "position": 3, "name": "Kitchen Remodeling", "item": "https://rocca-tile.com/services/kitchen-remodeling"}
    ]
  },
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Kitchen Remodeling",
    "provider": {
      "@type": "LocalBusiness",
      "name": "Rocca Tile & Granite LLC",
      "telephone": "+1-909-238-3188",
      "address": {"@type": "PostalAddress", "streetAddress": "13641 Central Ave", "addressLocality": "Chino", "addressRegion": "CA", "postalCode": "91710"}
    },
    "areaServed": {"@type": "GeoCircle", "geoMidpoint": {"@type": "GeoCoordinates", "latitude": 34.0122, "longitude": -117.6889}, "geoRadius": "75 mi"},
    "description": "Complete kitchen remodeling services including custom cabinets, granite countertops, tile backsplashes, flooring, and full gut-and-rebuild renovations."
  },
  {
    "@context": "https://schema.org",
    "@type": "AggregateRating",
    "itemReviewed": {"@type": "LocalBusiness", "name": "Rocca Tile & Granite LLC"},
    "ratingValue": "4.9",
    "reviewCount": "87",
    "bestRating": "5"
  },
  {
    "@context": "https://schema.org",
    "@type": "HowTo",
    "name": "How Kitchen Remodeling Works with Rocca Tile & Granite",
    "step": [
      {"@type": "HowToStep", "position": 1, "name": "In-Home Consultation", "text": "We visit your kitchen, take measurements, discuss your goals, and review material options that fit your budget."},
      {"@type": "HowToStep", "position": 2, "name": "Design & Material Selection", "text": "We finalize the layout, select countertops, cabinets, tile, and fixtures. You approve the plan and detailed estimate."},
      {"@type": "HowToStep", "position": 3, "name": "Demolition & Prep", "text": "Our crew removes existing surfaces, addresses any structural issues, and prepares the space for new installations."},
      {"@type": "HowToStep", "position": 4, "name": "Installation", "text": "Cabinets, countertops, backsplash, flooring, and fixtures are installed in sequence by our team."},
      {"@type": "HowToStep", "position": 5, "name": "Final Walkthrough", "text": "We walk the completed kitchen with you, confirm every detail, and ensure your complete satisfaction."}
    ]
  },
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "How much does a kitchen remodel cost in the Inland Empire?",
        "acceptedAnswer": {"@type": "Answer", "text": "Kitchen remodels in Chino and the Inland Empire typically range from $15,000 to $60,000. A countertop and backsplash refresh runs $15,000–$25,000. A full gut-and-rebuild with custom granite, new cabinetry, and flooring falls between $35,000 and $60,000. We provide free on-site estimates with itemized pricing."}
      },
      {
        "@type": "Question",
        "name": "How long does a full kitchen renovation take?",
        "acceptedAnswer": {"@type": "Answer", "text": "Most kitchen remodels take 4 to 8 weeks from demolition to final walkthrough. A countertop and backsplash refresh can be completed in 2 to 3 weeks. Full gut-and-rebuild projects with layout changes typically require 6 to 8 weeks. We provide a detailed timeline before work begins."}
      },
      {
        "@type": "Question",
        "name": "Can you handle the entire kitchen remodel or do I need separate contractors?",
        "acceptedAnswer": {"@type": "Answer", "text": "We handle everything in-house — demolition, cabinets, countertops, tile, flooring, and fixture installation. As a licensed general contractor (CSLB #927459), we coordinate plumbing and electrical work so you have one point of contact throughout the entire project."}
      }
    ]
  }
]';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

  <main id="main-content">

    <!-- Page Hero -->
    <section class="page-hero" style="background-image: url('https://i.imgur.com/SUDtWdP.jpeg');">
      <div class="container">
        <h1>Kitchen Remodeling in Chino, CA</h1>
        <p>Custom Cabinets, Granite Countertops &amp; Complete Kitchen Renovations for Inland Empire Homeowners</p>
        <a href="tel:+19092383188" class="hero-phone"><i data-lucide="phone" style="width:22px;height:22px;"></i> (909) 238-3188</a>
      </div>
    </section>

    <!-- Breadcrumb -->
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <div class="container">
        <a href="/">Home</a> <span>/</span> <a href="/services">Services</a> <span>/</span> Kitchen Remodeling
      </div>
    </nav>

    <!-- Answer-First Intro -->
    <section>
      <div class="container">
        <div class="prose-centered" style="text-align:center;">
          <p style="font-size:1.05rem;">Kitchen remodels in the Chino and Inland Empire area typically cost between $15,000 and $60,000 depending on scope, and take 4 to 8 weeks from demolition to final walkthrough. Rocca Tile &amp; Granite LLC provides complete kitchen remodeling for homeowners in Chino, CA and across the Inland Empire — from countertop and backsplash refreshes to full gut-and-rebuild transformations with custom cabinetry, granite surfaces, and new flooring.</p>
        </div>
      </div>
    </section>

    <!-- Split-Reverse: What We Build -->
    <section style="background: var(--bg-alt);">
      <div class="container">
        <div class="split-reverse">
          <div data-animate="fade-up">
            <h2 class="section-title">What a Rocca Kitchen Remodel Includes</h2>
            <div class="prose">
              <p>Every kitchen we build is different, but most projects involve some combination of countertops, cabinets, backsplash, flooring, fixtures, and layout changes. We handle the full scope — not just one piece of it.</p>
              <p style="margin-top:var(--space-md);">Whether you want to open up a wall between the kitchen and living room, replace dated laminate with granite, or gut the entire room down to studs and start fresh, our crew manages the project from permit to punch list. We coordinate plumbing, electrical, and structural work so you deal with one contractor — not four.</p>
            </div>
            <a href="/contact" class="btn-primary" style="margin-top:var(--space-xl);">Get a Free Kitchen Estimate</a>
          </div>
          <div class="split-img">
            <img src="https://i.imgur.com/82RnMGa.jpeg" alt="Spacious open kitchen with dark cabinets and granite countertops in Chino home" width="800" height="600" loading="lazy">
          </div>
        </div>
      </div>
    </section>

    <!-- Split: Design & Materials -->
    <section>
      <div class="container">
        <div class="split">
          <div class="split-img">
            <img src="https://i.imgur.com/k3D0e7o.jpeg" alt="Open concept kitchen with white island and modern finishes" width="800" height="600" loading="lazy">
          </div>
          <div data-animate="fade-up">
            <h2 class="section-title">Materials That Fit Your Kitchen and Your Budget</h2>
            <div class="prose">
              <p>We work with every major countertop material — granite, quartz, marble, and solid surface — and source slabs directly from local fabricators so you get competitive pricing and fast turnaround. For cabinets, we build custom or install pre-made lines depending on your budget and timeline.</p>
              <p style="margin-top:var(--space-md);">Tile backsplashes are one of our specialties. From clean subway tile to intricate mosaic patterns, we install it all. And when it comes to flooring, we handle tile, hardwood, luxury vinyl plank, and laminate — whatever makes sense for your kitchen's traffic and your family's lifestyle.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Benefits Grid -->
    <section style="background: var(--bg-alt);">
      <div class="container">
        <h2 class="section-title" style="text-align:center;" data-animate="fade-up">Why Homeowners Choose Rocca for Kitchen Remodels</h2>
        <div class="benefits-grid" data-animate="fade-up">
          <div class="benefit-item">
            <div class="benefit-icon"><i data-lucide="hammer" style="width:24px;height:24px;"></i></div>
            <div>
              <h3>Single-Source Contractor</h3>
              <p>Cabinets, countertops, tile, flooring, and fixtures — all handled by one licensed crew. No juggling subcontractors.</p>
            </div>
          </div>
          <div class="benefit-item">
            <div class="benefit-icon"><i data-lucide="ruler" style="width:24px;height:24px;"></i></div>
            <div>
              <h3>Custom Fabrication</h3>
              <p>Granite and quartz countertops templated, cut, and installed to exact specifications — not off-the-shelf approximations.</p>
            </div>
          </div>
          <div class="benefit-item">
            <div class="benefit-icon"><i data-lucide="shield-check" style="width:24px;height:24px;"></i></div>
            <div>
              <h3>Licensed Since 2004</h3>
              <p>CSLB #927459, fully insured, over 20 years of kitchen remodeling across the Inland Empire.</p>
            </div>
          </div>
          <div class="benefit-item">
            <div class="benefit-icon"><i data-lucide="layout-grid" style="width:24px;height:24px;"></i></div>
            <div>
              <h3>Full Layout Redesigns</h3>
              <p>Open up walls, add islands, reconfigure workflow — we handle structural changes, not just surface finishes.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Mid-page CTA -->
    <section class="inline-cta">
      <div class="container">
        <h2>Planning a Kitchen Remodel?</h2>
        <p>Call for a free on-site estimate with detailed pricing — no pressure, no obligation.</p>
        <a href="tel:+19092383188" style="display:block;font-size:1.4rem;font-weight:700;color:#fff;margin-bottom:var(--space-md);">(909) 238-3188</a>
        <a href="/contact" class="btn-primary">Schedule Your Consultation</a>
      </div>
    </section>

    <!-- Process Section -->
    <section>
      <div class="container">
        <div class="split">
          <div class="split-img">
            <img src="https://i.imgur.com/NkkgfLe.jpeg" alt="Sage green kitchen cabinets with modern hardware" width="800" height="600" loading="lazy">
          </div>
          <div data-animate="fade-up">
            <h2 class="section-title">How Your Kitchen Remodel Comes Together</h2>
            <div class="process-steps">
              <div class="process-step">
                <div class="process-step-num">1</div>
                <div>
                  <h3>In-Home Consultation</h3>
                  <p>We visit your kitchen, take measurements, discuss your goals, and review material options that fit your budget.</p>
                </div>
              </div>
              <div class="process-step">
                <div class="process-step-num">2</div>
                <div>
                  <h3>Design &amp; Material Selection</h3>
                  <p>We finalize the layout, select countertops, cabinets, tile, and fixtures. You approve the plan and detailed estimate before anything starts.</p>
                </div>
              </div>
              <div class="process-step">
                <div class="process-step-num">3</div>
                <div>
                  <h3>Demolition &amp; Prep</h3>
                  <p>Our crew removes existing surfaces, addresses any structural issues, and prepares the space for new installations.</p>
                </div>
              </div>
              <div class="process-step">
                <div class="process-step-num">4</div>
                <div>
                  <h3>Installation</h3>
                  <p>Cabinets, countertops, backsplash, flooring, and fixtures are installed in sequence — one crew managing the entire build.</p>
                </div>
              </div>
              <div class="process-step">
                <div class="process-step-num">5</div>
                <div>
                  <h3>Final Walkthrough</h3>
                  <p>We walk the completed kitchen with you, confirm every detail is right, and make sure you're completely satisfied before we call it done.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Gallery -->
    <section style="background: var(--bg-alt);">
      <div class="container">
        <h2 class="section-title" style="text-align:center;" data-animate="fade-up">Kitchen Remodels Across the Inland Empire</h2>
        <div class="service-gallery" data-animate="fade-up">
          <div class="service-gallery-item">
            <img src="https://i.imgur.com/ZRRBVEw.jpeg" alt="Dark kitchen cabinets with mosaic tile backsplash installed by Rocca Tile" width="600" height="375" loading="lazy">
          </div>
          <div class="service-gallery-item">
            <img src="https://i.imgur.com/IaCzfvr.jpeg" alt="White quartz island with farmhouse sink and gold fixtures" width="600" height="375" loading="lazy">
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ -->
    <section>
      <div class="container">
        <h2 class="section-title" style="text-align:center;" data-animate="fade-up">Kitchen Remodeling Questions from Chino Homeowners</h2>
        <div class="faq-list" data-animate="fade-up">
          <div class="faq-item answer-block">
            <h3>How much does a kitchen remodel cost in the Inland Empire?</h3>
            <p class="prose">Kitchen remodels in Chino and the Inland Empire typically range from $15,000 to $60,000. A countertop and backsplash refresh runs $15,000–$25,000. A full gut-and-rebuild with custom granite, new cabinetry, and flooring falls between $35,000 and $60,000. We provide free on-site estimates with itemized pricing.</p>
          </div>
          <div class="faq-item answer-block">
            <h3>How long does a full kitchen renovation take?</h3>
            <p class="prose">Most kitchen remodels take 4 to 8 weeks from demolition to final walkthrough. A countertop and backsplash refresh can be completed in 2 to 3 weeks. Full gut-and-rebuild projects with layout changes typically require 6 to 8 weeks. We provide a detailed timeline before work begins.</p>
          </div>
          <div class="faq-item answer-block">
            <h3>Can you handle the entire kitchen remodel or do I need separate contractors?</h3>
            <p class="prose">We handle everything in-house — demolition, cabinets, countertops, tile, flooring, and fixture installation. As a licensed general contractor (CSLB #927459), we coordinate plumbing and electrical work so you have one point of contact throughout the entire project.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Related Services -->
    <section style="background: var(--bg-alt);">
      <div class="container">
        <h2 class="section-title" style="text-align:center;" data-animate="fade-up">Related Services</h2>
        <div class="related-services" data-animate="fade-up">
          <a href="/services/granite-countertops" class="related-card">
            <h3>Granite Countertops</h3>
            <p>Custom-fabricated granite, quartz, and marble surfaces for your kitchen.</p>
            <span class="service-card-link">Learn more <i data-lucide="arrow-right" style="width:16px;height:16px;"></i></span>
          </a>
          <a href="/services/cabinet-services" class="related-card">
            <h3>Cabinet Services</h3>
            <p>New construction, refacing, painting, and installation for kitchen cabinets.</p>
            <span class="service-card-link">Learn more <i data-lucide="arrow-right" style="width:16px;height:16px;"></i></span>
          </a>
          <a href="/services/tile-installation" class="related-card">
            <h3>Tile Installation</h3>
            <p>Backsplashes, floors, and accent walls in ceramic, porcelain, and natural stone.</p>
            <span class="service-card-link">Learn more <i data-lucide="arrow-right" style="width:16px;height:16px;"></i></span>
          </a>
        </div>
      </div>
    </section>

    <!-- Closing CTA -->
    <section class="closing-cta" style="background-image: url('https://i.imgur.com/FJdxDpq.jpeg');">
      <div class="container" data-animate="fade-up">
        <h2>Ready to Remodel Your Kitchen?</h2>
        <p class="prose-centered">Tell us what you have in mind and get a detailed estimate — free, with no obligation.</p>
        <a href="tel:+19092383188" class="hero-phone"><i data-lucide="phone" style="width:24px;height:24px;"></i> (909) 238-3188</a>
        <br>
        <a href="/contact" class="btn-primary" style="margin-top:var(--space-md);">Get Your Free Kitchen Estimate</a>
      </div>
    </section>

    <div class="container" style="padding:var(--space-lg) var(--space-lg);">
      <p class="last-updated">Last Updated: <?php echo date('F Y'); ?></p>
    </div>

  </main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
