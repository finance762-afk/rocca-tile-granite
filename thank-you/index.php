<?php
$pageTitle       = "Thank You | Rocca Tile & Granite LLC";
$pageDescription = "Thank you for contacting Rocca Tile & Granite LLC. We will respond within one business day.";
$canonicalUrl    = "https://rocca-tile.com/thank-you";
$ogImage         = "https://i.imgur.com/oHC2eR1.png";
$currentPage     = "thank-you";
$heroImage       = "";
$schemaMarkup    = '';
$noIndex         = true;
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

  <main id="main-content">

    <section style="min-height:60vh; display:flex; align-items:center; text-align:center;">
      <div class="container">
        <div style="margin-bottom:var(--space-xl);">
          <i data-lucide="check-circle" style="width:64px;height:64px;color:var(--accent);"></i>
        </div>
        <h1 style="margin-bottom:var(--space-md);">Thanks for Reaching Out!</h1>
        <p class="prose-centered" style="font-size:1.1rem; color:var(--text-light); margin-bottom:var(--space-xl);">We received your request and will get back to you within one business day. In the meantime, feel free to browse our services or give us a call at <a href="tel:+19092383188" style="color:var(--primary);font-weight:600;">(909) 238-3188</a>.</p>
        <div style="display:flex; gap:var(--space-md); justify-content:center; flex-wrap:wrap;">
          <a href="/services" class="btn-primary">Browse Our Services</a>
          <a href="/" class="btn-secondary">Back to Homepage</a>
        </div>
      </div>
    </section>

  </main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
