<?php

if(get_theme_mod('counter_area_disable') != 'on' ){
	?>
	<?php 
		if( get_theme_mod('counter_areaTpadding',true) ) {
			$counter_areaTpadding = 'padding-top:'.esc_attr(get_theme_mod('counter_areaTpadding')).';';
		}
		if( get_theme_mod('counter_areaBpadding',true) ) {
			$counter_areaBpadding = 'padding-bottom:'.esc_attr(get_theme_mod('counter_areaBpadding')).';';
		}
			if( get_theme_mod('counter_areaOpacity',true) ) {
			$counter_areaOpacity = 'opacity:'.esc_attr(get_theme_mod('counter_areaOpacity')).';';
		}
	?>		
	<div class="counter-area" id="counter" >
		 <?php
	          $showStatic = true;
	          for( $i = 1; $i < 9; $i++ ){
	            $counter_page_id = get_theme_mod('counter_page_icon'.$i); 
	            if(!empty($counter_page_id)){
	              $showStatic = false;
	              break;
	            }
	          }
         ?>
    	<div class="container">
			<div class="row">  
				<div class="col-lg-4 col-md-12 pd-0">
					<?php
							$counter_maintitle = get_theme_mod('counter_maintitle', 'Our Portfolio');
					?>
					<div class="countertures-title ">
						<?php 
								$counter_image1 = get_theme_mod('counter_image1');
								if(!empty($counter_image1)){
									echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($counter_image1).'" class="img-responsive secondry-bg-img" />';
								}else{
									echo '<img src="'.get_template_directory_uri().'/images/abotimg2.jpg" class="img-responsive" />';
								}

							?>
							<h2><?php echo ($counter_maintitle);  ?></h2>
					</div>
				</div>
					<!-- --------------- -->
				<div class="col-lg-4 col-md-12 pd-0">  
					<div class="counter-img2">
						<?php 
							$counter_image2 = get_theme_mod('counter_image2');
							if(!empty($counter_image2)){
								echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($counter_image2).'" class="img-responsive secondry-bg-img" />';
							}else{
								echo '<img src="'.get_template_directory_uri().'/images/abotimg2.jpg" class="img-responsive" />';
							}

						?>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 pd-0"> 
					<?php
						$counter_text = get_theme_mod('counter_text', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words . which don not look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure.');
					?>
					<p><?php echo ($counter_text);  ?></p> 
					<div class="counter-img">
						<?php 
							$counter_image3 = get_theme_mod('counter_image3');
							if(!empty($counter_image3)){
								echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($counter_image3).'" class="img-responsive secondry-bg-img" />';
							}else{
								echo '<img src="'.get_template_directory_uri().'/images/abotimg2.jpg" class="img-responsive" />';
							}

						?>
					</div>
				</div>
					<!-- --------------- -->
			</div>
		</div>
	</div> 
	<!-- counter Area Start -->
<?php } 