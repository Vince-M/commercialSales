<?php

function pageBanner() {
  // php logic will live here
  ?>
    <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php the_field( 'hero_page' ); ?>)"></div>
    </div>
  <?php 
}

function commercialsales_files() {
  wp_enqueue_script('commercialsales_main', get_theme_file_uri('/dist/script.js'), NULL, '1.0', true);
  wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css2?family=Georama:wght@400;700;900&family=Lato:ital,wght@0,400;0,700;1,400;1,700&display=swa', [], null);
  wp_enqueue_style('commercialsales_main_styles',get_theme_file_uri('main.css'));
  wp_enqueue_style('commercialsales_style',get_theme_file_uri('style.css'));
}

add_action( 'wp_enqueue_scripts', 'commercialsales_files' );

// wp_deregister_script('jquery'); 
// wp_register_script('jquery', '', '', '', true);


function commercialsales_features() {
  add_theme_support( 'title-tag' );
  add_theme_support( 'wp-block-styles' );
  add_theme_support( 'align-wide' );
}

add_action( 'after_setup_theme', 'commercialsales_features' );


function commercial_theme_menus() {
  register_nav_menus(
    array(
        'header-menu'  =>  'Header Menu',
        'footer-menu'  =>  'Footer Menu'
      )
    );
}

add_action( 'init', 'commercial_theme_menus' );

/**
 * WCAG 2.0 Attributes for Dropdown Menus
 *
 * Adjustments to menu attributes tot support WCAG 2.0 recommendations
 * for flyout and dropdown menus.
 *
 * @ref https://www.w3.org/WAI/tutorials/menus/flyout/
 */
function wcag_nav_menu_link_attributes( $atts, $item, $args, $depth ) {

  // Add [aria-haspopup] and [aria-expanded] to menu items that have children
  $item_has_children = in_array( 'menu-item-has-children', $item->classes );
  if ( $item_has_children ) {
      $atts['aria-haspopup'] = "true";
      $atts['aria-expanded'] = "false";
  }

  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'wcag_nav_menu_link_attributes', 10, 4 );



remove_filter( 'render_block', 'wp_render_layout_support_flag', 10, 2 );
remove_filter( 'render_block', 'gutenberg_render_layout_support_flag', 10, 2 );



function defer_parsing_of_js( $url ) {
  if ( is_user_logged_in() ) return $url; //don't break WP Admin
  if ( FALSE === strpos( $url, '.js' ) ) return $url;
  if ( strpos( $url, 'jquery.js' ) ) return $url;
  return str_replace( ' src', ' defer src', $url );
}
add_filter( 'script_loader_tag', 'defer_parsing_of_js', 10 );
