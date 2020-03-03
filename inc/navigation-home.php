<div class="toggle-content a-burger-menu horizontal" id="burger-nav">

  <!-- BURGER MENU ---------------------------------- -->

    <?php if ( has_nav_menu( 'primary' ) ) : ?>
      <nav id="site-navigation" class="main-navigation navbar-nav container" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'kdee' ); ?>">
        <?php
        wp_nav_menu( array(
          'theme_location' => 'primary',
          'menu_class'     => 'primary-menu horizontal',
        ) );
        ?>
      </nav>
    <?php endif; ?>

  <?php get_template_part( 'inc/social-media' ); ?>

</div>