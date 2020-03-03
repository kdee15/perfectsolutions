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
            <div class="m-promo-media <?php the_field('show') ?>">
              <audio class="m-promo-player" controls>
                <source src="<?php the_field('player') ?>" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>
              <span>Can't download the track? <a href="<?php the_field('download') ?>" class="a-text-link" target="_blank">click here ...</a></span>
            </div>
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