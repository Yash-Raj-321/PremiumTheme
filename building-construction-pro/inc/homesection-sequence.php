<?php 

// /HOME PAGE SECTION CHANGE SEQUENCE SETTINGS IN CUSTOMIZER
$wp_customize->add_section(
	'homepage_section_sequence_change_settings',
	array(
		'title' => __( 'Section Sequence', 'ruh-premium' ),
        // 'panel' => 'ruh_premium_home_panel'
		'priority' =>21
	)
);
$wp_customize->add_setting(
	'homesection_section1',
	array(
		'sanitize_callback' => 'ruh_sanitize_text',
		'default'           => __( 'schedule', 'ruh-premium' )
	)
);
$wp_customize->add_control(
	'homesection_section1',
	array(
		'settings'      => 'homesection_section1',
		'section'       => 'homepage_section_sequence_change_settings',
		'type'          => 'text',
		'label'         => __( 'Section 1', 'ruh-premium' )
	)
);

 
$wp_customize->add_setting(
	'homesection_section2',
	array(
		'sanitize_callback' => 'ruh_sanitize_text',
		'default'           => __( 'about', 'ruh-premium' )
	)
);
$wp_customize->add_control(
	'homesection_section2',
	array(
		'settings'      => 'homesection_section2',
		'section'       => 'homepage_section_sequence_change_settings',
		'type'          => 'text',
		'label'         => __( 'Section 2', 'ruh-premium' )
	)
);


$wp_customize->add_setting(
	'homesection_section3',
	array(
		'sanitize_callback' => 'ruh_sanitize_text',
		'default'           => __( 'features', 'ruh-premium' )
	)
);
$wp_customize->add_control(
	'homesection_section3',
	array(
		'settings'      => 'homesection_section3',
		'section'       => 'homepage_section_sequence_change_settings',
		'type'          => 'text',
		'label'         => __( 'Section 3', 'ruh-premium' )
	)
);


$wp_customize->add_setting(
	'homesection_section4',
	array(
		'sanitize_callback' => 'ruh_sanitize_text',
		'default'           => __( 'oursteps', 'ruh-premium' )
	)
);
$wp_customize->add_control(
	'homesection_section4',
	array(
		'settings'      => 'homesection_section4',
		'section'       => 'homepage_section_sequence_change_settings',
		'type'          => 'text',
		'label'         => __( 'Section 4', 'ruh-premium' )
	)
);


$wp_customize->add_setting(
	'homesection_section5',
	array(
		'sanitize_callback' => 'ruh_sanitize_text',
		'default'           => __( 'team', 'ruh-premium' )
	)
);
$wp_customize->add_control(
	'homesection_section5',
	array(
		'settings'      => 'homesection_section5',
		'section'       => 'homepage_section_sequence_change_settings',
		'type'          => 'text',
		'label'         => __( 'Section 5', 'ruh-premium' )
	)
);


$wp_customize->add_setting(
	'homesection_section6',
	array(
		'sanitize_callback' => 'ruh_sanitize_text',
		'default'           => __( 'counter', 'ruh-premium' )
	)
);
$wp_customize->add_control(
	'homesection_section6',
	array(
		'settings'      => 'homesection_section6',
		'section'       => 'homepage_section_sequence_change_settings',
		'type'          => 'text',
		'label'         => __( 'Section 6', 'ruh-premium' )
	)
);

$wp_customize->add_setting(
	'homesection_section7',
	array(
		'sanitize_callback' => 'ruh_sanitize_text',
		'default'           => __( 'project', 'ruh-premium' )
	)
);
$wp_customize->add_control(
	'homesection_section7',
	array(
		'settings'      => 'homesection_section7',
		'section'       => 'homepage_section_sequence_change_settings',
		'type'          => 'text',
		'label'         => __( 'Section 7', 'ruh-premium' )
	)
);

$wp_customize->add_setting(
	'homesection_section8',
	array(
		'sanitize_callback' => 'ruh_sanitize_text',
		'default'           => __( 'services', 'ruh-premium' )
	)
);
$wp_customize->add_control(
	'homesection_section8',
	array(
		'settings'      => 'homesection_section8',
		'section'       => 'homepage_section_sequence_change_settings',
		'type'          => 'text',
		'label'         => __( 'Section 8', 'ruh-premium' )
	)
);


$wp_customize->add_setting(
	'homesection_section9',
	array(
		'sanitize_callback' => 'ruh_sanitize_text',
		'default'           => __( 'appointment', 'ruh-premium' )
	)
);
$wp_customize->add_control(
	'homesection_section9',
	array(
		'settings'      => 'homesection_section9',
		'section'       => 'homepage_section_sequence_change_settings',
		'type'          => 'text',
		'label'         => __( 'Section 9', 'ruh-premium' )
	)
);


$wp_customize->add_setting(
	'homesection_section10',
	array(
		'sanitize_callback' => 'ruh_sanitize_text',
		'default'           => __( 'blog', 'ruh-premium' )
	)
);
$wp_customize->add_control(
	'homesection_section10',
	array(
		'settings'      => 'homesection_section10',
		'section'       => 'homepage_section_sequence_change_settings',
		'type'          => 'text',
		'label'         => __( 'Section 10', 'ruh-premium' )
	)
);

