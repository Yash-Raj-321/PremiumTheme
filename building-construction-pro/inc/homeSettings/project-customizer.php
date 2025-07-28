<?php 
$wp_customize->add_section(
    'project_area',
    array(
        'title'         => __( 'Project Section', 'Ruh' ),
        'panel'   => 'ruh_premium_home_panel',
    )
);

$wp_customize->add_setting(
    'project_area_disable',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default' => 'off'
    )
);
$wp_customize->add_control(
    new Ruh_Switch_Control(
        $wp_customize,
        'project_area_disable',
        array(
            'settings'      => 'project_area_disable',
            'section'       => 'project_area',
            'label'         => __( 'Disable Section', 'Ruh' ),
            'on_off_label'  => array(
                'on' => __( 'Yes', 'Ruh' ),
                'off' => __( 'No', 'Ruh' )
            )   
        )
    )
);

backgroundManager($wp_customize, 'project', 'project_area', $color='#ffffff', get_template_directory_uri().'/images/default-gray.png', 'img');

lzCustomLable($wp_customize, 'ruh_sec_projectectionpadding', 'project_area', 'Section Padding');

$wp_customize->add_setting(
    'project_areaTpadding',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '8em', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'project_areaTpadding',
    array(
        'settings'      => 'project_areaTpadding',
        'section'       => 'project_area',
        'type'          => 'text',
        'label'         => __( 'Top', 'ruh-premium' )
    )
);
$wp_customize->add_setting(
    'project_areaBpadding',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '4em', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'project_areaBpadding',
    array(
        'settings'      => 'project_areaBpadding',
        'section'       => 'project_area',
        'type'          => 'text',
        'label'         => __( 'Bottom', 'ruh-premium' )
    )
);


$wp_customize->add_setting(
    'project_maintitle_subtitle_heading',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
    )
);
$wp_customize->add_control(
    new Ruh_Customize_Heading(
        $wp_customize,
        'project_maintitle_subtitle_heading',
        array(
            'settings'      => 'project_maintitle_subtitle_heading',
            'section'       => 'project_area',
            'label'         => __( 'Heading & Sub Heading', 'Ruh' ),
        )
    )
);




$wp_customize->add_setting(
    'project_maintitle',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( 'About Our Project', 'Ruh' )
    )
);
$wp_customize->add_control(
    'project_maintitle',
    array(
        'settings'      => 'project_maintitle',
        'section'       => 'project_area', 
        'type'          => 'text',
        'label'         => __( 'Heading', 'Ruh' )
    )
);

addColorPalatOption($wp_customize, 'projectarattle', 'project_area', 'Heading Color ', '#111944');

$wp_customize->add_setting('project_area_lbl2', array('sanitize_callback'=>'ruh_sanitize_text'));
$wp_customize->add_control(
    new Ruh_Info_Text( 
        $wp_customize,
        'project_area_lbl2',
        array(
            'settings'      => 'project_area_lbl2',
            'section'       => 'project_area',
            'label'         => __( 'Note2:', 'Ruh' ),  
            'description'   => __( 'Use Shortcode [project] to show all project in a page & images use same height', 'Ruh' ),
        )
    )
);


$wp_customize->add_setting('project_npp_heading',array('sanitize_callback' => 'ruh_sanitize_text'));
$wp_customize->add_control(
    new Ruh_Customize_Heading(
        $wp_customize,
        'project_npp_heading',
        array(
            'settings'      => 'project_npp_heading',
            'section'       => 'project_area',
            'label'         => __( 'Number of project to show', 'Ruh' ),
        )
    )
);    
$wp_customize->add_setting('project_npp_count',array('sanitize_callback' => 'ruh_sanitize_text','default' => 2));
$wp_customize->add_control(
    'project_npp_count',
    array(
        'settings'      => 'project_npp_count',
        'section'       => 'project_area',
        'type'          => 'select',
        'label'         => __( 'Number Of Project To Show', 'Ruh' ),
        'choices'=>array(1,2,3,4,5,6,7,8)
    )
);


$projectsSingleChoice[] = 'Select';
for( $i = 1; $i <= 8; $i++ ){
    $wp_customize->add_setting(
        'project_heading'.$i,
        array(
            'sanitize_callback' => 'ruh_sanitize_text'
        )
    );
    $wp_customize->add_control(
        new Ruh_Customize_Heading(
            $wp_customize,
            'project_heading'.$i,
            array(
                'settings'      => 'project_heading'.$i,
                'section'       => 'project_area',
                'label'         => __( 'Project ', 'Ruh' ).$i,
            )
        )
    );
    if(is_array($projectsSingleChoice)){
        $wp_customize->add_setting(
            'project_page'.$i,
            array(
                'sanitize_callback' => 'absint'
            )
        );
        $wp_customize->add_control(
            'project_page'.$i,
            array(
                'settings'      => 'project_page'.$i,
                'section'       => 'project_area',
                'type'=> 'select',
                'label'         => __( 'Select A Project Box', 'Ruh' ),
                'choices' => $projectsSingleChoice,
            )
        );

    }else{
        $wp_customize->add_setting('project_area_lbl'.$i, array('sanitize_callback'=>'ruh_sanitize_text'));
        $wp_customize->add_control(
            new Ruh_Info_Text( 
                $wp_customize,
                'project_area_lbl'.$i,
                array(
                    'settings'      => 'project_area_lbl'.$i,
                    'section'       => 'project_area',
                    'label'         => __( 'Note:', 'Ruh' ),    
                    'description'   => __( '<strong>Changes will not reflect unless you select the project Page.</strong> <br/>Please add the project from "project menu" and then select project to show information. ', 'Ruh' ),
                )
            )
        );
    }
 
}

lzCustomLable($wp_customize, 'projectimage', 'project_area', 'Section Image');

$wp_customize->add_setting(
    'project_image',
    array(
        'sanitize_callback' => 'esc_url_raw'
    )
);

$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'project_image',
        array(
            'section' => 'project_area',
            'settings' => 'project_image',
            'label' => __( 'Right Side Image', 'ruh' ),
            'description' => __('Recommended Image Size: 800pxX650px', 'ruh-premium')
        )
    )
);

lzCustomLable($wp_customize, 'projectcolor', 'project_area', 'Section Color');

addColorPalatOption($wp_customize, 'projectecttle', 'project_area', ' Title Color ', '#111944');
addColorPalatOption($wp_customize, 'projectecttlebdr', 'project_area', ' Title Border Color ', '#4337b8');
addColorPalatOption($wp_customize, 'projectectext', 'project_area', ' Text Color ', '#979797');
addColorPalatOption($wp_customize, 'projectecimgbefore1', 'project_area', ' Image Before BG Color 1', '#3230AF');
addColorPalatOption($wp_customize, 'projectecimgbefore2', 'project_area', ' Image Before BG Color 2', '#b88aff');
