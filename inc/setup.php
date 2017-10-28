<?php
/**
 * Setup.
 *
 * @package phx-university
 * @since 1.0.0
 */

/**
 * Hooks.
 *
 * @since 1.0.0
 */
add_action( 'after_setup_theme', 'phx_university_theme_setup' );
add_filter( 'acf/fields/google_map/api', 'phx_university_google_maps_key' );

/**
 * Theme Setup.
 *
 * @since 1.0.0
 */
function phx_university_theme_setup() {
	add_theme_support( 'title-tag' );
}

/**
 * ACF: Google Maps API Key.
 *
 * @since 1.0.0
 *
 * @param array $api
 *
 * @return array $api
 */
function phx_university_google_maps_key( $api ) {

	$api['key'] = PHX_GOOGLE_MAPS_API_KEY;

	return $api;
}


