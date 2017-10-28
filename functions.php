<?php
/**
 * HM University Functionality.
 *
 * @package phx-university
 * @since 1.0.0
 */

/**
 * Version Constant.
 *
 * @since 1.0.0
 */
define( 'PHX_VERSION', '1.0.0' );

/**
 * Path Constants.
 *
 * @since 1.0.0
 */
define( 'PHX_PATH', trailingslashit( get_template_directory() ) );
define( 'PHX_INC', trailingslashit( PHX_PATH . 'inc' ) );

/**
 * Url Constants.
 *
 * @since 1.0.0
 */
define( 'PHX_URL', trailingslashit( get_template_directory_uri() ) );
define( 'PHX_ASSETS', trailingslashit( PHX_URL . 'assets' ) );
define( 'PHX_CSS', trailingslashit( PHX_ASSETS . 'css' ) );
define( 'PHX_JS', trailingslashit( PHX_ASSETS . 'js' ) );

/**
 * Google Maps API Key.
 *
 * @since 1.0.0
 */
define( 'PHX_GOOGLE_MAPS_API_KEY', 'AIzaSyCFaUFGpgkEVkD4OEMyoIjRrb6sZOIHavo' );

/**
 * Includes.
 *
 * @since 1.0.0
 */
require_once PHX_INC . 'setup.php';
require_once PHX_INC . 'scripts.php';
require_once PHX_INC . 'events.php';
