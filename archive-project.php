<?php
/**
 * @package unityrepair
 * @since 1.0
 */
get_header(); ?>
<div class="wrap column pad-top pad-bottom">
  <div id="primary" class="content-area col-8-12">
    <div id="content" class="site-content pad-right" role="main">
      <h1><?php _e( 'Projects', 'unityrepair' ); ?></h1>
      <!-- slider -->
      <div class="column">
        <?php while( have_posts() ) : the_post(); ?>
        <div class="project-holder">
          <div class="project-image">
            <img src="<?php echo get_post_meta(get_the_ID(),'_unityrepair_project_image',true); ?>">
          </div>
          <div class="project-image-title">
            <?php the_title(); ?>
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
          'post_type' => 'project',
          'title_li'  => '<h3> '. __( 'Projects' ) .' </h3>'
        );
        wp_list_pages( $args ); 
      ?>
    </ul>
  </div>
</div>
<?php get_footer(); ?>