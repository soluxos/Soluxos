<?php
	// Add TinyMCE options, you can find out more about these options here: http://www.tinymce.com/wiki.php/Configuration:formats
	function wpb_mce_buttons_2($buttons) {
		array_unshift($buttons, 'styleselect');
		return $buttons;
	}
	add_filter('mce_buttons_2', 'wpb_mce_buttons_2');
	
	/*
	* Callback function to filter the MCE settings
	*/
	
	function my_mce_before_init_insert_formats( $init_array ) {  
	
	// Define the style_formats array
	
		$style_formats = array(  
			// Each array child is a format with it's own settings
			array(  
				'title' => 'Button',  
				'selector' => 'a',  
				'classes' => 'button',
			),  
			array(  
				'title' => 'Scroll Button',  
				'selector' => 'a',  
				'classes' => 'button scroll',
			),
			array(  
				'title' => 'Span',  
				'block' => 'span',  
				'classes' => 'text-span',
				'wrapper' => true,
			),
		);  
		// Insert the array, JSON ENCODED, into 'style_formats'
		$init_array['style_formats'] = json_encode( $style_formats );  
		
		return $init_array;  
	  
	} 
	// Attach callback to 'tiny_mce_before_init' 
	add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );
	
	function my_theme_add_editor_styles() {
		add_editor_style( 'css/admin-style.css' );
		add_editor_style( get_template_directory_uri() . '/css/font-awesome.css' );
	}
	add_action( 'init', 'my_theme_add_editor_styles' );
	
	function unhide_kitchensink( $args ) { $args['wordpress_adv_hidden'] = false; return $args; } add_filter( 'tiny_mce_before_init', 'unhide_kitchensink' );
	
	// Allow SVG
	
	function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	  return $mimes;
	}
	add_filter('upload_mimes', 'cc_mime_types');
?>