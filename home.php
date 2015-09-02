<?php
/**
 * @package unityrepair
 * @since 1.0
 */
get_header(); ?>

<div class="wrap slide-wrap">
  <?php get_template_part( 'templates/theme', 'slideshow' ); ?>
</div>
<div class="wrap column">
  <div class="col-8-12">
    <div class="column">
      <?php if (dynamic_sidebar( 'sidebar-2' )) : else : endif; ?>
    </div>
    <div class="column">
      <div class="col-12-12">
        <?php get_template_part( 'templates/theme', 'project' ); ?>
      </div>
    </div>
  </div>
  <div class="col-4-12">
    <div class="arrow-box">
      Sed cursus turpis vitae tortor. In hac habitasse platea dictumst. Suspendisse non nisl sit amet velit hendrerit rutrum. Donec id justo. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
    </div>
    <?php if (dynamic_sidebar( 'sidebar-3' )) : else : endif; ?>
  </div>
</div>

<?php get_footer(); ?>