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

<div class="top" id="top"></div>

<!-- C. WORK AREA +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<?php get_template_part( 'inc/preloader' ); ?>

<!-- C.2. SECTIONS -------------------------------- -->

<?php get_template_part( 'section-feature-promo' ); ?>
<?php //get_template_part( 'section-front' ); ?>

<!-- C.2. END ------------------------------------- -->

<main class="p-main">

  <!-- C.3. SECTIONS -------------------------------- -->

  <?php get_template_part( 'section-about' ); ?>
  <?php get_template_part( 'section-values' ); ?>
  <?php get_template_part( 'section-timeline' ); ?>
  <?php get_template_part( 'section-brands' ); ?>
  <?php get_template_part( 'section-services' ); ?>
<!--  --><?php //get_template_part( 'section-promos' ); ?>
  <?php get_template_part( 'section-contact' ); ?>

  <!-- C.3. END ------------------------------------- -->

  <!-- C.4. FOOTER  --------------------------------- -->

  <?php get_footer(); ?>

  <!-- C.4. END ------------------------------------- -->

</main>

<!-- C. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- D. JAVASCRIPT ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- D.1. FOOTER JS -->

<?php get_template_part( 'inc/footer-scripts' ); ?>

<div class="a-mail-us">
  <span>GET IN TOUCH</span>
</div>

<!-- D. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->