<?php
/**
 *  functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * * @package Ruh Premium
 */
$query='';
if ( ! function_exists( 'ruh_lite_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    
    function ruh_lite_setup() {
    	define( 'MTS_THEME_VERSION', '2.0.6' );
        /*
    	 * Make theme available for translation.
    	 * Translations can be filed in the /languages/ directory.
    	 * If you're building a theme based on publishable, use a find and replace
    	 * to change 'Ruh Premium' to the name of your theme in all the template files.
    	 */
        load_theme_textdomain( 'Ruh Premium', get_template_directory() . '/languages' );

    	// Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

    	/*
    	 * Let WordPress manage the document title.
    	 * By adding theme support, we declare that this theme does not use a
    	 * hard-coded <title> tag in the document head, and expect WordPress to
    	 * provide it for us.
    	 */
    	add_theme_support( 'title-tag' );

    	/*
    	 * Enable support for Post Thumbnails on posts and pages.
    	 *
    	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
    	 */
    	add_theme_support( 'post-thumbnails' );
    	set_post_thumbnail_size( 150, 150, true );
    	add_image_size( 'Ruh Premium-related', 200, 125, true ); //related

    	// This theme uses wp_nav_menu() in one location.
    	register_nav_menus( array(
    		'primary' => esc_html__( 'My Custom Menu', 'Ruh Premium' ),
    	) );

    	/*
    	 * Switch default core markup for search form, comment form, and comments
    	 * to output valid HTML5.
    	 */
    	add_theme_support( 'html5', array(
    		'comment-form',
    		'comment-list',
    		'gallery',
    		'caption',
    	) );

        if ( ruh_lite_is_wc_active() ) {
            add_theme_support( 'woocommerce' );
        }
        
    	// Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'ruh_lite_custom_background_args', array(
          'default-color' => '#000',
          'default-image' => '',
      ) ) );
    }
endif;
add_action( 'after_setup_theme', 'ruh_lite_setup' );

function ruh_lite_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ruh_lite_content_width', 678 );
}
add_action( 'after_setup_theme', 'ruh_lite_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ruh_lite_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'Ruh Premium' ),
		'id'            => 'sidebar',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s  wow bounceInUp">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	/*// Header Ad sidebar
    register_sidebar(array(
        'name' => __('Header Ad', 'Ruh Premium'),
        'description'   => __( '728x90 Ad Area', 'Ruh Premium' ),
        'id' => 'widget-header',
        'before_widget' => '<div id="%1$s" class="widget-header">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));*/

    // single post side bar
    register_sidebar( array(
        'name'          => esc_html__( 'Single Post Sidebar', 'Ruh Premium' ),
        'id'            => 'ruh-single-post-sidebar',
        'description'   => __( 'Add widgets here to appear in your sidebar of service page.', 'Ruh Premium' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s wow bounceInUp">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    
    // Service side bar
    register_sidebar( array(
        'name'          => esc_html__( 'Service Sidebar', 'Ruh Premium' ),
        'id'            => 'ruh-service-sidebar',
        'description'   => __( 'Add widgets here to appear in your sidebar of service page.', 'Ruh Premium' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s wow bounceInUp">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    // Project side bar
    register_sidebar( array(
        'name'          => esc_html__( 'Project Sidebar', 'Ruh Premium' ),
        'id'            => 'ruh-project-sidebar',
        'description'   => __( 'Add widgets here to appear in your sidebar of project page.', 'Ruh Premium' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s wow bounceInUp">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    // Shop side bar
    register_sidebar( array(
        'name'          => esc_html__( 'Shop Sidebar', 'Ruh Premium' ),
        'id'            => 'ruh-shop-sidebar',
        'description'   => __( 'Add widgets here to appear in your sidebar of shop page.', 'Ruh Premium' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s wow bounceInUp">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
    // Blog side bar
    register_sidebar( array(
        'name'          => esc_html__( 'Blog Sidebar', 'Ruh Premium' ),
        'id'            => 'ruh-blog-sidebar',
        'description'   => __( 'Add widgets here to appear in your sidebar of blog page.', 'Ruh Premium' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s  wow bounceInUp">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
    // FOOTER ONE WIDGET SIDEBAR
    register_sidebar( array(
        'name'          => esc_html__( 'Footer One', 'Ruh Premium' ),
        'id'            => 'ruh-footer1',
        'description'   => __( 'Add widgets here to appear in your Footer.', 'Ruh Premium' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
    // FOOTER TWO WIDGET SIDEBAR
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Two', 'Ruh Premium' ),
        'id'            => 'ruh-footer2',
        'description'   => __( 'Add widgets here to appear in your Footer.', 'Ruh Premium' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
    // FOOTER THREE WIDGET SIDEBAR
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Three', 'Ruh Premium' ),
        'id'            => 'ruh-footer3',
        'description'   => __( 'Add widgets here to appear in your Footer.', 'Ruh Premium' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
    // FOOTER FOUR WIDGET SIDEBAR
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Four', 'Ruh Premium' ),
        'id'            => 'ruh-footer4',
        'description'   => __( 'Add widgets here to appear in your Footer.', 'Ruh Premium' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    // if ( ruh_lite_is_wc_active() ) {
    //     // Register WooCommerce Shop and Single Product Sidebar
    //     register_sidebar( array(
    //         'name' => __('Shop Page Sidebar', 'Ruh Premium' ),
    //         'description'   => __( 'Appears on Shop main page and product archive pages.', 'Ruh Premium' ),
    //         'id' => 'shop-sidebar',
    //         'before_widget' => '<div id="%1$s" class="widget %2$s">',
    //         'after_widget' => '</div>',
    //         'before_title' => '<h4 class="widget-title">',
    //         'after_title' => '</h4>',
    //     ) );
    //     register_sidebar( array(
    //         'name' => __('Single Product Sidebar', 'Ruh Premium' ),
    //         'description'   => __( 'Appears on single product pages.', 'Ruh Premium' ),
    //         'id' => 'product-sidebar',
    //         'before_widget' => '<div id="%1$s" class="widget %2$s">',
    //         'after_widget' => '</div>',
    //         'before_title' => '<h4 class="widget-title">',
    //         'after_title' => '</h4>',
    //     ) );
    // }
}
add_action( 'widgets_init', 'ruh_lite_widgets_init' );

function ruh_lite_custom_sidebar() {
    // Default sidebar.
    $sidebar = 'sidebar';

    // Woocommerce.
    if ( ruh_lite_is_wc_active() ) {
        if ( is_shop() || is_product_category() ) {
            $sidebar = 'shop-sidebar';
        }
        if ( is_product() ) {
            $sidebar = 'product-sidebar';
        }
    }

    return $sidebar;
}

/**
 * Enqueue scripts and styles.
 */
function ruh_lite_scripts() {
    wp_enqueue_style( 'Ruh Premium-style', get_stylesheet_uri() );

    $handle = 'Ruh Premium-style';

    // WooCommerce
    if ( ruh_lite_is_wc_active() ) {
        if ( is_woocommerce() || is_cart() || is_checkout() ) {
            wp_enqueue_style( 'woocommerce', get_template_directory_uri() . '/css/woocommerce2.css' );
            $handle = 'woocommerce';
        }
    }
    
    wp_enqueue_script( 'fancybox.umd', get_template_directory_uri() . '/js/fancybox.umd.js', array('jquery'), '20150903', true );

    wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/css/fancybox.css', array(), '1.3.3' );

    //wp_enqueue_script( 'jquery-bxslider-min', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array('jquery'), '4.1.2', true );

    wp_enqueue_script( 'jquery-bxslider', get_template_directory_uri() . '/js/jquery.bxslider.js', array('jquery'), '4.1.2', true );
    //wp_enqueue_script( 'smoothscroll', get_template_directory_uri() . '/js/SmoothScroll.js', array(), '20160809', false );
    wp_enqueue_script( 'jquery-nav', get_template_directory_uri() . '/js/jquery.nav.js', array('jquery'), '20160903', true );
    wp_enqueue_script( 'isotope-pkgd', get_template_directory_uri() . '/js/isotope.pkgd.js', array('jquery', 'imagesloaded' ), '20150903', true );
    wp_enqueue_script( 'nivo-lightbox', get_template_directory_uri() . '/js/nivo-lightbox.js', array('jquery'), '20150903', true );
    wp_enqueue_script( 'superfish', get_template_directory_uri() . '/js/superfish.js', array('jquery'), '20150903', true );
    wp_enqueue_script( 'jquery-stellar', get_template_directory_uri() . '/js/jquery.stellar.js', array('imagesloaded'), '20150903', false ); 
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.js', array('jquery'), '20150903', true );
    wp_enqueue_script( 'odometer', get_template_directory_uri() . '/js/odometer.js', array('jquery'), '20150903', true );
    wp_enqueue_script( 'waypoint', get_template_directory_uri() . '/js/waypoint.js', array('jquery'), '20150903', true );
    wp_enqueue_script( 'total-custom', get_template_directory_uri() . '/js/total-custom.js', array('jquery'), '20150903', true );
    wp_enqueue_script('slider', get_template_directory_uri().'/js/slider.js', array(), '1.1', true);
    wp_localize_script( 'total-custom', 'total_localize', array('template_path' => get_template_directory_uri() ));
    //wp_enqueue_script('jquery-3-3-1-min', get_template_directory_uri().'/js/jquery-3.3.1.min.js', array(), '1.1', true);
    //  wp_enqueue_script( 'jquery-3-1-1-slim-min', get_template_directory_uri() . '/js/jquery-3.1.1.slim.min.js', array('jquery'), '20150903', true );
    wp_enqueue_style( 'bxslider', get_template_directory_uri() . '/css/jquery.bxslider.css', array(), '4.1.2' );
    wp_enqueue_style( 'style-min', get_template_directory_uri() . '/css/style.min.css', array(), '1.3.3' );
    wp_enqueue_style( 'swiper-min', get_template_directory_uri() . '/css/swiper.min.css', array(), '1.3.3' );

    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/js/owl.carousel.js', array('jquery'), '1.3.3', true );
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/css/owl.carousel.css', array(), '1.3.3' );
    wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/css/owl.theme.css', array(), '1.3.3' );
    wp_enqueue_style( 'owl-carousel-min', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '1.3.3' );
    wp_enqueue_style( 'owl-theme-default-min', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), '1.3.3' );
    // wp_enqueue_style( 'docs-theme-min', get_template_directory_uri() . '/css/docss.theme.min.css', array(), '1.3.3' );

    //wp_enqueue_script('owl-carousel-min', get_template_directory_uri().'/js/owl.carousel.min.js', array(), '1.1', true);
    wp_enqueue_script( 'jquery-colorbox', get_template_directory_uri() . '/js/jquery.colorbox.js', array(), '20160809', false );
    // wp_enqueue_style( 'total-fonts', total_fonts_url(), array(), null );
    // wp_enqueue_script('script', get_template_directory_uri().'/js/script.js', array(), '1.1', true);
    wp_enqueue_style( 'colorbox-popup', get_template_directory_uri() . '/css/colorbox.css', array(), '4.1.2' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', array(), '1.0' );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '4.4.0' );


    wp_enqueue_style( 'nivo-lightbox', get_template_directory_uri() . '/css/nivo-lightbox.css', array(), '1.3.3' );
    wp_enqueue_style( 'superfish', get_template_directory_uri() . '/css/superfish.css', array(), '1.3.3' );


// extra for header
  
   wp_enqueue_style( 'templete', get_template_directory_uri() . '/css-new/templete.css', array(), '1.3.3' );

// extra for header

wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'), '20150903', true );
wp_enqueue_script( 'navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '20150903', true );
 wp_enqueue_style( 'style-min', get_template_directory_uri() . '/css/style.min.css', array(), '1.3.3' );

    //google fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Archivo+Narrow|Arimo|Berkshire+Swash|Bitter|Comfortaa|Dancing+Script|Dosis|Droid+Serif|Francois+One|Germania+One|Hammersmith+One|Indie+Flower|Lobster|Muli|Nosifer|PT+Sans|PT+Sans+Caption|PT+Sans+Narrow|Pacifico|Questrial|Roboto+Mono|Roboto+Slab|Source+Serif+Pro|Titillium+Web|Work+Sans|Rubik:700i' );
    // wp_add_inline_style( 'total-style', total_dymanic_styles() );

    wp_enqueue_script( 'Ruh Premium-customscripts', get_template_directory_uri() . '/js/customscripts.js',array('jquery'),'',true);

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
  }

  $ruh_lite_color_scheme = get_theme_mod('ruh_template_color', '#fe5722');
  $ruh_lite_color_scheme2 = get_theme_mod('ruh_template_color2', '#44afdd');
  //$header = get_theme_mod('header_textcolor', '#000');
  $ruh_lite_layout = get_theme_mod('ruh_lite_layout', 'cslayout');

  $custom_css = total_dymanic_styles();
  wp_add_inline_style( $handle, $custom_css );
}
add_action( 'wp_enqueue_scripts', 'ruh_lite_scripts' );
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/style.php';
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/lz-customizer.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/lz-customizer-functions.php';
/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
/**
 * Load Font Awesome list file.
 */
require get_template_directory() . '/inc/font-awesome-list.php';
/**
 * Load function file.
 */
require get_template_directory() . '/inc/functions.php';
/**
 * Add the Social buttons Widget.
 */
include_once( "functions/widget-social.php" );
require_once('functions/meta-data.php'); // ADD THE META DETA FOR THE PHP
/**
 * Copyrights
 */
if ( ! function_exists( 'ruh_lite_copyrights_credit' ) ) {
    function ruh_lite_copyrights_credit() { 
        global $mts_options
        ?>
        <!--start copyrights-->
        <div class="copyrights">
            <div class="container">
                <div id="copyright-note">
                    <span>Copyright <?php echo '&copy; '.date_i18n(__('Y','ruh')); ?> <?php bloginfo( 'name' ); ?>. All Rights Reserved
                    </span>
            <!--<div class="top">
            
                <a href="#top" class="toplink"><//?php //_e('Back to Top','Ruh Premium'); ?> &uarr;</a>
            </div>-->
                </div>
            </div>
        </div>
<!--end copyrights-->
<?php }
}

/**
 * Custom Comments template
 */
if ( ! function_exists( 'ruh_lite_comments' ) ) {
	function ruh_lite_comment($comment, $args, $depth) { ?>
		<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
			<div id="comment-<?php comment_ID(); ?>" style="position:relative;" itemscope itemtype="http://schema.org/UserComments">
				<div class="comment-author vcard">
					<?php echo get_avatar( $comment->comment_author_email, 70 ); ?>
					<div class="comment-metadata">
                        <?php printf('<span class="fn" itemprop="creator" itemscope itemtype="http://schema.org/Person">%s</span>', get_comment_author_link()) ?>
                        <span class="comment-meta">
                          <?php edit_comment_link(__('(Edit)', 'Ruh Premium'),'  ','') ?>
                      </span>
                  </div>
              </div>
              <?php if ($comment->comment_approved == '0') : ?>
               <em><?php _e('Your comment is awaiting moderation.', 'Ruh Premium') ?></em>
               <br />
           <?php endif; ?>
           <div class="commentmetadata" itemprop="commentText">
               <?php comment_text() ?>
               <time><?php comment_date(get_option( 'date_format' )); ?></time>
               <span class="reply">
                <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
            </span>
        </div>
    </div>
</li>
<?php }
}

/*
 * Excerpt
 */
function ruh_lite_excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt);
} else {
    $excerpt = implode(" ",$excerpt);
}
$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
return $excerpt;
}

/**
 * Shorthand function to check for more tag in post.
 *
 * @return bool|int
 */
function ruh_lite_post_has_moretag() {
    return strpos( get_the_content(), '<!--more-->' );
}

if ( ! function_exists( 'ruh_lite_readmore' ) ) {
    /**
     * Display a "read more" link.
     */
    function ruh_lite_readmore() {
        ?>
      <!--   <div class="readMore">
            <a href="<?php //echo esc_url( get_the_permalink() ); ?>" title="<?php //the_title_attribute(); ?>" target="_blank">
                <?php //_e( 'Continue Reading', 'Ruh Premium' ); ?>
            </a>
        </div> -->

            <?php if( get_theme_mod('blogpage_button_display','show' ) == 'show') :
                      ?>
                <?php
                    $bloginner_page_id = get_theme_mod('bloginner_page'); 
                 $bloginnerbutn_text = get_theme_mod('blogbutninner_text', 'Continue Reading');
                ?>

                <a href="<?php echo esc_url( get_the_permalink() ); ?>" title="<?php the_title_attribute(); ?>" target="_blank">
                    <?php echo $bloginnerbutn_text; ?>
                        
                </a>

                <?php endif ?>
        <?php 
    }
}

/**
 * Breadcrumbs
 */
if (!function_exists('ruh_lite_the_breadcrumb')) {
    function ruh_lite_the_breadcrumb() {
        if ( is_front_page() ) {
            return;
        }
        echo '<span typeof="v:Breadcrumb" class="root"><a rel="v:url" property="v:title" href="';
        echo esc_url( home_url() );
        /* =====breadcrumb text====== */
        $breadcrumbhometxtbutton = get_theme_mod('ruh_breadcrumbhometxt', 'Home'); 
        /* =====breadcrumb text====== */
        echo '">'.(sprintf( __( "$breadcrumbhometxtbutton", 'Ruh Premium' )));
        echo '</a></span><span class="bread-arrow">:</span>';
        if (is_single()) {
            $categories = get_the_category();
            if ( $categories ) {
                $level = 0;
                $hierarchy_arr = array();
                foreach ( $categories as $cat ) {
                    $anc = get_ancestors( $cat->term_id, 'category' );
                    $count_anc = count( $anc );
                    if (  0 < $count_anc && $level < $count_anc ) {
                        $level = $count_anc;
                        $hierarchy_arr = array_reverse( $anc );
                        array_push( $hierarchy_arr, $cat->term_id );
                    }
                }
                if ( empty( $hierarchy_arr ) ) {
                    $category = $categories[0];
                    echo '<span typeof="v:Breadcrumb"><a href="'. esc_url( get_category_link( $category->term_id ) ).'" rel="v:url" property="v:title">'.esc_html( $category->name ).'</a></span><span class="bread-arrow">
                    <i class="fa fa-angle-double-right"></i>
                    </span>';
                } else {
                    foreach ( $hierarchy_arr as $cat_id ) {
                        $category = get_term_by( 'id', $cat_id, 'category' );
                        echo '<span typeof="v:Breadcrumb"><a href="'. esc_url( get_category_link( $category->term_id ) ).'" rel="v:url" property="v:title">'.esc_html( $category->name ).'</a></span><span class="bread-arrow"><i class="fa fa-angle-double-right
                        "></i></span>';
                    }
                }
            }
            echo "<span><span class='treeEnd'>";
            the_title();
            echo "</span></span>";
        } elseif (is_page()) {
            $parent_id  = wp_get_post_parent_id( get_the_ID() );
            if ( $parent_id ) {
                $breadcrumbs = array();
                while ( $parent_id ) {
                    $page = get_page( $parent_id );
                    $breadcrumbs[] = '<span typeof="v:Breadcrumb"><a href="'.esc_url( get_permalink( $page->ID ) ).'" rel="v:url" property="v:title">'.esc_html( get_the_title($page->ID) ). '</a></span><span>
                    <i class="fa fa-angle-double-right"></i></span>';
                    $parent_id  = $page->post_parent;
                }
                $breadcrumbs = array_reverse( $breadcrumbs );
                foreach ( $breadcrumbs as $crumb ) { echo $crumb; }
            }
            echo "<span><span class='treeEnd'>";
            the_title();
            echo "</span></span>";
        } elseif (is_category()) {
            global $wp_query;
            $cat_obj = $wp_query->get_queried_object();
            $this_cat_id = $cat_obj->term_id;
            $hierarchy_arr = get_ancestors( $this_cat_id, 'category' );
            if ( $hierarchy_arr ) {
                $hierarchy_arr = array_reverse( $hierarchy_arr );
                foreach ( $hierarchy_arr as $cat_id ) {
                    $category = get_term_by( 'id', $cat_id, 'category' );
                    echo '<span typeof="v:Breadcrumb"><a href="'.esc_url( get_category_link( $category->term_id ) ).'" rel="v:url" property="v:title">'.esc_html( $category->name ).'</a></span><span><i class="fa fa-angle-double-right
                    "></i></span>';
                }
            }
            echo "<span><span class='treeEnd'>";
            single_cat_title();
            echo "</span></span>";
        } elseif (is_author()) {
            echo "<span><span class='treeEnd'>";
            if(get_query_var('author_name')) :
                $curauth = get_user_by('slug', get_query_var('author_name'));
            else :
                $curauth = get_userdata(get_query_var('author'));
            endif;
            echo esc_html( $curauth->nickname );
            echo "</span></span>";
        } elseif (is_search()) {
            echo "<span><span class='treeEnd'>";
            the_search_query();
            echo "</span></span>";
        } elseif (is_tag()) {
            echo "<span><span class='treeEnd'>";
            single_tag_title();
            echo "</span></span>";
        }
    }
}


/*
 * Google Fonts
 */
function ruh_lite_fonts_url() {
    $fonts_url = '';

    /* Translators: If there are characters in your language that are not
    * supported by Monda, translate this to 'off'. Do not translate
    * into your own language.
    */
    $monda = _x( 'on', 'Monda font: on or off', 'Ruh Premium' );

    if ( 'off' !== $monda ) {
        $font_families = array();

        if ( 'off' !== $monda ) {
            $font_families[] = urldecode('Roboto:400,500,700,900');
        }

        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            //'subset' => urlencode( 'latin,latin-ext' ),
        );

        $fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );
    }

    return $fonts_url;
}

function ruh_lite_scripts_styles() {
    wp_enqueue_style( 'theme-slug-fonts', ruh_lite_fonts_url(), array(), null );

}
add_action( 'wp_enqueue_scripts', 'ruh_lite_scripts_styles' );

/**
 * WP Mega Menu Plugin Support
 */
function ruh_lite_megamenu_parent_element( $selector ) {
    return '.primary-navigation .container';
}
add_filter( 'wpmm_container_selector', 'ruh_lite_megamenu_parent_element' );

/**
 * Determines whether the WooCommerce plugin is active or not.
 * @return bool
 */
function ruh_lite_is_wc_active() {
    if ( is_multisite() ) {
        include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

        return is_plugin_active( 'woocommerce/woocommerce.php' );
    } else {
        return in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) );
    }
}

/**
 * WooCommerce
 */
if ( ruh_lite_is_wc_active() ) {
    if ( !function_exists( 'mts_loop_columns' )) {
        /**
         * Change number or products per row to 3
         *
         * @return int
         */
        function mts_loop_columns() {
            return 3; // 3 products per row
        }
    }
    add_filter( 'loop_shop_columns', 'mts_loop_columns' );

    /**
     * Redefine woocommerce_output_related_products()
     */
    function woocommerce_output_related_products() {
        $args = array(
            'posts_per_page' => 3,
            'columns' => 3,
        );
        woocommerce_related_products($args); // Display 3 products in rows of 1
    }
    
    global $pagenow;
    if ( is_admin() && isset( $_GET['activated'] ) && $pagenow == 'themes.php' ) {
        /**
         * Define WooCommerce image sizes.
         */
        function ruh_lite_woocommerce_image_dimensions() {
            $catalog = array(
                'width'     => '210',   // px
                'height'    => '155',   // px
                'crop'      => 1        // true
            );
            $single = array(
                'width'     => '326',   // px
                'height'    => '444',   // px
                'crop'      => 1        // true
            );
            $thumbnail = array(
                'width'     => '74',    // px
                'height'    => '74',   // px
                'crop'      => 0        // false
            );
            // Image sizes
            update_option( 'shop_catalog_image_size', $catalog );       // Product category thumbs
            update_option( 'shop_single_image_size', $single );         // Single product image
            update_option( 'shop_thumbnail_image_size', $thumbnail );   // Image gallery thumbs
        }
        add_action( 'init', 'ruh_lite_woocommerce_image_dimensions', 1 );
    }


    /**
     * Change the number of product thumbnails to show per row to 4.
     *
     * @return int
     */
    function ruh_lite_woocommerce_thumb_cols() {
     return 4; // .last class applied to every 4th thumbnail
 }
 add_filter( 'woocommerce_product_thumbnails_columns', 'ruh_lite_woocommerce_thumb_cols' );


    /**
     * Ensure cart contents update when products are added to the cart via AJAX.
     *
     * @param $fragments
     *
     * @return mixed
     */
    function ruh_lite_header_add_to_cart_fragment( $fragments ) {
        global $woocommerce;
        ob_start(); ?>
        
        <a class="cart-contents" href="<?php echo esc_url( $woocommerce->cart->get_cart_url() ); ?>" title="<?php _e( 'View your shopping cart', 'Ruh Premium' ); ?>"><?php echo sprintf( _n( '%d item', '%d items', $woocommerce->cart->cart_contents_count, 'Ruh Premium' ), $woocommerce->cart->cart_contents_count );?> - <?php echo $woocommerce->cart->get_cart_total(); ?></a>
        
        <?php $fragments['a.cart-contents'] = ob_get_clean();
        return $fragments;
    }
    add_filter( 'add_to_cart_fragments', 'ruh_lite_header_add_to_cart_fragment' );

    /**
     * Optimize WooCommerce Scripts
     * Updated for WooCommerce 2.0+
     * Remove WooCommerce Generator tag, styles, and scripts from non WooCommerce pages.
     */
    function ruh_lite_manage_woocommerce_styles() {
        //remove generator meta tag
        remove_action( 'wp_head', array( $GLOBALS['woocommerce'], 'generator' ) );

        //first check that woo exists to prevent fatal errors
        if ( function_exists( 'is_woocommerce' ) ) {
            //dequeue scripts and styles
            if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {
                wp_dequeue_style( 'woocommerce-layout' );
                wp_dequeue_style( 'woocommerce-smallscreen' );
                wp_dequeue_style( 'woocommerce-general' );
                wp_dequeue_style( 'wc-bto-styles' ); //Composites Styles
                wp_dequeue_script( 'wc-add-to-cart' );
                wp_dequeue_script( 'wc-cart-fragments' );
                wp_dequeue_script( 'woocommerce' );
                wp_dequeue_script( 'jquery-blockui' );
                wp_dequeue_script( 'jquery-placeholder' );



            }
        }
    }
    add_action( 'wp_enqueue_scripts', 'ruh_lite_manage_woocommerce_styles', 99 );

    // Remove WooCommerce generator tag.
    remove_action('wp_head', 'wc_generator_tag');
}

/**
 * Post Layout for Archives
 */
if ( ! function_exists( 'ruh_lite_archive_post' ) ) {
    /**
     * Display a post of specific layout.
     * 
     * @param string $layout
     */
    function ruh_lite_archive_post( $layout = '' ) { 
        $ruh_lite_full_posts = get_theme_mod('ruh_lite_full_posts', '0'); ?>
    <article class="post excerpt">
                <?php
            if ( is_sticky() && is_home() && ! is_paged() ) {
                printf( '<span class="sticky-post">%s</span>', __( 'Featured', 'Ruh Premium' ) );
            } ?>
        <?php if ( is_single() ) : ?>
        <div class="post-date-publishable"><?php the_time( get_option( 'date_format' ) ); ?></div>
        <?php endif; ?>


<!-- category page -->
            <div class="inner-blog-post col-md-6 col-sm-12 col-xs-12 wow zoomIn row mr-0">
                <div class="inner-blogpost">
                    <?php if ( empty($ruh_lite_full_posts) ) : ?>
                        <?php if ( has_post_thumbnail() ) { ?>
                        <div class="ht-blog-thumbnail">
                            <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('Ruh Premium-featured',array('title' => '')); ?>
                                    <?php if (function_exists('wp_review_show_total')) wp_review_show_total(true, 'latestPost-review-wrapper'); ?>
                            </a>
                        </div>
                    <?php } else { ?>

                    <?php } ?>
                    <div class="inner-blogpost-info">
                        <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a> 
                        <div class="inner-blog-excerpt">
                            <?php 
                                if (has_excerpt()) {
                                      echo get_the_excerpt();
                                  } else {
                                      echo ruh_excerpt(get_the_content(),160);  
                               }
                            ?> 
                            <!-- </?php echo ruh_lite_excerpt(45); ?> -->
                            <?php
                                    $blog_button2 = get_theme_mod('blog_button2', 'Learn More');
                                ?>
                                <?php if($blog_button2) { ?>
                                    <!-- <div class="bloginnbtn">   -->
                                        <a class= "bloginnbtn" href="<?php echo esc_url(get_permalink()); ?>">
                                            
                                            <span><?php echo $blog_button2 ?></span>
                                        </a>
                                        <div class="clearfix"></div>
                                    <!-- </div>  -->
                                <?php }?>
                        </div>
                    <div class="clearfix"></div>
                    </div>
                        <?php if( get_theme_mod('postdate_button_display','show' ) == 'show') :?>
                            <div class="blog-Athr">
                                <div class="row mr-0">
                                    <div class="col-lg-6 ">
                                        <i class="fa fa-calendar" ></i>
                                        <?php echo get_the_date( 'j F,Y' ); ?>
                                    </div>
                                    <div class="col-lg-6 comm pd-0">
                                        <i class="fa fa-commenting"></i>
                                        <?php echo $my_var = get_comments_number(); ?> Comments
                                    </div>
                                </div>                     
                            </div>
                        <?php endif ?>
                        
                    <?php else : ?>
                    <?php if (ruh_lite_post_has_moretag()) : ?>
                    <div class="clearfix"></div>           
                </div>
            </div> 
<!-- END category page -->
            <?php endif; ?>
        <?php endif; ?>
        <div class="clearfix"></div>
    </article>
       
        <?php }
    }


/**
 * Extras
 */
add_action( 'customize_controls_print_styles', 'ruh_customizer_stylesheet' );

function ruh_load_custom_wp_admin_style( $hook ) {
    if ( 'appearance_page_about-ruh_mag' !== $hook ) {
        return;
    }
    wp_enqueue_style( 'ruh_mag-custom-admin-css', get_template_directory_uri() . '/css/themeinfo.css', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'ruh_load_custom_wp_admin_style' );


// Adding Custome Post Type
function createCustomeTypes() {

    // Testimonials Custome type
    register_post_type( 'our-testimonial',
        array(
            'labels' => array(
                'name' => __( 'Testimonials' , 'Ruh Premium'),
                'singular_name' => __( 'Testimonial', 'Ruh Premium' )
            ),
            'public' => true,
            'featured_image'=>true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-format-chat', //  The url to the icon to be used for this menu or the name of the icon from the iconfont
            'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
        )
    );


// team
    register_post_type( 'our-team',
        array(
            'labels' => array(
                'name' => __( 'Teams' , 'ruh'),
                'singular_name' => __( 'Team', 'ruh' )
            ),
            'public' => true,
            'featured_image'=>true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-groups', //  The url to the icon to be used for this menu or the name of the icon from the iconfont
            'supports' => array('title', 'thumbnail', 'author', 'page-attributes'),
        )
    );
// Services
    register_post_type( 'our-services',
        array(
            'labels' => array(
                'name' => __( 'Services' , 'ruh'),
                'singular_name' => __( 'Service', 'ruh' )
            ),
            'public' => true,
            'featured_image'=>true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-update', //  The url to the icon to be used for this menu or the name of the icon from the iconfont
            'supports' => array('title', 'editor', 'thumbnail', 'author', 'page-attributes'),
        )
    );  
    
        // projects 
    register_post_type( 'our-projects',
        array(
            'labels' => array(
                'name' => __( 'Projects' , 'ruh'),
                'singular_name' => __( 'Project', 'ruh' )
            ),
            'public' => true,
            'featured_image'=>true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-layout', //  The url to the icon to be used for this menu or the name of the icon from the iconfont
            'supports' => array('title','editor', 'thumbnail', 'page-attributes'),
        )
    );  
    
    
     // Gallery Custome type
    register_post_type( 'our-gallery',
        array(
            'labels' => array(
                'name' => __( 'Gallery' , 'ruh'),
                'singular_name' => __( 'gallery', 'ruh' )
            ),
            'public' => true,
            'featured_image'=>true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-admin-media', //  The url to the icon to be used for this menu or the name of the icon from the iconfont
            'supports' => array('title', 'thumbnail', 'author', 'page-attributes'),
        )
    ); 
     // FAQ Custome type
    register_post_type( 'our-faq',
        array(
            'labels' => array(
                'name' => __( 'FAQs' , 'ruh'),
                'singular_name' => __( 'FAQ', 'ruh' )
            ),
            'public' => true,
            'featured_image'=>true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-format-status', //  The url to the icon to be used for this menu or the name of the icon from the iconfont
            'supports' => array('title', 'editor', 'page-attributes'),
        )
    );

   // SLIDER Custome type
    register_post_type( 'slider',
        array(
            'labels' => array(
                'name' => __( 'Sliders' , 'ruh-premium'),
                'singular_name' => __( 'Slider', 'ruh-premium' )
            ),
            'public' => true,
            'featured_image'=>true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-images-alt', //  The url to the icon to be used for this menu or the name of the icon from the iconfont
            'supports' => array('title' ,'editor', 'thumbnail', ),
        )
    );
}

add_action( 'init', 'createCustomeTypes' );


// 1. Add Meta Box
function ruh_slider_button_meta_box() {
    add_meta_box(
        'slider_button_meta', // ID
        'Slider Button Options', // Title
        'ruh_slider_button_meta_box_callback', // Callback
        'slider', // Post type
        'normal',
        'default'
    );
}
add_action( 'add_meta_boxes', 'ruh_slider_button_meta_box' );

// 2. Meta Box Content
function ruh_slider_button_meta_box_callback( $post ) {
    // Add nonce for security
    wp_nonce_field( 'ruh_slider_button_nonce_action', 'ruh_slider_button_nonce' );

    // Get saved values
    $button_text = get_post_meta( $post->ID, '_slider_button_text', true );
    $button_url  = get_post_meta( $post->ID, '_slider_button_url', true );

    ?>
    <p>
        <label for="slider_button_text">Button Text:</label><br>
        <input type="text" name="slider_button_text" id="slider_button_text" value="<?php echo esc_attr( $button_text ); ?>" style="width:100%;">
    </p>
    <p>
        <label for="slider_button_url">Button URL:</label><br>
        <input type="text" name="slider_button_url" id="slider_button_url" value="<?php echo esc_url( $button_url ); ?>" style="width:100%;">
    </p>
    <?php
}

// 3. Save Meta Box Data
function ruh_save_slider_button_meta( $post_id ) {
    // Check nonce
    if ( ! isset( $_POST['ruh_slider_button_nonce'] ) || ! wp_verify_nonce( $_POST['ruh_slider_button_nonce'], 'ruh_slider_button_nonce_action' ) ) {
        return;
    }

    // Save Button Text
    if ( isset( $_POST['slider_button_text'] ) ) {
        update_post_meta( $post_id, '_slider_button_text', sanitize_text_field( $_POST['slider_button_text'] ) );
    }

    // Save Button URL
    if ( isset( $_POST['slider_button_url'] ) ) {
        update_post_meta( $post_id, '_slider_button_url', esc_url_raw( $_POST['slider_button_url'] ) );
    }
}
add_action( 'save_post', 'ruh_save_slider_button_meta' );


/**
 * Method to save the custom field for the slider posts 
 * When the post is saved, saves our custom data 
 * @author Ruh Themes <support@ruh.com>
 * @since V 1.1  09th Oct 2017
 **/
function teamDesignationCutomFieldHtml(){
    global $post;
    // get the saved value 
    $designation = get_post_meta($post->ID, 'designation', false);
    $designation = !empty($designation[0])?$designation[0]:'';

    // Use nonce for verification
    wp_nonce_field(plugin_basename(__FILE__), 'Team_social_media_links');
    echo '<table id="socialUrls" width="100%">';
    echo '<tr> 
    <th width="10%"><span class="dashicons dashicons-welcome-learn-more"></span></th>
    <td width="90%"><input type="text" name="designation" width="100%" placeholder="Designation" value="'.$designation.'" /></td>
    </tr>';
    echo '</table>';
}

function addTeamHook(){
    add_meta_box('ruh-team-designation', __('Add Designation', 'ruh'), 'teamDesignationCutomFieldHtml', 'our-team', 'normal', 'high');
}
/**
 * Method to save the custom field for the testimonial posts 
 * When the post is saved, saves our custom data 
 * @param integer $post_id - An id of the post 
 * @author Ruh Themes <support@ruh.com>
 * @since V 1.1  09th Oct 2017
 **/
function saveTeamSocialCutomData($post_id){
    // If it is our form has not been submitted, so we dont want to do anything
    if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return;
    if(empty($_POST['designation']) ){
        // echo 'empty --> '; exit;       
        return;
    }

    $designation = $_POST['designation'];
    update_post_meta($post_id, 'designation', $designation);
}
add_action('add_meta_boxes', 'addTeamHook');
add_action('save_post', 'saveTeamSocialCutomData');
/***** End Add custome fields for team section *****/
/**
 * Method to save the custom field for the slider posts 
 * When the post is saved, saves our custom data 
 * @author Ruh Themes <support@ruh.com>
 * @since V 1.1  09th Oct 2017
 **/
function testimonialCutomFieldHtml(){
    global $post;
    // get the saved value 
    $testimonialSubTitle = get_post_meta($post->ID, 'testimonial_Sub_Title', false);
    $value = !empty($testimonialSubTitle[0])?$testimonialSubTitle[0]:'';
    // Use nonce for verification
    wp_nonce_field(plugin_basename(__FILE__), 'Testimonial_sut_title');
    echo '<div class="rows"> 
        <div class="col-sm-3">Authors Designation</div>
        <div class="col-sm-9"><input type="text" name="testimonialSubTitle" placeholder="Designation" value="'.$value.'" /></div>
    </div>';
}
function addTestimonialHook(){
    add_meta_box('lz-finesss-sub-title', __('Add subtitle for the testimonial', 'ruh-premium'), 'testimonialCutomFieldHtml', 'our-testimonial', 'normal', 'high');
}
/**
 * Method to save the custom field for the testimonial posts 
 * When the post is saved, saves our custom data 
 * @param integer $post_id - An id of the post 
 * @author Ruh Themes <support@ruh.com>
 * @since V 1.1  09th Oct 2017
 **/
function saveTestimonialCutomData($post_id){
    // If it is our form has not been submitted, so we dont want to do anything
    if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return;
    if(empty($_POST['Testimonial_sut_title']))
        return;
    if(!wp_verify_nonce($_POST['Testimonial_sut_title'], plugin_basename(__FILE__)))
        return;
    $testimonial_Sub_Title = $_POST['testimonialSubTitle'];
    update_post_meta($post_id, 'testimonial_Sub_Title', $testimonial_Sub_Title);
}
add_action('add_meta_boxes', 'addTestimonialHook');
add_action('save_post', 'saveTestimonialCutomData');

/**
 * Method to save the custom field for the testimonial posts 
 * When the post is saved, saves our custom data 
 * @param integer $post_id - An id of the post 
 * @author Ruh Themes <support@ruh.com>
 * @since V 1.1  09th Oct 2017
 **/
function getFonts($list = false, $index = -1){
    $fonts = array(
        "'Archivo Narrow', sans-serif",
        "'Arial', sans-serif",
        "'Arimo', sans-serif",
        "'Alex Brush', cursive",
        "'Berkshire Swash', cursive",
        "'Bitter', serif",
        "'Comfortaa', cursive",
        "'Dancing Script', cursive",
        "'Dosis', sans-serif",
        "'Droid Serif', serif",
        "'EB Garamond', serif",
        "'Exo 2', sans-serif",
        "'Francois One', sans-serif",
        "'Germania One', cursive",
        "'Hammersmith One', sans-serif",
        "'Indie Flower', cursive",
        "'Laila', sans-serif",
        "'Lobster', cursive",
        "'Lato', sans-serif",
        "'Mulish', sans-serif",
        "'Muli', sans-serif",
        "'Nosifer', cursive",
        "'Oswald', sans-serif",
        "'PT Sans Caption', sans-serif",
        "'PT Sans Narrow', sans-serif",
        "'PT Sans', sans-serif",
        "'Pacifico', cursive",
        "'Poppins', sans-serif",
        "'Open Sans', sans-serif",
        "'Montserrat', sans-serif",
        "'Pontano Sans', sans-serif",
        "'Questrial', sans-serif",
        "'Raleway', sans-serif",
        "'Roboto Mono', monospace",
        "'Roboto Slab', serif",
        "'Roboto', sans-serif",
        "'Rubik', sans-serif",
        "'Source Serif Pro', serif",
        "'Titillium Web', sans-serif",
        "'Biryani', sans-serif", 
        "'Montserrat Alternates', sans-serif",
        "'Work Sans', sans-serif",
        "'Arvo', serif",
        "'Passion One', cursive",
        "'Schoolbell', cursive",
    
    );
    if($list == true){
        foreach ($fonts as $key => $value) {
            $fonts[$key] = str_replace("'", "", $value);
        }
        asort($fonts);
        return $fonts;
    }
    $len = count($fonts);
    if(is_integer($index) && $index >= 0 && $index < $len){
        return $fonts[$index];
    }else{
        return $fonts;
    }
}

/**
 * show the pagination for the custome or normal post types
 * @param object $customeQuery - An onject of a query post
 * @author Ruh Themes <support@ruh.com>
 * @since V 1.1  09th Nov 2017
 **/
function lzGetPagination($customQuery){
    if(!is_object($customQuery)){return false;}
    $total_pages = $customQuery->max_num_pages;
    $big = 999999999;
    $current_page = max(1, get_query_var('paged'));
    echo paginate_links(array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => $current_page,
        'total' => $total_pages,    
    ));
}


