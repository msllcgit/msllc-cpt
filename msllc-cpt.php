<?php
/**
 * Plugin Name: MSLLC CPT
 * Plugin URI: https://msllcadmin.com
 * Description: Adds custom post types.
 * Author: MightySitesLLC
 * Author URI: https://www.mightysitesllc.com
 * Text Domain: genesisfx
 * Domain Path: /languages/
 * Version: 1.1.0
 *
 * @package WordPress
 * @author MightySitesLLC
 */

/**
 * Basic plugin definitions
 *
 * @package MSLLC Genesis Fx
 * @since 0.3.5
 */

/* Start Adding Functions Below this Line
*****************************************/
// Register Custom Post Type article1
function create_article1_cpt() {

	$labels = array(
		'name' => _x( 'Articles1', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Article1', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Article1', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Article1', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Article1 Archives', 'textdomain' ),
		'attributes' => __( 'Article1 Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Article1:', 'textdomain' ),
		'all_items' => __( 'All Articles1', 'textdomain' ),
		'add_new_item' => __( 'Add New Article1', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Article1', 'textdomain' ),
		'edit_item' => __( 'Edit Article1', 'textdomain' ),
		'update_item' => __( 'Update Article1', 'textdomain' ),
		'view_item' => __( 'View Article1', 'textdomain' ),
		'view_items' => __( 'View Articles1', 'textdomain' ),
		'search_items' => __( 'Search Article1', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Article1', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Article1', 'textdomain' ),
		'items_list' => __( 'Articles1 list', 'textdomain' ),
		'items_list_navigation' => __( 'Articles1 list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Articles1 list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Article1', 'textdomain' ),
		'description' => __( 'Newsletter Articles', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-media-text',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'article1', $args );

}
add_action( 'init', 'create_article1_cpt', 0 );

// Register Custom Post Type article2
function create_article2_cpt() {

	$labels = array(
		'name' => _x( 'Articles2', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Article2', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Article2', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Article2', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Article2 Archives', 'textdomain' ),
		'attributes' => __( 'Article2 Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Article2:', 'textdomain' ),
		'all_items' => __( 'All Articles2', 'textdomain' ),
		'add_new_item' => __( 'Add New Article2', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Article2', 'textdomain' ),
		'edit_item' => __( 'Edit Article2', 'textdomain' ),
		'update_item' => __( 'Update Article2', 'textdomain' ),
		'view_item' => __( 'View Article2', 'textdomain' ),
		'view_items' => __( 'View Articles2', 'textdomain' ),
		'search_items' => __( 'Search Article2', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Article2', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Article2', 'textdomain' ),
		'items_list' => __( 'Articles2 list', 'textdomain' ),
		'items_list_navigation' => __( 'Articles2 list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Articles2 list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Article2', 'textdomain' ),
		'description' => __( 'Newsletter Articles', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-media-text',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'article2', $args );

}
add_action( 'init', 'create_article2_cpt', 0 );

// Register Custom Post Type Column 1
function create_column1_cpt() {

	$labels = array(
		'name' => _x( 'Columns1', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Column1', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Column1', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Column1', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Column1 Archives', 'textdomain' ),
		'attributes' => __( 'Column1 Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Column1:', 'textdomain' ),
		'all_items' => __( 'All Columns1', 'textdomain' ),
		'add_new_item' => __( 'Add New Column1', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Column1', 'textdomain' ),
		'edit_item' => __( 'Edit Column1', 'textdomain' ),
		'update_item' => __( 'Update Column1', 'textdomain' ),
		'view_item' => __( 'View Column1', 'textdomain' ),
		'view_items' => __( 'View Columns1', 'textdomain' ),
		'search_items' => __( 'Search Column1', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Column1', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Column1', 'textdomain' ),
		'items_list' => __( 'Columns1 list', 'textdomain' ),
		'items_list_navigation' => __( 'Columns1 list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Columns1 list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Column1', 'textdomain' ),
		'description' => __( 'Newsletter Columns', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-media-text',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'column1', $args );

}
add_action( 'init', 'create_column1_cpt', 0 );

// Register Custom Post Type Column2
function create_column2_cpt() {

	$labels = array(
		'name' => _x( 'Columns2', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Column2', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Column2', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Column2', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Column2 Archives', 'textdomain' ),
		'attributes' => __( 'Column2 Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Column2:', 'textdomain' ),
		'all_items' => __( 'All Columns2', 'textdomain' ),
		'add_new_item' => __( 'Add New Column2', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Column2', 'textdomain' ),
		'edit_item' => __( 'Edit Column2', 'textdomain' ),
		'update_item' => __( 'Update Column2', 'textdomain' ),
		'view_item' => __( 'View Column2', 'textdomain' ),
		'view_items' => __( 'View Columns2', 'textdomain' ),
		'search_items' => __( 'Search Column2', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Column2', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Column2', 'textdomain' ),
		'items_list' => __( 'Columns2 list', 'textdomain' ),
		'items_list_navigation' => __( 'Columns2 list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Columns2 list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Column2', 'textdomain' ),
		'description' => __( 'Newsletter Columns', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-media-text',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'column2', $args );

}
add_action( 'init', 'create_column2_cpt', 0 );

// Register Custom Post Type Greeting
function create_greeting_cpt() {

	$labels = array(
		'name' => _x( 'Greetings', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Greeting', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Greetings', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Greeting', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Greeting Archives', 'textdomain' ),
		'attributes' => __( 'Greeting Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Greeting:', 'textdomain' ),
		'all_items' => __( 'All Greetings', 'textdomain' ),
		'add_new_item' => __( 'Add New Greeting', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Greeting', 'textdomain' ),
		'edit_item' => __( 'Edit Greeting', 'textdomain' ),
		'update_item' => __( 'Update Greeting', 'textdomain' ),
		'view_item' => __( 'View Greeting', 'textdomain' ),
		'view_items' => __( 'View Greetings', 'textdomain' ),
		'search_items' => __( 'Search Greeting', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Greeting', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Greeting', 'textdomain' ),
		'items_list' => __( 'Greetings list', 'textdomain' ),
		'items_list_navigation' => __( 'Greetings list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Greetings list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Greeting', 'textdomain' ),
		'description' => __( 'Newsletter Greetings', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-smiley',
		'supports' => array('title', 'editor', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'greeting', $args );

}
add_action( 'init', 'create_greeting_cpt', 0 );

// Register Custom Post Type Video
function create_video_cpt() {

	$labels = array(
		'name' => _x( 'Videos', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Video', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Videos', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Video', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Video Archives', 'textdomain' ),
		'attributes' => __( 'Video Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Video:', 'textdomain' ),
		'all_items' => __( 'All Videos', 'textdomain' ),
		'add_new_item' => __( 'Add New Video', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Video', 'textdomain' ),
		'edit_item' => __( 'Edit Video', 'textdomain' ),
		'update_item' => __( 'Update Video', 'textdomain' ),
		'view_item' => __( 'View Video', 'textdomain' ),
		'view_items' => __( 'View Videos', 'textdomain' ),
		'search_items' => __( 'Search Video', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Video', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Video', 'textdomain' ),
		'items_list' => __( 'Videos list', 'textdomain' ),
		'items_list_navigation' => __( 'Videos list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Videos list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Video', 'textdomain' ),
		'description' => __( 'Newsletter Videos', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-video-alt3',
		'supports' => array('title', 'editor', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'video', $args );

}
add_action( 'init', 'create_video_cpt', 0 );


// Register Custom Post Type MReport
function create_mreport_cpt() {

	$labels = array(
		'name' => _x( 'MReports', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'MReport', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'MReports', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'MReport', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'MReport Archives', 'textdomain' ),
		'attributes' => __( 'MReport Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent MReport:', 'textdomain' ),
		'all_items' => __( 'All MReports', 'textdomain' ),
		'add_new_item' => __( 'Add New MReport', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New MReport', 'textdomain' ),
		'edit_item' => __( 'Edit MReport', 'textdomain' ),
		'update_item' => __( 'Update MReport', 'textdomain' ),
		'view_item' => __( 'View MReport', 'textdomain' ),
		'view_items' => __( 'View MReports', 'textdomain' ),
		'search_items' => __( 'Search MReport', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into MReport', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this MReport', 'textdomain' ),
		'items_list' => __( 'MReports list', 'textdomain' ),
		'items_list_navigation' => __( 'MReports list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter MReports list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'MReport', 'textdomain' ),
		'description' => __( 'Newsletter Market Reports','textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-chart-line',
		'supports' => array('title', 'editor',  'excerpt', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'mreport', $args );

}
add_action( 'init', 'create_mreport_cpt', 0 );

// Register Custom Post Type Listings
function create_listing_cpt()
{

    $labels = array(
        'name' => _x('Listings', 'Post Type General Name', 'textdomain') ,
        'singular_name' => _x('Listing', 'Post Type Singular Name', 'textdomain') ,
        'menu_name' => _x('Listings', 'Admin Menu text', 'textdomain') ,
        'name_admin_bar' => _x('Listing', 'Add New on Toolbar', 'textdomain') ,
        'archives' => __('Listing Archives', 'textdomain') ,
        'attributes' => __('Listing Attributes', 'textdomain') ,
        'parent_item_colon' => __('Parent Listing:', 'textdomain') ,
        'all_items' => __('All Listings', 'textdomain') ,
        'add_new_item' => __('Add New Listing', 'textdomain') ,
        'add_new' => __('Add New', 'textdomain') ,
        'new_item' => __('New Listing', 'textdomain') ,
        'edit_item' => __('Edit Listing', 'textdomain') ,
        'update_item' => __('Update Listing', 'textdomain') ,
        'view_item' => __('View Listing', 'textdomain') ,
        'view_items' => __('View Listings', 'textdomain') ,
        'search_items' => __('Search Listing', 'textdomain') ,
        'not_found' => __('Not found', 'textdomain') ,
        'not_found_in_trash' => __('Not found in Trash', 'textdomain') ,
        'featured_image' => __('Featured Image', 'textdomain') ,
        'set_featured_image' => __('Set featured image', 'textdomain') ,
        'remove_featured_image' => __('Remove featured image', 'textdomain') ,
        'use_featured_image' => __('Use as featured image', 'textdomain') ,
        'insert_into_item' => __('Insert into Listing', 'textdomain') ,
        'uploaded_to_this_item' => __('Uploaded to this Listing', 'textdomain') ,
        'items_list' => __('Listings list', 'textdomain') ,
        'items_list_navigation' => __('Listings list navigation', 'textdomain') ,
        'filter_items_list' => __('Filter Listings list', 'textdomain') ,
    );
    $args = array(
        'label' => __('Listing', 'textdomain') ,
        'description' => __('Listings', 'textdomain') ,
        'labels' => $labels,
        'menu_icon' => 'dashicons-list-view',
        'supports' => array(
            'title',
            'thumbnail'
        ) ,
        'taxonomies' => array('') ,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'show_in_rest' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type('postlisting', $args);

}
add_action('init', 'create_listing_cpt', 0);

// Register Custom Post Type Testimonial
function create_testimonial_cpt() {

	$labels = array(
		'name' => _x( 'Testimonials', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Testimonial', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Testimonials', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Testimonial', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Testimonial Archives', 'textdomain' ),
		'attributes' => __( 'Testimonial Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Testimonial:', 'textdomain' ),
		'all_items' => __( 'All Testimonials', 'textdomain' ),
		'add_new_item' => __( 'Add New Testimonial', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Testimonial', 'textdomain' ),
		'edit_item' => __( 'Edit Testimonial', 'textdomain' ),
		'update_item' => __( 'Update Testimonial', 'textdomain' ),
		'view_item' => __( 'View Testimonial', 'textdomain' ),
		'view_items' => __( 'View Testimonials', 'textdomain' ),
		'search_items' => __( 'Search Testimonial', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Testimonial', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Testimonial', 'textdomain' ),
		'items_list' => __( 'Testimonials list', 'textdomain' ),
		'items_list_navigation' => __( 'Testimonials list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Testimonials list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Testimonial', 'textdomain' ),
		'description' => __( 'Newsletter Testimonials', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-comments',
		'supports' => array('title', 'editor', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'testimonial', $args );

}
add_action( 'init', 'create_testimonial_cpt', 0 );

/*TESTIMONIAL PLACEHOLDER
*****************************************/
function wpb_change_title_text( $title ){
     $screen = get_current_screen();
   
     if  ( 'testimonial' == $screen->post_type ) {
          $title = 'Please enter testimonial author here';
     }
   
     return $title;
}
   
add_filter( 'enter_title_here', 'wpb_change_title_text' );

/*EXCERPT READMORE
*****************************************/

add_filter( 'get_the_excerpt', 'excerpt_read_more_all_cases' );

function excerpt_read_more_all_cases( $text ) {

	global $post;
	$raw = $post->post_content;
	$excerpt_length = apply_filters( 'excerpt_length', 55 );
	$raw_to_more = substr( $raw, 0, strpos( $raw, '<!--more-->' ) );
	$excerpt_of_raw = wp_trim_words( $raw, $excerpt_length, ''); 
	$excerpt_of_raw_to_more = wp_trim_words( $raw_to_more, $excerpt_length, ''); 

// CHECKING FOR MANUALLY WRITTEN EXCERPT
	if( has_excerpt() ) { 
	
		$text .= '&hellip; <span class="read-more"><a href="'. get_permalink($post->ID) . '">' . __( 'Read More', 'textdomain' ) . ' &raquo;</a></span>';
		
// CHECKING FOR EXCERPT BEING SHORT BY THE 'MORE TAG'
	} elseif( strpos( $raw, '<!--more-->' ) && strlen( $excerpt_of_raw_to_more ) < strlen( $excerpt_of_raw ) ) {
	
		$text .= '&hellip; <span class="read-more"><a href="'. get_permalink($post->ID) . '">' . __( ' cut short by \'more tag\', so Read More', 'textdomain' ) . ' &raquo;</a></span>';
		
// CHECKING FOR EXCERPT BEING SHORT BECAUSE OIF SHORT CONTENT
	} elseif( strlen( $text ) == strlen( $excerpt_of_raw ) ) {
	
		$text .= '&hellip; <span class="read-more"><a href="'. get_permalink($post->ID) . '">' . __( ' too short for excerpt, but Read More anyway', 'textdomain' ) . ' &raquo;</a></span>';
		
	}
	
	return $text;
}


/* Stop Adding Functions Below this Line 
*****************************************/
function edit_page_notice(){
    global $typenow,$pagenow;
    if  (in_array( $pagenow, array( 'edit.php' ))  && "postlisting" == $typenow ) { ?>
<h1>Hello World Edit Page</h1>
<?php  }
}
add_action('admin_notices', 'edit_page_notice');


function post_page_notice(){
    global $typenow,$pagenow;
    if  (in_array( $pagenow, array( 'post.php' ))  && "postlisting" == $typenow ) { ?>
<h1>Hello World Post Page</h1>
<?php  }
}
add_action('admin_notices', 'post_page_notice');


//this is code for add featured image and custom taxonomy data in
//in api responce for import image and custom post type custom taxonomy catagory

function cpt_featured_image_and_cpttax_data_in_json($data, $post, $context)
{
    $featured_image_id = $data->data['featured_media']; // get featured image id
    $featured_image_url = wp_get_attachment_image_src($featured_image_id, 'original'); // get url of the original size
    if ($featured_image_url)
    {
        $data->data['featured_image_url'] = $featured_image_url[0];
    }

    $terms = get_the_terms($post->ID, 'cpttax');
    //print_r( $terms ); exit;
    $cpttax = array();
    if (!empty($terms))
    {
        foreach ($terms as $key => $val)
        {
            array_push($cpttax, array(
                'id' => $val->term_id,
                'slug' => $val->slug,
                'name' => $val->name
            ));
        }
    }

    $data->data['cpttax_plus'] = $cpttax;

    return $data;
}

$cpt_list = array(
    'article1',
    'article2',
    'column1',
    'column2',
    'greeting',
    'video',
    'mreport',
    'listings',
    'testimonial'
);
foreach ($cpt_list as $cpt)
{
    add_filter('rest_prepare_' . $cpt, 'cpt_featured_image_and_cpttax_data_in_json', 10, 3);
}
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
// add_filter('rest_prepare_article' , 'cpt_featured_image_and_cpttax_data_in_json', 10, 3 );
// add_filter('rest_prepare_excerpt' , 'cpt_featured_image_and_cpttax_data_in_json', 10, 3 );
// add_filter('rest_prepare_greeting', 'cpt_featured_image_and_cpttax_data_in_json', 10, 3 );
// add_filter('rest_prepare_mreport' , 'cpt_featured_image_and_cpttax_data_in_json', 10, 3 );

