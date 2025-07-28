<?php
/**
 * Template Name: Blog Full Width  
 *
 * @package Ruh Premium
 */
get_header(); 
?>
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
    
               <!--  <div class="col-md-4 col-sm-4">
                    <div id="secondary" class="widget-area">
                          <//?php  dynamic_sidebar('ruh-blog-sidebar'); ?>
                    </div>
                </div> -->
            <div id="blog-box" class="ht-blog-wrap innerpage-whitebox ">
                <div class="row mr-0">
              <?php
                $current_page = max(1, get_query_var('paged'));
                $ruh_blog_cat_exclude = get_theme_mod('ruh_blog_categories');
                $ruh_blog_cat_exclude = explode(',', $ruh_blog_cat_exclude);
                $excerpt = get_theme_mod('ruh_blog_categories_settings');
                $args = array(
                    'category__not_in' => $ruh_blog_cat_exclude,
                    // 'page'=,
                    'paged'=> $current_page,

                );
                $query = new WP_Query($args);
                if($query -> have_posts()):
                    while($query -> have_posts()) : $query -> the_post();
                     $ruh_image = wp_get_attachment_image_src(get_post_thumbnail_id() , 'total-blog-thumb');
                     $img = (has_post_thumbnail())?esc_url($ruh_image[0]):get_template_directory_uri().'/images/default.png';
                     ?>
                <div class="inner-blog-post col-lg-4 col-md-6 col-sm-6 col-xs-12 ">
                        <?php 
                            $blgtxtlimit = get_theme_mod('blgtxtlimit', '100');
                        ?> 
                    <div class="inner-blogpost">
                        <div class="ht-blog-thumbnail">
                            <a href="<?php the_permalink(); ?>">
                                <img class="inner-blog-img" src="<?php echo $img; ?>" alt="<?php the_title(); ?>">
                                <!-- <div class="overlay"></div> -->
                            </a>
                            
                        </div>
                        <div class="inner-blogpost-info">
                            <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                            <div class="inner-blog-excerpt">
                                <?php
                                $blog_button2 = get_theme_mod('blog_button2', 'Read more');
                            ?>
                                <?php 
                                   if (has_excerpt()) {
                                              echo get_the_excerpt();
                                          } else {
                                              echo ruh_excerpt(get_the_content(),$blgtxtlimit );  
                                       }
                                ?> 
                                <?php if($blog_button2) { ?>
                                <!-- <div class="bloginnbtn">   -->
                                    <a class= "bloginnbtn" href="<?php echo esc_url(get_permalink()); ?>">
                                        
                                        <span><?php echo $blog_button2 ?></span>
                                    </a>
                                    <div class="clearfix"></div>
                                <!-- </div>  -->
                                <?php }?>
                            </div>
                        </div>
                        <?php if( get_theme_mod('postdate_button_display','show' ) == 'show') :?>
                            <div class="blog-Athr">
                                <div class="row mr-0">
                                    <div class="col-lg-6 ">
                                        <i class="fa fa-calendar" ></i>
                                        <?php echo get_the_date( 'j F,Y' ); ?>
                                    </div>
                                    <div class="col-lg-6 comm pd-0">
                                        <i class="fa fa-commenting"></i>
                                        <?php echo $my_var = get_comments_number(); ?> Comments
                                    </div>
                                </div>                     
                            </div>
                        <?php endif ?>
                        <div class="clearfix"></div>
                    </div>
                    <script type="text/javascript">
                        var title = 0;
                        jQuery(".page-template-blog-left-sidebar .inner-blogpost").each(function(){
                          if ($(this).height() > title) { title = $(this).height(); }
                        });
                        jQuery(".page-template-blog-left-sidebar .inner-blogpost").height(title);


                        // on Resize change height

                        jQuery(window).resize(function(){
                          jQuery(".page-template-blog-left-sidebar .inner-blogpost").height("");
                          var title = 0;
                          jQuery(".page-template-blog-left-sidebar .inner-blogpost").each(function(){
                            if ($(this).height() > title) { title = $(this).height(); }
                          });
                          jQuery(".page-template-blog-left-sidebar .inner-blogpost").height(title);
                        });
                    </script>
                  <!-- <script>
                      jQuery.noConflict();
                      $(function(){
                        function innerblogpostHeight(){
                          var ht = 0;
                          $('.page-template-blog-left-sidebar .inner-blogpost').each(function(i){
                            var tHt = $(this).height();
                            if(ht<tHt){
                              ht=tHt;
                            }
                          });
                          $('.page-template-blog-left-sidebar .inner-blogpost').height(ht+'px');
                        }
                        innerblogpostHeight();
                      });
                      $( window ).resize(function(){
                        innerblogpostHeight();
                      });
                  </script> -->
              </div> 

           <?php
               endwhile;
            endif;
            wp_reset_postdata();
            ?>
              <div class="clearfix"></div>
          </div>
          </div>
              <div class="clearfix"></div>
            <div class="row mr-0">
                    <div class="col-md-12">
                            <div class="pagingation">
                                 <?php lzGetPagination($query);?>
                            </div>
                    </div>
            </div>
          <div class="clearfix"></div>
      
      </div>
    </div>
</main>
<?php get_footer(); ?>
