<?php
$pageTitle       = "Bathroom Remodeling in Chino, CA | Rocca Tile & Granite LLC";
$pageDescription = "Expert bathroom remodeling in Chino and the Inland Empire. Custom tile showers, granite vanities, tub-to-shower conversions, and full renovations. CSLB #927459. Call (909) 238-3188.";
$canonicalUrl    = "https://rocca-tile.com/services/bathroom-remodeling";
$ogImage         = "https://i.imgur.com/7135LDU.jpeg";
$currentPage     = "bathroom-remodeling";
$heroImage       = "https://i.imgur.com/7135LDU.jpeg";
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
      {"@type": "ListItem", "position": 3, "name": "Bathroom Remodeling", "item": "https://rocca-tile.com/services/bathroom-remodeling"}
    ]
  },
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Bathroom Remodeling",
    "provider": {
      "@type": "LocalBusiness",
      "name": "Rocca Tile & Granite LLC",
      "telephone": "+1-909-238-3188",
      "address": {"@type": "PostalAddress", "addressLocality": "Chino", "addressRegion": "CA", "postalCode": "91710"}
    },
    "areaServed": {"@type": "GeoCircle", "geoMidpoint": {"@type": "GeoCoordinates", "latitude": 34.0122, "longitude": -117.6889}, "geoRadius": "75 mi"},
    "description": "Complete bathroom remodeling services including custom tile showers, granite vanities, tub-to-shower conversions, and full bathroom renovations."
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
    "name": "How Bathroom Remodeling Works",
    "step": [
      {"@type": "HowToStep", "position": 1, "name": "Design Consultation", "text": "We visit your home, measure the bathroom, discuss your goals, and review tile, stone, and fixture samples."},
      {"@type": "HowToStep", "position": 2, "name": "Material Selection & Planning", "text": "We finalize tile, countertop, fixtures, and layout. You approve the estimate and project timeline."},
      {"@type": "HowToStep", "position": 3, "name": "Construction & Installation", "text": "Demo, plumbing prep, waterproofing, tile installation, vanity, and fixtures are installed in sequence."},
      {"@type": "HowToStep", "position": 4, "name": "Final Inspection", "text": "We walk through the completed bathroom with you, test every fixture, and address every detail before calling it done."}
    ]
  },
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "How much does a bathroom remodel cost in Chino?",
        "acceptedAnswer": {"@type": "Answer", "text": "Bathroom remodels in Chino typically range from $8,000 to $35,000. A basic refresh with new tile, vanity, and fixtures runs $8,000\u2013$15,000. A full renovation with a custom tile shower, granite vanity, and layout changes falls between $20,000 and $35,000. We provide free estimates."}
      },
      {
        "@type": "Question",
        "name": "Can you convert my bathtub to a walk-in shower?",
        "acceptedAnswer": {"@type": "Answer", "text": "Yes, tub-to-shower conversions are one of our most requested projects. The process includes removing the tub, adjusting plumbing, waterproofing, installing custom tile, a glass enclosure, and new fixtures. Most conversions take 2 to 3 weeks."}
      },
      {
        "@type": "Question",
        "name": "Do you handle bathroom additions?",
        "acceptedAnswer": {"@type": "Answer", "text": "Yes, we build complete bathroom additions including framing, plumbing rough-in, electrical, tile, vanity, and fixtures. Bathroom additions require permits, which we coordinate through the local building department."}
      }
    ]
  }
]';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

  <main id="main-content">

    <!-- Page Hero -->
    <section class="page-hero" style="background-image: url('https://i.imgur.com/7135LDU.jpeg');">
      <div class="container">
        <h1>Bathroom Remodeling in Chino, CA</h1>
        <p>Custom Tile Showers, Granite Vanities &amp; Complete Bathroom Renovations</p>
        <a href="tel:+19092383188" class="hero-phone"><i data-lucide="phone" style="width:22px;height:22px;"></i> (909) 238-3188</a>
      </div>
      <div class="section-divider section-divider--bottom" aria-hidden="true">
        <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><path d="M0,60 Q360,20 720,40 T1440,20 L1440,60 Z" fill="#FFFFFF"/></svg>
      </div>
    </section>

    <!-- Breadcrumb -->
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <div class="container">
        <a href="/">Home</a> <span>/</span> <a href="/services">Services</a> <span>/</span> Bathroom Remodeling
      </div>
    </nav>

    <!-- Answer-First Intro -->
    <section>
      <div class="container">
        <div class="prose-centered" style="text-align:center;">
          <p style="font-size:1.05rem;">Bathroom remodels in Chino and the Inland Empire typically range from $8,000 to $35,000 and take 2 to 4 weeks depending on scope. Rocca Tile &amp; Granite LLC provides complete bathroom remodeling for homeowners in Chino, CA and across the Inland Empire — from straightforward tile and vanity upgrades to full gut renovations with custom walk-in showers, freestanding tubs, and granite surfaces.</p>
        </div>
      </div>
    </section>

    <!-- Split: Custom Tile Showers (Image LEFT) -->
    <section style="background: var(--bg-alt);">
      <div class="container">
        <div class="split">
          <div class="split-img" data-animate="wipe-right">
            <img src="https://i.imgur.com/992lfTu.jpeg" alt="Custom walk-in tile shower with frameless glass enclosure installed by Rocca Tile in Chino" width="800" height="600" loading="lazy">
          </div>
          <div class="reveal-up">
            <h2 class="section-title">Custom Tile Showers Built to Last</h2>
            <div class="prose">
              <p>Custom tile showers are our signature work. We build walk-in showers using porcelain, ceramic, natural stone, and mosaic accent tile — all set over proper waterproofing membranes that prevent moisture damage for decades. Every shower includes precision-sloped floors, linear or center drains, and frameless glass enclosures fitted to the exact opening.</p>
              <p style="margin-top:var(--space-md);">Most homeowners want more than just tile walls. We build recessed shower niches for shampoo and soap, bench seats for comfort and accessibility, and accent bands or feature walls that give the shower a finished, intentional look. Whether you prefer large-format porcelain slabs for a minimal feel or hand-cut mosaic patterns, we handle the full installation from substrate to grout.</p>
            </div>
            <a href="/contact" class="btn-primary" style="margin-top:var(--space-xl);">Get a Free Bathroom Estimate</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Split-Reverse: Vanities & Countertops (Image RIGHT) -->
    <section>
      <div class="container">
        <div class="split-reverse">
          <div class="reveal-up">
            <h2 class="section-title">Vanities, Countertops &amp; Fixtures That Elevate the Room</h2>
            <div class="prose">
              <p>The vanity anchors a bathroom's design. We install single vanities, double vanities, and floating vanities in every style from traditional raised-panel to clean modern slab-front. Each one is paired with a custom-fabricated countertop — granite, quartz, or marble — cut and polished to fit the exact dimensions of your space, with undermount sinks for a seamless surface.</p>
              <p style="margin-top:var(--space-md);">Fixtures make the difference between a bathroom that looks updated and one that feels finished. We source and install faucets, showerheads, towel bars, and hardware from brands like Delta, Moen, and Kohler. Brushed nickel, matte black, polished chrome — whatever suits the design. Every piece is installed to manufacturer spec and tested before we leave.</p>
            </div>
          </div>
          <div class="split-img" data-animate="wipe-right">
            <img src="https://i.imgur.com/kC3dYTt.jpeg" alt="Double vanity with marble countertop and undermount sinks in Inland Empire bathroom" width="800" height="600" loading="lazy">
          </div>
        </div>
      </div>
    </section>

    <!-- Process Section (Standalone) -->
    <section style="background: var(--bg-alt);">
      <div class="container">
        <h2 class="section-title reveal-up" style="text-align:center;">How Your Bathroom Remodel Comes Together</h2>
        <div class="process-steps">
          <div class="process-step">
            <div class="process-step-num">1</div>
            <div>
              <h3>Design Consultation</h3>
              <p>We visit your home, measure the bathroom, discuss your goals, and review tile, stone, and fixture samples so you can see and feel the materials before committing.</p>
            </div>
          </div>
          <div class="process-step">
            <div class="process-step-num">2</div>
            <div>
              <h3>Material Selection &amp; Planning</h3>
              <p>We finalize your tile, countertop, fixtures, and layout. You approve the detailed estimate and project timeline before any work begins.</p>
            </div>
          </div>
          <div class="process-step">
            <div class="process-step-num">3</div>
            <div>
              <h3>Construction &amp; Installation</h3>
              <p>Demo, plumbing prep, waterproofing, tile installation, vanity mounting, and fixture hookup — all completed in sequence by our crew.</p>
            </div>
          </div>
          <div class="process-step">
            <div class="process-step-num">4</div>
            <div>
              <h3>Final Inspection</h3>
              <p>We walk through the completed bathroom with you, test every fixture, check every grout line, and address any detail before calling the project complete.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Mid-page CTA -->
    <section class="inline-cta">
      <div class="container">
        <h2>Thinking About a Bathroom Upgrade?</h2>
        <p>Call for a free on-site estimate — no pressure, no obligation, just honest pricing.</p>
        <a href="tel:+19092383188" style="display:block;font-size:1.4rem;font-weight:700;color:#fff;margin-bottom:var(--space-md);">(909) 238-3188</a>
        <a href="/contact" class="btn-primary">Schedule Your Consultation</a>
      </div>
    </section>

    <!-- Split: Full Renovation (Image LEFT) -->
    <section style="background: var(--bg-alt);">
      <div class="container">
        <div class="split">
          <div class="split-img" data-animate="wipe-right">
            <img src="https://i.imgur.com/GGCr6b5.png" alt="Aerial view of a remodeled bathroom with freestanding tub and tile floor in the Inland Empire" width="800" height="600" loading="lazy">
          </div>
          <div class="reveal-up">
            <h2 class="section-title">What Does a Full Bathroom Renovation Include?</h2>
            <div class="prose">
              <p>A full renovation means we handle everything inside the room — not just surfaces. That includes tub-to-shower conversions, freestanding tub installations, complete floor-to-ceiling tile, heated flooring systems, recessed lighting upgrades, exhaust fan replacement, and bathroom additions where none existed before. If it's in the bathroom, we build it or install it.</p>
              <p style="margin-top:var(--space-md);">We coordinate plumbing relocations and electrical work as part of the project so you aren't hiring separate trades. Owner Filiberto Reyes has managed full bathroom renovations across the Inland Empire since 2004, and every project is backed by our CSLB #927459 contractor license and full insurance coverage. From a half-bath addition in Chino Hills to a master suite overhaul in Ontario, the process is the same: measure twice, build once, and stand behind the work.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Gallery -->
    <section>
      <div class="container">
        <h2 class="section-title reveal-up" style="text-align:center;">Bathroom Remodels Across the Inland Empire</h2>
        <div class="service-gallery">
          <div class="service-gallery-item">
            <img src="https://i.imgur.com/BOQ10aN.jpeg" alt="Walk-in tile shower with modern fixtures in a remodeled Chino bathroom" width="600" height="375" loading="lazy">
          </div>
          <div class="service-gallery-item">
            <img src="https://i.imgur.com/oCKDJlQ.jpeg" alt="Floating vanity with open shelving and vessel sink in modern Inland Empire bathroom" width="600" height="375" loading="lazy">
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ -->
    <section style="background: var(--bg-alt);">
      <div class="container">
        <h2 class="section-title reveal-up" style="text-align:center;">Bathroom Remodeling Questions from Chino Homeowners</h2>
        <div class="faq-list reveal-up">
          <div class="faq-item answer-block">
            <h3>How much does a bathroom remodel cost in Chino?</h3>
            <p class="prose">Bathroom remodels in Chino typically range from $8,000 to $35,000. A basic refresh with new tile, vanity, and fixtures runs $8,000–$15,000. A full renovation with a custom tile shower, granite vanity, and layout changes falls between $20,000 and $35,000. We provide free estimates with itemized pricing so you know exactly where your budget goes.</p>
          </div>
          <div class="faq-item answer-block">
            <h3>Can you convert my bathtub to a walk-in shower?</h3>
            <p class="prose">Yes, tub-to-shower conversions are one of our most requested projects. The process includes removing the existing tub, adjusting plumbing, waterproofing the area, installing custom tile, fitting a frameless glass enclosure, and connecting new fixtures. Most conversions take 2 to 3 weeks from demo to completion.</p>
          </div>
          <div class="faq-item answer-block">
            <h3>Do you handle bathroom additions?</h3>
            <p class="prose">Yes, we build complete bathroom additions including framing, plumbing rough-in, electrical, tile, vanity, and fixtures. Bathroom additions require permits, which we coordinate through the local building department. We handle the full scope so you have one contractor managing the entire project from foundation to finish.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Related Services -->
    <section>
      <div class="container">
        <h2 class="section-title reveal-up" style="text-align:center;">Related Services</h2>
        <div class="related-services">
          <a href="/services/kitchen-remodeling" class="related-card">
            <h3>Kitchen Remodeling</h3>
            <p>Full kitchen renovations with custom cabinets, granite countertops, and tile backsplashes.</p>
            <span class="service-card-link">Learn more <i data-lucide="arrow-right" style="width:16px;height:16px;"></i></span>
          </a>
          <a href="/services/tile-installation" class="related-card">
            <h3>Tile Installation</h3>
            <p>Floors, walls, showers, and backsplashes in ceramic, porcelain, and natural stone.</p>
            <span class="service-card-link">Learn more <i data-lucide="arrow-right" style="width:16px;height:16px;"></i></span>
          </a>
          <a href="/services/granite-countertops" class="related-card">
            <h3>Granite Countertops</h3>
            <p>Custom-fabricated granite, quartz, and marble surfaces for bathrooms and kitchens.</p>
            <span class="service-card-link">Learn more <i data-lucide="arrow-right" style="width:16px;height:16px;"></i></span>
          </a>
        </div>
      </div>
    </section>

    <!-- Closing CTA -->
    <section class="closing-cta" style="background-image: url('https://i.imgur.com/FJdxDpq.jpeg');">
      <div class="container" data-animate="fade-up">
        <h2>Ready to Transform Your Bathroom?</h2>
        <p class="prose-centered">Tell us what you have in mind and get a detailed estimate — free, with no obligation.</p>
        <a href="tel:+19092383188" class="hero-phone"><i data-lucide="phone" style="width:24px;height:24px;"></i> (909) 238-3188</a>
        <br>
        <a href="/contact" class="btn-primary" style="margin-top:var(--space-md);">Get Your Free Bathroom Estimate</a>
      </div>
    </section>

    <div class="container" style="padding:var(--space-lg) var(--space-lg);">
      <p class="last-updated">Last Updated: <?php echo date('F Y'); ?></p>
    </div>

  </main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
