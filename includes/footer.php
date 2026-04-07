  <!-- Footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        <!-- Company Info -->
        <div class="footer-col">
          <h3>Rocca Tile &amp; Granite LLC</h3>
          <p>
            13641 Central Ave<br>
            Chino, CA 91710<br><br>
            <a href="tel:+19092383188"><i data-lucide="phone" style="width:14px;height:14px;display:inline;vertical-align:middle;"></i> (909) 238-3188</a><br>
            <a href="mailto:roccatile@yahoo.com"><i data-lucide="mail" style="width:14px;height:14px;display:inline;vertical-align:middle;"></i> roccatile@yahoo.com</a><br><br>
            <strong>Hours:</strong><br>
            Monday&ndash;Friday: 8 AM &ndash; 5 PM<br>
            Saturday&ndash;Sunday: Closed
          </p>
          <div class="footer-social">
            <a href="https://share.google/7weB9N4CYKJEtkVD4" target="_blank" rel="noopener" aria-label="Google Business Profile"><i data-lucide="map-pin" style="width:18px;height:18px;"></i></a>
            <a href="https://www.yelp.com/biz/rocca-tile-and-granite-chino" target="_blank" rel="noopener" aria-label="Yelp"><i data-lucide="star" style="width:18px;height:18px;"></i></a>
            <a href="https://nextdoor.com/pages/rocca-tile-granite/" target="_blank" rel="noopener" aria-label="Nextdoor"><i data-lucide="users" style="width:18px;height:18px;"></i></a>
            <a href="https://www.homeadvisor.com/rated.RoccaTileandGranite.27548734.html" target="_blank" rel="noopener" aria-label="HomeAdvisor"><i data-lucide="home" style="width:18px;height:18px;"></i></a>
          </div>
        </div>

        <!-- Quick Links -->
        <div class="footer-col">
          <h3>Quick Links</h3>
          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/services">Services</a></li>
            <li><a href="/service-area">Service Area</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
          </ul>
        </div>

        <!-- Services -->
        <div class="footer-col">
          <h3>Our Services</h3>
          <ul>
            <li><a href="/services/kitchen-remodeling">Kitchen Remodeling</a></li>
            <li><a href="/services/bathroom-remodeling">Bathroom Remodeling</a></li>
            <li><a href="/services/tile-installation">Tile Installation</a></li>
            <li><a href="/services/granite-countertops">Granite Countertops</a></li>
            <li><a href="/services/cabinet-services">Cabinet Services</a></li>
            <li><a href="/services/flooring-installation">Flooring Installation</a></li>
          </ul>
        </div>

        <!-- License & Trust -->
        <div class="footer-col">
          <h3>Licensed &amp; Insured</h3>
          <p>
            CSLB License #927459<br>
            Active &amp; in good standing<br><br>
            Owner: Filiberto Reyes<br>
            Serving the Inland Empire<br>
            since 2004
          </p>
        </div>
      </div>

      <!-- Entity Block -->
      <div class="entity-block">
        <p>Rocca Tile &amp; Granite LLC is a licensed and insured tile, granite, and remodeling company based in Chino, California, serving the Inland Empire and surrounding communities. Rocca Tile &amp; Granite LLC specializes in kitchen remodeling, bathroom remodeling, tile installation, granite countertops, cabinet services, and flooring installation. Contact: (909) 238-3188 | roccatile@yahoo.com | 13641 Central Ave, Chino, CA 91710. CSLB License #927459.</p>
      </div>

      <!-- Bottom Bar -->
      <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> Rocca Tile &amp; Granite LLC. All rights reserved.</p>
        <p><a href="https://www.pageoneinsights.com" rel="dofollow" target="_blank">Web Design &amp; Hosting by Page One Insights, LLC</a></p>
      </div>
    </div>
  </footer>

  <!-- Back to Top -->
  <button class="back-to-top" aria-label="Back to top">
    <i data-lucide="chevron-up" style="width:24px;height:24px;"></i>
  </button>

  <!-- Lucide Icons — MUST load before animations.js -->
  <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>
  <script>lucide.createIcons();</script>

  <!-- Site Scripts -->
  <script src="/assets/js/animations.js" defer></script>
  <script src="/assets/js/effects.js" defer></script>

  <?php if (!empty($useSwiper)): ?>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
  <?php endif; ?>

  <?php if (!empty($useTilt)): ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.1/vanilla-tilt.min.js" defer></script>
  <?php endif; ?>

  <?php if (!empty($useTyped)): ?>
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.1.0/dist/typed.umd.js" defer></script>
  <?php endif; ?>

</body>
</html>
