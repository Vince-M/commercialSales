<?php

function commercialsales_files() {
  wp_enqueue_script('commercialsales_main', get_theme_file_uri('/dist/script.js'), NULL, '1.0', true);
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Georama:wght@400;700;900&family=Lato:ital,wght@0,400;0,700;1,400;1,700&display=swap');
  wp_enqueue_style('commercialsales_main_styles',get_theme_file_uri('main.css'));
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
      )
    );
}

add_action( 'init', 'commercial_theme_menus' );


remove_filter( 'render_block', 'wp_render_layout_support_flag', 10, 2 );
remove_filter( 'render_block', 'gutenberg_render_layout_support_flag', 10, 2 );



function defer_parsing_of_js( $url ) {
  if ( is_user_logged_in() ) return $url; //don't break WP Admin
  if ( FALSE === strpos( $url, '.js' ) ) return $url;
  if ( strpos( $url, 'jquery.js' ) ) return $url;
  return str_replace( ' src', ' defer src', $url );
}
add_filter( 'script_loader_tag', 'defer_parsing_of_js', 10 );
