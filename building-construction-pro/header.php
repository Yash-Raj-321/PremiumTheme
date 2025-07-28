<?php    
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ruh Premium
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<script src="https://use.fontawesome.com/18a9c36ed1.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css" />
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>

	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.1.1.slim.min.js" crossorigin="anonymous"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js" type="text/javascript"  ></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/wow.js" ></script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.1.1.slim.min.js" type="text/javascript"  ></script>
   <script src="<?php echo get_template_directory_uri(); ?>/js/swiper.min.js" type="text/javascript"  ></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
   	

	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
	<div class="main-container">
		<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ruh' ); ?></a> -->
		<div id="loading-area"><div class="la-anim-10"></div></div>
		<!-- header -->
		<!-- #masthead -->
		<header class="site-header header-transparent header header-seo">
			<div class="top-bar-head">
				<div class="container clearfix">
					<div class="row mr-0">
						<div class="header-left col-lg-3 col-md-4 col-sm-4 col-xs-10 col-6 logo">				
						<?php 
						
							if( get_theme_mod('pages_logoTopsetmaxwidth',true) ) {
								$pages_logoTopsetmaxwidth = 'max-width:'.esc_attr(get_theme_mod('pages_logoTopsetmaxwidth')).';';
							}

							?>
							<!-- website logo -->
							<div class="logo-header mostion">
								<?php 
								if ( function_exists( 'has_custom_logo' ) && has_custom_logo() ) :
									the_custom_logo();
							else : 
								if ( is_front_page() ) : ?>
									<h1 class="ht-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
									<?php else : ?>
										<p class="ht-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
									<?php endif; ?>
								<?php endif; ?>
							</div> 
							<?php if( get_theme_mod('head_tagline_display','show' ) == 'show') :?>	
							<p class="ht-site-description"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'description' ); ?></a></p> 
							<?php endif ?>  

							<!-- nav toggle button -->
							<div class="resp_header_logo">
								<?php 
								if ( function_exists( 'has_custom_logo' ) && has_custom_logo() ) :
									the_custom_logo();
							else : 
								if ( is_front_page() ) : ?>
									<h1 class="ht-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
									<?php else : ?>
										<p class="ht-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
									<?php endif; ?>
									<!-- <p class="ht-site-description"><a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'description' ); ?></a></p> -->
								<?php endif; ?>
							</div>
						</div>
						<div class="col-lg-9 col-md-8 col-sm-8 col-xs-2 pd-0">
							<div class="head-menubx">
										<div class="site-navigation ">
					                        <div class="nav-menus">                 
												<a class="js-nav-toggle">
													<span></span>
												</a>
											    <div class="nav-wrapper">
													<nav role="navigation">
														<div class="nav-toggle">
																<span class="nav-back"></span>
																<span class="nav-title">Menu</span>
																<span class="nav-close"></span>
														</div>
														<?php
					                                        if( get_post_meta( get_the_ID(), 'intrinsic_header_page_menu', true) !=='0') {
					                                            wp_nav_menu ( array(
					                                                'menu_class' => 'mainm ht-clearfix',
					                                                'container'=> 'ul',
					                                                'menu' => get_post_meta( get_the_ID(), 'intrinsic_header_page_menu', true),
					                                                'theme_location' => 'primary',  
					                                            )); 
					                                        } else {
					                                            wp_nav_menu ( array(
					                                                'menu_class' => 'mainm ht-clearfix',
					                                                'container'=> 'ul',
					                                                'theme_location' => 'primary',  
					                                            )); 
					                                        }
					                                    ?>
													</nav>
												</div>
											</div>
					                        <nav class="navigation">
					                            <div class="overlaybg"></div><!--  /.overlaybg -->
					                            <!-- Main Menu -->
					                            <div class="menu-wrapper">
					                                <div class="menu-content">
					                                    <?php
					                                        if( get_post_meta( get_the_ID(), 'intrinsic_header_page_menu', true) !=='0') {
					                                            wp_nav_menu ( array(
					                                                'menu_class' => 'mainmenu ht-clearfix',
					                                                'container'=> 'ul',
					                                                'menu' => get_post_meta( get_the_ID(), 'intrinsic_header_page_menu', true),
					                                                'theme_location' => 'primary',  
					                                            )); 
					                                        } else {
					                                            wp_nav_menu ( array(
					                                                'menu_class' => 'mainmenu ht-clearfix',
					                                                'container'=> 'ul',
					                                                'theme_location' => 'primary',  
					                                            )); 
					                                        }
					                                    ?>
					                                </div> <!-- /.hours-content-->
												<div class="clearfix"></div>

					                        </div><!-- /.menu-wrapper --> 
					                    	        </nav>
					                        <div class="clearfix"></div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>			
			<div class="clearfix"></div>
		</header>
	</div>
<script type="text/javascript">
    $( document ).ready(function() {
     $( "header .share-icn" ).click(function(e) {
         $('header .share-btn').not($(this).next( "header .share-btn" )).each(function(){
            $(this).removeClass("active");
         });
     
            $(this).next( "header .share-btn" ).toggleClass( "active" );
    });   
});
</script>