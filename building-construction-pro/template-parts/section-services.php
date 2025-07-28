<?php   
if(get_theme_mod('service_area_disable') != 'on' ){ ?>
	<?php 
		if( get_theme_mod('service_areaTpadding',true) ) {
			$service_areaTpadding = 'padding-top:'.esc_attr(get_theme_mod('service_areaTpadding')).';';
		}
		if( get_theme_mod('service_areaBpadding',true) ) {
			$service_areaBpadding = 'padding-bottom:'.esc_attr(get_theme_mod('service_areaBpadding')).';';
		}
	
	?>	
	<div class="service-area " id="service" style="<?php echo esc_attr($service_areaTpadding); ?>" "<?php echo esc_attr($service_areaBpadding); ?>" >
		<div class="service-single-area" > 
			<?php
				$services_page_id = get_theme_mod('services_page');
				$services_maintitle = get_theme_mod('services_maintitle', 'About Our Service ');
			?>
			<div class="container">
				<div class="row">
					<?php if($services_maintitle){ ?>	
					<div class="col-md-4 ser-r">
						
							<div class="ser-heading">
									<h2><?php echo ($services_maintitle);  ?></h2>
							</div>
						
					</div>
					<?php }?>
					<div class="col-md-8 serbx">
							<div class="row">
							<?php 
							$showStatic = true;
							$cols = get_theme_mod('service_npp_count', 2);
							$cols++;
							switch($cols){
								case 1:
								$colCls = 'col-lg-6 col-md-6 col-sm-12';
								break;
								case 2:	
								$colCls = 'col-lg-6 col-md-6 col-sm-12';
								break;
								case 3:
								case 5:
								case 6:
								case 9:
								case 11:
								case 13:
								case 15:
								$colCls = 'col-lg-6 col-md-6 col-sm-12';
								break;
								default: 
								$colCls = 'col-lg-6 col-md-6 col-sm-12';
								break;
							}
									
							for( $i = 1; $i <= $cols; $i++ ){
								$services_page_id = get_theme_mod('services_page'.$i); 
								$services_page_icon = get_theme_mod('services_page_icon'.$i);
								$services_page_icon1 = get_theme_mod('services_page_icon1'.$i);
								if($services_page_id){
									$showStatic = false;
									echo serviceShortCode($services_page_id, $isCustomizer=true, $i);
								}
							}
						if($showStatic === true){
							for( $i = 1; $i <= $cols; $i++ ){ ?>
							<div class="<?php echo $colCls;?> single-service-bx ">
									<div class="single-service ">
											
											<div class="sertxbx">
												<div class="row">
													<div class="col-lg-2 col-md-2 col-sm-2">
														<h5 class="service-number"> <?php echo sprintf("%02d", $i); ?> </h5>
													</div>
													<div class="col-lg-10 col-md-10 col-sm-10">
													<a href="#">
														<h4 class="post-title inner-area-title wow fadeInDown">Company Profile</h4>
														<p class="section-area-text">
																There are many variations of passages of Lorem Ipsum available, but the majority.
														</p>
													</a>
													</div>
												</div>
											</div>	
											<div class="clearfix"></div>						
									</div>
									<div class="clearfix"></div>	
							</div>
								<?php 
								}
							} ?>
						</div>
					</div>
				</div>
			</div>
			<div class="image-slider">
				<div class="row">
					<div class="col-6">
						<?php 
							$service_image1 = get_theme_mod('service_image1');
							if(!empty($service_image1)){
								echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($service_image1).'" class="img-responsive secondry-bg-img" />';
							}else{
								echo '<img src="'.get_template_directory_uri().'/images/abotimg2.jpg" class="img-responsive" />';
							}

						?>
					</div>
					<div class="col-6">
						<?php 
							$service_image2 = get_theme_mod('service_image2');
							if(!empty($service_image2)){
								echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($service_image2).'" class="img-responsive secondry-bg-img" />';
							}else{
								echo '<img src="'.get_template_directory_uri().'/images/abotimg2.jpg" class="img-responsive" />';
							}

						?>
					</div>
				</div>
			</div>



			<!-- <div class="clearfix"></div> -->
		</div>
	</div>

<?php }