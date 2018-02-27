<?php
/**
 * @package File List Manager
 */
/*
Plugin Name: File List Manager
Plugin URI: http://appignition.com/
Description: Allows Site Administrators to Upload Files and Organize them for Download on a User Page.
Version: 0.1
Author: AppIgnition
Author URI: https://appignition.com/wordpress-plugins/
License: GPLv2 or later
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2018 AppIgnition, LLC.
*/



add_action('admin_menu', 'my_admin_menu');

function my_admin_menu () {
    add_menu_page('File List Manager title', 'File List Manager', 'manage_options', 'file_list_manager_settings_page', 'mt_settings_page');
    add_submenu_page('file_list_manager_settings_page', 'Page title', 'Sub-menu title', 'manage_options', 'child-submenu-handle');
}

function file_list_manager_admin_page () {
    echo 'this is where we will edit the variable';
}

function mt_settings_page() {
    echo "<h2>" . __( 'File List Manager Configurations', 'menu-test' ) . "</h2>";
    //include_once('file_list_manager_settings_page.php');
}

?>