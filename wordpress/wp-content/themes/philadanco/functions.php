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

    wp_enqueue_style('about-philadanco', get_template_directory_uri() . '/dist/css/about.css');

   } else if (is_page('Meet-Philadanco')) {
       wp_enqueue_style('mtt', get_template_directory_uri() . '/dist/css/meet-philadanco.css');
       wp_enqueue_script('main', get_template_directory_uri() . '/dist/js/team.js');


   } else if (is_page('Philadelpha-School-of-Dance-Arts')) {
       wp_enqueue_style('psda', get_template_directory_uri() . '/dist/css/psda.css');


   }
}

add_action('wp_enqueue_scripts', 'load_theme_assets');



add_theme_support('post-thumbnails');


function register_menus()
{
    register_nav_menus([
        'main'   => __('Main Navigation'),
        'footer' => __('Footer Navigation'),
        'logo' => __('Home')
    ]);
}

add_action('init', 'register_menus');

function ed_charitable_move_user_fields_in_donation_form( $fields ) {
	if ( ! array_key_exists( 'details_fields', $fields ) ) {
		$fields['details_fields']['priority'] = 80;
	} else {
		$fields['donation_fields']['priority'] = 80;
	}
    
    return $fields;
}
add_filter( 'charitable_donation_form_fields', 'ed_charitable_move_user_fields_in_donation_form' );

function ed_charitable_donation_form_set_custom_amount_field_text( $label ) {
	return 'Donate to Philadanco';
}
add_filter( 'charitable_donation_amount_form_custom_amount_text', 'ed_charitable_donation_form_set_custom_amount_field_text' );


/**
 * Change the section headers in the donation form.
 */
function ed_charitable_change_donation_form_section_headers( $fields ) {
	// "Your Donation"
	$fields['donation_fields']['legend'] = 'Amount';
	
	// "Details"
	$fields['details_fields']['legend'] = 'Donate to Philadanco';
	// "Payment"
	$fields['payment_fields']['legend'] = 'Payment Information';
	
	// Finally, return the modified fields array.
	return $fields;
}
add_filter( 'charitable_donation_form_fields', 'ed_charitable_change_donation_form_section_headers', 20 );


// don't have this locally but this should remove the donor count and amount raised
function ed_unhook_default_template_functions() {

remove_action( 'charitable_campaign_summary', 'charitable_template_campaign_percentage_raised', 4 );
remove_action( 'charitable_campaign_summary', 'charitable_template_campaign_donation_summary', 6 );
remove_action( 'charitable_campaign_summary', 'charitable_template_campaign_donor_count', 8 );
}

add_action( 'after_setup_theme', 'ed_unhook_default_template_functions', 11 );
