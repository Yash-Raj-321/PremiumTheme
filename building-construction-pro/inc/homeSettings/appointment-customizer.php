<?php
// START CONTACT SECTION 
$wp_customize->add_section(
	'appoi_section',
	array(
		'title'         => __( 'Contact Section', 'Ruh Premium' ), 
		'panel'   => 'ruh_premium_home_panel',
	)
);
    //ENABLE/DISABLE CONTACT SECTION
$wp_customize->add_setting(
	'appoi_disable',
	array(
		'sanitize_callback' => 'ruh_sanitize_text',
		'default' => 'off'
	)
);
$wp_customize->add_control(
	new Ruh_Switch_Control(
		$wp_customize,
		'appoi_disable',
		array(
			'settings'      => 'appoi_disable',
			'section'       => 'appoi_section',
			'label'         => __( 'Disable Section', 'Ruh Premium' ),
			'on_off_label'  => array(
				'on' => __( 'Yes', 'Ruh Premium' ),
				'off' => __( 'No', 'Ruh Premium' )
			)   
		)
	)
);

backgroundManager($wp_customize, 'appointment', 'appoi_section', $color='#fff', get_template_directory_uri().'/images/slider-banner.jpg', 'color');

lzCustomLable($wp_customize, 'appoi_sectionnpadding', 'appoi_section', 'Section Padding ');

$wp_customize->add_setting(
    'appoinmentsection_toppadding',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '5em', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'appoinmentsection_toppadding',
    array(
        'settings'      => 'appoinmentsection_toppadding',
        'section'       => 'appoi_section',
        'type'          => 'text',
        'label'         => __( 'Top ', 'ruh-premium' )
    )
);

$wp_customize->add_setting(
    'appoinmentsection_bottompadding',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '5em', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'appoinmentsection_bottompadding',
    array(
        'settings'      => 'appoinmentsection_bottompadding',
        'section'       => 'appoi_section',
        'type'          => 'text',
        'label'         => __( 'Bottom ', 'ruh-premium' )
    )
);

lzCustomLable($wp_customize, 'app-secimg', 'appoi_section', 'Section Image ');

$wp_customize->add_setting(
    'contact_image',
    array(
        'sanitize_callback' => 'esc_url_raw'
    )
);

$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'contact_image',
        array(
            'section' => 'appoi_section',
            'settings' => 'contact_image',
            'label' => __( 'Right Side Image', 'ruh' ),
            'description' => __('Recommended Image Size: 700X450px', 'ruh-premium')
        )
    )
);

lzCustomLable($wp_customize, 'app-secheading', 'appoi_section', 'Section Heading ');

$wp_customize->add_setting(
    'appform_maintitle',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( 'Our <br> Contact', 'Ruh' )
    )
);
$wp_customize->add_control(
    'appform_maintitle',
    array(
        'settings'      => 'appform_maintitle',
        'section'       => 'appoi_section',
        'type'          => 'text',
        'label'         => __( 'Section Heading', 'Ruh' )
    )
);

addColorPalatOption($wp_customize, 'app_secheadingclr', 'appoi_section', 'Section Heading Color', '#000');

// ===========Form Section ==========//

lzCustomLable($wp_customize, 'contactf', 'appoi_section', 'Form Section');

addColorPalatOption($wp_customize, 'inquiry_forminputtxtClr', 'appoi_section', 'Form Input Text / Placeholder Color', '#fff');

addColorPalatOption($wp_customize, 'inquiry_forminputbgColor', 'appoi_section', 'Form Input Border Color', '#fff');

addColorPalatOption($wp_customize, 'inquiry_formlabelColor', 'appoi_section', 'Form Label Color', '#fff');

addColorPalatOption($wp_customize, 'inquiry_formbuttontextColor', 'appoi_section', 'Form Button Text Color', '#fff');

addColorPalatOption($wp_customize, 'inquiry_formbuttontexthoverColor', 'appoi_section', 'Form Button Text Hover Color', '#F4B504');

//addColorPalatOption($wp_customize, 'inquiry_formbuttonbrdClr', 'appoi_section', 'Form Button Border Color', '#fac555');

addColorPalatOption($wp_customize, 'inquiry_formbuttonbgColor', 'appoi_section', 'Form Button BG Color', '#F4B504');

addColorPalatOption($wp_customize, 'inquiry_formbuttonbghoverColor', 'appoi_section', 'Form Button BG Hover Color', '#180360');

lzCustomLable($wp_customize, 'app_detailbg', 'appoi_section', 'Section Detail Box');

$wp_customize->add_setting(
    'infphtxt',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '+111 222 1111' )
    )
);
$wp_customize->add_control(
    'infphtxt',
    array(
        'settings'      => 'infphtxt',
        'section'       => 'appoi_section',
        'type'          => 'text',
        'label'         => __( 'Phone Number 1', 'Ruh' )
    )
);

$wp_customize->add_setting(
    'inftxt',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '869 U.S. 62 Business Mountain Home Arizona United States' )
    )
);
$wp_customize->add_control(
    'inftxt',
    array(
        'settings'      => 'inftxt',
        'section'       => 'appoi_section',
        'type'          => 'textarea',
        'label'         => __( 'Address Text', 'Ruh' )
    )
);

$wp_customize->add_setting(
    'infemiltxt',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( 'plumberWork@fakmail.com' )
    )
);
$wp_customize->add_control(
    'infemiltxt',
    array(
        'settings'      => 'infemiltxt',
        'section'       => 'appoi_section',
        'type'          => 'text',
        'label'         => __( 'Email Id 1', 'Ruh' )
    )
);

lzCustomLable($wp_customize, 'app_dlhsphclr', 'appoi_section', 'Detail Box Color');

addColorPalatOption($wp_customize, 'inquiry_btntxticnclr', 'appoi_section', 'Icon Color', '#fff');

addColorPalatOption($wp_customize, 'inquiry_btntxticnbgclr1', 'appoi_section', 'Icon BG Color 1', '#3230AF');
addColorPalatOption($wp_customize, 'inquiry_btntxticnbgclr2', 'appoi_section', 'Icon BG Color 2', '#b88aff');

addColorPalatOption($wp_customize, 'inquiry_btntxtclr', 'appoi_section', 'Text , Email , Phone Color', '#111944');

addColorPalatOption($wp_customize, 'inquiry_btntxthvclr', 'appoi_section', 'Phone No Text Hover Color', '#F4B504');

