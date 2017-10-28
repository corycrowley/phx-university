<?php
/**
 * Scripts & Styles.
 *
 * @package phx-university
 * @since 1.0.0
 */

/**
 * Hooks.
 *
 * @since 1.0.0
 */
add_action( 'wp_enqueue_scripts', 'phx_university_enqueue_scripts_styles' );

/**
 * Enqueue Scripts & Styles.
 *
 * @since 1.0.0
 */
function phx_university_enqueue_scripts_styles() {
	$min = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';
	wp_enqueue_style( 'phx-university-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans|Oswald', array(), PHX_VERSION, 'all' );
	wp_enqueue_style( 'phx-university-css', PHX_CSS . "app{$min}.css", array( 'phx-university-fonts' ), PHX_VERSION, 'all' );
	wp_enqueue_script( 'phx-university-js', PHX_JS . "app{$min}.js", array( 'jquery' ), PHX_VERSION, true );
	wp_localize_script( 'phx-university-js', 'hmuJsVars', array(
		'ajaxurl' => esc_url_raw( admin_url( 'admin-ajax.php' ) ),
		'root'    => esc_url_raw( rest_url() ),
		'nonce'   => wp_create_nonce( 'wp_rest' ),
	) );
}
