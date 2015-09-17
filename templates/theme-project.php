
<h3 class="project-title"><?php _e( 'Projects', 'unityrepair' ); ?></h3>
<div id="front" class="flexslider">
  <ul class="slides">
    <?php
      $args = array(
        'post_type'       => 'project',
        'post_per_page'   => 10,
        'order'           => 'ASC',
        'orderby'         => 'title'
      );

      $loop = new WP_Query( $args );
      
    while( $loop->have_posts() ) : $loop->the_post(); ?>
      <li data-thumb="<?php echo get_post_meta(get_the_ID(),'_unityrepair_project_image',true); ?>" data-uk-tooltip="{pos:'top'}" title="<?php the_title(); ?>">
        <a href="<?php echo get_permalink(); ?>">
          <img src="<?php echo get_post_meta(get_the_ID(),'_unityrepair_project_image',true); ?>" />
        </a>
      </li>
    <?php endwhile; ?>
  </ul>
</div>