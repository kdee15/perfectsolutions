<section class="o-block projects-block" id="projects">

  <h2 class="a-block-title">What we do ...</h2>

  <div class="container">
    <div class="row no-gutters">

      <?php

      $args=array(
        'post_type' => 'services',
        'post_status' => 'publish',
        'orderby' => 'meta_value date',
        'order' => 'DESC',
        'posts_per_page' => 3
      );
      $my_query = null;
      $my_query = new WP_Query($args);

      if( $my_query->have_posts() ) {
        while ($my_query->have_posts()) : $my_query->the_post(); ?>

          <article class="card blog-card col-12 col-md-4">
            <div class="o-card icon-card">
              <figure class="m-card-image">
                <?php the_post_thumbnail() ?>
              </figure>
              <div class="m-card-body">
                <h3 class="a-card-header"><?php the_title(); ?></h3>
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
</section>