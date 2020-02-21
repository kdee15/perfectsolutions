<section class="o-block o-timeline-block">
  <div class="m-block-header m-timeline-header ald-timeline">
    <p class="a-block-header ald-strikethrough-header">MILESTONES</p>
    <p class="a-block-description">here</p>
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
                <span class="timeline-date"><?php the_title(); ?></span>
              </div>
            </aside>
            <aside class="m-timeline-bar">
              <div class="a-timeline-bullet toggle-both tl-<?php the_id(); ?> on" name="tl-<?php the_id(); ?>"></div>
              <div class="a-timeline-track"></div>
            </aside>
            <aside class="m-timeline-record reveal-on-show">
              <div class="m-card timeline-card toggle-content on" id="tl-<?php the_id(); ?>">
                <div class="m-image-wrap">
                  <div class="m-card-image" style="background-image:url('http://placehold.it/550x200?=TEXT');">
                  </div>
                </div>
                <div class="m-card-body">
                  <span class="a-timeline-tag new">NEW</span>
                  <ul class="m-square-bullets">
                    <li class="a-list-item">
                      <span class="a-item-content"><?php the_title(); ?></span>
                      <span class="a-item-content date"><?php the_title(); ?></span>
                    </li>
                  </ul>

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

  <div class="row m-cta-wrapper">
    <div class="a-timeline-bullet"></div>
    <span class="a-cta-text">link</span>
  </div>

</section>