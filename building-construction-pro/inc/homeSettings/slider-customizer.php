<?php  

$RuhSliderSingleChoice = getFitnessPostsType('slider');
$wp_customize->add_section(
    'slider_section',
    array(
        'title' => __( 'Slider Section', 'Ruh' ),
        'panel' => 'ruh_premium_home_panel',
        'priority' =>18
    )
);
$wp_customize->add_setting(
    'slider_section_show_content',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
    )
);
$wp_customize->add_control(
    new Ruh_Switch_Control(
        $wp_customize,
        'slider_section_show_content',
        array(
            'settings'      => 'slider_section_show_content',
            'section'       => 'slider_section',
            'label'         => __( 'Hide Title And Description On Slider', 'Ruh' ),
            'on_off_label'  => array(
                'on' => __( 'No', 'Ruh' ),
                'off' => __( 'Yes', 'Ruh' )
            ),
        )
    )
);
$wp_customize->add_setting('slider_section_lbl', array('sanitize_callback'=>'ruh_sanitize_text'));
$wp_customize->add_control(
    new Ruh_Info_Text( 
        $wp_customize,
        'slider_section_lbl',
        array(
            'settings'      => 'slider_section_lbl',
            'section'       => 'slider_section',
            'label'         => __( 'Note:', 'Ruh' ),  
            'description'   => __( 'The page featured image works as a banner and the title & content work as a slider caption. You can add this from the Slider menu. <br/> Recommended Image Size: 1500X650', 'Ruh' ),
        )
    )
);


lzCustomLable($wp_customize, 'slidersarea_Overlay', 'slider_section', 'Opacity Setting');

$wp_customize->add_setting(
    'slider_areaOpacity',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '1', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'slider_areaOpacity',
    array(
        'settings'      => 'slider_areaOpacity',
        'section'       => 'slider_section',
        'type'          => 'text',
        'label'         => __( 'Opacity', 'ruh-premium' )
    )
);

addColorPalatOption($wp_customize, 'slider_bg_color', 'slider_section', 'Slider Overlay Color', '#fff');


lzCustomLable($wp_customize, 'ruh_sliderotherclrs', 'slider_section', 'Slider Colors');


addColorPalatOption($wp_customize, 'slider_titleColor', 'slider_section', 'Slider Title Color', '#000');

addColorPalatOption($wp_customize, 'slider_titlehgClr', 'slider_section', 'Slider Title Highlight Color', '#9648e5');

addColorPalatOption($wp_customize, 'slider_SubtitleColor', 'slider_section', 'Slider Text Color', '#555555');
// =============

lzCustomLable($wp_customize, 'ruh_sliderArrowbtn', 'slider_section', 'Slider Button ');

addColorPalatOption($wp_customize, 'slider_slidebtnicnclr', 'slider_section', 'Sliding Button Color', '#fff');

addColorPalatOption($wp_customize, 'slider_slidebtnbgclr1', 'slider_section', 'Sliding Button BG Color 1', '#3230AF');

addColorPalatOption($wp_customize, 'slider_slidebtnbgclr2', 'slider_section', 'Sliding Button BG Color 2', '#7B41D6');