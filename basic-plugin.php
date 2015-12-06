<?php

/*
Plugin Name: Ronald's first plugin
Description: Ronald's first plugin This plugin will just take you too google analytics. :)
Plugin URI: http://ronaldhunter.co
Author: Ronald Hunter
Author URI: http://ronaldhunter.co
Version: 1.0
License: GPL2
*/

/*

    Copyright (C) Year  Author  Email

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
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