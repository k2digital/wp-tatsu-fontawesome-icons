<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           Tatsu_Fontawesome_Icons
 *
 * @wordpress-plugin
 * Plugin Name:       Tatsu <--> Font Awesome Icons
 * Plugin URI:        http://example.com/tatsu-fontawesome-icons-uri/
 * Description:       Imports Font Awesome icons for useage within Tatsu
 * Version:           1.0.0
 * Author:            Your Name or Your Company
 * Author URI:        http://example.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       tatsu-fontawesome-icons
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'TATSU_FONTAWESOME_ICONS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-tatsu-fontawesome-icons-activator.php
 */
function activate_tatsu_fontawesome_icons() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-tatsu-fontawesome-icons-activator.php';
	Tatsu_Fontawesome_Icons_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-tatsu-fontawesome-icons-deactivator.php
 */
function deactivate_tatsu_fontawesome_icons() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-tatsu-fontawesome-icons-deactivator.php';
	Tatsu_Fontawesome_Icons_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_tatsu_fontawesome_icons' );
register_deactivation_hook( __FILE__, 'deactivate_tatsu_fontawesome_icons' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-tatsu-fontawesome-icons.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_tatsu_fontawesome_icons() {

	$plugin = new Tatsu_Fontawesome_Icons();
	$plugin->run();

}
run_tatsu_fontawesome_icons();
