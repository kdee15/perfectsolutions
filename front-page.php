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

  <main class="p-main">

    <!-- C.2. SECTIONS -------------------------------- -->

    <?php get_template_part( 'section-about' ); ?>
    <?php get_template_part( 'section-footprint' ); ?>
    <?php get_template_part( 'section-pillars' ); ?>

    <?php get_template_part( 'section-companies' ); ?>

    <?php get_template_part( 'section-promos' ); ?>

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