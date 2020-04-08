<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://devhouse.se
 * @since      1.0.0
 *
 * @package    Dark_Mode_Favicon
 * @subpackage Dark_Mode_Favicon/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Dark_Mode_Favicon
 * @subpackage Dark_Mode_Favicon/includes
 * @author     Alex Strand <alex@devhouse.se>
 */
class Dark_Mode_Favicon_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'dark-mode-favicon',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
