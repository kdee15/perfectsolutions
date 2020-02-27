<div class="container">
  <div class="row">

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

        <div class="col-12 col-md-4 m-features">
          <audio class="m-promo-player" controls>
            <source src="<?php the_field('player') ?>" type="audio/mpeg">
            Your browser does not support the audio element.
          </audio>
          <span>Can't download the track? <a href="<?php the_field('download') ?>" class="a-text-link" target="_blank">click here ...</a></span>
        </div>
        <div class="col-12 offset-md-2 col-md-6 m-text">
          <h3><?php the_title(); ?></h3>
          <?php the_content(); ?>
        </div>

      <?php

      endwhile;
    }
    wp_reset_query();  // Restore global post data stomped by the_post().
    ?>

  </div>
</div>

