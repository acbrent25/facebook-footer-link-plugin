<?php
/*
Plugin Name: Facebook Footer Link 
Description: Ads a Facebook profile link to the end of posts
Version: 1.0
Author: Adam Champagne
Auther URI: https://adamchampagne.com/
Text Domain: facebook-footer-link-plugin
*/

 // Exit if Accessed Directly
 if(!defined('ABSPATH')){
     exit;
 }

 // Global Options Variable
 $ffl_options = get_option('ffl_settings');

 // Load Scripts
 require_once(plugin_dir_path(__FILE__) . '/includes/facebook-footer-link-scripts.php');

 // Load Content
 require_once(plugin_dir_path(__FILE__) . '/includes/facebook-footer-link-content.php');

  // Load Settings
  if(is_admin()){
    require_once(plugin_dir_path(__FILE__) . '/includes/facebook-footer-link-settings.php');
  }
