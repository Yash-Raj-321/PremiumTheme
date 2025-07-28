<?php  

$wp_customize->add_section(
    'counter_area',
    array(
        'title' => __('Portfolio Section', 'ruh-premium' ),
        'panel' => 'ruh_premium_home_panel'
    )
);
  // ENABLE/DISABLE FEATURED SECTION
    $wp_customize->add_setting(
        'counter_area_disable',
        array(
            'sanitize_callback' => 'ruh_sanitize_text',
        )
    );
    $wp_customize->add_control(
        new Ruh_Switch_Control(
            $wp_customize,
            'counter_area_disable',
            array(
                'settings'      => 'counter_area_disable',
                'section'       => 'counter_area',
                'label'         => __( 'Counter Disable Section', 'ruh-premium' ),
                'on_off_label'  => array(
                    'on' => __( 'Yes', 'ruh-premium' ),
                    'off' => __( 'No', 'ruh-premium' )
                ),
            )
        )
    );

backgroundManager($wp_customize, 'counter', 'counter_area', $color='#fff', get_template_directory_uri().'/images/default-gray.png', 'img');


lzCustomLable($wp_customize, 'countersection_padding', 'counter_area', ' Section Padding');

$wp_customize->add_setting(
    'countersection_toppadding',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '4em', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'countersection_toppadding',
    array(
        'settings'      => 'countersection_toppadding',
        'section'       => 'counter_area',
        'type'          => 'text',
        'label'         => __( 'Top', 'ruh-premium' )
    )
);
$wp_customize->add_setting(
    'countersection_bottompadding',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '2em', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'countersection_bottompadding',
    array(
        'settings'      => 'countersection_bottompadding',
        'section'       => 'counter_area',
        'type'          => 'text',
        'label'         => __( 'Bottom', 'ruh-premium' )
    )
);

lzCustomLable($wp_customize, 'countersection_img', 'counter_area', ' Section Image');

$wp_customize->add_setting(
    'counter_image1',
    array(
        'sanitize_callback' => 'esc_url_raw'
    )
);

$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'counter_image1',
        array(
            'section' => 'counter_area',
            'settings' => 'counter_image1',
            'label' => __( 'Image 1', 'ruh' ),
            'description' => __('Recommended Image Size: 450X570px', 'ruh-premium')
        )
    )
);

$wp_customize->add_setting(
    'counter_image2',
    array(
        'sanitize_callback' => 'esc_url_raw'
    )
);

$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'counter_image2',
        array(
            'section' => 'counter_area',
            'settings' => 'counter_image2',
            'label' => __( 'Image 2', 'ruh' ),
            'description' => __('Recommended Image Size: 450X570px', 'ruh-premium')
        )
    )
);

$wp_customize->add_setting(
    'counter_image3',
    array(
        'sanitize_callback' => 'esc_url_raw'
    )
);

$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'counter_image3',
        array(
            'section' => 'counter_area',
            'settings' => 'counter_image3',
            'label' => __( 'Image 3', 'ruh' ),
            'description' => __('Recommended Image Size: 450X570px', 'ruh-premium')
        )
    )
);

$wp_customize->add_setting(
    'counter_maintitle_subtitle_heading',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
    )
);
$wp_customize->add_control(
    new Ruh_Customize_Heading(
        $wp_customize,
        'counter_maintitle_subtitle_heading',
        array(
            'settings'      => 'counter_maintitle_subtitle_heading',
            'section'       => 'counter_area',
            'label'         => __( 'Section Heading & Content ', 'ruh' ),
        )
    )
);

$wp_customize->add_setting(
    'counter_maintitle',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( 'Our Portfolio', 'ruh' )
    )
);
$wp_customize->add_control(
    'counter_maintitle',
    array(
        'settings'      => 'counter_maintitle',
        'section'       => 'counter_area', 
        'type'          => 'text',
        'label'         => __( 'Section Heading ', 'ruh' )
    )
);

addColorPalatOption($wp_customize, 'counter_HeadingClr', 'counter_area', 'Section Heading Color ', '#111944');

$wp_customize->add_setting(
    'counter_text',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words . which don not look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure .', 'ruh' )
    )
);
$wp_customize->add_control(
    'counter_text',
    array(
        'settings'      => 'counter_text',
        'section'       => 'counter_area', 
        'type'          => 'text',
        'label'         => __( 'Section Content ', 'ruh' )
    )
);

addColorPalatOption($wp_customize, 'counter_sHeadingClr', 'counter_area', 'Section Content Color ', '#000');