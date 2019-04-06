<?php

function ffl_add_footer($content){

    global $ffl_options;

    $footer_output = '<hr>';
    $footer_output .= '<div class="footer_content">';
    $footer_output .= '<i class="fab fa-facebook-square"></i> Find me on <a style="color:'. $ffl_options['link_color'] .'" href="' . $ffl_options['facebook_url'] . '" target="_blank">Facebook</a><br>';
    $footer_output .= '<i class="fab fa-instagram"></i> Find me on <a style="color:'. $ffl_options['link_color'] .'" href="' . $ffl_options['instagram_url'] . '" target="_blank">Instagram</a>';
    $footer_output .= '</div>';

    if($ffl_options['show_in_feed']){
        if(is_single() || is_home() && $ffl_options['enable']){
            return $content . $footer_output;
        }
    } else {
        if(is_single() && $ffl_options['enable']){
            return $content . $footer_output;
        }
    }



    return $content;
    
}

add_filter('the_content', 'ffl_add_footer');