<?php
/**
 * WITCHES
 *
 * @package WITCHES
 * 
 * @since WITCHES 1.0
 *
 */

$get_theme = wp_get_theme();

define('WIT_THEME_NAME', $get_theme);
define('WIT_THEME_VERSION', '1.0.0');
define('WIT_THEME_SLUG', 'WIT');
define('WIT_PREFIX', 'WIT_');

define('WIT_BASE_URL', get_template_directory_uri() );
define('WIT_BASE', wp_normalize_path ( get_template_directory() ) );

define('WIT_CORE', WIT_BASE . '/core');
define('WIT_FUNCTION', WIT_BASE . '/core/functions');
define('WIT_ADMIN_WITR', WIT_CORE. '/admin' );

define('WIT_THEME_ADMIN_URL', WIT_BASE_URL . '/core/admin');
define('WIT_THEME_LIBS_URL' , WIT_BASE . '/core/lib' );

define('WIT_ASSEST_URI', WIT_BASE_URL . '/landing-assets');
define('WIT_JS', WIT_BASE_URL . '/landing-assets/js');
define('WIT_CSS', WIT_BASE_URL . '/landing-assets/css');

define('WIT_CSS_CONTACT', WIT_BASE_URL . '/landing-assets/css/contact');
define('WIT_IMG', WIT_BASE_URL . '/landing-assets/images');
































/*api calender key AIzaSyAtHujRBEYbJL_DONXqObu0P1gBbxwSWFg*/