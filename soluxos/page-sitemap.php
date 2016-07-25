<?php
/**
 * @package WordPress
 * @subpackage soluxos
 */

get_header(); ?>

<div class="row full-width">
	<div class="row-inner fixed-width">
    	<div class="column three">
            <h2>Pages</h2>
            <ul>
                <?php wp_list_pages('title_li=0&post_status=publish'); ?>
            </ul>
            <div class="clear"></div>
        </div>
        <div class="column three">
        	<h2>Posts</h2>
            <ul>
            <?php
                $args = array( 'numberposts' => '-1', 'post_status' => 'publish' );
                $recent_posts = wp_get_recent_posts( $args );
                foreach( $recent_posts as $recent ){
                    echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
                }
            ?>
            </ul>
            
            <div class="clear"></div>
        </div>
        <div class="column three last">
            <?php /* use this section to setup custom post type feeds
            <h2>Custom Post Type</h2>
            <ul>
            <?php
                $args = array( 'numberposts' => '-1', 'post_type' => 'work', 'post_status' => 'publish' );
                $recent_posts = wp_get_recent_posts( $args );
                foreach( $recent_posts as $recent ){
                    echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
                }
            ?>
            </ul>
			*/ ?>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
	</div>
</div>

<?php get_footer(); ?>