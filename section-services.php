<section class="o-section services-section" id="section-services">
  <div class="section-header">
    <h2 class="animated a-siv-fiu">WHAT WE OFFER</h2>
  </div>
  <div class="container-fluid">
    <div class="row no-gutters">
      <div class="service-carousel owl-carousel">

        <?php

        $args=array(
          'post_type' => 'services',
          'post_status' => 'publish',
          'orderby' => 'meta_value date',
          'order' => 'DESC',
          'posts_per_page' => 100
        );
        $my_query = null;
        $my_query = new WP_Query($args);

        if( $my_query->have_posts() ) {
          while ($my_query->have_posts()) : $my_query->the_post(); ?>

            <article class="service-card">
              <div class="o-card icon-card">
                <figure class="m-card-image">
                  <?php the_post_thumbnail() ?>
                </figure>
                <div class="m-card-body">
                  <h4 class="a-title"><?php the_title(); ?></h4>
                  <?php the_content(); ?>
                </div>

              </div>
            </article>

          <?php

          endwhile;
        }
        wp_reset_query();  // Restore global post data stomped by the_post().
        ?>

      </div>
    </div>
  </div>
</section>