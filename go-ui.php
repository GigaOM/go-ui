<?php
/**
 * Plugin Name: Gigaom UI libraries
 * Plugin URI: http://gigaom.com
 * Description: Library plugin for various UI libaries
 * Version: 1.0
 * Author: Gigaom
 * Author URI: http://gigaom.com/
 */

/**
 * singleton for GO_UI
 */
function go_ui()
{
	global $go_ui;

	if ( ! $go_ui )
	{
		require_once __DIR__ . '/components/class-go-ui.php';
		$go_ui = new GO_UI;
	}//end if

	return $go_ui;
}//end go_ui
