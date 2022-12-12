<?php
/**
 * Plugin Name: Elementor PUP
 * Description: Simple hello world widgets for Elementor.
 * Version:     1.0.0
 * Author:      Gabriel Joffe
 * Author URI:  https://www.gabrieljoffe.com/
 * Text Domain: elementor-pup
 */

function register_hello_world_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/hello-world-widget-1.php' );
	//require_once( __DIR__ . '/widgets/hello-world-widget-2.php' );

	$widgets_manager->register( new \Elementor_Hello_World_Widget_1() );
	//$widgets_manager->register( new \Elementor_Hello_World_Widget_2() );

}
add_action( 'elementor/widgets/register', 'register_hello_world_widget' );
?>