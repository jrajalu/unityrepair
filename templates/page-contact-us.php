<?php
/**
 * @package unityrepair
 * @since 1.0
 * 
 * Template Name: Page with Maps
 */
get_header(); ?>
<div class="wrap column pad-top pad-bottom">
  <div id="primary" class="content-area col-6-12">
    <div id="content" class="site-content pad-right" role="main">
      <?php while( have_posts() ) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
      <?php endwhile; ?>
    </div>
  </div>
  <div class="col-6-12 pad-left">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.3662408352625!2d101.67911938880673!3d2.9956538441661613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdb50a335d8fd1%3A0xb7866788dd88c6c3!2sJln+Equine+1E%2C+Taman+Equine%2C+43300+Seri+Kembangan%2C+Selangor%2C+Malaysia!5e0!3m2!1sen!2s!4v1441951949019" width="420" height="500" frameborder="0" style="width:100%;border:0" allowfullscreen></iframe>
  </div>
</div>
<?php get_footer(); ?>