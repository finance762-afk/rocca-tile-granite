<?php
$pageTitle       = "About Rocca Tile & Granite LLC | Chino, CA Remodeling Contractor";
$pageDescription = "Learn about Rocca Tile & Granite LLC, owned by Filiberto Reyes. Licensed (CSLB #927459) tile, granite, and remodeling contractor serving Chino and the Inland Empire since 2004.";
$canonicalUrl    = "https://rocca-tile.com/about";
$ogImage         = "https://i.imgur.com/ltBwWQU.jpeg";
$currentPage     = "about";
$heroImage       = "https://i.imgur.com/ltBwWQU.jpeg";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;

$schemaMarkup = '[
  {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
      {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://rocca-tile.com/"},
      {"@type": "ListItem", "position": 2, "name": "About", "item": "https://rocca-tile.com/about"}
    ]
  },
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Rocca Tile & Granite LLC",
    "alternateName": "Elegant Kitchens & Bath",
    "url": "https://rocca-tile.com",
    "logo": "https://i.imgur.com/oHC2eR1.png",
    "foundingDate": "2004",
    "founder": {"@type": "Person", "name": "Filiberto Reyes"},
    "address": {"@type": "PostalAddress", "addressLocality": "Chino", "addressRegion": "CA", "postalCode": "91710", "addressCountry": "US"},
    "telephone": "+1-909-238-3188",
    "email": "roccatile@yahoo.com",
    "sameAs": [
      "https://www.yelp.com/biz/rocca-tile-and-granite-chino",
      "https://nextdoor.com/pages/rocca-tile-granite/",
      "https://www.homeadvisor.com/rated.RoccaTileandGranite.27548734.html"
    ]
  },
  {
    "@context": "https://schema.org",
    "@type": "Person",
    "name": "Filiberto Reyes",
    "jobTitle": "Owner",
    "worksFor": {"@type": "Organization", "name": "Rocca Tile & Granite LLC"},
    "address": {"@type": "PostalAddress", "addressLocality": "Chino", "addressRegion": "CA"}
  },
  {
    "@context": "https://schema.org",
    "@type": "AggregateRating",
    "itemReviewed": {"@type": "LocalBusiness", "name": "Rocca Tile & Granite LLC"},
    "ratingValue": "4.9",
    "reviewCount": "87",
    "bestRating": "5"
  }
]';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

  <main id="main-content">

    <!-- Page Hero -->
    <section class="page-hero" style="background-image: url('https://i.imgur.com/ltBwWQU.jpeg');">
      <div class="floating-accent floating-accent--gold float-animate" style="top:14%; left:5%; width:120px; height:120px;" aria-hidden="true">
        <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="20" width="60" height="60" fill="none" stroke="currentColor" stroke-width="1.5"/></svg>
      </div>
      <div class="container">
        <h1>About <span class="text-accent">Rocca</span> Tile &amp; Granite</h1>
        <p>Over 20 Years of Craftsmanship in Chino &amp; the Inland Empire</p>
      </div>
      <div class="section-divider section-divider--bottom" aria-hidden="true">
        <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><path d="M0,60 Q360,20 720,40 T1440,20 L1440,60 Z" fill="#FFFFFF"/></svg>
      </div>
    </section>

    <!-- Breadcrumb -->
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <div class="container">
        <a href="/">Home</a> <span>/</span> About
      </div>
    </nav>

    <!-- Answer-First Intro -->
    <section>
      <div class="container">
        <div class="prose-centered" style="text-align:center;">
          <p style="font-size:1.05rem;">Rocca Tile &amp; Granite LLC is a licensed and insured tile, granite, and remodeling company based in Chino, California. Founded in 2004 by Filiberto Reyes, we have spent over two decades building kitchens, bathrooms, and living spaces that Inland Empire homeowners are proud to come home to. CSLB License #927459.</p>
        </div>
      </div>
    </section>

    <!-- Split: Owner Story (overlapping image stack) -->
    <section style="background: var(--color-bg-alt); position: relative;">
      <div class="container">
        <div class="split">
          <div class="reveal-left">
            <span class="eyebrow-label">Our Story</span>
            <h2 class="section-title">Built by Hand, <span class="text-accent">Grown by Reputation</span></h2>
            <div class="prose">
              <p>Filiberto Reyes started Rocca Tile &amp; Granite in 2004 with a straightforward idea: do tile and stone work the right way, and let the results speak for themselves. In the early years, the company focused on residential tile installation — floors, showers, backsplashes — earning referrals one project at a time across Chino and the surrounding Inland Empire.</p>
              <p style="margin-top:var(--space-md);">Over two decades, that focus expanded. Homeowners kept asking if Filiberto could handle the countertops, the cabinets, the full kitchen gut-and-rebuild. So the company grew — methodically, not overnight — into a full-service remodeling firm that now handles custom granite countertop fabrication, cabinet construction and refinishing, complete kitchen and bathroom renovations, flooring installation, and room additions. Today, Rocca Tile &amp; Granite also operates under the Elegant Kitchens &amp; Bath brand for full-scope remodeling projects.</p>
              <p style="margin-top:var(--space-md);">Filiberto is still hands-on. He's on the jobsite, not just managing from an office. That's the reason the company has maintained its reputation for detail and reliability even as the scope of work has grown.</p>
            </div>
          </div>
          <div class="about-image-stack reveal-right">
            <div class="about-image-accent" aria-hidden="true"></div>
            <div class="about-image-primary">
              <img src="https://i.imgur.com/ltBwWQU.jpeg" alt="Finished kitchen remodel built by the Rocca Tile and Granite crew in the Inland Empire" width="600" height="750" loading="lazy">
            </div>
            <div class="about-image-secondary">
              <img src="https://i.imgur.com/XDRZX3d.jpeg" alt="Modern kitchen detail showing quartz countertops and custom cabinetry" width="500" height="375" loading="lazy">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Split-Reverse: The Rocca Difference (Image LEFT, Text RIGHT) -->
    <section>
      <div class="container">
        <div class="split-reverse">
          <div class="reveal-right">
            <span class="eyebrow-label">The Difference</span>
            <h2 class="section-title">What Sets Rocca Tile &amp; Granite <span class="text-accent">Apart</span></h2>
            <div class="prose">
              <p>Most remodeling projects require multiple trades — a tile installer, a countertop fabricator, a cabinet company, a flooring crew. With Rocca Tile &amp; Granite, you get one licensed contractor managing every phase. We coordinate granite fabrication directly with local stone shops, build or install cabinets in-house, handle all tile and flooring work ourselves, and manage plumbing and electrical subcontractors so you deal with a single point of contact from start to finish.</p>
              <p style="margin-top:var(--space-md);">That coordination is the difference between a project that drags on for months with finger-pointing between trades and one that finishes on schedule with every detail aligned. It's also why our clients on Nextdoor and Yelp consistently describe us as the contractor they wish they'd found sooner.</p>
            </div>
          </div>
          <div class="split-img reveal-left">
            <img src="https://i.imgur.com/kC3dYTt.jpeg" alt="Double vanity with marble countertop installed by Rocca Tile and Granite" width="800" height="600" loading="lazy">
          </div>
        </div>
      </div>
    </section>

    <!-- Credentials Grid -->
    <section style="background: var(--bg-alt);">
      <div class="container">
        <h2 class="section-title reveal-up" style="text-align:center;">Credentials &amp; Experience</h2>
        <div class="benefits-grid">
          <div class="benefit-item">
            <div class="benefit-icon"><i data-lucide="shield-check" style="width:24px;height:24px;"></i></div>
            <div>
              <h3>CSLB Licensed #927459</h3>
              <p>Active California Contractors State License Board license, continuously maintained since 2004.</p>
            </div>
          </div>
          <div class="benefit-item">
            <div class="benefit-icon"><i data-lucide="calendar" style="width:24px;height:24px;"></i></div>
            <div>
              <h3>20+ Years in Business</h3>
              <p>Founded in 2004, serving Chino and the Inland Empire with hands-on craftsmanship for over two decades.</p>
            </div>
          </div>
          <div class="benefit-item">
            <div class="benefit-icon"><i data-lucide="building-2" style="width:24px;height:24px;"></i></div>
            <div>
              <h3>Residential &amp; Commercial</h3>
              <p>From single-bathroom updates to multi-unit commercial tile installations — we scale to the project.</p>
            </div>
          </div>
          <div class="benefit-item">
            <div class="benefit-icon"><i data-lucide="hammer" style="width:24px;height:24px;"></i></div>
            <div>
              <h3>Full-Service Remodeling</h3>
              <p>Tile, granite, cabinets, flooring, and complete kitchen and bathroom renovations — all from one contractor.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Split: Community Roots (Text LEFT, Image RIGHT) -->
    <section>
      <div class="container">
        <div class="split">
          <div class="reveal-up">
            <h2 class="section-title">Rooted in Chino, Trusted Across the Inland Empire</h2>
            <div class="prose">
              <p>Rocca Tile &amp; Granite is based in Chino, California, and most of our work comes from within a 75-mile radius — the Inland Empire, San Gabriel Valley, North Orange County, and parts of eastern Los Angeles County. A significant portion of our projects come through word-of-mouth referrals and recommendations on Nextdoor, where neighbors tell neighbors about the kitchen or bathroom we just finished down the street.</p>
              <p style="margin-top:var(--space-md);">That kind of local trust isn't built through advertising. It's built by showing up on time, communicating clearly, pricing honestly, and leaving every jobsite cleaner than we found it. After 20+ years, we've worked on enough homes in the area that there's a good chance someone on your block has already hired us.</p>
            </div>
            <a href="/contact" class="btn-primary" style="margin-top:var(--space-xl);">Get in Touch</a>
          </div>
          <div class="split-img">
            <img src="https://i.imgur.com/NkkgfLe.jpeg" alt="Sage green kitchen remodel completed by Rocca Tile in the Inland Empire" width="800" height="600" loading="lazy">
          </div>
        </div>
      </div>
    </section>

    <!-- Closing CTA -->
    <section class="closing-cta" style="background-image: url('https://i.imgur.com/FJdxDpq.jpeg');">
      <div class="container" data-animate="fade-up">
        <h2>Ready to Start Your Project?</h2>
        <p class="prose-centered">Tell us about your kitchen, bathroom, or flooring project. We'll visit your home, walk through the options, and give you an honest estimate — free, no pressure.</p>
        <a href="tel:+19092383188" class="hero-phone"><i data-lucide="phone" style="width:24px;height:24px;"></i> (909) 238-3188</a>
        <br>
        <a href="/contact" class="btn-primary" style="margin-top:var(--space-md);">Schedule Your Free Consultation</a>
      </div>
    </section>

  </main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
