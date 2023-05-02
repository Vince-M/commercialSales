</main>

<!-- FOOTER
=================================================== -->
  <footer class="footer">
    <div class="container footer__nav">
      <div class="footer__branding">
        <div class="footer__logo">
        <a href="<?php echo site_url(); ?>">
              <img src="<?php echo get_theme_file_uri() ?>/img/CommercialSalesLogo_244x54.svg" alt="Commercial Sales logo" width="225">
            </a>        </div>
        <div class="footer__contact">
          <a href="tel:204-934-1471">Phone: (204) 934.1471</a><br>
          <a href="fax:204-934-1685">Fax Order: (204) 934.1685</a><br>
          Email: <a href="mailto:commercialsales@northwest.ca">commercialsales@northwest.ca</a><br>
          77 Main Street, Winnipeg MB  R3C 2R1
        </div>
      </div>
      <nav class="footer__menu" aria-label="Footer">
        <ul class="footer__menu--navigation">
          <li><a href="<?php echo site_url( 'about' ); ?>">About</a></li>
          <li>Products
            <ul class="footer__menu--sub-menu">
              <li><a href="<?php echo site_url( '/home-furnishings-appliances' ); ?>">Home Furnishings & Appliances</a></li>
              <li><a href="<?php echo site_url( '/office-supplies-furniture' ); ?>">Office Supplies & Furniture</a></li>
              <li><a href="<?php echo site_url( '/cleaning-janitorial-supplies' ); ?>">Cleaning & Janitorial Supplies</a></li>
              <li><a href="<?php echo site_url( '/school-supplies-sporting-equipment' ); ?>">School Supplies & Sporting Equipment</a></li>
              <li><a href="<?php echo site_url( '//housewares' ); ?>">Housewares</a></li>
              <li><a href="<?php echo site_url( '//lumber-building-supplies' ); ?>">Lumber & Building Supplies</a></li>
              <li><a href="<?php echo site_url( '/bulk-food-orders' ); ?>">Bulk Food Orders</li>
              <li><a href="<?php echo site_url( '/transportation-vehicles' ); ?>">Transportation Vehicles</a></li>
              <li><a href="<?php echo site_url( '/community-events-fireworks' ); ?>">Community Events & Fireworks</a></li>
            </ul>
          </li>
          <button class="footer__item--btn button btn btn--dark"><a class="btn__contact" href="<?php echo site_url( 'contact' ); ?>">Contact</a></button>
        </ul>

      

      </nav>
    </div> <!-- container -->
    <div class="container">
      <div class="site__info">
        <div>
          <p class="copyright">&copy; <?php echo date( 'Y' ); ?> The North West Company</p>
        </div>
        <div class="legal">
        <a href="https://www.northwest.ca/legal-privacy" target="_blank">Legal / Privacy</a> | <a href="https://www.northwest.ca/terms-and-conditions" target="_blank">Terms & Conditions</a>
        </div>
      </div>
    </div>
  </footer>
<!-- ============================================== -->

    <?php wp_footer(); ?>
  </body>
</html>