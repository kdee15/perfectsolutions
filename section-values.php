<section class="o-section values-section" id="section-values">

  <div class="section-header">
    <h2 class="animated a-siv-fiu">VALUES</h2>
  </div>

  <div class="container">
    <div class="row">

      <?php

      $args=array(
        'post_type' => 'values',
        'post_status' => 'publish',
        'orderby' => 'meta_value date',
        'order' => 'DESC',
        'posts_per_page' => 4
      );
      $my_query = null;
      $my_query = new WP_Query($args);

      if( $my_query->have_posts() ) {
        while ($my_query->have_posts()) : $my_query->the_post(); ?>

          <div class="col-xs-12 col-md-6 col-lg-3 o-values-card">
            <div data-tilt="" class="o-card">
              <div class="m-card-image">
                <?php the_post_thumbnail('thumbnail') ?>
              </div>
              <div class="m-card-body">
                <h3 class="a-title"><?php the_title(); ?></h3>
                <div class="a-copy">
                  <?php the_content(); ?>
                </div>
                <a class="m-card-icon" href="<?php the_field('about_us_link'); ?>">
                  <svg version="1.1" class="a-icon-more-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                       y="0px" viewBox="0 0 57 57" style="enable-background:new 0 0 57 57;" xml:space="preserve">
                  <path id="icon-path" class="st0" d="M28.5,0C12.8,0,0,12.8,0,28.5S12.8,57,28.5,57S57,44.2,57,28.5S44.2,0,28.5,0z M35.1,42
                    l-1.7-2.4c0,0,7.1-7.1,10.2-10.3c-10.7-0.1-34.6,0-34.6,0v-2.4c0,0,23.9-0.1,34.6,0C40.5,24.1,33.4,17,33.4,17l1.7-2L48,28.1
                    L35.1,42z"/>
                </svg>
                </a>
              </div>
            </div>
          </div>

        <?php

        endwhile;
      }
      wp_reset_query();  // Restore global post data stomped by the_post().
      ?>
    </div>
  </div>
</section>