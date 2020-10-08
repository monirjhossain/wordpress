<?php
 
function custom_theme_assets() {
	wp_enqueue_style('style1', get_stylesheet_uri());
	wp_enqueue_style('style2', get_template_directory_uri() . '/css/style.css');
}
 
add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );

// Add feature image

add_theme_support('post-thumbnails');

//Register menu location

register_nav_menus( [ 'primary' => __( 'Primary Menu' ) ] );

//Footer menu

register_nav_menus( [ 'footer' => __( 'Footer Menu' ) ] );