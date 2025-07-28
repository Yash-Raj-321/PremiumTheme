<?php    
/**
 * @package Ruh Premium
 */
function total_dymanic_styles(){
    global $post;
    $primColor = get_theme_mod( 'ruh_template_color', '#111944' );
    $headertopheadbgclr = get_theme_mod( 'header_topheadbgclr', '#111944' );
    $color_rgba = totalColourBrightness($primColor, 0.3);
    $darker_color = totalColourBrightness($primColor, -0.5);
    $header_image = get_header_image();
    $headeingFontRow = get_theme_mod('ruh_general_headeing_font', '35');
    $textFontRow = get_theme_mod('ruh_general_text_font', '35');

    $navigationrespnavtoggbarbgssColor = get_theme_mod( 'header_respnavtoggbarbgssColor', '#fff' );
    $navigationrespnavbsbgssColor = get_theme_mod( 'header_respnavbsbgssColor', '#fff' );
    $navigationrespnavmenutitleColor = get_theme_mod( 'header_navigationrespnavbrssColor', '#000' );
    $navigationrespnavmenutitlebgColor = get_theme_mod( 'header_navigationrespnavmenuttlbgColor', '#d5d5d5' );
    $navigationrespnavmenuColor = get_theme_mod( 'header_navigationrespnavmenuColor', '#fff' );
    $navigationrespnavmenubgColor = get_theme_mod( 'header_navigationrespnavmenubgColor', '#111944' );

// fot logo width & Height

    $headerlogoTopsetmaxwidth = get_theme_mod('pages_logoTopsetmaxwidth', '100%');
    $pageslogosetmaxheight = get_theme_mod('pages_logoTopsetmaxheight', '');

//Logo  Margin

    $logoTmargin = get_theme_mod('logo_logoTmargin', '0px');
    $logoRmargin = get_theme_mod('logo_logoRmargin', '0px');
    $logoBmargin = get_theme_mod('logo_logoBmargin', '0px');
    $logoLmargin = get_theme_mod('logo_logoLmargin', '0px');

// footer opacity
$f1opacity = get_theme_mod('f1_opacity', '0.9');


// Inner page Header opacity
    $innheadrOpacity = get_theme_mod('innheadr_Opacity', '0.5');
    
// Main Slider opacity   
    $sliderareaOpacity = get_theme_mod('slider_areaOpacity', '1');

//About section
    $aboutTpadding = get_theme_mod('about_areaTpadding', '5em');
    $aboutBpadding = get_theme_mod('about_areaBpadding', '3em');

//countern section
    $counterTpadding = get_theme_mod('countersection_toppadding', '4em');
    $counterBpadding = get_theme_mod('countersection_bottompadding', '2em');

//Feature section
    $featuresTpadding = get_theme_mod('features_areaTpadding', '8em');
    $featuresBpadding = get_theme_mod('features_areaBpadding', '2em');

//gallery section
    $secgalleryTpadding = get_theme_mod('secgalleryTpadding', '7em');
    $secgalleryBpadding = get_theme_mod('secgalleryBpadding', '4em');

//testimonial section
    $testimonialTpadding = get_theme_mod('testimonials_areaTpadding', '3em');
    $testimonialBpadding = get_theme_mod('testimonials_areaBpadding', '3em');
    $testiareaOpacity = get_theme_mod('testi_areaOpacity', '0.8');

//projec section
    $projecTpadding = get_theme_mod('project_areaTpadding', '8em');
    $projecBpadding = get_theme_mod('project_areaBpadding', '4em');

//pricing section
    $pricingTpadding = get_theme_mod('pricing_areaTpadding', '2em');
    $pricingBpadding = get_theme_mod('pricing_areaBpadding', '2em');

//team section
    $teamTpadding = get_theme_mod('team_areaTpadding', '4em');
    $teamBpadding = get_theme_mod('team_areaBpadding', '4em');

//Services section
    $servicesTpadding = get_theme_mod('service_areaTpadding', '6em');
    $servicesBpadding = get_theme_mod('service_areaBpadding', '3em');

//product section
    $producttoppadding = get_theme_mod('featureproductsection_toppadding', '3em');
    $productbottompadding = get_theme_mod('featureproductsection_bottompadding', '3em');
   
//appoinment section
    $appoinmentTpadding = get_theme_mod('appoinmentsection_toppadding', '5em');
    $appoinmentBpadding = get_theme_mod('appoinmentsection_bottompadding', '5em');

//blog section
    $blogTpadding = get_theme_mod('blog_areaTpadding', '3.5em');
    $blogBpadding = get_theme_mod('blog_areaBpadding', '4em');

//footer
    $SectionfooterseTmargin = get_theme_mod('sec_footerseTmargin', '0em');
    $Sectionfootersebottommargin = get_theme_mod('sec_footersebottommargin', '0em');

    $bottomareaTmargin = get_theme_mod('sec_bottomareaTmargin', '0.5em');
    $bottomareabottommargin = get_theme_mod('sec_bottomareabottommargin', '0.5em');

    $bulletpointicon = get_theme_mod('bulletpointicon', '\f0ad');

//inner page

// h1
    $headerinnerpageheading1 = get_theme_mod('pages_innerpageheading1', '36px');
    $innerpageheadingweight1 = get_theme_mod('pages_innerpageheadingweight1', '600');
//h2
    $headerinnerpageheading2 = get_theme_mod('pages_innerpageheading2', '28px');
    $innerpageheadingweight2 = get_theme_mod('pages_innerpageheadingweight2', '600');
//h3
    $headerinnerpageheading3 = get_theme_mod('pages_innerpageheading3', '24px');
    $innerpageheadingweight3 = get_theme_mod('pages_innerpageheadingweight3', '500');
//h4
    $headerinnerpageheading4 = get_theme_mod('pages_innerpageheading4', '18px');
    $innerpageheadingweight4 = get_theme_mod('pages_innerpageheadingweight4', '500');
//h5
    $headerinnerpageheading5 = get_theme_mod('pages_innerpageheading5', '17px');
    $innerpageheadingweight5 = get_theme_mod('pages_innerpageheadingweight5', '500');
//h6
    $headerinnerpageheading6 = get_theme_mod('pages_innerpageheading6', '16px');
    $innerpageheadingweight6 = get_theme_mod('pages_innerpageheadingweight6', '500');

// inner page header padding 
    $immerpageheadertitleboxTpadding = get_theme_mod('inner_headertitleboxTpadding', '10.5em');
    $immerpageheadertitleboxBpadding = get_theme_mod('inner_headertitleboxBpadding', '0em');


    // Contact Page
    //$contactpagesheading4 = get_theme_mod('contactpages_innerpageheading2', '45px');

// main#innerpage-box .Address_area h4,
// main#innerpage-box .social_area h4,
// .page-template-contact-template main#innerpage-box .Address_area h4, 
// .page-template-contact-template main#innerpage-box .social_area h4{font-size: $contactpagesheading4;}

    // blog Page

    $allblogimgheight = get_theme_mod('allblog_imgheight', '230px');
    $bloginnerpageheading2 = get_theme_mod('blogpages_innerpageheading2', '29px');
    $bloginnerpageheadingweight = get_theme_mod('blogpages_innerpageheadingweight', '600');
   // $allblogtextlimit = get_theme_mod('allblog_textlimit', '3');
   // main#innerpage-box #blog-box .inner-blog-excerpt p{-webkit-line-clamp: $allblogtextlimit ;}
    
    
    $headingFont = getFonts(false, (int)$headeingFontRow);
    $textFont = getFonts(false, (int)$textFontRow);

    $custom_css = '';
    $custom_css = " body, * {font-family: $textFont;}

.button a,.btn1 a,.btn1 a span,
.ht-section-title, .ht-title-wrap, 
.ht-slide-cap-title, h1, h2, h3, h4, h5, h6,
.counter-area .cd-num,

.section-title h2, 
.section-title h2 span, 
.section-title h2 small, 
.section-title h2 strong, 
.section-title h2 big, 
.section-title h2 b, 
.section-title h2 sub, 
.section-title h2 sup,

.inner-area-title, 
.inner-area-title small, 
.inner-area-title span, 
.inner-area-title strong, 
.inner-area-title sub, 
.inner-area-title sup, 
.inner-area-title big, 
.inner-area-title b,

#ht-contactus-wrap h1,
#ht-contactus-wrap h1 small, 
#ht-contactus-wrap h1 strong,
#ht-contactus-wrap h1 span, 
#ht-contactus-wrap h1 sub,
#ht-contactus-wrap h1 sup,
#ht-contactus-wrap h1 big,
#ht-contactus-wrap h1 b,

main#innerpage-box .social_area h4, 
main#innerpage-box .social_area h4 small,
main#innerpage-box .social_area h4 strong,
main#innerpage-box .social_area h4 span,
main#innerpage-box .social_area h4 sub,
main#innerpage-box .social_area h4 sup,
main#innerpage-box .social_area h4 big, 
main#innerpage-box .social_area h4 b,

.woocommerce div.product .product_title,
.woocommerce div.product .product_title span,
.woocommerce div.product .product_title small, 
.woocommerce div.product .product_title strong,
.woocommerce div.product .product_title big, 
.woocommerce div.product .product_title b,
.woocommerce div.product .product_title sup,
.woocommerce div.product .product_title sub,

main#innerpage-box h2.woocommerce-loop-product__title,
main#innerpage-box h2.woocommerce-loop-product__title span,
main#innerpage-box h2.woocommerce-loop-product__title small, 
main#innerpage-box h2.woocommerce-loop-product__title strong,
main#innerpage-box h2.woocommerce-loop-product__title big, 
main#innerpage-box h2.woocommerce-loop-product__title b,
main#innerpage-box h2.woocommerce-loop-product__title sup,
main#innerpage-box h2.woocommerce-loop-product__title sub,

body.page-template-default main#innerpage-box h4, 
div#commentsAdd h4, 
body.page-template-default main#innerpage-box h4 span, 
div#commentsAdd h4 span,
body.page-template-default main#innerpage-box h4 small, 
div#commentsAdd h4 small,
body.page-template-default main#innerpage-box h4 strong, 
div#commentsAdd h4 strong,
body.page-template-default main#innerpage-box h4 sub, 
div#commentsAdd h4 sub,
body.page-template-default main#innerpage-box h4 sup, 
div#commentsAdd h4 sup,
body.page-template-default main#innerpage-box h4 big, 
div#commentsAdd h4 big,
body.page-template-default main#innerpage-box h4 b, 
div#commentsAdd h4 b ,
.slider_section .title,
.slider_section .title span,
.slider_section .title small,
.slider_section .title strong,
.slider_section .title b,
.slider_section .title big,
.slider_section .title sub,
.slider_section .title sup ,
#pricing .currency-price,#pricing .currency-price small {font-family: $headingFont; }

.top-bar-head{ background: url('$header_image'); background-repeat: no-repeat; background-size: cover;}

.page-template-home-template .ht-main-navigation .current_page_item > a {color: #fff;}

.logo-header.mostion img{max-width: $headerlogoTopsetmaxwidth%;}
.logo-header.mostion img{height: $pageslogosetmaxheight;}

.logo{margin-top: $logoTmargin;}
.logo{margin-right: $logoRmargin;}
.logo{margin-bottom: $logoBmargin;}
.logo{margin-left: $logoLmargin;}

.footer-area .sf-oly{opacity: $f1opacity;}

.page-main-header .overlay1{opacity: $innheadrOpacity;}

.slider_section .slider_gradiant{opacity: $sliderareaOpacity;}

#about{padding-top: $aboutTpadding;}
#about{padding-bottom: $aboutBpadding;}

.counter-area{padding-top: $counterTpadding;}
.counter-area{padding-bottom: $counterBpadding;}

#features{padding-top: $featuresTpadding;}
#features{padding-bottom: $featuresBpadding;}

#service{padding-top: $servicesTpadding;}
#service{padding-bottom: $servicesBpadding;}

#gallery{padding-top: $secgalleryTpadding;}
#gallery{padding-bottom: $secgalleryBpadding;}

#team{padding-top: $teamTpadding;}
#team{padding-bottom: $teamBpadding;}

#project{padding-top: $projecTpadding;}
#project{padding-bottom: $projecBpadding;}

#pricing{padding-top: $pricingTpadding;}
#pricing{padding-bottom: $pricingBpadding;}

#appointment{padding-top: $appoinmentTpadding;}
#appointment{padding-bottom: $appoinmentBpadding;}

#blog{padding-top: $blogTpadding;}
#blog{padding-bottom: $blogBpadding;}

#footer{padding-top: $SectionfooterseTmargin;}
#footer{padding-bottom: $Sectionfootersebottommargin;}

.footer-area .bottom-area{padding-top: $bottomareaTmargin;}
.footer-area .bottom-area{padding-bottom: $bottomareabottommargin;}

#content-box ul li:before,
#content-box ul li:before{content: '$bulletpointicon' !important;}

main#innerpage-box h1,
body.page-template-default main#innerpage-box h1, .ht-main-title,
#ht-contactus-wrap h1{font-size: $headerinnerpageheading1;}

main#innerpage-box h1,
body.page-template-default main#innerpage-box h1, .ht-main-title,
#ht-contactus-wrap h1{font-weight: $innerpageheadingweight1;}

body.page-template-default main#innerpage-box h2,
main#innerpage-box h2,
h1.product_title.entry-title{font-size: $headerinnerpageheading2;}

body.page-template-default main#innerpage-box h2,
main#innerpage-box h2,
h1.product_title.entry-title{font-weight: $innerpageheadingweight2;}

main#innerpage-box h3,
body.page-template-default main#innerpage-box h3,
#innerpage-box div#content-box .teamdesbox h3,
.widget .widget-title, .widget .post-title,
div#sitemap-box h3{font-size: $headerinnerpageheading3;}

main#innerpage-box h3,
body.page-template-default main#innerpage-box h3,
#innerpage-box div#content-box .teamdesbox h3,
.widget .widget-title, .widget .post-title,
div#sitemap-box h3{font-weight: $innerpageheadingweight3;}

main#innerpage-box h4,
div#commentsAdd h4,
main#innerpage-box .main-inner-ser-bx h4.panel-header a{font-size: $headerinnerpageheading4;}

main#innerpage-box h4,
div#commentsAdd h4,
main#innerpage-box .main-inner-ser-bx h4.panel-header a{font-weight: $innerpageheadingweight4;}

main#innerpage-box h5{font-size: $headerinnerpageheading5;}
main#innerpage-box h5{font-weight: $innerpageheadingweight5;}

main#innerpage-box h6,
body.page-template-default main#innerpage-box h6,
div#blog-box.innerpage-whitebox h6{font-size: $headerinnerpageheading6;}

main#innerpage-box h6,
body.page-template-default main#innerpage-box h6,
div#blog-box.innerpage-whitebox h6{font-weight: $innerpageheadingweight6;}

 
#innerpage-box .ht-blog-thumbnail img{height: $allblogimgheight;}   
main#innerpage-box #blog-box h2{font-size: $bloginnerpageheading2;}
main#innerpage-box #blog-box h2{font-weight: $bloginnerpageheadingweight;}

.page-main-header{padding-top: $immerpageheadertitleboxTpadding;}
.page-main-header{padding-bottom: $immerpageheadertitleboxBpadding;}

    ";

    $custom_css .= "
button,
input[type='button'],
input[type='reset'],
input[type='submit'],
.widget-area .widget-title:after,
h3#reply-title:after,
h3.comments-title:after,
.nav-previous a,
.nav-next a,
.pagination .page-numbers,    
.ht-progress-bar-length,
.ht-service-post-wrap:after,
.ht-service-icon,
.ht-counter:after,
.ht-counter:before,
.ht-testimonial-wrap .bx-wrapper .bx-controls-direction a,
.ht-cta-buttons a.ht-cta-button1,
.ht-cta-buttons a.ht-cta-button2:hover,
#ht-back-top:hover,
.entry-readmore a,
.woocommerce #respond input#submit, 
.woocommerce a.button, 
.woocommerce button.button, 
.woocommerce input.button,
.woocommerce ul.products li.product:hover .button,
.woocommerce #respond input#submit.alt, 
.woocommerce a.button.alt, 
.woocommerce button.button.alt, 
.woocommerce input.button.alt,
.woocommerce nav.woocommerce-pagination ul li a, 
.woocommerce nav.woocommerce-pagination ul li span,
.woocommerce span.onsale,
.woocommerce div.product .woocommerce-tabs ul.tabs li.active,
.woocommerce #respond input#submit.disabled, 
.woocommerce #respond input#submit:disabled, 
.woocommerce #respond input#submit:disabled[disabled], 
.woocommerce a.button.disabled, .woocommerce a.button:disabled, 
.woocommerce a.button:disabled[disabled], 
.woocommerce button.button.disabled, 
.woocommerce button.button:disabled, 
.woocommerce button.button:disabled[disabled], 
.woocommerce input.button.disabled, 
.woocommerce input.button:disabled, 
.woocommerce input.button:disabled[disabled],
.woocommerce #respond input#submit.alt.disabled, 
.woocommerce #respond input#submit.alt.disabled:hover, 
.woocommerce #respond input#submit.alt:disabled, 
.woocommerce #respond input#submit.alt:disabled:hover, 
.woocommerce #respond input#submit.alt:disabled[disabled], 
.woocommerce #respond input#submit.alt:disabled[disabled]:hover, 
.woocommerce a.button.alt.disabled, 
.woocommerce a.button.alt.disabled:hover, 
.woocommerce a.button.alt:disabled, 
.woocommerce a.button.alt:disabled:hover, 
.woocommerce a.button.alt:disabled[disabled], 
.woocommerce a.button.alt:disabled[disabled]:hover, 
.woocommerce button.button.alt.disabled, 
.woocommerce button.button.alt.disabled:hover, 
.woocommerce button.button.alt:disabled, 
.woocommerce button.button.alt:disabled:hover, 
.woocommerce button.button.alt:disabled[disabled], 
.woocommerce button.button.alt:disabled[disabled]:hover, 
.woocommerce input.button.alt.disabled, 
.woocommerce input.button.alt.disabled:hover, 
.woocommerce input.button.alt:disabled, 
.woocommerce input.button.alt:disabled:hover, 
.woocommerce input.button.alt:disabled[disabled], 
.woocommerce input.button.alt:disabled[disabled]:hover,
.woocommerce .widget_price_filter .ui-slider .ui-slider-range,
.woocommerce-MyAccount-navigation-link a,
#ht-princing-post-section .ht-princing-icon,
.ht-princing-icon,      
.readmore a,
#content-box ol li:before,
.ht-slide-cap-descmore a,
.days-time-day,
.lz-oursteps-text ul li i,
.pagingation .current,
.pagingation a:hover,
.ht-appintment-member-wrap:after,
#commentsAdd input[type='submit'],
section#inner-blog-section .readMore:hover,
.woocommerce ul.products li.product .button,
.woocommerce #content div.product .woocommerce-tabs ul.tabs li:hover, 
.woocommerce div.product .woocommerce-tabs ul.tabs li:hover, 
.woocommerce-page #content div.product .woocommerce-tabs ul.tabs li:hover,
.woocommerce-page div.product .woocommerce-tabs ul.tabs li:hover,
.ht-main-navigation ul ul,
.pagination .page-numbers.current, .pagination a.page-numbers:hover,
div#sitemap-box h3,
.ht-blog-thumbnail .socialMedia a,
.widget_calendar tfoot tr td a ,
.wp-block-group__inner-container h2 {background:{$primColor};}

.ht-post-info .entry-date span.ht-day,
.entry-categories .fa,
.widget-area a:hover,
.comment-list a:hover,
.no-comments,
.woocommerce .woocommerce-breadcrumb a:hover,
#total-breadcrumbs a:hover,
.ht-featured-link a,
.ht-portfolio-cat-name-list .fa,
.ht-portfolio-cat-name:hover, 
.ht-portfolio-cat-name.active,
.ht-portfolio-caption a,
.ht-team-detail,
.ht-counter-icon,
.woocommerce ul.products li.product .price,
.woocommerce div.product p.price, 
.woocommerce div.product span.price,
.woocommerce .product_meta a:hover,
.woocommerce-error:before, 
.woocommerce-info:before, 
.woocommerce-message:before,
.featured-post:after,
.featured-post:before,
.featured-link a,
.breadcrumbbox a,
#ht-colophon .social-profile-icons a:hover,
footer#ht-colophon ul li a:hover,
.ht-footer .textwidget .fa,
h6.secondry-text,
#ht-about-us-section ul li:before,
.pluses.text-right i.fa.fa-plus,
.ht-section-tagline.lz-newslatter-text b,
#content-box ul li:before,
.offtimebox h4.offtime-text,
#ht-masthead .header-social-links span:hover,
#ht-masthead ul.header-menu-links li.mailto a:hover,
.ht-slider-highlighttext,
.edit-link a,
.inner-blog-post .socialMedia a:hover,
#comments a, 
#commentsAdd a,
#content-box a,
#content-box a i:hover,
#respond .stars span a,
#content-box .socialMedia a:hover,
.post-date-publishable i,
.woocommerce .star-rating span,
.woocommerce div.product .woocommerce-product-rating a,
#content-box .socialbxsinglepost:hover a i,
section#inner-blog-section h2.title small,
section#inner-blog-section h2.title a,
#secondary .current-cat a,
div#secondary .social-profile-icons ul li i,
.woocommerce .star-rating::before,
.socialMedia a:hover,
.ruh-time div:nth-child(8) div.days-time-day,
div#content-box header.woocommerce-Address-title.title a:hover,
#blog-box .ht-blog-date, #blog-box .ht-blog-date .fa,
.woocommerce table.shop_attributes th,
.widget-area span.woocommerce-Price-amount.amount{ color:{$primColor};}

.ht-featured-link a,
.ht-counter,
.ht-testimonial-wrap .bx-wrapper img,
.ht-blog-post,
#ht-colophon,
.woocommerce ul.products li.product:hover, 
.woocommerce-page ul.products li.product:hover,
.woocommerce #respond input#submit, 
.woocommerce a.button, 
.woocommerce button.button, 
.woocommerce input.button,
.woocommerce ul.products li.product:hover .button,
.woocommerce #respond input#submit.alt, 
.woocommerce a.button.alt, 
.woocommerce button.button.alt, 
.woocommerce input.button.alt,
.woocommerce div.product .woocommerce-tabs ul.tabs,
.woocommerce #respond input#submit.alt.disabled, 
.woocommerce #respond input#submit.alt.disabled:hover, 
.woocommerce #respond input#submit.alt:disabled, 
.woocommerce #respond input#submit.alt:disabled:hover, 
.woocommerce #respond input#submit.alt:disabled[disabled], 
.woocommerce #respond input#submit.alt:disabled[disabled]:hover, 
.woocommerce a.button.alt.disabled, 
.woocommerce a.button.alt.disabled:hover, 
.woocommerce a.button.alt:disabled, 
.woocommerce a.button.alt:disabled:hover, 
.woocommerce a.button.alt:disabled[disabled], 
.woocommerce a.button.alt:disabled[disabled]:hover, 
.woocommerce button.button.alt.disabled, 
.woocommerce button.button.alt.disabled:hover, 
.woocommerce button.button.alt:disabled, 
.woocommerce button.button.alt:disabled:hover, 
.woocommerce button.button.alt:disabled[disabled], 
.woocommerce button.button.alt:disabled[disabled]:hover, 
.woocommerce input.button.alt.disabled, 
.woocommerce input.button.alt.disabled:hover, 
.woocommerce input.button.alt:disabled, 
.woocommerce input.button.alt:disabled:hover, 
.woocommerce input.button.alt:disabled[disabled], 
.woocommerce input.button.alt:disabled[disabled]:hover,
.woocommerce .widget_price_filter .ui-slider .ui-slider-handle
.page-template-home-template .ht-main-navigation li:hover > a,
.home.blog .ht-main-navigation li:hover > a,
.page-template-home-template .ht-main-navigation .current > a,
.home.blog .ht-main-navigation .current > a,
.featured-post:before,
#blog-box .blog-read-more a,
main#innerpage-box .page-testimonial-box:hover,
.woocommerce ul.products li.product:hover, .woocommerce-page ul.products li.product:hover, 
main#innerpage-box .page-testimonial-box:hover .team-thumb img,
#ht-masthead .header-social-links span:hover,
.woocommerce ul.products li.product .button,
.newsletter-form-box input[type='email'],
div#sitemap-box h3:before,#sitemap-box:before ,
#content .tags a,
.inner_contentbox .socialMedia ul li a i{  border-color: {$primColor} !important;}

div#commentsAdd,
#ht-masthead,
.woocommerce-error, 
.woocommerce-info, 
.woocommerce-message,
div#sitemap-box{ border-top-color: {$primColor};}

.nav-next a:after{ border-left-color: {$primColor};}


.nav-previous a:after{ border-right-color: {$primColor}; }
.ht-active .ht-service-icon{
        box-shadow: 0px 0px 0px 2px #FFF, 0px 0px 0px 4px {$primColor};
 }

.woocommerce ul.products li.product .onsale:after{
    border-color: transparent transparent {$darker_color} {$darker_color};
}

.woocommerce span.onsale:after{
    border-color: transparent {$darker_color} {$darker_color} transparent
}


@media screen and (max-width: 991px){
    header .js-nav-toggle{border-color: {$navigationrespnavtoggbarbgssColor} !important;}
    header .js-nav-toggle span, header .js-nav-toggle span::before, 
    header .js-nav-toggle span::after{background-color: {$navigationrespnavtoggbarbgssColor};}
    header .nav-wrapper.show-menu{
        background:{$navigationrespnavbsbgssColor};
    }
    header nav .nav-title{
        color:{$navigationrespnavmenutitleColor};
    }
    header nav .nav-back:before{
        border-top-color:{$navigationrespnavmenutitleColor} !important;
    }
    header nav .nav-back:before{
        border-left-color:{$navigationrespnavmenutitleColor} !important;
    }
    header nav .nav-back:after{
        background-color:{$navigationrespnavmenutitleColor} !important;
    }
    header nav .nav-toggle{
        background-color:{$navigationrespnavmenutitlebgColor};
    }
    header .nav-wrapper nav a, header .nav-wrapper nav ul.sub-menu a,
    header nav li .submenu-icon i{
        color:{$navigationrespnavmenuColor} !important;
    }
    header .nav-wrapper nav{
        background-color:{$navigationrespnavmenubgColor};
    }
}

@media screen and (max-width: 991px){
.site-header {
    background:{$headertopheadbgclr} !important;
}
}

";


    // heading text colour 
$headingColor = get_theme_mod('ruh_title_color', '#F4B504');
$custom_css .= '.title-color{color:'.$headingColor.';}';

    // START SECONDARY COLOR CSS
$secondary = get_theme_mod('theme_secondary_color', '#F4B504');
$custom_css .='
.secondry-bg,
   #commentsAdd input[type="submit"]:hover,
input[type="button"]:hover, 
input[type="reset"]:hover, 
input[type="submit"]:hover,
div#secondary input[type="submit"]:hover,
.socialMedia a,
section#inner-blog-section .readMore,
.woocommerce ul.products li.product .button:hover,
.woocommerce #content div.product .woocommerce-tabs ul.tabs li, .woocommerce div.product .woocommerce-tabs ul.tabs li, .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li, .woocommerce-page div.product .woocommerce-tabs ul.tabs li, section#inner-blog-section h2.title,
.woocommerce #respond input#submit:hover,
.woocommerce a.button:hover, 
.woocommerce button.button:hover, 
.woocommerce input.button:hover,
div#content-box .wc-proceed-to-checkout a:hover,
.woocommerce #payment #place_order:hover, 
.woocommerce-page #payment #place_order:hover,
.woocommerce div.product form.cart .button:hover,
.single-productpage #sidebars button:hover,
.entry-readmore a:hover,
.pagination .page-numbers,
main#innerpage-box .ht-blog-thumbnail a:after{
    background-color:'.$secondary.'
}    
    #blog-box .blog-read-more a:hover,
.woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
.socialMedia a:hover,
.woocommerce ul.products li.product .button:hover,
.woocommerce #respond input#submit:hover,
.woocommerce a.button:hover, 
.woocommerce button.button:hover, 
.woocommerce input.button:hover,
div#content-box .wc-proceed-to-checkout a:hover,
.woocommerce #payment #place_order:hover, 
.woocommerce-page #payment #place_order:hover 
{border-color: '.$secondary.';}

main#innerpage-box #blog-box h2, 
main#innerpage-box #blog-box h2 small,
div#secondary .social-profile-icons ul li i:hover {color:'.$secondary.';}  

.woocommerce-MyAccount-navigation-link.is-active a,
.inner_contentbox .socialMedia ul li a:hover i {color:'.$secondary.' !important;}    


.product_list_widget .amount,
.product_list_widget del .amount,
.woocommerce ul.products li.product .total-product-title-wrap small,
.total-product-title-wrap,
.woocommerce div.product .product_title small,
.woocommerce div.product .product_title,
div#content-box p a:hover,
div#content-box .woocommerce-info a:hover,
section#inner-blog-section h2.title:hover small,
.woocommerce .widget_rating_filter ul li a:hover span,
.woocommerce .star-rating:hover, 
.woocommerce-page .star-rating:hover span,
main#innerpage-box h2.woocommerce-loop-product__title small,
main#innerpage-box h2.woocommerce-loop-product__title,
.woocommerce ul.products li.product .price del, .site-title a,
.widget-area del span.woocommerce-Price-amount.amount,
.ht-main-title span
{color: '.$secondary.';}

';

 // header menus 

$headerHmailicnClr = get_theme_mod('header_HmailicnClr', '#fff');
$headerHmailidClr = get_theme_mod('header_HmailidClr', '#fff');
$headerHmailidhvClr = get_theme_mod('header_HmailidhvClr', '#F4B504');

$headersicnbgClr = get_theme_mod('header_sicnbgClr', '#fff');
$headersicnIcnClr = get_theme_mod('header_sicnIcnClr', '#000');
$headersicnIcnhvClr = get_theme_mod('header_sicnIcnhvClr', '#F4B504');

$headerinnpagetopmenusClr = get_theme_mod('header_innpagetopmenusClr', '#fff');
$HeadertopmenusColorColor = get_theme_mod('header_topmenusColor', '#000');
$HeadertopmenushoverColorColor = get_theme_mod('header_topmenushoverColor', '#F4B504');
$HeadertopmenusactiveColorColor = get_theme_mod('header_topmenusactiveColor', '#9648e5');

$HeadertopsubmenusColor = get_theme_mod('header_topsubmenusColor', '#000');
$headertopsubmenusbrdclr = get_theme_mod('header_topsubmenusbrdclr', '#f1f1f1');
$HeadertopsubmenushvrColor = get_theme_mod('header_topsubmenushvrColor', '#F4B504');
$navigationrestopsubmenusbgsscColor = get_theme_mod( 'header_submenusbgsscColor', '#fff' );

$headerSiteTitleClr = get_theme_mod( 'header_SiteTitleClr', '#F4B504' );
$headerSiteTaglineClr = get_theme_mod( 'header_SiteTaglineClr', '#000' );


$navigationheadersubmenusbordercColor = get_theme_mod( 'header_headersubmenusbordercColor', '#ffffff' );

    $custom_css .= '
header .h-emil i, header .tp-head .share-icn{color: '.$headerHmailicnClr.';}
header .h-mail a, header .headphone a{color: '.$headerHmailidClr.';}
header .h-mail:hover .infoinnbx a{color: '.$headerHmailidhvClr.';}

header .h-social li a{background-color: '.$headersicnbgClr.';}
header .h-social li a{color: '.$headersicnIcnClr.';}
header .h-social li:hover a{color: '.$headersicnIcnhvClr.';}

.navigation .mainmenu li a{color: '.$headerinnpagetopmenusClr.';}
.home .navigation .mainmenu li a{color: '.$HeadertopmenusColorColor.';}
.navigation .mainmenu li a:hover,
div#navbarNavDropdown li.current_page_item a:hover, .current_page_item > a:hover{color: '.$HeadertopmenushoverColorColor.';}
.navigation .mainmenu li.current_page_item a, .current_page_item > a{color: '.$HeadertopmenusactiveColorColor.';}

header.site-header ul.sub-menu li a,  
.navigation .mainmenu li.current_page_item ul.sub-menu li a, 
.header.site-header ul.sub-menu li a{color: '.$HeadertopsubmenusColor.';}

.navigation .mainmenu ul.sub-menu li {border-color: '.$headertopsubmenusbrdclr.';}


.navigation .mainmenu ul.sub-menu li.current_page_item a, ul.sub-menu .current_page_item > a,
div#navbarNavDropdown ul.sub-menu li.current_page_item a:hover, ul.sub-menu .current_page_item > a:hover,
div#navbarNavDropdown li.current_page_item ul.sub-menu li a:hover,header.site-header ul.sub-menu li a:hover,
.header.site-header ul.sub-menu li:hover a {color: '.$HeadertopsubmenushvrColor.';}

ul.sub-menu, header.site-header ul.sub-menu{background-color: '.$navigationrestopsubmenusbgsscColor.';}

.ht-site-title a{color: '.$headerSiteTitleClr.';}
.ht-site-description a{color: '.$headerSiteTaglineClr.';}
.navigation .mainmenu ul.sub-menu li a:after{background-color: '.$navigationheadersubmenusbordercColor.';}


';



      // slider color
$slidersgradcolor = get_theme_mod('slider_bg_color', '#fff');
$slidersubtitleColor = get_theme_mod('slider_SubtitleColor', '#555555');
$sliderTitleColor = get_theme_mod('slider_titleColor', '#000');
$slidertitlehgClr = get_theme_mod('slider_titlehgClr', '#9648e5');

// ==========sliding Button=================
$sliderslidebtnicnclr = get_theme_mod('slider_slidebtnicnclr', '#fff');
$sliderslidebtnbgclr1 = get_theme_mod('slider_slidebtnbgclr1', '#3230AF');
$sliderslidebtnbgclr2 = get_theme_mod('slider_slidebtnbgclr2', '#7B41D6');



$custom_css .= '
.slider_section .title, .slider_section .title small {color: '.$sliderTitleColor.';}
.slider_section .title span {color: '.$slidertitlehgClr.';}
.slider_section .sub-title, .slider_section .sub-title small{color: '.$slidersubtitleColor.';}
.slider_section .slider_gradiant{background: '.$slidersgradcolor.';}
.slider_section .sliderbtn a{color: '.$sliderslidebtnicnclr.';}
.slider_section .sliderbtn a{ background: linear-gradient(270deg, '.$sliderslidebtnbgclr1.' 0%, '.$sliderslidebtnbgclr2.' 100%);}

 ';


//Service Section

 if(get_theme_mod('ruh_premium_service_section_background','off') == 'on' ){

    $bgimg = get_theme_mod('ruh_service_bg_image');
    $img = !empty($bgimg)?$bgimg:get_template_directory_uri().'/images/default.png';

    $custom_css .= '#service{background-image: url("'.$img.'");background-position: top;background-size: cover;background-repeat: no-repeat;}';
}else{
    $color = get_theme_mod('ruh_service_bg_color', '#fff');
    if('#fff' != $color){
        $custom_css .= '#service {background-color: '.$color.';}';
    }
}

//section color 


$sersecheadingclr = get_theme_mod('sersec_heading_clr', '#000');
$servicearea_nobg_clr1 = get_theme_mod('servicearea_nobg_clr1', '#3230AF');
$servicearea_nobg_clr2 = get_theme_mod('servicearea_nobg_clr2', '#b88aff');

$servicessecTitleClr = get_theme_mod('services_secTitleClr', '#111944');
$servicessecTitlehvClr = get_theme_mod('services_secTitlehvClr', '#000');
$servicessectxtlClr = get_theme_mod('services_sectxtlClr', '#111944');


$custom_css .= '

#service h2, #service h2 small{color: '.$sersecheadingclr.';}
#service h5.service-number{background: linear-gradient(253deg, '.$servicearea_nobg_clr1.' 0%, '.$servicearea_nobg_clr2.' 100%);}


#service h4, #service h4 small{color: '.$servicessecTitleClr.';}
#service p{color: '.$servicessectxtlClr.';}
#service .single-service:hover .sertxbx h4, 
#service .single-service:hover .sertxbx h4 small{color: '.$servicessecTitlehvClr.';}


';


// Services Inner page:

$serinnpgimgheight = get_theme_mod('serinnpg_imgheight', '260px');
$InnSerTitleClr = get_theme_mod('ruh_InnSerTitleClr', '#111944');
$InnSerTextClr = get_theme_mod('ruh_InnSerTextClr', '#111944');

$InnSerbtnbrdClr = get_theme_mod('ruh_InnSerbtnbrdClr', '#111944');
$InnSerbtnicnClr = get_theme_mod('ruh_InnSerbtnicnClr', '#F4B504');
$InnSerbtnClr = get_theme_mod('ruh_InnSerbtnClr', '#111944');
$InnSerbtnicnhvCl = get_theme_mod('ruh_InnSerbtnicnhvClr', '#fff');

$InnSerbtnbgClr = get_theme_mod('ruh_InnSerbtnbgClr', '#fff');
$InnSerbtnbghvClr = get_theme_mod('ruh_InnSerbtnbghvClr', '#F4B504');

$custom_css .= '
#innerpage-box .singleinner-service .service_inimg img{height: '. $serinnpgimgheight.';}

#innerpage-box .serbx h2,
#innerpage-box .serbx h2 small{color: '. $InnSerTitleClr.' !important;}

#innerpage-box .serbx p{color: '. $InnSerTextClr.';}

#innerpage-box .serbtn a {border-color: '. $InnSerbtnbrdClr.';}
#innerpage-box .serbtn a svg path{fill: '. $InnSerbtnicnClr.';}
#innerpage-box .serbtn a{color: '. $InnSerbtnClr.';}
#innerpage-box .serbtn a:hover{color: '. $InnSerbtnicnhvCl.';}
#innerpage-box .serbtn a{background-color: '. $InnSerbtnbgClr.';}
#innerpage-box .serbtn a:hover{background-color: '. $InnSerbtnbghvClr.';}

';


// Project Inner page colors

$projectimgheight = get_theme_mod('project_imgheight', '283px');
$Innprojecttitlbgclr = get_theme_mod('pages_Innprojecttitlbgclr', '#f4b643');
$Innprojecttitlclr = get_theme_mod('pages_Innprojecttitlclr', '#fff');

$custom_css .= '

#innerpage-box .single-project img{height: '. $projectimgheight.';}
#innerpage-box .single-project .project-title-box{background-color: '. $Innprojecttitlbgclr.';}
#innerpage-box .single-project .project-title-box h2,
#innerpage-box .single-project .project-title-box h2 small{color: '. $Innprojecttitlclr.';}

';


// about Us Section

if(get_theme_mod('ruh_premium_aboutus_section_background','off') == 'on' ){

    $bgimg = get_theme_mod('ruh_aboutus_bg_image');
    $img = !empty($bgimg)?$bgimg:get_template_directory_uri().'/images/default-gray.png';

    $custom_css .= '#about{background-image: url("'.$img.'");background-position: top;background-size: cover;}';
}else{
    $color = get_theme_mod('ruh_aboutus_bg_color', '#fff');
    if('#fff' != $color){
        $custom_css .= '#about {background-color: '.$color.';}';
    }
}

// about section color

$aboutsecsimgTxtbg1 = get_theme_mod('about_secsimgTxtbg1', '#3230AF');
$aboutsecsimgTxtbg2 = get_theme_mod('about_secsimgTxtbg2', '#9c68ee');
$aboutsecsimgTxt = get_theme_mod('about_secsimgTxt', '#fff');

$aboutareasectitle = get_theme_mod('about_area_sectitle_clr', '#111944');
$aboutareaTextColor = get_theme_mod('about_area_text', '#000');

$aboutareabtntextColor = get_theme_mod('about_area_btn_text', '#fff');
$aboutareabtnbgColor1 = get_theme_mod('about_area_btn_bg1', '#3230AF');
$aboutareabtnbgColor2 = get_theme_mod('about_area_btn_bg2', '#7B41D6');

$custom_css .= ' 

#about .year{background: linear-gradient(222deg, '.$aboutsecsimgTxtbg1.' 0%, '.$aboutsecsimgTxtbg2.' 100%);}
#about .year .y-num,
#about .year .y-text{color: '.$aboutsecsimgTxt.';}

#about .abtsection-title h2, 
#about .abtsection-title h2 small{color: '.$aboutareasectitle.';}
#about .section-subtext p{color: '.$aboutareaTextColor.';}

#about .section-btn a{color: '.$aboutareabtntextColor.';}
#about .section-btn a{background: linear-gradient(270deg, '.$aboutareabtnbgColor1.' 0%, '.$aboutareabtnbgColor2.' 100%);}


';


// counter
if(get_theme_mod('ruh_premium_counter_section_background','off') == 'on' ){

    $bgimg = get_theme_mod('ruh_counter_bg_image');
    $img = !empty($bgimg)?$bgimg:get_template_directory_uri().'/images/default-gray.png';

    $custom_css .= '.counter-area{background-image: url("'.$img.'");background-position: top;background-size: cover;background-attachment: fixed;}';
}else{
    $color = get_theme_mod('ruh_counter_bg_color', '#fff');
    if('#fff' != $color){
        $custom_css .= '.counter-area{background-color: '.$color.';}';
    }
}

  // counter color

$counterHeadingClr = get_theme_mod('counter_HeadingClr', '#111944');
$countersHeadingClr = get_theme_mod('counter_sHeadingClr', '#000');


$custom_css .= '

.counter-area h2,.counter-area h2 small{color: '.$counterHeadingClr.';}
.counter-area p{color: '.$countersHeadingClr.';}

';


// features section 

if(get_theme_mod('ruh_premium_featuresus_section_background','off') == 'on' ){

    $bgimg = get_theme_mod('ruh_featuresus_bg_image');
    $img = !empty($bgimg)?$bgimg:get_template_directory_uri().'/images/default.png';

    $custom_css .= '#features{background-image: url("'.$img.'");background-position: top;background-size: cover;}';
}else{
    $color = get_theme_mod('ruh_featuresus_bg_color', '#fff');
    if('#fff' != $color){
        $custom_css .= '#features{background-color: '.$color.';}';
    }
}


//features section color

$featuresareaheading = get_theme_mod('features_area_heading', '#000');
$featuresltxt = get_theme_mod('features_ltxt', '#111944');
$featuresareaheading1 = get_theme_mod('features_area_heading1', '#000');
$featuresltxt1 = get_theme_mod('features_ltxt1', '#111944');
$features_area_box1 = get_theme_mod('features_area_box1', '#3230AF');
$features_area_box2 = get_theme_mod('features_area_box2', '#b88aff');
$features_area_vision_box1 = get_theme_mod('features_area_vision_box1', '#3230AF');
$features_area_vision_box2 = get_theme_mod('features_area_vision_box2', '#b88aff');

$features_area_no = get_theme_mod('features_area_no', '#fff');
$features_area_nobg1 = get_theme_mod('features_area_nobg1', '#3230AF');
$features_area_nobg2 = get_theme_mod('features_area_nobg2', '#b88aff');
$features_area_listtitle1 = get_theme_mod('features_area_listtitle1', '#9f00de');
$features_area_listtext1 = get_theme_mod('features_area_listtext1', '#000');

$features_area_no1 = get_theme_mod('features_area_no1', '#fff');
$features_area_nobg12 = get_theme_mod('features_area_nobg12', '#3230AF');
$features_area_nobg21 = get_theme_mod('features_area_nobg21', '#b88aff');
$features_area_listtitle2 = get_theme_mod('features_area_listtitle2', '#9f00de');
$features_area_listtext2 = get_theme_mod('features_area_listtext2', '#000');

$custom_css .= ' 

#features .features-title h2,#features .features-title h2 small{color: '.$featuresareaheading.';}
#features .features-title p{color: '.$featuresltxt.';}
#features .features-title1 h2,#features .features-title1 h2 small{color: '.$featuresareaheading1.';}
#features .features-title1 p{color: '.$featuresltxt1.';}
#features .mission .featurearea-img::before{background: linear-gradient(253deg, '.$features_area_box1.' 0%, '.$features_area_box2.' 100%);}
#features .vision .featurearea-img::after{background: linear-gradient(253deg, '.$features_area_vision_box1.' 0%, '.$features_area_vision_box2.' 100%);}

#features .vision-post span{color: '.$features_area_no.';}
#features .vision-post span{background: linear-gradient(253deg, '.$features_area_nobg1.' 0%, '.$features_area_nobg2.' 100%); color: ;}
#features .vision-post h5{color: '.$features_area_listtitle1.';}
#features .vision-post p{color: '.$features_area_listtext1.';}

#features .mission-post span{color: '.$features_area_no1.';}
#features .mission-post span{background: linear-gradient(253deg, '.$features_area_nobg12.' 0%, '.$features_area_nobg21.' 100%); color: ;}
#features .mission-post h5{color: '.$features_area_listtitle2.';}
#features .mission-post p{color: '.$features_area_listtext2.';}


';


// Team section 
if(get_theme_mod('ruh_premium_team_section_background','off') == 'on' ){

    $bgimg = get_theme_mod('ruh_team_bg_image');
    $img = !empty($bgimg)?$bgimg:get_template_directory_uri().'/images/default.png';

    $custom_css .= 'div#team {background-image: url("'.$img.'");background-position: top;background-size: cover;}'; 
}else{
    $color = get_theme_mod('ruh_team_bg_color', '#fff');
    if('#fff' != $color){
        $custom_css .= 'div#team {background-color: '.$color.';}';
    }
} 
//colors

$teamareasecheadigclr = get_theme_mod('teamarea_secheadig_clr', '#111944');
$TeamNameCColor = get_theme_mod('Team_secNameCClr', '#000');
$TeamTeamDesignationColor = get_theme_mod('Team_secDesignationCClr', '#606060');
$Team_imgbgClr1 = get_theme_mod('Team_imgbgClr1', '#3230AF');
$Team_imgbgClr2 = get_theme_mod('Team_imgbgClr2', '#b88aff');


$custom_css .= '

#team .section-title h2, #team .section-title h2 small{color: '.$teamareasecheadigclr.';}
#team .team-text h4, #team .team-text h4 small{color: '.$TeamNameCColor.';}
#team .team-text .team-designation{color: '.$TeamTeamDesignationColor.';}
#team .single-team-img::before{background: linear-gradient(253deg, '.$Team_imgbgClr1.' 0%, '.$Team_imgbgClr2.' 100%); color: '.$TeamTeamDesignationColor.';}

';

//Team Page colors


$InnerTeambxbgClr = get_theme_mod('pages_InnerTeambxbgClr', '#111944');
$InnTeamimgClr = get_theme_mod('pages_InnTeamimgClr', '#FFE18E');
$InnTeambxbgClr = get_theme_mod('pages_InnTeambxbgClr', '#f2f2f2');
$InnerTeamNameClr = get_theme_mod('pages_InnTeamNameClr', '#3f455d');
$InnerTeamTeamDesignationColor = get_theme_mod('pages_InnerTeamDesignationCClr', '#111944');
$InnerTeamsocialssClr = get_theme_mod('pages_InnerTeamsocialsClr', '#fff');
$InnerTeamsocialsshvClr = get_theme_mod('pages_InnerTeamsocialsicnhvClr', '#F4B504');
$InnerTeamsocialsbrdClr = get_theme_mod('pages_InnerTeamsocialsbrdClr', '#F4B504');


$custom_css .= '
#innerpage-box .teamimg, #innerpage-box .single-team-img{outline-color: '.$InnTeamimgClr.' ;}
#innerpage-box .textbx{background-color: '.$InnTeambxbgClr.' ;}
#innerpage-box .inner-team h2.inner-area-title , 
#innerpage-box .inner-team h2.inner-area-title  small{color: '.$InnerTeamNameClr.' ;}
#innerpage-box .textbx .team-designation{color: '.$InnerTeamTeamDesignationColor.';}
#innerpage-box .team-social-icon a i{color: '.$InnerTeamsocialssClr.';}
#innerpage-box .team-social-icon a:hover i{color: '.$InnerTeamsocialsshvClr.';}
#innerpage-box .team-social-icon {background-color: '.$InnerTeambxbgClr.';}
#innerpage-box .team-social-icon li:after{border-color: '.$InnerTeamsocialsbrdClr.';}

';

// schedule section 

if(get_theme_mod('ruh_premium_scheduleus_section_background','off') == 'on' ){

    $bgimg = get_theme_mod('ruh_scheduleus_bg_image');
    $img = !empty($bgimg)?$bgimg:get_template_directory_uri().'/images/default-gray.png';

    $custom_css .= '#schedule{background-image: url("'.$img.'");background-position: top;background-size: cover;}';
}else{
    $color = get_theme_mod('ruh_scheduleus_bg_color', '#111944');
    if('#111944' != $color){
        $custom_css .= '#schedule{background-color: '.$color.';}';
    }
}

// schedule section  color

$scheduleicnclr = get_theme_mod('schedule_icnclr', '#fff');
$scheduleicnbgclr = get_theme_mod('schedule_icnbgclr', '#F4B504');
$scheduletitleclr = get_theme_mod('schedule_titleclr', '#fff');
$scheduletitlehvclr = get_theme_mod('schedule_titlehvclr', '#F4B504');
$scheduletextclr = get_theme_mod('schedule_textclr', '#fff');

$custom_css .= '

#schedule .icn span{color: '.$scheduleicnclr.';}
#schedule .icn{background-color: '.$scheduleicnbgclr.';}
#schedule .schedule-area-data h4,
#schedule .schedule-area-data h4 small{color: '.$scheduletitleclr.';}
#schedule .schedule-area-data h4:hover,#schedule .schedule-area-data h4:hover small{color: '.$scheduletitlehvclr.';}
#schedule .schedule-area-data p{color: '.$scheduletextclr.';}

';


//testimonials Inner Page colors

$innerTsbxbrdClr = get_theme_mod('ruh_innertestimonials_bxbrdclr', '#fff');
$innerTsNameColor = get_theme_mod('ruh_innertesi_Nameclr', '#111944');
$innerTsBoxpostionColor = get_theme_mod('ruh_innertesti_postionclr', '#111944');
$innerTsbxtitlebrdclr = get_theme_mod('ruh_innertesti_titlebrdclr', '#F4B504');
$innerTsimgarrwbrdclr = get_theme_mod('ruh_innertesti_imgarrwbrdclr', '#F4B504');
$innerTstextclr = get_theme_mod('ruh_innerTs_textclr', '#111944');
$innerTsicnclr = get_theme_mod('ruh_innerTs_icnclr', '#e5e5e5');

$custom_css .= '

#innerpage-box .tsareainn{background-color: '.$innerTsbxbrdClr.' ;}
#innerpage-box h3.ts-area-title, #innerpage-box h3.ts-area-title small{color: '.$innerTsNameColor.' !important;}
#innerpage-box .ts-area-bx{border-color: '.$innerTsbxtitlebrdclr.' ;}
#innerpage-box .innertest-item .text-designation{color: '.$innerTsBoxpostionColor.';}
#innerpage-box .ts-area-thumb svg path{fill: '.$innerTsimgarrwbrdclr.';}
#innerpage-box .ts-area-c p{color: '.$innerTstextclr.';}
#innerpage-box .ts-area-c:after{color: '.$innerTsicnclr.';}

';


// appointment Section
if(get_theme_mod('ruh_premium_appointment_section_background','on') == 'on' ){

    $bgimg = get_theme_mod('ruh_appointment_bg_image');
    $img = !empty($bgimg)?$bgimg:get_template_directory_uri().'/images/slider-banner.jpg';

    $custom_css .= '#appointment{background-image: url("'.$img.'");background-position: top;background-size: cover;background-attachment: fixed;}';
}else{
    $color = get_theme_mod('ruh_appointment_bg_color', '#fff');
    if('#191919' != $color){
        $custom_css .= '#appointment {background-color: '.$color.';}';
    }
}


// appointment form color

$appsecheadingclr = get_theme_mod('app_secheadingclr', '#000');

// form

$inquiryformTextColor = get_theme_mod('inquiry_forminputtxtClr', '#fff');
$inquiryformbgColor = get_theme_mod('inquiry_forminputbgColor', '#fff');
$inquirybtnTextColor = get_theme_mod('inquiry_formbuttontextColor', '#fff');
$inquirybtnbgColor = get_theme_mod('inquiry_formbuttonbgColor', '#F4B504');
$inquirybtnTexthoverColor = get_theme_mod('inquiry_formbuttontexthoverColor', '#F4B504');
$inquirybtnbghoverColor = get_theme_mod('inquiry_formbuttonbghoverColor', '#180360');
$inquirylabelColor = get_theme_mod('inquiry_formlabelColor', '#fff');

// detail Box
$inquirybtntxticnclr = get_theme_mod('inquiry_btntxticnclr', '#fff');
$inquirybtntxticnbgclr1 = get_theme_mod('inquiry_btntxticnbgclr1', '#3230AF');
$inquirybtntxticnbgclr2 = get_theme_mod('inquiry_btntxticnbgclr2', '#b88aff');
$inquirybtntxtclr = get_theme_mod('inquiry_btntxtclr', '#111944');
$inquirybtntxthvclr = get_theme_mod('inquiry_btntxthvclr', '#F4B504');

$custom_css .= '

#appointment .app-detail .icnbx i{color: '. $inquirybtntxticnclr.';}
#appointment .icnbx{background: linear-gradient(253deg, '. $inquirybtntxticnbgclr1.' 0%, '. $inquirybtntxticnbgclr2.' 100%);}

#appointment .info-txt a, #appointment .info-txt p{color: '. $inquirybtntxtclr.';}
#appointment .info-txt a:hover{color: '. $inquirybtntxthvclr.';}

#appointment .app-title h2,#appointment .app-title h2 small{color: '. $appsecheadingclr.';}

.ht-inquiry-member-wrap input[type="text"], 
.ht-inquiry-member-wrap input[type="email"], 
.ht-inquiry-member-wrap input[type="url"], 
.ht-inquiry-member-wrap input[type="password"], 
.ht-inquiry-member-wrap input[type="search"], 
.ht-inquiry-member-wrap input[type="number"], 
.ht-inquiry-member-wrap input[type="tel"], 
.ht-inquiry-member-wrap input[type="range"], 
.ht-inquiry-member-wrap input[type="date"], 
.ht-inquiry-member-wrap input[type="month"], 
.ht-inquiry-member-wrap input[type="week"], 
.ht-inquiry-member-wrap input[type="time"], 
.ht-inquiry-member-wrap input[type="datetime"],
.ht-inquiry-member-wrap input[type="datetime-local"], 
.ht-inquiry-member-wrap input[type="color"],
.ht-inquiry-member-wrap input[type="file"],
.ht-inquiry-member-wrap select,
.ht-inquiry-member-wrap textarea,
.ht-inquiry-member-wrap input::placeholder,
.ht-inquiry-member-wrap textarea::placeholder {color: '. $inquiryformTextColor.';}

.ht-inquiry-member-wrap input[type="text"], 
.ht-inquiry-member-wrap input[type="email"], 
.ht-inquiry-member-wrap input[type="url"], 
.ht-inquiry-member-wrap input[type="password"], 
.ht-inquiry-member-wrap input[type="search"], 
.ht-inquiry-member-wrap input[type="number"], 
.ht-inquiry-member-wrap input[type="tel"], 
.ht-inquiry-member-wrap input[type="range"], 
.ht-inquiry-member-wrap input[type="date"], 
.ht-inquiry-member-wrap input[type="month"], 
.ht-inquiry-member-wrap input[type="week"], 
.ht-inquiry-member-wrap input[type="time"], 
.ht-inquiry-member-wrap input[type="datetime"],
.ht-inquiry-member-wrap input[type="datetime-local"], 
.ht-inquiry-member-wrap input[type="color"],
.ht-inquiry-member-wrap input[type="file"],
.ht-inquiry-member-wrap select,
.ht-inquiry-member-wrap textarea,
#appointment .ht-inquiry-member-wrap{border-bottom-color: '. $inquiryformbgColor.'!important; }

.ht-inquiry-member-wrap input[type="submit"] {color: '. $inquirybtnTextColor.';}

.ht-inquiry-member-wrap input[type="submit"]{background-color: '. $inquirybtnbgColor.';}  
.ht-inquiry-member-wrap input[type="submit"]:hover {color: '. $inquirybtnTexthoverColor.';}
.ht-inquiry-member-wrap input[type="submit"]:hover{background-color: '. $inquirybtnbghoverColor.';}

.ht-inquiry-member-wrap label{color: '. $inquirylabelColor.';} 

';

    // project section

if(get_theme_mod('ruh_premium_project_section_background','off') == 'on' ){

    $bgimg = get_theme_mod('ruh_project_bg_image');
    $img = !empty($bgimg)?$bgimg:get_template_directory_uri().'/images/default-gray.png';

    $custom_css .= '#project {background-image: url("'.$img.'");background-position: top;background-size: cover;}'; 
}else{
    $color = get_theme_mod('ruh_project_bg_color', '#fff');
    if('#fff' != $color){
        $custom_css .= '#project {background-color: '.$color.';}';
    }
} 

//colors
$projectarattle = get_theme_mod('projectarattle', '#111944');
$projectecttle = get_theme_mod('projectecttle', '#111944');
$projectecttlebdr = get_theme_mod('projectecttlebdr', '#4337b8');
$projectectext = get_theme_mod('projectectext', '#979797');
$projectecimgbefore1 = get_theme_mod('projectecimgbefore1', '#3230AF');
$projectecimgbefore2 = get_theme_mod('projectecimgbefore2', '#b88aff');


$custom_css .= '

#project .section-title h2,#project .section-title h2 small{color: '.$projectarattle.';}
#project .single-project h2,#project .single-project h2 small{color: '.$projectecttle.';}
#project .single-project h2{border-color: '.$projectecttlebdr.';}
#project .project-img::before{background: linear-gradient(253deg, '.$projectecimgbefore1.' 0%, '.$projectecimgbefore2.' 100%);}

';

 
    // Blog section 
if(get_theme_mod('ruh_premium_blog_section_background','off') == 'on' ){

    $bgimg = get_theme_mod('ruh_blog_bg_image');
    $img = !empty($bgimg)?$bgimg:get_template_directory_uri().'/images/default-gray.png';

    $custom_css .= 'div#blog {background-image: url("'.$img.'");background-position: top;background-size: cover;}'; 
}else{
    $color = get_theme_mod('ruh_blog_bg_color', '#fff');
    if('#fff' != $color){
        $custom_css .= 'div#blog {background-color: '.$color.';}';
    }
} 
//colors

$blogareasectitle = get_theme_mod('blogarea_sectitle_clr', '#111944');

$blogareabxicnbxbgclr = get_theme_mod('blogarea_bxicnbxbgclr', '#F4B504');
$blogareabxicnbxbgbrdclr = get_theme_mod('blogarea_bxicnbxbgbrdclr', '#d3d7da');
$blogareabxdateclr = get_theme_mod('blogarea_bxdateclr', '#111944');
$blogareaTitle = get_theme_mod('blogarea_Title_color', '#111944');
$blogareaTitlehover = get_theme_mod('blogarea_Titlehover_color', '#F4B504');
$blogareabox = get_theme_mod('blogarea_box_color', '#f2f3f5');
$blogareatext = get_theme_mod('blogarea_text_color', '#111944');

$blogareabtnarroclr = get_theme_mod('blogarea_btnarroclr', '#F4B504');
$blogareabtnhvclr = get_theme_mod('blogarea_btnhvclr', '#111944');
$blogareaimghvclr = get_theme_mod('blogarea_imghvclr', '#000');

$custom_css .= '

.blog-area .section-title h2, 
.blog-area .section-title h2 small{color: '.$blogareasectitle.';}

.blog-area .blog-single a .inner-area-title, 
.blog-area .blog-single a .inner-area-title small{color: '.$blogareaTitle.';}
.blog-area .box-area-S:hover .blog-single a .inner-area-title, 
.blog-area .box-area-S:hover .blog-single a .inner-area-title small{color: '.$blogareaTitlehover.';}

.blog-area .blog-date i{color: '.$blogareabxicnbxbgclr.';}
.blog-area .blog-date{border-color: '.$blogareabxicnbxbgbrdclr.';}
.blog-area .blog-date{color: '.$blogareabxdateclr.';}

.blog-area .box-area-S{background-color: '.$blogareabox.';}
.blog-area .blog-single p{color: '.$blogareatext.';}

.blog-area a.blogbtn{color: '.$blogareabtnarroclr.';}
.blog-area a.blogbtn:hover{color: '.$blogareabtnhvclr.';}
.blog-area .overlay{background-color: '.$blogareaimghvclr.';}

';


// For Footer

if(get_theme_mod('ruh_premium_footer_section_background','on') == 'off' ){

    $bgimg = get_theme_mod('ruh_footer_bg_image');
    $img = !empty($bgimg)?$bgimg:get_template_directory_uri().'/images/default-graybg.png';

    $custom_css .= '.footer-area{background-image: url("'.$img.'");background-position: top;background-size: cover;}';
}else{
    $color = get_theme_mod('ruh_footer_bg_color', '#111944');
    if('#111944' != $color){
        $custom_css .= '.footer-area{background-color: '.$color.';}';
    }
}

// footer in

// if(get_theme_mod('ruh_premium_footerinn_section_background','on') == 'on' ){

//     $bgimg = get_theme_mod('ruh_footerinn_bg_image');
//     $img = !empty($bgimg)?$bgimg:get_template_directory_uri().'/images/footer1.jpg';

//     $custom_css .= '.footer-area .single-footer-1{background-image: url("'.$img.'");background-position: top;background-size: cover;}';
// }else{
//     $color = get_theme_mod('ruh_footerinn_bg_color', '#fff');
//     if('#fff' != $color){
//         $custom_css .= '.footer-area .single-footer-1{background-color: '.$color.';}';
//     }
// }


// colors

$footerareaf1olyclr = get_theme_mod('footerarea_f1oly_clr', '#F4B504');
$footerareafmtitleclr = get_theme_mod('footerarea_fmtitleclr', '#111944');
$footerareafmtxtclr = get_theme_mod('footerarea_fmtxtclr', '#111944');
$FooterAreaTitleColor = get_theme_mod('footerarea_title_color', '#fff');
$FooterAreaTextColor = get_theme_mod('footerarea_text_color', '#fff');
$FooterAreaiconColor = get_theme_mod('footerarea_icon_color', '#F4B504');

$FooterAreasiconColor = get_theme_mod('footerarea_sicon_color', '#fff');
$FooterAreasiconbrdClr = get_theme_mod('footerarea_siconbrd_clr', '#fff');
$FooterAreasiconbghvColor = get_theme_mod('footerarea_siconbghv_clr', '#F4B504');

//$FooterAreahglightsctextColor = get_theme_mod('footerarea_hglightsctext_color', '#fff');
$FooterAreamenuColor = get_theme_mod('footerarea_menu_color', '#fff');
//$FooterAreamenuicnClr = get_theme_mod('footerarea_menuicn_clr', '#000');
//.footer-area li:before{color: '.$FooterAreamenuicnClr.';}
$FooterAreadatextColor = get_theme_mod('footerarea_datext_color', '#fff');

$FooterAreatafmbgClr = get_theme_mod('FooterAreata_fmbgClr', '#fff');
$FooterAreatabgColor = get_theme_mod('FooterAreatabgColor', '#fff');
$FooterAreatabrdClr = get_theme_mod('FooterAreata_brdClr', '#e1e1e1');

$FooterAreaformtextColor = get_theme_mod('footerarea_formtext_color', '#111944');
$FootermenuhoverColor = get_theme_mod('footerarea_menuhover_color', '#F4B504');
$FooteractivemenuColor = get_theme_mod('footerarea_activemenu_color', '#fff');
$FooterformtextlabelColor = get_theme_mod('footerarea_formtextlabel_color', '#111944');
$footerareabuttontextColor = get_theme_mod('footerarea_formbuttontext_clr', '#111944');
$footerareabuttontexthvColor = get_theme_mod('footerarea_formbtntxthv_clr', '#fff');
$footerareaformbuttonbgclr = get_theme_mod('footerarea_formbuttonbg_clr', '#F4B504');


$custom_css .= '
.footer-area .sf-oly{background-color: '.$footerareaf1olyclr.';}
.footer-area .newstitle h3,.footer-area .newstitle h3 small {color: '.$footerareafmtitleclr.';}
.footer-area .newstitle p{color: '.$footerareafmtxtclr.';}

footer#footer.footer-area .widget-title{color: '.$FooterAreaTitleColor.' ;}
.footer-area caption, .footer-area table td,.footer-text, .footer-text a, 
.footer_oursteps-text, .footer-area .textwidget{color: '.$FooterAreaTextColor.' !important;}


.footer-area .social-profile-icons ul li a i{color: '.$FooterAreasiconColor.';}
.footer-area .social-profile-icons ul li a{border-color: '.$FooterAreasiconbrdClr.';}
.footer-area .social-profile-icons ul li a:hover{background-color: '.$FooterAreasiconbghvColor.';}

.footer-area i{color: '.$FooterAreaiconColor.' ;}

.footer-area li a,.footer-area li:before,
.footer-area .tagcloud a{color: '.$FooterAreamenuColor.';}

.footer-area span.post-date, 
.footer-area .widget_calendar table tbody td, 
.footer-area .widget_calendar table tbody td a, 
.footer-area .widget_calendar table tbody td#today a{color: '.$FooterAreadatextColor.';}

.footer-area .box-form{background-color: '.$FooterAreatafmbgClr.';}

.footer-area input[type="text"], .footer-area input[type="email"], .footer-area input[type="url"], 
.footer-area input[type="password"], .footer-area input[type="search"], .footer-area input[type="number"], 
.footer-area input[type="tel"],.footer-area input[type="range"], .footer-area input[type="date"], 
.footer-area input[type="month"],.footer-area input[type="week"], .footer-area input[type="time"],
.footer-area input[type="datetime"],.footer-area input[type="datetime-local"], 
.footer-area input[type="color"], .footer-area textarea,footer#footer.footer-area select{background-color: '.$FooterAreatabgColor.'!important;}

.footer-area input[type="text"], .footer-area input[type="email"], .footer-area input[type="url"], 
.footer-area input[type="password"], .footer-area input[type="search"], .footer-area input[type="number"], 
.footer-area input[type="tel"],.footer-area input[type="range"], .footer-area input[type="date"], 
.footer-area input[type="month"],.footer-area input[type="week"], .footer-area input[type="time"],
.footer-area input[type="datetime"],.footer-area input[type="datetime-local"], 
.footer-area input[type="color"], .footer-area textarea,footer#footer.footer-area select{border-color: '.$FooterAreatabrdClr.'!important;}

.footer-area input[type="text"]::placeholder, .footer-area input[type="email"]::placeholder, .footer-area input[type="url"]::placeholder, .footer-area input[type="password"]::placeholder, .footer-area input[type="search"]::placeholder, .footer-area input[type="number"]::placeholder, .footer-area input[type="tel"]::placeholder, .footer-area input[type="range"]::placeholder, .footer-area input[type="date"]::placeholder, .footer-area input[type="month"]::placeholder, .footer-area input[type="week"]::placeholder, .footer-area input[type="time"]::placeholder, .footer-area input[type="datetime"]::placeholder, .footer-area input[type="datetime-local"]::placeholder, .footer-area input[type="color"]::placeholder, .footer-area textarea::placeholder,
.footer-area input[type="text"], .footer-area input[type="email"], .footer-area input[type="url"], .footer-area input[type="password"], .footer-area input[type="search"], .footer-area input[type="number"], .footer-area input[type="tel"], .footer-area input[type="range"], .footer-area input[type="date"], .footer-area input[type="month"], .footer-area input[type="week"], .footer-area input[type="time"], .footer-area input[type="datetime"], .footer-area input[type="datetime-local"], .footer-area input[type="color"], .footer-area textarea, .footer-area select, .footer-area .widget.widget_categories select{color: '.$FooterAreaformtextColor.';}
.footer-area li a:hover, .footer-area .tagcloud a:hover, .footer-area li.current_page_item a:hover, .footer-area li:hover:before, .footer-text a:hover, .footer-area li.current_page_item:hover:before{color: '.$FootermenuhoverColor.';}
.footer-area li.current_page_item a, .footer-area li.current_page_item:before{color: '.$FooteractivemenuColor.';}
footer#footer label span, .footer-area div.wpcf7 input[type="file"], .footer-area .widget_calendar table thead tr th,
footer#footer div.wpcf7 p label{color: '.$FooterformtextlabelColor.';}

.footer-area input[type="submit"]{color: '.$footerareabuttontextColor.';}
.footer-area input[type="submit"]:hover{color: '.$footerareabuttontexthvColor.';}
.footer-area input[type="submit"]{background-color: '.$footerareaformbuttonbgclr.';}
.footer-area .widget_calendar tfoot tr td a,
.footer-area .s-footer .textwidget p a{color: '.$FooterformtextlabelColor.';}

';


//Gallery Inner page colors

$gallinnpgimgheight = get_theme_mod('gallinnpg_imgheight', '300px');
$ruhgallinnicnClr = get_theme_mod('ruh_gallinnicnClr', '#111944');
$ruhgallinnicnbgClr = get_theme_mod('ruh_gallinnicnbgClr', '#F4B504');
$gallinntitleClr = get_theme_mod('ruh_gallinntitleClr', '#fff');

$custom_css .= '

#innerpage-box .lz-gallery-images img{height: '. $gallinnpgimgheight.';}
#innerpage-box .gall-icn i,
#innerpage-box .gall-icn i:hover{color: '.$ruhgallinnicnClr.';}
#innerpage-box .gall-icn i,
#innerpage-box .lz-gallery-images:hover .gall-icn i{background-color: '.$ruhgallinnicnbgClr.';}
#innerpage-box .lz-gallery-images .over-text h2,
#innerpage-box .lz-gallery-images .over-text h2 small{color: '.$gallinntitleClr.';}

';


$faqinnerheadbrdclr = get_theme_mod('ruh_faqinnerheadclr', '#111944');

$faqinnerpagetitleColor = get_theme_mod('ruh_faqinnerpagetitleColor', '#48517a');
$faqinnerpagetitlehvColor = get_theme_mod('ruh_faqinnerpagetitlehvColor', '#48517a');
$faqinnerpagetitleboxbgColor = get_theme_mod('ruh_faqinnerpagetitleboxbgColor', '#fff');
$faqinnerpagetitleboxbghvColor = get_theme_mod('ruh_faqinnerpagetitleboxbghvColor1', '#fff');
$faqinnpgtitledotClr = get_theme_mod('ruh_faqinnpgtitledotClr', '#D9D9D9');
$faqinnerpagetitleIconColor = get_theme_mod('ruh_faqinnerpagetitleIconColor', '#111944');
$faqinnactIcnClr = get_theme_mod('ruh_faqinnactIcnClr', '#180360');
$faqinnerpagetexbgClr = get_theme_mod('ruh_faqinnerpagetexbgClr', '#fff');
$faqinnerpagetextcColor = get_theme_mod('ruh_faqinnerpagetextcColor', '#48517a');
//$faqinnerbedcClr = get_theme_mod('ruh_faqinnerbedcClr', '#37E2CF');


$custom_css .= 'main#innerpage-box div#content-box h3.faq-title,
main#innerpage-box div#content-box h3.faq-title small{color: '.$faqinnerpagetitleColor.';}

div#content-box .faq-content button.accordion.active h3.faq-title,
div#content-box .faq-content button.accordion.active h3.faq-title small,
div#content-box .faq-content button.accordion:hover h3.faq-title,
div#content-box .faq-content button.accordion:hover h3.faq-title small{color: '.$faqinnerpagetitlehvColor.'!important ; }
div#content-box .faq-content button.accordion.active{background-color: '.$faqinnerpagetitleboxbghvColor.';}

div#content-box .faq-content button.accordion{background-color: '.$faqinnerpagetitleboxbgColor.';}
div#content-box .faq-content button.accordion:before{color: '.$faqinnpgtitledotClr.';}
div#content-box .faq-content button.accordion:after{color: '.$faqinnerpagetitleIconColor.';}
div#content-box .faq-content button.accordion.active:after{color: '.$faqinnactIcnClr.';}
div#content-box .faq-content div.panel.show{background-color: '.$faqinnerpagetexbgClr.';}
div#content-box .faq-content p{color: '.$faqinnerpagetextcColor.';}
#content-box .faq_tp .faq-heading{color: '.$faqinnerheadbrdclr.';}

';


//Inner page title color

$innerpagebgclr = get_theme_mod('ruh_template_innerpage_bgclr', '#1d1b1b');
$innerpagebgolyclr = get_theme_mod('ruh_template_innerpage_bgolyclr', '#16267D');
$innertitleColor = get_theme_mod('ruh_template_innerpage_titlecolor', '#fff');

$innerbreadcrumbtitleColor = get_theme_mod('ruh_template_innerpage_breadcrumbtitlecolor', '#F4B504');
$innerbreadcrumbcurrenttitleColor = get_theme_mod('ruh_template_innerpage_breadcrumbcurrenttitlecolor', '#fff');
$innerbreadcrumbcurrenttitlehovercolor = get_theme_mod('ruh_template_innerpage_breadcrumbcurrenttitlehovercolor', '#F4B504');
$ruhbackttoparrcbgclr = get_theme_mod('ruh_backttoparrcbgclr', '#F4B504');
$ruhbackttoparrcbghvclr = get_theme_mod('ruh_backttoparrcbghvclr', '#000');


    $custom_css .= '

.ht-main-title, .single-productpage .ht-main-title,
.ht-main-title small {color: '.$innertitleColor.';}
.page-main-header {background:'.$innerpagebgclr.';}
.page-main-header .overlay1{background:'.$innerpagebgolyclr.';}

.breadcrumbbox span, .woocommerce .woocommerce-breadcrumb{color: '.$innerbreadcrumbtitleColor.';}
.breadcrumbbox span a , .woocommerce .woocommerce-breadcrumb a{color: '.$innerbreadcrumbcurrenttitleColor.';}
.breadcrumbbox span a:hover, #content-box .breadcrumbbox span a:hover, .woocommerce .woocommerce-breadcrumb a:hover{color: '.$innerbreadcrumbcurrenttitlehovercolor.';}

#back2Top svg path{fill: '.$ruhbackttoparrcbgclr.';}
#back2Top svg path:hover{fill: '.$ruhbackttoparrcbghvclr.';}

';

$innerpagemainsectioninnerpagemainsectionboxheading1 = get_theme_mod('ruh_template_innerpagemainsectionboxheading1_color', '#000');
$innerpagemainsectioninnerpagemainsectionboxheading2 = get_theme_mod('ruh_template_innerpagemainsectionboxheading2_color', '#000');
$innerpagemainsectioninnerpagemainsectionboxheading3 = get_theme_mod('ruh_template_innerpagemainsectionboxheading3_color', '#000');
$innerpagemainsectioninnerpagemainsectionboxheading4 = get_theme_mod('ruh_template_innerpagemainsectionboxheading4_color', '#000');
$innerpagemainsectioninnerpagemainsectionboxheading5 = get_theme_mod('ruh_template_innerpagemainsectionboxheading5_color', '#000');
$innerpagemainsectioninnerpagemainsectionboxheading6 = get_theme_mod('ruh_template_innerpagemainsectionboxheading6_color', '#000');

$innerpagemainsectionboxheadingbold_clr = get_theme_mod('ruh_template_innerpagemainsectionboxheadingbold_clr', '#000');
$innerpagemainsectionboxheadinghigh_clr = get_theme_mod('ruh_template_innerpagemainsectionboxheadinghigh_clr', '#F4B504');
$innerproductpageboldtextColor = get_theme_mod('template_innerpage_productpageboldtextcolor', '#000');
$innercartpageproducttitleColor = get_theme_mod('template_innerpage_cartpageproducttitlecolor', '#000');

$headerinnerpagemainsectionboxtextColor = get_theme_mod('ruh_template_innerpagemainsectionboxtext_color', '#000');
$innerpagemainsectionboxtextlinksColor = get_theme_mod('ruh_template_innerpagemainsectionboxtextlinks_color', '#0F2B5B');
$innerpagemainsectionboxtextlinksicnClr = get_theme_mod('ruh_template_innerpagemainsectionboxtextlinksicn_clr', '#F4B504');
$innerpagemainsectionboxtextlinkshoverColor = get_theme_mod('ruh_template_innerpagemainsectionboxtextlinkshvrs_color', '#F4B504');

$innerpagemainssiconClr = get_theme_mod('ruh_innerpagemainss_iconClr', '#F4B504');

$innerpagemainsectionboxtextlinksiconColor = get_theme_mod('ruh_template_innerpagemainsectionboxtextlinksicon_color', '#fff');
$innerpagemainsectionboxtextlinksiconbgssclrlinksiconColor = get_theme_mod('ruh_template_innerpagemainsectionboxtextlinksiconbgssclr_color', '#111944');

$headerinnerpageproductpriceColor = get_theme_mod('ruh_template_innerpageproductprice_color', '#868b9e');
$headerinnerpageproductpricedelColor = get_theme_mod('ruh_template_innerpageproductpricedel_color', '#7c8491');
$headerinnerpageproductimghovericonColor = get_theme_mod('ruh_template_innerpageproductimghovericon_color', '#cfd0d5');
$headerinnerpageproductimghovericonbgColor = get_theme_mod('ruh_template_innerpageproductimghovericonbg_color', '#fff');
$headerinnerpagepaginationColor = get_theme_mod('ruh_template_innerpagepagination_color', '#000');
$headerinnerpagepaginationbgColor = get_theme_mod('ruh_template_innerpagepaginationbg_color', '#fff');
$headerinnerpagepaginationborderColor = get_theme_mod('ruh_template_innerpagepaginationborder_color', '#eaeaea');

$headerinnerpagepaginationactiveColor = get_theme_mod('ruh_template_innerpagepaginationactive_color', '#fff');
$headerinnerpagepaginationbgactiveColor = get_theme_mod('ruh_template_innerpagepaginationbgactive_color', '#F4B504');
$headerinnerpagepaginationborderactiveColor = get_theme_mod('ruh_template_innerpagepaginationborderactive_color', '#F4B504');

$innersibebr1clr = get_theme_mod('ruh_template_sibebr1clr', '#fff');
$innersibebrheadclr = get_theme_mod('template_innerpage_sibebrheadclr', '#fff');
$innersibebrheadbgclr = get_theme_mod('template_innerpage_sibebrheadbgclr', '#111944');
$innersibebrheadbg2clr = get_theme_mod('template_innerpage_sibebrheadbg2clr', '#F4B504');

$innersibebrfrmbgclr = get_theme_mod('template_innerpage_sibebrfrmbgclr', '#111944');
$innersibebrfrmtitlecl = get_theme_mod('template_innerpage_sibebrfrmtitleclr', '#fff');
$innersibebrfrmcurrntitlecl = get_theme_mod('template_innerpage_sibebrfrmcurrnttitleclr', '#F4B504');
$innersibebrfrmbtnicnclr = get_theme_mod('template_innerpage_sibebrfrmbtnicnclr', '#000');

$innerpagesidebardaytxtColors = get_theme_mod('ruh_template_innerpagesidebardaytxt_color', '#ffffff');
$innerpagesidebardaybgsstxtColors = get_theme_mod('ruh_template_innerpagesidebardaybgsstxt_color', '#777777');

$innerpageblogtitleclr = get_theme_mod('template_innerpage_blogttleclr', '#111944');
$innerpageblogtitlehovercolor = get_theme_mod('template_innerpage_blogtitlehvclr', '#F4B504');
$innerpageblogtextclr = get_theme_mod('ruh_template_innerpage_blogtextclr', '#111944');

$innerpageblogdatebgclr = get_theme_mod('ruh_template_innerpage_blogdatebgclr', '#111944');
$innerpageblogicnautrclr = get_theme_mod('innerpage_blogicnautrclr', '#fff');
$innerpageblogbxbgclr = get_theme_mod('template_innerpage_blogbxbgclr', '#f2f3f5');
$innerpagemainsectionsidebarborderrs = get_theme_mod('ruh_template_innerpagemainsectionsidebarborderrs_color', '#000');

$innerpageblockquoteColors = get_theme_mod('ruh_template_innerpagesblockquote_color', '#111944');
$innerpageblockquotebrdClr = get_theme_mod('innerpage_blockquotebrdClr', '#fff');
$innerpageblockquotetextClr = get_theme_mod('innerpage_blockquoteextClr', '#fff');

$innerpageblogpgtxtclr = get_theme_mod('innerpage_blogpgtxtclr', '#F4B504');
$innerpageblogpgtxthvclr = get_theme_mod('innerpage_blogpgtxthvclr', '#111944');


    $custom_css .= '
    
body.page-template-default main#innerpage-box h1{color: '.$innerpagemainsectioninnerpagemainsectionboxheading1.';}
body.page-template-default main#innerpage-box h2,
main#innerpage-box h2 a small,
.woocommerce #reviews h2 small{color: '.$innerpagemainsectioninnerpagemainsectionboxheading2.';}

main#innerpage-box h3 ,
main#innerpage-box h3 small{color: '.$innerpagemainsectioninnerpagemainsectionboxheading3.';}

body.page-template-default main#innerpage-box h4,
div#commentsAdd h4,
main#innerpage-box h4,
main#innerpage-box h4 small{color: '.$innerpagemainsectioninnerpagemainsectionboxheading4.';}

main#innerpage-box h5,
body.page-template-default main#innerpage-box h5,
main#innerpage-box h5 small{color: '.$innerpagemainsectioninnerpagemainsectionboxheading5.';}

main#innerpage-box h6,
div#blog-box.innerpage-whitebox h6,
main#innerpage-box h6 small {color: '.$innerpagemainsectioninnerpagemainsectionboxheading6.';}

main#innerpage-box h1 b,
main#innerpage-box h2 b,
main#innerpage-box h3 b,
main#innerpage-box h4 b,
main#innerpage-box h5 b,
main#innerpage-box h6 b,
main#innerpage-box p b  {color: '.$innerpagemainsectionboxheadingbold_clr.';}

main#innerpage-box h1 span,
main#innerpage-box h2 span,
main#innerpage-box h3 span,
main#innerpage-box h4 span,
main#innerpage-box h5 span,
main#innerpage-box h6 span,
main#innerpage-box p span {color: '.$innerpagemainsectionboxheadinghigh_clr.';}

.woocommerce ul.products li.product .price .amount{color: '.$headerinnerpageproductpriceColor.' !important;}
.woocommerce ul.products li.product .price del .amount{color: '.$headerinnerpageproductpricedelColor.' !important;}

main#innerpage-box h2.woocommerce-loop-product__title:before, 
.woocommerce ul.products li.product .button:before{color: '.$headerinnerpageproductimghovericonColor.';}

main#innerpage-box h2.woocommerce-loop-product__title:before, 
.woocommerce ul.products li.product .button:before
{background-color: '.$headerinnerpageproductimghovericonbgColor.';}

.woocommerce div.product .product_meta .posted_in, 
.woocommerce div.product .product_meta .tagged_as,
.woocommerce div.product .product_meta span.sku_wrapper {color: '.$innerproductpageboldtextColor.';}

div#content-box table.shop_table.shop_table_responsive.cart.woocommerce-cart-form__contents tr td a, 
.woocommerce div.product form.cart table.variations tr td label {color: '.$innercartpageproducttitleColor.';}

.woocommerce nav.woocommerce-pagination ul li a, .pagingation a{color: '.$headerinnerpagepaginationColor.';}
.woocommerce nav.woocommerce-pagination ul li a, .pagingation a{background-color: '.$headerinnerpagepaginationbgColor.';}
.woocommerce nav.woocommerce-pagination ul li a, 
.pagingation a{border-color: '.$headerinnerpagepaginationborderColor.';}

body.page-template-default main#innerpage-box h2, 
body.page-template-default main#innerpage-box h1, 
body.page-template-default main#innerpage-box h3,
body.page-template-default main#innerpage-box h5, 
body.page-template-default main#innerpage-box h6, 
main#innerpage-box h2,
h1.product_title.entry-title{border-bottom-color: '.$headerinnerpagepaginationborderColor.';}

.woocommerce nav.woocommerce-pagination ul li a:focus, 
.woocommerce nav.woocommerce-pagination ul li a:hover, 
.woocommerce nav.woocommerce-pagination ul li span.current, 
.pagingation .current, .pagingation a:hover,
.woocommerce nav.woocommerce-pagination ul li span.current, 
.woocommerce-page nav.woocommerce-pagination ul li span.current, 
.woocommerce #content nav.woocommerce-pagination ul li span.current, 
.woocommerce-page #content nav.woocommerce-pagination ul li span.current,
.woocommerce nav.woocommerce-pagination ul li a:hover, 
.woocommerce-page nav.woocommerce-pagination ul li a:hover, 
.woocommerce #content nav.woocommerce-pagination ul li a:hover, 
.woocommerce-page #content nav.woocommerce-pagination ul li a:hover
{color: '.$headerinnerpagepaginationactiveColor.';}

.woocommerce nav.woocommerce-pagination ul li a:focus, 
.woocommerce nav.woocommerce-pagination ul li a:hover, 
.woocommerce nav.woocommerce-pagination ul li span.current, 
.pagingation .current, .pagingation a:hover{background-color: '.$headerinnerpagepaginationbgactiveColor.';}

.woocommerce nav.woocommerce-pagination ul li a:focus, 
.woocommerce nav.woocommerce-pagination ul li a:hover, 
.woocommerce nav.woocommerce-pagination ul li span.current, 
.pagingation .current, .pagingation a:hover,
.woocommerce nav.woocommerce-pagination ul li span.current, 
.woocommerce-page nav.woocommerce-pagination ul li span.current, 
.woocommerce #content nav.woocommerce-pagination ul li span.current, 
.woocommerce-page #content nav.woocommerce-pagination ul li span.current,
.woocommerce nav.woocommerce-pagination ul li a:hover, 
.woocommerce-page nav.woocommerce-pagination ul li a:hover, 
.woocommerce #content nav.woocommerce-pagination ul li a:hover, 
.woocommerce-page #content nav.woocommerce-pagination ul li a:hover
{border-color: '.$headerinnerpagepaginationborderactiveColor.';}

div#secondary.widget-area .widget{background-color: '.$innersibebr1clr.';}
.wp-block-group__inner-container h2, 
#innerpage-box .widget-area .widget-title{color: '.$innersibebrheadclr.' ;}
#innerpage-box .widget-area .widget-title{background-color: '.$innersibebrheadbgclr.' ;}
#innerpage-box .widget-area .widget-title:after{background-color: '.$innersibebrheadbg2clr.' ;}

#secondary .widget_nav_menu li, #sidebars .widget_nav_menu ul li{background-color: '.$innersibebrfrmbgclr.' !important;}

#sidebars .widget_nav_menu a, #sidebars .widget_nav_menu ul li a, #secondary .widget.widget_nav_menu a,
#secondary textarea,#secondary .widget_nav_menu li,
#sidebars .widget_nav_menu ul li{color: '.$innersibebrfrmtitlecl.' !important;}
#sidebars .widget_nav_menu ul li.current-menu-item a{color: '.$innersibebrfrmcurrntitlecl.' !important;}
.widget-area form#searchform:after{color: '.$innersibebrfrmbtnicnclr.' ;}


div#secondary .widget_calendar table thead tr th, 
.pagination .page-numbers, 
.pagination .page-numbers:hover{color: '.$innerpagesidebardaytxtColors.';}
div#secondary .widget_calendar table thead tr th{background-color: '.$innerpagesidebardaybgsstxtColors.';}

.woocommerce div.product .product_meta .posted_in, 
.woocommerce div.product .product_meta .tagged_as,
.woocommerce div.product .product_meta span.sku_wrapper {color: '.$innerproductpageboldtextColor.';}

#innerpage-box p, 
#content-box ul li, 
#content-box ol li, 
main#innerpage-box ul#recentcomments li, 
#blog-box .inner-blog-excerpt,
#secondary input[type="text"],
#secondary input[type="email"],
#secondary input[type="url"],
#secondary input[type="password"],
#secondary input[type="search"],
#secondary input[type="number"],
#secondary input[type="tel"],
#secondary input[type="range"],
#secondary input[type="date"], 
#secondary input[type="month"], 
#secondary input[type="week"], 
#secondary input[type="time"], 
#secondary input[type="datetime"], 
#secondary input[type="datetime-local"], 
#secondary input[type="color"], 
#secondary textarea, 
#secondary select,
#secondary label,
div#secondary select option,
#secondary input::placeholder,
#secondary textarea::placeholder,
#secondary select::placeholder,
#secondary input[type="file"],
main#innerpage-box .widget_calendar table tbody td,
main#innerpage-box li,
div#secondary caption,
.single_post .post-date-publishable,
main#innerpage-box textarea#comment,
.total-comments,
.woocommerce .woocommerce-ordering select,
.woocommerce-product-search .search-field::placeholder,
table.shop_table.woocommerce-checkout-review-order-table,
.woocommerce form .form-row .input-text::placeholder, 
.woocommerce-page form .form-row .input-text::placeholder,
.woocommerce form .form-row input.input-text::placeholder, 
.woocommerce form .form-row textarea::placeholder,
main#innerpage-box input#billing_email,
.select2-container--default .select2-selection--single .select2-selection__rendered,
div#content-box input#account_email,
main#innerpage-box input#account_display_name,
.widget.widget_categories select,
main#innerpage-box .select2-container--default .select2-selection--single .select2-selection__placeholder,
div#secondary select,
main#innerpage-box .woocommerce-product-search .search-field,
main#innerpage-box .woocommerce-product-search .search-field::placeholder,
.woocommerce .woocommerce-result-count,
.woocommerce .widget_price_filter .price_slider_amount,
.select2-container--default .select2-results>.select2-results__options,
.select2-results__option[aria-selected], 
.select2-results__option[data-selected],
.woocommerce #reviews #comments ol.commentlist li .comment-text p.meta, 
.woocommerce-page #reviews #comments ol.commentlist li .comment-text p.meta,
.comment-form-rating,
.comment-respond .comment-reply-title,
.woocommerce .product_meta,
.woocommerce-error, 
.woocommerce-info, 
.woocommerce-message,
.woocommerce-MyAccount-content address,
.woocommerce-MyAccount-content legend,
.woocommerce-MyAccount-content input[type="text"],
.woocommerce table thead th,
.woocommerce form .form-row input.input-text, 
.woocommerce form .form-row textarea,
.woocommerce table.shop_table td,
.woocommerce .quantity .qty,
input#coupon_code::placeholder,
input#coupon_code,
.woocommerce table.shop_table tbody th, 
.error404 .oops-text{color: '.$headerinnerpagemainsectionboxtextColor.';}

.price .amount{color: '.$headerinnerpagemainsectionboxtextColor.' !important;}

.widget-area a, .woocommerce-MyAccount-navigation-link a, 
.entry-content p a, div#content-box a, div#sidebars span.product-title, 
div#sitemap-box ul li a, main#innerpage-box .woocommerce-info a.showcoupon,
.woocommerce .product_meta a,
.widget-area ul ul li a{color: '.$innerpagemainsectionboxtextlinksColor.';}

#secondary .widget_archive a:before, 
#secondary .widget_categories a:before, 
#secondary .widget_recent_entries li a:before, 
#sidebars .widget_archive ul li a:before, 
#sidebars .widget_recent_entries ul li a:before, #sidebars .product-categories li a:before, 
#sidebars .widget_recent_comments span:before{color: '.$innerpagemainsectionboxtextlinksicnClr.';}

#content-box ul li:before{color: '.$innerpagemainssiconClr.';}

 #content-box ol li:before,
main#innerpage-box div#sitemap-box ul li a:before{color: '.$innerpagemainsectionboxtextlinksiconColor.';}

#content-box ol li:before{background-color: '.$innerpagemainsectionboxtextlinksiconbgssclrlinksiconColor.';}

.widget-area a:hover, .woocommerce-MyAccount-navigation-link a:hover, 
.entry-content p a:hover, div#content-box a:hover, 
div#content-box a:hover small, div#sidebars span.product-title:hover, 
.widget-area li a:hover, div#content-box p a:hover, 
div#sitemap-box ul li a:hover, div#content-box a.shipping-calculator-button:hover,
main#innerpage-box .woocommerce-info a.showcoupon:hover, 
div#content-box div#payment a.woocommerce-privacy-policy-link:hover, 
div#content-box .woocommerce-MyAccount-navigation-link a:hover,
div#content-box a.post-edit-link:hover,
div#content-box .woocommerce-MyAccount-content p a:hover,
div#content-box a.shipping-calculator-button:hover,
div#content-box div#payment a:hover,
.woocommerce .product_meta a:hover{color: '.$innerpagemainsectionboxtextlinkshoverColor.';}

main#innerpage-box .woocommerce-product-search .search-field,
.woocommerce form .form-row input.input-text, 
.woocommerce form .form-row textarea,
.select2-container--default .select2-selection--single,
#innerpage-box .comment-respond,
main#innerpage-box div#commentsAdd textarea#comment,
div#secondary .select2-container--default .select2-selection--single,
.single_post .post-date-publishable,
.single-productpage #sidebars button,
.woocommerce .widget_shopping_cart .buttons a, 
.woocommerce.widget_shopping_cart .buttons a,
.woocommerce ul.cart_list li img, 
.woocommerce-page ul.cart_list li img, 
.woocommerce ul.product_list_widget li img, 
.woocommerce-page ul.product_list_widget li img,
.woocommerce .widget_shopping_cart .total, 
.woocommerce.widget_shopping_cart .total,
.woocommerce .products ul, 
.woocommerce-page .products ul, 
.woocommerce ul.products, 
.woocommerce-page ul.products,
.woocommerce-page .woocommerce-ordering select,
.woocommerce div.product form.cart .button, 
.woocommerce-page div.product form.cart .button, 
.woocommerce #content div.product form.cart .button, 
.woocommerce-page #content div.product form.cart .button,
.woocommerce #review_form #respond textarea,
.woocommerce #review_form #respond .form-submit input,
.woocommerce table.shop_table,
.woocommerce table.shop_table td,
.woocommerce table.shop_table tbody th, 
.woocommerce table.shop_table tfoot td, 
.woocommerce table.shop_table tfoot th,
.woocommerce-checkout #payment ul.payment_methods,
.woocommerce .cart .button, 
.woocommerce .cart input.button,
.woocommerce-cart .cart-collaterals .cart_totals tr th,
.woocommerce-cart .cart-collaterals .cart_totals tr td,
.woocommerce-cart table.cart td.actions .coupon .input-text,
select,
.widget-area .widget, .woocommerce ul.products li.product a img, 
.widget-area ul, .widget-area .textwidget, .widget-area .woocommerce-product-search , 
.widget-area form#searchform, .widget-area .widget_rating_filter ul, 
.widget-area .woocommerce .widget_shopping_cart_content p, .widget-area div#calendar_wrap, 
.widget-area .widget_media_image img, .widget-area .tagcloud, 
input[type="text"],
input[type="email"], input[type="url"], input[type="password"], input[type="search"], 
input[type="number"], input[type="tel"], input[type="range"], input[type="date"], 
input[type="month"], input[type="week"], input[type="time"], input[type="datetime"], 
input[type="datetime-local"], input[type="color"], textarea,
.woocommerce .woocommerce-widget-layered-nav-list
    {border-color: '.$innerpagemainsectionsidebarborderrs.'!important;;}

.woocommerce table.shop_attributes th, 
.woocommerce table.shop_attributes td{border-bottom-color: '.$innerpagemainsectionsidebarborderrs.';}

.woocommerce table.shop_attributes{border-top-color: '.$innerpagemainsectionsidebarborderrs.';}

.woocommerce table.shop_attributes th, .woocommerce table.shop_attributes td,
.woocommerce div.product .product_title, .woocommerce div.product form.cart, 
.woocommerce div.product .woocommerce-tabs ul.tabs, .widget-area li, 
main#innerpage-box .widget-area .tagcloud a{border-bottom-color: '.$innerpagemainsectionsidebarborderrs.';}

.woocommerce table.shop_attributes, .woocommerce div.product form.cart, 
.woocommerce #content div.product .woocommerce-tabs, 
.woocommerce div.product .woocommerce-tabs, .woocommerce-page #content div.product .woocommerce-tabs, 
.woocommerce-page div.product .woocommerce-tabs{border-top-color: '.$innerpagemainsectionsidebarborderrs.';}

.woocommerce ul.products li.product, 
.woocommerce-page ul.products li.product,
.woocommerce ul.products li.product a img,
.woocommerce div.product div.images img,
.quantity input[type="number"],
.woocommerce .products ul, 
.woocommerce-page .products ul, 
.woocommerce ul.products, 
.woocommerce-page ul.products{border-color: '.$innerpagemainsectionsidebarborderrs.' !important;}

blockquote{background-color: '.$innerpageblockquoteColors.';}
blockquote:before{ border-color: '.$innerpageblockquotebrdClr.';}
#innerpage-box blockquote p{ color: '.$innerpageblockquotetextClr.';}

main#innerpage-box #blog-box .inner-blogpost-info a h2,
#blog-box .inner-blogpost-info h2, 
#blog-box .inner-blogpost-info h2 small{color: '.$innerpageblogtitleclr.' !important;}  

main#innerpage-box #blog-box .inner-blogpost-info a h2:hover, 
main#innerpage-box #blog-box .inner-blogpost-info a h2:hover small{color: '.$innerpageblogtitlehovercolor.' !important;} 
main#innerpage-box #blog-box .inner-blog-excerpt,
main#innerpage-box #blog-box .inner-blog-excerpt p{color: '.$innerpageblogtextclr.';}

#innerpage-box .inner-blogpost .blog-Athr{background-color: '.$innerpageblogdatebgclr.';}     
#innerpage-box .inner-blogpost .blog-Athr{color: '.$innerpageblogicnautrclr.';}   
#innerpage-box .inner-blogpost{background-color: '.$innerpageblogbxbgclr.';}


#innerpage-box .inner-blogpost .bloginnbtn{color: '.$innerpageblogpgtxtclr.';}
#innerpage-box .inner-blogpost .bloginnbtn:hover{color: '.$innerpageblogpgtxthvclr.';}

    ';

// woocommerce

$innerpageallothrtheadtextcolcolor = get_theme_mod('ruh_template_innerpageallothrtheadtextcolcolor_color', '#ffffff');
$innerpageallothrtheadtextbgsscolcolorcolor = get_theme_mod('ruh_template_innerpageallothrtheadtextbgsscolcolor_color', '#ffffff');

    $custom_css .= '
div#sitemap-box h3,
#blog-box .blog-read-more a,
.socialMedia a,
div#secondary input[type="submit"],
#commentsAdd input[type="submit"],
.single-productpage #sidebars button,
.widget_calendar tfoot tr td a, .widget_calendar tfoot tr td a:hover,
button, input[type="button"], input[type="reset"], input[type="submit"],
.woocommerce span.onsale{color: '.$innerpageallothrtheadtextcolcolor.';}

.single-productpage #sidebars button{color: '.$innerpageallothrtheadtextcolcolor.' !important;}

.woocommerce a.button, .woocommerce-page a.button,
.woocommerce div.product .woocommerce-tabs ul.tabs li a,
.woocommerce #review_form #respond .form-submit input,
.woocommerce button.button,.select2-container--default .select2-results__option--highlighted[aria-selected], 
.select2-container--default .select2-results__option--highlighted[data-selected],
.woocommerce div.product form.cart .button{color: '.$innerpageallothrtheadtextcolcolor.' !important;}

div#secondary select option,
.select2-container--default .select2-results>.select2-results__options,
.woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
.woocommerce-page .woocommerce-ordering option,
.woocommerce-MyAccount-content input[type="text"],
.woocommerce-MyAccount-content input[type="email"],
.woocommerce-MyAccount-content input[type="url"], 
.woocommerce-MyAccount-content input[type="password"],
.woocommerce form .form-row input.input-text,
.woocommerce form .form-row textarea,
.woocommerce-error, 
.woocommerce-info, 
.woocommerce-message{background-color: '.$innerpageallothrtheadtextbgsscolcolorcolor.' !important;}

   ';

// Contact Page

$contactusdbxclr = get_theme_mod('ruh_contactus_dbxclr', '#111944');
$contactusdetailicn = get_theme_mod('ruh_contactus_dicnClr', '#111944');
$contactusdetailicnbg = get_theme_mod('ruh_contactus_dicnbgClr', '#fff');
$contactusdtitleClr = get_theme_mod('ruh_contactus_dtitleClr', '#fff');
$contactusdetaildphem = get_theme_mod('ruh_contactus_dphemClr', '#fff');
$contactusdetaildphemhv = get_theme_mod('ruh_contactus_dphemhvClr', '#F4B504');

$contactusformVGClr = get_theme_mod('ruh_contactus_formVGClr', '#E5E6EB');
$ContactusformtitleColor = get_theme_mod('ruh_contactus_formtitleColor', '#111640');
$ContactustitlebxbrdClr = get_theme_mod('ruh_contactus_titlebxbrdClr', '#e6ce88');

$ContactusformlabelColor = get_theme_mod('ruh_contactus_formlabelColor', '#454261');
$ContactusformtextplaceColor = get_theme_mod('ruh_contactus_formtextplaceColor', '#454261');
$ContactusformborderbottomColor = get_theme_mod('ruh_contactus_formborderbottomColor', '#8a8c99');
$contactusformbgClr = get_theme_mod('ruh_contactus_formbgClr', '#E5E6EB');

$ContactusformbtnColor = get_theme_mod('ruh_contactus_formbtnColor', '#fff');
$ContactusformbtnhoverColor = get_theme_mod('ruh_contactus_formbtnhoverColor', '#F4B504');
$ContactusformbtnbgColor = get_theme_mod('ruh_contactus_formbtnbgColor', '#F4B504');
$ContactusformbtnbghoverColor = get_theme_mod('ruh_contactus_formbtnbghoverColor', '#111944');


    $custom_css .= '


#innerpage-box .cntlhsbx{background-color: '.$contactusdbxclr.';}

#innerpage-box .cntpgicn i{color: '.$contactusdetailicn.';}
#innerpage-box .cntpgicn{background-color: '.$contactusdetailicnbg.';}
#innerpage-box .cntpgtxt h3,#innerpage-box .cntpgtxt h3 small {color: '.$contactusdtitleClr.';}
#innerpage-box .cntlhsbx p, 
#innerpage-box .cntlhsbx p{color: '.$contactusdetaildphem.';}
#innerpage-box .cntlhsbx a:hover p{color: '.$contactusdetaildphemhv.';}

#innerpage-box .contact-address-area .contforminn{background-color: '.$contactusformVGClr.';}
#ht-contactus-wrap .maintle{color: '.$ContactusformtitleColor.';}
#ht-contactus-wrap .conformbx{border-bottom-color: '.$ContactustitlebxbrdClr.';}
#ht-contactus-wrap label {color: '.$ContactusformlabelColor.';}

#ht-contactus-wrap input[type="text"], 
#ht-contactus-wrap input[type="email"], 
#ht-contactus-wrap input[type="url"], 
#ht-contactus-wrap input[type="password"], 
#ht-contactus-wrap input[type="search"], 
#ht-contactus-wrap input[type="number"], 
#ht-contactus-wrap input[type="tel"], 
#ht-contactus-wrap input[type="range"], 
#ht-contactus-wrap input[type="date"], 
#ht-contactus-wrap input[type="month"], 
#ht-contactus-wrap input[type="week"], 
#ht-contactus-wrap input[type="time"], 
#ht-contactus-wrap input[type="datetime"],
#ht-contactus-wrap input[type="datetime-local"], 
#ht-contactus-wrap input[type="color"],
#ht-contactus-wrap input[type="file"],
#ht-contactus-wrap select,
#ht-contactus-wrap textarea,
#ht-contactus-wrap input::placeholder,
#ht-contactus-wrap textarea::placeholder,
#ht-contactus-wrap select::placeholder,
.contact-page-form span,#ht-contactus-wrap .confmtxt {color: '.$ContactusformtextplaceColor.';}

#ht-contactus-wrap input[type="text"], 
#ht-contactus-wrap input[type="email"], 
#ht-contactus-wrap input[type="url"], 
#ht-contactus-wrap input[type="password"], 
#ht-contactus-wrap input[type="search"], 
#ht-contactus-wrap input[type="number"], 
#ht-contactus-wrap input[type="tel"], 
#ht-contactus-wrap input[type="range"], 
#ht-contactus-wrap input[type="date"], 
#ht-contactus-wrap input[type="month"], 
#ht-contactus-wrap input[type="week"], 
#ht-contactus-wrap input[type="time"], 
#ht-contactus-wrap input[type="datetime"],
#ht-contactus-wrap input[type="datetime-local"], 
#ht-contactus-wrap input[type="color"],
#ht-contactus-wrap input[type="file"],
#ht-contactus-wrap select,
#ht-contactus-wrap textarea {border-color: '.$ContactusformborderbottomColor.'!important;}

#ht-contactus-wrap input[type="text"], 
#ht-contactus-wrap input[type="email"], 
#ht-contactus-wrap input[type="url"], 
#ht-contactus-wrap input[type="password"], 
#ht-contactus-wrap input[type="search"], 
#ht-contactus-wrap input[type="number"], 
#ht-contactus-wrap input[type="tel"], 
#ht-contactus-wrap input[type="range"], 
#ht-contactus-wrap input[type="date"], 
#ht-contactus-wrap input[type="month"], 
#ht-contactus-wrap input[type="week"], 
#ht-contactus-wrap input[type="time"], 
#ht-contactus-wrap input[type="datetime"],
#ht-contactus-wrap input[type="datetime-local"], 
#ht-contactus-wrap input[type="color"],
#ht-contactus-wrap input[type="file"],
#ht-contactus-wrap select,
#ht-contactus-wrap textarea {background-color: '.$contactusformbgClr.'!important;}

#innerpage-box #ht-contactus-wrap input[type="submit"] {color: '.$ContactusformbtnColor.';}
#innerpage-box #ht-contactus-wrap input[type="submit"] {background-color: '.$ContactusformbtnbgColor.';}
#innerpage-box #ht-contactus-wrap input[type="submit"]:hover{color: '.$ContactusformbtnhoverColor.';}
#innerpage-box #ht-contactus-wrap input[type="submit"]:hover{background-color: '.$ContactusformbtnbghoverColor.';}

   
';

     $custom = get_post_custom( isset($post->ID) );

    $image_id = get_post_meta( isset($post->ID), '_listing_image_id', true );
    $thumbnail_html = wp_get_attachment_image_src( $image_id, 'larger');

    // echo '<pre />'; print_r($custom);
    if(!empty($custom['useColor']) && $custom['useColor'][0]==1){
        if( isset( $custom['page_bg_color'][0] ) ){
            $custom_css .= '#innerpage-box{background-color:'.$custom['page_bg_color'][0].';}';
        }
    }elseif(!empty($custom['useColor']) && $custom['useColor'][0]==0){
        if( isset( $custom['_listing_image_id'][0]) ){
            $custom_css .= '#innerpage-box{background-image: url(\''.$thumbnail_html[0].'\');background-position: center;background-attachment: fixed;background-origin: content-box;background-size: cover;}';
        }
    }else {
        if( isset( $custom['_listing_image_id'][0]) ){
            $custom_css .= '#innerpage-box{background:none}';
        }
    }

    $custom_css .='.border{border:1px solid #fff;}';

    return punte_css_strip_whitespace($custom_css);
}