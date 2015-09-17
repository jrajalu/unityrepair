<?php
/**
 * @package unityrepair
 * @since 1.0
 */

add_action('admin_enqueue_scripts', 'chrome_fix');
function chrome_fix() {
  if ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Chrome' ) !== false )
    wp_add_inline_style( 'wp-admin', '#adminmenu { transform: translateZ(0); }' );
}

add_action( 'login_head', 'add_favicon' );
add_action( 'admin_head', 'add_favicon' );
add_action( 'wp_head', 'add_favicon' );

  function add_favicon() {
    $favicon = get_stylesheet_directory_uri() . '/favicon.ico';
    echo '<link rel="shortcut icon" href="' . $favicon . '" />';
  }

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
      'width'         => 319.953,
      'height'        => 90,
      'default-image' => get_template_directory_uri() . '/images/logo.svg',
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
    wp_enqueue_script( 'uikit-slideshow-fx', get_template_directory_uri() . '/lib/uikit/js/components/slideshow-fx.min.js', array(), '2.20.3', true );
    wp_enqueue_script( 'uikit-lightbox', get_template_directory_uri() . '/lib/uikit/js/components/lightbox.min.js', array(), '2.20.3', true );
    wp_enqueue_script( 'uikit-search', get_template_directory_uri() . '/lib/uikit/js/components/search.min.js', array(), '2.20.3', true );
    wp_enqueue_script( 'uikit-tooltip', get_template_directory_uri() . '/lib/uikit/js/components/tooltip.min.js', array(), '2.20.3', true );
    wp_enqueue_script( 'fitvidsjs', get_template_directory_uri() . '/lib/fitvids/jquery.fitvids.js', array(), '1.1.0', true );
    wp_enqueue_script( 'flexslier', get_template_directory_uri() . '/lib/flexslider/jquery.flexslider-min.js', array(), '2.5.0', true );
    wp_enqueue_script( 'theme', get_template_directory_uri() . '/js/scripts.min.js', array(), '6.7', true );
    // stylesheet
    wp_enqueue_style( 'uikit', get_template_directory_uri() . '/lib/uikit/css/uikit.almost-flat.min.css', false, '2.20.3' );
    wp_enqueue_style( 'uikit-slider', get_template_directory_uri() . '/lib/uikit/css/components/slider.almost-flat.min.css', false, '2.20.3' );
    wp_enqueue_style( 'uikit-slideshow', get_template_directory_uri() . '/lib/uikit/css/components/slideshow.almost-flat.min.css', false, '2.20.3' );
    wp_enqueue_style( 'uikit-slidenav', get_template_directory_uri() . '/lib/uikit/css/components/slidenav.almost-flat.min.css', false, '2.20.3' );
    wp_enqueue_style( 'uikit-search', get_template_directory_uri() . '/lib/uikit/css/components/search.almost-flat.min.css', false, '2.20.3' );
    wp_enqueue_style( 'uikit-tooltip', get_template_directory_uri() . '/lib/uikit/css/components/tooltip.almost-flat.min.css', false, '2.20.3' );
    wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/lib/flexslider/flexslider.css', false, '2.5.0' );
    wp_enqueue_style( 'style', get_stylesheet_uri(), false, '8.0' );
  }

add_action( 'after_setup_theme', 'unityrepair_files' );

  function unityrepair_files() {
    
    require( get_template_directory() . '/inc/theme-cpt.php' );
    require( get_template_directory() . '/inc/theme-metabox.php' );
    require( get_template_directory() . '/inc/theme-navigation.php' );
    
    require( get_template_directory() . '/inc/theme-update.php' );
      new ThemeUpdateChecker(
        'unityrepair-master',
        'https://raw.githubusercontent.com/jrajalu/unityrepair/master/version.json'
      );
      
    require( get_template_directory() . '/inc/theme-login.php' );
    
    require( get_template_directory() . '/inc/widget-follow-us.php' );
     
  }

// WIDGETS
  
add_action( 'widgets_init', 'unityrepair_widgets_init' );

  function unityrepair_widgets_init() {

    register_sidebar( array(
      'name'            => __( 'Page Sidebar', 'unityrepair' ),
      'id'              => 'sidebar-1',
      'description'     => __( 'Appears when using the optional page', 'unityrepair' ),
      'before_widget'   => '<aside class="arrow-box">',
      'after_widget'    => '</aside>',
      'before_title'    => '<h3 class="widget-title">',
      'after_title'     => '</h3>',
    ) );

    register_sidebar( array(
      'name'            => __( 'Frontpage: Two Column Left', 'unityrepair' ),
      'id'              => 'sidebar-2',
      'description'     => __( 'Appears when using the optional Front Page', 'unityrepair' ),
      'before_widget'   => '<aside class="col-6-12 widget front-widget">',
      'after_widget'    => '</aside>',
      'before_title'    => '<h3 class="widget-title">',
      'after_title'     => '</h3>',
    ) );

    register_sidebar( array(
      'name'            => __( 'Frontpage: One Column Right', 'unityrepair' ), 
      'id'              => 'sidebar-3',
      'description'     => __( 'Appears when using the optional Front Page', 'unityrepair' ),
      'before_widget'   => '<aside class="arrow-box">',
      'after_widget'    => '</aside>',
      'before_title'    => '<h3 class="widget-title">',
      'after_title'     => '</h3>',
    ) );

  }

// SEARCH

add_filter( 'get_search_form', 'unityrepair_search_form' );

  function unityrepair_search_form( $form ) {
    $form = '<form role="search" method="get" class="uk-form" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
    <input type="search" class="search-field" placeholder="' . esc_attr__( 'Search...', 'unityrepair' ) . '" value="' . get_search_query() . '" name="s" id="s" />
    <button class="search-submit uk-button" id="searchsubmit">'. esc_attr__( 'Search' ) .'</button>
    </form>';

    return $form;
  }
  
// PROJECT FILE LIST
  
function unityrepair_project_slide( $file_list_meta_key, $img_size = 'full' ) {

  $files = get_post_meta( get_the_ID(), $file_list_meta_key, 1 );

  foreach ( (array) $files as $attachment_id => $attachment_url ) {
    ?>
      <li data-thumb="<?php echo get_post_meta(get_the_ID(),'_unityrepair_project_image',true); ?>">
        <?php echo wp_get_attachment_image( $attachment_id, $img_size ); ?>
        <p class="flex-caption"><?php echo get_the_title( $attachment_id ); ?></p>
      </li> 
    <?php
  }

}

function unityrepair_project_carousel( $file_list_meta_key, $img_size = 'full' ) {

  $files = get_post_meta( get_the_ID(), $file_list_meta_key, 1 );

  foreach ( (array) $files as $attachment_id => $attachment_url ) {
    ?>
      <li data-thumb="<?php echo get_post_meta(get_the_ID(),'_unityrepair_project_image',true); ?>">
        <?php echo wp_get_attachment_image( $attachment_id, $img_size ); ?>
      </li> 
    <?php
  }
}

// SERVICE FILE LIST
  
function unityrepair_service_slide( $file_list_meta_key, $img_size = 'full' ) {

  $files = get_post_meta( get_the_ID(), $file_list_meta_key, 1 );

  foreach ( (array) $files as $attachment_id => $attachment_url ) {
    ?>
      <li data-thumb="<?php echo get_post_meta(get_the_ID(),'_unityrepair_service_image',true); ?>">
        <?php echo wp_get_attachment_image( $attachment_id, $img_size ); ?>
        <p class="flex-caption"><?php echo get_the_title( $attachment_id ); ?></p>
      </li> 
    <?php
  }

}

function unityrepair_service_carousel( $file_list_meta_key, $img_size = 'full' ) {

  $files = get_post_meta( get_the_ID(), $file_list_meta_key, 1 );

  foreach ( (array) $files as $attachment_id => $attachment_url ) {
    ?>
      <li data-thumb="<?php echo get_post_meta(get_the_ID(),'_unityrepair_service_image',true); ?>">
        <?php echo wp_get_attachment_image( $attachment_id, $img_size ); ?>
      </li> 
    <?php
  }
  
}

// LIGHTBOX IMAGES

add_filter('the_content', 'unityrepair_content_lightbox');

  function unityrepair_content_lightbox($content) {
    global $post;
    $pattern ="/<a(.*?)href=('|\")(.*?).(bmp|gif|jpeg|jpg|png)('|\")(.*?)>/i";
    $replacement = '<a$1href=$2$3.$4$5 data-uk-lightbox title="'.$post->post_title.'"$6>';
    $content = preg_replace($pattern, $replacement, $content);
    return $content;
  }