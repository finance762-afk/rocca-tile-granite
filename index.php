<?php
$pageTitle       = "Rocca Tile & Granite LLC | Kitchen & Bathroom Remodeling in Chino, CA";
$pageDescription = "Rocca Tile & Granite LLC provides expert tile installation, granite countertops, and kitchen and bathroom remodeling in Chino, CA and the Inland Empire. CSLB #927459. Call (909) 238-3188 for a free estimate.";
$canonicalUrl    = "https://rocca-tile.com";
$ogImage         = "https://i.imgur.com/1Jd20dJ.jpeg";
$currentPage     = "home";
$heroImage       = "https://i.imgur.com/1Jd20dJ.jpeg";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;

$schemaMarkup = '[
  {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "@id": "https://rocca-tile.com/#business",
    "name": "Rocca Tile & Granite LLC",
    "alternateName": "Elegant Kitchens & Bath",
    "description": "Licensed tile, granite, and remodeling contractor serving Chino and the Inland Empire since 2004. Kitchen remodeling, bathroom remodeling, tile installation, granite countertops, cabinet services, and flooring installation.",
    "url": "https://rocca-tile.com",
    "telephone": "+1-909-238-3188",
    "email": "roccatile@yahoo.com",
    "image": "https://i.imgur.com/h0utYwx.png",
    "logo": "https://i.imgur.com/h0utYwx.png",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "13641 Central Ave",
      "addressLocality": "Chino",
      "addressRegion": "CA",
      "postalCode": "91710",
      "addressCountry": "US"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": 34.0122,
      "longitude": -117.6889
    },
    "openingHoursSpecification": [
      {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
        "opens": "08:00",
        "closes": "17:00"
      }
    ],
    "areaServed": {
      "@type": "GeoCircle",
      "geoMidpoint": {
        "@type": "GeoCoordinates",
        "latitude": 34.0122,
        "longitude": -117.6889
      },
      "geoRadius": "75 mi"
    },
    "priceRange": "$$",
    "foundingDate": "2004",
    "founder": {
      "@type": "Person",
      "name": "Filiberto Reyes"
    },
    "hasCredential": {
      "@type": "EducationalOccupationalCredential",
      "credentialCategory": "CSLB License",
      "recognizedBy": {
        "@type": "Organization",
        "name": "California Contractors State License Board"
      },
      "identifier": "927459"
    },
    "aggregateRating": {
      "@type": "AggregateRating",
      "ratingValue": "4.9",
      "reviewCount": "87",
      "bestRating": "5"
    },
    "sameAs": [
      "https://www.yelp.com/biz/rocca-tile-and-granite-chino",
      "https://nextdoor.com/pages/rocca-tile-granite/",
      "https://www.homeadvisor.com/rated.RoccaTileandGranite.27548734.html"
    ]
  },
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Rocca Tile & Granite LLC",
    "url": "https://rocca-tile.com",
    "logo": "https://i.imgur.com/h0utYwx.png",
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+1-909-238-3188",
      "contactType": "customer service",
      "availableLanguage": ["English", "Spanish"]
    }
  },
  {
    "@context": "https://schema.org",
    "@type": "WebSite",
    "name": "Rocca Tile & Granite LLC",
    "url": "https://rocca-tile.com",
    "potentialAction": {
      "@type": "SearchAction",
      "target": "https://rocca-tile.com/?s={search_term_string}",
      "query-input": "required name=search_term_string"
    }
  },
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "How much does a kitchen remodel cost in Chino?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Kitchen remodels in the Chino and Inland Empire area typically range from $15,000 to $60,000 depending on scope. A basic refresh — new countertops, backsplash, and cabinet refacing — runs $15,000 to $25,000. A full gut-and-rebuild with custom granite, new cabinetry, and flooring usually falls between $35,000 and $60,000. We provide free on-site estimates with detailed breakdowns."
        }
      },
      {
        "@type": "Question",
        "name": "How long does a bathroom remodel take?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Most bathroom remodels take 2 to 4 weeks depending on scope. A straightforward tile and vanity replacement can be completed in 10 to 14 days. Full bathroom renovations — including layout changes, custom tile showers, and granite vanities — typically require 3 to 4 weeks. We provide a detailed timeline during your consultation."
        }
      },
      {
        "@type": "Question",
        "name": "Do you fabricate granite countertops in-house?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We work directly with local stone fabricators to template, cut, and finish your granite, quartz, or marble countertops to exact specifications. This means you get custom-fitted surfaces with professional edge profiles, sink cutouts, and seam placement — all coordinated by our team from material selection through final installation."
        }
      },
      {
        "@type": "Question",
        "name": "What areas do you serve from Chino?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Rocca Tile & Granite serves a 75-mile radius from our Chino, CA location. That includes the entire Inland Empire (Ontario, Rancho Cucamonga, Upland, Fontana, Corona, Riverside), the San Gabriel Valley (Pomona, West Covina, Diamond Bar), parts of Orange County (Brea, Yorba Linda, Anaheim Hills), and eastern Los Angeles County."
        }
      },
      {
        "@type": "Question",
        "name": "Are you a licensed contractor?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes. Rocca Tile & Granite LLC holds an active California Contractors State License Board (CSLB) license #927459. We are fully licensed and insured. You can verify our license status directly on the CSLB website. We have maintained continuous licensure since 2004."
        }
      }
    ]
  }
]';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

  <main id="main-content">

    <!-- ===== HERO ===== -->
    <section class="hero" style="background-image: url('https://i.imgur.com/1Jd20dJ.jpeg');">
      <div class="container">
        <h1>Tile, Granite &amp; Remodeling<br>Crafted for Your Home</h1>
        <p>Licensed Tile, Granite &amp; Remodeling Contractors Serving Chino &amp; the Inland Empire Since 2004</p>
        <a href="tel:+19092383188" class="hero-phone">
          <i data-lucide="phone" style="width:28px;height:28px;"></i>
          (909) 238-3188
        </a>
        <div class="hero-cta">
          <div class="hero-buttons">
            <a href="/contact" class="btn-primary">Get a Free Estimate</a>
            <a href="/services" class="btn-secondary">View Our Work</a>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== TRUST BADGES ===== -->
    <div class="trust-strip">
      <div class="container">
        <div class="trust-item">
          <i data-lucide="calendar" style="width:18px;height:18px;"></i>
          Since 2004
        </div>
        <div class="trust-item">
          <i data-lucide="shield-check" style="width:18px;height:18px;"></i>
          CSLB Licensed #927459
        </div>
        <div class="trust-item">
          <i data-lucide="building-2" style="width:18px;height:18px;"></i>
          Residential &amp; Commercial
        </div>
        <div class="trust-item">
          <i data-lucide="file-text" style="width:18px;height:18px;"></i>
          Free Estimates
        </div>
      </div>
    </div>

    <!-- ===== IDENTITY SENTENCE ===== -->
    <section style="padding: var(--space-2xl) 0 0;">
      <div class="container">
        <p class="prose-centered" style="text-align:center; font-size:1.05rem; color: var(--text-light);">Rocca Tile &amp; Granite LLC is a licensed and insured tile, granite, and remodeling company based in Chino, California, serving homeowners across the Inland Empire, San Gabriel Valley, and Orange County.</p>
      </div>
    </section>

    <!-- ===== SERVICES GRID ===== -->
    <section>
      <div class="container">
        <div style="text-align:center; margin-bottom: var(--space-2xl);">
          <span class="eyebrow-label">What We Do</span>
          <h2 class="section-title">Kitchen, Bath &amp; Flooring — Start to Finish</h2>
          <p class="section-subtitle prose-centered">From custom granite countertops to full kitchen gut-and-rebuilds, we handle every phase of your remodel in-house.</p>
        </div>
        <div class="grid-3" data-animate="fade-up">
          <!-- Kitchen Remodeling -->
          <a href="/services/kitchen-remodeling" class="service-card">
            <div class="service-card-img">
              <img src="https://i.imgur.com/SUDtWdP.jpeg" alt="Modern kitchen remodel with white island and pendant lights in Chino, CA" width="600" height="450" loading="lazy">
            </div>
            <div class="service-card-body">
              <h3>Kitchen Remodeling</h3>
              <p>Complete kitchen transformations — countertops, cabinets, tile backsplashes, flooring, and layout redesigns tailored to how you live.</p>
              <span class="service-card-link">Learn more <i data-lucide="arrow-right" style="width:16px;height:16px;"></i></span>
            </div>
          </a>
          <!-- Bathroom Remodeling -->
          <a href="/services/bathroom-remodeling" class="service-card">
            <div class="service-card-img">
              <img src="https://i.imgur.com/7135LDU.jpeg" alt="Bathroom vanity with patterned tile backsplash by Rocca Tile and Granite" width="600" height="450" loading="lazy">
            </div>
            <div class="service-card-body">
              <h3>Bathroom Remodeling</h3>
              <p>Custom tile showers, granite vanities, new fixtures, and full bathroom renovations that add value and daily comfort to your home.</p>
              <span class="service-card-link">Learn more <i data-lucide="arrow-right" style="width:16px;height:16px;"></i></span>
            </div>
          </a>
          <!-- Tile Installation -->
          <a href="/services/tile-installation" class="service-card">
            <div class="service-card-img">
              <img src="https://i.imgur.com/Uvaj7ZZ.jpeg" alt="3D wavy textured wall tile installation in the Inland Empire" width="600" height="450" loading="lazy">
            </div>
            <div class="service-card-body">
              <h3>Tile Installation</h3>
              <p>Floors, walls, showers, and backsplashes — porcelain, ceramic, natural stone, and decorative mosaic installed with precision.</p>
              <span class="service-card-link">Learn more <i data-lucide="arrow-right" style="width:16px;height:16px;"></i></span>
            </div>
          </a>
          <!-- Granite Countertops -->
          <a href="/services/granite-countertops" class="service-card">
            <div class="service-card-img">
              <img src="https://i.imgur.com/Ri0nHhg.jpeg" alt="White marble countertop with gold faucet installed by Rocca Tile" width="600" height="450" loading="lazy">
            </div>
            <div class="service-card-body">
              <h3>Granite Countertops</h3>
              <p>Custom-fabricated granite, quartz, and marble countertops — templated, cut, and installed for kitchens, bathrooms, and islands.</p>
              <span class="service-card-link">Learn more <i data-lucide="arrow-right" style="width:16px;height:16px;"></i></span>
            </div>
          </a>
          <!-- Cabinet Services -->
          <a href="/services/cabinet-services" class="service-card">
            <div class="service-card-img">
              <img src="https://i.imgur.com/dg0mcaN.jpeg" alt="Two-tone navy and white kitchen cabinets in Chino home" width="600" height="450" loading="lazy">
            </div>
            <div class="service-card-body">
              <h3>Cabinet Services</h3>
              <p>New cabinet construction, painting, refinishing, refacing, and installation — refresh the look or build from scratch.</p>
              <span class="service-card-link">Learn more <i data-lucide="arrow-right" style="width:16px;height:16px;"></i></span>
            </div>
          </a>
          <!-- Flooring Installation -->
          <a href="/services/flooring-installation" class="service-card">
            <div class="service-card-img">
              <img src="https://i.imgur.com/4vCoIlC.jpeg" alt="Neutral tile flooring installation for Inland Empire residence" width="600" height="450" loading="lazy">
            </div>
            <div class="service-card-body">
              <h3>Flooring Installation</h3>
              <p>Tile, hardwood, luxury vinyl plank, and carpet — professional installation across every room in your home.</p>
              <span class="service-card-link">Learn more <i data-lucide="arrow-right" style="width:16px;height:16px;"></i></span>
            </div>
          </a>
        </div>
      </div>
    </section>

    <!-- ===== ABOUT SPLIT ===== -->
    <section style="background: var(--bg-alt);">
      <div class="container">
        <div class="split">
          <div class="about-split-img">
            <img src="https://i.imgur.com/82RnMGa.jpeg" alt="Spacious open kitchen with dark cabinets and granite countertops by Rocca Tile and Granite" width="800" height="600" loading="lazy">
          </div>
          <div data-animate="fade-up">
            <h2 class="section-title">Over 20 Years of Craftsmanship in the Inland Empire</h2>
            <div class="prose">
              <p>Rocca Tile &amp; Granite LLC has been transforming homes across Chino and the Inland Empire since 2004. Founded by Filiberto Reyes, we started as a specialized tile and stone contractor and grew into a full-service remodeling firm — handling everything from custom granite countertop fabrication to complete kitchen and bathroom gut-and-rebuilds.</p>
              <p style="margin-top: var(--space-md);">Licensed with the California Contractors State License Board (#927459) and backed by over two decades of hands-on experience, we bring the kind of detail and durability that homeowners notice for years after the project wraps up.</p>
            </div>
            <a href="/about" class="btn-primary" style="margin-top: var(--space-xl);">Meet the Team</a>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== STAT COUNTERS ===== -->
    <section class="stats-section">
      <div class="container">
        <div class="stats-grid" data-animate="fade-up">
          <div class="stat-item">
            <div class="stat-number" data-count="20" data-suffix="+">0+</div>
            <div class="stat-label">Years in Business</div>
          </div>
          <div class="stat-item">
            <div class="stat-number" data-count="1000" data-suffix="+">0+</div>
            <div class="stat-label">Projects Completed</div>
          </div>
          <div class="stat-item">
            <div class="stat-number" data-count="75">0</div>
            <div class="stat-label">Mile Service Radius</div>
          </div>
          <div class="stat-item">
            <div class="stat-number">CSLB</div>
            <div class="stat-label">Licensed &amp; Insured</div>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== MID-PAGE CTA BANNER ===== -->
    <section class="cta-banner">
      <div class="container" data-animate="fade-up">
        <h2>Your Kitchen or Bathroom, Done Right the First Time</h2>
        <p class="prose-centered">Tell us about your project and get a detailed estimate — no pressure, no obligation. Just honest numbers from a licensed contractor who has been doing this for 20+ years.</p>
        <a href="tel:+19092383188" style="display:block; font-size:1.5rem; font-weight:700; margin-bottom: var(--space-lg); color: #fff;">(909) 238-3188</a>
        <a href="/contact" class="btn-primary">Request Your Free Estimate</a>
      </div>
    </section>

    <!-- ===== PROCESS / HOW WE WORK ===== -->
    <section>
      <div class="container">
        <div class="split-reverse">
          <div data-animate="fade-up">
            <h2 class="section-title">How Every Project Comes Together</h2>
            <div class="process-steps">
              <div class="process-step">
                <div class="process-step-num">1</div>
                <div>
                  <h3>Consultation</h3>
                  <p>We visit your home, measure the space, discuss your goals, and walk you through material options that fit your budget and style.</p>
                </div>
              </div>
              <div class="process-step">
                <div class="process-step-num">2</div>
                <div>
                  <h3>Design &amp; Planning</h3>
                  <p>We finalize materials, layout, and timeline. You see exactly what you're getting — and what it costs — before any work begins.</p>
                </div>
              </div>
              <div class="process-step">
                <div class="process-step-num">3</div>
                <div>
                  <h3>Build</h3>
                  <p>Our crew handles demolition, prep, and installation. We keep the jobsite clean, communicate daily, and stay on schedule.</p>
                </div>
              </div>
              <div class="process-step">
                <div class="process-step-num">4</div>
                <div>
                  <h3>Final Walkthrough</h3>
                  <p>We walk the finished project with you, address every detail, and make sure you're completely satisfied before we call it done.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="process-split-img">
            <img src="https://i.imgur.com/a8Qermj.jpeg" alt="Kitchen with espresso cabinets and granite countertops by Rocca Tile" width="800" height="600" loading="lazy">
          </div>
        </div>
      </div>
    </section>

    <!-- ===== WORK GALLERY ===== -->
    <section style="background: var(--bg-alt);">
      <div class="container">
        <div style="text-align:center; margin-bottom: var(--space-2xl);">
          <h2 class="section-title">Recent Work Across the Inland Empire</h2>
          <p class="section-subtitle prose-centered">Kitchens, bathrooms, tile, stone, and flooring — a sample of what we build for homeowners like you.</p>
        </div>
        <div class="gallery-grid" data-animate="fade-up">
          <div class="gallery-item">
            <img src="https://i.imgur.com/kC3dYTt.jpeg" alt="Double vanity with marble countertop installed in Chino bathroom" width="600" height="800" loading="lazy">
          </div>
          <div class="gallery-item">
            <img src="https://i.imgur.com/992lfTu.jpeg" alt="Walk-in glass shower with custom tile work by Rocca Tile" width="600" height="450" loading="lazy">
          </div>
          <div class="gallery-item">
            <img src="https://i.imgur.com/NkkgfLe.jpeg" alt="Sage green kitchen remodel in the Inland Empire" width="600" height="450" loading="lazy">
          </div>
          <div class="gallery-item">
            <img src="https://i.imgur.com/IaCzfvr.jpeg" alt="White quartz island with farmhouse sink and gold fixtures" width="800" height="450" loading="lazy">
          </div>
          <div class="gallery-item">
            <img src="https://i.imgur.com/Z7Z7Y5n.jpeg" alt="Freestanding soaking tub in remodeled Chino bathroom" width="600" height="450" loading="lazy">
          </div>
          <div class="gallery-item">
            <img src="https://i.imgur.com/w08CHAg.jpeg" alt="Navy blue double vanity with granite countertop and gold hardware" width="600" height="450" loading="lazy">
          </div>
        </div>
      </div>
    </section>

    <!-- ===== FAQ ===== -->
    <section>
      <div class="container">
        <div style="text-align:center; margin-bottom: var(--space-2xl);">
          <h2 class="section-title">Common Questions from Inland Empire Homeowners</h2>
        </div>
        <div class="faq-list" data-animate="fade-up">
          <div class="faq-item">
            <h3>How much does a kitchen remodel cost in Chino?</h3>
            <p class="prose">Kitchen remodels in the Chino and Inland Empire area typically range from $15,000 to $60,000 depending on scope. A basic refresh — new countertops, backsplash, and cabinet refacing — runs $15,000 to $25,000. A full gut-and-rebuild with custom granite, new cabinetry, and flooring usually falls between $35,000 and $60,000. We provide free on-site estimates with detailed breakdowns.</p>
          </div>
          <div class="faq-item">
            <h3>How long does a bathroom remodel take?</h3>
            <p class="prose">Most bathroom remodels take 2 to 4 weeks depending on scope. A straightforward tile and vanity replacement can be completed in 10 to 14 days. Full bathroom renovations — including layout changes, custom tile showers, and granite vanities — typically require 3 to 4 weeks. We provide a detailed timeline during your consultation.</p>
          </div>
          <div class="faq-item">
            <h3>Do you fabricate granite countertops in-house?</h3>
            <p class="prose">We work directly with local stone fabricators to template, cut, and finish your granite, quartz, or marble countertops to exact specifications. This means you get custom-fitted surfaces with professional edge profiles, sink cutouts, and seam placement — all coordinated by our team from material selection through final installation.</p>
          </div>
          <div class="faq-item">
            <h3>What areas do you serve from Chino?</h3>
            <p class="prose">Rocca Tile &amp; Granite serves a 75-mile radius from our Chino, CA location. That includes the entire Inland Empire (Ontario, Rancho Cucamonga, Upland, Fontana, Corona, Riverside), the San Gabriel Valley (Pomona, West Covina, Diamond Bar), parts of Orange County (Brea, Yorba Linda, Anaheim Hills), and eastern Los Angeles County.</p>
          </div>
          <div class="faq-item">
            <h3>Are you a licensed contractor?</h3>
            <p class="prose">Yes. Rocca Tile &amp; Granite LLC holds an active California Contractors State License Board (CSLB) license #927459. We are fully licensed and insured. You can verify our license status directly on the CSLB website. We have maintained continuous licensure since 2004.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== CLOSING CTA ===== -->
    <section class="closing-cta" style="background-image: url('https://i.imgur.com/FJdxDpq.jpeg');">
      <div class="container" data-animate="fade-up">
        <h2>Ready to Transform Your Space?</h2>
        <p class="prose-centered">Whether it's a new granite countertop, a complete kitchen remodel, or tile throughout your home — we'll walk you through every step and give you a number you can plan around.</p>
        <a href="tel:+19092383188" class="hero-phone">
          <i data-lucide="phone" style="width:24px;height:24px;"></i>
          (909) 238-3188
        </a>
        <br>
        <a href="/contact" class="btn-primary" style="margin-top: var(--space-md);">Schedule Your Free Consultation</a>
      </div>
    </section>

  </main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
