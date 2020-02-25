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

<?php get_template_part( 'inc/preloader' ); ?>

<!-- C.1. HEADER ---------------------------------- -->

<header class="o-header o-home-header">
  <div class="o-logo-card">
    <figure class="m-site-logo">
      <img src="<?php echo get_template_directory_uri(); ?>/dist/images/site/logo-icon.png" class="a-card-image" />
    </figure>
    <span class="a-logo-text">PERFECT SOLUTIONS</span>
  </div>
  <?php get_template_part( 'inc/social-media' ); ?>
</header>

<?php get_template_part( 'inc/navigation-home' ); ?>

<!-- C.1. END ------------------------------------- -->

<!-- C.2. SECTIONS -------------------------------- -->

<?php get_template_part( 'section-front' ); ?>

<!-- C.2. END ------------------------------------- -->

<main class="p-main">

  <!-- C.3. SECTIONS -------------------------------- -->

  <?php get_template_part( 'section-values' ); ?>
  <?php get_template_part( 'section-timeline' ); ?>
  <?php get_template_part( 'section-brands' ); ?>
  <?php get_template_part( 'section-services' ); ?>
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