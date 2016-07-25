<?php
/**
 	* @package WordPress
 	* @subpackage soluxos
*/
?>
<?php if(get_field("flexible_content")): $count = 0; ?>

	<?php while(has_sub_field("flexible_content")): $row_class = get_row_layout(); $count++; ?>
        <div <?php if(get_sub_field('row_id')) : ?>id="<?php the_sub_field('row_id') ?>" <?php endif; ?> class="row full-width <?php echo $row_class; ?> row-<?php echo $count; ?>">    
            <!-- Single Column -->
            <?php if(get_row_layout() == "single_column"): ?>
                <div class="fixed-width">
                    <div class="column one wow fadeInUp">
                        <?php the_sub_field('content') ?>
                    </div>
                </div>
            <!-- End of Single Column -->
            <!-- Hero -->
            <?php elseif(get_row_layout() == "hero"): ?>
                <?php $image = wp_get_attachment_image_src(get_sub_field('image'), 'hero'); ?>
                <div class="hero" style="background-image: url('<?php echo $image[0]; ?>'); background-size: cover;">
                    <div class="hero-table">
                        <div class="hero-center">
                            <div class="column one wow fadeInUp">
                                <?php the_sub_field('content') ?>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- End of Hero -->  
            <!-- double column -->
            <?php elseif(get_row_layout() == "double_column"): ?>
                <div class="column-holder">
                    <div class="column two" style="background-color: #<?php the_sub_field('content_one_bg_color') ?>; background-image: url(<?php the_sub_field('content_one_image') ?>); width: <?php the_sub_field('content_one_custom_width') ?>%; background-size:cover; color: #<?php the_sub_field('content_one_color') ?>">
                        <div class="column-content wow fadeInUp"><?php the_sub_field('content_one') ?></div>
                        <div class="column-overlay" style="background: rgba(<?php the_sub_field('content_one_overlay') ?>)"></div>
                    </div>
                    <div class="column two" style="background-color: #<?php the_sub_field('content_two_bg_color') ?>; background-image: url(<?php the_sub_field('content_two_image') ?>); width: <?php the_sub_field('content_two_custom_width') ?>%; background-size:cover; color: #<?php the_sub_field('content_two_color') ?>">
                        <div class="column-content wow fadeInUp"><?php the_sub_field('content_two') ?></div>
                        <div class="column-overlay" style="background: rgba(<?php the_sub_field('content_two_overlay') ?>)"></div>
                    </div>
                </div>
            <!-- End of double column --> 
            <!-- Triple column -->
            <?php elseif(get_row_layout() == "triple_column"): ?>
                <div class="column-holder">
                    <div class="column three" style="background-color: #<?php the_sub_field('content_one_bg_color') ?>; background-image: url(<?php the_sub_field('content_one_image') ?>); background-size:cover; color: #<?php the_sub_field('content_one_color') ?>">
                        <div class="column-content wow fadeInUp"><?php the_sub_field('content_one') ?></div>
                        <div class="column-overlay" style="background: rgba(<?php the_sub_field('content_one_overlay') ?>)"></div>
                    </div>
                    <div class="column three" style="background-color: #<?php the_sub_field('content_two_bg_color') ?>; background-image: url(<?php the_sub_field('content_two_image') ?>); background-size:cover; color: #<?php the_sub_field('content_two_color') ?>">
                        <div class="column-content wow fadeInUp"><?php the_sub_field('content_two') ?></div>
                        <div class="column-overlay" style="background: rgba(<?php the_sub_field('content_two_overlay') ?>)"></div>
                    </div>
                    <div class="column three" style="background-color: #<?php the_sub_field('content_three_bg_color') ?>; background-image: url(<?php the_sub_field('content_three_image') ?>); background-size:cover; color: #<?php the_sub_field('content_three_color') ?>">
                        <div class="column-content wow fadeInUp"><?php the_sub_field('content_three') ?></div>
                        <div class="column-overlay" style="background: rgba(<?php the_sub_field('content_three_overlay') ?>)"></div>
                    </div>
                </div>
            <!-- End of Triple column -->  
            <!-- Four column -->
            <?php elseif(get_row_layout() == "four_column"): ?>
                <div class="column-holder numbers" style="background-color: #<?php the_sub_field('background_colour') ?>; color: #<?php the_sub_field('colour') ?>">
                    <div class="column four a">
                        <div class="column-content wow fadeInUp">
                            <?php the_sub_field('content_one') ?>
                        </div>
                    </div>
                    <div class="column four b">
                        <div class="column-content wow fadeInUp">
                            <?php the_sub_field('content_two') ?>
                        </div>
                    </div>
                    <div class="column four c">
                        <div class="column-content wow fadeInUp">
                            <?php the_sub_field('content_three') ?>
                        </div>
                    </div>
                    <div class="column four d">
                        <div class="column-content wow fadeInUp">
                            <?php the_sub_field('content_four') ?>
                        </div>
                    </div>
                </div>
            <!-- End of Four column -->  
            <!-- Image -->
            <?php elseif(get_row_layout() == "image"): ?>
                <div class="image" style="background-image: url(<?php the_sub_field('image') ?>);">
                </div>
            <!-- End of Image -->  
            <!-- Work column -->
            <?php elseif(get_row_layout() == "work_column"): ?>
                <div class="column-holder work">
                    <div class="column four" style="background-image: url(<?php the_sub_field('image');?>)">
                        <div class="column-content wow fadeInUp">
                            <?php the_sub_field('content_one') ?>
                        </div>
                    </div>
                    <div class="column four" style="background-image: url(<?php the_sub_field('image_two');?>)">
                        <div class="column-content wow fadeInUp">
                            <?php the_sub_field('content_two') ?>
                        </div>
                    </div>
                    <div class="column four" style="background-image: url(<?php the_sub_field('image_three');?>)">
                        <div class="column-content wow fadeInUp">
                            <?php the_sub_field('content_three') ?>
                        </div>
                    </div>
                    <div class="column four" style="background-image: url(<?php the_sub_field('image_four');?>)">
                        <div class="column-content wow fadeInUp">
                        </div>
                    </div>
                </div>
            <!-- End of Work column -->  
            <?php endif; ?>
        </div>
    <?php endwhile; ?>

<?php else : ?>

	<div class="row full-width">
        <div class="row-inner fadeIn wow fixed-width">
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

<?php endif; ?>