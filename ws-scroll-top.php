<?php

/**
 * The plugin Website Scroll to Top file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://sorolipi.com/
 * @since             1.0.0
 * @package           Scrolltop
 *
 * @wordpress-plugin
 * Plugin Name:       WebSite ScrollTop
 * Plugin URI:        https://wordpress.org/plugins/wsscrolltop/
 * Description:       This plugin will automatically enable a custom and flexible Scroll to Top button to your WordPress website that allows your visitor to scroll back to the top of your page with one click!
 * Version:           1.0.0
 * Author:            Iman Ali
 * Author URI:        https://sorolipi.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       scrolltop
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
define( 'SCROLLTOP_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-scrolltop-activator.php
 */
function activate_scrolltop() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-scrolltop-activator.php';
	Scrolltop_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-scrolltop-deactivator.php
 */
function deactivate_scrolltop() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-scrolltop-deactivator.php';
	Scrolltop_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_scrolltop' );
register_deactivation_hook( __FILE__, 'deactivate_scrolltop' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-scrolltop.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_scrolltop() {

	$plugin = new Scrolltop();
	$plugin->run();

}

add_action('wp_footer', 'sorolipi_plugin_functions');

function sorolipi_plugin_functions(){?>

  <div class="scroll-to-top">
    <a href="#"><i class="fa fa-chevron-up"></i></a>
  </div>

<?php }




run_scrolltop();
