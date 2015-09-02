<?php ?>
<h2>Latest Project</h2>

<?php

  $args = array(
    'post_type' => 'project',
    'posts_per_page' => 10
    );
  $loop = new WP_Query( $args );

  while ( $loop->have_posts() ) : $loop->the_post();

?>
<div class="column">
  <div class="col-3-12">
    <?php
      if ( has_post_thumbnail() ) {
        the_post_thumbnail();
      }
      else {
        echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/project.png" />';
      }
    ?>
  </div>
  <div class="col-9-12">
    <h3><?php the_title(); ?></h3>
    <?php the_excerpt(); ?>
  </div>
</div>


<?php endwhile; ?>