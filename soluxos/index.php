<?php
/**
 * @package WordPress
 * @subpackage soluxos
 * Check for header function to prevent error log entry on bot hits
 */
if (function_exists('get_header')) :
	get_header();
else :
    header("Location: http://" . $_SERVER['HTTP_HOST'] . "");
    exit;
endif; ?>

<?php get_template_part( 'blocks/content', 'flexible' ); ?>

<?php get_footer(); ?>