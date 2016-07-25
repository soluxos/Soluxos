<?php
	// Setup custom user roles - use this with the "login check" block. ACF fields must be setup for "permitted users"

	// Remove roles here
	remove_role( 'subscriber' );
	remove_role( 'contributor' );
	remove_role( 'author' );
	
	// Add roles
	
	add_role(
		'role_name',
		__( 'Role - Name' ),
		array(
			'read'         => true,
			'edit_posts'   => false,
			'delete_posts' => false
		)
	);
	
	function get_user_role() {
		global $current_user;
		$user_roles = $current_user->roles;
		$user_role = array_shift($user_roles);
		return $user_role;
	}
?>