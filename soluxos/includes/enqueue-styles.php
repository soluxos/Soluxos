<?php 
	// Enqueue Stylesheets

	function pd_styles() 
	{
	    wp_enqueue_style( 'base-style', get_template_directory_uri() . '/css/ch.css' );
		wp_enqueue_style( 'main-style', get_stylesheet_uri() );
		wp_enqueue_style( 'mobile-style', get_template_directory_uri() . '/css/mobile.css' );
		wp_enqueue_style( 'retina-style', get_template_directory_uri() . '/css/retina.css' );
		wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css' );
	    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css' );
	}
	add_action( 'wp_enqueue_scripts', 'pd_styles' );

	// Enqueue Scripts

	function wpb_adding_scripts() {
		wp_register_script( 'bx-slider', get_template_directory_uri() . '/scripts/jquery.bxslider.min.js', array('jquery'), false, true );
		wp_register_script( 'wow', get_template_directory_uri() . '/scripts/wow.min.js', array('jquery'), false, true );
		wp_register_script( 'transformicons', get_template_directory_uri() . '/scripts/transformicons.min.js', array('jquery'), false, true );
		wp_register_script( 'jquerycookie', get_template_directory_uri() . '/scripts/jquery.cookie.js', array('jquery'), false, true );
		wp_register_script( 'themescript', get_template_directory_uri() . '/scripts/themescripts.js', array('jquery'), false, true );
  		wp_enqueue_script( 'bx-slider' );
		wp_enqueue_script( 'wow' );
		wp_enqueue_script( 'transformicons' );
		wp_enqueue_script( 'jquerycookie' );
		wp_enqueue_script( 'themescript' );
	}
	add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );  

	// Uncomment jQueryUI if required, refer to their documentation for required libraries
 
	function load_all_jquery() {
		wp_enqueue_script("jquery");
		/*$jquery_ui = array(
			"jquery-ui-core",			//UI Core - do not remove this one
			"jquery-ui-widget",
			"jquery-ui-mouse",
			"jquery-ui-accordion",
			"jquery-ui-autocomplete",
			"jquery-ui-slider",
			"jquery-ui-tabs",
			"jquery-ui-sortable",	
			"jquery-ui-draggable",
			"jquery-ui-droppable",
			"jquery-ui-selectable",
			"jquery-ui-position",
			"jquery-ui-datepicker",
			"jquery-ui-resizable",
			"jquery-ui-dialog",
			"jquery-ui-button"
		);
		foreach($jquery_ui as $script){
			wp_enqueue_script($script);
		}*/
	}
	add_action('wp_enqueue_scripts', 'load_all_jquery');
 ?>