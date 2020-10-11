<?php 

	function add_theme_setup(){
		add_theme_support('post-thumbnails');

		register_nav_menus(['primary'=>'Primary Menu']);

		$args = array(
		'label'=> 'Sliders',
		'description'=>'Holds our Slider entries',
		'public'=>true,
		'supports'=>array('title','thumbnail','editor'),
		'has_archive'=>true

	);
		register_post_type('sliders',$args);

		$args = array(
		'label'=> 'Service',
		'description'=>'Holds our service entries',
		'public'=>true,
		'supports'=>array('title','editor'),
		'has_archive'=>true

	);
		register_post_type('services',$args);
	}

	add_action('after_setup_theme','add_theme_setup');


	
	
 ?>