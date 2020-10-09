<?php
 
function custom_theme_assets() {
	wp_enqueue_style('style', get_stylesheet_uri());
}
 
add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );

//Register menu location

register_nav_menus([ 'primary' => __( 'Primary Menu' ) , 'footer' => __( 'Footer Menu' )]);
