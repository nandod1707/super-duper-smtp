<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://superdupersmtp.com
 * @since             1.0.0
 * @package           Super_Duper_SMTP
 *
 * @wordpress-plugin
 * Plugin Name:       Super Duper SMTP
 * Plugin URI:        https://superdupersmtp.com
 * Description:       A setup-free and easy to use plugin to send email through SMTP.
 * Version:           1.0.3
 * Author:            Nando Delgado
 * Author URI:        http://github.com/nandod1707
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       super-duper-smtp
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Constants
require_once plugin_dir_path( __FILE__ ) . 'constants.php';

/**
 * Current plugin version.
 */
define( 'SUPER_DUPER_SMTP_VERSION', '1.0.0' );

/**
 * Add the plugin menu page
 */

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-super-duper-smtp-activator.php
 */

function activate_super_duper_smtp() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-super-duper-smtp-activator.php';
	Super_Duper_Smtp_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-super-duper-smtp-deactivator.php
 */

function deactivate_super_duper_smtp() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-super-duper-smtp-deactivator.php';
	Super_Duper_Smtp_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_super_duper_smtp' );
register_deactivation_hook( __FILE__, 'deactivate_super_duper_smtp' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-super-duper-smtp.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_super_duper_smtp() {

	$plugin = new Super_Duper_Smtp();
	$plugin->run();

}
run_super_duper_smtp();
