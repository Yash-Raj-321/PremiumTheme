<?php   
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ruh Premium
 */
?>
<?php 
	if( get_theme_mod('sec_footerseTmargin',true) ) {
		$sec_footerseTmargin = 'padding-top:'.esc_attr(get_theme_mod('sec_footerseTmargin')).';';
	}
	if( get_theme_mod('sec_footersebottommargin',true) ) {
		$sec_footersebottommargin = 'padding-bottom:'.esc_attr(get_theme_mod('sec_footersebottommargin')).';';
	}
?>		
<footer class="footer-area" id="footer">
	<div class="footer-oly"></div>	
	<?php if(is_active_sidebar('ruh-footer1') || is_active_sidebar('ruh-footer2') || is_active_sidebar('ruh-footer3') || is_active_sidebar('ruh-footer4') ){ ?>
		<?php
			$newsletter_title = get_theme_mod('newsletter_title', 'GET OUR NEWSLETTER');	
			$newsletter_txt = get_theme_mod('newsletter_txt', 'There are many variations of passages of LoremIpsum available, but have');
			$ruh_newsletter_shortcode = get_theme_mod('ruh_newsletter_shortcode', '[Add Form shortcode]');
		?>
		<div class="fbox"> 
			<div class="container">
		<div class="row mr-0">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 p0">
					<div class="row mr-0"> 
						<div class="s-footer single-footer-1 "  style=" background: url('<?php echo esc_url(get_template_directory_uri().'/images/newsletter.jpg');?> ')">
							<div class="sf-oly"></div>	
							<div class="single-footer wow zoomIn" data-wow-duration="1s">
															
								<?php if(is_active_sidebar('ruh-footer1')): 
									dynamic_sidebar('ruh-footer1');
								endif;
								?>	
							</div>
						</div>
					</div> 
				</div>

				<div class="col-lg-9 col-md-8 col-sm-6 col-xs-12 p0">
						<div class="box-form">
							<div class="row mr-0">
									<div class="col-lg-4 col-md-12">
										<div class="newstitle">
										    <?php if($newsletter_title || $newsletter_txt ){ ?>
											    <h3><?php echo ($newsletter_title);  ?></h3> 
											    <p><?php echo ($newsletter_txt);  ?></p> 
								            <?php }?>
										</div>
									</div>
									<div class="col-lg-8 col-md-12">
										<div class="subscribe_shortcode ">			
											<div class="ht-newsletter-member-wrap">										
													<?php echo do_shortcode($ruh_newsletter_shortcode);?>
											</div>
										</div>
									</div>
								</div>
								<!-- <div class="news-left-img"></div> -->
							
						</div>


							<div class="row mr-0"> 
					<div class="s-footer col-lg-4 col-md-6 col-sm-12 col-xs-12 single-footer-2 ">
						<div class="single-footer wow zoomIn" data-wow-duration="1.5s" >
							<?php if(is_active_sidebar('ruh-footer2')): 
								dynamic_sidebar('ruh-footer2');
							endif;
							?>	
						</div>
					</div>

					<div class="s-footer col-lg-5 col-md-6 col-sm-12 col-xs-12 single-footer-3">
						<div class="single-footer wow zoomIn"  data-wow-duration="2s" >
							<?php if(is_active_sidebar('ruh-footer3')): 
								dynamic_sidebar('ruh-footer3');
							endif;
							?>	
						</div>
					</div>

					<div class="s-footer col-lg-3 col-md-6 col-sm-12 col-xs-12 single-footer-4" >
						<div class="single-footer wow zoomIn" data-wow-duration="2.5s" >
							<?php if(is_active_sidebar('ruh-footer4')): 
								dynamic_sidebar('ruh-footer4');
							endif;
							?>	
						</div>
					</div>
				</div> 

				</div>



	

	</div>


		
			
			</div>
			<div class="clearfix"></div>

		</div>
		
	<?php } ?>

	<?php
		$footercopyright = get_theme_mod('footer_area_copyrighttext', 'Copyright © 2023 Building Construction All rights reserved');
	?>

	<?php 

		if( get_theme_mod('sec_bottomareaTmargin',true) ) {
			$sec_bottomareaTmargin = 'padding-top:'.esc_attr(get_theme_mod('sec_bottomareaTmargin')).';';
		}
		if( get_theme_mod('sec_bottomareabottommargin',true) ) {
			$sec_bottomareabottommargin = 'padding-bottom:'.esc_attr(get_theme_mod('sec_bottomareabottommargin')).';';
		}
		
	?>		
		<div class="bottom-area wow zoomIn" style="<?php echo esc_attr($sec_bottomareaTmargin); ?>" "<?php echo esc_attr($sec_bottomareabottommargin); ?>">
			<div class="fb-oly"></div>
			<div class="container">
				<div class="col-md-12 col-sm-12 col-xs-12 pd-0">
					<div class="footer-text">
						<?php if($footercopyright){ ?>
								<?php echo $footercopyright;?>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
</footer>

<script type="text/javascript">
	if(jQuery(window).width() >= 1170){
		new WOW().init();
	}
</script>

<script>
	$(window).scroll(function() {
		var height = $(window).scrollTop();
		if (height > 100) {
			$('#back2Top').fadeIn();
		} else {
			$('#back2Top').fadeOut();
		}
	});
	$(document).ready(function() {
		$("#back2Top").click(function(event) {
			event.preventDefault();
			$("html, body").animate({ scrollTop: 0 }, "slow");
			return false;
		});

	});
</script> 

<?php wp_footer(); ?>

	<!-- <a id="back2Top" title="Back to top" href="#"> &#10148; </a> -->

<div id="back2Top" title="Back to top" >
	<svg xmlns="http://www.w3.org/2000/svg"   class="bi bi-heart-arrow" viewBox="0 0 16 16">
	  <path d="M6.707 9h4.364c-.536 1.573 2.028 3.806 4.929-.5-2.9-4.306-5.465-2.073-4.929-.5H6.707L4.854 6.146a.5.5 0 1 0-.708.708L5.293 8h-.586L2.854 6.146a.5.5 0 1 0-.708.708L3.293 8h-.586L.854 6.146a.5.5 0 1 0-.708.708L1.793 8.5.146 10.146a.5.5 0 0 0 .708.708L2.707 9h.586l-1.147 1.146a.5.5 0 0 0 .708.708L4.707 9h.586l-1.147 1.146a.5.5 0 0 0 .708.708L6.707 9Z"/>
	</svg>

</div>

</body>
</html>
