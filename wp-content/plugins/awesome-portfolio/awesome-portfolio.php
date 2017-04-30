<?php

/**
* Plugin Name: Michelle's Awesome Portfolio
* Plugin URI: http://michellenrodriguez.com
* Description: My custom portfolio plugin
* Version: 1.0
* Author: Michelle N. Rodriguez
* Author URI: http://michellenrodriguez.com
* Text Domain: awesome-portfolio
*/

// Exit if accessed directly.
if( !defined( 'ABSPATH' ) ) exit;

function ap_register_post_type() {
	/**
	* Registers a new post type
	* @uses $wp_post_types Inserts new post type object into the list
	*
	* @param string  Post type key, must not exceed 20 characters
	* @param array|string  See optional args description above.
	* @return object|WP_Error the registered post type object, or an error object
	*/	
		$labels = array(
			'name'                => __( 'Portfolio', 'awesome-portfolio' ),
			'singular_name'       => __( 'Portfolio Item', 'awesome-portfolio' ),
			'add_new'             => _x( 'Add New Portfolio Item', 'awesome-portfolio', 'awesome-portfolio' ),
			'add_new_item'        => __( 'Add New Portfolio Item', 'awesome-portfolio' ),
			'edit_item'           => __( 'Edit Portfolio Item', 'awesome-portfolio' ),
			'new_item'            => __( 'New Portfolio Item', 'awesome-portfolio' ),
			'view_item'           => __( 'View Portfolio Item', 'awesome-portfolio' ),
			'search_items'        => __( 'Search Portfolio Items', 'awesome-portfolio' ),
			'not_found'           => __( 'No Portfolio Items found', 'awesome-portfolio' ),
			'not_found_in_trash'  => __( 'No Portfolio Items found in Trash', 'awesome-portfolio' ),
			'parent_item_colon'   => __( 'Portfolio Item:', 'awesome-portfolio' ),
			'menu_name'           => __( 'Portfolio', 'awesome-portfolio' ),
		);
	
		$args = array(
			'labels'              => $labels,
			'hierarchical'        => false,
			'description'         => 'description',
			'taxonomies'          => array(),
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => null,
			'menu_icon'           => 'dashicons-portfolio',
			'show_in_nav_menus'   => true,
			'publicly_queryable'  => true,
			'exclude_from_search' => false,
			'has_archive'         => true,
			'query_var'           => true,
			'can_export'          => true,
			'rewrite'             => true,
			'capability_type'     => 'post',
			'supports'            => array(
				'title', 'editor', 'author', 'thumbnail',
				'excerpt','custom-fields', 'trackbacks', 'comments',
				'revisions', 'page-attributes', 'post-formats'
				)
		);
	
		register_post_type( 'ap_portfolio', $args );
	}
	
add_action( 'init', 'ap_register_post_type' );

/**
* Register Item Type taxonomy.
*
*/
function ap_create_taxonomy() {

    $labels = array(
        'name'                       => _x( 'Item Types', 'taxonomy general name', 'awesome-portfolio' ),
        'singular_name'              => _x( 'Item Type', 'taxonomy singular name', 'awesome-portfolio' ),
    );
 
    $args = array(
        'hierarchical'          => false,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'             => true,
        'rewrite'               => array( 'slug' => 'item-type' ),
    );

	register_taxonomy( 'ap_item_type', 'ap_portfolio', $args );

}
add_action( 'init', 'ap_create_taxonomy' );