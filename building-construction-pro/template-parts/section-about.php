<?php
if(get_theme_mod('about_area_disable') != 'on' ){
?>
	<?php 
		if( get_theme_mod('about_areaTpadding',true) ) {
			$about_areaTpadding = 'padding-top:'.esc_attr(get_theme_mod('about_areaTpadding')).';';
		}
		if( get_theme_mod('about_areaBpadding',true) ) {
			$about_areaBpadding = 'padding-bottom:'.esc_attr(get_theme_mod('about_areaBpadding')).';';
		}
		if( get_theme_mod('about_areawave',true) ) {
			$about_areawave = 'top:'.esc_attr(get_theme_mod('about_areawave')).';';
		}
	?>			
	<div class="about-area" id="about">
		<div class="container">
			<div class="about-area-bx">
				<div class="row mr-0">
			<?php
				$about_page_id = get_theme_mod('about_page');
				$abouttitle = get_theme_mod('about_title', 'About Us');
				$abouttext = get_theme_mod('about_text', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words . which don not look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure.');
				$abouttext2 = get_theme_mod('about_text2', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.');
				$imgyear = get_theme_mod('imgyear', '95%');
				$aboutbtnurl = get_theme_mod('aboutbtnurl', '#');
				$aboutbtntext = get_theme_mod('aboutbtntext', 'Learn More');
			?>
					<div class="col-lg-6 col-md-6 pl-0">
						<div class="aboutarea-img">
							
							<?php 
								$about_image = get_theme_mod('about_image');
								if(!empty($about_image)){
									echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($about_image).'" class="img-responsive secondry-bg-img" />';
								}else{
									echo '<img src="'.get_template_directory_uri().'/images/abotimg2.jpg" class="img-responsive" />';
								}

							?>
						</div>
						<div class="year">
								<div class="y-num"><?php echo ($imgyear);  ?></div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 abt-rbx " data-wow-duration="1s">
						<div class="abtsection-title">
							<h2><?php echo ($abouttitle);  ?></h2>
						</div> 
						<div class="section-subtext">
							<p><?php echo ($abouttext);  ?></p>
							<p><?php echo ($abouttext2);  ?></p>
						</div>
						<div class="section-btn">
							<a href="<?php echo ($aboutbtnurl);  ?>"><?php echo ($aboutbtntext);  ?></a>
						</div>
						<div class="clearfix"></div>
					</div>
			</div>
		</div>
	</div>
</div>

<?php }  