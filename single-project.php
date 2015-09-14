<?php
/**
 * @package unityrepair
 * @since 1.0
 */
get_header(); ?>
<div class="wrap column pad-top pad-bottom">
  <div id="primary" class="content-area col-8-12">
    <div id="content" class="site-content pad-right" role="main">
      <h1><?php the_title(); ?></h1>
      <!-- slider -->
      <div id="slider" class="flexslider">
        <ul class="slides">
          <?php while( have_posts() ) : the_post(); ?>
            <?php unityrepair_project_slide( '_unityrepair_project_image_list', 'full' ); ?>
          <?php endwhile; ?>
        </ul>
      </div>
      <!-- carousel -->
      <div id="carousel" class="flexslider">
        <ul class="slides">
          <?php while( have_posts() ) : the_post(); ?>
            <?php unityrepair_project_carousel( '_unityrepair_project_image_list', 'full' ); ?>
          <?php endwhile; ?>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-4-12 pad-top pad-left">
    <?php 
      $args = array(
        'post_type' => 'project',
        'title_li'  => __('Project')
      );
    wp_list_pages( $args ); 
    ?> 
  </div>
</div>
<?php get_footer(); ?>