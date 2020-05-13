<?php

/**
 * Fired during plugin activation
 *
 * @link       https://superdupersmtp.com
 * @since      1.0.0
 *
 * @package    Super_Duper_Smtp
 * @subpackage Super_Duper_Smtp/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Super_Duper_Smtp
 * @subpackage Super_Duper_Smtp/includes
 * @author     Nando Delgado <nando.emmanuel@gmail.com>
 */
class Super_Duper_Smtp_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */

	public static function activate() {

		$sends_available = wp_remote_post(SUPER_DUPER_API . '/users/available', array(
			'body' => array(
				'host' => $_SERVER['HTTP_HOST']
			)
		));

	}

}
