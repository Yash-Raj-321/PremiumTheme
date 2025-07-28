<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Ruh Premium
 */
$ruh_lite_single_breadcrumb_section = get_theme_mod('ruh_lite_single_breadcrumb_section', '1');
$ruh_lite_single_tags_section = get_theme_mod('ruh_lite_single_tags_section', '1');
$ruh_lite_authorbox_section = get_theme_mod('ruh_lite_authorbox_section', '1');
$ruh_lite_relatedposts_section = get_theme_mod('ruh_lite_relatedposts_section', '1');

get_header(); ?> 
 <?php $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));?>
 
<header class="page-main-header" <?php  if (!empty($image)) : ?> style="background: url('<?php echo esc_url($image); ?>'); background-repeat: no-repeat; background-size:cover; position: relative;"<?php endif ?> >
    <div class="overlay1"></div>
    <div class="container">
          
        <?php the_title( '<h1 class="ht-main-title ">', '</h1>' ); ?>
    </div>        
    <!-- <div class="hederpipe"></div> -->
    <div class="container">
        <?php if( get_theme_mod('breadcrumb_button_display','show' ) == 'show') : ?>
        <div class="breadcrumbbox ">
            <div class='button'><?php ruh_lite_the_breadcrumb(); ?></div>
            <div class="clearfix"></div>
        </div>
        <?php endif ?>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
</header>

<main id="innerpage-box">
    <div class="container">
        <div class="inner_contentbox">
        <div id="content-box" class="innerpage-whitebox">
            <div class="row mr-0">
                <div class="col-lg-8 col-md-8">
                    <article class="article">       
                        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                        <div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
                            <div class="single_post">
                              
                               <!-- Start Content -->
                               <div id="content" class="post-single-content box mark-links">
                                <?php the_content(); ?>
                            </div><!-- End Content -->
                            
                                <?php comments_template( '', true ); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </article>
            </div>
            <div class="col-lg-4 col-md-4">
                <div id="sidebars" >
                    <div id="secondary " class="widget-area">
                        <?php  dynamic_sidebar('ruh-project-sidebar'); ?>                         
                    </div> 
                </div>
            </div>
        </div>

        <!-- End Article -->
        <!-- Start Sidebar -->
        <?php // get_sidebar(); ?>
        <!-- End Sidebar -->
    </div>
    <div class="clearfix"></div>
</div>
  <div class="clearfix"></div>
</div>
</main>
<?php get_footer(); ?>