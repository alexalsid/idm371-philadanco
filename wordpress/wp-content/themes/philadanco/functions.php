<?php 

// Theme will only work for WordPress 4.9.6 or later.
if (version_compare($GLOBALS['wp_version'], '4.9.6', '<')) {
    die('This theme only works in WordPress 4.9.6 or later. ');
}

function load_theme_assets() {
    wp_enqueue_style('style', get_template_directory_uri() . '/dist/css/main.css');
     wp_enqueue_script('main', get_template_directory_uri() . '/dist/js/main.js');
   if (is_front_page()) {

    wp_enqueue_style('home', get_template_directory_uri() . '/dist/css/home.css');

   } else if (is_page('education')) {
        wp_enqueue_style('education', get_template_directory_uri() . '/dist/css/education.css');

   } else if (is_page('Donate')) {
       wp_enqueue_style('donate', get_template_directory_uri() . '/dist/css/donate.css');


   } else if (is_page('Events')) {

    wp_enqueue_style('events', get_template_directory_uri() . '/dist/css/events.css');

   } 
   else if (is_page('About')) {

    wp_enqueue_style('events', get_template_directory_uri() . '/dist/css/about.css');

   } 
}

add_action('wp_enqueue_scripts', 'load_theme_assets');



add_theme_support('post-thumbnails');


function register_menus()
{
    register_nav_menus([
        'main'   => __('Main Navigation'),
        'footer' => __('Footer Navigation'),
    ]);
}

add_action('init', 'register_menus');

