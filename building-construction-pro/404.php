<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Ruh Premium
 */

get_header(); ?>
<header class="page-main-header"  <?php  if (!empty($image)) : ?> style="background: url('<?php echo esc_url($image); ?>'); background-repeat: no-repeat; background-size:cover; position: relative;"  <?php endif ?>>
    <div class="overlay1"></div>
    <div class="container">
        <?php the_title( '<h1 class="ht-main-title">', '</h1>' ); ?>
        <div class="clearfix"></div>
    </div>
    <!-- <div class="hederpipe"></div> -->
     <?php if( get_theme_mod('breadcrumb_button_display','show' ) == 'show') :
        ?>
        <!-- <div class="breadcrumbbox wow zoomIn">
            <div class="container">
                <div class='button'><//?php luzuk_lite_the_breadcrumb(); ?></div>
                <!-  <//?php //luzuk_lite_the_breadcrumb(); ?> ->
            </div>
        </div> -->
    <?php endif ?>   
    <div class="clearfix"></div>
</header> 
<main id="innerpage-box">
	<div class="container">
        <div class="inner_contentbox">
			<div class="oops-text"><?php esc_html_e( 'Oops! This Page Could Not Be Found.', 'total' ); ?></div>
			<span class="error-404"><?php esc_html_e( '404', 'total' ); ?></span>
			<!-- <div class="oops-text"><?php esc_html_e( 'SORRY BUT THE PAGE YOU ARE LOOKING FOR DOES NOT EXIST, HAVE BEEN REMOVED. NAME CHANGED OR IS TEMPORARILY UNAVAILABLE', 'total' ); ?></div> -->
        <div class="clearfix"></div>
    </div>
	</div>
</main><!-- #main -->

<?php get_footer(); ?>