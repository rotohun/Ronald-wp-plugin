<?php

/**
 *Plugin name : basic plugin
 *Author: Ronald Hunter
 *Version: 1.0.0
 *License: GPLv2
 */

function Dwwp_remove_dashboard_widget()
{
	remove_meta_box( 'dashboard_primary','dashboard', 'post_container_1');
}


add_action('wp_dashboard_setup','dwwp_remove_dashboard_widget' );



function dwwp_add_google_link()
{
	global $wp_admin_bar;

	$wp_admin_bar->add_menu( array(
		'id' => 'google_analytics',
		'title' => 'Google Analytics',
		'href' => 'http://google.com/analytics'
		));
}

add_action('wp_before_admin_bar_render','dwwp_add_google_link');

?>