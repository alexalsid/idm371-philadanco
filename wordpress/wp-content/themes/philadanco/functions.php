<?php 



function wpdocs_theme_name_scripts() {

    wp_enqueue_style( 'style', get_stylesheet_uri());
    wp_enqueue_style( 'main', get_template_directory_uri() . '/dist/css/main.css');

};

add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts');

//add_theme_support('post-thumbnails');
    



?>