<?php
/**
 * @package WordPress
 * @subpackage soluxos
 */

get_header(); ?>

<div class="row full-width">
    <div class="row-inner fixed-width">
        <div class="column one">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>
            <div class="clear"></div>
        </div>
    </div>
</div>

<?php get_footer(); ?>