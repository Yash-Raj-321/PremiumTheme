<?php
if(get_theme_mod('schedule_area_disable') != 'on' ){
?>
	<?php 
		if( get_theme_mod('schedule_areaTpadding',true) ) {
			$schedule_areaTpadding = 'padding-top:'.esc_attr(get_theme_mod('schedule_areaTpadding')).';';
		}
		if( get_theme_mod('schedule_areaBpadding',true) ) {
			$schedule_areaBpadding = 'padding-bottom:'.esc_attr(get_theme_mod('schedule_areaBpadding')).';';
		}
	?>			
	<div class="schedule-area " id="schedule">		

		<!-- <div class="container"> -->
			<div class="row mr-0">
					<?php
						$showStatic = true;
						for( $i = 1; $i < 11; $i++ ){
							$scheduleus_page_id = get_theme_mod('scheduleus_page_icon'.$i); 
							if(!empty($scheduleus_page_id)){
								$showStatic = false;
								break;
							}
						}
					?>
				<div class="scheduleus-post-wrap">
						<div class="sec-img"></div> 
						<div class="sec-img-right"></div>  
					<?php
						$cols = get_theme_mod('scheduleus_npp_count', 0);
						$cols++;
						// echo '$cold: '.$cols;
						switch($cols){
							case 1:
							$colCls = 'col-lg-12 col-md-12 col-sm-12';
							break;
							case 2:	
							$colCls = 'col-lg-12 col-md-12 col-sm-12';
							break;
							case 3:
							case 5:
							case 6:
							case 9:
							case 11:
							case 13:
							case 15:
							$colCls = 'col-lg-12 col-md-12 col-sm-12';
							break;
							default: 
							$colCls = 'col-lg-12 col-md-12 col-sm-12';
							break;
						}
						$icons = array(1=>'heart', 2=>'star', 3=>'flash', 4=>'bell',5=>'heart', 6=>'star', 7=>'flash', 8=>'bell');
					?>
					<div class="schedule-post-boxes row ">
						<?php
								for( $i = 1; $i <= $cols; $i++ ){
									if($showStatic === false){
								$url = get_theme_mod('ruh_schedule_page_url_'.$i, '#');	
								$scheduleus_page_title = get_theme_mod('scheduleus_page_title'.$i, 'Quick Response Times');
								$scheduleus_page_text = get_theme_mod('scheduleus_page_text'.$i, 'There are many variations of passages of Lorem Ipsum');
								$scheduleus_page_id = get_theme_mod('scheduleus_page'.$i); 
								$scheduleus_page_icon = get_theme_mod('scheduleus_page_icon'.$i);
								if($scheduleus_page_icon){	
						?>
						<div class="<?php echo $colCls;?> schedulebx " data-wow-duration="1s">
							<div class="scheduleus-single " >
								<div class="row" >
									<div class="col-md-2"> 
										<div class="icn">
											<a href="<?php echo esc_url(!empty($url)?$url:'#');?>">
												<span class="<?php echo $scheduleus_page_icon; ?>"></span>
												<!-- <img src="</?php echo esc_url($scheduleus_page_icon); ?>" class="img-responcive" /> -->
											</a>
										</div>
									</div> 
									<div class="col-md-10">
										<div class="schedule-area-data">
											<a href="<?php echo esc_url(!empty($url)?$url:'#');?>">
													<h4 class="inner-area-title">
													<?php echo $scheduleus_page_title; ?>
												</h4>
											</a>
											<p><?php echo $scheduleus_page_text; ?></p>	
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php					
								}
							}else{?>
						<div class="<?php echo $colCls;?>  schedulebx " data-wow-duration="1s">
							<div class="scheduleus-single" >
								<div class="row" >
									<div class="col-md-2"> 
										<div class="icn">
											<a href="#">
												<!-- <img class="img-responsive" src="</?php echo esc_url(get_template_directory_uri().'/images/schedule.jpg');?>" alt="schedule" /> -->
												<span class="fa fa-clock-o"></span> 
											</a>
										</div>
									</div> 
									<div class="col-md-10"> 
										<div class="schedule-area-data">
											<a href="#"><h4 class="inner-area-title">Schedule Repair Service & Save $25</h4></a>
											<p>Fast and reliable company solutions, 24/7.</p>
												
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php }

							}?>
					</div>
				</div>
					
			</div>
		<!-- </div> -->
	</div>
<!-- <script type="text/javascript">
	var title = 0;
jQuery(".schedule-area .schedulebx").each(function(){
  if ($(this).height() > title) { title = $(this).height(); }
});
jQuery(".schedule-area .schedulebx").height(title);


// on Resize change height

jQuery(window).resize(function(){
  jQuery(".schedule-area .schedulebx").height("");
  var title = 0;
  jQuery(".schedule-area .schedulebx").each(function(){
    if ($(this).height() > title) { title = $(this).height(); }
  });
  jQuery(".schedule-area .schedulebx").height(title);
});
</script> -->
<?php }  