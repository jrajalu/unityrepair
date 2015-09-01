<?php
/**
 * @package unityrepair
 * @since 1.0
 */
?> 
<div class="uk-slidenav-position" data-uk-slideshow="{animation:'slice-up-down', autoplay:true, autoplayInterval:10000}">
  <ul class="uk-slideshow">
    <?php
      $args = array(
        'post_type'       => 'slideshow',
        'post_per_page'   => 10,
        'order'           => 'ASC'
      );

      $slideshow = new WP_Query( $args );

      if ( $slideshow->have_posts() ) : while ( $slideshow->have_posts() ) : $slideshow->the_post(); 
    ?>
    <li>
      <a href="<?php echo get_post_meta(get_the_ID(),'ut_slideshow_link',true); ?>">
        <img src="<?php echo get_post_meta(get_the_ID(),'ut_slideshow_image',true); ?>" alt="<?php the_title(); ?>" style="width: 100%;">
      </a>
      <div class="uk-overlay-panel uk-overlay-bottom uk-overlay-fade">
      <?php $hide_caption = get_post_meta(get_the_ID(), 'ut_slideshow_caption_hide', true); ?>
        <div class="wrap slideshow <?php if ( $hide_caption== on ) { echo 'hidden'; } ?>">
          <h2><?php the_title(); ?></h2>
          <p><?php echo get_post_meta(get_the_ID(),'ut_slideshow_caption',true); ?></p>
        </div>
      </div>
    </li>            
    <?php endwhile; else: ?>
    <li>
      <img src="<?php echo get_template_directory_uri(); ?>/images/sample-slide-1.jpg" alt="Slide-1" style="width: 100%;">
    </li>
    <li>
      <img src="<?php echo get_template_directory_uri(); ?>/images/sample-slide-2.jpg" alt="Slide-2" style="width: 100%;">
    </li>
    <li>
      <img src="<?php echo get_template_directory_uri(); ?>/images/sample-slide-3.jpg" alt="Slide-3" style="width: 100%;">
    </li>
    <?php endif; ?>
  </ul>
  <a href="#" class="uk-slidenav uk-slidenav-previous" data-uk-slideshow-item="previous" style="color: rgba(255,255,255,0.4)"></a>
  <a href="#" class="uk-slidenav uk-slidenav-next" data-uk-slideshow-item="next" style="color: rgba(255,255,255,0.4)"></a>
</div>