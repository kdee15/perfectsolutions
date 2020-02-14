<section class="o-section header-section">
  <div class="m-title-block">
    <div class="container">
      <h2 class="a-block-title">Current Promotion</h2>
    </div>
  </div>
</section>


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

    <section class="o-section section-promos o-skew">
      <div class="container p-container">
        <div class="row">
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
        </div>
      </div>
    </section>

  <?php

  endwhile;
}
wp_reset_query();  // Restore global post data stomped by the_post().
?>