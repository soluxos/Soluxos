<?php
/**
 * @package WordPress
 * @subpackage soluxos
 */

get_header(); ?>
<div class="row full-width title-row">
	<div class="row-inner fixed-width">
    	<div class="column one">
        	<?php  global $wp_query; $term = $wp_query->get_queried_object(); $title = $term->name; ?>
    		<h1><?php echo $title; ?></h1>
			<?php echo category_description(); ?>
        	<div class="clear"></div>
    	</div>
	</div>
</div>
<div class="row full-width category">
    <div class="row-inner fixed-width">
        <div class="column one">
			<?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); $link = get_permalink();?>
                    <?php get_template_part( 'blocks/content', 'story' ); ?>
                <?php endwhile; ?>
                <?php get_template_part( 'blocks/pagination', 'category' ); ?>
            <?php else : ?>
                <p class="error">There are no posts for this category yet. Check back soon!</p>
            <?php endif; ?>
            <div class="clear"></div>
        </div>
    </div>
</div>

<?php get_footer(); ?>