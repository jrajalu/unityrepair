<?php

if ( file_exists( get_template_directory() . '/lib/cmb2/init.php' ) ) {
  require_once get_template_directory() . '/lib/cmb2/init.php';
} elseif ( file_exists( get_template_directory() . '/lib/CMB2/init.php' ) ) {
  require_once get_template_directory() . '/lib/CMB2/init.php';
}

add_action( 'cmb2_init', 'yourprefix_register_demo_metabox' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_init' hook.
 */
function yourprefix_register_demo_metabox() {

  // Start with an underscore to hide fields from custom fields list
  $prefix = '_unityrepair_';

  $cmb_slide = new_cmb2_box( array(
    'id'            => $prefix . 'slide',
    'title'         => __( 'Slide Details', 'cmb2' ),
    'object_types'  => array( 'slide' ), // Post type
    // 'show_on_cb' => 'yourprefix_show_if_front_page', // function should return a bool value
    // 'context'    => 'normal',
    // 'priority'   => 'high',
    // 'show_names' => true, // Show field names on the left
    // 'cmb_styles' => false, // false to disable the CMB stylesheet
    // 'closed'     => true, // true to keep the metabox closed by default
  ) );

  $cmb_slide->add_field( array(
    'name' => __( 'Image', 'unityrepair' ),
    'desc' => __( 'Upload an image or enter a URL.', 'cmb2' ),
    'id'   => $prefix . 'slide_image',
    'type' => 'file',
  ) );
  
  $cmb_slide->add_field( array(
    'name'    => __( 'Link', 'unityrepair' ),
    'desc'    => __( 'Link for images', 'unityrepair' ),
    'id'      => $prefix . 'slide_link',
    'type'    => 'text',
  ) );
    
}