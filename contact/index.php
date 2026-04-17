<?php
$pageTitle       = "Contact Rocca Tile & Granite LLC | Chino, CA — (909) 238-3188";
$pageDescription = "Contact Rocca Tile & Granite LLC in Chino, CA for a free estimate on tile, granite, kitchen and bathroom remodeling. Call (909) 238-3188 or fill out our form.";
$canonicalUrl    = "https://rocca-tile.com/contact";
$ogImage         = "https://i.imgur.com/oHC2eR1.png";
$currentPage     = "contact";
$heroImage       = "";
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;

$schemaMarkup = '[
  {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
      {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://rocca-tile.com/"},
      {"@type": "ListItem", "position": 2, "name": "Contact", "item": "https://rocca-tile.com/contact"}
    ]
  },
  {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "Rocca Tile & Granite LLC",
    "telephone": "+1-909-238-3188",
    "email": "roccatile@yahoo.com",
    "address": {"@type": "PostalAddress", "addressLocality": "Chino", "addressRegion": "CA", "postalCode": "91710", "addressCountry": "US"},
    "openingHoursSpecification": [{"@type": "OpeningHoursSpecification", "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"], "opens": "08:00", "closes": "17:00"}],
    "contactPoint": {"@type": "ContactPoint", "telephone": "+1-909-238-3188", "contactType": "customer service", "availableLanguage": ["English", "Spanish"]}
  }
]';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

  <main id="main-content">

    <!-- Page Hero -->
    <section class="page-hero" style="background: var(--bg-dark);">
      <div class="container">
        <h1>Contact Rocca Tile &amp; Granite</h1>
        <p>Schedule Your Free Estimate Today</p>
      </div>
    </section>

    <!-- Breadcrumb -->
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <div class="container">
        <a href="/">Home</a> <span>/</span> Contact
      </div>
    </nav>

    <!-- Contact Split: Form + Info -->
    <section>
      <div class="container">
        <div class="split" style="align-items: flex-start;">

          <!-- LEFT: Contact Form -->
          <div>
            <h2 class="section-title">Request a Free Estimate</h2>
            <p class="prose" style="margin-bottom: var(--space-xl); color: var(--text-light);">Tell us about your project and we'll get back to you within one business day with an estimate — no pressure, no obligation.</p>

            <form action="https://formsubmit.co/roccatile@yahoo.com" method="POST">
              <!-- Hidden Fields -->
              <input type="hidden" name="_next" value="https://rocca-tile.com/thank-you">
              <input type="hidden" name="_captcha" value="false">
              <input type="text" name="_honey" style="display:none">
              <input type="hidden" name="_template" value="table">
              <input type="hidden" name="_subject" value="New Lead from Rocca-Tile.com">
              <input type="hidden" name="_cc" value="CustomerService@pageoneinsights.com">

              <div class="form-group">
                <input type="text" name="name" id="name" placeholder=" " required>
                <label for="name">Full Name</label>
              </div>

              <div class="form-group">
                <input type="tel" name="phone" id="phone" placeholder=" " required>
                <label for="phone">Phone Number</label>
              </div>

              <div class="form-group">
                <input type="email" name="email" id="email" placeholder=" " required>
                <label for="email">Email Address</label>
              </div>

              <div class="form-group">
                <select name="service" id="service" required>
                  <option value="" disabled selected></option>
                  <option value="Kitchen Remodeling">Kitchen Remodeling</option>
                  <option value="Bathroom Remodeling">Bathroom Remodeling</option>
                  <option value="Tile Installation">Tile Installation</option>
                  <option value="Granite Countertops">Granite Countertops</option>
                  <option value="Cabinet Services">Cabinet Services</option>
                  <option value="Flooring Installation">Flooring Installation</option>
                  <option value="Other">Other</option>
                </select>
                <label for="service">Service Needed</label>
              </div>

              <div class="form-group">
                <textarea name="message" id="message" placeholder=" " rows="5"></textarea>
                <label for="message">Project Details</label>
              </div>

              <button type="submit" class="btn-primary" style="width:100%;">Request Your Free Estimate</button>
            </form>
          </div>

          <!-- RIGHT: Contact Info + Map -->
          <div>
            <h2 class="section-title">Get in Touch</h2>

            <div style="margin-bottom: var(--space-xl);">
              <div style="display:flex; align-items:flex-start; gap:var(--space-md); margin-bottom:var(--space-lg);">
                <i data-lucide="phone" style="width:20px;height:20px;color:var(--primary);flex-shrink:0;margin-top:2px;"></i>
                <div>
                  <strong>Phone</strong><br>
                  <a href="tel:+19092383188" style="color:var(--primary);font-weight:600;">(909) 238-3188</a>
                </div>
              </div>

              <div style="display:flex; align-items:flex-start; gap:var(--space-md); margin-bottom:var(--space-lg);">
                <i data-lucide="mail" style="width:20px;height:20px;color:var(--primary);flex-shrink:0;margin-top:2px;"></i>
                <div>
                  <strong>Email</strong><br>
                  <a href="mailto:roccatile@yahoo.com" style="color:var(--primary);">roccatile@yahoo.com</a>
                </div>
              </div>

              <div style="display:flex; align-items:flex-start; gap:var(--space-md); margin-bottom:var(--space-lg);">
                <i data-lucide="map-pin" style="width:20px;height:20px;color:var(--primary);flex-shrink:0;margin-top:2px;"></i>
                <div>
                  <strong>Location</strong><br>
                  Chino, CA 91710<br>
                  Serving the Inland Empire
                </div>
              </div>

              <div style="display:flex; align-items:flex-start; gap:var(--space-md); margin-bottom:var(--space-lg);">
                <i data-lucide="clock" style="width:20px;height:20px;color:var(--primary);flex-shrink:0;margin-top:2px;"></i>
                <div>
                  <strong>Hours</strong><br>
                  Monday&ndash;Friday: 8 AM &ndash; 5 PM<br>
                  Saturday&ndash;Sunday: Closed
                </div>
              </div>
            </div>

            <!-- Google Map -->
            <div style="border-radius:var(--radius);overflow:hidden;box-shadow:var(--elevation-2);">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3315.8!2d-117.689!3d34.012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c32dc0b0b0b0b0%3A0x0!2s13641+Central+Ave%2C+Chino%2C+CA+91710!5e0!3m2!1sen!2sus!4v1700000000000!5m2!1sen!2sus" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Rocca Tile and Granite location in Chino, CA"></iframe>
            </div>

          </div>
        </div>
      </div>
    </section>

  </main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
