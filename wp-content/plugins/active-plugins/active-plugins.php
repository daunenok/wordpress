<?php 
    /*
    Plugin Name: Active Plugins
    Plugin URI: http://www.active.net
    Description: Plugin for displaying active plugins
    Author: Daunenok
    Version: 1.0
    Author URI: http://www.active.net
    */

function active_plugins() {
	global $active;

	$plugins = get_plugins();
	foreach ($plugins as $file=>$data)  {
		if (is_plugin_active($file)) {
			$active[$file] = get_plugin_data(WP_PLUGIN_DIR . "/$file");
		}
	}

	wp_add_dashboard_widget("active_plugins", "Active Plugins", "ap_widget");
}

function ap_widget() {
	global $active;

	echo "<ul>";
	foreach ($active as $plugin) {
		echo "<li>";
		echo $plugin["Title"];
		echo " by ";
		echo $plugin["Author"];
		echo "</li>";
	}
	echo "</ul>";
}

add_action("wp_dashboard_setup", "active_plugins");