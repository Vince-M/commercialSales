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
          Email: <a href="mailto:contractsales@northwest.ca">contractsales@northwest.ca</a><br>
          77 Main Street, Winnipeg MB  R3C 2R1
        </div>
      </div>
      <nav class="footer__menu" aria-label="Footer">
        <ul class="footer__menu--navigation">
          <li><a href="about.html">About</a></li>
          <li>Products
            <ul class="footer__menu--sub-menu">
              <li><a href="home_furnishings.html">Home Furnishings & Appliances</a></li>
              <li><a href="#">Office Supplies & Furniture</a></li>
              <li><a href="#">Cleaning & Janitorial Supplies</a></li>
              <li><a href="#">School Supplies & Sporting Equipment</a></li>
              <li><a href="#">Housewares</a></li>
              <li><a href="#">Lumber & Building Supplies</a></li>
              <li><a href="#">Bulk Food Orders</li>
              <li><a href="#">Transportation Vehicles</a></li>
              <li><a href="#">Community Events & Fireworks</a></li>
            </ul>
          </li>
          <button class="footer__item--btn"><a class="button btn btn--dark" href="contact.html">Contact</a></button>
          <!-- <li><a href="contact.html">Contact</a></li> -->
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