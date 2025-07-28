<?php

if(get_theme_mod('appoi_disable') != 'on' ){ ?>
	<?php 
		if( get_theme_mod('appoinmentsection_toppadding',true) ) {
            $appoinmentsection_toppadding = 'padding-top:'.esc_attr(get_theme_mod('appoinmentsection_toppadding')).';';
        }
        if( get_theme_mod('appoinmentsection_bottompadding',true) ) {
            $appoinmentsection_bottompadding = 'padding-bottom:'.esc_attr(get_theme_mod('appoinmentsection_bottompadding')).';';
        }

	?>
	<div id="appointment">	
		<!-- <div class="app-cir"></div> -->
		<div class="container">
				<?php
					$appform_maintitle = get_theme_mod('appform_maintitle', 'Our <br> Contact');
					$infphtxt = get_theme_mod('infphtxt', '+111 222 1111');
					$inftxt = get_theme_mod('inftxt', '869 U.S. 62 Business Mountain Home Arizona United States');
					$infemiltxt = get_theme_mod('infemiltxt', 'plumberWork@fakmail.com');
				?>
				<div class="row mr-0">	
					<div class="col-lg-7 col-md-7 col-sm-12 app-form">
						<?php 
							$contact_image = get_theme_mod('contact_image');
							if(!empty($contact_image)){
								echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($contact_image).'" class="img-responsive secondry-bg-img" />';
							}else{
								echo '<img src="'.get_template_directory_uri().'/images/abotimg2.jpg" class="img-responsive" />';
							}

						?>
					</div>
					<?php if(!empty( $infphtxt || $inftxt || $infemiltitle )){ ?>

					<div class="col-lg-5 col-md-5 col-sm-12 app-detail ">
							<?php if($appform_maintitle ){ ?>
								<div class="app-title">
						          <h2><?php echo ($appform_maintitle);  ?></h2> 
						      </div> 
					        <?php }?>
							<div class="row mr-0">
							<?php if(!empty(  $infphtxt )){ ?>
							<div class="col-lg-12 col-md-12 col-sm-12">
								<div class="info-txt">
									<div class="row ">
										<div class="col-lg-2 col-md-2 col-sm-2 col-2 ">
											<div class="icnbx">
												<a><i class="fa fa-phone"></i></a>
											</div>

										</div>
										<div class="col-lg-10 col-md-10 col-sm-10 col-10 infoinnbx">
											<a href="tel:<?php echo $infphtxt;?>"><?php echo ($infphtxt);  ?></a>
											<div class="clearfix"></div>
										</div>
										
									</div>
								</div>
							</div>
							<?php }?> 


							<?php if(!empty( $inftxt )){ ?>
							<div class="col-lg-12 col-md-12 col-sm-12">
								<div class="info-txt t-box">
									<div class="row">
										<div class="col-lg-2 col-md-2 col-sm-2 col-2">
											<div class="icnbx">
												<i class="fa fa-map-marker"></i>
											</div>
										</div>
										<div class="col-lg-10 col-md-10 col-sm-10 col-10 infoinnbx">
											<p><?php echo ($inftxt);  ?></p>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							</div>
							<?php }?> 

							<?php if(!empty( $infemiltxt )){ ?>
							<div class="col-lg-12 col-md-12 col-sm-12">
								<div class="info-txt s-box">
									<div class="row">
										<div class="col-lg-2 col-md-2 col-sm-2 col-2 ">
											<div class="icnbx m-icnbx">
												<a><i class="fa fa-envelope"></i></a>
											</div>
										</div>
										<div class="col-lg-10 col-md-10  col-sm-10 col-10 infoinnbx">
											<a href="mailto:<?php echo $infemiltxt;?>"><?php echo $infemiltxt;?></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							</div>
							<?php }?> 				    
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div> 
					<?php }?> 
					<div class="clearfix"></div>
				</div>
			</div>
		<div class="clearfix"></div>
	</div>
<?php } 