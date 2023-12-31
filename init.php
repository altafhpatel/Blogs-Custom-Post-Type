<?php
define('BCPT_VERSION','1.0.0');
define('BCPT_IN_PARENT',true);
define('BCPT_DIRECTORY_NAME','blogs_cpt');

include('inc/blogs_post_type.php');
include('inc/bcpt-sidebar.php');
add_filter('single_template', 'which_template_to_select');

function which_template_to_select($single) {
    global $post;
	//var_dump($post->post_type);
    if ( $post->post_type == 'blogs' ) {
    	$single =  __DIR__ .'/inc/single-blogs.php';
    }
    return $single;
}

function bcpt_enqueue_scripts(){
	global $post;
	$directory = BCPT_IN_PARENT ? get_template_directory_uri() : get_stylesheet_directory_uri();
	if ( $post->post_type == 'blogs' ) {
		wp_enqueue_style('bcpt-styles',$directory.'/'.BCPT_DIRECTORY_NAME.'/inc/css/bcpt-styles.css',null,BCPT_VERSION);
	}
}
add_action('wp_enqueue_scripts','bcpt_enqueue_scripts');