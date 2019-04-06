<?php

function ffl_add_footer($content){

    global $ffl_options;
    ob_start(); ?>

    <hr>
    <div class="footer_content">
        <ul class="footer-social-links">
            <li class="footer-social-link">
                <a style="color:<?php echo $ffl_options['link_color'] ?>" href="<?php echo $ffl_options['facebook_url']; ?>" target="_blank"><i class="fab fa-facebook-square"></i></a>
            </li>  
            <li>
                <a style="color:<?php echo $ffl_options['link_color'] ?>" href="<?php echo $ffl_options['instagram_url']; ?>" target="_blank"><i class="fab fab fa-instagram"></i></a>
            </li>     
        </ul>
    </div>

    <?php 

    if($ffl_options['show_in_feed']){
        if(is_single() || is_home() && $ffl_options['enable']){
            return $content . ob_get_clean();
        }
    } else {
        if(is_single() && $ffl_options['enable']){
            return $content . ob_get_clean();
        }
    }



    return $content;
    
}

add_filter('the_content', 'ffl_add_footer');