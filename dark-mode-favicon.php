<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://devhouse.se
 * @since             1.0.0
 * @package           Dark_Mode_Favicon
 *
 * @wordpress-plugin
 * Plugin Name:       Dark Mode Favicon
 * Plugin URI:        https://devhouse.se
 * Description:       Description here - bobs your uncle.
 * Version:           1.0.0
 * Author:            Alex Strand @ DevHouse
 * Author URI:        https://devhouse.se
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       dark-mode-favicon
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
define( 'DARK_MODE_FAVICON_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-dark-mode-favicon-activator.php
 */
function activate_dark_mode_favicon() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-dark-mode-favicon-activator.php';
	Dark_Mode_Favicon_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-dark-mode-favicon-deactivator.php
 */
function deactivate_dark_mode_favicon() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-dark-mode-favicon-deactivator.php';
	Dark_Mode_Favicon_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_dark_mode_favicon' );
register_deactivation_hook( __FILE__, 'deactivate_dark_mode_favicon' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-dark-mode-favicon.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_dark_mode_favicon() {

	$plugin = new Dark_Mode_Favicon();
	$plugin->run();

}
run_dark_mode_favicon();
