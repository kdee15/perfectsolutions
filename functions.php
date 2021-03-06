<?php

    @ini_set( 'upload_max_size' , '64M' );
    @ini_set( 'upload_max_filesize' , '64M' );
    @ini_set( 'post_max_size', '64M');
    @ini_set( 'memory_limit', '3000M' );
    @ini_set( 'file_uploads', 'on' );
    @ini_set( 'max_execution_time', '300' );


    // Add RSS links to <head> section
    automatic_feed_links();

    // A.1.0.5. Wordpress Menu

    register_nav_menus( array(  
    'primary' => __( 'Primary Navigation', 'kdee' )
    ) );

    // A.1.0.5. Wordpress Menu

    // A.1.0.6. Wordpress Stuff
    
    add_theme_support( 'post-thumbnails' );

// A.3 TEMPLATE CUSTOMISATION +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// A.1.0.1. REGISTER SIDEBAR

function social_sidebar_widgets_init() {

  register_sidebar( array(
    'name' => 'social sidebar widget',
    'id' => 'social_sidebar',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="rounded">',
    'after_title' => '</h2>',
  ) );
}

add_action( 'widgets_init', 'social_sidebar_widgets_init' );

// A.1.0.1. END

// A.1.0.1. REGISTER SIDEBAR

function page_loader_widgets_init() {

  register_sidebar( array(
    'name' => 'page loader widget',
    'id' => 'page_loader',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '',
    'after_title' => '',
  ) );
}

add_action( 'widgets_init', 'page_loader_widgets_init' );

// A.1.0.1. END

// A.1.0.2. Twitter Widget

function arphabet_widgets_init() {

  register_sidebar( array(
    'name' => 'insta widget',
    'id' => 'instagram',
    'before_widget' => '<div class="o-insta-feed">',
    'after_widget' => '</div>',
  ) );
}

add_action( 'widgets_init', 'arphabet_widgets_init' );

// A.1.0.2. Twitter Widget

// A.3 END ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// A.4 END ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// A.4.1. COMPANIES ---------------------------------------

function companies() {
  $labels = array(
    'Title'              => _x( 'Companies', 'post type general name' ),
    'singular_name'      => _x( 'Companies', 'post type singular name' ),
    'add_new'            => __( 'Add New', 'Company' ),
    'add_new_item'       => __( 'Add New Company' ),
    'edit_item'          => __( 'Edit Companies' ),
    'new_item'           => __( 'New Company' ),
    'all_items'          => __( 'All Companies' ),
    'view_item'          => __( 'View Company' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Companies'
  );

  $args = array(
    'labels'         => $labels,
    'description'   => 'A list of Services',
    'public'        => true,
    'menu_position' => 1,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'taxonomies', 'categories', 'media', 'content' ),
    'has_archive'   => true,

  );

  register_post_type( 'companies', $args );
}

add_action( 'init', 'companies' );

// A.4.1. End ---------------------------------------------

// A.4.2. PROMOS ------------------------------------------

function promos() {
  $labels = array(
    'Title'              => _x( 'Promos', 'post type general name' ),
    'singular_name'      => _x( 'Promos', 'post type singular name' ),
    'add_new'            => __( 'Add New', 'Promo' ),
    'add_new_item'       => __( 'Add New Promo' ),
    'edit_item'          => __( 'Edit Promos' ),
    'new_item'           => __( 'New Promo' ),
    'all_items'          => __( 'All Promos' ),
    'view_item'          => __( 'View Promo' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Promos'
  );

  $args = array(
    'labels'         => $labels,
    'description'   => 'A list of Promos',
    'public'        => true,
    'menu_position' => 2,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'taxonomies', 'categories', 'media', 'content' ),
    'has_archive'   => true,

  );

  register_post_type( 'promos', $args );
}

add_action( 'init', 'promos' );

// A.4.2. End ---------------------------------------------

// A.4.3. SERVICES ----------------------------------------

function services() {
  $labels = array(
    'Title'              => _x( 'Services', 'post type general name' ),
    'singular_name'      => _x( 'Services', 'post type singular name' ),
    'add_new'            => __( 'Add New', 'Service' ),
    'add_new_item'       => __( 'Add New Service' ),
    'edit_item'          => __( 'Edit Services' ),
    'new_item'           => __( 'New Service' ),
    'all_items'          => __( 'All Services' ),
    'view_item'          => __( 'View Service' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Services'
  );

  $args = array(
    'labels'         => $labels,
    'description'   => 'A list of Services',
    'public'        => true,
    'menu_position' => 6,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'taxonomies', 'categories', 'media', 'content' ),
    'has_archive'   => true,

  );

  register_post_type( 'services', $args );
}

add_action( 'init', 'services' );

// A.4.3. End ---------------------------------------------

// A.4.4. MILESTONES --------------------------------------

function milestones() {
  $labels = array(
    'Title'              => _x( 'Milestone', 'post type general name' ),
    'singular_name'      => _x( 'Milestones', 'post type singular name' ),
    'add_new'            => __( 'Add New', 'Milestone' ),
    'add_new_item'       => __( 'Add New Milestone' ),
    'edit_item'          => __( 'Edit Milestones' ),
    'new_item'           => __( 'New Milestone' ),
    'all_items'          => __( 'All Milestones' ),
    'view_item'          => __( 'View Milestone' ),
    'parent_item_colon'  => '',
    'show_in_rest'       => true,
    'menu_name'          => 'Milestones'
  );

  $args = array(
    'labels'         => $labels,
    'description'   => 'A list of Milestones',
    'public'        => true,
    'menu_position' => 3,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'taxonomies', 'categories', 'media', 'content' ),
    'has_archive'   => true,

  );

  register_post_type( 'milestones', $args );
}

add_action( 'init', 'milestones' );

// A.4.4. End ---------------------------------------------

// A.4.5. MILESTONES --------------------------------------

function testimonials() {
  $labels = array(
    'Title'              => _x( 'Testimonial', 'post type general name' ),
    'singular_name'      => _x( 'Testimonials', 'post type singular name' ),
    'add_new'            => __( 'Add New', 'Testimonial' ),
    'add_new_item'       => __( 'Add New Testimonial' ),
    'edit_item'          => __( 'Edit Testimonials' ),
    'new_item'           => __( 'New Testimonial' ),
    'all_items'          => __( 'All Testimonials' ),
    'view_item'          => __( 'View Testimonial' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Testimonials'
  );

  $args = array(
    'labels'         => $labels,
    'description'   => 'A list of Testimonials',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'taxonomies', 'categories', 'media', 'content' ),
    'has_archive'   => true,

  );

  register_post_type( 'testimonials', $args );
}

add_action( 'init', 'testimonials' );

// A.4.5. End ---------------------------------------------

// A.4.5. MILESTONES --------------------------------------

function featuredPromo() {
  $labels = array(
    'Title'              => _x( 'Featured Promo', 'post type general name' ),
    'singular_name'      => _x( 'Featured Promos', 'post type singular name' ),
    'add_new'            => __( 'Add New', 'Featured Promo' ),
    'add_new_item'       => __( 'Add New Featured Promo' ),
    'edit_item'          => __( 'Edit Featured Promos' ),
    'new_item'           => __( 'New Featured Promo' ),
    'all_items'          => __( 'All Featured Promos' ),
    'view_item'          => __( 'View Featured Promo' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Featured Promo'
  );

  $args = array(
    'labels'         => $labels,
    'description'   => 'A list of Featured Promos',
    'public'        => true,
    'menu_position' => 6,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'taxonomies', 'categories', 'media', 'content' ),
    'has_archive'   => true,

  );

  register_post_type( 'featuredPromo', $args );
}

add_action( 'init', 'featuredPromo' );

// A.4.5. End ---------------------------------------------

// A.4.6. VALUES ------------------------------------------

function values() {
  $labels = array(
    'Title'              => _x( 'Values', 'post type general name' ),
    'singular_name'      => _x( 'Value', 'post type singular name' ),
    'add_new'            => __( 'Add New', 'Value' ),
    'add_new_item'       => __( 'Add New Value' ),
    'edit_item'          => __( 'Edit Values' ),
    'new_item'           => __( 'New Value' ),
    'all_items'          => __( 'All Values' ),
    'view_item'          => __( 'View Value' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Values'
  );

  $args = array(
    'labels'         => $labels,
    'description'   => 'A list of Values',
    'public'        => true,
    'menu_position' => 2,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'taxonomies', 'categories', 'media', 'content' ),
    'has_archive'   => true,

  );

  register_post_type( 'values', $args );
}

add_action( 'init', 'values' );

// A.4.6. End ---------------------------------------------

// A.4.7. VALUES ------------------------------------------

function subsidiaries() {
  $labels = array(
    'Title'              => _x( 'Subsidiaries', 'post type general name' ),
    'singular_name'      => _x( 'Subsidiary', 'post type singular name' ),
    'add_new'            => __( 'Add New', 'Subsidiary' ),
    'add_new_item'       => __( 'Add New Subsidiary' ),
    'edit_item'          => __( 'Edit Subsidiaries' ),
    'new_item'           => __( 'New Subsidiary' ),
    'all_items'          => __( 'All Subsidiaries' ),
    'view_item'          => __( 'View Subsidiary' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Subsidiaries'
  );

  $args = array(
    'labels'         => $labels,
    'description'   => 'A list of Subsidiaries',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'taxonomies', 'categories', 'media', 'content' ),
    'has_archive'   => true,
  );

  register_post_type( 'subsidiaries', $args );
}

add_action( 'init', 'subsidiaries' );

// A.4.7. End ---------------------------------------------

// A.4.7. VALUES ------------------------------------------

function homepage() {
  $labels = array(
    'Title'              => _x( 'Homepage Blocks', 'post type general name' ),
    'singular_name'      => _x( 'Homepage Block', 'post type singular name' ),
    'add_new'            => __( 'Add New', 'Homepage Block' ),
    'add_new_item'       => __( 'Add New Homepage Block' ),
    'edit_item'          => __( 'Edit Homepage Blocks' ),
    'new_item'           => __( 'New Homepage Block' ),
    'all_items'          => __( 'All Homepage Blocks' ),
    'view_item'          => __( 'View Homepage Block' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Homepage Blocks'
  );

  $args = array(
    'labels'         => $labels,
    'description'   => 'A list of Homepage Blocks',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'taxonomies', 'categories', 'media', 'content' ),
    'has_archive'   => true,
  );

  register_post_type( 'homepage', $args );
}

add_action( 'init', 'homepage' );

// A.4.7. End ---------------------------------------------

// A.4 END ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// A.5 END ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// A.X BREADCRUMBS ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

//// BREADCRUMB START ////
function the_breadcrumb() {

  $showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
  $delimiter = '&raquo;'; // delimiter between crumbs
  $home = 'Home'; // text for the 'Home' link
  $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
  $before = '<span class="current">'; // tag before the current crumb
  $after = '</span>'; // tag after the current crumb

  global $post;
  $homeLink = get_bloginfo('url');

  if (is_home() || is_front_page()) {

    if ($showOnHome == 1) echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a></div>';

  } else {

    echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';

    if ( is_category() ) {
      $thisCat = get_category(get_query_var('cat'), false);
      if ($thisCat->parent != 0) echo get_category_parents($thisCat->parent, TRUE, ' ' . $delimiter . ' ');
      echo $before . 'Archive by category "' . single_cat_title('', false) . '"' . $after;

    } elseif ( is_search() ) {
      echo $before . 'Search results for "' . get_search_query() . '"' . $after;

    } elseif ( is_day() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('d') . $after;

    } elseif ( is_month() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('F') . $after;

    } elseif ( is_year() ) {
      echo $before . get_the_time('Y') . $after;

    } elseif ( is_single() && !is_attachment() ) {
      if ( get_post_type() != 'post' ) {
        $post_type = get_post_type_object(get_post_type());
        $slug = $post_type->rewrite;
        echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>';
        if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
      } else {
        $cat = get_the_category(); $cat = $cat[0];
        $cats = get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
        if ($showCurrent == 0) $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
        echo $cats;
        if ($showCurrent == 1) echo $before . get_the_title() . $after;
      }

    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
      $post_type = get_post_type_object(get_post_type());
      echo $before . $post_type->labels->singular_name . $after;

    } elseif ( is_attachment() ) {
      $parent = get_post($post->post_parent);
      $cat = get_the_category($parent->ID); $cat = $cat[0];
      echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
      echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a>';
      if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;

    } elseif ( is_page() && !$post->post_parent ) {
      if ($showCurrent == 1) echo $before . get_the_title() . $after;

    } elseif ( is_page() && $post->post_parent ) {
      $parent_id  = $post->post_parent;
      $breadcrumbs = array();
      while ($parent_id) {
        $page = get_page($parent_id);
        $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
        $parent_id  = $page->post_parent;
      }
      $breadcrumbs = array_reverse($breadcrumbs);
      for ($i = 0; $i < count($breadcrumbs); $i++) {
        echo $breadcrumbs[$i];
        if ($i != count($breadcrumbs)-1) echo ' ' . $delimiter . ' ';
      }
      if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;

    } elseif ( is_tag() ) {
      echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;

    } elseif ( is_author() ) {
      global $author;
      $userdata = get_userdata($author);
      echo $before . 'Articles posted by ' . $userdata->display_name . $after;

    } elseif ( is_404() ) {
      echo $before . 'Error 404' . $after;
    }

    if ( get_query_var('paged') ) {
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
      echo __('Page') . ' ' . get_query_var('paged');
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
    }

    echo '</div>';

  }
} // end the_breadcrumb()

//// BREADCRUMB END ////

// A.X END ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

    // Load jQuery
    if ( !is_admin() ) {
       wp_deregister_script('jquery');
       wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"), false);
       wp_enqueue_script('jquery');
    }

?>