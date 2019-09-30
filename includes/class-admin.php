<?php

namespace dapre_wpspb\includes;

use function dapre_wpspb\get_asset_version;
use const dapre_wpspb\PLUGIN_DIR_PATH;
use const dapre_wpspb\PLUGIN_NAME;
use const dapre_wpspb\PLUGIN_URL_PATH;

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    dapre_wpspb
 * @subpackage dapre_wpspb/includes
 * @author     Giulio Daprela <giulio.daprela@gmail.com>
 */
class Admin {

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 *
	 * @return void
	 */
	public function __construct() {

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 *
	 * @return void
	 */
	public function enqueue_styles() {

		/*
		 * This function is provided for demonstration purposes only.
		 */

		/**
		 * @var string|int $version the version to assign to the asset file.
		 * It will be the asset timestamp if we are in debug mode, the plugin version if we are in production mode
		 */
		$version = get_asset_version( PLUGIN_DIR_PATH . 'assets/css/admin-styles.min.css' );
		wp_enqueue_style( PLUGIN_NAME, PLUGIN_URL_PATH . 'assets/css/admin-styles.min.css', [], $version, 'all' );
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 *
	 * @return void
	 */
	public function enqueue_scripts() {

		/*
		 * This function is provided for demonstration purposes only.
		 */

		/**
		 * @var string|int $version the version to assign to the asset file.
		 * It will be the asset timestamp if we are in debug mode, the plugin version if we are in production mode
		 */
		$version = get_asset_version( PLUGIN_DIR_PATH . 'assets/js/wp-settings-page-boilerplate.min.js' );
		wp_enqueue_script( PLUGIN_NAME, PLUGIN_URL_PATH . 'assets/js/wp-settings-page-boilerplate.min.js', [ 'jquery' ], $version, false );
	}

	public function add_admin_menu() {
		//add an item to the menu
		add_submenu_page (
			'tools.php',
			'Settings Page',
			'Settings Page',
			'create_users',
			'settings_page',
			[$this, 'manage_tabs']
		);
	}

	public function manage_tabs() {

		$tab_post = filter_input(INPUT_POST, 'tab', FILTER_SANITIZE_STRING);
		$tab_get = filter_input(INPUT_GET, 'tab', FILTER_SANITIZE_STRING);

		// if the tab is not specified reverts to load the default tab
		if ( $tab_post != null || $tab_get != null ) {
			$tab = ($tab_post === null) ? $tab_get : $tab_post;
			$this->admin_tabs( $tab );
		} else {
			$tab = 'settings_page';
			$this->admin_tabs( $tab );
		}

		switch ( $tab ){
			case 'settings_page' :

				require_once PLUGIN_DIR_PATH . 'templates/wp-settings-page-boilerplate-template.php';

				break;
		}
	}

	/**
	 * Prints the html for rendering the tabs.
	 *
	 * @param string $current
	 *
	 * @return void
	 */
	public function admin_tabs( $current = 'pages_settings' ) {

		$tabs = [
			'settings_page'  => 'Settings Page',
		];
		echo '<h1 class="nav-tab-wrapper">';

		foreach( $tabs as $tab => $name ){
			$class = ( $tab == $current ) ? ' nav-tab-active' : '';
			echo "<a class='nav-tab$class' href='?page=settings_page&tab=$tab'>$name</a>";

		}
		echo '</h1>';
	}
}