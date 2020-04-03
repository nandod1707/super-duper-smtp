<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://example.com
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
 * @author     Your Name <email@example.com>
 */
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

}
