<?php
$pageTitle       = "Flooring Installation in Chino, CA | Rocca Tile & Granite LLC";
$pageDescription = "Professional flooring installation in Chino and the Inland Empire. Durable tile, hardwood, luxury vinyl plank, laminate, carpet, and epoxy — one licensed contractor, full subfloor prep included. CSLB #927459. Call (909) 238-3188.";
$canonicalUrl    = "https://rocca-tile.com/services/flooring-installation";
$ogImage         = "https://i.imgur.com/4vCoIlC.jpeg";
$currentPage     = "flooring-installation";
$heroImage       = "https://i.imgur.com/4vCoIlC.jpeg";
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
      {"@type": "ListItem", "position": 3, "name": "Flooring Installation", "item": "https://rocca-tile.com/services/flooring-installation"}
    ]
  },
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Flooring Installation",
    "provider": {
      "@type": "LocalBusiness",
      "name": "Rocca Tile & Granite LLC",
      "telephone": "+1-909-238-3188",
      "address": {"@type": "PostalAddress", "addressLocality": "Chino", "addressRegion": "CA", "postalCode": "91710"}
    },
    "areaServed": {"@type": "GeoCircle", "geoMidpoint": {"@type": "GeoCoordinates", "latitude": 34.0122, "longitude": -117.6889}, "geoRadius": "75 mi"},
    "description": "Professional flooring installation including tile, hardwood, luxury vinyl plank, laminate, carpet, and epoxy for residential and commercial properties in Chino and the Inland Empire."
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
    "name": "How Flooring Installation Works",
    "step": [
      {"@type": "HowToStep", "position": 1, "name": "Floor Assessment", "text": "We evaluate the existing floor, check the subfloor for moisture and levelness, and identify any issues that need correction before new material goes down."},
      {"@type": "HowToStep", "position": 2, "name": "Material Selection", "text": "We review flooring samples with you, compare durability, maintenance, and lifespan, and match the material to the way each room actually gets used."},
      {"@type": "HowToStep", "position": 3, "name": "Subfloor Preparation", "text": "We remove old flooring, repair the subfloor, apply leveling compound where needed, and install moisture barriers to create a stable foundation."},
      {"@type": "HowToStep", "position": 4, "name": "Installation & Finishing", "text": "We install the new flooring, add transitions between rooms, reinstall or replace baseboards, and complete a final cleanup."}
    ]
  },
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "What factors affect the cost of flooring installation?",
        "acceptedAnswer": {"@type": "Answer", "text": "Material choice, square footage, subfloor condition, pattern complexity, and transitions between rooms all influence the investment. Natural stone and solid hardwood require more labor and material than laminate or luxury vinyl plank. Existing subfloors that need leveling, moisture barriers, or repair add prep time. Custom patterns and intricate borders increase installation hours. We walk every room, assess subfloor condition, and provide a free itemized estimate so you see exactly what your project requires."}
      },
      {
        "@type": "Question",
        "name": "What\u2019s the most durable flooring for a kitchen?",
        "acceptedAnswer": {"@type": "Answer", "text": "Porcelain tile and luxury vinyl plank (LVP) are the top choices for kitchens. Tile is waterproof, scratch-resistant, and lasts decades. LVP is waterproof, softer underfoot, and installs faster. Both handle heavy foot traffic. We install both and can help you choose based on your priorities."}
      },
      {
        "@type": "Question",
        "name": "Do you remove and dispose of old flooring?",
        "acceptedAnswer": {"@type": "Answer", "text": "Yes, we handle removal and disposal of existing flooring as part of every installation project. This includes carpet, tile, hardwood, vinyl, and laminate. Removal and subfloor prep are part of the scope — not separate line items you have to arrange on your own."}
      }
    ]
  }
]';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

  <main id="main-content">

    <!-- Page Hero -->
    <section class="page-hero" style="background-image: url('https://i.imgur.com/4vCoIlC.jpeg');">
      <div class="container">
        <h1>Flooring Installation in Chino, CA</h1>
        <p>Tile, Hardwood, Luxury Vinyl Plank, Laminate, Carpet &amp; Epoxy</p>
        <a href="tel:+19092383188" class="hero-phone"><i data-lucide="phone" style="width:22px;height:22px;"></i> (909) 238-3188</a>
      </div>
      <div class="section-divider section-divider--bottom" aria-hidden="true">
        <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><path d="M0,60 Q360,20 720,40 T1440,20 L1440,60 Z" fill="#FFFFFF"/></svg>
      </div>
    </section>

    <!-- Breadcrumb -->
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <div class="container">
        <a href="/">Home</a> <span>/</span> <a href="/services">Services</a> <span>/</span> Flooring Installation
      </div>
    </nav>

    <!-- Answer-First Intro -->
    <section>
      <div class="container">
        <div class="prose-centered" style="text-align:center;">
          <p style="font-size:1.05rem;">Rocca Tile &amp; Granite LLC installs floors built to hold up for decades in Chino, CA and across the Inland Empire — tile, solid and engineered hardwood, luxury vinyl plank, laminate, carpet, and garage epoxy. Every project starts with a full subfloor assessment and ends with tight transitions, sealed edges, and baseboards reset to the new height. Licensed since 2004 (CSLB #927459), our crew handles material selection, old flooring removal, subfloor prep, and precise installation — all under one contractor.</p>
        </div>
      </div>
    </section>

    <!-- Process Section (Leads Content — Unique to This Page) -->
    <section style="background: var(--bg-alt);">
      <div class="container">
        <h2 class="section-title reveal-up" style="text-align:center;">How Your New Floors Come Together</h2>
        <div class="process-steps">
          <div class="process-step">
            <div class="process-step-num">1</div>
            <div>
              <h3>Floor Assessment</h3>
              <p>We evaluate the existing floor, check the subfloor for moisture and levelness, and identify any issues — soft spots, cracks, or unevenness — that need correction before new material goes down.</p>
            </div>
          </div>
          <div class="process-step">
            <div class="process-step-num">2</div>
            <div>
              <h3>Material Selection</h3>
              <p>We review flooring samples with you, compare durability, maintenance, and longevity, and match the material to how the room actually gets used — kitchens, bathrooms, living areas, garages, and patios each have different demands.</p>
            </div>
          </div>
          <div class="process-step">
            <div class="process-step-num">3</div>
            <div>
              <h3>Subfloor Preparation</h3>
              <p>We remove old flooring, repair the subfloor, apply leveling compound where needed, and install moisture barriers. This step is where most DIY installations fail — and where professional prep makes the difference.</p>
            </div>
          </div>
          <div class="process-step">
            <div class="process-step-num">4</div>
            <div>
              <h3>Installation &amp; Finishing</h3>
              <p>We install the new flooring, handle transitions between rooms and different flooring types, reinstall or replace baseboards and trim, and complete a final cleanup so your space is move-in ready.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Split-Reverse: Image RIGHT — Every Flooring Type -->
    <section>
      <div class="container">
        <div class="split-reverse">
          <div class="reveal-up">
            <h2 class="section-title">Every Flooring Type, One Contractor</h2>
            <div class="prose">
              <p>Most flooring companies specialize in one or two materials. Rocca Tile &amp; Granite handles the full range — porcelain and ceramic tile, natural stone (travertine, marble, slate), solid and engineered hardwood, luxury vinyl plank (LVP), laminate, carpet, and epoxy garage floor coatings. We also install large-format tile, wood-look plank tile, and outdoor patio flooring built to handle Southern California weather. One crew, one point of contact, every flooring type under one license.</p>
              <p style="margin-top:var(--space-md);">That range matters when your project involves multiple rooms with different needs. A kitchen might call for porcelain tile, the living room for engineered hardwood, bedrooms for carpet, and the garage for epoxy. We handle the transitions between materials — thresholds, reducer strips, and T-moldings — so every connection between rooms looks intentional, not improvised. No subcontractors, no handoffs between trades.</p>
            </div>
            <a href="/contact" class="btn-primary" style="margin-top:var(--space-lg);">Get a Free Flooring Estimate</a>
          </div>
          <div class="split-img" data-animate="wipe-right">
            <img src="https://i.imgur.com/aXEc5nJ.jpeg" alt="Large format outdoor patio tile installation" width="800" height="600" loading="lazy">
          </div>
        </div>
      </div>
    </section>

    <!-- Gallery -->
    <section style="background: var(--bg-alt);">
      <div class="container">
        <h2 class="section-title reveal-up" style="text-align:center;">Flooring Projects Across the Inland Empire</h2>
        <div class="service-gallery">
          <div class="service-gallery-item">
            <img src="https://i.imgur.com/bfU8taU.jpeg" alt="Dark wood treads staircase flooring installation by Rocca Tile in the Inland Empire" width="600" height="375" loading="lazy">
          </div>
          <div class="service-gallery-item">
            <img src="https://i.imgur.com/Z39e2d9.jpeg" alt="Staircase with wooden treads and metal balusters installed by Rocca Tile" width="600" height="375" loading="lazy">
          </div>
        </div>
      </div>
    </section>

    <!-- Mid-Page CTA -->
    <section class="inline-cta">
      <div class="container">
        <h2>Need a Flooring Estimate?</h2>
        <p>Call for a free on-site measurement and quote — no pressure, no obligation.</p>
        <a href="tel:+19092383188" style="display:block;font-size:1.4rem;font-weight:700;color:#fff;margin-bottom:var(--space-md);">(909) 238-3188</a>
        <a href="/contact" class="btn-primary">Request Your Free Estimate</a>
      </div>
    </section>

    <!-- Split: Image LEFT — Technical Side -->
    <section>
      <div class="container">
        <div class="split">
          <div class="split-img" data-animate="wipe-right">
            <img src="https://i.imgur.com/iKXABcq.jpeg" alt="Light gray epoxy floor coating in garage" width="800" height="600" loading="lazy">
          </div>
          <div class="reveal-up">
            <h2 class="section-title">What Goes Into a Professional Floor Installation?</h2>
            <div class="prose">
              <p>Proper subfloor preparation is what separates a flooring installation that lasts from one that buckles, cracks, or pops loose within a year. Before any new material goes down, we check for moisture levels, subfloor levelness, and structural integrity. High moisture means a vapor barrier. Uneven areas get leveled with self-leveling compound. Damaged sections of subfloor get replaced — not patched over and hidden. We don't skip this step because the consequences show up in six months, and by then the whole floor has to come back up.</p>
              <p style="margin-top:var(--space-md);">Once the subfloor is sound, the installation itself follows manufacturer specifications for the chosen material — proper adhesive or fastener systems, correct expansion gaps, appropriate underlayment, and precise cuts at walls, doorways, and fixtures. We handle transitions between rooms where flooring types or heights change, install new baseboards or quarter-round trim, and finish thresholds at exterior doors. Every detail that touches the floor gets addressed — not just the flooring itself.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Benefits Grid -->
    <section style="background: var(--bg-alt);">
      <div class="container">
        <h2 class="section-title reveal-up" style="text-align:center;">Why Homeowners Choose Rocca for Flooring</h2>
        <div class="benefits-grid">
          <div class="benefit-item">
            <div class="benefit-icon"><i data-lucide="layers" style="width:24px;height:24px;"></i></div>
            <div>
              <h3>All Flooring Types</h3>
              <p>Tile, hardwood, luxury vinyl plank, laminate, carpet, and epoxy — one crew handles it all under one license.</p>
            </div>
          </div>
          <div class="benefit-item">
            <div class="benefit-icon"><i data-lucide="home" style="width:24px;height:24px;"></i></div>
            <div>
              <h3>Indoor &amp; Outdoor</h3>
              <p>Living rooms to patios, garages to pool decks. We install flooring everywhere your property needs it.</p>
            </div>
          </div>
          <div class="benefit-item">
            <div class="benefit-icon"><i data-lucide="wrench" style="width:24px;height:24px;"></i></div>
            <div>
              <h3>Subfloor Prep Included</h3>
              <p>Leveling, moisture barriers, and old flooring removal are part of every project — the prep that makes a floor last decades, not months.</p>
            </div>
          </div>
          <div class="benefit-item">
            <div class="benefit-icon"><i data-lucide="shield-check" style="width:24px;height:24px;"></i></div>
            <div>
              <h3>Licensed Since 2004</h3>
              <p>CSLB #927459, fully insured, 20+ years of flooring installations across the Inland Empire.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ -->
    <section>
      <div class="container">
        <h2 class="section-title reveal-up" style="text-align:center;">Flooring Installation Questions from Inland Empire Homeowners</h2>
        <div class="faq-list reveal-up">
          <div class="faq-item answer-block">
            <h3>What factors affect the cost of flooring installation?</h3>
            <p class="prose">Material choice, square footage, subfloor condition, pattern complexity, and transitions between rooms all influence the investment. Natural stone and solid hardwood require more labor and material than laminate or luxury vinyl plank. Existing subfloors that need leveling, moisture barriers, or repair add prep time. Custom patterns and intricate borders increase installation hours. We walk every room, assess subfloor condition, and provide a free itemized estimate so you see exactly what your project requires.</p>
          </div>
          <div class="faq-item answer-block">
            <h3>What's the most durable flooring for a kitchen?</h3>
            <p class="prose">Porcelain tile and luxury vinyl plank (LVP) are the two toughest choices for kitchens. Tile is waterproof, scratch-resistant, and holds up for decades with very little maintenance. LVP is waterproof, softer underfoot, and installs faster. Both shrug off heavy foot traffic without showing wear. We install both and help you pick based on how the kitchen actually gets used — pets, kids, bare feet on weekend mornings.</p>
          </div>
          <div class="faq-item answer-block">
            <h3>Do you remove and dispose of old flooring?</h3>
            <p class="prose">Yes. Removing and hauling away existing carpet, tile, hardwood, vinyl, or laminate is part of every installation project we take on. You don't schedule a separate demo crew, and you don't end up with a pile of old material at the curb — we handle it start to finish.</p>
          </div>
          <div class="faq-item answer-block">
            <h3>How long does flooring installation take?</h3>
            <p class="prose">Most single-room installs finish in one to three days. Whole-home projects with multiple flooring types and transitions take a week or two, depending on square footage and subfloor prep. Hardwood and tile run longer than LVP and laminate because of setting and curing time. We give you a specific timeline tied to your rooms and materials before we start.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Related Services -->
    <section style="background: var(--bg-alt);">
      <div class="container">
        <h2 class="section-title reveal-up" style="text-align:center;">Related Services</h2>
        <div class="related-services">
          <a href="/services/tile-installation" class="related-card">
            <h3>Tile Installation</h3>
            <p>Ceramic, porcelain, natural stone, and mosaic tile for floors, walls, showers, backsplashes, and patios.</p>
            <span class="service-card-link">Learn more <i data-lucide="arrow-right" style="width:16px;height:16px;"></i></span>
          </a>
          <a href="/services/kitchen-remodeling" class="related-card">
            <h3>Kitchen Remodeling</h3>
            <p>Complete kitchen renovations with custom cabinets, granite countertops, and new flooring.</p>
            <span class="service-card-link">Learn more <i data-lucide="arrow-right" style="width:16px;height:16px;"></i></span>
          </a>
          <a href="/services/bathroom-remodeling" class="related-card">
            <h3>Bathroom Remodeling</h3>
            <p>Custom tile showers, waterproof flooring, vanities, and full bathroom renovations.</p>
            <span class="service-card-link">Learn more <i data-lucide="arrow-right" style="width:16px;height:16px;"></i></span>
          </a>
        </div>
      </div>
    </section>

    <!-- Closing CTA -->
    <section class="closing-cta" style="background-image: url('https://i.imgur.com/FJdxDpq.jpeg');">
      <div class="container" data-animate="fade-up">
        <h2>Start Your Flooring Project Today</h2>
        <p class="prose-centered">Tell us what you need and get a detailed estimate — free, with no obligation.</p>
        <a href="tel:+19092383188" class="hero-phone"><i data-lucide="phone" style="width:24px;height:24px;"></i> (909) 238-3188</a>
        <br>
        <a href="/contact" class="btn-primary" style="margin-top:var(--space-md);">Get Your Free Flooring Estimate</a>
      </div>
    </section>

    <div class="container" style="padding:var(--space-lg) var(--space-lg);">
      <p class="last-updated">Last Updated: <?php echo date('F Y'); ?></p>
    </div>

  </main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
