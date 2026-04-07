<?php
$pageTitle       = "Granite Countertops in Chino, CA | Rocca Tile & Granite LLC";
$pageDescription = "Custom granite, quartz, and marble countertop fabrication and installation in Chino and the Inland Empire. Kitchen and bathroom surfaces. CSLB #927459. Call (909) 238-3188.";
$canonicalUrl    = "https://rocca-tile.com/services/granite-countertops";
$ogImage         = "https://i.imgur.com/Ri0nHhg.jpeg";
$currentPage     = "granite-countertops";
$heroImage       = "https://i.imgur.com/Ri0nHhg.jpeg";
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
      {"@type": "ListItem", "position": 3, "name": "Granite Countertops", "item": "https://rocca-tile.com/services/granite-countertops"}
    ]
  },
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Granite Countertops",
    "provider": {
      "@type": "LocalBusiness",
      "name": "Rocca Tile & Granite LLC",
      "telephone": "+1-909-238-3188",
      "address": {"@type": "PostalAddress", "streetAddress": "13641 Central Ave", "addressLocality": "Chino", "addressRegion": "CA", "postalCode": "91710"}
    },
    "areaServed": {"@type": "GeoCircle", "geoMidpoint": {"@type": "GeoCoordinates", "latitude": 34.0122, "longitude": -117.6889}, "geoRadius": "75 mi"},
    "description": "Custom granite, quartz, marble, and natural stone countertop fabrication and installation for kitchens, bathrooms, and islands in Chino and the Inland Empire."
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
    "name": "How Countertop Installation Works",
    "step": [
      {"@type": "HowToStep", "position": 1, "name": "Slab Selection", "text": "Visit our supplier showroom or browse samples on-site to choose your granite, quartz, marble, or quartzite slab."},
      {"@type": "HowToStep", "position": 2, "name": "Templating", "text": "We visit your home and create precise digital or physical templates of your countertop layout, including sink and cooktop cutouts."},
      {"@type": "HowToStep", "position": 3, "name": "Fabrication", "text": "Your slab is cut, polished, and edge-profiled to exact specifications at a local fabrication shop."},
      {"@type": "HowToStep", "position": 4, "name": "Installation", "text": "Our crew removes old countertops, sets and levels the new stone, secures seams, and installs undermount sinks."},
      {"@type": "HowToStep", "position": 5, "name": "Sealing & Finishing", "text": "Natural stone surfaces are sealed for stain protection. We clean the workspace and walk you through care instructions."}
    ]
  },
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "How much do granite countertops cost in the Inland Empire?",
        "acceptedAnswer": {"@type": "Answer", "text": "$40\u2013$100 per square foot installed, depending on stone type and edge profile. Standard granite runs $40\u2013$60/sqft. Premium granite and quartz $60\u2013$80/sqft. Exotic marble and quartzite $80\u2013$100+/sqft. Includes template, fabrication, and installation. Free estimates available."}
      },
      {
        "@type": "Question",
        "name": "Granite vs. quartz \u2014 which should I choose?",
        "acceptedAnswer": {"@type": "Answer", "text": "Granite is natural stone \u2014 each slab is unique and requires periodic sealing. Quartz is engineered, non-porous, requires no sealing, and offers more uniform patterns. Both are durable for kitchens and bathrooms. We install both and can help you compare samples in person."}
      },
      {
        "@type": "Question",
        "name": "How long does countertop installation take?",
        "acceptedAnswer": {"@type": "Answer", "text": "Template to install typically takes 7\u201310 business days. Templating takes one visit (1\u20132 hours). Fabrication takes 5\u20137 days. Installation is usually completed in one day for most kitchens. We remove and dispose of old countertops."}
      }
    ]
  }
]';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

  <main id="main-content">

    <!-- Page Hero -->
    <section class="page-hero" style="background-image: url('https://i.imgur.com/Ri0nHhg.jpeg');">
      <div class="container">
        <h1>Granite Countertops in Chino, CA</h1>
        <p>Custom Fabrication &amp; Installation &mdash; Granite, Quartz, Marble &amp; Natural Stone</p>
        <a href="tel:+19092383188" class="hero-phone"><i data-lucide="phone" style="width:22px;height:22px;"></i> (909) 238-3188</a>
      </div>
    </section>

    <!-- Breadcrumb -->
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <div class="container">
        <a href="/">Home</a> <span>/</span> <a href="/services">Services</a> <span>/</span> Granite Countertops
      </div>
    </nav>

    <!-- Answer-First Intro -->
    <section>
      <div class="container">
        <div class="prose-centered" style="text-align:center;">
          <p style="font-size:1.05rem;">Granite countertop installation in Chino and the Inland Empire typically costs $40 to $100 per square foot installed, with most kitchen projects falling between $3,000 and $8,000 total. Rocca Tile &amp; Granite LLC provides custom countertop fabrication and installation for homeowners in Chino, CA and across the Inland Empire &mdash; working directly with local stone fabricators to template, cut, and install granite, quartz, marble, and natural stone surfaces for kitchens, bathrooms, and islands.</p>
        </div>
      </div>
    </section>

    <!-- Split-Reverse: Process Overview (image RIGHT) -->
    <section style="background: var(--bg-alt);">
      <div class="container">
        <div class="split-reverse">
          <div data-animate="fade-up">
            <h2 class="section-title">Template-to-Install: How We Build Your Countertops</h2>
            <div class="prose">
              <p>Every countertop project starts with precise templating at your home. We measure your existing layout, mark sink and cooktop cutout positions, and discuss edge profiles, seam placement, and backsplash height. These measurements go directly to the fabrication shop &mdash; nothing is approximated from a sketch or left to guesswork. If you need undermount sink installation, we coordinate that into the cutout template so everything aligns on install day.</p>
              <p style="margin-top:var(--space-md);">We work with local Inland Empire fabricators who cut, polish, and profile your slab to exact specifications. That means shorter lead times than national chains and the ability to visit the shop to approve your slab in person before it is cut. From standard eased edges to ogee and waterfall profiles, we handle the details that make a countertop feel custom &mdash; because it is.</p>
            </div>
            <a href="/contact" class="btn-primary" style="margin-top:var(--space-xl);">Get a Free Countertop Estimate</a>
          </div>
          <div class="split-img">
            <img src="https://i.imgur.com/LoKwYBK.jpeg" alt="White quartz countertop with undermount sink" width="800" height="600" loading="lazy">
          </div>
        </div>
      </div>
    </section>

    <!-- Split: Materials Comparison (image LEFT) -->
    <section>
      <div class="container">
        <div class="split">
          <div class="split-img">
            <img src="https://i.imgur.com/52D4xUy.jpeg" alt="White marble countertop with subway tile backsplash" width="800" height="600" loading="lazy">
          </div>
          <div data-animate="fade-up">
            <h2 class="section-title">Which Countertop Material Is Right for Your Kitchen?</h2>
            <div class="prose">
              <p>Granite is natural stone &mdash; every slab has unique veining and color variation, it handles heat well, and with periodic sealing it resists stains for decades. Quartz is engineered from crushed stone and resin, making it non-porous with no sealing required and more consistent in pattern. Both are excellent choices for kitchens and bathrooms, and we install both regularly across the Inland Empire.</p>
              <p style="margin-top:var(--space-md);">Marble brings elegance with softer veining patterns, but it is more porous and best suited for bathrooms, vanity tops, and lower-traffic areas. Quartzite &mdash; often confused with quartz &mdash; is a natural stone with the hardness of granite and the marble-like appearance many homeowners want. We carry samples of all four materials and can help you compare side by side during your in-home consultation.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Gallery -->
    <section style="background: var(--bg-alt);">
      <div class="container">
        <h2 class="section-title" style="text-align:center;" data-animate="fade-up">Countertop Installations Across the Inland Empire</h2>
        <div class="service-gallery" data-animate="fade-up">
          <div class="service-gallery-item">
            <img src="https://i.imgur.com/HaJnkNd.jpeg" alt="Dark granite kitchen countertops with stainless steel appliances in Chino home" width="600" height="375" loading="lazy">
          </div>
          <div class="service-gallery-item">
            <img src="https://i.imgur.com/gjuB5M8.jpeg" alt="Dark granite vanity countertop with vessel sink in Inland Empire bathroom" width="600" height="375" loading="lazy">
          </div>
        </div>
      </div>
    </section>

    <!-- Mid-page CTA -->
    <section class="inline-cta">
      <div class="container">
        <h2>Ready to Upgrade Your Countertops?</h2>
        <p>Call for a free in-home template and estimate &mdash; we bring samples to you.</p>
        <a href="tel:+19092383188" style="display:block;font-size:1.4rem;font-weight:700;color:#fff;margin-bottom:var(--space-md);">(909) 238-3188</a>
        <a href="/contact" class="btn-primary">Schedule Your Consultation</a>
      </div>
    </section>

    <!-- Process Section (Standalone) -->
    <section>
      <div class="container">
        <h2 class="section-title" style="text-align:center;" data-animate="fade-up">From Slab Selection to Finished Surface</h2>
        <div class="process-steps" style="max-width:720px;margin-inline:auto;" data-animate="fade-up">
          <div class="process-step">
            <div class="process-step-num">1</div>
            <div>
              <h3>Slab Selection</h3>
              <p>Visit our supplier showroom or browse samples on-site to choose your granite, quartz, marble, or quartzite slab. See the full piece before it is cut.</p>
            </div>
          </div>
          <div class="process-step">
            <div class="process-step-num">2</div>
            <div>
              <h3>Templating</h3>
              <p>We visit your home and create precise templates of your countertop layout &mdash; including sink cutouts, cooktop openings, and edge overhangs. One visit, typically 1&ndash;2 hours.</p>
            </div>
          </div>
          <div class="process-step">
            <div class="process-step-num">3</div>
            <div>
              <h3>Fabrication</h3>
              <p>Your slab is cut, polished, and edge-profiled at a local fabrication shop. Turnaround is typically 5&ndash;7 business days.</p>
            </div>
          </div>
          <div class="process-step">
            <div class="process-step-num">4</div>
            <div>
              <h3>Installation</h3>
              <p>Our crew removes your old countertops, sets and levels the new stone, secures seams with color-matched epoxy, and installs undermount sinks. Most kitchens are completed in a single day.</p>
            </div>
          </div>
          <div class="process-step">
            <div class="process-step-num">5</div>
            <div>
              <h3>Sealing &amp; Finishing</h3>
              <p>Natural stone surfaces receive a penetrating sealer for stain protection. We clean the workspace, haul away debris, and walk you through long-term care instructions.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ -->
    <section style="background: var(--bg-alt);">
      <div class="container">
        <h2 class="section-title" style="text-align:center;" data-animate="fade-up">Granite Countertop Questions from Inland Empire Homeowners</h2>
        <div class="faq-list" data-animate="fade-up">
          <div class="faq-item answer-block">
            <h3>How much do granite countertops cost in the Inland Empire?</h3>
            <p class="prose">$40&ndash;$100 per square foot installed, depending on stone type and edge profile. Standard granite runs $40&ndash;$60/sqft. Premium granite and quartz typically fall between $60&ndash;$80/sqft. Exotic marble and quartzite start at $80/sqft and go up from there. All pricing includes template, fabrication, and installation. We provide free estimates with no obligation.</p>
          </div>
          <div class="faq-item answer-block">
            <h3>Granite vs. quartz &mdash; which should I choose?</h3>
            <p class="prose">Granite is natural stone &mdash; each slab is unique, it handles heat well, and requires periodic sealing (typically once a year). Quartz is engineered, non-porous, needs no sealing, and offers more uniform color and pattern options. Both are durable for kitchens and bathrooms. We install both and can help you compare samples in person during your consultation.</p>
          </div>
          <div class="faq-item answer-block">
            <h3>How long does countertop installation take?</h3>
            <p class="prose">Template to install typically takes 7&ndash;10 business days total. Templating is one visit (1&ndash;2 hours). Fabrication runs 5&ndash;7 days. Installation day itself is usually completed in one day for most kitchens. We remove and dispose of your old countertops as part of the project.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Related Services -->
    <section>
      <div class="container">
        <h2 class="section-title" style="text-align:center;" data-animate="fade-up">Related Services</h2>
        <div class="related-services" data-animate="fade-up">
          <a href="/services/kitchen-remodeling" class="related-card">
            <h3>Kitchen Remodeling</h3>
            <p>Complete kitchen renovations &mdash; cabinets, countertops, backsplash, flooring, and layout changes.</p>
            <span class="service-card-link">Learn more <i data-lucide="arrow-right" style="width:16px;height:16px;"></i></span>
          </a>
          <a href="/services/bathroom-remodeling" class="related-card">
            <h3>Bathroom Remodeling</h3>
            <p>Vanity tops, shower tile, flooring, and full bathroom renovations for Inland Empire homes.</p>
            <span class="service-card-link">Learn more <i data-lucide="arrow-right" style="width:16px;height:16px;"></i></span>
          </a>
          <a href="/services/cabinet-services" class="related-card">
            <h3>Cabinet Services</h3>
            <p>New cabinet construction, refacing, painting, and hardware upgrades to complement your new countertops.</p>
            <span class="service-card-link">Learn more <i data-lucide="arrow-right" style="width:16px;height:16px;"></i></span>
          </a>
        </div>
      </div>
    </section>

    <!-- Closing CTA -->
    <section class="closing-cta" style="background-image: url('https://i.imgur.com/FJdxDpq.jpeg');">
      <div class="container" data-animate="fade-up">
        <h2>Get a Custom Countertop Estimate</h2>
        <p class="prose-centered">Tell us about your kitchen or bathroom project and we will provide a detailed, no-obligation quote with material options.</p>
        <a href="tel:+19092383188" class="hero-phone"><i data-lucide="phone" style="width:24px;height:24px;"></i> (909) 238-3188</a>
        <br>
        <a href="/contact" class="btn-primary" style="margin-top:var(--space-md);">Request Your Free Estimate</a>
      </div>
    </section>

    <div class="container" style="padding:var(--space-lg) var(--space-lg);">
      <p class="last-updated">Last Updated: <?php echo date('F Y'); ?></p>
    </div>

  </main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
