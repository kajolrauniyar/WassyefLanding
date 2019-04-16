<?php
/**
 * WITCHES functions and definitions
 *
 * @package WITCHES
 * 
 * @since WITCHES 1.0
 *
 */

if ( ! defined( 'ABSPATH' ) ) { 
 	exit; // disable direct access 
 }

/*
 * Load theme constants
 */
require trailingslashit( get_template_directory() ) . 'core/theme-constants.php';

/**
 * Theme setup functions
 */
require_once ( WIT_CORE.'/theme-setup.php' );

/**
 * Register widget area and nav.
 */
require_once ( WIT_CORE.'/theme-register.php' );

/**
 * Enqueue scripts and styles.
 */
require_once ( WIT_CORE.'/enqueue.php' );

/**
 * Theme functions
 */
require_once ( WIT_FUNCTION.'/theme-functions.php' );

/**
 * Custom functions that act independently of the theme templates.
 */
require_once ( WIT_FUNCTION.'/extras.php' );

/**
 * Theme Hooks
 */
require_once ( WIT_CORE.'/theme-hooks.php' );

/**
 * Aqua Resizer
 */
require_once ( WIT_CORE.'/lib/aq_resizer.php' );

/**
 * Customizer additions.
 */
require_once( WIT_CORE.'/lib/bs4navwalker.php');
/*creating post type start*/
function create_posttype1() {
  register_post_type( 'witches_event',
    array(
      'labels' => array(
        'name' => __( 'Events' ),
        'singular_name' => __( 'Events' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'event'),
      'show_in_rest' =>'true',
      'supports'  => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments','revision','time','date' )
    )
  );
}

add_action( 'init', 'create_posttype1' );
/*creating post type end*/
/*acf option start*/
if( function_exists('acf_add_options_page') ) {
  
  acf_add_options_page(array(
    'page_title'  => 'Theme General Settings',
    'menu_title'  => 'Theme Settings',
    'menu_slug'   => 'theme-general-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));
  
  acf_add_options_sub_page(array(
    'page_title'  => 'Theme Header Settings',
    'menu_title'  => 'Header',
    'parent_slug' => 'theme-general-settings',
  ));
  
  acf_add_options_sub_page(array(
    'page_title'  => 'Theme Footer Settings',
    'menu_title'  => 'Footer',
    'parent_slug' => 'theme-general-settings',
  ));
  
}
/*acf option end*/
/*widget start*/

/*widget end*/
function witches_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Sidebar', 'witches' ),
    'id'            => 'sidebar-1',
    'description'   => __( 'Add widgets here to appear in your sidebar.', 'witches' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="sidebar-title">',
    'after_title'   => '</h2>',
  ) );
  register_sidebar( array(
    'name'          => __( 'Social', 'witches' ),
    'id'            => 'social-feed',
    'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'witches' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title insta-title">',
    'after_title'   => '</h2>',
  ) );
}

add_action( 'widgets_init', 'witches_widgets_init' );
// let's add our custom class to the actual image size 

if ( !( function_exists('witche_imgsize') ) ) :
  // Use of phpthumb -- Resize your image appearing on a site
  function witche_imgsize($w, $h, $src, $fr=1) {
    if ($w != 0 && $h == 0):
      return get_template_directory_uri() ."/core/lib/imgthumb/phpThumb.php?src=" . $src . "&amp;w=" . $w . "&amp;q=100";

    elseif ($w == 0 && $h != 0):
      return get_template_directory_uri() ."/core/lib/imgthumb/phpThumb.php?src=" . $src . "&amp;h=" . $h . "&amp;q=100";

    else:
      if($fr==0):
        return get_template_directory_uri() ."/core/lib/imgthumb/phpThumb.php?src=" . $src . "&amp;w=" . $w . "&amp;h=" . $h . "&amp;q=100&bg=ffffff&amp;far=1";
      else:
        return get_template_directory_uri() ."/core/lib/imgthumb/phpThumb.php?src=" . $src . "&amp;w=" . $w . "&amp;h=" . $h . "&amp;q=100&amp;zc=c";
      endif;
    endif;
  }
endif;
if ( !( function_exists('witche_imgsize_custom') ) ) :
  // Use of phpthumb -- Resize your image appearing on a site
  function witche_imgsize_custom($w, $h, $src, $fr=1, $zc="") {
    if ($w != 0 && $h == 0):
      return get_template_directory_uri() ."/core/lib/imgthumb/phpThumb.php?src=" . $src . "&amp;w=" . $w . "&amp;q=100";

    elseif ($w == 0 && $h != 0):
      return get_template_directory_uri() ."/core/lib/imgthumb/phpThumb.php?src=" . $src . "&amp;h=" . $h . "&amp;q=100";

    else:
      if($fr==0):
        return get_template_directory_uri() ."/core/lib/imgthumb/phpThumb.php?src=" . $src . "&amp;w=" . $w . "&amp;h=" . $h . "&amp;q=100&bg=ffffff&amp;far=1";
      elseif($zc == 0):
        return get_template_directory_uri() ."/core/lib/imgthumb/phpThumb.php?src=" . $src . "&amp;w=" . $w . "&amp;h=" . $h . "&amp;q=100&amp;";
      else:
        return get_template_directory_uri() ."/core/lib/imgthumb/phpThumb.php?src=" . $src . "&amp;w=" . $w . "&amp;h=" . $h . "&amp;q=100&amp;zc=c";
      endif;
    endif;
  }
endif;
//excertion limit text
function wp_example_excerpt_length( $length ) {
    return 10;
}
add_filter( 'excerpt_length', 'wp_example_excerpt_length');