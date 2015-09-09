<?php
/**
 * @package unityrepair
 * @since 1.0
 */

// NEWS

add_action( 'init', 'register_cpt_project' );

function register_cpt_project() {

  $labels = array( 
    'name' => _x( 'Projects', 'project' ),
    'singular_name' => _x( 'Project', 'project' ),
    'add_new' => _x( 'Add New', 'project' ),
    'add_new_item' => _x( 'Add New Project', 'project' ),
    'edit_item' => _x( 'Edit Project', 'project' ),
    'new_item' => _x( 'New Project', 'project' ),
    'view_item' => _x( 'View Project', 'project' ),
    'search_items' => _x( 'Search Projects', 'project' ),
    'not_found' => _x( 'No projects found', 'project' ),
    'not_found_in_trash' => _x( 'No projects found in Trash', 'project' ),
    'parent_item_colon' => _x( 'Parent Project:', 'project' ),
    'menu_name' => _x( 'Projects', 'project' ),
  );

  $args = array( 
    'labels' => $labels,
    'hierarchical' => false,

    'supports' => array( 'title', 'editor', 'thumbnail' ),

    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-clipboard',


    'show_in_nav_menus' => true,
    'publicly_queryable' => true,
    'exclude_from_search' => false,
    'has_archive' => true,
    'query_var' => true,
    'can_export' => true,
    'rewrite' => true,
    'capability_type' => 'post'
  );

  register_post_type( 'project', $args );
}
  
// SLIDE

add_action( 'init', 'register_cpt_slide' );

function register_cpt_slide() {

  $labels = array( 
    'name' => _x( 'Slides', 'slide' ),
    'singular_name' => _x( 'Slide', 'slide' ),
    'add_new' => _x( 'Add New', 'slide' ),
    'add_new_item' => _x( 'Add New Slide', 'slide' ),
    'edit_item' => _x( 'Edit Slide', 'slide' ),
    'new_item' => _x( 'New Slide', 'slide' ),
    'view_item' => _x( 'View Slide', 'slide' ),
    'search_items' => _x( 'Search Slides', 'slide' ),
    'not_found' => _x( 'No slides found', 'slide' ),
    'not_found_in_trash' => _x( 'No slides found in Trash', 'slide' ),
    'parent_item_colon' => _x( 'Parent Slide:', 'slide' ),
    'menu_name' => _x( 'Slides', 'slide' ),
  );

  $args = array( 
    'labels' => $labels,
    'hierarchical' => false,

    'supports' => array( 'title' ),

    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-images-alt2',

    'show_in_nav_menus' => true,
    'publicly_queryable' => true,
    'exclude_from_search' => false,
    'has_archive' => true,
    'query_var' => true,
    'can_export' => true,
    'rewrite' => true,
    'capability_type' => 'post'
  );

  register_post_type( 'slide', $args );
}

// SERVICES

add_action( 'init', 'register_cpt_service' );

function register_cpt_service() {

    $labels = array( 
        'name' => _x( 'Services', 'service' ),
        'singular_name' => _x( 'Service', 'service' ),
        'add_new' => _x( 'Add New', 'service' ),
        'add_new_item' => _x( 'Add New Service', 'service' ),
        'edit_item' => _x( 'Edit Service', 'service' ),
        'new_item' => _x( 'New Service', 'service' ),
        'view_item' => _x( 'View Service', 'service' ),
        'search_items' => _x( 'Search Services', 'service' ),
        'not_found' => _x( 'No services found', 'service' ),
        'not_found_in_trash' => _x( 'No services found in Trash', 'service' ),
        'parent_item_colon' => _x( 'Parent Service:', 'service' ),
        'menu_name' => _x( 'Services', 'service' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        
        'menu_icon' => 'dashicons-forms',
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );
    
    register_post_type( 'service', $args );
}