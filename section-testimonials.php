<section class="o-section testimonials-section">

  <div class="container">

    <h2 class="a-block-title">They say it all ...</h2>
    <div class="row no-gutters">
      <div class="testimonial-carousel owl-carousel owl-theme">

        <?php

        $args=array(
          'post_type' => 'testimonials',
          'post_status' => 'publish',
          'orderby' => 'meta_value date',
          'order' => 'DESC',
          'posts_per_page' => 999
        );
        $my_query = null;
        $my_query = new WP_Query($args);

        if( $my_query->have_posts() ) {
          while ($my_query->have_posts()) : $my_query->the_post(); ?>

            <article class="card testimonial-card">
              <div class="o-card icon-card">
                <figure class="m-card-image">
                  <svg version="1.1" class="a-icon quote-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                       viewBox="0 0 70.9 70.9" style="enable-background:new 0 0 70.9 70.9;" xml:space="preserve">
                  <path d="M53.3,32.9c-1.6-0.2-5.1-0.2-5.1-2.4c0-3,4.4-7,11.6-11.2c2.2-1.4,6.8-3.6,6.8-6.7c0-2.4-1.7-4.1-5.4-3.6
                    c-3.5,0.5-8.9,2.9-16,8.9C37.8,24,30.8,34.3,30.8,44.5c0,10.3,7,20.6,18.2,20.6c9,0,16.8-6.8,16.8-16.2
                    C65.8,41.8,60.9,33.5,53.3,32.9z"/>
                    <path d="M31,28.5c-1.3-0.7-2.7-1.1-4.3-1.3c-1.6-0.2-5.1-0.2-5.1-2.4c0-3,4.4-7,11.6-11.2c2.2-1.4,6.8-3.6,6.8-6.7
                    c0-2.4-1.7-4.1-5.4-3.6c-3.5,0.5-8.9,2.9-16,8.9C11.2,18.3,4.3,28.6,4.3,38.8c0,10.3,7,20.6,18.2,20.6c2.6,0,5.2-0.6,7.4-1.6
                    c-2.2-4-3.4-8.7-3.4-13.2C26.5,38.8,28.3,33.3,31,28.5z"/>
                  </svg>
                </figure>
                <div class="m-card-body">
                  <h3 class="a-card-header"><?php the_content(); ?></h3>
                  <p class="a-card-text"><?php the_title(); ?></p>
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