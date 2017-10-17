<?php
// include_once('inc/widgets.php');
include_once('inc/remove-junk.php');

function add_theme_scripts() {
  wp_enqueue_style( 'theme-css', get_template_directory_uri() . '/assets/css/theme.css', array('style'), '1.0', 'all');

  wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

// Navigation menu
function wpb_custom_new_menu() {
  register_nav_menu('forbes-advisor-menu',__( 'Forbes advisor' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

/**
 * Add HTML5 theme support.
 */
function findanswers_after_setup_theme() {
    add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'findanswers_after_setup_theme' );

add_theme_support( 'post-thumbnails' );

add_filter( 'wpcf7_validate_configuration', '__return_false' );
?>
