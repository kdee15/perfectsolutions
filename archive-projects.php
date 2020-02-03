<?php

/*
Template Name: Project Archive
*/

get_header(); ?>

<!-- C. WORK AREA +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

    <!-- C.2. SITE MAST ------------------------------------------------------------------------------------------- -->

    <section class="page archive-projects">

      <h2 class="a-block-title">{ projects }</h2>

      <div class="container">
        <div class="row no-gutters">

          <?php

          $args=array(
            'post_type' => 'projects',
            'post_status' => 'publish',
            'orderby' => 'meta_value date',
            'order' => 'DESC',
            'posts_per_page' => 999
          );
          $my_query = null;
          $my_query = new WP_Query($args);

          if( $my_query->have_posts() ) {
            while ($my_query->have_posts()) : $my_query->the_post(); ?>

              <article class="card blog-card col-12 col-md-6">
                <a class="o-card hover-card" href="<?php the_permalink() ?>">
                  <figure class="m-card-image">
                    <img src="<?php the_field('cover_desk') ?>">
                  </figure>
                  <div class="m-card-body">
                    <h3 class="a-card-header"><?php the_title(); ?></h3>
                    <?php the_excerpt(); ?>
                  </div>

                </a>
              </article>

            <?php

            endwhile;
          }
          wp_reset_query();  // Restore global post data stomped by the_post().
          ?>

        </div>
      </div>
    </section>
    
    <!-- C.2. END ------------------------------------------------------------------------------------------------- -->
<?php get_footer(); ?>
<!-- C. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- D. JAVASCRIPT ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- D.1. FOOTER JS -->

<?php get_template_part( 'inc/footer-scripts' ); ?>

<!-- D. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->