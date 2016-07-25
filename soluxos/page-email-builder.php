<?php
/**
 * @package WordPress
 * @subpackage soluxos
 */

get_header(); ?>

<?php get_template_part( 'blocks/content', 'flexible' ); ?>
<?php get_template_part( 'blocks/content', 'emails' ); ?>

<div class="email-builder">
	<div class="email-builder-menu">
		<div id="single-column"><span>Single Column</span></div>
	</div>
	<div class="email-builder-content">
		<pre id="email-builder-code">
			<p>
				
			</p>
		</pre>
	</div>
</div>



<?php get_footer(); ?>