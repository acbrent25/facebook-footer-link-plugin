<?php 

// Add Scripts
function ffl_add_scripts(){
    wp_enqueue_style('ffl-main-style', plugins_url() . '/facebook-footer-link-plugin/css/style.css');
    wp_enqueue_style('ffl-fawesome-style', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css');
    wp_enqueue_script('ffl-main-script', plugins_url() . '/facebook-footer-link-plugin/js/main.js');
};

add_action('wp_enqueue_scripts', 'ffl_add_scripts');