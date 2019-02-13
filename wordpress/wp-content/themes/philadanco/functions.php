<?php 

function wpdocs_theme_name_scripts() {

    wp_enqueue_style( 'style', get_stylesheet_uri());

    wp_enqueue_style( 'header', get_template_directory_uri() . '/dist/css/main.css');
    wp_enqueue_script('main', get_template_directory_uri() . '/dist/js/main.js');


if (is_front_page()) {

    wp_enqueue_style( 'post-listing', get_template_directory_uri() . '/dist/css/home.css');

    } if (is_page('About')) {

       wp_enqueue_style( 'about', get_template_directory_uri() . '/dist/css/about.css');

    } elseif (is_page('Events')) { 

        wp_enqueue_style( 'events', get_template_directory_uri() . '/dist/css/events.css');

    } elseif (is_page('D2-D3')) {

        wp_enqueue_style( 'd2-d3', get_template_directory_uri() . '/dist/css/d2.css');

    } elseif (is_page('Donate')) {

        wp_enqueue_style( 'donate', get_template_directory_uri() . '/dist/css/donate.css');

    }

    elseif (is_page('Education')) {

        wp_enqueue_style( 'donate', get_template_directory_uri() . '/dist/css/education.css');

    }

    elseif (is_page('Meet-Philadanco')) {

        wp_enqueue_style( 'mtt', get_template_directory_uri() . '/dist/css/mtt.css');

    }
    
    
};

add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

add_theme_support('post-thumbnails');

?>