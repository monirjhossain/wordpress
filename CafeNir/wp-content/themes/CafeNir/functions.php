<?php
 
function custom_theme_assets() {
	wp_enqueue_style('style', get_stylesheet_uri());
}


function cafe_nir_setup(){
	add_image_size( 'product_img', 350, 600);
	register_nav_menus(['primary'=>'Primary Menu','footer'=>'Footer Menu','social'=>'Social Menu']);
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'cafe_nir_setup');

add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );
 


function custom_post_type(){
	register_post_type('wporg_product',
	        array(
	            'labels'      => array(
	                'name'          => __('Products', 'cafenir'),
	                'singular_name' => __('Product', 'cafenir'),
	            ),
	                'public'      => true,
	                'has_archive' => true,
	                'supports' =>array(
	                	'editor',
	                	'title',
	                	'thumbnail'
	                ),
	        )
	    );



	register_post_type('testimonial',
	        array(
	            'labels'      => array(
	                'name'          => __('Testimonials', 'cafenir'),
	                'singular_name' => __('Testimonial', 'cafenir'),
	            ),
	                'public'      => true,
	                'has_archive' => true,
	                'supports' =>array(
	                	'editor',
	                	'title',
	                	'thumbnail'
	                ),
	        )
	    );

	register_post_type('team',
	        array(
	            'labels'      => array(
	                'name'          => __('team', 'cafenir'),
	                'singular_name' => __('team', 'cafenir'),
	            ),
	                'public'      => true,
	                'has_archive' => true,
	                'supports' =>array(
	                	'editor',
	                	'title',
	                	'thumbnail'
	                ),
	        )
	    );
}
add_action('init', 'custom_post_type');