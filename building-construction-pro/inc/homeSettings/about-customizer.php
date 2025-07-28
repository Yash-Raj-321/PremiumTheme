<?php 
    $wp_customize->add_section(
        'about_area',
        array(
            'title' => __( 'About Us Section', 'ruh-premium' ),
            'panel' => 'ruh_premium_home_panel'
        )
    );
    $wp_customize->add_setting(
        'about_area_disable',
        array(
            'sanitize_callback' => 'ruh_sanitize_text',
        )
    );
    $wp_customize->add_control(
        new Ruh_Switch_Control(
            $wp_customize,
            'about_area_disable',
            array(
                'settings'      => 'about_area_disable',
                'section'       => 'about_area',
                'label'         => __( 'Disable Section', 'ruh-premium' ),
                'on_off_label'  => array(
                    'on' => __( 'Yes', 'ruh-premium' ),
                    'off' => __( 'No', 'ruh-premium' )
                ),
            )
        )
    ); 

backgroundManager($wp_customize, 'aboutus', 'about_area', $color='#fff', get_template_directory_uri().'/images/default-gray.png', 'img');

lzCustomLable($wp_customize, 'aboutarea_padding', 'about_area', 'Section Padding');

$wp_customize->add_setting(
    'about_areaTpadding',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '5em', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'about_areaTpadding',
    array(
        'settings'      => 'about_areaTpadding',
        'section'       => 'about_area',
        'type'          => 'text',
        'label'         => __( 'Top', 'ruh-premium' )
    )
);
$wp_customize->add_setting(
    'about_areaBpadding',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '3em', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'about_areaBpadding',
    array(
        'settings'      => 'about_areaBpadding',
        'section'       => 'about_area',
        'type'          => 'text',
        'label'         => __( 'Bottom', 'ruh-premium' )
    )
);


$wp_customize->add_setting(
    'about_title_heading',
    array(
        'sanitize_callback' => 'ruh_sanitize_text'
    )
);
$wp_customize->add_control(
    new Ruh_Customize_Heading(
        $wp_customize,
        'about_title_heading',
        array(
            'settings'      => 'about_title_heading',
            'section'       => 'about_area',
            'label'         => __( ' Section Left Side', 'ruh-premium' ),
        )
    )
);    

$wp_customize->add_setting(
    'about_image_heading',
    array(
        'sanitize_callback' => 'ruh_sanitize_text'
    )
);
$wp_customize->add_control(
    new Ruh_Customize_Heading(
        $wp_customize,
        'about_image_heading',
        array(
            'settings'      => 'about_image_heading',
            'section'       => 'about_area',
            'label'         => __( 'Section Image', 'ruh-premium' ),
        )
    )
);

$wp_customize->add_setting(
    'about_image',
    array(
        'sanitize_callback' => 'esc_url_raw'
    )
);

$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'about_image',
        array(
            'section' => 'about_area',
            'settings' => 'about_image',
            'description' => __('Recommended Image Size: 560X700px', 'ruh-premium')
        )
    )
);

$wp_customize->add_setting(
    'imgyear',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '95%', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'imgyear',
    array(
        'settings'      => 'imgyear',
        'section'       => 'about_area',
        'type'          => 'text',
        'label'         => __( 'Year', 'ruh-premium' )
    )
);

addColorPalatOption($wp_customize, 'about_secsimgTxtbg1', 'about_area', 'Section Image Text BG Color 1 ', '#3230AF');
addColorPalatOption($wp_customize, 'about_secsimgTxtbg2', 'about_area', 'Section Image Text BG Color 2 ', '#9c68ee');

addColorPalatOption($wp_customize, 'about_secsimgTxt', 'about_area', 'Section Image Text Color ', '#fff');

lzCustomLable($wp_customize, 'aboutarea_rightclr', 'about_area', 'Section Right Side');

$wp_customize->add_setting(
    'about_title',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( 'About Us', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'about_title',
    array(
        'settings'      => 'about_title',
        'section'       => 'about_area',
        'type'          => 'textarea',
        'label'         => __( 'Title', 'ruh-premium' )
    )
);

addColorPalatOption($wp_customize, 'about_area_sectitle_clr', 'about_area', 'Section Title Color ', '#111944');


$wp_customize->add_setting(
    'about_text',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words . which don not look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure .', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'about_text',
    array(
        'settings'      => 'about_text',
        'section'       => 'about_area',
        'type'          => 'textarea',
        'label'         => __( 'Section Text', 'ruh-premium' )
    )
);

$wp_customize->add_setting(
    'about_text2',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words . which don not look even slightly believable.', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'about_text2',
    array(
        'settings'      => 'about_text2',
        'section'       => 'about_area',
        'type'          => 'textarea',
        'label'         => __( 'Section Text', 'ruh-premium' )
    )
);

addColorPalatOption($wp_customize, 'about_area_text', 'about_area', 'Section Text Color', '#000');

$wp_customize->add_setting(
    'aboutbtntext',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( 'Learn More', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'aboutbtntext',
    array(
        'settings'      => 'aboutbtntext',
        'section'       => 'about_area',
        'type'          => 'text',
        'label'         => __( 'Button Text', 'ruh-premium' )
    )
);

$wp_customize->add_setting(
    'aboutbtnurl',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '#', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'aboutbtnurl',
    array(
        'settings'      => 'aboutbtnurl',
        'section'       => 'about_area',
        'type'          => 'url',
        'label'         => __( 'Button Url', 'ruh-premium' )
    )
);

addColorPalatOption($wp_customize, 'about_area_btn_text', 'about_area', 'Button Text Color', '#fff');
addColorPalatOption($wp_customize, 'about_area_btn_bg1', 'about_area', 'Button BG Color 1', '#3230AF');
addColorPalatOption($wp_customize, 'about_area_btn_bg2', 'about_area', 'Button BG Color 2', '#7B41D6');