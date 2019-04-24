<?php 

// Add Scripts
function ffl_add_scripts($hook){

    wp_enqueue_style('ffl-main-style', plugins_url() . '/facebook-footer-link-plugin/css/style.css');
    wp_enqueue_style('ffl-fawesome-style', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css');
    wp_enqueue_script('ffl-main-script', plugins_url() . '/facebook-footer-link-plugin/js/main.js', array('jquery'));
};

add_action('wp_enqueue_scripts', 'ffl_add_scripts');

add_action( 'admin_enqueue_scripts', 'ffl_enqueue_color_picker' );
function ffl_enqueue_color_picker( $hook_suffix ) {
    // first check that $hook_suffix is appropriate for your admin page
    wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_script( 'ffl-color-picker', plugins_url('/facebook-footer-link-plugin/js/color-picker.js', __FILE__ ), array( 'wp-color-picker' ), false, true );
}