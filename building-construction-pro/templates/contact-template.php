<?php
/**
 * Template Name: Contact Page
 *
 * @package Ruh Premium
 */
get_header(); 
?>

<?php $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));?>
<header class="page-main-header" <?php  if (!empty($image)) : ?> style="background: url('<?php echo esc_url($image); ?>'); background-repeat: no-repeat; background-size:cover; position: relative;"<?php endif ?> >
    <div class="overlay1"></div>
    <div class="container">
        <?php the_title( '<h1 class="ht-main-title">', '</h1>' ); ?>
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

<main id="innerpage-box" >
		<div class="container">
				<div class="contact-address-area">
						<div class="contform" >
								<div class="row mr-0">		
										<div class="col-md-12 col-sm-12 pd-0 contforminn">
												<div id="ht-contactus-wrap">
													<?php 
														$shortcodeLbl = get_theme_mod('ruh_contactus_shortcode_lbl', 'CONTACT US');
														$shortcodetxt = get_theme_mod('shortcodetxt', 'There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some words etc.');
														$shortcode = get_theme_mod('ruh_contactus_shortcode', 'Add your form shortcode customizer');
														//$iframe = get_theme_mod('ruh_contactus_embade', 'Add your Embed code in customizer');
													?>
														<div class="contact-form">
																<div class="conforminn">
																		<?php if( $shortcodeLbl  || $shortcodetxt){ ?>
																		<div class="conformbx">
															          <div class="maintle inner-area-title"><?php echo $shortcodeLbl;?></div>	
															          <div class="confmtxt col-lg-6 col-lg-offset6"><?php echo $shortcodetxt;?></div>
													     			</div>
													     			<?php } ?>	
													          <div class="ctform"><?php echo do_shortcode($shortcode);?></div>
																	<div class="clearfix"></div>	
																</div>
																<div class="clearfix"></div>					
														</div>
												</div>
										</div>
								</div>
							<div class="clearfix"></div>
						</div>
		  			<div class="clearfix"></div>
				</div>
		</div>	
		<div class="col-md-12 col-sm-12 pd-0 contact-b-s">
				<div class="cntlhsbx">
						<?php 
								$phonetitle = get_theme_mod('ruh_contactus_phonetitle', 'PHONE');
					  		$phone = get_theme_mod('ruh_contactus_phone', '+ 111 2222 333 88');
					  		$phone2 = get_theme_mod('ruh_contactus_phone2', '+ 2222 111 333 77');
					    	
					    	$addresstitle = get_theme_mod('ruh_contactus_addresstitle', 'ADDRESS');
								$address = get_theme_mod('ruh_contactus_address', 'Add Address here..');

								$emailtitle = get_theme_mod('ruh_contactus_emailtitle', 'E-MAIL');
								$email = get_theme_mod('ruh_contactus_email', 'plumberwork@fakemail.com');
								$email2 = get_theme_mod('ruh_contactus_email2', 'workplumber@nfamail.com');
						?>
						<div class="container">		
								<div class="conbx">		
										<div class="row">	
							    			<?php if( $phonetitle || $phone || $phone2 ){ ?>
									   		<div class="col-md-4 cntpgbx ">
										   			<div class="row mr-0">
												   			<div class="col-lg-1 col-md-2 col-sm-2 pd-0">
														   			<div class="cntpgicn">
														   					<i class="fa fa-phone" ></i> 
														   			</div>
													   		</div>
													   		<div class="col-lg-11 col-md-10 col-sm-10 cntpgtxt">
													   				<h3><?php echo $phonetitle;?></h3>
												   			</div>
												   				<a class="" href="tel:<?php echo $phone;?>"><p><?php echo $phone;?></p></a>
												   				<a class="" href="tel:<?php echo $phone2;?>"><p><?php echo $phone2;?></p></a>
											   		</div>
											   		<div class="clearfix"></div>
										   	</div>
											 <?php } ?>	

												<?php if( $addresstitle || $address ){ ?>
												<div class="col-md-4 cntpgbx ">
														<div class="row mr-0">
																<div class="col-lg-1 col-md-2 col-sm-2 pd-0">
														   			<div class="cntpgicn">
														   					<i class="fa fa-map-marker" ></i>
														   			</div>
													   		</div>
													   		<div class="col-lg-11 col-md-10 col-sm-10 cntpgtxt">
													   				<h3><?php echo $addresstitle;?></h3>
													   		</div>
													   		<p><?php echo $address;?></p>	
													  </div>
												   	<div class="clearfix"></div>
											  </div>
												<?php } ?>

												<?php if( $emailtitle || $email || $email2 ){ ?>
												<div class="col-md-4 cntpgbx">
														<div class="row mr-0">
																<div class="col-lg-1 col-md-2 col-sm-2 pd-0">
														   			<div class="cntpgicn">
														   					<i class="fa fa-envelope" ></i>
														   			</div>
													   		</div>
													   		<div class="col-lg-11 col-md-10 col-sm-10 cntpgtxt">
													   				<h3><?php echo $emailtitle;?></h3>
													   		</div>
													   		<a href="mailto:<?php echo $email;?>"><p><?php echo $email;?></p></a>
													   		<a href="mailto:<?php echo $email2;?>"><p><?php echo $email2;?></p></a>
													  </div>
												   	<div class="clearfix"></div>
											  </div>
												<?php } ?>	
									 		<div class="clearfix"></div>
									 	</div>
							 </div>
						</div>
				</div>
		</div>
		<!-- <div class="contact-mapbox wow zoomIn">
			</?php echo $iframe; ?>
		</div> -->
		<div class="clearfix"></div>
</main>
<?php get_footer(); ?>