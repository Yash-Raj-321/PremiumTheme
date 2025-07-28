<?php
       
//faq
           function faqShortcode($isHome = 0) {
            global $query;

            $args = array('post_type' => 'our-faq');

            if (!empty($pageId)) {
                $args['page_id'] = absint($pageId);
            } else {
                $args['paged'] = max(1, get_query_var('paged'));
            }

            if(!empty($isHome) && $isHome == 1){
                $cols = get_theme_mod('faq_section_npp_count', 5);
                $cols++;
                $args['posts_per_page'] = $cols;
            }else{
                $args['posts_per_page'] = (!empty($args['posts_per_page'])) ? $args['posts_per_page'] : -1;
         // $cols = 5;
            }
            $faqPageId = get_theme_mod('faq_section_page_link');
            $query = new WP_Query($args);

            ob_start();?>
        <div class=" col-md-6 col-sm-12">
            <div class=" faqimgbx">
                <?php       
                    $the_tptitle = get_theme_mod('the_tptitle', 'FAQ');
                ?>
                <?php if($the_tptitle){ ?> 
                <div class="faq_tp">
                    <div class="faq-heading"><?php echo ($the_tptitle);  ?></div>
                </div>
                <?php }?>

                <?php 
                    $faq_image = get_theme_mod('faq_image');
                    if(!empty($faq_image)){
                        echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($faq_image).'" class="img-responsive secondry-bg-img" />';
                    }else{
                        echo '<img src="'.get_template_directory_uri().'/images/faqpg.png" class="img-responsive" />';
                    }

                ?>
            </div>
        </div>
        <div class=" col-md-6 col-sm-12 ">   

            <?php
    // print_r($query);
            echo '<div class="faq row">';
            if ($query->have_posts()){
                while ($query->have_posts()) : $query->the_post();
                    $post = get_post();
            ?>

        <!-- <div class="row"> -->
            <!-- <div class=" faq-content col-md-6"> -->
            <div class=" faq-content">
                <button class="accordion"> <h3 class="faq-title"><?php the_title(); ?></h3></button>
                <div class="panel">
                    <div class="faq-description"> 
                        <p><?php
                           if(!empty($isHome) && $isHome==1){
                            if (has_excerpt()) {
                                echo get_the_excerpt();
                            } else {
                                    //echo ruh_excerpt(get_the_content(),300);
                               echo get_the_content();
                           }
                                    // if(!empty($faqPageId)){
                                    //     echo '<a href="'.get_permalink($faqPageId).'">Read More..</a>';
                                    // }else{
                                    //     echo '<a href="'.get_permalink($faqPageId).'">Read More..</a>';
                                    // }
                           }else{
                            echo get_the_content();
                            }?>  
                        </p>
                    </div>
                </div>
            </div>       
        <!-- </div> -->
    <?php
endwhile;
}else{
    for($i=0; $i<$cols; $i++){
        ?>
        <!-- <div class="row"> -->
            <div class="col-md-12 faq-content">
                <h6 class="faq-title">Lorem Ipsum is simply dummy text of the printing and typesetting industry?</h6>
                <div class="faq-description">
                    <p><?php
                    if(!empty($isHome) && $isHome==1){
                        ?>
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing  typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        <br>
                        <?php
                                // if(!empty($faqPageId)){
                                //     echo '<a href="'.get_permalink($faqPageId).'">Read More..</a>';
                                // }else{
                                //     echo '<a href="'.get_permalink($faqPageId).'">Read More..</a>';
                                // }
                    }else{
                        ?>
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing  typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.

                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing  typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        <?php
                    }?>
                </p>
            </div>  
        </div>
    <!-- </div> -->
    <?php   
}
}
echo '</div>';

?> 
    <div class="clearfix"></div>
 
<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function(){
            this.classList.toggle("active");
            this.nextElementSibling.classList.toggle("show");
        }
    }
</script>
<?php
$text = ob_get_contents();
ob_clean();
ob_end_flush();
wp_reset_postdata();
    // echo $text;
return $text;
}


//team
function teamShortCode($pageId = null, $isCustomizer = false, $i = null) { 

    ob_start();

    $args = array('post_type' => 'our-team');
    if (!empty($pageId)) {
        $args['page_id'] = absint($pageId);
    }
    $args['posts_per_page'] = -1;
    $colCls = '';
    // if($isCustomizer == true){
    $cols = get_theme_mod('team_area_npp_count', 1);
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

    // } 
 $text = '';
 $query = new WP_Query($args);
 if ($query->have_posts()):
    $postN = 0;

    while ($query->have_posts()) : $query->the_post();
        $team_area_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'total-team-thumb');
        if ($isCustomizer === true) {
            $team_area_designation = get_theme_mod('team_area_designation' . $i);
        } else {
            $team_area_designation = '';
        }

        $post = get_post();

    //designation
        $designation = get_post_meta($post->ID, 'designation', false);
        $team_area_designation = !empty($designation[0]) ? $designation[0] : '';

        ?>
        <!--  <div class="<//?php echo $colCls;?> single-team"> -->
        <div class="<?php echo $colCls;?> single-team">
            <div class="our-team ">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 teamimg">
                        <div class="single-team-img">
                            <?php
                                if (has_post_thumbnail()) {
                                    $image_url = $team_area_image[0];
                                } else {
                                    $image_url = get_template_directory_uri() . '/images/team-thumb.png';
                                }
                            ?>                  
                            <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 team-text">
                        <h4 class="inner-area-title wow fadeInLeft" data-wow-duration="1s">
                            <?php the_title(); ?>
                        </h4>
                        <div class="team-designation wow fadeInLeft" data-wow-duration="2s">
                            <?php echo ($team_area_designation); ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        
    <!-- < inner page >  -->
            <div class="inner-team">
                <div class="inner-teambx" >
                    
                    <div class="teamimg" >
                        <div class="single-team-img">
                            <?php
                                if (has_post_thumbnail()) {
                                    $image_url = $team_area_image[0];
                                } else {
                                    $image_url = get_template_directory_uri() . '/images/team-thumb.png';
                                }
                            ?>                  
                            <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>" />
                            
                            
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="textbx ">
                            <div class="textbxinn ">
                                <h2 class="inner-area-title"><?php the_title(); ?> </h2>
                                <div class="team-designation ">
                                    <?php echo ($team_area_designation); ?>
                                </div> 
                            </div>
                    </div>
                <div class="clearfix"></div>
                </div>
            </div>
    <!-- < inner page End >  -->
    <script type="text/javascript">
            var title = 0;
        jQuery("#innerpage-box .inner-team").each(function(){
          if ($(this).height() > title) { title = $(this).height(); }
        });
        jQuery("#innerpage-box .inner-team").height(title);


        // on Resize change height

        jQuery(window).resize(function(){
          jQuery("#innerpage-box .inner-team").height("");
          var title = 0;
          jQuery("#innerpage-box .inner-team").each(function(){
            if ($(this).height() > title) { title = $(this).height(); }
          });
          jQuery("#innerpage-box .inner-team").height(title);
        });
    </script>    
</div>

            <?php
        endwhile;
        $text = ob_get_contents();
        ob_clean();
    endif;
    wp_reset_postdata();
    return $text;
}
/**
 * Use for the show the testimonials at home page and in testimonial page with shortcode
 * @param int $pageId default is null the id of a post
 * @param boolean $isCustomizer default is false if set to true it mean the output is set for the home page
 * @param int $i default null
 * @param boolean $showStaticVals default is false
 * @return string
 * @author Ruh Themes <support@ruh.com>
 * */
function testimonialShortCode($pageId = null, $isCustomizer = false, $i = null) {

    ob_start();

    $args = array('post_type' => 'our-testimonial');
    if (!empty($pageId)) {
        $args['page_id'] = absint($pageId);
    }
    $colCls = '';
    // if($isCustomizer == true){
    $cols = get_theme_mod('test_npp_count', 5);
    $cols++;
    switch($cols){
        
            }
           $icons = array(1=>'heart', 2=>'star', 3=>'flash', 4=>'bell',5=>'heart', 6=>'star', 7=>'flash', 8=>'bell');     
    // }
    $text = '';
    $query = new WP_Query($args);
    if ($query->have_posts()):
        $postN = 0;

        while ($query->have_posts()) : $query->the_post();
            $ruh_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'total-team-thumb');
        $post = get_post();

            if (($postN % 3) == 0 && $isCustomizer == false) {
                ?>
                <!-- <div class="clearfix"></div> -->
            <!-- </div> -->
            <!-- <div class="row"> -->
                <?php
            }
            ++$postN;
            ?>
        <div class="item innertest-item ">
            <div class="ts-area-single ">
                <div class="tsarea-inn tsareainn">
                    <div class="ts-area-c">     
                        <p><?php
                            if (has_excerpt()) {
                                echo get_the_excerpt();
                            } else {
                                echo get_the_content();
                            }
                            ?>       
                        </p>    
                    </div>
                    
                    <div class="ts-area-content">
                        <div class="row">
                            <div class="col-lg-9 col-md-9 ">
                                <div class=" ts-area-bx">
                                    <h3 class="ts-area-title "><?php the_title(); ?></h3>
                                    <div class="text-designation">
                                        <?php
                                            $name2 = get_post_meta($post->ID, 'testimonial_Sub_Title', false);
                                            echo (!empty($name2[0])) ? $name2[0] : '';
                                        ?> 
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 pd-0">
                                <div class="ts-area-thumb">
                                    <div class="testiimginn">
                                        <img src="<?php echo (!empty($ruh_image[0])) ? $ruh_image[0] : get_template_directory_uri() . '/images/team-thumb.png' ?>" class="img-responsive" alt="<?php the_title(); ?>" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
    
            <!-- innerpage-->
            
            <div class="ts-area-single-inn ">
                <div class=" tsareainn">
                    <!-- <div class="tsareabrd"></div> -->
                    <div class="row mr-0">
                        <!-- <div class=" mts-bx"> -->
                            <div class="row mr-0">
                                <div class=" col-md-9 col-sm-9 pd-0">
                                    <div class=" ts-area-bx">
                                        <h3 class="ts-area-title "><?php the_title(); ?></h3>
                                        <div class="text-designation">
                                            <?php
                                                $name2 = get_post_meta($post->ID, 'testimonial_Sub_Title', false);
                                                echo (!empty($name2[0])) ? $name2[0] : '';
                                             ?> 
                                             
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class=" col-md-3 col-sm-3 pd-0">
                                    <div class="ts-area-thumb">
                                        <img src="<?php echo (!empty($ruh_image[0])) ? $ruh_image[0] : get_template_directory_uri() . '/images/team-thumb.png' ?>" class="img-responsive" alt="<?php the_title(); ?>" />
                                    </div>
                                </div>
                            </div>
                             <div class="ts-area-c">         
                                    <p>
                                        <?php
                                        if (has_excerpt()) {
                                            echo get_the_excerpt();
                                        } else {
                                            echo get_the_content();
                                        }
                                        ?> 
                                    </p>  
                                </div> 
                            <div class="clearfix"></div>
                        <!-- </div> -->
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!--innerpage end-->
            <script type="text/javascript">
                    var title = 0;
                jQuery("#innerpage-box .tsareainn").each(function(){
                  if ($(this).height() > title) { title = $(this).height(); }
                });
                jQuery("#innerpage-box .tsareainn").height(title);


                // on Resize change height

                jQuery(window).resize(function(){
                  jQuery("#innerpage-box .tsareainn").height("");
                  var title = 0;
                  jQuery("#innerpage-box .tsareainn").each(function(){
                    if ($(this).height() > title) { title = $(this).height(); }
                  });
                  jQuery("#innerpage-box .tsareainn").height(title);
                });
            </script>
        </div>

        <?php
    endwhile;
    $text = ob_get_contents();
    ob_clean();
endif;
wp_reset_postdata();
return $text;
}


/*services*/
function serviceShortCode($pageId = null, $isCustomizer = false, $i = null) {

    ob_start();

    $args = array('post_type' => 'our-services');
    if (!empty($pageId)) {
        $args['page_id'] = absint($pageId);
    }
    $args['posts_per_page'] = -1;
    $colCls = '';
    // if($isCustomizer == true){
    $cols = get_theme_mod('service_npp_count',2);  
    $services_page_icon1 = get_theme_mod('services_page_icon1'.$i);
    ++$cols;
    switch ($cols) {
        case 1:
        $colCls = 'col-lg-6 col-md-6 col-sm-12';
        break;
        case 2: 
        $colCls = 'col-lg-6 col-md-6 col-sm-12';
        break;
        case 3:
        case 5:
        case 6:
        case 9:
        case 11:
        case 13:
        case 15:
        $colCls = 'col-lg-6 col-md-6 col-sm-12';
        break;
        default: 
        $colCls = 'col-lg-6 col-md-6 col-sm-12';
        break;
        }
    // }
        $text = '';
        $query = new WP_Query($args);
        if ($query->have_posts()):
            $postN = 0;

        while ($query->have_posts()) : $query->the_post();
            $ruh_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'total-service-thumb');
            $post = get_post();

        ?>

        <div class="<?php echo $colCls; ?> single-service-bx"> 
            <div class="single-service">
                <div class="sertxbx">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-2">
                          <h5 class="service-number"> <?php echo sprintf("%02d", $i); ?> </h5>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10">
                            <a href="<?php the_permalink(); ?>">
                                <h4 class="post-title inner-area-title wow fadeInDown"><?php the_title(); ?></h4>
                            
                                <p class="section-area-text">
                                    <?php

                                        if(has_excerpt()){
                                        echo get_the_excerpt();
                                        }else{
                                        echo ruh_excerpt( get_the_content() , 80 );
                                        } 
                                    ?>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div> 
            </div> 
        </div>
        <!-- inner-page -->
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 inn-single-service-bx ">
            <div class="singleinner-service">
                <?php 
                    $sertxtlimit = get_theme_mod('sertxtlimit', '80');
                ?> 
                <div class="service_inbox serviceinbox">
                    <a href="<?php the_permalink(); ?>">
                        <div class="service_inimg">
                           <?php
                            if (has_post_thumbnail()) {
                                $image_url = $ruh_image[0];
                            } else {
                                $image_url = get_template_directory_uri() . '/images/services.jpg';
                            }
                            ?>                                                        
                            <img class="img-responsive" src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>" />
                            <div class="serinnolay"></div>     
                        </div>
                    </a>
                    <div class="serbx">
                        <a href="<?php the_permalink(); ?>">
                            <h2 class="title"> <?php the_title(); ?> </h2>
                        </a>
                        <p class="description">
                            <?php 
                               if (has_excerpt()) {
                                          echo get_the_excerpt();
                                      } else {
                                          echo ruh_excerpt(get_the_content(),$sertxtlimit );  
                                   }
                            ?> 
                           
                        </p>
 
                        <?php
                            $ser_button2 = get_theme_mod('ser_button2', 'Explore more');
                        ?>
                        <?php if($ser_button2) { ?>
                            <div class="serbtn">  
                                <a href="<?php echo esc_url(get_permalink()); ?>">
                                    <span><?php echo $ser_button2 ?></span>
                                </a>
                            </div> 
                        <?php }?>
                                
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- inner-page -->
    <script type="text/javascript">
        var title = 0;
        jQuery("#innerpage-box .service_inbox").each(function(){
          if ($(this).height() > title) { title = $(this).height(); }
        });
        jQuery("#innerpage-box .service_inbox").height(title);


        // on Resize change height

        jQuery(window).resize(function(){
          jQuery("#innerpage-box .service_inbox").height("");
          var title = 0;
          jQuery("#innerpage-box .service_inbox").each(function(){
            if ($(this).height() > title) { title = $(this).height(); }
          });
          jQuery("#innerpage-box .service_inbox").height(title);
        });
    </script>

            <?php
        endwhile;
        $text = ob_get_contents();
        ob_clean();
    endif;
    wp_reset_postdata();
    return $text;
}



/**
 * Use for the show the pricing at home page and in testimonial page with shortcode
 * @param int $pageId default is null the id of a post
 * @param boolean $isCustomizer default is false if set to true it mean the output is set for the home page
 * @param int $i default null
 * @param boolean $showStaticVals default is false
 * @return void
 * @author Ruh Themes <support@ruh.com>
 * */
    function pricingShortcode() {
      ob_start();
      $cols = get_theme_mod('pricing_npp_count', 2);
      $cols++;
      switch ($cols) {
        case 1:
            $colCls = 'col-lg-12 col-md-12 col-sm-12 col-xs-12';
            break;
            case 2: 
            $colCls = 'col-lg-6 col-md-6 col-sm-6 col-xs-12';
            break;
            case 3:
            case 5:
            case 6:
            case 9:
            case 11:
            case 13:
            case 15:
            $colCls = 'col-lg-4 col-md-6 col-sm-12 col-xs-12';
            break;
            default: 
            $colCls = 'col-lg-4 col-md-6 col-sm-12 col-xs-12';
            break;
    }

    $showStatic = true;
    for ($i = 1; $i <= $cols; $i++) {
        $PlanPageId = get_theme_mod('pricing_plan_page_' . $i);
        //$pricing_page_icon = get_theme_mod('pricing_plan_page_icon_'.$i);
        //$plannum  = get_theme_mod('plannum_' . $i, '01 ');

        $planTitle  = get_theme_mod('pricing_plan_name_' . $i, 'SMART PLAN');
        $planunit  = get_theme_mod('pricing_plan_unit_' . $i,'$');
        $planPrice  = get_theme_mod('pricing_plan_price_' . $i,'122');
        $planmonth  = get_theme_mod('pricing_plan_month_' . $i,'/ month');
        $planContent= get_theme_mod('pricing_plan_content_' . $i, '
            <li>Fully Professional Cleaner </li>
            <li>Living Room Cleaning</li>
            <li>Bed Room Cleaning</li>
            <li>Bathroom Cleaning</li>
            <li>Windows & Door Cleaning</li>
            
            ');

        $link = get_theme_mod('pricing_plan_url'.$i);
        $url = get_theme_mod('pricing_plan_url_'.$i, '#');

        if ($planTitle  || $planunit || $planPrice || $planmonth || $planContent || $url ) {
          $showStatic = false;
          ?>
    <div class="<?php echo $colCls; ?> price-mbx">
        <div class="single-pricing ">
             <div class="pcirinn">
                <svg xmlns="http://www.w3.org/2000/svg" width="5.514in" height="3.361in">
                    <path fill-rule="evenodd" 
                     d="M-0.000,242.000 C-0.000,183.333 -0.000,124.667 -0.000,66.000 C2.585,47.873 11.346,31.201 25.000,19.000 C36.723,8.524 51.375,1.953 67.000,0.000 C155.000,0.000 243.000,0.000 331.000,0.000 C347.146,1.748 362.269,8.772 374.000,20.000 C385.962,31.448 393.704,46.604 396.000,63.000 C396.333,111.000 396.667,159.000 397.000,207.000 C365.214,204.722 335.968,197.763 309.000,186.000 C266.126,167.299 245.290,142.617 205.000,141.000 C181.329,140.050 145.950,149.663 105.000,183.000 C84.828,199.422 74.092,214.026 51.000,226.000 C34.846,234.376 17.722,239.553 -0.000,242.000 Z"/>
                </svg>
            </div>
            <div class="single-pricebox" style="">
           
                <div class="pr-s-area">
                    <h4 class="plan-title inner-area-title" ><?php echo ($planTitle); ?></h4>
                    <div class="currency-price">
                        <!-- <sup> --><?php echo ($planunit); ?><!-- </sup> -->
                        <?php echo ($planPrice); ?>
                        <small><?php echo ($planmonth); ?></small>
                    </div>
                    <div class="clearfix"></div>
                </div>        
            <ul class="pricing-list "> <?php echo ($planContent); ?></ul>
             </div>
              <?php
                $pricing_page_id = get_theme_mod('pricing_page');
                $pricing_page_button_title = get_theme_mod('pricing_page_button_title_'.$i, 'Book Now');
            ?>
            <?php if($pricing_page_button_title){ ?>
                <div class="pc-btn " data-wow-duration="4s">    
                    <a class="btn btn-lg" href="<?php echo esc_url(!empty($url)?$url:'#');?>" >
                       <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 512 512"><path d="M464,48c-67.61.29-117.87,9.6-154.24,25.69C282.62,85.69,272,94.77,272,125.53V448c41.57-37.5,78.46-48,224-48V48Z"/><path d="M48,48c67.61.29,117.87,9.6,154.24,25.69,27.14,12,37.76,21.08,37.76,51.84V448c-41.57-37.5-78.46-48-224-48V48Z"/></svg><span><?php echo ($pricing_page_button_title);  ?></span>
                    </a>
                </div>
            <?php } ?>

        </div>
        <div class="clearfix"></div> 
    </div>
    <?php
}
}
if ($showStatic === true) {
  for ($i = 1; $i <= $cols; $i++) {
    $link = get_theme_mod('pricing_plan_url'.$i);
    $url = get_theme_mod('pricing_plan_url_'.$i, '#');

    ?>
        <!-- <div class="</?php //echo $colCls; ?> plan">
            <div class="pricing-plans">
                <div class="price-box">
                    <div class="price-bx">
                        <div class="plan-cost">$30</div>
                    </div>
                    <div class="clearfix"></div>
                    <h4 class="plan-title">STANDARD</h4>
                    <div class="clearfix"></div>
                    <div class="pri-table-link">
                        <a class="btn" href="#">DETAILS</a>
                    </div>
                </div>
            </div>
        </div>  -->
<?php
}

}

$pricingHtml = ob_get_contents();
        // echo $pricingHtml;
ob_flush();
ob_clean();
}
// **************************
// ======projects =========
// **************************

function projectShortCode($pageId = null, $isCustomizer = false, $i = null) {

    ob_start();

    $args = array('post_type' => 'our-projects');
    if (!empty($pageId)) {
        $args['page_id'] = absint($pageId);
    }
    $args['posts_per_page'] = -1;
    $colCls = '';
    // if($isCustomizer == true){
    $cols = get_theme_mod('project_npp_count',3);  
    $projects_page_icon1 = get_theme_mod('projects_page_icon1'.$i);

    ++$cols;
    switch ($cols) {
        case 1:
        $colCls = 'col-lg-12 col-md-12 col-sm-12';
        break;
        case 2: 
        $colCls = 'col-lg-6 col-md-6 col-sm-6';
        break;
        case 3:
        case 5:
        case 6:
        case 9:
        case 11:
        case 13:
        case 15:
        $colCls = 'col-lg-4 col-md-6 col-sm-6';
        break;
        default: 
        $colCls = 'col-lg-4 col-md-6 col-sm-6';
        break;
        }
    // }
        $text = '';
        $query = new WP_Query($args);
        if ($query->have_posts()):
            $postN = 0;

            while ($query->have_posts()) : $query->the_post();
                $ruh_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'total-project-thumb');
                  if ($isCustomizer === true) {
                        $projtsubttle = get_theme_mod('projtsubttle' . $i);
                    } else {
                        $projtsubttle = '';
                    }
                $post = get_post();
                $projtsubttle = get_post_meta($post->ID, 'projtsubttle', false);
                ?>
        <div class="<?php echo $colCls;?> single-project-bx">
            <div class="single-project ">
                <div project-match-height="groupName" class="project-icon">
                   <?php
                        if (has_post_thumbnail()) {
                            $image_url = $ruh_image[0];
                        } else {
                            $image_url = get_template_directory_uri() . '/images/projects.jpg';
                        }
                    ?>
                     <?php
                        $project_link = get_theme_mod('project_link', '');
                    ?>
                    <a href="<?php the_permalink(); ?>">
                        <img class="img-responsive" src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>" />
                    </a>
                </div>
                
                <div class="project-title-box">
                    <a href="<?php the_permalink(); ?>"> 
                        <h2><?php the_title(); ?></h2>
                    </a>
                    <p> <?php
                        if(has_excerpt()){
                          echo get_the_excerpt();
                         }else{
                          echo ruh_excerpt( get_the_content() , 150 );
                         } 
                        ?>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>  
            <script type="text/javascript">
                    var title = 0;
                jQuery("#innerpage-box .single-project").each(function(){
                  if ($(this).height() > title) { title = $(this).height(); }
                });
                jQuery("#innerpage-box .single-project").height(title);


                // on Resize change height

                jQuery(window).resize(function(){
                  jQuery("#innerpage-box .single-project").height("");
                  var title = 0;
                  jQuery("#innerpage-box .single-project").each(function(){
                    if ($(this).height() > title) { title = $(this).height(); }
                  });
                  jQuery("#innerpage-box .single-project").height(title);
                });
            </script>
        </div>


        <?php
            endwhile;
            $text = ob_get_contents();
            ob_clean();
        endif;
        wp_reset_postdata();
        return $text;
    }


// ==========================
/*********gallery************/ 
// ==========================

function galleryShortCode($pageId = null, $isCustomizer = false, $i = null) {

    ob_start();

    $args = array('post_type' => 'our-gallery');
    if (!empty($pageId)) {
        $args['page_id'] = absint($pageId);
    }
    $args['posts_per_page'] = -1;
    $colCls = '';
    // if($isCustomizer == true){
    $cols = get_theme_mod('ruh_gallery_npp_count', 7);  
    ++$cols;
    switch ($cols) {
                    case 1:
                    $colCls = 'col-md-12 col-sm-12 col-xs-12'; 
                    break;
                    case 2:
                    $colCls = 'col-md-6 col-sm-6 col-xs-12';
                    break;
                    case 3:
                    case 5:
                    case 6:
                    case 9:
                    $colCls = 'col-md-4 col-sm-6 col-xs-12';
                    break;
                    case 4:
                    case 7:
                    case 8:
                    case 10:
                    case 11:
                    case 12:
                    $colCls = 'col-md-4 col-sm-6 col-xs-12';
                    break;
                    default:
                    $colCls = 'col-md-4 col-sm-6 col-xs-12';
                    break;
    }
    // }
    $text = '';
    $query = new WP_Query($args);
    if ($query->have_posts()):
        $postN = 0;

        while ($query->have_posts()) : $query->the_post();
            $ruh_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium_large');
            $post = get_post();
            ?> 

      <div class="<?php echo $colCls; ?> pd-1">  
        <div class="homegalry"> 
            <div class="lz-gallery-images ">
                <figure class="spa-gall">
                    <?php
                        if (has_post_thumbnail()) {
                            $image_url = $ruh_image[0];
                        } else {
                            $image_url = get_template_directory_uri() . '/images/about1.jpg';
                        }
                    ?>
                    <a data-fancybox="gallery"  href="<?php echo esc_url($image_url); ?>" title="<?php the_title(); ?>">  
                        <img class="secondry-bg img-responsive" src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>" />
                        <div class="over-text">
                            <h3 class="inner-area-title "><?php the_title(); ?></h3>
                        </div>
                        <div class="g-oly"></div>
                        <div class="gall-icn">
                            <i class="fa fa-plus"></i>
                        </div>
                    </a> 
                    
                </figure>
                
            </div>
        </div> 
        
        <script type="text/javascript">
                var title = 0;
            jQuery("#innerpage-box .lz-gallery-images").each(function(){
              if ($(this).height() > title) { title = $(this).height(); }
            });
            jQuery("#innerpage-box .lz-gallery-images").height(title);


            // on Resize change height

            jQuery(window).resize(function(){
              jQuery("#innerpage-box .lz-gallery-images").height("");
              var title = 0;
              jQuery("#innerpage-box .lz-gallery-images").each(function(){
                if ($(this).height() > title) { title = $(this).height(); }
              });
              jQuery("#innerpage-box .lz-gallery-images").height(title);
            });
        </script>
    </div>
                <?php
            endwhile;
            $text = ob_get_contents();
            ob_clean();
        endif;
        wp_reset_postdata();
        return $text;
    }


function gallerinnerShortCode($pageId = null, $isCustomizer = false, $i = null) {
    ob_start();

    $args = array('post_type' => 'our-gallery');
    if (!empty($pageId)) {
        $args['page_id'] = absint($pageId);
    }
    $args['posts_per_page'] = -1;
    $colCls = '';
    $cols = get_theme_mod('gallerinner_npp_count',5);  
  

    ++$cols;
    switch ($cols) {
        case 1:
        $colCls = 'col-md-12 col-sm-12 col-xs-12';
        break;
        case 2: 
        $colCls = 'col-md-6 col-sm-6 col-xs-12';
        break;
        case 3:
        case 5:
        case 6:
        case 9:
        case 11:
        case 13:
        case 15:
        $colCls = 'col-md-4 col-sm-6 col-xs-12';
        break;
        default: 
        $colCls = 'col-md-3 col-sm-6 col-xs-12';
        break;
    }
        $text = '';
        $query = new WP_Query($args);
        if ($query->have_posts()):
            $postN = 0;

            while ($query->have_posts()) : $query->the_post();
                $ruh_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'total-service-thumb');
                $post = get_post();

                ?>
        
    <div class="<?php echo $colCls; ?> ">  
        <div class=" innergalry "> 
            <div class="lz-gallery-images ">
                <figure class="spa-gall">
                    <?php
                        if (has_post_thumbnail()) {
                            $image_url = $ruh_image[0];
                        } else {
                            $image_url = get_template_directory_uri() . '/images/about1.jpg';
                        }
                    ?>
                    <a data-fancybox="gallery"  href="<?php echo esc_url($image_url); ?>" title="<?php the_title(); ?>">  
                        <img class="secondry-bg img-responsive" src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>" />
                    
                        <div class="overlay"></div>    
                        <div class="gall-icn">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </div>
                        <div class="over-text">
                            <h2 class="inner-area-title "><?php the_title(); ?></h2>
                        </div>
                    </a>
                </figure>
                
                    
            </div>
        </div> 
        <!--inner page  --> 
        <script type="text/javascript">
                var title = 0;
            jQuery("#innerpage-box .lz-gallery-images").each(function(){
              if ($(this).height() > title) { title = $(this).height(); }
            });
            jQuery("#innerpage-box .lz-gallery-images").height(title);


            // on Resize change height

            jQuery(window).resize(function(){
              jQuery("#innerpage-box .lz-gallery-images").height("");
              var title = 0;
              jQuery("#innerpage-box .lz-gallery-images").each(function(){
                if ($(this).height() > title) { title = $(this).height(); }
              });
              jQuery("#innerpage-box .lz-gallery-images").height(title);
            });
        </script>
 </div>

   
            <?php
        endwhile;
        $text = ob_get_contents();
        ob_clean();
    endif;
    wp_reset_postdata();
    return $text;
}

//adding a shortcode 

add_shortcode('TEAMLIST', 'teamShortCode');
add_shortcode('TESTIMONIALS', 'testimonialShortCode'); 
add_shortcode('GALLERY', 'gallerinnerShortCode');
add_shortcode('SERVICES', 'serviceShortCode');
add_shortcode('FAQS', 'faqShortcode');
add_shortcode('PROJECT', 'projectShortCode');
//add_shortcode('PRICE', 'pricingShortcode');