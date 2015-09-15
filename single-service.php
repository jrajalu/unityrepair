<?php
/**
 * @package unityrepair
 * @since 1.0
 */
get_header(); ?>
<div class="wrap column pad-top pad-bottom">
  <div id="primary" class="content-area col-8-12">
    <div id="content" class="site-content pad-right" role="main">
      <?php while( have_posts() ) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
      <?php endwhile; ?>
      <!-- slider -->
      <div id="slider" class="flexslider">
        <ul class="slides">
          <?php while( have_posts() ) : the_post(); ?>
            <?php unityrepair_service_slide( '_unityrepair_service_image_list', 'full' ); ?>
          <?php endwhile; ?>
        </ul>
      </div>
      <!-- carousel -->
      <div id="carousel" class="flexslider">
        <ul class="slides">
          <?php while( have_posts() ) : the_post(); ?>
            <?php unityrepair_service_carousel( '_unityrepair_service_image_list', 'full' ); ?>
          <?php endwhile; ?>
        </ul>
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