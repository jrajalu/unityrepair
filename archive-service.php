<?php
/**
 * @package unityrepair
 * @since 1.0
 */
get_header(); ?>
<div class="wrap column pad-top pad-bottom">
  <div id="primary" class="content-area col-8-12">
    <div id="content" class="site-content pad-right" role="main">
      <h1><?php _e( 'Services', 'unityrepair' ); ?></h1>
      <!-- slider -->
      <div class="column">
        <?php while( have_posts() ) : the_post(); ?>
        <div class="service-holder">
          <div class="service-image">
            <img src="<?php echo get_post_meta(get_the_ID(),'_unityrepair_service_image',true); ?>">
          </div>
          <div class="service-image-title">
            <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
    <div class="col-4-12 pad-left">
    <ul class="widget-page-list">
      <?php 
        $args = array(
          'post_type' => 'service',
          'title_li'  => '<h3> '. __( 'Services' ) .' </h3>'
        );
        wp_list_pages( $args ); 
      ?>
    </ul>
  </div>
</div>
<?php get_footer(); ?>