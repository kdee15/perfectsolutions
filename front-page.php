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

<?php get_template_part( 'inc/navigation-home' ); ?>
<?php get_template_part( 'section-front' ); ?>

<!-- C. WORK AREA +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<div class="a-mail-us">
  <span>GET IN TOUCH</span>
</div>

  <main class="p-main">

    <!-- C.2. SECTIONS -------------------------------- -->

    <?php get_template_part( 'section-feature-promo' ); ?>
    <?php get_template_part( 'section-values' ); ?>
    <?php get_template_part( 'section-testimonials' ); ?>
    <?php get_template_part( 'section-timeline' ); ?>
    <?php get_template_part( 'section-brands' ); ?>
    <?php get_template_part( 'section-contact' ); ?>

    <!-- C.2. END ------------------------------------- -->

    <!-- C.3. FOOTER  --------------------------------- -->

    <?php get_footer(); ?>

    <!-- C.3. END ------------------------------------- -->

  </main>

<!-- C. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- D. JAVASCRIPT ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- D.1. FOOTER JS -->

<?php get_template_part( 'inc/footer-scripts' ); ?>

<!-- D. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->