<?php 
/**
 * The template for displaying archive pages.
 *
 * Used for displaying archive-type pages. These views can be further customized by
 * creating a separate template for each one.
 *
 * - author.php (Author archive)
 * - tag.php (Tag archive)
 * - category.php (Category archive)
 * - date.php (Date archive)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>
<?php get_header(); ?>


<?php $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));?>

<header class="page-main-header" <?php  if (!empty($image)) : ?> style="background: url('<?php echo esc_url($image); ?>'); background-repeat: no-repeat; background-size:cover; position: relative;"<?php endif ?> >
    <div class="overlay1"></div>
    <div class="container">
        <!-- </?php the_title( '<h1 class="ht-main-title wow zoomIn">', '</h1>' ); ?> -->
         <?php the_archive_title( '<h1 class="ht-main-title">', '</h1>' ); ?>
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
				<div id="blog-box" class="col-lg-8 col-md-8 innerpage-whitebox">
					<div class="innerblogpost">
						<?php if ( have_posts() ) :
							$ruh_lite_full_posts = get_theme_mod('ruh_lite_full_posts');
							while ( have_posts() ) : the_post();
								ruh_lite_archive_post();
							endwhile;
							ruh_lite_post_navigation();
						endif; ?>
					</div>	
				</div> 
				<div class="col-lg-4 col-md-4 ">
					<div id="secondary" class="widget-area">
						<?php dynamic_sidebar('luzuk-blog-sidebar'); ?>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
		<div class="row mr-0">
			<div class="col-md-12">
				<div class="pagingation">
			    	<?php lzGetPagination($query);?>
				</div>
			</div>
		</div>
	</div>
</main>

<script>
      jQuery.noConflict();
      $(function(){
      function innerblogpostHeight(){
        var ht = 0;
        $('.inner-blogpost-info').each(function(i){
          var tHt = $(this).height();
          if(ht<tHt){
            ht=tHt;
          }
        });
        $('.inner-blogpost-info').height(ht+'px');
      }
      innerblogpostHeight();
    });
    $( window ).resize(function(){
      innerblogpostHeight();
    });
</script>

<?php get_footer(); ?>
<!--<div id="page" class="home-page">
	<div id="content" class="article">
		<h1 class="postsby">
			<span><//?php //the_archive_title(); ?></span>
		</h1>	
		<//?php ///if ( have_posts() ) :
			//$ruh_lite_full_posts = get_theme_mod('ruh_lite_full_posts');
			//while ( have_posts() ) : the_post();
				//ruh_lite_archive_post();
			//endwhile;
			//ruh_lite_post_navigation();
		//endif; ?>
	</div>
	<//?php //get_sidebar(); ?>
</div>
<//?php //get_footer(); ?>