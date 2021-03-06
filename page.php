<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage Spartan
 * @since Spartan 1.0
 */

get_header();

?>

<!-- C. WORK AREA +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!-- C.2. SECTIONS -------------------------------- -->

<?php while ( have_posts() ) : the_post(); ?>

<!-- C.1. PAGE HEADER --------------------------------- -->

<section class="o-section header-section">
  <div class="m-title-block">
    <div class="container">
      <h2 class="a-block-title"><?php the_title(); ?></h2>
    </div>
  </div>
</section>


<!-- C.1. END ----------------------------------------- -->

<section class="o-section section-content">
  <div class="container p-container">
    <div class="row">
      <div class="col-12 offset-md-6 col-md-6">
        <?php the_content(); ?>
      </div>
      <div class="o-block-sidebar">
        <?php the_field('features') ?>
      </div>
    </div>
  </div>
</section>

<?php endwhile; // end of the loop. ?>

<!-- C.2. END ------------------------------------- -->

<!-- C.3. FOOTER  ----------------------------------- -->

<?php get_footer(); ?>

<!-- C.3. END --------------------------------------- -->

<!-- C. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- D. JAVASCRIPT ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- D.1. FOOTER JS -->

<?php get_template_part( 'inc/footer-scripts' ); ?>

<!-- D. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->