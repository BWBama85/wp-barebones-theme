<?php
/**
 * WP Barebones Theme functions and definitions
 *
 * @package WP Barebones Theme
 */

/**
 * Setup Theme
 *
 * @return void
 */
function wp_barebones_theme_setup() {
	/*
	* Let WordPress manage the document title.
	* This theme does not use a hard-coded <title> tag in the document head,
	* WordPress will provide it for us.
	*/
	add_theme_support( 'title-tag' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	* Switch default core markup for search form, comment form, and comments
	* to output valid HTML5.
	*/
	add_theme_support(
		'html5',
		array(
			'style',
			'script',
		)
	);
}
add_action( 'after_setup_theme', 'wp_barebones_theme_setup' );
