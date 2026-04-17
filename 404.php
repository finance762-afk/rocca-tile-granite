<?php
$pageTitle       = "Page Not Found | Rocca Tile & Granite LLC";
$pageDescription = "The page you're looking for doesn't exist. Browse our services or contact Rocca Tile & Granite LLC at (909) 238-3188.";
$canonicalUrl    = "https://rocca-tile.com/404";
$ogImage         = "https://i.imgur.com/oHC2eR1.png";
$currentPage     = "404";
$heroImage       = "";
$schemaMarkup    = '';
$useSwiper       = false;
$useTilt         = false;
$useTyped        = false;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

  <main id="main-content">

    <section style="min-height:60vh; display:flex; align-items:center; text-align:center;">
      <div class="container">
        <h1 style="margin-bottom:var(--space-md);">This Page Doesn't Exist — But Your Dream Kitchen Can</h1>
        <p class="prose-centered" style="font-size:1.1rem; color:var(--text-light); margin-bottom:var(--space-xl);">The page you're looking for has been moved or no longer exists. Let's get you back on track — browse our services, head home, or give us a call.</p>
        <div style="display:flex; gap:var(--space-md); justify-content:center; flex-wrap:wrap; margin-bottom:var(--space-xl);">
          <a href="/" class="btn-primary">Back to Homepage</a>
          <a href="/services" class="btn-secondary">View Our Services</a>
        </div>
        <a href="tel:+19092383188" style="font-size:1.2rem; font-weight:700; color:var(--primary); display:inline-flex; align-items:center; gap:var(--space-sm);">
          <i data-lucide="phone" style="width:20px;height:20px;"></i> (909) 238-3188
        </a>
      </div>
    </section>

  </main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
