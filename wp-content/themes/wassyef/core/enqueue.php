<?php
/**
 * WITCHES  enqueue functions and definitions
 *
 * @package WITCHES 
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Enqueue scripts and styles.
 */


function wit_scripts() {



	wp_enqueue_style('wit-fontawesome', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css');
	wp_enqueue_style('slick',  '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
	wp_enqueue_style('bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
	wp_enqueue_style('kms_leaflet_map_css', 'https://unpkg.com/leaflet@1.3.4/dist/leaflet.css');
	wp_enqueue_style('wit-styleCss', WIT_CSS . '/style.css');
	// Enqueue script starts

	// Remove default jQuery.
	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'wit-jquery', WIT_JS . '/jquery-3.3.1.min.js', array(), 'v3.3.1', false );
	wp_enqueue_script( 'wit-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array(), '', true );
	wp_enqueue_script( 'wit-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array(), '', true );
	wp_enqueue_script( 'wit-slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), '', true );
	wp_enqueue_script( 'app-js', WIT_JS . '/app.js', array(), '', true );	

}
add_action( 'wp_enqueue_scripts', 'wit_scripts' );
