<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://superdupersmtp.com
 * @since      1.0.0
 *
 * @package    Super_Duper_Smtp
 * @subpackage Super_Duper_Smtp/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Super_Duper_Smtp
 * @subpackage Super_Duper_Smtp/includes
 * @author     Your Name <email@example.com>
 */
class Super_Duper_Smtp_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'super-duper-smtp',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
