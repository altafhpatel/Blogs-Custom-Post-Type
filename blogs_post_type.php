<?php
// Register Custom Post Type
function blog_post_type() {

	$labels = array(
		'name'                  => _x( 'Blogs', 'Post Type General Name', 'bpt' ),
		'singular_name'         => _x( 'Blog', 'Post Type Singular Name', 'bpt' ),
		'menu_name'             => __( 'Blogs', 'bpt' ),
		'name_admin_bar'        => __( 'Blogs', 'bpt' ),
		'archives'              => __( 'Blogs', 'bpt' ),
		'attributes'            => __( 'Item Attributes', 'bpt' ),
		'parent_item_colon'     => __( 'Parent Blog:', 'bpt' ),
		'all_items'             => __( 'All Blogs', 'bpt' ),
		'add_new_item'          => __( 'Add New Blog', 'bpt' ),
		'add_new'               => __( 'Add New', 'bpt' ),
		'new_item'              => __( 'New Blog', 'bpt' ),
		'edit_item'             => __( 'Edit Blog', 'bpt' ),
		'update_item'           => __( 'Update Blog', 'bpt' ),
		'view_item'             => __( 'View Blog', 'bpt' ),
		'view_items'            => __( 'View Blog', 'bpt' ),
		'search_items'          => __( 'Search Blog', 'bpt' ),
		'not_found'             => __( 'Not found', 'bpt' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'bpt' ),
		'featured_image'        => __( 'Featured Image', 'bpt' ),
		'set_featured_image'    => __( 'Set featured image', 'bpt' ),
		'remove_featured_image' => __( 'Remove featured image', 'bpt' ),
		'use_featured_image'    => __( 'Use as featured image', 'bpt' ),
		'insert_into_item'      => __( 'Insert into item', 'bpt' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'bpt' ),
		'items_list'            => __( 'Blogs list', 'bpt' ),
		'items_list_navigation' => __( 'Blogs list navigation', 'bpt' ),
		'filter_items_list'     => __( 'Filter blogs list', 'bpt' ),
	);
	$args = array(
		'label'                 => __( 'Blog', 'bpt' ),
		'description'           => __( 'All Blogs', 'bpt' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'trackbacks' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'       => true,
	);
	register_post_type( 'blogs', $args );

}
add_action( 'init', 'blog_post_type', 0 );