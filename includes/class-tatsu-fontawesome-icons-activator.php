<?php

/**
 * Fired during plugin activation
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Tatsu_Fontawesome_Icons
 * @subpackage Tatsu_Fontawesome_Icons/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Tatsu_Fontawesome_Icons
 * @subpackage Tatsu_Fontawesome_Icons/includes
 * @author     Your Name <email@example.com>
 */
class Tatsu_Fontawesome_Icons_Activator {

  /**
   * Short Description. (use period)
   *
   * Long Description.
   *
   * @since    1.0.0
   */
  public static function activate() {

    if (!function_exists('run_tatsu')) {
      deactivate_plugins(plugin_basename( __FILE__ ));
      wp_die( __( 'Please install and Tatsu.', 'tatsu-addon-slug'), 'Plugin dependency check', array('back_link' => true));
    }


    // The namespace for FontAwesome is in-fact FortAwesome
    if (!function_exists( 'FortAwesome\font_awesome_load')) {
      deactivate_plugins(plugin_basename( __FILE__ ));
      wp_die( __( 'Please install and Font Awesome.', 'fontawesome-addon-slug'), 'Plugin dependency check', array('back_link' => true));
    }

  }

}
