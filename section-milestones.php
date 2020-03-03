<section class="o-section o-milestones-section" id="section-milestones">
  <div class="section-header animated fadeInUp">
    <h2>MILESTONES</h2>
  </div>

  <div class="container-fluid">
    <div class="row no-gutters">

      <div class="m-milestone-tab">
        <span class="a-milestone-tab-title">2020</span>
      </div>

    <?php

    $args=array(
      'post_type' => 'milestones',
      'post_status' => 'publish',
//      'meta_key' => 'group_year',
      'orderby' => 'meta_value date',
      'order' => 'DESC',
      'posts_per_page' => 6
    );
    $my_query = null;
    $my_query = new WP_Query($args);

    if( $my_query->have_posts() ) {
      while ($my_query->have_posts()) : $my_query->the_post(); ?>

      <article class="col-12 col-sm-6 col-lg-4 card-milestone">
        <div class="o-card milestone-card">
          <div class="m-card-image" style="background-image:url('<?php echo get_the_post_thumbnail_url($post->ID, 'single-post-thumbnail'); ?>');">
          </div>
          <div class="m-card-body">
            <h3 class="a-title"><?php the_title(); ?></h3>
            <?php the_content(); ?>
            <?php the_field( 'year_group' ); ?>
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

  <div class="row m-cta-wrapper m-see-all">
    <span class="a-cta-text">See All</span>
  </div>

</section>