<?php
/**
 * @package WordPress
 * @subpackage soluxos
 */

get_header(); ?>
<div class="row full-width single_column row-1">    
     <!-- Single Column -->
     <div class="fixed-width">
        <div class="column one wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <h1><?php single_cat_title(); ?></h1>
            <?php echo category_description(); ?>
        </div>
    </div>
    <!-- End of Single Column -->
</div>
<div class="row full-width category-portfolio">
    <?php
      $args = array(
            'posts_per_page' => 4,
            'meta_key' => 'meta-checkbox',
            'meta_value' => 'yes'
        );
        $is_featured = new WP_Query($args);
    ?>
    <?php
      $args_2 = array(
            'posts_per_page' => -1,
            'meta_key' => 'meta-checkbox',
            'meta_value' => ''
        );
        $regular = new WP_Query($args_2);
    ?>

    <div class="column-holder portfolio featured">
        <?php if ($is_featured->have_posts()): ?> 
            <div class="bx-slider">
                <?php while($is_featured->have_posts()): $is_featured->the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>">   
                            <div class="work-column-overlay"></div>
                            <?php the_post_thumbnail('full'); ?>
                            <div class="slider-cell">
                                <h1><?php the_title(); ?></h1>
                                <p><?php the_excerpt();?></p>
                            </div>
                        </a>
                    </li>
                <?php endwhile; ?>
         <?php endif; ?>
    </div>
	<?php if ($regular->have_posts()) : ?>
        <div class="column-holder work">
            <?php $button_count = 0; ?>
            <?php while ($regular->have_posts()) : $regular->the_post(); ?>
                <?php $button_count++; ?>
                <div class="column four" style="background-image: url(<?php the_post_thumbnail_url( $full ); ?> )">
                    <div class="work-column-overlay"></div>
                    <div class="column-content">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </div>
                    <span id="button-<?php echo $button_count; ?>" class="like-button"><i class="fa fa-heart"></i></span>
                </div>

            <?php endwhile; ?>
            <script>
                var $j = jQuery.noConflict();
                var buttonNumber = <?php echo $button_count; ?>;


                $j(document).ready(function(){
                    for (var x = 0; x <= buttonNumber; x++) {
                        if (jQuery.cookie('button-' + x) != null){
                            console.log(x);
                            $j("#button-" + x).addClass("liked");
                        }
                        else {

                        }
                    };

                    $j(".like-button").click(function() {
                        var buttonClicked = (this.id);
                        $j(this).toggleClass("liked");
                        jQuery.cookie(buttonClicked, 'active');
                    });

                    $j(".like-button.liked").click(function() {
                        var buttonClicked = (this.id);
                        $j.removeCookie(buttonClicked);
                    });

                });
            </script>
        </div>
    <?php else : ?>
        <p class="error">There are no posts for this category yet. Check back soon!</p>
    <?php endif; ?>
    <div class="clear"></div>
    </div>

<?php get_footer(); ?>
