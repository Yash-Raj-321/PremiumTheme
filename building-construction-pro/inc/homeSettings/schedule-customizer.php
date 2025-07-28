<?php 
    $wp_customize->add_section(
        'schedule_area',
        array(
            'title' => __( 'Schedule Section', 'ruh-premium' ),
            'panel' => 'ruh_premium_home_panel'
        )
    );

    $wp_customize->add_setting(
        'schedule_area_disable',
        array(
            'sanitize_callback' => 'ruh_sanitize_text',
        )
    );
    $wp_customize->add_control(
        new Ruh_Switch_Control(
            $wp_customize,
            'schedule_area_disable',
            array(
                'settings'      => 'schedule_area_disable',
                'section'       => 'schedule_area',
                'label'         => __( 'Disable Section', 'ruh-premium' ),
                'on_off_label'  => array(
                    'on' => __( 'Yes', 'ruh-premium' ),
                    'off' => __( 'No', 'ruh-premium' )
                ),
            )
        )
    ); 

backgroundManager($wp_customize, 'scheduleus', 'schedule_area', $color='#111944', get_template_directory_uri().'/images/default.png', 'img');

// lzCustomLable($wp_customize, 'schedulearea_padding', 'schedule_area', 'Section Padding');

// $wp_customize->add_setting(
//     'schedule_areaTpadding',
//     array(
//         'sanitize_callback' => 'ruh_sanitize_text',
//         'default'           => __( '3em', 'ruh-premium' )
//     )
// );
// $wp_customize->add_control(
//     'schedule_areaTpadding',
//     array(
//         'settings'      => 'schedule_areaTpadding',
//         'section'       => 'schedule_area',
//         'type'          => 'text',
//         'label'         => __( 'Top', 'ruh-premium' )
//     )
// );
// $wp_customize->add_setting(
//     'schedule_areaBpadding',
//     array(
//         'sanitize_callback' => 'ruh_sanitize_text',
//         'default'           => __( '3em', 'ruh-premium' )
//     )
// );
// $wp_customize->add_control(
//     'schedule_areaBpadding',
//     array(
//         'settings'      => 'schedule_areaBpadding',
//         'section'       => 'schedule_area',
//         'type'          => 'text',
//         'label'         => __( 'Bottom', 'ruh-premium' )
//     )
// );


//lzCustomLable($wp_customize, 'abtright', 'schedule_area' , 'Right Side');

// $wp_customize->add_setting('scheduleus_npp_heading',array('sanitize_callback' => 'ruh_sanitize_text'));
// $wp_customize->add_control(
//     new Ruh_Customize_Heading(
//         $wp_customize,
//         'scheduleus_npp_heading',
//         array(
//             'settings'      => 'scheduleus_npp_heading',
//             'section'       => 'schedule_area',
//             'label'         => __( 'Number Of Schedule Box ', 'ruh-premium' ),
//         )
//     )
// );    
// $wp_customize->add_setting('scheduleus_npp_count',array('sanitize_callback' => 'ruh_sanitize_text','default' => 1));
// $wp_customize->add_control(
//     'scheduleus_npp_count',
//     array(
//         'settings'      => 'scheduleus_npp_count',
//         'section'       => 'schedule_area',
//         'type'          => 'select',
//         'label'         => __( 'Number Of Schedule Box To Show ', 'ruh-premium' ),
//         'choices'=>array(1,2,3,4)
//     )
// );

//schedule PAGES
for( $i = 1; $i <= 1; $i++ ){
    $wp_customize->add_setting(
        'scheduleus_header'.$i,
        array(
            'sanitize_callback' => 'ruh_sanitize_text'
        )
    );
    $wp_customize->add_control(
        new Ruh_Customize_Heading(
            $wp_customize,
            'scheduleus_header'.$i,
            array(
                'settings'      => 'scheduleus_header'.$i,
                'section'       => 'schedule_area',
                'label'         => __( 'Schedule Box ', 'ruh-premium' ).$i
            )
        )
    );

     $wp_customize->add_setting(
        'scheduleus_page_icon'.$i,
        array(
            'default'           => 'fa fa-clock-o',
            'sanitize_callback' => 'ruh_sanitize_text'
        )
    );        
    $wp_customize->add_control(
        new Ruh_Fontawesome_Icon_Chooser(
            $wp_customize,
            'scheduleus_page_icon'.$i,
            array(
                'settings'      => 'scheduleus_page_icon'.$i,
                'section'       => 'schedule_area',
                'type'          => 'icon',
                'label'         => __( 'FontAwesome Icon', 'ruh-premium' ),
            )
        )
    );
//lzAddImageElement($wp_customize, 'scheduleus_page_icon'.$i, 'schedule_area', $label="Recommended Image Size: 270X175px");

lzAddElement($wp_customize, 'scheduleus_page_title'.$i, 'schedule_area', $type = 'text', $label="Title", $callback ='ruh_sanitize_text', $default='Quick Response Times');

lzAddElement($wp_customize, 'scheduleus_page_text'.$i, 'schedule_area', $type = 'textarea', $label="Text", $callback ='ruh_sanitize_text', $default='There are many variations of passages of Lorem Ipsum');

lzAddElement($wp_customize, 'ruh_schedule_page_url_'.$i, 'schedule_area', $type = 'text', $label=" Link", $callback ='esc_url', $default='Add link here');


}


lzCustomLable($wp_customize, 'schedulearea_clr', 'schedule_area', 'Schedule Section Color');

addColorPalatOption($wp_customize, 'schedule_icnclr', 'schedule_area', 'Icon Color', '#fff');

addColorPalatOption($wp_customize, 'schedule_icnbgclr', 'schedule_area', 'Icon BG Color', '#F4B504');

addColorPalatOption($wp_customize, 'schedule_titleclr', 'schedule_area', 'Title Color', '#fff');

addColorPalatOption($wp_customize, 'schedule_titlehvclr', 'schedule_area', 'Title Hover Color', '#F4B504');

addColorPalatOption($wp_customize, 'schedule_textclr', 'schedule_area', 'Text Color', '#fff');

