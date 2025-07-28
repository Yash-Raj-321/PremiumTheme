<?php 

$lzGoogleFonts = getFonts(true);


$wp_customize->add_section(
	'ruh_premium_general_section',
	array(
		'title' => __( 'Font Setting', 'Ruh Premium' ),
		'panel' => 'ruh_general_panel'
	)
);

$wp_customize->add_setting(
	'ruh_general_headeing_font',
	array(
		'sanitize_callback'=> 'absint',
		'default' => '35'
	)
);
$wp_customize->add_control(
	new Ruh_Font_Chooser(
		$wp_customize,
		'ruh_general_headeing_font',
		array(
			'settings'=> 'ruh_general_headeing_font',
			'section' => 'ruh_premium_general_section',
			'label'=>__('Heading Fonts/Title Fonts', 'Ruh Premium'),
			'choices'=>$lzGoogleFonts
		)
	)
);

$wp_customize->add_setting(
	'ruh_general_text_font',
	array(
		'sanitize_callback'=> 'absint',
		'default' => '35'
	)
);
$wp_customize->add_control(
	new Ruh_Font_Chooser(
		$wp_customize,
		'ruh_general_text_font',
		array(
			'settings'=> 'ruh_general_text_font',
			'section' => 'ruh_premium_general_section',
			'label'=>__('Body/Text Font', 'Ruh Premium'),
			'choices'=>$lzGoogleFonts
		)
	)
);
