  <!-- Navbar -->
  <nav class="navbar" aria-label="Main navigation">
    <div class="container">
      <a href="/" class="navbar-logo">
        <img src="https://i.imgur.com/oHC2eR1.png" alt="Rocca Tile &amp; Granite LLC" width="280" height="235">
      </a>

      <ul class="nav-links">
        <li><a href="/" <?php if ($currentPage === 'home') echo 'aria-current="page"'; ?>>Home</a></li>
        <li class="has-dropdown">
          <a href="/services" <?php if ($currentPage === 'services') echo 'aria-current="page"'; ?>>Services</a>
          <ul class="dropdown" role="menu" style="display:none">
            <li><a href="/services/kitchen-remodeling" role="menuitem">Kitchen Remodeling</a></li>
            <li><a href="/services/bathroom-remodeling" role="menuitem">Bathroom Remodeling</a></li>
            <li><a href="/services/tile-installation" role="menuitem">Tile Installation</a></li>
            <li><a href="/services/granite-countertops" role="menuitem">Granite Countertops</a></li>
            <li><a href="/services/cabinet-services" role="menuitem">Cabinet Services</a></li>
            <li><a href="/services/flooring-installation" role="menuitem">Flooring Installation</a></li>
          </ul>
        </li>
        <li><a href="/service-area" <?php if ($currentPage === 'service-area') echo 'aria-current="page"'; ?>>Service Area</a></li>
        <li><a href="/about" <?php if ($currentPage === 'about') echo 'aria-current="page"'; ?>>About</a></li>
        <li><a href="/contact" <?php if ($currentPage === 'contact') echo 'aria-current="page"'; ?>>Contact</a></li>
      </ul>

      <a href="tel:+19092383188" class="nav-phone desktop-only">
        <i data-lucide="phone" style="width:18px;height:18px;"></i>
        (909) 238-3188
      </a>

      <button class="hamburger" aria-label="Toggle menu" aria-expanded="false">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </nav>

  <!-- Mobile Menu -->
  <div class="mobile-menu">
    <a href="/" <?php if ($currentPage === 'home') echo 'aria-current="page"'; ?>>Home</a>
    <a href="/services" <?php if ($currentPage === 'services') echo 'aria-current="page"'; ?>>Services</a>
    <div class="mobile-dropdown">
      <a href="/services/kitchen-remodeling">Kitchen Remodeling</a>
      <a href="/services/bathroom-remodeling">Bathroom Remodeling</a>
      <a href="/services/tile-installation">Tile Installation</a>
      <a href="/services/granite-countertops">Granite Countertops</a>
      <a href="/services/cabinet-services">Cabinet Services</a>
      <a href="/services/flooring-installation">Flooring Installation</a>
    </div>
    <a href="/service-area" <?php if ($currentPage === 'service-area') echo 'aria-current="page"'; ?>>Service Area</a>
    <a href="/about" <?php if ($currentPage === 'about') echo 'aria-current="page"'; ?>>About</a>
    <a href="/contact" <?php if ($currentPage === 'contact') echo 'aria-current="page"'; ?>>Contact</a>
    <a href="tel:+19092383188" class="mobile-phone">
      <i data-lucide="phone" style="width:18px;height:18px;"></i>
      (909) 238-3188
    </a>
  </div>
