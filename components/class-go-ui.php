<?php

class GO_UI
{
	/**
	 * constructor
	 */
	public function __construct()
	{
		$this->register_resources();
	}// end __construct

	/**
	 * registers scripts and js libaries
	 */
	public function register_resources()
	{
		$script_config = apply_filters( 'go-config', array( 'version' => 1 ), 'go-script-version' );

		// jQuery bbq: https://github.com/cowboy/jquery-bbq
		wp_register_script(
			'jquery-bbq',
			plugins_url( 'js/min/external/jquery.ba-bbq.js', __FILE__ ),
			array( 'jquery' ),
			$script_config['version'],
			TRUE
		);

		// jQuery blockUI: http://malsup.com/jquery/block/
		wp_register_script(
			'blockui',
			plugins_url( 'js/min/external/jquery.blockUI.js', __FILE__ ),
			array( 'jquery' ),
			$script_config['version'],
			TRUE
		);

		// jQuery colorbox: http://www.jacklmoore.com/colorbox/
		wp_register_script(
			'colorbox',
			plugins_url( 'js/min/external/colorbox/jquery.colorbox-min.js', __FILE__ ),
			array( 'jquery' ),
			$script_config['version'],
			TRUE
		);

		wp_register_style(
			'colorbox',
			plugins_url( 'js/lib/external/colorbox/colorbox.css', __FILE__ ),
			array(),
			$script_config['version']
		);

		// jquery Cookie: https://github.com/carhartl/jquery-cookie
		wp_register_script(
			'jquery-cookie',
			plugins_url( 'js/min/external/jquery.cookie.js', __FILE__ ),
			array( 'jquery' ),
			$script_config['version'],
			TRUE
		);

		// doTimeout: http://benalman.com/projects/jquery-dotimeout-plugin/
		wp_register_script(
			'jquery-dotimeout',
			plugins_url( 'js/min/external/jquery.ba-dotimeout.js', __FILE__ ),
			array( 'jquery' ),
			$script_config['version'],
			TRUE
		);

		// handlebars: http://handlebarsjs.com/
		wp_register_script(
			'handlebars',
			plugins_url( 'js/min/external/handlebars.js', __FILE__ ),
			array(),
			$script_config['version'],
			TRUE
		);

		// jQuery scrollTo: https://github.com/flesler/jquery.scrollTo
		wp_register_script(
			'jquery-scrollto',
			plugins_url( 'js/min/external/jquery.scrollTo.js', __FILE__ ),
			array( 'jquery' ),
			$script_config['version'],
			TRUE
		);

		// jQuery throttle: http://benalman.com/projects/jquery-throttle-debounce-plugin/
		wp_register_script(
			'jquery-throttle',
			plugins_url( 'js/min/external/jquery.ba-throttle-debounce.js', __FILE__ ),
			array( 'jquery' ),
			$script_config['version'],
			TRUE
		);

		// jQuery waypoints: http://imakewebthings.com/jquery-waypoints/
		wp_register_script(
			'jquery-waypoints',
			plugins_url( 'js/min/external/waypoints.js', __FILE__ ),
			array( 'jquery' ),
			$script_config['version'],
			TRUE
		);

		// Gigaom bumpdown
		wp_register_script(
			'jquery-inline-bumpdown',
			plugins_url( 'js/min/jquery.inline-bumpdown.js', __FILE__ ),
			array( 'jquery' ),
			$script_config['version'],
			TRUE
		);

		// Font-Awesome: http://fortawesome.github.io/Font-Awesome/
		wp_register_style(
			'fontawesome',
			plugins_url( 'css/font-awesome.css', __FILE__ ),
			array(),
			$script_config['version']
		);

		// Gigaom IE fix for modernizer placeholder attributes
		wp_register_script(
			'modernizr-placeholder-ie-fix',
			plugins_url( 'js/lib/modernizr.placeholder-fix.js', __FILE__ ),
			array( 'jquery' ),
			$script_config['version'],
			TRUE
		);
	}// end register_resources
}// end class
