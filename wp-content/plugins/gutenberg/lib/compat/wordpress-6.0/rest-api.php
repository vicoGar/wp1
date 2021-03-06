<?php
/**
 * Overrides Core's wp-includes/rest-api.php and registers the new endpoint for WP 6.0.
 *
 * @package gutenberg
 */

/**
 * Registers the Global Styles REST API routes.
 */
function gutenberg_register_global_styles_endpoints() {
	$editor_settings = new Gutenberg_REST_Global_Styles_Controller();
	$editor_settings->register_routes();
}
add_action( 'rest_api_init', 'gutenberg_register_global_styles_endpoints' );


/**
 * Registers the block pattern directory.
 */
function gutenberg_register_rest_pattern_directory() {
	$pattern_directory_controller = new Gutenberg_REST_Pattern_Directory_Controller();
	$pattern_directory_controller->register_routes();
}
add_filter( 'rest_api_init', 'gutenberg_register_rest_pattern_directory' );
