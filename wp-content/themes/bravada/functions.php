<?php
/**
 * Functions file - Calls all other required files
 *
 * PLEASE DO NOT EDIT THEME FILES DIRECTLY
 * unless you are prepared to lose all changes on the next update
 *
 * @package Bravada
 */

// theme identification and options management - do NOT edit unless you know what you are doing
define ( "_CRYOUT_THEME_NAME", "bravada" );
define ( "_CRYOUT_THEME_VERSION", "1.1.1" );

// prefixes for theme options and functions
define ( '_CRYOUT_THEME_SLUG', 'bravada' );
define ( '_CRYOUT_THEME_PREFIX', 'theme' );

require_once( get_template_directory() . "/cryout/framework.php" );		// Framework
require_once( get_template_directory() . "/admin/defaults.php" );		// Options Defaults
require_once( get_template_directory() . "/admin/main.php" );			// Admin side

// Frontend side
require_once( get_template_directory() . "/includes/setup.php" );       	// Setup and init theme
require_once( get_template_directory() . "/includes/styles.php" );      	// Register and enqeue css styles and scripts
require_once( get_template_directory() . "/includes/loop.php" );        	// Loop functions
require_once( get_template_directory() . "/includes/comments.php" );    	// Comment functions
require_once( get_template_directory() . "/includes/core.php" );        	// Core functions
require_once( get_template_directory() . "/includes/hooks.php" );       	// Hooks
require_once( get_template_directory() . "/includes/meta.php" );        	// Custom Post Metas
require_once( get_template_directory() . "/includes/landing-page.php" );	// Landing Page outputs
if ( class_exists( 'WooCommerce' ) ) {
	require_once( get_template_directory() . "/includes/woocommerce.php" );	// WooCommerce overrides
}

// FIN

function enqueue_custom_script()
{
    // Enqueue jQuery
    wp_enqueue_script('jquery');

    // Enqueue custom script
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/js/testing_script.js', array('jquery'), '1.0', true);
    wp_localize_script('custom-script', 'ajax_param', array(
        'ajax_url' => admin_url('admin-ajax.php'),
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_custom_script');

add_filter( 'forminator_form_submit_response', 'wpmudev_registration_change_messsage', 20, 2 );
add_filter( 'forminator_form_ajax_submit_response', 'wpmudev_registration_change_messsage', 20, 2 );
function wpmudev_registration_change_messsage( $response, $form_id ){
	// if( $form_id != 6 ){ //Please change the form ID here
	// 	return $response;
	// }

	if( $response[ 'behav' ] == 'behaviour-thankyou' ) {
		$response['message'] = wp_kses_post( $_POST['success_message'] );
	}
	else
	{
		$response['message'] = wp_kses_post( $_POST['error_message'] );
	}

	return $response;
}