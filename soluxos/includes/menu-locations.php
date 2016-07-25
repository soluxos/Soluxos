<?php
	// Set additional menus below
	add_action( 'after_setup_theme', 'menu_locations_setup' );
	function menu_locations_setup() {
		register_nav_menus( array(
			'main_menu' => __( 'Main Menu' ),
			'footer' => __( 'Footer Footer' ),
		) );
	}
?>