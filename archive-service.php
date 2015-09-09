<?php
/**
 * @package unityrepair
 * @since 1.0
 */
get_header(); ?>
<div class="wrap column pad-top pad-bottom">
  <div id="primary" class="content-area col-12-12">
    <div id="content" class="site-content pad-right" role="main">
      <h1><?php _e( 'Projects', 'unityrepair' ); ?></h1>
      <!-- slider -->
      <div id="slider" class="flexslider">
        <ul class="slides">
          <?php while( have_posts() ) : the_post(); ?>
            <li data-thumb="<?php echo get_post_meta(get_the_ID(),'_unityrepair_project_image',true); ?>">
              <img src="<?php echo get_post_meta(get_the_ID(),'_unityrepair_project_image',true); ?>" />
              <p class="flex-caption"><?php the_title(); ?></p>
            </li>
          <?php endwhile; ?>
        </ul>
      </div>
      <!-- carousel -->
      <div id="carousel" class="flexslider">
        <ul class="slides">
          <?php while( have_posts() ) : the_post(); ?>
            <li data-thumb="<?php echo get_post_meta(get_the_ID(),'_unityrepair_project_image',true); ?>">
              <img src="<?php echo get_post_meta(get_the_ID(),'_unityrepair_project_image',true); ?>" />
            </li>
          <?php endwhile; ?>
        </ul>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>