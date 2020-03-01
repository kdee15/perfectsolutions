<section class="o-section about-section" id="about-us">
  <?php

  $args=array(
    'post_type' => 'homepage',
    'post_status' => 'publish',
    'orderby' => 'meta_value date',
    'order' => 'DESC',
    'posts_per_page' => 1
  );
  $my_query = null;
  $my_query = new WP_Query($args);

  if( $my_query->have_posts() ) {
    while ($my_query->have_posts()) : $my_query->the_post(); ?>

      <div class="section-header accent">
        <h1><?php the_field('about_us_title') ?></h1>
      </div>

      <div class="container o-content-container">
        <div class="row">
          <article class="col-12 offset-md-1 col-md-10 m-section-text">
            <?php the_field('about_us_body') ?>
          </article>
        </div>
        <a href="<?php the_field('about_us_link') ?>" class="a-text-link">MORE</a>
      </div>

    <?php

    endwhile;
  }
  wp_reset_query();  // Restore global post data stomped by the_post().
  ?>

</section>