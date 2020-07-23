<?php
/**
 * Main Plugin File
 *
 * @package BDPaymentGateways
 */

/**
 * Plugin Name:       Bangladeshi Payment Gateways
 * Plugin URI:        https://ultradevs.com/wp/plugins/BD-payment-gateways
 * Description:       Bangladeshi Payment Gateways for WooCommerce.
 * Version:           1.0.0
 * Author:            ultraDevs
 * Author URI:        https://ultradevs.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       bd-payment-gateways
 * Domain Path:       /languages
 */

// If this file is called directly, abort!
defined( 'ABSPATH' ) || exit( 'bYe bYe!' );

// Constant.
define( 'BD_PAYMENT_GATEWAYS_VERSION', '1.0.0' );
define( 'BD_PAYMENT_GATEWAYS_NAME', plugin_basename( __FILE__ ) );
define( 'BD_PAYMENT_GATEWAYS_DIR_PATH', plugin_dir_path( __FILE__ ) );
define( 'BD_PAYMENT_GATEWAYS_DIR_URL', plugin_dir_url( __FILE__ ) );
define( 'BD_PAYMENT_GATEWAYS_ASSETS', BD_PAYMENT_GATEWAYS_DIR_URL . 'assets/' );

/**
 * The code that runs during plugin activation.
 */
if ( ! function_exists( 'bd_payment_gateways_activate' ) ) {
	function bd_payment_gateways_activate() {
		flush_rewrite_rules();
	}
}
register_activation_hook( __FILE__, 'bd_payment_gateways_activate' );

/**
 * The code that runs during plugin deactivation.
 */
if ( ! function_exists( 'bd_payment_gateways_deactivate' ) ) {
	function bd_payment_gateways_deactivate() {

	}
}
register_deactivation_hook( __FILE__, 'bd_payment_gateways_deactivate' );

/**
 * Core plugin class
 */
require BD_PAYMENT_GATEWAYS_DIR_PATH . 'includes/Init.php';

/**
 * Begin execution of the plugin
 */
if ( ! function_exists( 'bd_payment_gateways_run' ) ) {
	function bd_payment_gateways_run() {
		$plugin = new BDPaymentGateways\Init();
		$plugin->run();
	}
}

bd_payment_gateways_run();
