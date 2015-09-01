<?php
/**
 * @package unityrepair
 * @since 1.0
 */
get_header(); ?>

<div class="wrap">
  <?php get_template_part( 'templates/theme', 'slideshow' ); ?>
</div>
<div class="wrap column">
  <div class="col-8-12">
    <div class="column">
      <?php if (dynamic_sidebar( 'sidebar-2' )) : else : endif; ?>
    </div>
    <div class="column">
      lorem
    </div>
  </div>
  <div class="col-4-12">
    <?php if (dynamic_sidebar( 'sidebar-3' )) : else : endif; ?>
  </div>
</div>

<?php get_footer(); ?>