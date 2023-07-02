<?php
function bcpt_custom_sidebar(){

$args = array(
		'name'          => __( 'Blogs Sidebar', 'textdomain' ),
		'id'            => 'bcptsidebar',
		'description'   => __( 'Widgets in this area will be shown on Blogs Post Type', 'textdomain' ),
		'before_widget' => '<div id="%1$s" class="bcpt-widget widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title bcpt-widget-title">',
		'after_title'   => '</h3>',
	);
register_sidebar( $args );
}
add_action('widgets_init','bcpt_custom_sidebar');