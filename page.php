<?php

get_header(); ?>
<div class="wrap column">
  <div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">
      <?php while( have_posts() ) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
      <?php endwhile; ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>