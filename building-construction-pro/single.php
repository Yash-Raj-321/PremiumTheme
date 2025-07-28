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
                                    <header>
                                    <!-- </?php if( get_theme_mod('postdate_button_display','show' ) == 'show') :
                                       ?>
                                       <div class="post-date-publishable"><i class="fa fa-calendar-o" aria-hidden="true"></i><//?php the_time( get_option( 'date_format' ) ); ?></div>
                                   <//?php endif ?>  -->
                                   <!-- Start Title -->
                                    </header>
                        
                                    <div id="content" class="post-single-content box mark-links">
                                        <div class="blog-innimg ">

                                           <?php  echo get_the_post_thumbnail(get_the_ID(),'larger');?>
                                           <!--  <//?php the_post_thumbnail(); ?>  -->
                                        </div>
                                        <?php if( get_theme_mod('postdate_button_display','show' ) == 'show') :  ?>
                                        <div class="datebx col-md-12 pd-0">
                                            <li>
                                               <div class="post-date-publishable"><i class="fa fa-user"></i><?php echo get_the_author(); ?></div>
                                            </li>
                                            
                                            <li>
                                                <div class="post-date-publishable"><i class="fa fa-calendar" ></i><?php echo get_the_date( 'j M , Y' ); ?></div>
                                            </li>

                                            <li>
                                                <div class="post-date-publishable"><i class="fa fa-comments"></i><?php echo $my_var = get_comments_number(); ?> Comments</div>
                                            </li>
                                        </div>
                                        <?php endif ?>
                                        <?php the_content(); ?>
                                        <div class="row mr-0">
                                        <div class="col-md-8 col-sm-7">
                                            <?php if($ruh_lite_single_tags_section == '1') { ?>
                                                <!-- Start Tags -->
                                            <div class="tags">
                                                <?php the_tags('<span class="tagtext">'.__('Tags','Ruh Premium').' :</span>') ?> 
                                            </div>
                                                <!-- End Tags -->
                                            <?php } ?>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="col-md-4 col-sm-5 pd-0">
                                            <div class="socialMedia">
                                                <ul>
                                                    <li>
                                                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" target="_blank" class="blgsmedia"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink();?>&title=<?php the_title();?>&source=<?php the_title();?>" target="_blank" class="blgsmedia"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                                    </li>

                                                    <li>
                                                        <a href="https://twitter.com/share?url=<?php the_permalink();?>&amp;text=<?php the_title();?>" class="blgsmedia" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="https://in.pinterest.com/submit?url=<?php the_permalink();?>" target="_blank" class="blgsmedia"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                                    </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="clearfix"></div>
                                    </div><!-- End Content -->
                        

                                <?php if($ruh_lite_authorbox_section == '1') { ?>
                                <!-- Start Author Box 
                                <div class="postauthor">
                                    <h4><?php _e('About The Author', 'Ruh Premium'); ?></h4>
                                    <?php //if(function_exists('get_avatar')) { echo get_avatar( get_the_author_meta('email'), '85' );  } ?>
                                    <h5><?php //the_author(); ?></h5>
                                    <p><?php //the_author_meta('description') ?></p>
                                </div>
                                <!- End Author Box -->
                                <?php }?>  
                                <?php comments_template( '', true ); ?>
                            </div>
                        </div>
                <?php endwhile; ?>
                    </article>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div id="secondary" class="widget-area">
                        <?php  dynamic_sidebar('ruh-single-post-sidebar'); ?>
                        <!-- <//?php  dynamic_sidebar('ruh-single-post-sidebar'); ?> -->
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
