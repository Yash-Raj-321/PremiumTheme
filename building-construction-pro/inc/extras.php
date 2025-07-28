<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * * @package Ruh Premium
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function ruh_lite_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'ruh_lite_body_classes' );



add_action( 'admin_menu', 'ruh_register_backend' );
function ruh_register_backend() {
	add_theme_page( __('Ruh Premium', 'Ruh Premium'), __('Building Construction', 'Ruh Premium'), 'edit_theme_options', 'about-Ruh Premium', 'ruh_backend');
}

function ruh_backend(){ ?>
<div class="theme-info-wrapper">
	<div class="theme-info-inner">
		<div class="theme-info-left">
			<div class="theme-info-left-inner">
				<h2>Plugin or WordPress issues?</h2>
				<p>
					If you are experiencing issues with plugins, please contact the plugin author. If you are experiencing issues with WordPress functionality then please visit the <a href="https://wordpress.org/support/" target="_blank">WordPress Support Forum</a>.
				</p>
				<h2>Theme issues?</h2>
				<p>
					If you are having theme related problems then please contact us through our <a href="https://www.bestwptemplates.com/contact-us/" target="_blank">contact form</a>, which can be found at <a href="https://www.bestwptemplates.com/contact-us/" target="_blank">https://www.bestwptemplates.com/contact-us/</a>
				</p>	

				<h2>Need more help?</h2>
				<ul>
					<li><a href="https://www.bestwptemplates.com/demo/building-construction-pro/" target="_blank">Building Construction Pro</a></li>
					<li><a href="https://www.bestwptemplates.com/contact-us/" target="_blank">Contact Ruh themes</a></li>
					<li><a href="https://wordpress.org/support/" target="_blank">WordPress Support Forum</a></li>
				</ul>
			</div>
		</div>
		<!-- documentation -->
		<div class="theme-info-right">
			<a href="https://www.bestwptemplates.com/docs/building-construction-pro/" target="_blank" style="display:block;"> 
				<img src="<?php echo get_bloginfo('template_url')?>/images/ruh-premium.png">
			</a>
		</div>
	</div>
</div>
<?php }

