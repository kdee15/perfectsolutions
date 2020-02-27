<header class="o-header o-home-header promo-header">
  <?php get_template_part( 'inc/social-media' ); ?>
  <div class="o-hamburger m-hamburger--spin burger-nav" name="burger-nav">
    <div class="m-hamburger-box">
      <div class="m-hamburger-inner"></div>
    </div>
  </div>
</header>

<?php get_template_part( 'inc/navigation-home' ); ?>

<section class="o-section front-section promo-hero">

  <?php

  $args=array(
    'post_type' => 'promos',
    'post_status' => 'publish',
    'orderby' => 'meta_value date',
    'order' => 'DESC',
    'posts_per_page' => 1
  );
  $my_query = null;
  $my_query = new WP_Query($args);

  if( $my_query->have_posts() ) {
    while ($my_query->have_posts()) : $my_query->the_post(); ?>

      <div class="container promo-container no-gutters">
        <div class="row">

          <div class="col-12 col-md-6 m-features">
            <figure class="m-promo-emblem">
              <?php the_post_thumbnail() ?>
            </figure>
          </div>
          <div class="col-12 col-md-6 m-text">
            <?php the_content(); ?>
          </div>

        </div>
      </div>

      <aside class="m-promo-background" style="background-image:url('<?php the_field('background_image') ?>');"></aside>
    <?php

    endwhile;
  }
  wp_reset_query();  // Restore global post data stomped by the_post().
  ?>

</section>