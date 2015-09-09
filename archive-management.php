<?php
/**
 * @package unityrepair
 * @since 1.0
 */
get_header(); ?>
<div class="wrap column pad-top pad-bottom">
  <div id="primary" class="content-area col-8-12">
    <div id="content" class="site-content pad-right" role="main">
      <h1><?php _e( 'Key Person', 'unityrepair' ); ?></h1>
      <?php while( have_posts() ) : the_post(); ?>
      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>
      <hr>
      <?php endwhile; ?>
    </div>
  </div>
  <div class="col-4-12 pad-left">
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>