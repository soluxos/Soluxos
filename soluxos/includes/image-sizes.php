<?php
add_action( 'after_setup_theme', 'image_size_setup' );
function image_size_setup() {
	// Set the standard image sizes below and any additional ones required
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 360, 360, true );
	add_image_size( 'square', 360, 360, true );
	add_image_size( 'full', 999, 999 ); // The 'full' image must remain in place for Open Graph images
}
 ?>