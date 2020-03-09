<section class="o-section contact-section" id="section-contact">
  <div class="section-header">
    <h2>CONTACT DETAILS</h2>
  </div>
  <div class="container">
    <div class="row">
      <aside class="col-12 col-md-3 o-details-aside">
        <?php

        $args=array(
          'post_type' => 'homepage',
          'post_status' => 'publish',
          'orderby' => 'meta_value date',
          'order' => 'DESC',
          'posts_per_page' => 1
        );
        $my_query = null;
        $my_query = new WP_Query($args);

        if( $my_query->have_posts() ) {
          while ($my_query->have_posts()) : $my_query->the_post(); ?>

            <?php the_field('contact_us_body') ?>

          <?php endwhile;
        }
        wp_reset_query();  // Restore global post data stomped by the_post().
        ?>

      </aside>
      <aside class="col-12 col-md-5 o-map-aside">
        <figure class="o-map-container">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3307.206440526268!2d18.492028414935977!3d-34.01291153398356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1dcc43a02cecda5b%3A0x88a135dc0e0b898e!2sPerfect%20Solutions!5e0!3m2!1sen!2sza!4v1582449563171!5m2!1sen!2sza" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </figure>
      </aside>
      <aside class="col-12 col-md-4 o-form-aside">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("instagram") ) : ?>
        <?php endif;?>
      </aside>
    </div>
  </div>
</section>