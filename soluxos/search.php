<?php
/**
 * @package WordPress
 * @subpackage soluxos
 */

get_header(); ?>

<div class="row full-width title-row">
	<div class="row-inner fixed-width">
    	<div class="column one">
        	<h1>Search Results for &quot;<?php the_search_query(); ?>&quot;</h1>
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
                <p class="error">Sorry, there are no results for this search. Maybe try something else?</p> 
            <?php endif; ?>
            <div class="clear"></div>
        </div>
    </div>
</div>

<?php get_footer(); ?>