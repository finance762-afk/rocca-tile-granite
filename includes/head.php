<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $pageTitle; ?></title>
  <meta name="description" content="<?php echo $pageDescription; ?>">
  <link rel="canonical" href="<?php echo $canonicalUrl; ?>">
  <?php if (!empty($noIndex)): ?>
  <meta name="robots" content="noindex, nofollow">
  <?php endif; ?>

  <!-- OG Tags -->
  <meta property="og:title" content="<?php echo $pageTitle; ?>">
  <meta property="og:description" content="<?php echo $pageDescription; ?>">
  <meta property="og:image" content="<?php echo $ogImage; ?>">
  <meta property="og:url" content="<?php echo $canonicalUrl; ?>">
  <meta property="og:type" content="website">

  <!-- Google Fonts — Preconnect -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,400;1,500;1,600&family=Playfair+Display:wght@400;500;600;700;800&family=Source+Sans+3:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Preload Heading Font -->
  <link rel="preload" as="font" type="font/woff2" href="https://fonts.gstatic.com/s/playfairdisplay/v37/nuFvD-vYSZviVYUb_rj3ij__anPXJzDwcbmjWBN2PKd3vXDXbtM.woff2" crossorigin>

  <!-- Preconnect / DNS Prefetch Hints -->
  <link rel="dns-prefetch" href="https://www.googletagmanager.com">
  <link rel="dns-prefetch" href="https://unpkg.com">
  <link rel="preconnect" href="https://unpkg.com" crossorigin>

  <!-- Lucide Icons CDN -->
  <!-- Icons loaded via footer.php for performance -->

  <?php if (!empty($useSwiper)): ?>
  <!-- Swiper CSS (conditional) -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <?php endif; ?>

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="/assets/css/styles.css?v=5">

  <!-- GA4 Placeholder -->
  <!-- Google tag (gtag.js) — replace UA-XXXXXXXX with actual ID -->
  <!--
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-XXXXXXXXXX');
  </script>
  -->

  <?php if ($currentPage === 'home'): ?>
  <!-- Google Search Console Verification — replace with actual code -->
  <!-- <meta name="google-site-verification" content="XXXXXXXXXX"> -->
  <?php endif; ?>

  <?php if (!empty($heroImage)): ?>
  <!-- Hero Image Preload -->
  <link rel="preload" as="image" href="<?php echo $heroImage; ?>">
  <?php endif; ?>

  <?php if (!empty($schemaMarkup)): ?>
  <!-- Schema JSON-LD -->
  <script type="application/ld+json">
  <?php echo $schemaMarkup; ?>
  </script>
  <?php endif; ?>
</head>
<body>
  <!-- Skip to Content -->
  <a href="#main-content" class="skip-link">Skip to main content</a>
