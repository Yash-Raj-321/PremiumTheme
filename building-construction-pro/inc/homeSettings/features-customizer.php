<?php 
    $wp_customize->add_section(
        'features_area',
        array(
            'title' => __( 'Mission & Vision Section', 'ruh-premium' ),
            'panel' => 'ruh_premium_home_panel'
        )
    );

    $wp_customize->add_setting(
        'features_area_disable',
        array(
            'sanitize_callback' => 'ruh_sanitize_text',
        )
    );
    $wp_customize->add_control(
        new Ruh_Switch_Control(
            $wp_customize,
            'features_area_disable',
            array(
                'settings'      => 'features_area_disable',
                'section'       => 'features_area',
                'label'         => __( 'Disable Section', 'ruh-premium' ),
                'on_off_label'  => array(
                    'on' => __( 'Yes', 'ruh-premium' ),
                    'off' => __( 'No', 'ruh-premium' )
                ),
            )
        )
    ); 

backgroundManager($wp_customize, 'featuresus', 'features_area', $color='#fff', get_template_directory_uri().'/images/default.png', 'img');

lzCustomLable($wp_customize, 'featuresarea_padding', 'features_area', 'Section Padding');

$wp_customize->add_setting(
    'features_areaTpadding',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '8em', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'features_areaTpadding',
    array(
        'settings'      => 'features_areaTpadding',
        'section'       => 'features_area',
        'type'          => 'text',
        'label'         => __( 'Top', 'ruh-premium' )
    )
);
$wp_customize->add_setting(
    'features_areaBpadding',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '2em', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'features_areaBpadding',
    array(
        'settings'      => 'features_areaBpadding',
        'section'       => 'features_area',
        'type'          => 'text',
        'label'         => __( 'Bottom', 'ruh-premium' )
    )
);

$wp_customize->add_setting(
    'fea_maintitle_subtitle_heading',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
    )
);
$wp_customize->add_control(
    new Ruh_Customize_Heading(
        $wp_customize,
        'fea_maintitle_subtitle_heading',
        array(
            'settings'      => 'fea_maintitle_subtitle_heading',
            'section'       => 'features_area',
            'label'         => __( 'Section Vision Heading', 'ruh' ),
        )
    )
);

$wp_customize->add_setting(
    'fea_maintitle',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( 'Vision', 'ruh' )
    )
);
$wp_customize->add_control(
    'fea_maintitle',
    array(
        'settings'      => 'fea_maintitle',
        'section'       => 'features_area', 
        'type'          => 'text',
        'label'         => __( 'Section Heading', 'ruh' )
    )
);

addColorPalatOption($wp_customize, 'features_area_heading', 'features_area', 'Vision Heading Color', '#000');

$wp_customize->add_setting(
    'vision_image',
    array(
        'sanitize_callback' => 'esc_url_raw'
    )
);

$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'vision_image',
        array(
            'section' => 'features_area',
            'settings' => 'vision_image',
            'description' => __('Recommended Image Size: 290X400px', 'ruh-premium')
        )
    )
);

addColorPalatOption($wp_customize, 'features_area_vision_box1', 'features_area', 'Image Before Box Color 1', '#3230AF');
addColorPalatOption($wp_customize, 'features_area_vision_box2', 'features_area', 'Image Before Box Color 1', '#b88aff');

$wp_customize->add_setting('ruh_vision_npp_heading',array('sanitize_callback' => 'ruh_sanitize_text'));
$wp_customize->add_control(
    new Ruh_Customize_Heading(
        $wp_customize,
        'ruh_vision_npp_heading',
        array(
            'settings'      => 'ruh_vision_npp_heading',
            'section'       => 'features_area',
            'label'         => __( 'Number Of Points', 'ruh' ),
        )
    )
);    
$wp_customize->add_setting('ruh_vision_npp_count',array('sanitize_callback' => 'ruh_sanitize_text','default' => 2));
$wp_customize->add_control(
    'ruh_vision_npp_count',
    array(
        'settings'      => 'ruh_vision_npp_count',
        'section'       => 'features_area',
        'type'          => 'select',
        'label'         => __( 'Number Of Plan To Show', 'ruh' ),
        'choices'=>array(1,2,3,4,5,6,7,8)
    )
);

//FEATURED PAGES
for( $i = 1; $i <= 8; $i++ ){
    $wp_customize->add_setting(
        'ruh_vision_header'.$i,
        array(
            'sanitize_callback' => 'ruh_sanitize_text'
        )
    );
    $wp_customize->add_control(
        new Ruh_Customize_Heading(
            $wp_customize,
            'ruh_vision_header'.$i,
            array(
                'settings'      => 'ruh_vision_header'.$i,
                'section'       => 'features_area',
                'label'         => __( 'Our Step Box ', 'ruh' ).$i
            )
        )
    );

lzAddElement($wp_customize, 'ruh_vision_page_no_'.$i, 'features_area', $type = 'text', $label="Number", $callback ='ruh_sanitize_text', $default='01');

lzAddElement($wp_customize, 'ruh_vision_page_title_'.$i, 'features_area', $type = 'text', $label="Title", $callback ='ruh_sanitize_text', $default='Vision');

lzAddElement($wp_customize, 'ruh_vision_page_text_'.$i, 'features_area', $type = 'text', $label="Text", $callback ='ruh_sanitize_text', $default='There are many variations of passages of Lorem Ipsum');

}

$wp_customize->add_setting(
    'fea_maintitle_subtitle_heading2',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
    )
);
$wp_customize->add_control(
    new Ruh_Customize_Heading(
        $wp_customize,
        'fea_maintitle_subtitle_heading2',
        array(
            'settings'      => 'fea_maintitle_subtitle_heading2',
            'section'       => 'features_area',
            'label'         => __( 'Color Options', 'ruh' ),
        )
    )
);
addColorPalatOption($wp_customize, 'features_area_no', 'features_area', 'List Number Color', '#fff');
addColorPalatOption($wp_customize, 'features_area_nobg1', 'features_area', 'List Number BG Color1', '#3230AF');
addColorPalatOption($wp_customize, 'features_area_nobg2', 'features_area', 'List Number BG Color2', '#b88aff');
addColorPalatOption($wp_customize, 'features_area_listtitle1', 'features_area', 'List Title Color', '#9f00de');
addColorPalatOption($wp_customize, 'features_area_listtext1', 'features_area', 'List Text Color', '#000');

$wp_customize->add_setting(
    'fea_maintitle_subtitle_heading1',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
    )
);
$wp_customize->add_control(
    new Ruh_Customize_Heading(
        $wp_customize,
        'fea_maintitle_subtitle_heading1',
        array(
            'settings'      => 'fea_maintitle_subtitle_heading1',
            'section'       => 'features_area',
            'label'         => __( 'Section Misson Heading', 'ruh' ),
        )
    )
);
$wp_customize->add_setting(
    'fea_maintitle1',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( 'Misson', 'ruh' )
    )
);
$wp_customize->add_control(
    'fea_maintitle1',
    array(
        'settings'      => 'fea_maintitle1',
        'section'       => 'features_area', 
        'type'          => 'text',
        'label'         => __( 'Section Heading', 'ruh' )
    )
);

addColorPalatOption($wp_customize, 'features_area_heading1', 'features_area', 'Mission Heading Color', '#000');

$wp_customize->add_setting(
    'feature_image',
    array(
        'sanitize_callback' => 'esc_url_raw'
    )
);

$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'feature_image',
        array(
            'section' => 'features_area',
            'settings' => 'feature_image',
            'description' => __('Recommended Image Size: 290X400px', 'ruh-premium')
        )
    )
);

addColorPalatOption($wp_customize, 'features_area_box1', 'features_area', 'Image Before Box Color 1', '#3230AF');
addColorPalatOption($wp_customize, 'features_area_box2', 'features_area', 'Image Before Box Color 1', '#b88aff');

$wp_customize->add_setting('ruh_mission_npp_heading',array('sanitize_callback' => 'ruh_sanitize_text'));
$wp_customize->add_control(
    new Ruh_Customize_Heading(
        $wp_customize,
        'ruh_mission_npp_heading',
        array(
            'settings'      => 'ruh_mission_npp_heading',
            'section'       => 'features_area',
            'label'         => __( 'Number Of Points', 'ruh' ),
        )
    )
);    
$wp_customize->add_setting('ruh_mission_npp_count',array('sanitize_callback' => 'ruh_sanitize_text','default' => 2));
$wp_customize->add_control(
    'ruh_mission_npp_count',
    array(
        'settings'      => 'ruh_mission_npp_count',
        'section'       => 'features_area',
        'type'          => 'select',
        'label'         => __( 'Number Of Plan To Show', 'ruh' ),
        'choices'=>array(1,2,3,4,5,6,7,8)
    )
);

//FEATURED PAGES
for( $i = 1; $i <= 8; $i++ ){
    $wp_customize->add_setting(
        'ruh_mission_header'.$i,
        array(
            'sanitize_callback' => 'ruh_sanitize_text'
        )
    );
    $wp_customize->add_control(
        new Ruh_Customize_Heading(
            $wp_customize,
            'ruh_mission_header'.$i,
            array(
                'settings'      => 'ruh_mission_header'.$i,
                'section'       => 'features_area',
                'label'         => __( 'Our Step Box ', 'ruh' ).$i
            )
        )
    );

lzAddElement($wp_customize, 'ruh_mission_page_no_'.$i, 'features_area', $type = 'text', $label="Number", $callback ='ruh_sanitize_text', $default='01');

lzAddElement($wp_customize, 'ruh_mission_page_title_'.$i, 'features_area', $type = 'text', $label="Title", $callback ='ruh_sanitize_text', $default='Mission');

lzAddElement($wp_customize, 'ruh_mission_page_text_'.$i, 'features_area', $type = 'text', $label="Text", $callback ='ruh_sanitize_text', $default='There are many variations of passages of Lorem Ipsum');

}

$wp_customize->add_setting(
    'fea_maintitle_subtitle_heading3',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
    )
);
$wp_customize->add_control(
    new Ruh_Customize_Heading(
        $wp_customize,
        'fea_maintitle_subtitle_heading3',
        array(
            'settings'      => 'fea_maintitle_subtitle_heading3',
            'section'       => 'features_area',
            'label'         => __( 'Color Options', 'ruh' ),
        )
    )
);
addColorPalatOption($wp_customize, 'features_area_no1', 'features_area', 'List Number Color', '#fff');
addColorPalatOption($wp_customize, 'features_area_nobg12', 'features_area', 'List Number BG Color1', '#3230AF');
addColorPalatOption($wp_customize, 'features_area_nobg21', 'features_area', 'List Number BG Color2', '#b88aff');
addColorPalatOption($wp_customize, 'features_area_listtitle2', 'features_area', 'List Title Color', '#9f00de');
addColorPalatOption($wp_customize, 'features_area_listtext2', 'features_area', 'List Text Color', '#000');