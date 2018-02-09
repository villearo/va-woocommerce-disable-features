<?php
/*
Plugin Name: 	VA WooCommerce Disable Features
Plugin URI:		https://github.com/villearo/va-woocommerce-disable-features
Description: 	Remove: Prices, Add to Cart buttons
Version: 		1.0.0
Author: 		Ville Aro
Author URI: 	https://villearo.fi/
Text Domain: 	va-woocommerce-disable-features
Domain Path:	/languages
License: 		GPLv2 or later
License URI:	http://www.gnu.org/licenses/gpl-2.0.html
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Global variables
 */
$plugin_file = plugin_basename(__FILE__);							// plugin file for reference
define( 'VA_WOOCOMMERCE_DISABLE_FEATURES_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );	// define the absolute plugin path for includes
define( 'VA_WOOCOMMERCE_DISABLE_FEATURES_PLUGIN_URL', plugin_dir_url( __FILE__ ) );		// define the plugin url for use in enqueue
$va_woocommerce_disable_features_options = get_option('va_woocommerce_disable_features_settings');			// retrieve our plugin settings from the options table

/**
 * Includes
 */
include( VA_WOOCOMMERCE_DISABLE_FEATURES_PLUGIN_PATH . 'admin/admin.php' );
