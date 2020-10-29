<?php

/**
 * bready functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bready
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'bready_setup' ) ) :

	function bready_setup() {

		load_theme_textdomain( 'bready', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary_left' => esc_html__( 'Primary Menu Left', 'bready' ),
				'primary_right' => esc_html__( 'Primary Menu Right', 'bready' ),
			)
		);

		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'bready_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		 $defaults = array(
		 'height'      => 128,
		 'width'       => 150,
		 'flex-height' => true,
		 'flex-width'  => true,
		 );
		 add_theme_support( 'custom-logo', $defaults );

		


}

endif;
add_action( 'after_setup_theme', 'bready_setup' );
