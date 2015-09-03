<?php
/**
 * @package unityrepair
 * @since 1.0
 */
get_header(); ?>
<div class="wrap column pad-top pad-bottom">
  <div id="primary" class="content-area col-8-12">
    <div id="content" class="site-content pad-right" role="main">
      <h1><?php _e( 'Nothing Found', 'ukmtheme' ); ?></h1>
      <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'ukmtheme' ); ?></p>
      <?php get_search_form(); ?>
    </div>
  </div>
  <div class="col-4-12 pad-left">
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>