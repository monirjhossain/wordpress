<?php

/**
 * Enqueue scripts and styles.
 */

//Plugin css file

function bready_scripts() {
	wp_enqueue_style( 'bready-googleapis', 'https://fonts.googleapis.com/css?family=Kaushan+Script%7CLora:400,700');
	wp_enqueue_style('bready-fontawesome', get_template_directory_uri() . '/assets/plugins/font-awesome/css/font-awesome.min.css');
	wp_enqueue_style('bready-bakery-icon', get_template_directory_uri() . '/assets/plugins/bakery-icon/style.css');
	wp_enqueue_style('bready-bootstrapdit', get_template_directory_uri() . '/assets/plugins/bootstrap/dist/css/bootstrap.min.css');
	wp_enqueue_style('bready-owl-carousel', get_template_directory_uri() . '/assets/plugins/owl-carousel/assets/owl.carousel.css');
	wp_enqueue_style('bready-jquery-bar-rating', get_template_directory_uri() . '/assets/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css');
	wp_enqueue_style('bready-bootstrap-select', get_template_directory_uri() . '/assets/plugins/bootstrap-select/dist/css/bootstrap-select.min.css');
	wp_enqueue_style('bready-jquery-ui', get_template_directory_uri() . '/assets/plugins/jquery-ui/jquery-ui.min.css');
	wp_enqueue_style('bready-slick', get_template_directory_uri() . '/assets/plugins/slick/slick/slick.css');
	wp_enqueue_style('bready-lightGallery-master', get_template_directory_uri() . '/assets/plugins/lightGallery-master/dist/css/lightgallery.min.css');
	wp_enqueue_style('bready-style-css', get_template_directory_uri() . '/assets/css/style.css');


	//Plugin js file

	wp_enqueue_script( 'bready-jquerydist', get_template_directory_uri() . '/assets/plugins/jquery/dist/jquery.min.js');
	wp_enqueue_script( 'bready-bootstrapdist', get_template_directory_uri() . '/assets/plugins/bootstrap/dist/js/bootstrap.min.js');
	wp_enqueue_script( 'bready-owl-carousel1', get_template_directory_uri() . '/assets/plugins/owl-carousel/owl.carousel.min.js');
	wp_enqueue_script( 'bready-bootstrap-select1', get_template_directory_uri() . '/assets/plugins/bootstrap-select/dist/js/bootstrap-select.min.js');
	wp_enqueue_script( 'bready-barrating', get_template_directory_uri() . '/assets/plugins/jquery-bar-rating/dist/jquery.barrating.min.js');
	wp_enqueue_script( 'bready-waypoints', get_template_directory_uri() . '/assets/plugins/jquery.waypoints.min.js');
	wp_enqueue_script( 'bready-countTo', get_template_directory_uri() . '/assets/plugins/jquery.countTo.js');
	wp_enqueue_script( 'bready-matchHeight', get_template_directory_uri() . '/assets/plugins/jquery.matchHeight-min.js');
	wp_enqueue_script( 'bready-jquery-ui1', get_template_directory_uri() . '/assets/plugins/jquery-ui/jquery-ui.min.js');
	wp_enqueue_script( 'bready-gmap31', get_template_directory_uri() . '/assets/plugins/gmap3.min.js');
	wp_enqueue_script( 'bready-lightgallery2', get_template_directory_uri() . '/assets/plugins/lightGallery-master/dist/js/lightgallery-all.min.js');
	wp_enqueue_script( 'bready-slick2', get_template_directory_uri() . '/assets/plugins/slick/slick/slick.min.js');
	wp_enqueue_script( 'bready-animation', get_template_directory_uri() . '/assets/plugins/slick-animation.min.js');
	wp_enqueue_script( 'bready-slimscroll12', get_template_directory_uri() . '/assets/plugins/jquery.slimscroll.min.js');

	//Custom scripts

	wp_enqueue_script( 'bready-slimscrol', get_template_directory_uri() . '/assets/js/main.js');
	wp_enqueue_style( 'bready-googleapis2', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDsUcTjt43mTheN9ruCsQVgBE-wgN6_AfY&amp;region=GB');


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bready_scripts' );
