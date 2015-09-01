<?php
/**
 * @package unityrepair
 * @since 1.0
 */

add_action( 'after_setup_theme', 'unityrepair_setup' );

  function unityrepair_setup() {
    
    add_theme_support( 'title-tag' );

    add_theme_support( 'html5', array( 'search-form' ) );
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 145, 145, true );
   
    // news thumbnail
    add_image_size( 'news_thumb', 300, 230, true );

    remove_action( 'wp_head', 'wp_generator' );
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    
    load_theme_textdomain( 'unityrepair', get_template_directory() . '/lang' );

    add_theme_support( 'custom-header', array(
      'width'         => 399.953,
      'height'        => 100,
      'default-image' => get_template_directory_uri() . '/images/logo.png',
      'uploads'       => true,
      'header-text'   => false,
      )
    );

    add_filter( 'show_admin_bar', '__return_false' );
    
    register_nav_menus( array(
      'main-navigation'   => __( 'Main Navigation', 'unityrepair' ),
    ) );
    
  }

add_action( 'wp_enqueue_scripts', 'unityrepair_scripts' );

  function unityrepair_scripts() {
    // javascripts
    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/lib/jquery/jquery.min.js', array(), '2.1.4', false );
    wp_enqueue_script( 'uikit', get_template_directory_uri() . '/lib/uikit/js/uikit.min.js', array(), '2.20.3', true );
    wp_enqueue_script( 'uikit-slider', get_template_directory_uri() . '/lib/uikit/js/components/slider.min.js', array(), '2.20.3', true );
    wp_enqueue_script( 'uikit-slideshow', get_template_directory_uri() . '/lib/uikit/js/components/slideshow.min.js', array(), '2.20.3', true );
    wp_enqueue_script( 'uikit-lightbox', get_template_directory_uri() . '/lib/uikit/js/components/lightbox.min.js', array(), '2.20.3', true );
    wp_enqueue_script( 'uikit-search', get_template_directory_uri() . '/lib/uikit/js/components/search.min.js', array(), '2.20.3', true );
    wp_enqueue_script( 'fitvidsjs', get_template_directory_uri() . '/lib/fitvids/jquery.fitvids.js', array(), '1.1.0', true );
    wp_enqueue_script( 'theme', get_template_directory_uri() . '/js/scripts.min.js', array(), '6.7', true );
    // stylesheet
    wp_enqueue_style( 'uikit', get_template_directory_uri() . '/lib/uikit/css/uikit.almost-flat.min.css', false, '2.20.3' );
    wp_enqueue_style( 'uikit-slider', get_template_directory_uri() . '/lib/uikit/css/components/slider.almost-flat.min.css', false, '2.20.3' );
    wp_enqueue_style( 'uikit-slideshow', get_template_directory_uri() . '/lib/uikit/css/components/slideshow.almost-flat.min.css', false, '2.20.3' );
    wp_enqueue_style( 'uikit-slidenav', get_template_directory_uri() . '/lib/uikit/css/components/slidenav.almost-flat.min.css', false, '2.20.3' );
    wp_enqueue_style( 'uikit-search', get_template_directory_uri() . '/lib/uikit/css/components/search.almost-flat.min.css', false, '2.20.3' );
    wp_enqueue_style( 'style', get_stylesheet_uri(), false, '8.0' );
  }

add_action( 'after_setup_theme', 'unityrepair_files' );
  if (!function_exists( 'unityrepair_files' )) {
    function unityrepair_files() {
      require( get_template_directory() . '/inc/theme-navigation.php' );
    }
  }
  
  
add_action( 'widgets_init', 'unityrepair_widgets_init' );
  if (!function_exists('unityrepair_widgets_init')) {
    function unityrepair_widgets_init() {

      register_sidebar( array(
        'name'            => __( 'Page Sidebar', 'unityrepair' ),
        'id'              => 'sidebar-1',
        'description'     => __( 'Appears when using the optional page', 'unityrepair' ),
        'before_widget'   => '<aside>',
        'after_widget'    => '</aside>',
        'before_title'    => '<h3 class="widget-title">',
        'after_title'     => '</h3>',
      ) );

      register_sidebar( array(
        'name'            => __( 'Frontpage: Two Column Left', 'unityrepair' ),
        'id'              => 'sidebar-2',
        'description'     => __( 'Appears when using the optional Front Page', 'unityrepair' ),
        'before_widget'   => '<aside class="col-6-12">',
        'after_widget'    => '</aside>',
        'before_title'    => '<h3 class="widget-title">',
        'after_title'     => '</h3>',
      ) );

      register_sidebar( array(
        'name'            => __( 'Frontpage: One Column Right', 'unityrepair' ), 
        'id'              => 'sidebar-3',
        'description'     => __( 'Appears when using the optional Front Page', 'unityrepair' ),
        'before_widget'   => '<aside class="col-12-12">',
        'after_widget'    => '</aside>',
        'before_title'    => '<h3 class="widget-title">',
        'after_title'     => '</h3>',
      ) );

      }
    }