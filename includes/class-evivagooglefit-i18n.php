<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/christopherd123
 * @since      1.0.0
 *
 * @package    Evivagooglefit
 * @subpackage Evivagooglefit/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Evivagooglefit
 * @subpackage Evivagooglefit/includes
 * @author     Christopher Dahl <chrisjdahl@outlook.com>
 */
class Evivagooglefit_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'evivagooglefit',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
