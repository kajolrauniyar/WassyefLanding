<?php
/**
 *WITCHES Template Hooks
 *
 * Action/filter hooks used for WITCHES functions/templates
 *
 * @package 	WITCHES
 *
 * @since     	WITCHES 1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/*==================================================================================================
  Functions homepage start
  ==================================================================================================*/

// WITCHES  HEader Content Hooks start

if (!function_exists('wit_header_topmenu')){
	function wit_header_topmenu(){
		 get_template_part( 'template-parts/header/header', 'topmenu' );
	}
}

if (!function_exists('wit_header_banner')){
	function wit_header_banner(){
		get_template_part( 'template-parts/header/header', 'banner' );
	}
}

if (!function_exists('wit_header_menu')){
	function wit_header_menu(){
		get_template_part( 'template-parts/header/header', 'menu' );
	}
}

// witCHES  HEader Content Hooks end


/*==================================================================================================
  Hooks
  ==================================================================================================*/


/**
 * Header Hook start
 */
add_action( 'wit_header_header', 'wit_header_topmenu', 10 );
add_action( 'wit_header_header', 'wit_header_banner', 20 );
add_action( 'wit_header_header', 'wit_header_menu', 30 );
/*Header hook end*/
