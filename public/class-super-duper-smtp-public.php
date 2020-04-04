<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://github.com/nandod1707/super-duper-smtp
 * @since      1.0.0
 *
 * @package    Super_Duper_Smtp
 * @subpackage Super_Duper_Smtp/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Super_Duper_Smtp
 * @subpackage Super_Duper_Smtp/public
 * @author     Nando Delgado <nando.emmanuel@gmail.com>
 */

 // Load PHPMailer class, so we can subclass it.

require_once ABSPATH . WPINC . '/class-phpmailer.php';

/**
 * Subclass of PHPMailer to prevent Sending.
 *
 * This subclass of PHPMailer replaces the send() method
 * with a method that does not send.
 * This subclass is based on the WP Core MockPHPMailer
 * found in phpunit/includes/mock-mailer.php
 *
 * @since 0.8.0
 * @see PHPMailer
 */
class Fe_Stop_Emails_Fake_PHPMailer extends PHPMailer {
	/**
	 * Mock sent email.
	 *
	 * @since 1.0.0
	 * @var array of email components (e.g. to, cc, etc.)
	 */
	var $mock_sent = array();

	/**
	 * Replacement send() method that does not send.
	 *
	 * Unlike the PHPMailer send method,
	 * this method never calls the method postSend(),
	 * which is where the email is actually sent
	 *
	 * @since 1.0.0
	 * @return bool
	 */
	function send() {
		try {
			if ( ! $this->preSend() ) {
				return false;
			}

			$mock_email = array(
				'to'     => $this->to,
				'cc'     => $this->cc,
				'bcc'    => $this->bcc,
				'header' => $this->MIMEHeader,
				'body'   => $this->MIMEBody,
			);

			$this->mock_sent[] = $mock_email;

			return true;
		} catch ( phpmailerException $e ) {
			return false;
		}
	}
}

class Super_Duper_Smtp_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $super_duper_smtp    The ID of this plugin.
	 */
	private $super_duper_smtp;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $super_duper_smtp       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $super_duper_smtp, $version ) {

		$this->super_duper_smtp = $super_duper_smtp;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Super_Duper_Smtp_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Super_Duper_Smtp_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->super_duper_smtp, plugin_dir_url( __FILE__ ) . 'css/super-duper-smtp-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Super_Duper_Smtp_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Super_Duper_Smtp_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->super_duper_smtp, plugin_dir_url( __FILE__ ) . 'js/super-duper-smtp-public.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Replace the global $phpmailer with fake phpmailer.
	 *
	 * @since 1.0.0
	 *
	 * @return Fe_Stop_Emails_Fake_PHPMailer instance, the object that replaced
	 *                                                 the global $phpmailer
	 */
	public function replace_phpmailer() {
		global $phpmailer;
		return $this->replace_w_fake_phpmailer( $phpmailer );
	}

	/**
	 * Replace the parameter object with an instance of
	 * Fe_Stop_Emails_Fake_PHPMailer.
	 *
	 * @since 1.0.0
	 *
	 * @param PHPMailer $obj WordPress PHPMailer object.
	 * @return Fe_Stop_Emails_Fake_PHPMailer $obj
	 */
	public function replace_w_fake_phpmailer( &$obj = null ) {
		$obj = new Fe_Stop_Emails_Fake_PHPMailer;

		return $obj;
	}



}
