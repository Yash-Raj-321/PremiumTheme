<?php
/**
 *
 * @package Ruh Premium
 */
if(get_theme_mod('blog_section_disable') != 'on' ){ ?>
	<?php 
 	if( get_theme_mod('blog_areaTpadding',true) ) {
 		$blog_areaTpadding = 'padding-top:'.esc_attr(get_theme_mod('blog_areaTpadding')).';';
 	}
 	if( get_theme_mod('blog_areaBpadding',true) ) {
 		$blog_areaBpadding = 'padding-bottom:'.esc_attr(get_theme_mod('blog_areaBpadding')).';';
 	}
 	
 	?>
<div  class="blog-area" id="blog" >	
	<?php			
		$blog_title = get_theme_mod('blog_title', 'LATEST POST');
	?>
		<div class="container">
				<div class="row justify-content-center">
					<?php if($blog_title){ ?>	
						<div class="section-title">
								<h2><?php echo ($blog_title);  ?></h2>
						</div>
					<?php }?>
				</div>
		</div>
		<div class="container">
				<div class="blog-area-wrap">
						<div class="blog-posts">
							<div class="row">
							<?php 
								$blog_post_count = get_theme_mod('blog_post_count', 3 );
								$blog_cat_exclude = get_theme_mod('blog_cat_exclude');
								$blog_cat_exclude = explode(',', $blog_cat_exclude);
								$args = array(
									'posts_per_page' => absint($blog_post_count),
									'category__not_in' => $blog_cat_exclude
								);
								$query = new WP_Query($args);
								if($query -> have_posts()):
									while($query -> have_posts()) : $query -> the_post();
									$ruh_blog_image = wp_get_attachment_image_src(get_post_thumbnail_id() , 'total-blog-thumb');
									?>
									<?php 
									if(has_post_thumbnail()){
										$img = esc_url($ruh_blog_image[0]);
									}
									if(empty($ruh_blog_image)){
										$img = get_template_directory_uri().'/images/blog.jpg';
									}
							?>
								<div class="blog-post col-lg-4 col-md-6 col-sm-6">
										<div class="box-area-S">
												<div class="blog-thumbnail">
														<a href="<?php the_permalink(); ?>">
																<img class="blog-img" src="<?php echo $img; ?>" alt="<?php the_title(); ?>">
																<div class="overlay"></div>
														</a>	
												</div>
												<div class="blog-single">
														<a href="<?php the_permalink(); ?>">
															<h4 class="inner-area-title"><?php the_title(); ?></h4>
														</a>
														<div class="blog-singleinn">
															<?php
								                  $blog_button1 = get_theme_mod('blog_button1', 'Read More');
								              ?>
																<p>
																	<?php 
																			if(has_excerpt()){
																				echo get_the_excerpt();
																			}else{
																				echo ruh_excerpt( get_the_content() , 100 );
																			}
																	?>
																	<?php if($blog_button1) { ?>
																		<a class="blogbtn" href="<?php echo esc_url(get_permalink()); ?>">
							                          <span>  <?php echo $blog_button1 ?></span>
							                      </a>
						                       <?php }?>
																</p>
															<div class="clearfix"></div>
														</div>
														<div class="blog-date">
																<div class="row mr-0">
																		<div class="col-lg-6 col-6">
																				<i class="fa fa-calendar" ></i>
																				<?php echo get_the_date( 'j F,Y' ); ?>
																		</div>
																		<div class="col-lg-6 col-6 comm pd-0">
																				<i class="fa fa-commenting"></i>
																				<?php echo $my_var = get_comments_number(); ?> Comments
																		</div>
															</div>
														</div>
												</div>
											<div class="clearfix"></div>
										</div>
								</div>
										<?php
									endwhile;
								endif;
								wp_reset_postdata();
								?>
							</div>
						</div>
						<div class="clearfix"></div>
				</div>	
		</div>
		<div class="clearfix"></div>
</div>
<script type="text/javascript">
	var title = 0;
jQuery(".blog-area .blog-post").each(function(){
  if ($(this).height() > title) { title = $(this).height(); }
});
jQuery(".blog-area .blog-post").height(title);


// on Resize change height

jQuery(window).resize(function(){
  jQuery(".blog-area .blog-post").height("");
  var title = 0;
  jQuery(".blog-area .blog-post").each(function(){
    if ($(this).height() > title) { title = $(this).height(); }
  });
  jQuery(".blog-area .blog-post").height(title);
});
</script>
	


<?php }