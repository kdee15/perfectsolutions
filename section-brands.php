<section class="o-section brands-section" id="section-subsidiaries">
  <div class="section-header">
    <h2 class="animated a-siv-fiu">SUBSIDIARIES</h2>
  </div>
  <div class="container">
    <div class="row o-subsidiary-row">
      <aside class="m-aside-subs">
        <?php

        $args=array(
          'post_type' => 'subsidiaries',
          'post_status' => 'publish',
          'orderby' => 'meta_value date',
          'order' => 'DESC',
          'posts_per_page' => 5
        );
        $my_query = null;
        $my_query = new WP_Query($args);

        if( $my_query->have_posts() ) {
          while ($my_query->have_posts()) : $my_query->the_post(); ?>

            <div class="o-card o-brand-logo tog-div a-<?php the_id(); ?>" name="a-<?php the_id(); ?>">
              <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'single-post-thumbnail'); ?>" class="a-card-image" />
              <span><?php the_title(); ?></span>
            </div>

            <div class="o-card o-brand-info tog-content" id="a-<?php the_id(); ?>">
              <div class="m-card-body">
                <h4 class="a-title"><?php the_title(); ?></h4>
                <?php the_content(); ?>
              </div>
            </div>

          <?php

          endwhile;
        }
        wp_reset_query();  // Restore global post data stomped by the_post().
        ?>
      </aside>
      <figure class="m-map-africa">
        <?php get_template_part( 'inc/svg--map-africa' ); ?>
        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/site/image--shadow.png" class="a-dropshadow" />
      </figure>
    </div>
  </div>
</section>