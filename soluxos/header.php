<?php
/**
 * @package WordPress
 * @subpackage soluxos
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> itemscope itemtype="http://schema.org/LocalBusiness">
<head prefix="og: http://ogp.me/ns#; dcterms: http://purl.org/dc/terms/#">
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<?php get_template_part( 'blocks/header', 'meta' ); ?>
<?php wp_head();?>
<?php get_template_part( 'blocks/header', 'noscript' ); ?>
</head>

<body <?php body_class(); ?>>
<div id="header-span" class="full-width">
	<button type="button" class="tcon tcon-menu--xcross" aria-label="toggle menu">
	  <span class="tcon-menu__lines" aria-hidden="true"></span>
	  <span class="tcon-visuallyhidden">toggle menu</span>
	</button>
</div>
<div class="overlay-menu">
	<div class="column-holder">
	    <div class="column one">
	    	<?php wp_nav_menu( array( 'container_class' => 'nav', 'theme_location' => 'main_menu' ) ); ?>
	    </div>
	</div>
</div>
<?php if ( is_front_page() ): ?>
	<ul class="grid home">
		<li class="ot-letter-left one"><span data-letter="C">C</span></li>
		<li class="ot-letter-top two"><span data-letter="A">A</span></li>
		<li class="ot-letter-right three"><span data-letter="L">L</span></li>
		<li class="ot-letter-bottom four"><span data-letter="L">L</span></li>
		<li class="ot-letter-left five"><span data-letter="U">U</span></li>
		<li class="ot-letter-top six"><span data-letter="M">M</span></li>

		<li class="ot-letter-top seven"><span data-letter="W">W</span></li>
		<li class="ot-letter-right eight"><span data-letter="E">E</span></li>
		<li class="ot-letter-bottom nine"><span data-letter="B">B</span></li>
		<li class="ot-letter-left ten"><span data-letter=" "> </span></li>
		<li class="ot-letter-top eleven"><span data-letter=" "> </span></li>
		<li class="ot-letter-right twelve"><span data-letter=" "> </span></li>
		
		<li class="ot-letter-right thirteen"><span data-letter="D">D</span></li>
		<li class="ot-letter-bottom fourteen"><span data-letter="E">E</span></li>
		<li class="ot-letter-right fifteen"><span data-letter="S">S</span></li>
		<li class="ot-letter-bottom sixteen"><span data-letter="I">I</span></li>
		<li class="ot-letter-right seventeen"><span data-letter="G">G</span></li>
		<li class="ot-letter-bottom eighteen"><span data-letter="N">N</span></li>
	</ul>
<?php endif; ?>
<?php if ( is_page( 88 )): ?>
	<ul class="grid about">
		<li class="ot-letter-left one"><span data-letter="A">A</span></li>
		<li class="ot-letter-top two"><span data-letter="B">B</span></li>
		<li class="ot-letter-right three"><span data-letter="O">O</span></li>
		<li class="ot-letter-bottom four"><span data-letter="U">U</span></li>
		<li class="ot-letter-left five"><span data-letter="T">T</span></li>
		<li class="ot-letter-top six"><span data-letter=" "> </span></li>

		<li class="ot-letter-top seven"><span data-letter="C">C</span></li>
		<li class="ot-letter-right eight"><span data-letter="A">A</span></li>
		<li class="ot-letter-bottom nine"><span data-letter="L">L</span></li>
		<li class="ot-letter-left ten"><span data-letter="L">L</span></li>
		<li class="ot-letter-top eleven"><span data-letter="U">U</span></li>
		<li class="ot-letter-right twelve"><span data-letter="M">M</span></li>
		
		<li class="ot-letter-right thirteen"><span data-letter="H">H</span></li>
		<li class="ot-letter-bottom fourteen"><span data-letter="A">A</span></li>
		<li class="ot-letter-right fifteen"><span data-letter="R">R</span></li>
		<li class="ot-letter-bottom sixteen"><span data-letter="R">R</span></li>
		<li class="ot-letter-right seventeen"><span data-letter="O">O</span></li>
		<li class="ot-letter-bottom eighteen"><span data-letter="D">D</span></li>
	</ul>
<?php endif; ?>
<?php if ( is_page( 166 )): ?>
	<ul class="grid skills">
		<li class="ot-letter-left one"><span data-letter="A">A</span></li>
		<li class="ot-letter-top two"><span data-letter="L">L</span></li>
		<li class="ot-letter-right three"><span data-letter="L">L</span></li>
		<li class="ot-letter-bottom four"><span data-letter=" "> </span></li>
		<li class="ot-letter-left five"><span data-letter=" "> </span></li>
		<li class="ot-letter-top six"><span data-letter=" "> </span></li>

		<li class="ot-letter-top seven"><span data-letter="M">M</span></li>
		<li class="ot-letter-right eight"><span data-letter="Y">Y</span></li>
		<li class="ot-letter-bottom nine"><span data-letter=" "> </span></li>
		<li class="ot-letter-left ten"><span data-letter=" "> </span></li>
		<li class="ot-letter-top eleven"><span data-letter=" "> </span></li>
		<li class="ot-letter-right twelve"><span data-letter=" "> </span></li>
		
		<li class="ot-letter-right thirteen"><span data-letter="S">S</span></li>
		<li class="ot-letter-bottom fourteen"><span data-letter="K">K</span></li>
		<li class="ot-letter-right fifteen"><span data-letter="I">I</span></li>
		<li class="ot-letter-bottom sixteen"><span data-letter="L">L</span></li>
		<li class="ot-letter-right seventeen"><span data-letter="L">L</span></li>
		<li class="ot-letter-bottom eighteen"><span data-letter="S">S</span></li>
	</ul>
<?php endif; ?>
<div id="content">