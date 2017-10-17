<?php
/**
 * The main template file
 *
 */

get_header(); ?>

<div class="wrap">
  <section class="section-bg">
    <div class="container">
      <?php get_template_part( 'template-parts/home/home', 'banner' ); ?>
    </div>
  </section>

  <section>
    <div class="container">
      <?php get_template_part( 'template-parts/home/home', 'category' ); ?>
    </div>
  </section>

  <section class="section-bg">
    <div class="container">
      <div class="row mt-30 mb-30">
        <div class="col-md-10 mb-20 ">
          <h3 class="fa-heading no-bord">Lorem ipsum dolor sit amet, consectetur adipisicing elit, </h3>
          <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-md-2 ">
          <a href="#" class="btn btn-block ">start here</a>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <?php get_template_part( 'template-parts/home/home', 'popular' ); ?>
    </div>
  </section>

</div><!-- .wrap -->

<?php get_footer();
