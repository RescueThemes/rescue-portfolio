<?php
/* 
Plugin Name: Rescue Portfolio
Plugin URI: https://github.com/RescueThemes/rescue-portfolio
Description: Adds a portfolio custom post type and portfolio shortcode for themes developed by <a href="http://themeforest.net/user/RescueThemes?ref=RescueThemes">Rescue Themes</a>
Author: Rescue Themes
Version: 1.0
Author URI: http://themeforest.net/user/RescueThemes?ref=RescueThemes
*/

/*---------------------------------------------------------*/
/* Configuration & Necessary Files
/*---------------------------------------------------------*/
define('RESCUE_PORTFOLIO_TEMPLATE_DIR', dirname(__FILE__));

include_once('includes/portfolio-post-type.php');
include_once('includes/portfolio-shortcode.php');

/*---------------------------------------------------------*/
/* Register Scripts
/*---------------------------------------------------------*/
function rescue_port_js() {

		wp_register_script('mixitup', plugins_url('/js/jquery.mixitup.js', __FILE__), array( 'jquery' ) );
		wp_register_script('custom', plugins_url('/js/jquery.custom.js', __FILE__), array( 'jquery' ) );
			
		wp_enqueue_script( 'mixitup');
		wp_enqueue_script( 'custom');

}
	
add_action('init', 'rescue_port_js');

/*---------------------------------------------------------*/
/* Register Styles
/*---------------------------------------------------------*/
function rescue_port_style()
{
	if (!is_admin()) {
		wp_register_style('customstyle', plugins_url('/css/style.css', __FILE__));
			
		wp_enqueue_style( 'customstyle');
	}		
}
	
add_action('init', 'rescue_port_style');