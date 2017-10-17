<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

  <header id="masthead" class="site-header" role="banner">
    <div class="container">
      <div class="logo">
        <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/content/forbes-logo-header.png"><span class="advisor">Advisor</span></a>
      </div>

      <div class="menu-wrap clearfix">
        <div id="nav-icon">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="top-menu">
          <?php wp_nav_menu( array('menu' => 'Top Menu') );?>
        </div>
      </div>
    </div>
  </header><!-- #masthead -->

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
