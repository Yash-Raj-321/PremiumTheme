<?php   
$wp_customize->add_section(
	'team_area',
	array(
		'title'         => __( 'Team Section', 'ruh-premium' ),
		'panel'   => 'ruh_premium_home_panel',
	)
);
$wp_customize->add_setting(
	'team_area_disable',
	array(
		'sanitize_callback' => 'ruh_sanitize_text',
		'default' => 'off'
	)
);
$wp_customize->add_control(
	new Ruh_Switch_Control(
		$wp_customize,
		'team_area_disable',
		array(
			'settings'      => 'team_area_disable',
			'section'       => 'team_area',
			'label'         => __( 'Disable Section', 'ruh-premium' ),
			'on_off_label'  => array(
				'on' => __( 'Yes', 'ruh-premium' ),
				'off' => __( 'No', 'ruh-premium' )
			)   
		)
	)
);

backgroundManager($wp_customize, 'team', 'team_area', $color='#fff', get_template_directory_uri().'/images/default.png', 'img');

lzCustomLable($wp_customize, 'team_area_teamsectionpadding', 'team_area', 'Section Padding');

$wp_customize->add_setting(
    'team_areaTpadding',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '4em', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'team_areaTpadding',
    array(
        'settings'      => 'team_areaTpadding',
        'section'       => 'team_area',
        'type'          => 'text',
        'label'         => __( 'Top', 'ruh-premium' )
    )
);
$wp_customize->add_setting(
    'team_areaBpadding',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '4em', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'team_areaBpadding',
    array(
        'settings'      => 'team_areaBpadding',
        'section'       => 'team_area',
        'type'          => 'text',
        'label'         => __( 'Bottom', 'ruh-premium' )
    )
);

$wp_customize->add_setting(
	'ruh_team_title_subtitle_heading',
	array(
		'sanitize_callback' => 'ruh_sanitize_text',
	)
);
$wp_customize->add_control(
	new Ruh_Customize_Heading(
		$wp_customize,
		'ruh_team_title_subtitle_heading',
		array(
			'settings'      => 'ruh_team_title_subtitle_heading',
			'section'       => 'team_area',
			'label'         => __( 'Section Heading & Sub Heading', 'ruh-premium' ),
		)
	)
);


$wp_customize->add_setting(
	'team_title_title',
	array(
		'sanitize_callback' => 'ruh_sanitize_text',
		'default'           => __( 'Meet Our Team ', 'ruh-premium' )
	)
);
$wp_customize->add_control(
	'team_title_title',
	array(
		'settings'      => 'team_title_title',
		'section'       => 'team_area',
		'type'          => 'text',
		'label'         => __( 'Section Heading', 'ruh-premium' )
	)
);

addColorPalatOption($wp_customize, 'teamarea_secheadig_clr', 'team_area', 'Heading Color', '#111944');

/*for note text*/
$wp_customize->add_setting('team_area_lbl1', array('sanitize_callback'=>'ruh_sanitize_text'));
$wp_customize->add_control(
    new Ruh_Info_Text( 
        $wp_customize,
        'team_area_lbl1',
        array(
            'settings'      => 'team_area_lbl1',
            'section'       => 'team_area',
            'label'         => __( 'Note :', 'ruh' ),    
            'description'   => __( 'Just place the shortcode "[TEAMLIST]" in your page to Show all teams in a page & Set Team Member Images Of Equal Height.{230*230 ', 'ruh' ),
        )
    )
);

/*for note text*/

$wp_customize->add_setting('team_area_npp_heading',array('sanitize_callback' => 'ruh_sanitize_text'));
$wp_customize->add_control(
	new Ruh_Customize_Heading(
		$wp_customize,
		'team_area_npp_heading',
		array(
			'settings'      => 'team_area_npp_heading',
			'section'       => 'team_area',
			'label'         => __( 'Number Of Team Members', 'ruh-premium' ),
		)
	)
);    
$wp_customize->add_setting('team_area_npp_count',array('sanitize_callback' => 'ruh_sanitize_text','default' => 2));
$wp_customize->add_control(
	'team_area_npp_count',
	array(
		'settings'      => 'team_area_npp_count',
		'section'       => 'team_area',
		'type'          => 'select',
		'label'         => __( 'Number Of Team Members', 'ruh-premium' ),
		'choices'=>array(1,2,3,4,5,6,7,8)
	)
);

// TEAM PAGES
$TeamsSingleChoice[] = 'select';
for( $i = 1; $i <= 8; $i++ ){
	$wp_customize->add_setting(
		'team_area_heading'.$i,
		array(
			'sanitize_callback' => 'ruh_sanitize_text'
		)
	);
	$wp_customize->add_control(
		new Ruh_Customize_Heading(
			$wp_customize,
			'team_area_heading'.$i,
			array(
				'settings'      => 'team_area_heading'.$i,
				'section'       => 'team_area',
				'label'         => __( 'Team ', 'ruh-premium' ).$i,
			)
		)
	);
	if(is_array($TeamsSingleChoice)){
		$wp_customize->add_setting(
			'team_area_page'.$i,
			array(
				'sanitize_callback' => 'absint'
			)
		);
		$wp_customize->add_control(
			'team_area_page'.$i,
			array(
				'settings'      => 'team_area_page'.$i,
				'section'       => 'team_area',
				'type'=> 'select',
				'label'         => __( 'Select A Team Member', 'ruh-premium' ),
				'choices' => $TeamsSingleChoice,
			)
		);

	}
	else{
		$wp_customize->add_setting('team_area_lbl'.$i, array('sanitize_callback'=>'ruh_sanitize_text'));
		$wp_customize->add_control(
			new Ruh_Info_Text( 
				$wp_customize,
				'team_area_lbl'.$i,
				array(
					'settings'		=> 'team_area_lbl'.$i,
					'section'		=> 'team_area',
					'label'			=> __( 'Note:', 'ruh-premium' ),	
					'description'	=> __( '<strong>Changes will not reflect unless you select the Teams.</strong> <br/>Please add the teams from "Teams menu" and then select Team Member to show information.', 'ruh-premium' ),
				)
			)
		);
	}
}

lzCustomLable($wp_customize, 'team_area_teamsecclr', 'team_area', 'Team Section Color');
addColorPalatOption($wp_customize, 'Team_secNameCClr', 'team_area', 'Team Member Name Color', '#000');
addColorPalatOption($wp_customize, 'Team_secDesignationCClr', 'team_area', 'Team Designation Color', '#606060');
addColorPalatOption($wp_customize, 'Team_imgbgClr1', 'team_area', 'Team Image Before BG Color 1', '#3230AF');
addColorPalatOption($wp_customize, 'Team_imgbgClr2', 'team_area', 'Team Image Before BG Color 2', '#b88aff');