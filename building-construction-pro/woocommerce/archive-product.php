<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ruh Premium
 */

get_header(); ?>
<div class="clearfix"></div>

<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( wc_get_page_id( 'shop' ) ), 'full' );?>
<header class="page-main-header" <?php  if (!empty($thumb)) : ?>
                 style="background: url('<?php echo $thumb['0']; ?>'); background-repeat: no-repeat; background-size:cover; position: relative;"<?php endif ?> >
    <div class="overlay1"></div>
    <div class="container">
        <h1 class="page-title ht-main-title "><?php woocommerce_page_title(); ?></h1>
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
	
<div class="single-productpage">
	<main id="innerpage-box">
		<?php
			//if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
			//get_header('shop'); ?>
			<div id="page" class="container" >
				<div class="inner_contentbox" >
				<article id="content" class="article">
					
					<div class="row mr-0">
					<div class="col-lg-9 ">	
											
							<?php if ( have_posts() ) : ?>						
								<?php do_action( 'woocommerce_before_shop_loop' ); ?>
								<?php woocommerce_product_loop_start(); ?>
								<?php woocommerce_product_subcategories(); ?>
								<?php while ( have_posts() ) : the_post(); ?>
									<?php wc_get_template_part( 'content', 'product' ); ?>
								<?php endwhile; // end of the loop. ?>
								<?php woocommerce_product_loop_end(); ?>
								<?php do_action( 'woocommerce_after_shop_loop' ); ?>
								<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>
								<?php //woocommerce_get_template( 'loop/no-products-found.php' ); ?>
							<?php endif; ?>				
					</div>
					<div class="col-lg-3 product-page">
						<?php if( get_theme_mod('cd_button_display','show' ) == 'show') :
					  		?>
					  		<div class='button'><?php get_sidebar( 'shop'); ?></div>
					  	<?php endif ?>
					</div>
					<div class="clearfix"></div>
				</div>
				</article>
				<?php /*do_action('woocommerce_sidebar');*/ ?>
				<?php //get_sidebar(); ?>	
				<div class="clearfix"></div>
			</div>
				<div class="clearfix"></div>
			</div>	
	</main><!-- #main -->
</div>
<div class="clearfix"></div>
<?php get_footer(); ?>
