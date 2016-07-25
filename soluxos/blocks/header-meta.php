<?php
/**
 	* @package WordPress
 	* @subpackage soluxos
*/
	$locale = get_locale();
?>
<?php if ((is_category()) || (is_archive())) :
$queried_object = get_queried_object(); 
$taxonomy = $queried_object->taxonomy;
$term_id = $queried_object->term_id;
$archivetitle = $queried_object->name;
$archivelink = get_category_link( $term_id );
	if(get_field("seo_title", $taxonomy . '_' . $term_id)):?>
		<title><?php the_field("seo_title", $taxonomy . '_' . $term_id); ?></title>
	<?php else : ?>
		<title><?php
			global $page, $paged;
			wp_title( '|', true, 'right' );
			bloginfo( 'name' );
			$site_description = get_bloginfo( 'description', 'display' );
			if ( $site_description && ( is_home() || is_front_page() ) )
				echo " | $site_description";
			if ( $paged >= 2 || $page >= 2 )
				echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
		?></title>
	<?php endif; ?>
<?php else : ?>
	<?php if(get_field('seo_title')): ?>
        <title><?php the_field('seo_title'); ?></title>
    <?php else : ?>
        <title><?php
            global $page, $paged;
            wp_title( '|', true, 'right' );
            bloginfo( 'name' );
            $site_description = get_bloginfo( 'description', 'display' );
            if ( $site_description && ( is_home() || is_front_page() ) )
                echo " | $site_description";
            if ( $paged >= 2 || $page >= 2 )
                echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
        ?></title>
    <?php endif; ?>
<?php endif; ?>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>

<?php if ((is_category()) || (is_archive())) : ?>
	<?php if(get_field("seo_description", $taxonomy . '_' . $term_id)): ?>
		<meta name="description" content="<?php the_field("seo_description", $taxonomy . '_' . $term_id); ?>">
		<meta name="dcterms.description" content="<?php the_field("seo_description", $taxonomy . '_' . $term_id); ?>">
	<?php endif; ?>
    <?php if(get_field("seo_keywords", $taxonomy . '_' . $term_id)): ?>
        <meta name="keywords" content="<?php the_field("seo_keywords", $taxonomy . '_' . $term_id); ?>">
    <?php else : ?>
        <meta name="keywords" content="<?php the_field('seo_keywords', 'options'); ?>">
    <?php endif; ?>

<?php else : ?>

	<?php if(get_field('seo_description')): ?>
        <meta name="description" content="<?php the_field('seo_description'); ?>">
        <meta name="dcterms.description" content="<?php the_field('seo_description'); ?>">
    <?php endif; ?>
    
    <?php if(get_field('seo_keywords')): ?>
        <meta name="keywords" content="<?php the_field('seo_keywords'); ?>">
    <?php elseif(get_field('seo_keywords', 'options')): ?>
        <meta name="keywords" content="<?php the_field('seo_keywords', 'options'); ?>">
    <?php endif; ?>

<?php endif; ?>

<meta name="dcterms.creator" content="<?php bloginfo( 'title' ); ?>">
<meta name="dcterms.subject" content="<?php the_field('seo_dc_subject', 'options'); ?>">
<meta name="dcterms.publisher" content="<?php bloginfo( 'title' ); ?>">
<meta name="dcterms.date" content="<?php the_modified_date('Y-m-d'); ?>">
<meta name="dcterms.language" content="<?php echo $locale; ?>">
<meta name="dcterms.coverage" content="Worldwide">
<meta itemprop="name" content="<?php bloginfo( 'title' ); ?>" />
<meta itemprop="description" content="<?php the_field('seo_dc_subject', 'options'); ?>" />

<?php if ((is_category()) || (is_archive())) : ?>
	<?php if(get_field("seo_title", $taxonomy . '_' . $term_id)): ?>
        <meta property="og:title" content="<?php the_field("seo_title", $taxonomy . '_' . $term_id); ?>" />
	<?php else : ?>
    	<meta property="og:title" content="<?php echo $archivetitle; ?>" />
    <?php endif; ?>
    <meta property="og:image" content="<?php bloginfo( 'template_url' ); ?>/images/logo-retina.png" />
<?php else : ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php if(get_field('seo_title')): ?>
        	<meta property="og:title" content="<?php the_field('seo_title'); ?>" />
        <?php else : ?>
        	<meta property="og:title" content="<?php the_title(); ?>" />
        <?php endif; ?>
        <?php if (has_post_thumbnail( $post->ID ) ): $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
			<meta property="og:image" content="<?php echo $image[0]; ?>" />
		<?php else : ?>
			<meta property="og:image" content="<?php bloginfo( 'template_url' ); ?>/images/logo-retina.png" />
		<?php endif; ?>
    <?php endwhile; endif; ?>
<?php endif; ?>
<meta property="og:site_name" content="<?php bloginfo( 'title' ); ?>"/>

<?php if ((is_category()) || (is_archive())) : ?>
	<meta property="og:url" content="<?php echo $archivelink; ?>" />
	<meta property="og:description" content="<?php the_field("seo_description", $taxonomy . '_' . $term_id); ?>" />
<?php else : ?>
	<meta property="og:url" content="<?php the_permalink(); ?>" />
	<meta property="og:description" content="<?php the_field('seo_description'); ?>" />
<?php endif; ?>
<meta property="og:type" content="website" />
<meta property="og:locale" content="<?php echo $locale; ?>" />
<meta property="article:author" content="<?php bloginfo( 'title' ); ?>" />
<meta property="article:publisher" content="<?php bloginfo( 'title' ); ?>" />

<link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/images/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="<?php bloginfo( 'template_url' ); ?>/images/apple-touch-icon.png" />
<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo( 'template_url' ); ?>/images/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo( 'template_url' ); ?>/images/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo( 'template_url' ); ?>/images/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo( 'template_url' ); ?>/images/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo( 'template_url' ); ?>/images/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo( 'template_url' ); ?>/images/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo( 'template_url' ); ?>/images/apple-touch-icon-152x152.png" />
<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo( 'template_url' ); ?>/images/apple-touch-icon-180x180.png" />

<?php the_field('seo_analytics_code', 'options'); ?>