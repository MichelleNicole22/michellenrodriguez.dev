<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

function michelle_enqueue_styles() {
	
	// enqueue parent styles
	wp_enqueue_style('parent-style', get_template_directory_uri() .'/style.css');
	
	// enqueue child styles
	wp_enqueue_style('child-theme', get_stylesheet_directory_uri() .'/style.css', 3, array('parent-style'));
	
}
add_action('wp_enqueue_scripts', 'michelle_enqueue_styles');