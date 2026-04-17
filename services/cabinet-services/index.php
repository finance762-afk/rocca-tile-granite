<?php
$pageTitle       = "Cabinet Services in Chino, CA | Rocca Tile & Granite LLC";
$pageDescription = "Custom cabinet construction, painting, refinishing, refacing, and installation in Chino and the Inland Empire. Kitchen and bathroom cabinets. CSLB #927459. Call (909) 238-3188.";
$canonicalUrl    = "https://rocca-tile.com/services/cabinet-services";
$ogImage         = "https://i.imgur.com/dg0mcaN.jpeg";
$currentPage     = "cabinet-services";
$heroImage       = "https://i.imgur.com/dg0mcaN.jpeg";
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
      {"@type": "ListItem", "position": 3, "name": "Cabinet Services", "item": "https://rocca-tile.com/services/cabinet-services"}
    ]
  },
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Cabinet Services",
    "provider": {
      "@type": "LocalBusiness",
      "name": "Rocca Tile & Granite LLC",
      "telephone": "+1-909-238-3188",
      "address": {"@type": "PostalAddress", "addressLocality": "Chino", "addressRegion": "CA", "postalCode": "91710"}
    },
    "areaServed": {"@type": "GeoCircle", "geoMidpoint": {"@type": "GeoCoordinates", "latitude": 34.0122, "longitude": -117.6889}, "geoRadius": "75 mi"},
    "description": "Custom cabinet construction, pre-made cabinet installation, refacing, refinishing, and painting for kitchens, bathrooms, closets, and built-in storage."
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
    "name": "How Cabinet Projects Work",
    "step": [
      {"@type": "HowToStep", "position": 1, "name": "Consultation & Measurement", "text": "We visit your home, measure the space, discuss your goals, and evaluate existing cabinet conditions."},
      {"@type": "HowToStep", "position": 2, "name": "Design & Material Selection", "text": "We finalize the cabinet style, wood species, finish, and hardware. You approve the plan and detailed estimate."},
      {"@type": "HowToStep", "position": 3, "name": "Construction or Prep", "text": "For new cabinets, we build in our shop. For refacing or refinishing, we prep existing cabinets on-site — sanding, priming, and masking."},
      {"@type": "HowToStep", "position": 4, "name": "Installation & Finishing", "text": "Cabinets are installed, aligned, and finished. Hardware is mounted, doors adjusted, and the workspace cleaned up."}
    ]
  },
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "What\u0027s the difference between cabinet refacing and refinishing?",
        "acceptedAnswer": {"@type": "Answer", "text": "Refacing replaces doors, drawer fronts, and applies new veneer to cabinet boxes while keeping the existing structure. Refinishing involves sanding and repainting or re-staining existing doors and boxes. Refacing costs more but gives a completely new look. Refinishing works well when the door style is good but the finish is worn."}
      },
      {
        "@type": "Question",
        "name": "How much do new kitchen cabinets cost in the Inland Empire?",
        "acceptedAnswer": {"@type": "Answer", "text": "Custom cabinets $500\u2013$1,200 per linear foot. Pre-made/semi-custom cabinets $150\u2013$400 per linear foot installed. Cabinet refacing $4,000\u2013$10,000 for a standard kitchen. Cabinet painting/refinishing $3,000\u2013$7,000. Free estimates."}
      },
      {
        "@type": "Question",
        "name": "Do you build custom cabinets or only install pre-made?",
        "acceptedAnswer": {"@type": "Answer", "text": "Both. We build custom cabinets from scratch for unique spaces and install pre-made and semi-custom lines for budget-conscious projects. We also build built-in closet systems, media centers, and bathroom vanity cabinets."}
      }
    ]
  }
]';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

  <main id="main-content">

    <!-- Page Hero -->
    <section class="page-hero" style="background-image: url('https://i.imgur.com/dg0mcaN.jpeg');">
      <div class="container">
        <h1>Cabinet Services in Chino, CA</h1>
        <p>Custom Construction, Painting, Refinishing, Refacing &amp; Installation</p>
        <a href="tel:+19092383188" class="hero-phone"><i data-lucide="phone" style="width:22px;height:22px;"></i> (909) 238-3188</a>
      </div>
      <div class="section-divider section-divider--bottom" aria-hidden="true">
        <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><path d="M0,60 Q360,20 720,40 T1440,20 L1440,60 Z" fill="#FFFFFF"/></svg>
      </div>
    </section>

    <!-- Breadcrumb -->
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <div class="container">
        <a href="/">Home</a> <span>/</span> <a href="/services">Services</a> <span>/</span> Cabinet Services
      </div>
    </nav>

    <!-- Answer-First Intro -->
    <section>
      <div class="container">
        <div class="prose-centered" style="text-align:center;">
          <p style="font-size:1.05rem;">Kitchen cabinet projects in the Chino and Inland Empire area range from $3,000 for painting and refinishing to $15,000+ for full custom cabinet construction, depending on scope and materials. Rocca Tile &amp; Granite LLC provides complete cabinet services for homeowners in Chino, CA and across the Inland Empire — including custom cabinet construction, pre-made cabinet installation, refacing, refinishing, and painting for kitchens, bathrooms, closets, and built-in storage.</p>
        </div>
      </div>
    </section>

    <!-- Split: Every Cabinet Service -->
    <section style="background: var(--bg-alt);">
      <div class="container">
        <div class="split">
          <div class="split-img">
            <img src="https://i.imgur.com/Flzq1JO.jpeg" alt="Modern navy kitchen cabinets with stainless steel appliances" width="800" height="600" loading="lazy">
          </div>
          <div class="reveal-up">
            <h2 class="section-title">Every Cabinet Service Under One Roof</h2>
            <div class="prose">
              <p>Whether you need cabinets built from scratch for a new kitchen layout or want to breathe life into existing boxes, Rocca Tile &amp; Granite handles the full range. We build custom cabinets in any style — shaker, flat-panel, raised-panel, glass-front, open shelving — and install pre-made and semi-custom lines from major manufacturers when budget or timeline calls for it.</p>
              <p style="margin-top:var(--space-md);">For homeowners who love their cabinet layout but not the look, we offer refacing (new doors, drawer fronts, and veneer over existing boxes) and refinishing (sand, prime, repaint or restain). We also handle hardware upgrades, soft-close hinge retrofits, and pull-out shelf additions. Beyond the kitchen, our cabinet work extends to bathroom vanities, built-in closet systems, pantry cabinets, bookcases, and entertainment centers throughout Chino and the surrounding Inland Empire communities.</p>
            </div>
            <a href="/contact" class="btn-primary" style="margin-top:var(--space-xl);">Get a Free Cabinet Estimate</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Benefits Grid -->
    <section>
      <div class="container">
        <h2 class="section-title reveal-up" style="text-align:center;">What Sets Our Cabinet Work Apart</h2>
        <div class="benefits-grid">
          <div class="benefit-item">
            <div class="benefit-icon"><i data-lucide="hammer" style="width:24px;height:24px;"></i></div>
            <div>
              <h3>Custom &amp; Pre-Made</h3>
              <p>From scratch custom builds to budget-friendly semi-custom and stock cabinet installation.</p>
            </div>
          </div>
          <div class="benefit-item">
            <div class="benefit-icon"><i data-lucide="palette" style="width:24px;height:24px;"></i></div>
            <div>
              <h3>All Styles</h3>
              <p>Shaker, flat-panel, raised-panel, open shelving, glass-front — we build and install every popular cabinet style.</p>
            </div>
          </div>
          <div class="benefit-item">
            <div class="benefit-icon"><i data-lucide="door-open" style="width:24px;height:24px;"></i></div>
            <div>
              <h3>Beyond the Kitchen</h3>
              <p>Bathroom vanities, walk-in closet systems, built-in bookcases, and media center cabinetry.</p>
            </div>
          </div>
          <div class="benefit-item">
            <div class="benefit-icon"><i data-lucide="shield-check" style="width:24px;height:24px;"></i></div>
            <div>
              <h3>Licensed Since 2004</h3>
              <p>CSLB #927459, fully insured, 20+ years of cabinet work across the Inland Empire.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Mid-page CTA -->
    <section class="inline-cta">
      <div class="container">
        <h2>Need a Cabinet Estimate?</h2>
        <p>Call for a free on-site measurement and quote — no pressure, no obligation.</p>
        <a href="tel:+19092383188" style="display:block;font-size:1.4rem;font-weight:700;color:#fff;margin-bottom:var(--space-md);">(909) 238-3188</a>
        <a href="/contact" class="btn-primary">Schedule Your Consultation</a>
      </div>
    </section>

    <!-- Split-Reverse: Built-Ins & Closets -->
    <section style="background: var(--bg-alt);">
      <div class="container">
        <div class="split-reverse">
          <div class="reveal-up">
            <h2 class="section-title">Built-Ins, Closets &amp; Storage That Actually Work</h2>
            <div class="prose">
              <p>Cabinets aren't just for kitchens. We design and build walk-in closet systems with adjustable shelving and dedicated sections for shoes, folded items, and hanging garments. Pantry cabinets with pull-out drawers. Linen cabinets sized for awkward bathroom alcoves. Entertainment centers that hide wiring and fit your exact wall dimensions.</p>
              <p style="margin-top:var(--space-md);">Every built-in we construct comes standard with soft-close hinges and full-extension drawer slides — the details that separate cabinet work that lasts from cabinet work that loosens up within a year. We custom-size everything to fit the space, so there are no filler strips or wasted gaps. If you have a difficult corner, an angled wall, or an understairs area that could become functional storage, we'll build for it.</p>
            </div>
          </div>
          <div class="split-img">
            <img src="https://i.imgur.com/DnaszCe.jpeg" alt="Custom built-in closet system with shelving and drawers" width="800" height="600" loading="lazy">
          </div>
        </div>
      </div>
    </section>

    <!-- Split: Reface, Refinish, or Replace -->
    <section>
      <div class="container">
        <div class="split">
          <div class="split-img">
            <img src="https://i.imgur.com/UDeNSEh.jpeg" alt="Traditional cherry wood kitchen cabinets" width="800" height="600" loading="lazy">
          </div>
          <div class="reveal-up">
            <h2 class="section-title">Should You Reface, Refinish, or Replace Your Cabinets?</h2>
            <div class="prose">
              <p>Refinishing is the most affordable option at $3,000–$7,000 for a standard kitchen. It works well when you like the door style but the paint is chipping, the stain has faded, or the color just feels dated. We sand everything down, prime, and apply a durable factory-quality finish in any color you choose.</p>
              <p style="margin-top:var(--space-md);">Refacing runs $4,000–$10,000 and gives you an entirely new look without a full demolition. We replace all doors and drawer fronts and apply matching veneer to the visible cabinet boxes. Full replacement makes sense when the layout needs to change, the boxes are water-damaged or warped, or you want to go from builder-grade to custom. We walk every client through these options during the initial consultation so you can make the right call for your kitchen and your budget.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Process Section -->
    <section style="background: var(--bg-alt);">
      <div class="container">
        <h2 class="section-title reveal-up" style="text-align:center;">How Your Cabinet Project Comes Together</h2>
        <div class="process-steps">
          <div class="process-step">
            <div class="process-step-num">1</div>
            <div>
              <h3>Consultation &amp; Measurement</h3>
              <p>We visit your home, measure the space, discuss your goals, and evaluate existing cabinet conditions to determine whether building new, refacing, or refinishing is the best path forward.</p>
            </div>
          </div>
          <div class="process-step">
            <div class="process-step-num">2</div>
            <div>
              <h3>Design &amp; Material Selection</h3>
              <p>We finalize the cabinet style, wood species, finish color, and hardware. You approve the plan and a detailed, itemized estimate before any work begins.</p>
            </div>
          </div>
          <div class="process-step">
            <div class="process-step-num">3</div>
            <div>
              <h3>Construction or Prep</h3>
              <p>For new cabinets, we build in our shop to exact specifications. For refacing or refinishing, we prep existing cabinets on-site — sanding, priming, and masking surrounding surfaces.</p>
            </div>
          </div>
          <div class="process-step">
            <div class="process-step-num">4</div>
            <div>
              <h3>Installation &amp; Finishing</h3>
              <p>Cabinets are installed, leveled, and aligned. Hardware is mounted, doors are adjusted for even gaps, and the workspace is cleaned up for your final review.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ -->
    <section>
      <div class="container">
        <h2 class="section-title reveal-up" style="text-align:center;">Cabinet Questions from Inland Empire Homeowners</h2>
        <div class="faq-list reveal-up">
          <div class="faq-item answer-block">
            <h3>What's the difference between cabinet refacing and refinishing?</h3>
            <p class="prose">Refacing replaces doors, drawer fronts, and applies new veneer to cabinet boxes while keeping the existing structure. Refinishing involves sanding and repainting or re-staining existing doors and boxes. Refacing costs more but gives a completely new look. Refinishing works well when the door style is good but the finish is worn.</p>
          </div>
          <div class="faq-item answer-block">
            <h3>How much do new kitchen cabinets cost in the Inland Empire?</h3>
            <p class="prose">Custom cabinets run $500–$1,200 per linear foot. Pre-made and semi-custom cabinets cost $150–$400 per linear foot installed. Cabinet refacing ranges from $4,000–$10,000 for a standard kitchen, and cabinet painting or refinishing runs $3,000–$7,000. We provide free estimates for all cabinet projects.</p>
          </div>
          <div class="faq-item answer-block">
            <h3>Do you build custom cabinets or only install pre-made?</h3>
            <p class="prose">Both. We build custom cabinets from scratch for unique spaces and install pre-made and semi-custom lines for budget-conscious projects. We also build built-in closet systems, media centers, and bathroom vanity cabinets.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Gallery -->
    <section style="background: var(--bg-alt);">
      <div class="container">
        <h2 class="section-title reveal-up" style="text-align:center;">Cabinet Work Across the Inland Empire</h2>
        <div class="service-gallery">
          <div class="service-gallery-item">
            <img src="https://i.imgur.com/5ZLqvip.jpeg" alt="Espresso kitchen cabinets with mosaic tile backsplash installed by Rocca Tile" width="600" height="375" loading="lazy">
          </div>
          <div class="service-gallery-item">
            <img src="https://i.imgur.com/9ArIxM3.jpeg" alt="White island cabinets with dark upper cabinets in Inland Empire kitchen" width="600" height="375" loading="lazy">
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
            <p>Complete kitchen renovations — cabinets, countertops, backsplash, and flooring in one project.</p>
            <span class="service-card-link">Learn more <i data-lucide="arrow-right" style="width:16px;height:16px;"></i></span>
          </a>
          <a href="/services/granite-countertops" class="related-card">
            <h3>Granite Countertops</h3>
            <p>Custom-fabricated granite, quartz, and marble surfaces to pair with your new cabinets.</p>
            <span class="service-card-link">Learn more <i data-lucide="arrow-right" style="width:16px;height:16px;"></i></span>
          </a>
          <a href="/services/flooring-installation" class="related-card">
            <h3>Flooring Installation</h3>
            <p>Tile, hardwood, and luxury vinyl plank flooring to complete your kitchen or bathroom remodel.</p>
            <span class="service-card-link">Learn more <i data-lucide="arrow-right" style="width:16px;height:16px;"></i></span>
          </a>
        </div>
      </div>
    </section>

    <!-- Closing CTA -->
    <section class="closing-cta" style="background-image: url('https://i.imgur.com/FJdxDpq.jpeg');">
      <div class="container" data-animate="fade-up">
        <h2>Ready to Upgrade Your Cabinets?</h2>
        <p class="prose-centered">Tell us what you have in mind — new construction, refacing, refinishing, or built-ins — and get a detailed estimate for free.</p>
        <a href="tel:+19092383188" class="hero-phone"><i data-lucide="phone" style="width:24px;height:24px;"></i> (909) 238-3188</a>
        <br>
        <a href="/contact" class="btn-primary" style="margin-top:var(--space-md);">Get Your Free Cabinet Estimate</a>
      </div>
    </section>

    <div class="container" style="padding:var(--space-lg) var(--space-lg);">
      <p class="last-updated">Last Updated: <?php echo date('F Y'); ?></p>
    </div>

  </main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
