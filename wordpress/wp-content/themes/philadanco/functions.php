<?php 

// Theme will only work for WordPress 4.9.6 or later.
if (version_compare($GLOBALS['wp_version'], '4.9.6', '<')) {
    die('This theme only works in WordPress 4.9.6 or later. ');
}

function load_theme_assets() {
    wp_enqueue_style('style', get_template_directory_uri() . '/dist/css/main.css');
   if (is_front_page()) {

    wp_enqueue_style('home', get_template_directory_uri() . '/dist/css/home.css');

   }

}

add_action('wp_enqueue_scripts', 'load_theme_assets');



add_theme_support('post-thumbnails');

