<?php
// include_once('inc/widgets.php');
include_once('inc/remove-junk.php');

function add_theme_scripts() {
  wp_enqueue_style( 'theme-css', get_template_directory_uri() . '/assets/css/theme.css', array('style'), '1.0', 'all');

  wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

add_theme_support( 'post-thumbnails' );

add_filter( 'wpcf7_validate_configuration', '__return_false' );
?>
