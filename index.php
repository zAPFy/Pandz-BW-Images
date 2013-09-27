<?php
/**
 * Plugin Name: Pandz Gallery
 * Plugin URI: http://zapf.se
 * Description: A brief description of the Plugin.
 * Version: 1.0
 * Author: Alexander Zeiher
 * Author URI: http://zapf.se
 */
 
 /*Javascripts and styles*/
function pandz_bw_image_scripts() {

	wp_enqueue_script('jquery');
	wp_enqueue_script( 'jquery_bw', plugins_url( '/js/jquery.BlackAndWhite.min.js' , __FILE__ ), array('jquery'), null );
}
add_action('wp_enqueue_scripts', 'pandz_bw_image_scripts');

?>