<?php
/**
 * Createing a contact us page pannel for customizer
 *
 */

// CREATING A SECTION IN CUSTOMIZER
$wp_customize->add_section(
	'ruh_premium_contactus_section',
	array(
		'title' => __( 'Contact Us Page', 'ruh-premium' ),
        // 'panel' => 'ruh_premium_home_panel'
		'priority' =>20
	)
);



$wp_customize->add_setting(
        'contactus_form_heading2',
        array(
            'sanitize_callback' => 'ruh_sanitize_text'
        )
    );
$wp_customize->add_control(
    new Ruh_Customize_Heading(
        $wp_customize,
        'contactus_form_heading2',
        array(
            'settings'      => 'contactus_form_heading2',
            'section'       => 'ruh_premium_contactus_section',
            'label'         => __( 'Form Setting ', 'ruh-premium' ),
        )
    )
);


$wp_customize->add_setting(
	'ruh_contactus_shortcode_lbl',
	array(
		'sanitize_callback' => 'ruh_sanitize_text',
		'default'           => __( 'CONTACT US', 'Ruh Premium' )
	)
);
$wp_customize->add_control(
	'ruh_contactus_shortcode_lbl',
	array(
		'settings'      => 'ruh_contactus_shortcode_lbl',
		'section'       => 'ruh_premium_contactus_section',
		'type'          => 'text',
		'label'         => __( 'Form Box Title', 'Ruh Premium' )
	)
);

$wp_customize->add_setting(
	'shortcodetxt',
	array(
		'sanitize_callback' => 'ruh_sanitize_text',
		'default'           => __( 'There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some words etc.', 'Ruh Premium' )
	)
);
$wp_customize->add_control(
	'shortcodetxt',
	array(
		'settings'      => 'shortcodetxt',
		'section'       => 'ruh_premium_contactus_section',
		'type'          => 'textarea',
		'label'         => __( 'Form Box Text', 'Ruh Premium' )
	)
);


$wp_customize->add_setting(
	'ruh_contactus_shortcode',
	array(
		'sanitize_callback' => 'ruh_sanitize_text',
		'default'           => __( '[your Shortcode]' )
	)
);
$wp_customize->add_control(
	'ruh_contactus_shortcode',
	array(
		'settings'      => 'ruh_contactus_shortcode',
		'section'       => 'ruh_premium_contactus_section',
		'type'          => 'textarea',
		'label'         => __( 'Form Shortcode Here', 'Ruh Premium' )
	)
);

addColorPalatOption($wp_customize, 'ruh_contactus_formVGClr', 'ruh_premium_contactus_section', 'Form Box BG Color', '#E5E6EB');

addColorPalatOption($wp_customize, 'ruh_contactus_formtitleColor', 'ruh_premium_contactus_section', 'Form Box Title Color', '#111640');

addColorPalatOption($wp_customize, 'ruh_contactus_titlebxbrdClr', 'ruh_premium_contactus_section', 'Form Title Box Border Color', '#e6ce88');

addColorPalatOption($wp_customize, 'ruh_contactus_formborderbottomColor', 'ruh_premium_contactus_section', 'Form Text & Placeholde Border Color', '#8a8c99');

addColorPalatOption($wp_customize, 'ruh_contactus_formlabelColor', 'ruh_premium_contactus_section', 'Form Label Color', '#454261');

addColorPalatOption($wp_customize, 'ruh_contactus_formtextplaceColor', 'ruh_premium_contactus_section', 'Form Text & Placeholder Color', '#454261');

addColorPalatOption($wp_customize, 'ruh_contactus_formbgClr', 'ruh_premium_contactus_section', 'Form Text & Placeholder BG Color', '#E5E6EB');

addColorPalatOption($wp_customize, 'ruh_contactus_formbtnColor', 'ruh_premium_contactus_section', 'Form Button Text Color', '#fff');

addColorPalatOption($wp_customize, 'ruh_contactus_formbtnhoverColor', 'ruh_premium_contactus_section', 'Form Button Text Hover Color', '#F4B504');

addColorPalatOption($wp_customize, 'ruh_contactus_formbtnbgColor', 'ruh_premium_contactus_section', 'Form Button BG Color', '#F4B504');

addColorPalatOption($wp_customize, 'ruh_contactus_formbtnbghoverColor', 'ruh_premium_contactus_section', 'Form Button BG Hover Color', '#111944');

lzCustomLable($wp_customize, 'ruh_sec_detailbx', 'ruh_premium_contactus_section', 'Detail Box ');

$wp_customize->add_setting(
	'ruh_contactus_phonetitle',
	array(
		'sanitize_callback' => 'ruh_sanitize_text',
		'default'           => __( 'PHONE', 'Ruh Premium' )
	)
);
$wp_customize->add_control(
	'ruh_contactus_phonetitle',
	array(
		'settings'      => 'ruh_contactus_phonetitle',
		'section'       => 'ruh_premium_contactus_section',
		'type'          => 'text',
		'label'         => __( 'Phone Title', 'Ruh Premium' )
	)
);

$wp_customize->add_setting(
	'ruh_contactus_phone',
	array(
		'sanitize_callback' => 'ruh_sanitize_text',
		'default'           => __( '+ 111 2222 333 88', 'Ruh Premium' )
	)
);
$wp_customize->add_control(
	'ruh_contactus_phone',
	array(
		'settings'      => 'ruh_contactus_phone',
		'section'       => 'ruh_premium_contactus_section',
		'type'          => 'text',
		'label'         => __( 'Phone No 1', 'Ruh Premium' )
	)
);


$wp_customize->add_setting(
	'ruh_contactus_phone2',
	array(
		'sanitize_callback' => 'ruh_sanitize_text',
		'default'           => __( '+ 111 2222 333 88', 'Ruh Premium' )
	)
);
$wp_customize->add_control(
	'ruh_contactus_phone2',
	array(
		'settings'      => 'ruh_contactus_phone2',
		'section'       => 'ruh_premium_contactus_section',
		'type'          => 'text',
		'label'         => __( 'Phone No 2', 'Ruh Premium' )
	)
);

$wp_customize->add_setting(
	'ruh_contactus_addresstitle',
	array(
		'sanitize_callback' => 'ruh_sanitize_text',
		'default'           => __( 'ADDRESS', 'Ruh Premium' )
	)
);
$wp_customize->add_control(
	'ruh_contactus_addresstitle',
	array(
		'settings'      => 'ruh_contactus_addresstitle',
		'section'       => 'ruh_premium_contactus_section',
		'type'          => 'text',
		'label'         => __( 'Address Title', 'Ruh Premium' )
	)
);

$wp_customize->add_setting(
	'ruh_contactus_address',
	array(
		'sanitize_callback' => 'ruh_sanitize_text',
		'default'           => __( 'Add Address here..', 'Ruh Premium' )
	)
);
$wp_customize->add_control(
	'ruh_contactus_address',
	array(
		'settings'      => 'ruh_contactus_address',
		'section'       => 'ruh_premium_contactus_section',
		'type'          => 'textarea',
		'label'         => __( 'Address', 'Ruh Premium' )
	)
);



$wp_customize->add_setting(
	'ruh_contactus_emailtitle',
	array(
		'sanitize_callback' => 'ruh_sanitize_text',
		'default'           => __( 'E-MAIL', 'Ruh Premium' )
	)
);
$wp_customize->add_control(
	'ruh_contactus_emailtitle',
	array(
		'settings'      => 'ruh_contactus_emailtitle',
		'section'       => 'ruh_premium_contactus_section',
		'type'          => 'text',
		'label'         => __( 'Email ID Title', 'Ruh Premium' )
	)
);

$wp_customize->add_setting(
	'ruh_contactus_email',
	array(
		'sanitize_callback' => 'ruh_sanitize_text',
		'default'           => __( 'plumberwork@fakemail.com', 'Ruh Premium' )
	)
);
$wp_customize->add_control(
	'ruh_contactus_email',
	array(
		'settings'      => 'ruh_contactus_email',
		'section'       => 'ruh_premium_contactus_section',
		'type'          => 'text',
		'label'         => __( 'Email ID 1', 'Ruh Premium' )
	)
);


$wp_customize->add_setting(
	'ruh_contactus_email2',
	array(
		'sanitize_callback' => 'ruh_sanitize_text',
		'default'           => __( 'workplumber@nfamail.com', 'Ruh Premium' )
	)
);
$wp_customize->add_control(
	'ruh_contactus_email2',
	array(
		'settings'      => 'ruh_contactus_email2',
		'section'       => 'ruh_premium_contactus_section',
		'type'          => 'text',
		'label'         => __( 'Email ID 2', 'Ruh Premium' )
	)
);


lzCustomLable($wp_customize, 'ruh_sec_contpageclr', 'ruh_premium_contactus_section', 'Detail Box Color ');

addColorPalatOption($wp_customize, 'ruh_contactus_dbxclr', 'ruh_premium_contactus_section', 'Detail Box BG Color', '#111944');

addColorPalatOption($wp_customize, 'ruh_contactus_dicnClr', 'ruh_premium_contactus_section', 'Icon Color', '#111944');

addColorPalatOption($wp_customize, 'ruh_contactus_dicnbgClr', 'ruh_premium_contactus_section', 'Icon BG Color', '#fff');

addColorPalatOption($wp_customize, 'ruh_contactus_dtitleClr', 'ruh_premium_contactus_section', 'Title Color', '#fff');

addColorPalatOption($wp_customize, 'ruh_contactus_dphemClr', 'ruh_premium_contactus_section', 'Text , Address , Email , Phone No. Color', '#fff');

addColorPalatOption($wp_customize, 'ruh_contactus_dphemhvClr', 'ruh_premium_contactus_section', 'Email , Phone No. Hover Color', '#F4B504');



// ADDRESS GOOGLE/MSN/OTHER MAP IFRAME OR EMBADE CODE
// $wp_customize->add_setting('ruh_contactus_iframe_lbl', array('sanitize_callback' => 'ruh_sanitize_text'));
// $wp_customize->add_control(
// 	new Ruh_Customize_Heading($wp_customize, 'ruh_contactus_iframe_lbl',
// 		array(
// 			'settings'      => 'ruh_contactus_iframe_lbl',
// 			'section'       => 'ruh_premium_contactus_section',
// 			'label'         => __( 'Contact Us Address', 'ruh-premium' ),
// 		)
// 	)
// );

// field for addeding the map code

// $wp_customize->add_setting('ruh_contactus_embade', array(/*'sanitize_callback' => 'esc_url_raw',*/ 'default'=>'Add Your Map Embade Code'));
// $wp_customize->add_control('ruh_contactus_embade', array('settings'=>'ruh_contactus_embade', 'section'=>'ruh_premium_contactus_section','type'=>'textarea', 'label'=> __('Code For Map', 'ruh-premium')));

