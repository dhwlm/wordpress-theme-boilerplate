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
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW"> -->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

  <header id="masthead" class="site-header" role="banner">
    <div class="container">
      <div class="logo">
        <?php if ( function_exists( 'the_custom_logo' ) ) {
          the_custom_logo();
        }else { ?>
          <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/layout/"></a>
        <?php } ?>
      </div>
    </div>
  </header><!-- #masthead -->

	<div class="site-content-contain">
		<div id="content" class="site-content">
