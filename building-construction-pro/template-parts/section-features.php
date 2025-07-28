<?php
if(get_theme_mod('features_area_disable') != 'on' ){
?>
	<?php 
		if( get_theme_mod('features_areaTpadding',true) ) {
			$features_areaTpadding = 'padding-top:'.esc_attr(get_theme_mod('features_areaTpadding')).';';
		}
		if( get_theme_mod('features_areaBpadding',true) ) {
			$features_areaBpadding = 'padding-bottom:'.esc_attr(get_theme_mod('features_areaBpadding')).';';
		}
	?>			
	<div class="features-area " id="features">		  
			<div class="container">
					<div class="vision row">
							<div class="col-lg-5 col-md-12">
								<?php
									$fea_maintitle = get_theme_mod('fea_maintitle', 'Our Vision ');
									$fea_txt = get_theme_mod('fea_txt', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration. in some form, by injected humour, or randomised words . which do not look even slightly believable. If you are going ');
								?>
									<div class="features-title ">
											<h2><?php echo ($fea_maintitle);  ?></h2>
											<?php
												$showStatic = true;
												for( $i = 1; $i < 9; $i++ ){
													$url = get_theme_mod('ruh_oursteps_page_url_'.$i, '#');
													$link = get_theme_mod('ruh_oursteps_page_link'.$i);
													$ruh_oursteps_page_id = get_theme_mod('ruh_oursteps_page_icon'.$i); 
													if(!empty($ruh_oursteps_page_id)){
														$showStatic = false;
														break;
													}
												}
											?>
											<div class="col-md-12 vision-post-wrap">
												<div class="row row-eq-height m-0">
													<?php
														$cols = get_theme_mod('ruh_vision_npp_count', 2);
														$cols++;

														switch($cols){
															case 1:
															$colCls = 'col-lg-12 col-md-12 col-sm-12 col-xs-12';
															break;
															case 2:	
															$colCls = 'col-lg-12 col-md-12 col-sm-12 col-xs-12';
															break;
															case 3:
															case 5:
															case 6:
															case 9:
															case 11:
															case 13:
															case 15:
															$colCls = 'col-lg-12 col-md-12 col-sm-12 col-xs-12';
															break;
															default: 
															$colCls = 'col-lg-12 col-md-12 col-sm-12 col-xs-12';
															break;
														}
														$icons = array(1=>'heart', 2=>'star', 3=>'flash', 4=>'bell',5=>'heart', 6=>'star', 7=>'flash', 8=>'bell');
													?>
													<?php
													for( $i = 1; $i <= $cols; $i++ ){
														if($showStatic === false){
															$ruh_vision_page_no = get_theme_mod('ruh_vision_page_no_'.$i, '01');
															$ruh_vision_page_title = get_theme_mod('ruh_vision_page_title_'.$i, 'Vision');
															$ruh_vision_page_text = get_theme_mod('ruh_vision_page_text_'.$i, 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words .');
															$ruh_vision_page_id = get_theme_mod('ruh_vision_page'.$i); 
															if($ruh_vision_page_no){
													?>
													<div class="<?php echo $colCls;?> vision-bx">
														<div class="row vision-post">
															<div class="col-lg-2 col-md-2 col-sm-2 col-2 vision-icon">
																	<span><?php echo $ruh_vision_page_no; ?></span>
															</div>
															<div class="col-lg-10 col-md-10 col-sm-10 col-10 details">
																<h5 class="title"><?php echo $ruh_vision_page_title; ?></h5>
																<p class="text"><?php echo $ruh_vision_page_text; ?></p>	
															</div>
															<div class="clearfix"></div>
														</div>
													</div>
													<?php
															}
														}else{?>
													<div class="<?php echo $colCls;?> vision-bx">
														<div class="row vision-post">
															<div class="col lg-2 col-md-2 col-sm-2 col-2 vision-icon">
																<span>01</span>
															</div>
															<div class="col-lg-10 col-md-10 col-sm-10 col-10 details">
																<h5 class="title">Vision</h5>
																<p class="text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words .</p>
															</div>
															<div class="clearfix"></div>		
														</div>
													</div>
														<?php }

													}?>
													<div class="clearfix"></div>
												</div>
											</div>
									</div>
							</div>
							<div class="col-lg-6 col-md-12 offset-1">
								<div class="featurearea-img">
									<?php 
										$vision_image = get_theme_mod('vision_image');
										if(!empty($vision_image)){
											echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($vision_image).'" class="img-responsive secondry-bg-img" />';
										}else{
											echo '<img src="'.get_template_directory_uri().'/images/abotimg2.jpg" class="img-responsive" />';
										}

									?>
								</div>
							</div>
					</div>
					<div class="mission row">
							<div class="col-lg-6 col-md-12">
								<div class="featurearea-img">
									<?php 
										$feature_image = get_theme_mod('feature_image');
										if(!empty($feature_image)){
											echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($feature_image).'" class="img-responsive secondry-bg-img" />';
										}else{
											echo '<img src="'.get_template_directory_uri().'/images/abotimg2.jpg" class="img-responsive" />';
										}

									?>
								</div>
							</div>
							<div class="col-lg-5 col-md-12 offset-1">
								<?php
									$fea_maintitle1 = get_theme_mod('fea_maintitle1', 'Our Mission ');
									$fea_txt1 = get_theme_mod('fea_txt1', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration. in some form, by injected humour, or randomised words . which do not look even slightly believable. If you are going ');
								?>
									<div class="features-title1 ">
											<h2><?php echo ($fea_maintitle1);  ?></h2>
											<div class="features-title ">
											<?php
												$showStatic = true;
												for( $i = 1; $i < 9; $i++ ){
													$url = get_theme_mod('ruh_oursteps_page_url_'.$i, '#');
													$link = get_theme_mod('ruh_oursteps_page_link'.$i);
													$ruh_oursteps_page_id = get_theme_mod('ruh_oursteps_page_icon'.$i); 
													if(!empty($ruh_oursteps_page_id)){
														$showStatic = false;
														break;
													}
												}
											?>
											<div class="col-md-12 mission-post-wrap">
												<div class="row row-eq-height m-0">
													<?php
														$cols = get_theme_mod('ruh_mission_npp_count', 2);
														$cols++;

														switch($cols){
															case 1:
															$colCls = 'col-lg-12 col-md-12 col-sm-12 col-xs-12';
															break;
															case 2:	
															$colCls = 'col-lg-12 col-md-12 col-sm-12 col-xs-12';
															break;
															case 3:
															case 5:
															case 6:
															case 9:
															case 11:
															case 13:
															case 15:
															$colCls = 'col-lg-12 col-md-12 col-sm-12 col-xs-12';
															break;
															default: 
															$colCls = 'col-lg-12 col-md-12 col-sm-12 col-xs-12';
															break;
														}
														$icons = array(1=>'heart', 2=>'star', 3=>'flash', 4=>'bell',5=>'heart', 6=>'star', 7=>'flash', 8=>'bell');
													?>
													<?php
													for( $i = 1; $i <= $cols; $i++ ){
														if($showStatic === false){
															$ruh_mission_page_no = get_theme_mod('ruh_mission_page_no_'.$i, '01');
															$ruh_mission_page_title = get_theme_mod('ruh_mission_page_title_'.$i, 'Mission');
															$ruh_mission_page_text = get_theme_mod('ruh_mission_page_text_'.$i, 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words .');
															$ruh_mission_page_id = get_theme_mod('ruh_mission_page'.$i); 
															if($ruh_mission_page_no){
													?>
													<div class="<?php echo $colCls;?> mission-bx">
														<div class="row mission-post">
															<div class="col-lg-2 col-md-2 col-sm-2 col-2 mission-icon">
																	<span><?php echo $ruh_mission_page_no; ?></span>
															</div>
															<div class="col-lg-10 col-md-10 col-sm-10 col-10 details">
																<h5 class="title"><?php echo $ruh_mission_page_title; ?></h5>
																<p class="text"><?php echo $ruh_mission_page_text; ?></p>	
															</div>
															<div class="clearfix"></div>
														</div>
													</div>
													<?php
															}
														}else{?>
													<div class="<?php echo $colCls;?> mission-bx">
														<div class="row mission-post">
															<div class="col lg-2 col-md-2 col-sm-2 col-2 mission-icon">
																<span>01</span>
															</div>
															<div class="col-lg-10 col-md-10 col-sm-10 col-10 details">
																<h5 class="title">mission</h5>
																<p class="text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words .</p>
															</div>
															<div class="clearfix"></div>		
														</div>
													</div>
														<?php }

													}?>
													<div class="clearfix"></div>
												</div>
											</div>
									</div>
									</div>
							</div>
					</div>
			</div>
	</div>
<?php }  