<?php
// Plugin Name: Deewana's Kitchen Videos
// Plugin URI:
// Description: Creates a cooking video post-type.
// Author: Dusan Pejcic
// Version: 1.0
// Author URI: https://dusan-pejcic.de/
// Text Domain: deewanatheme

if (!defined('ABSPATH')) die();


// Register new Custom Post Type
function deewanas_videos_post_type() {

	$labels = array(
		'name'                  => _x( 'Videos', 'Post Type General Name', 'deewanatheme' ),
		'singular_name'         => _x( 'Video', 'Post Type Singular Name', 'deewanatheme' ),
		'menu_name'             => __( 'Deewanas Videos', 'deewanatheme' ),
		'name_admin_bar'        => __( 'Videos', 'deewanatheme' ),
		'archives'              => __( 'Archive', 'deewanatheme' ),
		'attributes'            => __( 'Attributes', 'deewanatheme' ),
		'parent_item_colon'     => __( 'Parent Video', 'deewanatheme' ),
		'all_items'             => __( 'All Videos', 'deewanatheme' ),
		'add_new_item'          => __( 'Add Video', 'deewanatheme' ),
		'add_new'               => __( 'Add Video', 'deewanatheme' ),
		'new_item'              => __( 'New Video', 'deewanatheme' ),
		'edit_item'             => __( 'Edit Video', 'deewanatheme' ),
		'update_item'           => __( 'Update Video', 'deewanatheme' ),
		'view_item'             => __( 'View Video', 'deewanatheme' ),
		'view_items'            => __( 'View Video', 'deewanatheme' ),
		'search_items'          => __( 'Search Video', 'deewanatheme' ),
		'not_found'             => __( 'Not found', 'deewanatheme' ),
		'not_found_in_trash'    => __( 'Not found in trash', 'deewanatheme' ),
		'featured_image'        => __( 'Featured Image', 'deewanatheme' ),
		'set_featured_image'    => __( 'Save Featured Image', 'deewanatheme' ),
		'remove_featured_image' => __( 'Remove Featured Image', 'deewanatheme' ),
		'use_featured_image'    => __( 'Use as Featured Image', 'deewanatheme' ),
		'insert_into_item'      => __( 'Insert in Video', 'deewanatheme' ),
		'uploaded_to_this_item' => __( 'Add in Video', 'deewanatheme' ),
		'items_list'            => __( 'Videos List', 'deewanatheme' ),
		'items_list_navigation' => __( 'Navigate to Videos', 'deewanatheme' ),
		'filter_items_list'     => __( 'Filter Videos', 'deewanatheme' ),
	);


	$args = array(
		'label'                 => __( 'Video', 'deewanatheme' ),
		'description'           => __( 'Videos for deewanatheme Website', 'deewanatheme' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'author', 'excerpt' ),
		'hierarchical'          => false, // znaci da nije child post
		'public'                => true,	//ovo je da bude prikazano u user interfaceu
		'show_ui'               => true, //ovo je da bude prikazano u user interfaceu
		'show_in_menu'          => true, //ovo je da bude prikazano u user interfaceu
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-video-alt2',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page'
    // 'show_in_rest'          => true //ovo je da se aktivira gutenberg editor umesto standardnog wordpress editora
	);
	register_post_type( 'deewanas_videos', $args );

}
add_action( 'init', 'deewanas_videos_post_type', 0 );
