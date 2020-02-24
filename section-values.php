<section class="o-section values-section">

  <div class="section-header reveal-on-show fadeInUp">
    <h2>VALUES</h2>
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

          <div class="col-xs-12 col-md-3 o-values-card">
            <div data-tilt="" class="o-card stacked">
              <div class="m-card-image">
                <?php the_post_thumbnail('thumbnail') ?>
              </div>
              <div class="m-card-body">
                <h3 class="a-title"><?php the_title(); ?></h3>
                <div class="a-copy">
                  <?php the_content(); ?>
                </div>
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