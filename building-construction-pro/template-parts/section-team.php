 <?php   
 if(get_theme_mod('team_area_disable') != 'on' ){?>
 	<?php 
	 	if( get_theme_mod('team_areaTpadding',true) ) {
	 		$team_areaTpadding = 'padding-top:'.esc_attr(get_theme_mod('team_areaTpadding')).';';
	 	}
	 	if( get_theme_mod('team_areaBpadding',true) ) {
	 		$team_areaBpadding = 'padding-bottom:'.esc_attr(get_theme_mod('team_areaBpadding')).';';
	 	}
 	
 	?>

<div class="team-area" id="team">
	<div class="container">
		<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<?php			
				$team_title = get_theme_mod('team_title_title', 'Meet Our Team');
			?>
			<div class="row justify-content-left">
				<?php if($team_title){ ?>	
				<div class="section-title">
						<h2><?php echo ($team_title); ?></h2>
				</div>
				<?php }?>
			</div>
		</div>
		<div class="teambx col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="row">
			<?php 
				$showStatic = true;
				$cols = get_theme_mod('team_area_npp_count', 2);
				$cols++;
				switch($cols){
					case 1:
					$colCls = 'col-lg-4 col-md-4 col-sm-12';
					break;
					case 2:	
					$colCls = 'col-lg-4 col-md-4 col-sm-12';
					break;
					case 3:
					case 5:
					case 6:
					case 9:
					case 11:
					case 13:
					case 15:
					$colCls = 'col-lg-4 col-md-4 col-sm-12';
					break;
					default: 
					$colCls = 'col-lg-4 col-md-4 col-sm-12';
					break;
				}
				for( $i = 1; $i <= $cols; $i++ ){
					$team_area_page_id = get_theme_mod('team_area_page'.$i); 
					$team_area_page_icon = get_theme_mod('team_area_page_icon'.$i);
					if($team_area_page_id){
						$showStatic = false;
						echo teamShortCode($team_area_page_id, $isCustomizer=true, $i);
					}
				}
				if($showStatic === true){
					for( $i = 1; $i <= $cols; $i++ ){ ?> 
				<div class="<?php echo $colCls;?> single-team"> 
				<!-- <div class="item single-team"> -->
					<div class="our-team ">
						<div class="teamimg">
							<div class="single-team-img">
								<img src="<?php echo esc_url(get_template_directory_uri().'/images/team.png');?>"/>
							</div>
						</div>
						<div class="team-text">
							<h4 class="inner-area-title wow fadeInLeft" data-wow-duration="1s">Martha T. Saenz</h4>
							<div class=" team-designation wow fadeInLeft" data-wow-duration="2s">Company worker</div> 
						</div>
						<div class="clearfix"></div>
					</div>
				</div>  
				<?php 
				}
			} ?>
			</div>
		</div>
	</div>	
	</div>
</div>

<?php }
