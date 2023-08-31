<?php
/**
 * Understrap enqueue scripts
 *
 * @package Xenia
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'xenia_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function xenia_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );
		$suffix        = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

		// Grab asset urls.
		$theme_styles  = "/assets/css/theme{$suffix}.css";
		$theme_scripts = "/assets/js/theme{$suffix}.js";

		$css_version = $theme_version . '.' . filemtime( get_template_directory() . $theme_styles );
		wp_enqueue_style( 'xenia-styles', get_template_directory_uri() . $theme_styles, array(), $css_version );

		wp_enqueue_script( 'jquery' );

		$js_version = $theme_version . '.' . filemtime( get_template_directory() . $theme_scripts );
		wp_enqueue_script( 'xenia-scripts', get_template_directory_uri() . $theme_scripts, array(), $js_version, true );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // End of if function_exists( 'xenia_scripts' ).

add_action( 'wp_enqueue_scripts', 'xenia_scripts' );
