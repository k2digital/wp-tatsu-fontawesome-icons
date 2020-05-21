<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Tatsu_Fontawesome_Icons
 * @subpackage Tatsu_Fontawesome_Icons/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Tatsu_Fontawesome_Icons
 * @subpackage Tatsu_Fontawesome_Icons/admin
 * @author     Your Name <email@example.com>
 */
class Tatsu_Fontawesome_Icons_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $tatsu_fontawesome_icons    The ID of this plugin.
	 */
	private $tatsu_fontawesome_icons;

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
	 * @param      string    $tatsu_fontawesome_icons       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $tatsu_fontawesome_icons, $version ) {

		$this->tatsu_fontawesome_icons = $tatsu_fontawesome_icons;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Tatsu_Fontawesome_Icons_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Tatsu_Fontawesome_Icons_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->tatsu_fontawesome_icons, plugin_dir_url( __FILE__ ) . 'css/tatsu-fontawesome-icons-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Tatsu_Fontawesome_Icons_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Tatsu_Fontawesome_Icons_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->tatsu_fontawesome_icons, plugin_dir_url( __FILE__ ) . 'js/tatsu-fontawesome-icons-admin.js', array( 'jquery' ), $this->version, false );

	}

}
