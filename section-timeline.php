<section class="o-section o-timeline-section" id="section-milestones">
  <div class="section-header animated fadeInUp">
    <h2>MILESTONES</h2>
  </div>

  <div class="container o-timeline-wrapper">

    <?php

    $args=array(
      'post_type' => 'milestones',
      'post_status' => 'publish',
      'orderby' => 'meta_value date',
      'order' => 'DESC',
      'posts_per_page' => 999
    );
    $my_query = null;
    $my_query = new WP_Query($args);

    if( $my_query->have_posts() ) {
      while ($my_query->have_posts()) : $my_query->the_post(); ?>

        <div class="row o-timeline-item-wrapper">

          <article class="m-timeline-item">
            <aside class="m-timeline-date">
              <div class="m-card timeline-date-card">
                <span class="timeline-date"><?php the_time( 'Y' ); ?></span>
              </div>
            </aside>
            <aside class="m-timeline-bar">
              <div class="a-timeline-bullet toggle-both tl-<?php the_id(); ?>" name="tl-<?php the_id(); ?>"></div>
              <div class="a-timeline-track"></div>
            </aside>
            <aside class="m-timeline-record reveal-on-show">
              <div class="m-card timeline-card toggle-content" id="tl-<?php the_id(); ?>">
                <div class="m-image-wrap">
                  <div class="m-card-image" style="background-image:url('<?php echo get_the_post_thumbnail_url($post->ID, 'single-post-thumbnail'); ?>');">
                  </div>
                </div>
                <div class="m-card-body">
                  <h3 class="a-title"><?php the_title(); ?></h3>
                  <?php the_content(); ?>
                </div>
              </div>
            </aside>
          </article>

        </div>

      <?php

      endwhile;
    }
    wp_reset_query();  // Restore global post data stomped by the_post().
    ?>

  </div>

  <div class="row m-cta-wrapper a-view-more show">
    <div class="a-timeline-bullet"></div>
    <span class="a-cta-text">VIEW MORE</span>
  </div>

  <div class="row m-cta-wrapper a-view-less">
    <div class="a-timeline-bullet"></div>
    <span class="a-cta-text">VIEW LESS</span>
  </div>

</section>