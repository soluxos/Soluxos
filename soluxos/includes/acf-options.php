<?php 

// ACF Options page

if(function_exists('acf_add_options_page')) { 
	acf_add_options_page();
	acf_add_options_sub_page('SEO');
}

if( function_exists('acf_set_options_page_capability') )
{
	acf_set_options_page_capability( 'manage_options' );
}

// Analytics code and DC terms subject field - requires SEO options page

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_55b8f8f45be0e',
	'title' => 'SEO Meta Data',
	'fields' => array (
		array (
			'key' => 'field_55b8f98bbe111',
			'label' => 'SEO Title',
			'name' => 'seo_title',
			'type' => 'text',
			'instructions' => 'Add the page title. Max 60 chars.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => 60,
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_55b8f935be110',
			'label' => 'SEO Description',
			'name' => 'seo_description',
			'type' => 'text',
			'instructions' => 'Add the SEO description, this will appear as the page subject in Google search results. Max 160 chars.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => 160,
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_55b8f90576828',
			'label' => 'SEO Keywords',
			'name' => 'seo_keywords',
			'type' => 'text',
			'instructions' => 'Enter keywords separated by commas.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
	),
	// Add additional post types here for SEO terms
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
		),
		array (
			array (
				'param' => 'taxonomy',
				'operator' => '==',
				'value' => 'all',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_55b8f763171e1',
	'title' => 'SEO Options',
	'fields' => array (
		array (
			'key' => 'field_55b8fa2d3dad9',
			'label' => 'SEO Keywords',
			'name' => 'seo_keywords',
			'type' => 'text',
			'instructions' => 'Add keywords separated by commas. These will be set globally and can be overridden on each page.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_55b8f815dd0b2',
			'label' => 'DC Terms Subject',
			'name' => 'seo_dc_subject',
			'type' => 'text',
			'instructions' => 'Enter the topic of the website here.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_55b8f78bdd0b1',
			'label' => 'Analytics Code',
			'name' => 'seo_analytics_code',
			'type' => 'textarea',
			'instructions' => 'Add analytics codes to appear in the header here.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-options-seo',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
));

endif; ?>