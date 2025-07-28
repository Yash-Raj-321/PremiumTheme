<?php
/**
 * Createing a bog pannel for customizer
 *
 *
 */

$ruh_categories = get_categories(array('hide_empty' => 0));
foreach ($ruh_categories as $ruh_category) {
	$ruh_cat[$ruh_category->term_id] = $ruh_category->cat_name;
}

// CREATING A SECTION IN CUSTOMIZER
$wp_customize->add_section(
	'ruh_premium_blog_section',
	array(
		'title' => __( 'Blog Section', 'Ruh Premium' ),
        // 'panel' => 'ruh_premium_home_panel'
		'priority' =>19
	)
);

$wp_customize->add_setting(
	'ruh_premium_blog_section_disable',
	array(
		'sanitize_callback' => 'ruh_sanitize_text',
	)
);
$wp_customize->add_control(
	new Ruh_Switch_Control(
		$wp_customize,
		'ruh_premium_blog_section_disable',
		array(
			'settings'      => 'ruh_premium_blog_section_disable',
			'section'       => 'ruh_premium_blog_section',
			'label'         => __( 'Show Title and description at top', 'Ruh Premium' ),
			'on_off_label'  => array(
				'on' => __( 'Yes', 'Ruh Premium' ),
				'off' => __( 'No', 'Ruh Premium' )
			),
		)
	)
);
$wp_customize->add_setting(
	'ruh_blog_title_heading',
	array(
		'sanitize_callback' => 'ruh_sanitize_text'
	)
);
$wp_customize->add_control(
	new Ruh_Customize_Heading(
		$wp_customize,
		'ruh_blog_title_heading',
		array(
			'settings'      => 'ruh_blog_title_heading',
			'section'       => 'ruh_premium_blog_section',
			'label'         => __( 'Blog Title & description', 'Ruh Premium' ),
		)
	)
);
//BLOG PAGE TITLE
$wp_customize->add_setting('ruh_blog_title', array('sanitize_callback' => 'ruh_sanitize_text'));
$wp_customize->add_control('ruh_blog_title', array('settings'=>'ruh_blog_title', 'section'=>'ruh_premium_blog_section','type'=>'text', 'label'=> __('Blog page title', 'Ruh Premium')));
// BLOG PAGE DESCRIPTION
$wp_customize->add_setting('ruh_blog_desc', array('sanitize_callback' => 'ruh_sanitize_text'));
$wp_customize->add_control('ruh_blog_desc', array('settings'=>'ruh_blog_desc', 'section'=>'ruh_premium_blog_section','type'=>'textarea', 'label'=> __('Blog page description', 'Ruh Premium')));
// ADDING THE CATEGORY TO SELECT
$wp_customize->add_setting('ruh_blog_categories', array('sanitize_callback' => 'ruh_sanitize_text'));
$wp_customize->add_control(
	new Ruh_Customize_Checkbox_Multiple(
        $wp_customize,
        'ruh_blog_categories',
        array(
            'label' => __('Exclude Category From Blog Post', 'total'),
            'section' => 'ruh_premium_blog_section',
            'settings' => 'ruh_blog_categories',
            'choices' => $ruh_cat
        )
    )
);
