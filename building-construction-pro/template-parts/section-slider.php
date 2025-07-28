<?php
/**
 *
 * @package Slider Premium
 */
?>
<?php $showContent = get_theme_mod('slider_section_show_content', 'on'); ?>
<div class="slider_section" id="slider">
    <div class="owl-carousel "> 
    
    <?php
    $args = array( 'post_type' => 'slider', 'orderby'   => 'id', 'order' => 'DESC',);
    if(!empty($pageId)){
        $args['page_id'] = absint($pageId);

    }
    $text = '';
    $query = new WP_Query($args);
    if($query->have_posts()){
        while($query->have_posts()) : $query->the_post(); 
            

            if( get_theme_mod('slider_areaOpacity',true) ) {
                $slider_areaOpacity = 'opacity:'.esc_attr(get_theme_mod('slider_areaOpacity')).';';
            }

             $slider1btntext = get_post_meta($post->ID, 'slider1btntext', false);
                $test_slider1btntext = !empty($slider1btntext[0]) ? $slider1btntext[0] : '';

           $slider2btntext = get_post_meta($post->ID, 'slider2btntext', false);
                $test_slider2btntext = !empty($slider2btntext[0]) ? $slider2btntext[0] : '';


            ?>

            <div class="item"> 
                <div class="slider_gradiant"></div> 
             <?php 
                if(has_post_thumbnail()){
                $total_slider_image = wp_get_attachment_image_src(get_post_thumbnail_id(),'full');  
                echo '<img class="slide-mainimg" alt="'. esc_html(get_the_title()) .'" src="'.esc_url($total_slider_image[0]).'">';
            }?>


            <?php if($showContent == 'on'){?>
            <div class="slider_content">
                <div class="container">
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <div class="title animated zoomIn" ><?php echo (get_the_title()); ?></div>
                        <div class="sub-title animated bounceInLeft"><?php echo (get_the_content()); ?></div>
                        <div class="sliderbtn">
                            <?php
                                $button_text = get_post_meta( get_the_ID(), '_slider_button_text', true );
                                $button_url = get_post_meta( get_the_ID(), '_slider_button_url', true );

                                if ( $button_text && $button_url ) {
                                    echo '<a class="slider-button" href="' . esc_url($button_url) . '">' . esc_html($button_text) . '</a>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
                <?php }?>
        </div>

        <?php
            endwhile;
        }else{ 
            for($i=0;$i<6;$i++){?>
        <div class="item"> 
                <div class="slider_gradiant"></div> 
            <?php echo '<img class="slide-mainimg" alt="Slider" src="'. esc_html(get_template_directory_uri()) .'/images/slider-banner.jpeg">';?>

            <?php if($showContent == 'on'){?>
                <div class="slider_content">
                    <div class="container">
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <div class="title animated zoomIn">Construction <br><span>Presentation</span></div>
                            <div class="sub-title animated bounceInLeft">There are many variations of passages of Lorem Ipsum available, but the majority have `suffered alteration in some form</div>
                            <div class="sliderbtn">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
        </div>
            <?php }
        }?>
    </div>
</div>
<script>
    $(document).ready(function() {
      $('.slider_section .owl-carousel').owlCarousel({
        refreshClass: 'owl-refresh',
        autoplayTimeout:6000,
        loop: true,
        margin: 30,
        autoHeight: true,
        autoWidth: false,
        autoplay: false,
        dots: false,
        nav: false,
        // animateOut: 'zoomIn',
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: true,
            margin: 10
          },
          600: {
            items:1,
            nav: true,
            margin: 10
          },
          1000: {
            items:1,
            nav: true,
            loop: true,
            margin: 0
          }
        }
      })
    })
</script>