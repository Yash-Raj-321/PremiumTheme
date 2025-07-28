<?php
/**
 * Template Name: Page with right sidebar
 *
 * @package Ruh Premium
 */
get_header(); 
?>
  <?php $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));?>
  
<header class="page-main-header" <?php  if (!empty($image)) : ?> style="background: url('<?php echo esc_url($image); ?>'); background-repeat: no-repeat; background-size:cover; position: relative;"<?php endif ?> >
    <div class="overlay1"></div>
    <div class="container">
        <?php the_title( '<h1 class="ht-main-title ">', '</h1>' ); ?>
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

<main id="innerpage-box">
	<div class="container">
		<div class="inner_contentbox">
			<div class="row mr-0">
			<div id="content-box" class="col-lg-8 col-md-8 innerpage-whitebox">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', 'page' ); ?>
					<?php
						// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>
				<?php endwhile; // End of the loop. ?>
			</div><!-- #main -->
			<div class="col-lg-4 col-md-4">
				<?php  get_sidebar(); ?>
			</div>
			<div class="clearfix"></div>
			<div class="row mr-0">
				<div class="col-md-12">
					<div class="pagingation">
						<?php lzGetPagination($query);?>
					</div>
				</div>
			</div>
		<div class="clearfix"></div>
	</div>
		</div>
	</div>
</main><!-- #primary -->
<?php get_footer(); ?>
