<?php

$wp_customize->add_panel(
	'ruh_general_panel',
	array(
		'priority' => 19,
		'title' => __('General Configuration', 'Ruh Premium')
	)
);

//STATIC FRONT PAGE
$wp_customize->add_section( 'static_front_page', array(
	'title' => __( 'Static Front Page', 'Ruh Premium' ),
	'panel' => 'ruh_general_panel',
	'description' => __( 'Your theme supports a static front page.', 'Ruh Premium'),
) );

//TITLE AND TAGLINE SETTINGS
$wp_customize->add_section( 'title_tagline', array(
	'title' => __( 'Site Logo/Title/Tagline', 'Ruh Premium' ),
	'panel' => 'ruh_general_panel',
) );

addColorPalatOption($wp_customize, 'header_SiteTitleClr', 'title_tagline', 'Title Color', '#F4B504');
addColorPalatOption($wp_customize, 'header_SiteTaglineClr', 'title_tagline', 'Tagline Color', '#000');

$wp_customize->add_setting( 'head_tagline_display' , array( 'default' => true, 'transport' => 'refresh', ) ); 
$wp_customize->add_control( 'head_tagline_display', array( 'label' => 'Tagline Display', 'section' => 'title_tagline', 'settings' => 'head_tagline_display', 'type' => 'radio', 'choices' => array( 'show' => 'Show ', 'hide' => 'Hide ', ), ) ); 


//BACKGROUND IMAGE
$wp_customize->add_section( 'background_image', array(
	'title' => __( 'Background Image Setting', 'Ruh Premium' ),
	'panel' => 'ruh_general_panel',
) );

//Header IMAGE
$wp_customize->add_section( 'header_image', array(
	'title' => __( 'Header Image', 'Ruh Premium' ),
	'panel' => 'ruh_general_panel',
) );


//HEADER SETTINGS
$wp_customize->add_section(
	'header_settings',
	array(
		'title' => __( 'Header Settings', 'Ruh Premium' ),
		'panel' => 'ruh_general_panel',
	)
);

lzCustomLable($wp_customize, 'stickyheader_view', 'header_settings', 'Sticky Header Settings');
    //ENABLE/DISABLE STICKY HEADER
$wp_customize->add_setting(
    'ruh_sticky_header_enable',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default' => 'off'
    )
);

$wp_customize->add_control(
    new Ruh_Switch_Control(
        $wp_customize,
        'ruh_sticky_header_enable',
        array(
            'settings'      => 'ruh_sticky_header_enable',
            'section'       => 'header_settings',
            'label'         => __( 'Sticky Header', 'Ruh Premium' ),
            'on_off_label'  => array(
                'on' => __( 'Enable', 'ruh-premium' ),
                'off' => __( 'Disable', 'ruh-premium' )
            )   
        )
    )
);


$sectionHeader = 'header_settings';


lzCustomLable($wp_customize, 'pages_logosetmaxwidth5', 'title_tagline', 'Set Logo Width & Height');

$wp_customize->add_setting(
    'pages_logoTopsetmaxwidth',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '100%', 'ruh-premium' )

    )
);

// logo width

$wp_customize->add_control(
    'pages_logoTopsetmaxwidth',
    array(
        'settings'      => 'pages_logoTopsetmaxwidth',
        'section'       => 'title_tagline',
        'type'          => 'range',
        'label'         => __( 'Width', 'ruh-premium' )
    )
);

// logo height

$wp_customize->add_setting(
    'pages_logoTopsetmaxheight',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'pages_logoTopsetmaxheight',
    array(
        'settings'      => 'pages_logoTopsetmaxheight',
        'section'       => 'title_tagline',
        'type'          => 'text',
        'label'         => __( 'Height ', 'ruh-premium' )
    )
);

lzCustomLable($wp_customize, 'ruh_headerlogo_margin', 'header_settings', 'Logo Margin');

$wp_customize->add_setting(
    'logo_logoTmargin',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '0px', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'logo_logoTmargin',
    array(
        'settings'      => 'logo_logoTmargin',
        'section'       => 'header_settings',
        'type'          => 'text',
        'label'         => __( 'Top', 'ruh-premium' )
    )
);

$wp_customize->add_setting(
    'logo_logoRmargin',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '0px', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'logo_logoRmargin',
    array(
        'settings'      => 'logo_logoRmargin',
        'section'       => 'header_settings',
        'type'          => 'text',
        'label'         => __( 'Right', 'ruh-premium' )
    )
);

$wp_customize->add_setting(
    'logo_logoBmargin',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '0px', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'logo_logoBmargin',
    array(
        'settings'      => 'logo_logoBmargin',
        'section'       => 'header_settings',
        'type'          => 'text',
        'label'         => __( 'Bottom', 'ruh-premium' )
    )
);

$wp_customize->add_setting(
    'logo_logoLmargin',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '0px', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'logo_logoLmargin',
    array(
        'settings'      => 'logo_logoLmargin',
        'section'       => 'header_settings',
        'type'          => 'text',
        'label'         => __( 'Left', 'ruh-premium' )
    )
);
lzCustomLable($wp_customize, 'header_TopHsettings', $sectionHeader, 'Top Header');

$wp_customize->add_setting(
    'hemil',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( 'Info16271@Fakeinfo.Com' )
    )
);
$wp_customize->add_control(
    'hemil',
    array(
        'settings'      => 'hemil',
        'section'       => 'header_settings',
        'type'          => 'text',
        'label'         => __( 'Email ID', 'ruh-premium' )
    )
);

addColorPalatOption($wp_customize, 'header_HmailicnClr', 'header_settings', 'Email Icon Color', '#fff');

addColorPalatOption($wp_customize, 'header_HmailidClr', 'header_settings', 'Email ID Text Color', '#fff');

addColorPalatOption($wp_customize, 'header_HmailidhvClr', 'header_settings', 'Email ID Text Hover Color', '#F4B504');

lzCustomLable($wp_customize, 'header_Socialmedia', $sectionHeader, 'Social Media Icons');
// FACEBOOK 
$wp_customize->add_setting('header_fb', array('default'=> 'https://www.facebook.com', 'sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control('header_fb',
    array(
        'settings'      => 'header_fb',
        'section'       => 'header_settings',
        'type'          => 'url',
        'label'         => __( 'Facebook Url', 'ruh-premium' )
    )
);

//Instagram
$wp_customize->add_setting('header_insta',array('default'=> 'https://www.instagram.com/','sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control('header_insta',
    array(
        'settings'      => 'header_insta',
        'section'       => 'header_settings',
        'type'          => 'url',
        'label'         => __( 'Instagram Url', 'ruh-premium' )
    )
);

// TWITTER
$wp_customize->add_setting('header_tw', array('default'=> 'https://www.twitter.com', 'sanitize_callback' => 'esc_url_raw'));
$wp_customize->add_control('header_tw',
    array(
        'settings'      => 'header_tw',
        'section'       => 'header_settings',
        'type'          => 'url',
        'label'         => __( 'Twitter Url', 'ruh-premium' )
    )
);

addColorPalatOption($wp_customize, 'header_sicnbgClr', 'header_settings', 'Social Icon BG Color', '#fff');
addColorPalatOption($wp_customize, 'header_sicnIcnClr', 'header_settings', 'Social Icon Color', '#000');
addColorPalatOption($wp_customize, 'header_sicnIcnhvClr', 'header_settings', 'Social Icon Hover Color', '#F4B504');

lzCustomLable($wp_customize, 'header_MenuColorssettings', $sectionHeader, 'Navigation Colors');

//addColorPalatOption($wp_customize, 'header_mainmenusbgClr', 'header_settings', 'Header Menu Bg Color', '#000'); 

addColorPalatOption($wp_customize, 'header_innpagetopmenusClr', 'header_settings', 'Inner Page Menus Color', '#fff');

addColorPalatOption($wp_customize, 'header_topmenusColor', 'header_settings', 'Menus Color', '#000');

addColorPalatOption($wp_customize, 'header_topmenushoverColor', 'header_settings', 'Menus Hover Color', '#F4B504');

addColorPalatOption($wp_customize, 'header_topmenusactiveColor', 'header_settings', 'Active Menus Color', '#9648e5');

addColorPalatOption($wp_customize, 'header_topsubmenusColor', 'header_settings', 'Header Sub Menus Color', '#000');

addColorPalatOption($wp_customize, 'header_topsubmenusbrdclr', 'header_settings', 'Header Sub Menus Border Color', '#f1f1f1');

addColorPalatOption($wp_customize, 'header_topsubmenushvrColor', 'header_settings', 'Sub Menus Hover & Sub Menus Active Color', '#F4B504');

// addColorPalatOption($wp_customize, 'header_topsubmenushvbgColor', 'header_settings', 'Sub Menus Hover & Sub Menus Active BG Color', '#f1f1f1');

addColorPalatOption($wp_customize, 'header_submenusbgsscColor', 'header_settings', 'Dropdown Box BG Color', '#fff');

lzCustomLable($wp_customize, 'header_colorsfortabandmobview', $sectionHeader, 'Responsive Header Settings');

addColorPalatOption($wp_customize, 'header_topheadbgclr', 'header_settings', 'Top Header BG Color', '#111944');

addColorPalatOption($wp_customize, 'header_respnavtoggbarbgssColor', 'header_settings', 'Toggle Bar Color', '#fff');

addColorPalatOption($wp_customize, 'header_respnavbsbgssColor', 'header_settings', ' Navigation Box BG Color', '#fff');

addColorPalatOption($wp_customize, 'header_navigationrespnavbrssColor', 'header_settings', 'Menus Title Color', '#000');

addColorPalatOption($wp_customize, 'header_navigationrespnavmenuttlbgColor', 'header_settings', 'Menus Title BG Color', '#d5d5d5');

addColorPalatOption($wp_customize, 'header_navigationrespnavmenuColor', 'header_settings', 'Menus Color', '#fff');

addColorPalatOption($wp_customize, 'header_navigationrespnavmenubgColor', 'header_settings', 'Menus BG Color', '#111944');

//COLOR SETTINGS
$wp_customize->add_section( 'colors', array(
	'title' => __( 'Colors' , 'Ruh Premium'),
	'panel' => 'ruh_general_panel',
) );

//theme primary color
addColorPalatOption($wp_customize, 'ruh_template_color', 'colors', 'Theme Primary Color', '#111944');

//theme Secondary color
addColorPalatOption($wp_customize, 'theme_secondary_color', 'colors', 'Theme Secondary Color', '#F4B504');

//lzCustomLable($wp_customize, 'ruh_allpipediplay', 'colors', 'Pipe Setting');

lzCustomLable($wp_customize, 'ruh_allinnerpagesec_colordisplaysettdisplay', 'colors', 'Inner Page Color');

lzCustomLable($wp_customize, 'innheadr_Overlay', 'colors', 'Header Overlay Color');

$wp_customize->add_setting(
    'innheadr_Opacity',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '0.5', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'innheadr_Opacity',
    array(
        'settings'      => 'innheadr_Opacity',
        'section'       => 'colors',
        'type'          => 'text',
        'label'         => __( 'Opacity', 'ruh-premium' )
    )
);

addColorPalatOption($wp_customize, 'ruh_template_innerpage_bgolyclr', 'colors', 'Inner Page Header Overlay Color', '#16267D');

addColorPalatOption($wp_customize, 'ruh_template_innerpage_bgclr', 'colors', 'Inner Page Header BG Color', '#1d1b1b');

addColorPalatOption($wp_customize, 'ruh_template_innerpage_titlecolor', 'colors', 'Inner Page Header Title Color', '#fff'); 

addColorPalatOption($wp_customize, 'ruh_template_innerpagemainsectionboxtext_color', 'colors', 'Inner Page Text Color', '#000');

addColorPalatOption($wp_customize, 'template_innerpage_productpageboldtextcolor', 'colors', 'Inner Product Page Bold Text Color', '#000');

addColorPalatOption($wp_customize, 'template_innerpage_cartpageproducttitlecolor', 'colors', 'Inner  Cart Page Product Title Color', '#000');

addColorPalatOption($wp_customize, 'ruh_template_innerpageproductprice_color', 'colors', 'Inner Page Product Selling Price Color', '#868b9e');

addColorPalatOption($wp_customize, 'ruh_template_innerpageproductpricedel_color', 'colors', 'Inner Page Product Price Color', '#7c8491');

addColorPalatOption($wp_customize, 'ruh_template_innerpageallothrtheadtextcolcolor_color', 'colors', 'Other Text Color', '#fff');

addColorPalatOption($wp_customize, 'ruh_template_innerpageallothrtheadtextbgsscolcolor_color', 'colors', 'Other Fields BG Color', '#fff');

addColorPalatOption($wp_customize, 'ruh_template_innerpagemainsectionboxtextlinks_color', 'colors', 'Inner Page Links Color', '#0F2B5B');

addColorPalatOption($wp_customize, 'ruh_template_innerpagemainsectionboxtextlinksicn_clr', 'colors', 'Inner Page Links Icon Color', '#F4B504');

addColorPalatOption($wp_customize, 'ruh_template_innerpagemainsectionboxtextlinkshvrs_color', 'colors', 'Inner Page Links Hover Color', '#F4B504');

addColorPalatOption($wp_customize, 'ruh_innerpagemainss_iconClr', 'colors', 'Inner Page Icons , Icon Color', '#F4B504');

addColorPalatOption($wp_customize, 'ruh_template_innerpagemainsectionboxtextlinksicon_color', 'colors', 'Inner Page Icons , list Number Color', '#fff');

addColorPalatOption($wp_customize, 'ruh_template_innerpagemainsectionboxtextlinksiconbgssclr_color', 'colors', 'Inner Page list Number BG Color', '#111944');

addColorPalatOption($wp_customize, 'ruh_template_innerpagemainsectionsidebarborderrs_color', 'colors', 'Inner Page Sidebar & Text Field & Product Image Border Color', '#000');

addColorPalatOption($wp_customize, 'ruh_template_innerpagesblockquote_color', 'colors', 'Inner Page Blockquote BG Color', '#111944');

addColorPalatOption($wp_customize, 'innerpage_blockquotebrdClr', 'colors', 'Inner Page Blockquote Border Color', '#fff');

addColorPalatOption($wp_customize, 'innerpage_blockquoteextClr', 'colors', 'Inner Page Blockquote Text Color', '#fff');


lzCustomLable($wp_customize, 'ruh_allinnerpagesec_pagination', 'colors', 'Pagination');

addColorPalatOption($wp_customize, 'ruh_template_innerpagepagination_color', 'colors', 'Inner Page Pagination Color', '#000');

addColorPalatOption($wp_customize, 'ruh_template_innerpagepaginationbg_color', 'colors', 'Inner Page Pagination BG Color', '#fff');

addColorPalatOption($wp_customize, 'ruh_template_innerpagepaginationborder_color', 'colors', 'Inner Page Pagination Border Color', '#eaeaea');

addColorPalatOption($wp_customize, 'ruh_template_innerpagepaginationactive_color', 'colors', 'Inner Page Pagination Hover & Active Color', '#fff');

addColorPalatOption($wp_customize, 'ruh_template_innerpagepaginationbgactive_color', 'colors', 'Inner Page Pagination BG Hover & Active Color', '#F4B504');

addColorPalatOption($wp_customize, 'ruh_template_innerpagepaginationborderactive_color', 'colors', 'Inner Page Pagination Border Hover & Active Color', '#F4B504');


lzCustomLable($wp_customize, 'ruh_allinnerpagesec_sidebar', 'colors', 'Sidebar Color');

addColorPalatOption($wp_customize, 'ruh_template_sibebr1clr', 'colors', 'Sidebar Bg Color', '#fff');

addColorPalatOption($wp_customize, 'template_innerpage_sibebrheadclr', 'colors', 'Sidebar Title Color', '#fff');

addColorPalatOption($wp_customize, 'template_innerpage_sibebrheadbgclr', 'colors', 'Sidebar Title BG One Color', '#111944');

addColorPalatOption($wp_customize, 'template_innerpage_sibebrheadbg2clr', 'colors', 'Sidebar Title BG Two Color', '#F4B504');

addColorPalatOption($wp_customize, 'template_innerpage_sibebrfrmbgclr', 'colors', 'Sidebar Menu BG Color', '#111944');

addColorPalatOption($wp_customize, 'template_innerpage_sibebrfrmtitleclr', 'colors', 'Sidebar Menu Title Color', '#fff');

addColorPalatOption($wp_customize, 'template_innerpage_sibebrfrmcurrnttitleclr', 'colors', 'Sidebar Current Menu Title Color', '#F4B504');

addColorPalatOption($wp_customize, 'template_innerpage_sibebrfrmbtnicnclr', 'colors', 'Sidebar Form Button Icon Color', '#000');

addColorPalatOption($wp_customize, 'ruh_template_innerpagesidebardaytxt_color', 'colors', 'Inner Page Sidebar Calender Widgets Day Text Color', '#ffffff');

addColorPalatOption($wp_customize, 'ruh_template_innerpagesidebardaybgsstxt_color', 'colors', 'Inner Page Sidebar Calender Widgets Day Text BG Color', '#777777');


lzCustomLable($wp_customize, 'ruh_allinnerpagesec_colordisplaysettnavbackttoarrdisplay', 'colors', 'Navigation Back To Top Arrow');

addColorPalatOption($wp_customize, 'ruh_backttoparrcbgclr', 'colors', 'Site Navigation Rocket Color', '#F4B504');

addColorPalatOption($wp_customize, 'ruh_backttoparrcbghvclr', 'colors', 'Site Navigation Rocket Hover Color', '#000');


//BREADCRUMB SETTINGS
$wp_customize->add_section(
	'ruh_breadcrumb_settings',
	array(
		'title' => __( 'Breadcrumb Settings', 'Ruh Premium' ),
		'panel' => 'ruh_general_panel',
	)
);

//for breadcrumb to show & hide button

$wp_customize->add_setting( 'breadcrumb_button_display' , array( 'default' => true, 'transport' => 'refresh', ) ); 
$wp_customize->add_control( 'breadcrumb_button_display', array( 'label' => 'Breadcrumb Display', 'section' => 'ruh_breadcrumb_settings', 'settings' => 'breadcrumb_button_display', 'type' => 'radio', 'choices' => array( 'show' => 'Show', 'hide' => 'Hide', ), ) ); 


$wp_customize->add_setting(
        'ruh_breadcrumbhometxt',
        array(
            'sanitize_callback' => 'ruh_sanitize_text',
            'default'           => __( 'Home', 'ruh' )
        )
    );
    $wp_customize->add_control(
        'ruh_breadcrumbhometxt',
        array(
            'settings'      => 'ruh_breadcrumbhometxt',
            'section'       => 'ruh_breadcrumb_settings',
            'type'          => 'text',
            'label'         => __( 'Add Breadcrumb Text Here', 'ruh' )
        )
    );


addColorPalatOption($wp_customize, 'ruh_template_innerpage_breadcrumbtitlecolor', 'ruh_breadcrumb_settings', 'Breadcrumb Box Current Title Color', '#F4B504');

addColorPalatOption($wp_customize, 'ruh_template_innerpage_breadcrumbcurrenttitlehovercolor', 'ruh_breadcrumb_settings', 'Breadcrumb Box Title Hover Color', '#F4B504');

addColorPalatOption($wp_customize, 'ruh_template_innerpage_breadcrumbcurrenttitlecolor', 'ruh_breadcrumb_settings', 'Breadcrumb Box Title Color', '#fff');


// end to show & hide button

//POSTPAGEDATE SETTINGS
$wp_customize->add_section(
	'ruh_blogpage_settings',
	array(
		'title' => __( 'Blog Page Settings', 'Ruh Premium' ),
		'panel' => 'ruh_general_panel',
	)
);

lzCustomLable($wp_customize, 'allblog_lblbuttonabtdisplay', 'ruh_blogpage_settings', 'Post Date & Admin Display Setting');

$wp_customize->add_setting( 'postdate_button_display' , array( 'default' => true, 'transport' => 'refresh', ) ); 
$wp_customize->add_control( 'postdate_button_display', array( 'label' => 'Post Date Display', 'section' => 'ruh_blogpage_settings', 'settings' => 'postdate_button_display', 'type' => 'radio', 'choices' => array( 'show' => 'Show ', 'hide' => 'Hide ', ), ) ); 

lzCustomLable($wp_customize, 'allblog_imgsize', 'ruh_blogpage_settings', 'Post Image Size Setting');

$wp_customize->add_setting(
    'allblog_imgheight',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '230px', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'allblog_imgheight',
    array(
        'settings'      => 'allblog_imgheight',
        'section'       => 'ruh_blogpage_settings',
        'type'          => 'text',
        'label'         => __( 'Box Image Height', 'ruh-premium' )
    )
);

lzCustomLable($wp_customize, 'allblog_heading2label', 'ruh_blogpage_settings', 'Post Heading Font Size Setting');

$wp_customize->add_setting(
    'blogpages_innerpageheading2',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '29px', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'blogpages_innerpageheading2',
    array(
        'settings'      => 'blogpages_innerpageheading2',
        'section'       => 'ruh_blogpage_settings',
        'type'          => 'text',
        'label'         => __( 'Post Heading Font Size', 'ruh-premium' )
    )
);


$wp_customize->add_setting(
    'blogpages_innerpageheadingweight',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '600', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'blogpages_innerpageheadingweight',
    array(
        'settings'      => 'blogpages_innerpageheadingweight',
        'section'       => 'ruh_blogpage_settings',
        'type'          => 'text',
        'label'         => __( 'Post Heading Font Weight', 'ruh-premium' )
    )
);


$wp_customize->add_setting(
    'blgtxtlimit',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '100', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'blgtxtlimit',
    array(
        'settings'      => 'blgtxtlimit',
        'section'       => 'ruh_blogpage_settings',
        'type'          => 'text',
        'label'         => __( 'Box Text Limit', 'ruh-premium' )
    )
);

lzCustomLable($wp_customize, 'allblog_clr', 'ruh_blogpage_settings', 'Color Setting');



addColorPalatOption($wp_customize, 'template_innerpage_blogbxbgclr', 'ruh_blogpage_settings', 'Box BG Color', '#f2f3f5');

addColorPalatOption($wp_customize, 'template_innerpage_blogttleclr', 'ruh_blogpage_settings', 'Title Color', '#111944');

addColorPalatOption($wp_customize, 'template_innerpage_blogtitlehvclr', 'ruh_blogpage_settings', 'Title Hover Color', '#F4B504');

addColorPalatOption($wp_customize, 'ruh_template_innerpage_blogtextclr', 'ruh_blogpage_settings', 'Text Color', '#111944');

addColorPalatOption($wp_customize, 'ruh_template_innerpage_blogdatebgclr', 'ruh_blogpage_settings', 'Date BG Color','#111944');

addColorPalatOption($wp_customize, 'innerpage_blogicnautrclr', 'ruh_blogpage_settings', 'Text & Icon Color', '#fff');

lzCustomLable($wp_customize, 'allblog_btndisplay', 'ruh_blogpage_settings', 'Button Setting');


$wp_customize->add_setting(
    'blog_button2',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( 'Read more', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'blog_button2',
    array(
        'settings'      => 'blog_button2',
        'section'       => 'ruh_blogpage_settings',
        'type'          => 'text',
        'label'         => __( 'Button Text', 'ruh-premium' )
    )
);

addColorPalatOption($wp_customize, 'innerpage_blogpgtxtclr', 'ruh_blogpage_settings', 'Button Text Color', '#F4B504');

addColorPalatOption($wp_customize, 'innerpage_blogpgtxthvclr', 'ruh_blogpage_settings', 'Button Text Hover Color', '#F4B504');


//FOOTER COPYRIGHT SETTINGS
$wp_customize->add_section(
	'footer_area',
	array(
		'title' => __( 'Footer Settings', 'Ruh Premium' ),
		'panel' => 'ruh_general_panel',
	)
);

backgroundManager($wp_customize, 'footer', 'footer_area', $color='#111944', get_template_directory_uri().'/images/default-graybg.png', 'color');

lzCustomLable($wp_customize, 'footer_areaPadding', 'footer_area', 'Footer Padding');

$wp_customize->add_setting(
    'sec_footerseTmargin', 
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '0em', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'sec_footerseTmargin',
    array(
        'settings'      => 'sec_footerseTmargin',
        'section'       => 'footer_area',
        'type'          => 'text',
        'label'         => __( 'Top', 'ruh-premium' )
    )
);
$wp_customize->add_setting(
    'sec_footersebottommargin',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '0em', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'sec_footersebottommargin',
    array(
        'settings'      => 'sec_footersebottommargin',
        'section'       => 'footer_area',
        'type'          => 'text',
        'label'         => __( 'Bottom', 'ruh-premium' )
    )
);

lzCustomLable($wp_customize, 'footer_areabottomfPadding', 'footer_area', 'Copyright Text Box Padding');

$wp_customize->add_setting(
    'sec_bottomareaTmargin', 
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '0.5em', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'sec_bottomareaTmargin',
    array(
        'settings'      => 'sec_bottomareaTmargin',
        'section'       => 'footer_area',
        'type'          => 'text',
        'label'         => __( 'Top', 'ruh-premium' )
    )
);

$wp_customize->add_setting(
    'sec_bottomareabottommargin',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '0.5em', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'sec_bottomareabottommargin',
    array(
        'settings'      => 'sec_bottomareabottommargin',
        'section'       => 'footer_area',
        'type'          => 'text',
        'label'         => __( 'Bottom', 'ruh-premium' )
    )
);

lzCustomLable($wp_customize, 'footer_copytext', 'footer_area', 'Footer Copyright Text');

$wp_customize->add_setting(
    'footer_area_copyrighttext',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( 'Copyright © 2023 Building Construction All rights reserved', 'Ruh Premium' )
    )
);
$wp_customize->add_control(
    'footer_area_copyrighttext',
    array(
        'settings'      => 'footer_area_copyrighttext',
        'section'       => 'footer_area',
        'type'          => 'textarea',
        'label'         => __( 'Footer Copyright Text', 'Ruh Premium' )
    )
);

$wp_customize->add_setting(
    'newsletter_title',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( 'GET OUR NEWSLETTER', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'newsletter_title',
    array(
        'settings'      => 'newsletter_title',
        'section'       => 'footer_area',
        'type'          => 'text',
        'label'         => __( 'Footer Form Title ', 'ruh-premium' )
    )
);

addColorPalatOption($wp_customize, 'footerarea_fmtitleclr', 'footer_area', 'Form Title Color', '#111944');

$wp_customize->add_setting(
    'newsletter_txt',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( 'There are many variations of passages of LoremIpsum available, but have suffered', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'newsletter_txt',
    array(
        'settings'      => 'newsletter_txt',
        'section'       => 'footer_area',
        'type'          => 'textarea',
        'label'         => __( 'Footer Form Text ', 'ruh-premium' )
    )
);

addColorPalatOption($wp_customize, 'footerarea_fmtxtclr', 'footer_area', 'Form Text Color', '#111944');


lzCustomLable($wp_customize, 'newsletter_Form_label', 'footer_area', 'Newsletter Form Shortcode');

lzAddElement($wp_customize, 'ruh_newsletter_shortcode', 'footer_area', 'textarea', $label="Form Shortcode", 'ruh_sanitize_text', '[your shortcode]');

lzCustomLable($wp_customize, 'footer_First_widgetl', 'footer_area', 'Footer First Widget Setting');
backgroundManager($wp_customize, 'footerinn', 'footer_area', $color='#fff', get_template_directory_uri().'/images/footer1.jpg', 'color');

$wp_customize->add_setting(
    'f1_opacity',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '0.9', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'f1_opacity',
    array(
        'settings'      => 'f1_opacity',
        'section'       => 'footer_area',
        'type'          => 'text',
        'label'         => __( 'Opacity ', 'ruh-premium' )
    )
);

addColorPalatOption($wp_customize, 'footerarea_f1oly_clr', 'footer_area', 'Overlay Color', '#F4B504');

// Footer  Color
lzCustomLable($wp_customize, 'footer_allcolor', 'footer_area', 'Footer Color');


addColorPalatOption($wp_customize, 'footerarea_title_color', 'footer_area', 'Title Color', '#fff');

addColorPalatOption($wp_customize, 'footerarea_text_color', 'footer_area', 'Text Color', '#fff');

addColorPalatOption($wp_customize, 'footerarea_icon_color', 'footer_area', 'Icon Color', '#F4B504');

addColorPalatOption($wp_customize, 'footerarea_sicon_color', 'footer_area', 'Social Icon Color', '#fff');

addColorPalatOption($wp_customize, 'footerarea_siconbrd_clr', 'footer_area', 'Social Icon Border Color', '#fff');

addColorPalatOption($wp_customize, 'footerarea_siconbghv_clr', 'footer_area', 'Social Icon BG Hover Color', '#F4B504');

addColorPalatOption($wp_customize, 'footerarea_menu_color', 'footer_area', 'Menu Color', '#fff');

addColorPalatOption($wp_customize, 'footerarea_menuhover_color', 'footer_area', 'Menu Hover Color', '#F4B504');

addColorPalatOption($wp_customize, 'footerarea_activemenu_color', 'footer_area', 'Active Menu Color', '#fff');

addColorPalatOption($wp_customize, 'footerarea_datext_color', 'footer_area', 'Date Text Color', '#fff');

addColorPalatOption($wp_customize, 'FooterAreata_fmbgClr', 'footer_area', 'Form BG Color', '#fff');

addColorPalatOption($wp_customize, 'FooterAreatabgColor', 'footer_area', 'Form Text BG Color', '#fff');

addColorPalatOption($wp_customize, 'FooterAreata_brdClr', 'footer_area', 'Form Border Color', '#e1e1e1');

addColorPalatOption($wp_customize, 'footerarea_formtextlabel_color', 'footer_area', 'Label Color', '#111944');

addColorPalatOption($wp_customize, 'footerarea_formtext_color', 'footer_area', 'Form Text & Placeholder Text Color', '#111944');

addColorPalatOption($wp_customize, 'footerarea_formbuttontext_clr', 'footer_area', 'Form Button Text Color', '#111944');

addColorPalatOption($wp_customize, 'footerarea_formbtntxthv_clr', 'footer_area', 'Form Text Hover Color', '#fff');

addColorPalatOption($wp_customize, 'footerarea_formbuttonbg_clr', 'footer_area', 'Form Button BG Color', '#F4B504');

//SHOP PAGE SIDEBAR SETTINGS
$wp_customize->add_section(
	'ruh_shopsidebar_settings',
	array(
		'title' => __( 'Shop Page Sidebar Settings', 'Ruh Premium' ),
		'panel' => 'ruh_general_panel',
	)
);

// to show & hide button
$wp_customize->add_setting( 'cd_button_display' , array( 'default' => true, 'transport' => 'refresh', ) ); 
$wp_customize->add_control( 'cd_button_display', array( 'label' => 'Shop Sidebar Display', 'section' => 'ruh_shopsidebar_settings', 'settings' => 'cd_button_display', 'type' => 'radio', 'choices' => array( 'show' => 'Show', 'hide' => 'Hide', ), ) ); 
// end to show & hide button

$wp_customize->add_section(
	'ruh_innerpageshortcode_page_settings',
	array(
		'title' => __( 'Color Setting For Shortcode Pages', 'ruh-premium' ),
		'panel' => 'ruh_general_panel',
	)
);

lzCustomLable($wp_customize, 'ruh_servicepageclrdisplay', 'ruh_innerpageshortcode_page_settings', 'Set Services Shortcode Page Colors'); 

lzCustomLable($wp_customize, 'ruh_servicepagelable', 'ruh_innerpageshortcode_page_settings', 'Note: Set Services Page Images Of Equal Height 340*400.');

$wp_customize->add_setting(
    'serinnpg_imgheight',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '260px', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'serinnpg_imgheight',
    array(
        'settings'      => 'serinnpg_imgheight',
        'section'       => 'ruh_innerpageshortcode_page_settings',
        'type'          => 'text',
        'label'         => __( 'Box Image Height', 'ruh-premium' )
    )
);


$wp_customize->add_setting(
    'sertxtlimit',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '80', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'sertxtlimit',
    array(
        'settings'      => 'sertxtlimit',
        'section'       => 'ruh_innerpageshortcode_page_settings',
        'type'          => 'text',
        'label'         => __( 'Box Text Limit', 'ruh-premium' )
    )
);

addColorPalatOption($wp_customize, 'ruh_InnSerTitleClr', 'ruh_innerpageshortcode_page_settings', 'Title Color', '#111944');

addColorPalatOption($wp_customize, 'ruh_InnSerTextClr', 'ruh_innerpageshortcode_page_settings', 'Text Color', '#111944');

$wp_customize->add_setting(
    'ser_button2',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( 'Explore more', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'ser_button2',
    array(
        'settings'      => 'ser_button2',
        'section'       => 'ruh_innerpageshortcode_page_settings',
        'type'          => 'text',
        'label'         => __( 'Button Text', 'ruh-premium' )
    )
);

addColorPalatOption($wp_customize, 'ruh_InnSerbtnbrdClr', 'ruh_innerpageshortcode_page_settings', 'Button Border Color', '#111944');

addColorPalatOption($wp_customize, 'ruh_InnSerbtnicnClr', 'ruh_innerpageshortcode_page_settings', 'Button Icon Color', '#F4B504');

addColorPalatOption($wp_customize, 'ruh_InnSerbtnClr', 'ruh_innerpageshortcode_page_settings', 'Button Text Color', '#111944');

addColorPalatOption($wp_customize, 'ruh_InnSerbtnicnhvClr', 'ruh_innerpageshortcode_page_settings', 'Button Text Hover Color', '#fff');

addColorPalatOption($wp_customize, 'ruh_InnSerbtnbgClr', 'ruh_innerpageshortcode_page_settings', 'Button BG Color', '#fff');

addColorPalatOption($wp_customize, 'ruh_InnSerbtnbghvClr', 'ruh_innerpageshortcode_page_settings', 'Button BG Hover Color', '#F4B504');


lzCustomLable($wp_customize, 'ruh_projectpageclrdisplay', 'ruh_innerpageshortcode_page_settings', 'Set Project Shortcode Page Colors'); 

lzCustomLable($wp_customize, 'ruh_projectpagelable', 'ruh_innerpageshortcode_page_settings', 'Note: Set Project Page Images Of Equal Height 300*350.');

$wp_customize->add_setting(
    'project_imgheight',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '283px', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'project_imgheight',
    array(
        'settings'      => 'project_imgheight',
        'section'       => 'ruh_innerpageshortcode_page_settings',
        'type'          => 'text',
        'label'         => __( 'Box Image Height', 'ruh-premium' )
    )
);

addColorPalatOption($wp_customize, 'pages_Innprojecttitlbgclr', 'ruh_innerpageshortcode_page_settings', 'Title BG Color', '#f4b643');

addColorPalatOption($wp_customize, 'pages_Innprojecttitlclr', 'ruh_innerpageshortcode_page_settings', 'Title Color', '#fff');



lzCustomLable($wp_customize, 'ruh_teaminnerpagepageclrdisplay', 'ruh_innerpageshortcode_page_settings', 'Set Team Shortcode Page Colors');

lzCustomLable($wp_customize, 'ruh_teampagelable', 'ruh_innerpageshortcode_page_settings', 'Note: Set Team Member Images Of Equal Height.{160*160}');

addColorPalatOption($wp_customize, 'pages_InnTeamimgClr', 'ruh_innerpageshortcode_page_settings', 'Image Border Color', '#FFE18E');

addColorPalatOption($wp_customize, 'pages_InnTeambxbgClr', 'ruh_innerpageshortcode_page_settings', 'Box BG Color', '#f2f2f2');

addColorPalatOption($wp_customize, 'pages_InnTeamNameClr', 'ruh_innerpageshortcode_page_settings', 'Member Name Color', '#3f455d');

addColorPalatOption($wp_customize, 'pages_InnerTeamDesignationCClr', 'ruh_innerpageshortcode_page_settings', 'Member Designation Color', '#111944');

addColorPalatOption($wp_customize, 'pages_InnerTeambxbgClr', 'ruh_innerpageshortcode_page_settings', 'Social Icon BG Color', '#111944');

addColorPalatOption($wp_customize, 'pages_InnerTeamsocialsbrdClr', 'ruh_innerpageshortcode_page_settings', 'Social Icon Border Color', '#F4B504');

addColorPalatOption($wp_customize, 'pages_InnerTeamsocialsClr', 'ruh_innerpageshortcode_page_settings', 'Social Icon Color', '#fff');

addColorPalatOption($wp_customize, 'pages_InnerTeamsocialsicnhvClr', 'ruh_innerpageshortcode_page_settings', 'Social Icon Hover Color', '#F4B504');



lzCustomLable($wp_customize, 'ruh_testimonialinnerpagepageclrdisplay', 'ruh_innerpageshortcode_page_settings', 'Set Testimonial Shortcode Page Colors');

addColorPalatOption($wp_customize, 'ruh_innertestimonials_bxbrdclr', 'ruh_innerpageshortcode_page_settings', 'Box Background Color', '#fff');

addColorPalatOption($wp_customize, 'ruh_innertesi_Nameclr', 'ruh_innerpageshortcode_page_settings', 'Client Name Color', '#111944');

addColorPalatOption($wp_customize, 'ruh_innertesti_postionclr', 'ruh_innerpageshortcode_page_settings', 'Client Designation Color', '#111944');

addColorPalatOption($wp_customize, 'ruh_innertesti_titlebrdclr', 'ruh_innerpageshortcode_page_settings', 'Client Name Border Color', '#F4B504');

addColorPalatOption($wp_customize, 'ruh_innertesti_imgarrwbrdclr', 'ruh_innerpageshortcode_page_settings', 'Client Image Side Arrow Color', '#F4B504');

addColorPalatOption($wp_customize, 'ruh_innerTs_textclr', 'ruh_innerpageshortcode_page_settings', 'Text Color', '#111944');

addColorPalatOption($wp_customize, 'ruh_innerTs_icnclr', 'ruh_innerpageshortcode_page_settings', 'Icon Color', '#e5e5e5');


 
lzCustomLable($wp_customize, 'ruh_galleryinnerpagepageclrdisplay', 'ruh_innerpageshortcode_page_settings', 'Set Gallery Shortcode Page Colors');

lzCustomLable($wp_customize, 'ruh_galleryinnerpagegallresclrdisplay', 'ruh_innerpageshortcode_page_settings', 'Note: Kindly Use Gallery Image Of Same Resolution. Recomended Image Size Is 600x600px');

$wp_customize->add_setting(
    'gallinnpg_imgheight',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '300px', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'gallinnpg_imgheight',
    array(
        'settings'      => 'gallinnpg_imgheight',
        'section'       => 'ruh_innerpageshortcode_page_settings',
        'type'          => 'text',
        'label'         => __( 'Image Height', 'ruh-premium' )
    )
);

addColorPalatOption($wp_customize, 'ruh_gallinnicnClr', 'ruh_innerpageshortcode_page_settings', 'Icon Color', '#111944');

addColorPalatOption($wp_customize, 'ruh_gallinnicnbgClr', 'ruh_innerpageshortcode_page_settings', 'Icon BG Color', '#F4B504');

addColorPalatOption($wp_customize, 'ruh_gallinntitleClr', 'ruh_innerpageshortcode_page_settings', 'Title Color', '#fff');

 
lzCustomLable($wp_customize, 'ruh_faqinnerpagepageclrdisplay', 'ruh_innerpageshortcode_page_settings', 'Set Faq Shortcode Page Colors');

$wp_customize->add_setting(
    'the_tptitle',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( 'FAQ', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'the_tptitle',
    array(
        'settings'      => 'the_tptitle',
        'section'       => 'ruh_innerpageshortcode_page_settings',
        'type'          => 'text',
        'label'         => __( 'Faq Heading', 'ruh-premium' )
    )
);

addColorPalatOption($wp_customize, 'ruh_faqinnerheadclr', 'ruh_innerpageshortcode_page_settings', 'Select Heading Color', '#111944');

addColorPalatOption($wp_customize, 'ruh_faqinnpgtitledotClr', 'ruh_innerpageshortcode_page_settings', 'Question Dot Color', '#D9D9D9');

addColorPalatOption($wp_customize, 'ruh_faqinnerpagetitleIconColor', 'ruh_innerpageshortcode_page_settings', 'Question Icon Color', '#111944');

addColorPalatOption($wp_customize, 'ruh_faqinnactIcnClr', 'ruh_innerpageshortcode_page_settings', 'Select Question Active Icon Color', '#180360');

addColorPalatOption($wp_customize, 'ruh_faqinnerpagetitleColor', 'ruh_innerpageshortcode_page_settings', 'Select Question Text Color', '#48517a');

addColorPalatOption($wp_customize, 'ruh_faqinnerpagetitlehvColor', 'ruh_innerpageshortcode_page_settings', 'Select Question Text Hover Color', '#48517a');

addColorPalatOption($wp_customize, 'ruh_faqinnerpagetitleboxbgColor', 'ruh_innerpageshortcode_page_settings', 'Question Box BG Color', '#fff');

addColorPalatOption($wp_customize, 'ruh_faqinnerpagetitleboxbghvColor1', 'ruh_innerpageshortcode_page_settings', 'Question Box BG Active Color', '#fff');

addColorPalatOption($wp_customize, 'ruh_faqinnerpagetexbgClr', 'ruh_innerpageshortcode_page_settings', 'Select Answer Text BG Color', '#fff');

addColorPalatOption($wp_customize, 'ruh_faqinnerpagetextcColor', 'ruh_innerpageshortcode_page_settings', 'Select Answer Text Color', '#48517a');


$wp_customize->add_section(
	'ruh_innerpagefont_settings',
	array(
		'title' => __( 'Inner Page Settings', 'ruh-premium' ),
		'panel' => 'ruh_general_panel',
	)
);

lzCustomLable($wp_customize, 'ruh_innerpage_titlepaddset', 'ruh_innerpagefont_settings', ' Set Inner Header Padding');


$wp_customize->add_setting(
    'inner_headertitleboxTpadding',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '10.5em', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'inner_headertitleboxTpadding',
    array(
        'settings'      => 'inner_headertitleboxTpadding',
        'section'       => 'ruh_innerpagefont_settings',
        'type'          => 'text',
        'label'         => __( 'Top', 'ruh-premium' )
    )
);
$wp_customize->add_setting(
    'inner_headertitleboxBpadding',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '0em', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'inner_headertitleboxBpadding',
    array(
        'settings'      => 'inner_headertitleboxBpadding',
        'section'       => 'ruh_innerpagefont_settings',
        'type'          => 'text',
        'label'         => __( 'Bottom', 'ruh-premium' )
    )
);

lzCustomLable($wp_customize, 'ruh_innerpageh1_fontsizeset', 'ruh_innerpagefont_settings', ' Heading 1');

$wp_customize->add_setting(
	'pages_innerpageheading1',
	array(
		'sanitize_callback' => 'ruh_sanitize_text',
		'default'           => __( '32px', 'ruh-premium' )
	)
);
$wp_customize->add_control(
	'pages_innerpageheading1',
	array(
		'settings'      => 'pages_innerpageheading1',
		'section'       => 'ruh_innerpagefont_settings',
		'type'          => 'text',
		'label'         => __( 'Heading 1 Font Size', 'ruh-premium' )
	)
);

$wp_customize->add_setting(
    'pages_innerpageheadingweight1',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '600', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'pages_innerpageheadingweight1',
    array(
        'settings'      => 'pages_innerpageheadingweight1',
        'section'       => 'ruh_innerpagefont_settings',
        'type'          => 'text',
        'label'         => __( 'Heading 1 Font Weight', 'ruh-premium' )
    )
);

addColorPalatOption($wp_customize, 'ruh_template_innerpagemainsectionboxheading1_color', 'ruh_innerpagefont_settings', 'Heading 1 Color', '#2e2e2e');

lzCustomLable($wp_customize, 'ruh_innerpageh2_fontsizeset', 'ruh_innerpagefont_settings', ' Heading 2');


$wp_customize->add_setting(
	'pages_innerpageheading2',
	array(
		'sanitize_callback' => 'ruh_sanitize_text',
		'default'           => __( '28px', 'ruh-premium' )
	)
);
$wp_customize->add_control(
	'pages_innerpageheading2',
	array(
		'settings'      => 'pages_innerpageheading2',
		'section'       => 'ruh_innerpagefont_settings',
		'type'          => 'text',
		'label'         => __( 'Heading 2 Font Size', 'ruh-premium' )
	)
);

$wp_customize->add_setting(
    'pages_innerpageheadingweight2',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '600', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'pages_innerpageheadingweight2',
    array(
        'settings'      => 'pages_innerpageheadingweight2',
        'section'       => 'ruh_innerpagefont_settings',
        'type'          => 'text',
        'label'         => __( 'Heading 2 Font Weight', 'ruh-premium' )
    )
);

addColorPalatOption($wp_customize, 'ruh_template_innerpagemainsectionboxheading2_color', 'ruh_innerpagefont_settings', 'Heading 2 Color', '#2e2e2e');

 
lzCustomLable($wp_customize, 'ruh_innerpageh3_fontsizeset', 'ruh_innerpagefont_settings', ' Heading 3');

$wp_customize->add_setting(
	'pages_innerpageheading3',
	array(
		'sanitize_callback' => 'ruh_sanitize_text',
		'default'           => __( '24px', 'ruh-premium' )
	)
);
$wp_customize->add_control(
	'pages_innerpageheading3',
	array(
		'settings'      => 'pages_innerpageheading3',
		'section'       => 'ruh_innerpagefont_settings',
		'type'          => 'text',
		'label'         => __( 'Heading 3 Font Size', 'ruh-premium' )
	)
);

$wp_customize->add_setting(
    'pages_innerpageheadingweight3',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '500', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'pages_innerpageheadingweight3',
    array(
        'settings'      => 'pages_innerpageheadingweight3',
        'section'       => 'ruh_innerpagefont_settings',
        'type'          => 'text',
        'label'         => __( 'Heading 3 Font Weight', 'ruh-premium' )
    )
);


addColorPalatOption($wp_customize, 'ruh_template_innerpagemainsectionboxheading3_color', 'ruh_innerpagefont_settings', 'Heading 3 Color', '#2e2e2e');


lzCustomLable($wp_customize, 'ruh_innerpageh4_fontsizeset', 'ruh_innerpagefont_settings', ' Heading 4');


$wp_customize->add_setting(
	'pages_innerpageheading4',
	array(
		'sanitize_callback' => 'ruh_sanitize_text',
		'default'           => __( '18px', 'ruh-premium' )
	)
);
$wp_customize->add_control(
	'pages_innerpageheading4',
	array(
		'settings'      => 'pages_innerpageheading4',
		'section'       => 'ruh_innerpagefont_settings',
		'type'          => 'text',
		'label'         => __( 'Heading 4 Font Size', 'ruh-premium' )
	)
);

$wp_customize->add_setting(
    'pages_innerpageheadingweight4',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '500', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'pages_innerpageheadingweight4',
    array(
        'settings'      => 'pages_innerpageheadingweight4',
        'section'       => 'ruh_innerpagefont_settings',
        'type'          => 'text',
        'label'         => __( 'Heading 4 Font Weight', 'ruh-premium' )
    )
);

addColorPalatOption($wp_customize, 'ruh_template_innerpagemainsectionboxheading4_color', 'ruh_innerpagefont_settings', 'Heading 4 Color', '#2e2e2e');

lzCustomLable($wp_customize, 'ruh_innerpageh5_fontsizeset', 'ruh_innerpagefont_settings', ' Heading 5');

$wp_customize->add_setting(
	'pages_innerpageheading5',
	array(
		'sanitize_callback' => 'ruh_sanitize_text',
		'default'           => __( '17px', 'ruh-premium' )
	)
);
$wp_customize->add_control(
	'pages_innerpageheading5',
	array(
		'settings'      => 'pages_innerpageheading5',
		'section'       => 'ruh_innerpagefont_settings',
		'type'          => 'text',
		'label'         => __( 'Heading 5 Font Size', 'ruh-premium' )
	)
);

$wp_customize->add_setting(
    'pages_innerpageheadingweight5',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '500', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'pages_innerpageheadingweight5',
    array(
        'settings'      => 'pages_innerpageheadingweight5',
        'section'       => 'ruh_innerpagefont_settings',
        'type'          => 'text',
        'label'         => __( 'Heading 5 Font Weight', 'ruh-premium' )
    )
);

addColorPalatOption($wp_customize, 'ruh_template_innerpagemainsectionboxheading5_color', 'ruh_innerpagefont_settings', 'Heading 5 Color', '#2e2e2e');

lzCustomLable($wp_customize, 'ruh_innerpageh6_fontsizeset', 'ruh_innerpagefont_settings', ' Heading 6');


$wp_customize->add_setting(
	'pages_innerpageheading6',
	array(
		'sanitize_callback' => 'ruh_sanitize_text',
		'default'           => __( '16px', 'ruh-premium' )
	)
);
$wp_customize->add_control(
	'pages_innerpageheading6',
	array(
		'settings'      => 'pages_innerpageheading6',
		'section'       => 'ruh_innerpagefont_settings',
		'type'          => 'text',
		'label'         => __( 'Heading 6 Font Size', 'ruh-premium' )
	)
);

$wp_customize->add_setting(
    'pages_innerpageheadingweight6',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '500', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'pages_innerpageheadingweight6',
    array(
        'settings'      => 'pages_innerpageheadingweight6',
        'section'       => 'ruh_innerpagefont_settings',
        'type'          => 'text',
        'label'         => __( 'Heading 6 Font Weight', 'ruh-premium' )
    )
);

addColorPalatOption($wp_customize, 'ruh_template_innerpagemainsectionboxheading6_color', 'ruh_innerpagefont_settings', 'Heading 6 Color', '#2e2e2e');

lzCustomLable($wp_customize, 'ruh_innerpageextrahheading', 'ruh_innerpagefont_settings', ' Heading Extra Color');
lzCustomLable($wp_customize, 'ruh_servicepagelable', 'ruh_innerpagefont_settings', 'Note: Bold = Use <b></b> Tag & Heihlight = Use <span></span> Tag');

addColorPalatOption($wp_customize, 'ruh_template_innerpagemainsectionboxheadingbold_clr', 'ruh_innerpagefont_settings', 'Heading / Text Bold Color', '#000');

addColorPalatOption($wp_customize, 'ruh_template_innerpagemainsectionboxheadinghigh_clr', 'ruh_innerpagefont_settings', 'Heading / Text Highlight Color', '#F4B504');

lzCustomLable($wp_customize, 'ruh_innerpagebulletpoint', 'ruh_innerpagefont_settings', ' Font Awesome Icon Setting');


$wp_customize->add_setting(
    'bulletpointicon',
    array(
        'sanitize_callback' => 'ruh_sanitize_text',
        'default'           => __( '\f0ad', 'ruh-premium' )
    )
);
$wp_customize->add_control(
    'bulletpointicon',
    array(
        'settings'      => 'bulletpointicon',
        'section'       => 'ruh_innerpagefont_settings',
        'type'          => 'text',
        'label'         => __( 'Add Font Awesome Icon 4.7', 'ruh-premium' )
    )
);