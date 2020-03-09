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
            <span class="m-preview about-more toggle-both on"><?php the_field('about_us_intro') ?></span>
            <span class="m-full about-more toggle-both"><?php the_field('about_us_body') ?></span>

          </article>
        </div>
        <span name="about-more" id="about-more" class="a-text-link toggle-both">
          <span class="a-more">MORE</span>
          <span class="a-less">LESS</span>
        </span>
      </div>

    <?php

    endwhile;
  }
  wp_reset_query();  // Restore global post data stomped by the_post().
  ?>

</section>