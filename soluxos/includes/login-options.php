<?php
	// Disable admin bar for non admins
	add_action('after_setup_theme', 'remove_admin_bar');
	function remove_admin_bar() {
		if (!current_user_can('edit_theme_options') && !is_admin()) {
		  show_admin_bar(false);
		}
	}
	
	// Block non admins from dashboard
	function my_admin_init(){
		if( !defined('DOING_AJAX') && !current_user_can('edit_theme_options') ){
			wp_redirect( site_url( '/' ) );
			exit();
		}
	}
	add_action('admin_init','my_admin_init');
?>