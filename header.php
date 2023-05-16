<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<meta charset="<?php bloginfo('charset'); ?>">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon.ico">

  <?php wp_head(); ?>

    <!-- GOOGLE ANALYTICS SECTION START
    =================================================== -->

    <!-- ============================================== -->


</head>

<body <?php body_class(); ?>>
      <?php wp_body_open();?>

    <!-- HEADER / NAVIGATION SECTION START
    =================================================== -->
    <header class="header masthead">
      <div class="overlay has-fade"></div>
      
      <div class="container header__section">
        <nav class="nav" role="navigation" aria-label="Main Navigation">
          <div class="header__logo site-branding">
            <a href="<?php echo site_url(); ?>">
              <img src="<?php echo get_theme_file_uri() ?>/img/CommercialSalesLogo_244x54_rev.svg" alt="Commercial Sales logo" width="225">
            </a>
          </div> <!-- header__logo -->
            
            <a id="btnHamburger" class="nav__toggle header__menu hide-for-desktop" aria-hidden="true">
                <span></span>
                <span></span>
                <span></span>
            </a> <!-- nav__toggle header__menu hide-for-desktop -->

            <?php
              wp_nav_menu( array(
                'theme_location'        =>  'header-menu',
                'container_aria_label'  =>  '',
                'container'             =>  false,
                'container_aria_label'  =>  '',
                'menu_class'            =>  'menu nav__list mobileMenu hide-for-mobile',
                'menu_id'               =>  'menu',
                'echo'                  =>  true,
                'fallback_cb'           =>  'wp_page_menu',
                'before'                =>  '',
                'after'                 =>  '',
                'depth'                 =>  2
              ))
            ?>
            
              <!-- <ul class="menu nav__list mobileMenu hide-for-mobile" role="list">
                <li class="nav__item" role="presentation"><a role="menuitem" href="about.html">About</a></li>
                <li class="nav__item has-sub-menu"><a tabindex="0">Products <span class="chevron-down">&#8964;</span></a>
                  <ul class="sub-menu">
                    <li class="subitem"><a role="menuitem" href="home_furnishings.html">Home Furnishings & Appliances</a></li>
                    <li class="subitem"><a role="menuitem" href="#">Office Supplies & Furniture</a></li>
                    <li class="subitem"><a role="menuitem" href="#">Cleaning & Janitorial Supplies</a></li>
                    <li class="subitem"><a role="menuitem" href="#">School Supplies & Sporting Equipment</a></li>
                    <li class="subitem"><a role="menuitem" href="#">Housewares</a></li>
                    <li class="subitem"><a role="menuitem" href="#">Lumber & Building Supplies</a></li>
                    <li class="subitem"><a role="menuitem" href="#">Bulk Food Orders</a></li>
                    <li class="subitem"><a role="menuitem" href="#">Transportation Vehicles</a></li>
                    <li class="subitem"><a role="menuitem" href="#">Community Events & Fireworks</a></li>
                  </ul>
                </li> 

                <button class="nav__item--btn"><a class="button btn btn--dark" href="contact.html" role="button">Contact</a></button>
              </ul> -->

        </nav> <!-- nav -->
      </div> <!-- container header__section -->

    </header> <!-- HEADER / NAVIGATION SECTION END -->
    <!-- ============================================== -->

    <main>