<?php

if ( file_exists( get_template_directory() . '/lib/cmb2/init.php' ) ) {
  require_once get_template_directory() . '/lib/cmb2/init.php';
} elseif ( file_exists( get_template_directory() . '/lib/CMB2/init.php' ) ) {
  require_once get_template_directory() . '/lib/CMB2/init.php';
}

// SLIDE

add_action( 'cmb2_init', 'unityrepair_register_slide_metabox' );

  function unityrepair_register_slide_metabox() {

    $prefix = '_unityrepair_';

    $cmb_slide = new_cmb2_box( array(
      'id'            => $prefix . 'slide',
      'title'         => __( 'Slide Details', 'unityrepair' ),
      'object_types'  => array( 'slide' ), // Post type
    ) );

    $cmb_slide->add_field( array(
      'name' => __( 'Image', 'unityrepair' ),
      'desc' => __( 'Upload an image or enter a URL.', 'unityrepair' ),
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
  
// PROJECTS
  
add_action( 'cmb2_init', 'unityrepair_register_project_metabox' );

  function unityrepair_register_project_metabox() {

    $prefix = '_unityrepair_';

    $cmb_project = new_cmb2_box( array(
      'id'            => $prefix . 'project',
      'title'         => __( 'Slide Details', 'unityrepair' ),
      'object_types'  => array( 'project' ),
    ) );

    $cmb_project->add_field( array(
      'name' => __( 'Image', 'unityrepair' ),
      'desc' => __( 'Upload an image or enter a URL.', 'unityrepair' ),
      'id'   => $prefix . 'project_image',
      'type' => 'file',
    ) );
    
    $cmb_project->add_field( array(
      'name'    => __( 'Link', 'unityrepair' ),
      'desc'    => __( 'Link for images', 'unityrepair' ),
      'id'      => $prefix . 'project_link',
      'type'    => 'text',
    ) );
    
  }
  
  
// SERVICES
  
add_action( 'cmb2_init', 'unityrepair_register_service_metabox' );

  function unityrepair_register_service_metabox() {

    $prefix = '_unityrepair_';

    $cmb_service = new_cmb2_box( array(
      'id'            => $prefix . 'service',
      'title'         => __( 'Service Details', 'unityrepair' ),
      'object_types'  => array( 'service' ),
    ) );

    $cmb_service->add_field( array(
      'name' => __( 'Image', 'unityrepair' ),
      'desc' => __( 'Upload an image or enter a URL.', 'unityrepair' ),
      'id'   => $prefix . 'service_image',
      'type' => 'file',
    ) );
    
    $cmb_service->add_field( array(
      'name'    => __( 'Link', 'unityrepair' ),
      'desc'    => __( 'Link for images', 'unityrepair' ),
      'id'      => $prefix . 'service_link',
      'type'    => 'text',
    ) );
    
  }