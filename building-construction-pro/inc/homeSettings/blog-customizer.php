<?php
/**
 * Createing a bog pannel for customizer
 *
 *
 */
$categories = get_categories(array('hide_empty' => 0));
foreach ($categories as $category) {
	$cat[$category->term_id] = $category->cat_name;
}
/****************************/
// START BLOG SECTION FOR HOME PAGE
/*============BLOG PANEL============*/
$wp_customize->add_section(
	'blog_area',
	array(
		'title' => __( 'Blog Section', 'ruh-premium' ),
		'panel' => 'ruh_premium_home_panel',
     	//'priority' => '50',
	)
);
//ENABLE/DISABLE BLOG SECTION
$wp_customize->add_setting(
	'blog_section_disable',
	array(
		'sanitize_callback' => 'ruh_sanitize_text',
		'default' => 'off'
	)
);
$wp_customize->add_control(
	new Ruh_Switch_Control(
		$wp_customize,
		'blog_section_disable',
		array(
			'settings'      => 'blog_section_disable',
			'section'       => 'blog_area',
			'label'         => __( 'Disable Section', 'ruh-premium' ),
			'on_off_label'  => array(
				'on' => __( 'Yes', 'ruh-premium' ),
				'off' => __( 'No', 'ruh-premium' )
			)   
		)
	)
);

backgroundManager($wp_customize, 'blog', 'blog_area', $color='#fff', get_template_directory_uri().'/images/default-gray.png', 'img');


lzCustomLable($wp_customize, 'blog_area_blogsectionpadding', 'blog_area', 'Section Padding');

$wp_customize->add_setting(
    'blog_areaTpadding',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '3.5em', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'blog_areaTpadding',
    array(
        'settings'      => 'blog_areaTpadding',
        'section'       => 'blog_area',
        'type'          => 'text',
        'label'         => __( 'Top ', 'ruh-premium' )
    )
);
$wp_customize->add_setting(
    'blog_areaBpadding',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '4em', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'blog_areaBpadding',
    array(
        'settings'      => 'blog_areaBpadding',
        'section'       => 'blog_area',
        'type'          => 'text',
        'label'         => __( 'Bottom', 'ruh-premium' )
    )
);

$wp_customize->add_setting(
	'blog_title_subtitle_heading',
	array(
		'sanitize_callback' => 'ruh_sanitize_text'
	)
);
$wp_customize->add_control(
	new Ruh_Customize_Heading(
		$wp_customize,
		'blog_title_subtitle_heading',
		array(
			'settings'		=> 'blog_title_subtitle_heading',
			'section'       => 'blog_area',
			'label'         => __( 'Section Heading & Sub Heading', 'ruh-premium' ),
		)
	)
);

$wp_customize->add_setting(
	'blog_title',
	array(
		'sanitize_callback' => 'ruh_sanitize_text',
		'default'           => __( 'LATEST POST', 'ruh-premium' )
	)
);
$wp_customize->add_control(
	'blog_title',
	array(
		'settings'      => 'blog_title',
		'section'       => 'blog_area',
		'type'          => 'text',
		'label'         => __( 'Section Heading', 'ruh-premium' )
	)
);

addColorPalatOption($wp_customize, 'blogarea_sectitle_clr', 'blog_area', 'Section Heading Color', '#111944');

lzCustomLable($wp_customize, 'blog_area_blogspost', 'blog_area', 'Number Of Post ');
//BLOG SETTINGS
$wp_customize->add_setting(
	'blog_post_count',
	array(
		'default'           => '3',
		'sanitize_callback' => 'ruh_sanitize_choices'
	)
);
$wp_customize->add_control(
	new Ruh_Dropdown_Chooser(
		$wp_customize,
		'blog_post_count',
		array(
			'settings'      => 'blog_post_count',
			'section'       => 'blog_area',
			'label'         => __( 'Number Of Post To Show', 'ruh-premium' ),
			'choices'       => $ruh_post_count_choice
		)
	)
);

// $wp_customize->add_setting(
// 	'blog_cat_exclude',
// 	array(
// 		'sanitize_callback' => 'ruh_sanitize_text'
// 	)
// );
// $wp_customize->add_control(
// 	new Ruh_Customize_Checkbox_Multiple(
// 		$wp_customize,
// 		'blog_cat_exclude',
// 		array(
// 			'label' => __('Exclude Category from Blog Posts', 'ruh-premium'),
// 			'section' => 'blog_area',
// 			'settings' => 'blog_cat_exclude',
// 			'choices' => $ruh_cat
// 		)
// 	)
// );
// END BLOG SECTION FOR HOME PAGE
/****************************/


// CREATING A BLOG SECTION IN CUSTOMIZER FOR BLOG PAGES
$wp_customize->add_section(
	'premium_blog_area',
	array(
		'title' => __( 'Blog Page Settings', 'ruh-premium' ),
        // 'panel' => 'ruh_premium_home_panel'
		'priority' =>19
	)
);

$wp_customize->add_setting('blog_categories_settings', array('sanitize_callback' => 'ruh_sanitize_text'));
$wp_customize->add_control('blog_categories_settings', array(
    'settings' => 'blog_categories_settings',
    'label'    => __('Posts on Blog Page', 'ruh-premium'),
    'section'  => 'lpremium_blog_area',
    'type'     => 'radio',
    'choices'  => array(
        '0' => __('Excerpts','ruh-premium'),
        '1' => __('Full Posts','ruh-premium'),
    ),
));
// ADDING THE CATEGORY TO SELECT
$wp_customize->add_setting('ruh_blog_categories', array('sanitize_callback' => 'ruh_sanitize_text'));
$wp_customize->add_control(
	new Ruh_Customize_Checkbox_Multiple(
		$wp_customize,
		'ruh_blog_categories',
		array(
			'label' => __('Exclude Category From Blog Posts', 'ruh-premium'),
			'section' => 'premium_blog_area',
			'settings' => 'ruh_blog_categories',
			'choices' => $ruh_cat
		)
	)
);

lzCustomLable($wp_customize, 'blog_area_color', 'blog_area', 'Blog Section Color');

addColorPalatOption($wp_customize, 'blogarea_bxicnbxbgbrdclr', 'blog_area', 'Date Box Border Color', '#d3d7da');

addColorPalatOption($wp_customize, 'blogarea_bxicnbxbgclr', 'blog_area', 'Date Box Icon Color', '#F4B504');

addColorPalatOption($wp_customize, 'blogarea_bxdateclr', 'blog_area', 'Date Color', '#111944');

addColorPalatOption($wp_customize, 'blogarea_box_color', 'blog_area', 'Box BG Color', '#f2f3f5');

addColorPalatOption($wp_customize, 'blogarea_Title_color', 'blog_area', 'Title Color', '#111944');

addColorPalatOption($wp_customize, 'blogarea_Titlehover_color', 'blog_area', 'Title Hover Color', '#F4B504');

addColorPalatOption($wp_customize, 'blogarea_text_color', 'blog_area', 'Text Color', '#111944');


lzCustomLable($wp_customize, 'ruh_secblog_sbtnclr', 'blog_area', 'Section Button Setting');
$wp_customize->add_setting(
    'blog_button1',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( 'Read More', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'blog_button1',
    array(
        'settings'      => 'blog_button1',
        'section'       => 'blog_area',
        'type'          => 'text',
        'label'         => __( 'Button Text', 'ruh-premium' )
    )
);

addColorPalatOption($wp_customize, 'blogarea_btnarroclr', 'blog_area', 'Button Text Color', '#F4B504');

addColorPalatOption($wp_customize, 'blogarea_btnhvclr', 'blog_area', 'Button Text Hover Color', '#111944');

addColorPalatOption($wp_customize, 'blogarea_imghvclr', 'blog_area', 'Image Hover Color', '#111944');