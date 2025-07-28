<?php 
$wp_customize->add_section(
    'service_area',
    array(
        'title'         => __( 'Services Section', 'ruh' ),
        'panel'   => 'ruh_premium_home_panel',
    )
);
$wp_customize->add_setting(
    'service_area_disable',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default' => 'off'
    )
);
$wp_customize->add_control(
    new Ruh_Switch_Control(
        $wp_customize,
        'service_area_disable',
        array(
            'settings'      => 'service_area_disable',
            'section'       => 'service_area',
            'label'         => __( 'Disable Section', 'ruh' ),
            'on_off_label'  => array(
                'on' => __( 'Yes', 'ruh' ),
                'off' => __( 'No', 'ruh' )
            )   
        )
    )
);

backgroundManager($wp_customize, 'service', 'service_area', $color='#fff', get_template_directory_uri().'/images/default.png', 'img');

lzCustomLable($wp_customize, 'ruh_sec_servicessectionpadding', 'service_area', 'Section Padding');

$wp_customize->add_setting(
    'service_areaTpadding',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '6em', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'service_areaTpadding',
    array(
        'settings'      => 'service_areaTpadding',
        'section'       => 'service_area',
        'type'          => 'text',
        'label'         => __( 'Top', 'ruh-premium' )
    )
);
$wp_customize->add_setting(
    'service_areaBpadding',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '3em', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'service_areaBpadding',
    array(
        'settings'      => 'service_areaBpadding',
        'section'       => 'service_area',
        'type'          => 'text',
        'label'         => __( 'Bottom', 'ruh-premium' )
    )
);


$wp_customize->add_setting(
    'services_maintitle_subtitle_heading',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
    )
);
$wp_customize->add_control(
    new Ruh_Customize_Heading(
        $wp_customize,
        'services_maintitle_subtitle_heading',
        array(
            'settings'      => 'services_maintitle_subtitle_heading',
            'section'       => 'service_area',
            'label'         => __( 'Section Heading', 'ruh' ),
        )
    )
);

$wp_customize->add_setting(
    'services_maintitle',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( 'About Our Service', 'ruh' )
    )
);
$wp_customize->add_control(
    'services_maintitle',
    array(
        'settings'      => 'services_maintitle',
        'section'       => 'service_area', 
        'type'          => 'text',
        'label'         => __( 'Section Bold Heading Text', 'ruh' )
    )
);

addColorPalatOption($wp_customize, 'sersec_heading_clr', 'service_area', 'Section Heading Color ', '#000');

$wp_customize->add_setting('service_area_lbl2', array('sanitize_callback'=>'ruh_sanitize_text'));
$wp_customize->add_control(
    new Ruh_Info_Text( 
        $wp_customize,
        'service_area_lbl2',
        array(
            'settings'      => 'service_area_lbl2',
            'section'       => 'service_area',
            'label'         => __( 'Note 2 :', 'ruh' ),  
            'description'   => __( 'Use Shortcode [SERVICES] to show all services in a page', 'ruh' ),
        )
    )
);


$wp_customize->add_setting('service_npp_heading',array('sanitize_callback' => 'ruh_sanitize_text'));
$wp_customize->add_control(
    new Ruh_Customize_Heading(
        $wp_customize,
        'service_npp_heading',
        array(
            'settings'      => 'service_npp_heading',
            'section'       => 'service_area',
            'label'         => __( 'Number Of Services To Show', 'ruh' ),
        )
    )
);    
$wp_customize->add_setting('service_npp_count',array('sanitize_callback' => 'ruh_sanitize_text','default' => 2));
$wp_customize->add_control(
    'service_npp_count',
    array(
        'settings'      => 'service_npp_count',
        'section'       => 'service_area',
        'type'          => 'select',
        'label'         => __( 'Number Of Services To Show', 'ruh' ),
        'choices'=>array(1,2,3,4,5,6,7,8)
    )
);

$ServicesSingleChoice[] = 'Select';

for( $i = 1; $i <= 8; $i++ ){
    $wp_customize->add_setting(
        'services_heading'.$i,
        array(
            'sanitize_callback' => 'ruh_sanitize_text'
        )
    );
    $wp_customize->add_control(
        new Ruh_Customize_Heading(
            $wp_customize,
            'services_heading'.$i,
            array(
                'settings'      => 'services_heading'.$i,
                'section'       => 'service_area',
                'label'         => __( 'Service ', 'ruh' ).$i,
            )
        )
    );
    if(is_array($ServicesSingleChoice)){
        $wp_customize->add_setting(
            'services_page'.$i,
            array(
                'sanitize_callback' => 'absint'
            )
        );
        $wp_customize->add_control(
            'services_page'.$i,
            array(
                'settings'      => 'services_page'.$i,
                'section'       => 'service_area',
                'type'=> 'select',
                'label'         => __( 'Select A Service Box ', 'ruh' ),
                'choices' => $ServicesSingleChoice,
            )
        );


    }else{
        $wp_customize->add_setting('service_area_lbl'.$i, array('sanitize_callback'=>'ruh_sanitize_text'));
        $wp_customize->add_control(
            new Ruh_Info_Text( 
                $wp_customize,
                'service_area_lbl'.$i,
                array(
                    'settings'      => 'service_area_lbl'.$i,
                    'section'       => 'service_area',
                    'label'         => __( 'Note:', 'ruh' ),    
                    'description'   => __( '<strong>Changes will not reflect unless you select the Service Page.</strong> <br/>Please add the Services from "Services menu" and then select Services to show information.', 'ruh' ),
                )
            )
        );
    }
}

lzCustomLable($wp_customize, 'ruh_sec_servicesimages', 'service_area', 'Service Section Images');

$wp_customize->add_setting(
    'service_image1',
    array(
        'sanitize_callback' => 'esc_url_raw'
    )
);

$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'service_image1',
        array(
            'section' => 'service_area',
            'settings' => 'service_image1',
            'label' => __( 'Left Side Image', 'ruh' ),
            'description' => __('Recommended Image Size: 700X450px', 'ruh-premium')
        )
    )
);

$wp_customize->add_setting(
    'service_image2',
    array(
        'sanitize_callback' => 'esc_url_raw'
    )
);

$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'service_image2',
        array(
            'section' => 'service_area',
            'settings' => 'service_image2',
            'label' => __( 'Right Side Image', 'ruh' ),
            'description' => __('Recommended Image Size: 700X450px', 'ruh-premium')
        )
    )
);

lzCustomLable($wp_customize, 'ruh_sec_servicesclr', 'service_area', 'Service Section Color');

addColorPalatOption($wp_customize, 'servicearea_no_clr', 'service_area', 'Number Color ', '#fff');

addColorPalatOption($wp_customize, 'servicearea_nobg_clr1', 'service_area', 'Number BG Color 1', '#3230AF');
addColorPalatOption($wp_customize, 'servicearea_nobg_clr2', 'service_area', 'Number BG Color 2', '#b88aff');

addColorPalatOption($wp_customize, 'services_secTitleClr', 'service_area', 'Title Color ', '#111944');

addColorPalatOption($wp_customize, 'services_secTitlehvClr', 'service_area', 'Title Hover Color ', '#000');

addColorPalatOption($wp_customize, 'services_sectxtlClr', 'service_area', 'Text Color ', '#111944');