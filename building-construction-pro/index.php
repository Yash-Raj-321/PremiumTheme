<?php

get_header();
    // echo 'dfajsdlfjlajsdlfjla';
    $ruh_home_sections = ruh_home_section();
    // print_r($ruh_home_sections);
    foreach ($ruh_home_sections as $ruh_home_section) {
        // echo 'ruh_home_section-> '. $ruh_home_section;
        get_template_part( 'template-parts/section', $ruh_home_section );
    }

get_footer();  

?>