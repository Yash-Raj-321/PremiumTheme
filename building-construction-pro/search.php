<?php
/**
* The template for displaying search results pages.
*
* @package Ruh Premium
*/

get_header(); ?>
<header class="page-main-header" <?php  if (!empty($image)) : ?> style="background: url('<?php echo esc_url($image); ?>'); background-repeat: no-repeat; background-size:cover; position: relative;"<?php endif ?> >
    <div class="overlay1"></div>
    <div class="container">
          
         <h1 class="ht-main-title "><?php printf( esc_html__( 'Search Results for: %s', 'total' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
    </div>        
    <div class="hederpipe"></div>
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
					<?php if ( have_posts() ) : ?>
						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php
							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'search' );
							?>
						<?php endwhile; ?>
						<?php 
						the_posts_pagination( 
							array(
								'prev_text' => __( 'Prev', 'total' ),
								'next_text' => __( 'Next', 'total' ),
							)
						); 
						?>
					<?php else : ?>
					<?php get_template_part( 'template-parts/content', 'none' ); ?>
					<?php endif; ?>
				</div><!-- #main -->
				<div class="col-lg-4 col-md-4">
					<?php  get_sidebar(); ?>
				</div>
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
		<div class="clearfix"></div>
	</div>
</main><!-- #primary -->
<?php get_footer();
