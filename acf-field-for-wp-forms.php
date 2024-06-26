<?php
/**
 * Plugin Name:     ACF Field For WPForms
 * Plugin URI:      https://wordpress.org/plugins/acf-field-for-wp-forms/
 * Description:     Adds a new 'WP Forms' field to the popular Advanced Custom Fields plugin.
 * Author:          Nilesh Kanzariya
 * Author URI:      https://github.com/nilsatwara
 * Text Domain:     acf-field-for-wp-forms
 * Domain Path:     /languages
 * Version:         1.6
 *
 * @package         ACF_Field_For_WP_Forms
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once 'includes/class-' . basename( __FILE__ );

/**
 * Plugin textdomain.
 */


function acf_wp_forms_textdomain() {
	load_plugin_textdomain( 'acf-field-for-wp-forms', false, basename( dirname( __FILE__ ) ) . '/languages' );
}
add_action( 'plugins_loaded', 'acf_wp_forms_textdomain');

/**
 * Plugin activation.
 */
function acf_wp_forms_activation() {
	// Activation code here.
}
register_activation_hook( __FILE__, 'acf_wp_forms_activation');

/**
 * Plugin deactivation.
 */
function acf_wp_forms_deactivation() {
	// Deactivation code here.
}
register_deactivation_hook( __FILE__, 'acf_wp_forms_deactivation');

/**
 * Initialization class.
 */
function acf_wp_forms_init() {
	new ACF_Field_For_WP_Forms;
}
add_action('plugins_loaded', 'acf_wp_forms_init' );

if (!function_exists('ACF_Field_For_WPForms_admin_scripts')) {
	include_once dirname(__FILE__)	.'/includes/acf_wp_forms_script.php'; 
	ACF_Field_For_WPForms_admin_scripts();
}
