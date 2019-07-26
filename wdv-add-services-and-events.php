<?php

/**
 *
 * @link              http://wdvillage.com
 * @since             1.0.0
 * @package           Wdv_Add_Services_And_Events
 *
 * @wordpress-plugin
 * Plugin Name:       WDV - Add Services and Events
 * Plugin URI:        http://wdvillage.com/product/wdv-add-services-and-events-plugin/
 * Description:       The plugin "WDV - Add Services and Events" added custom post types "Services" and "Events" to WP theme "Aniro Hotel".
 * Version:           1.0.0
 * Author:            wdvillage
 * Author URI:        http://wdvillage.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wdv-add-services-and-events
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
define( 'WDV_ADD_SERVICES_AND_EVENTS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wdv-add-services-and-events-activator.php
 */
function activate_wdv_add_services_and_events() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wdv-add-services-and-events-activator.php';
	Wdv_Add_Services_And_Events_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wdv-add-services-and-events-deactivator.php
 */
function deactivate_wdv_add_services_and_events() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wdv-add-services-and-events-deactivator.php';
	Wdv_Add_Services_And_Events_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wdv_add_services_and_events' );
register_deactivation_hook( __FILE__, 'deactivate_wdv_add_services_and_events' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wdv-add-services-and-events.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wdv_add_services_and_events() {

	$plugin = new Wdv_Add_Services_And_Events();
	$plugin->run();

}
run_wdv_add_services_and_events();
