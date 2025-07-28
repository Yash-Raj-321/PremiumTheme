<?php   
if(get_theme_mod('project_area_disable') != 'on' ){ ?>
	<?php 
		if( get_theme_mod('project_areaTpadding',true) ) {
			$project_areaTpadding = 'padding-top:'.esc_attr(get_theme_mod('project_areaTpadding')).';';
		}
		if( get_theme_mod('project_areaBpadding',true) ) {
			$project_areaBpadding = 'padding-bottom:'.esc_attr(get_theme_mod('project_areaBpadding')).';';
		}
	?>	
 
<div id="project" class="project-area ">
	<div class="container">
	  	<div class="row"> 
			<div class="col-lg-5 col-md-5 col-sm-12 project-single-area"> 
			<?php
			
			$project_maintitle = get_theme_mod('project_maintitle', 'About Our Project');
			?>
				<div class="row justify-content-left">
					<?php if($project_maintitle){ ?>	
					<div class="section-title">
						<h2><?php echo ($project_maintitle); ?></h2>
					</div>
					<?php }?>
				</div>
			
			 	<div class="row "> 
				<?php 
				$showStatic = true;
				$cols = get_theme_mod('project_npp_count', 2);
				$cols++;
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
				for( $i = 1; $i <= $cols; $i++ ){
					$project_page_id = get_theme_mod('project_page'.$i); 
					$project_page_icon = get_theme_mod('project_page_icon'.$i);
					$project_page_icon1 = get_theme_mod('project_page_icon1'.$i);
					if($project_page_id){
						$showStatic = false;
						echo projectshortCode($project_page_id, $isCustomizer=true, $i);
					}
				}
				if($showStatic === true){
					for( $i = 1; $i <= $cols; $i++ ){ ?>
					<div class="<?php echo $colCls;?> single-project-bx ">
						<div  class="single-project">
							<div class="project-title-box">
								<a href="<?php echo esc_url(get_permalink()); ?>">
								  	<h2>Sink Installation</h2>
								</a>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has industrys standerd dummy text ever since the 1500s.</p> 
								
								<div class="clearfix"></div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
						<?php 
					}
				} ?>
				<div class="clearfix"></div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 offset-1 col-sm-12">
				<div class="project-img">
					<?php 
						$project_image = get_theme_mod('project_image');
						if(!empty($project_image)){
							echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($project_image).'" class="img-responsive secondry-bg-img" />';
						}else{
							echo '<img src="'.get_template_directory_uri().'/images/abotimg2.jpg" class="img-responsive" />';
						}

					?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php }
