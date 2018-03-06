<?php

add_action( 'beans_uikit_enqueue_scripts', 'ehc_enqueue_styles', 5 );
/**
 * Enqueue styles in production using Beans Compiler API.
 *
 * @since 1.0.0
 *
 * @return void
 */

function ehc_enqueue_styles() {
//	Enqueue custom UIkit styles and overwrite with the theme folder.
	beans_uikit_enqueue_theme( 'beans_child', CHILD_LIB . 'assets/less/theme' );

// Enqueue LESS files to the UIkit compiler.
	beans_compiler_add_fragment( 'uikit', array(
		CHILD_LIB . 'assets/less/core/base.less',
		CHILD_LIB . 'assets/less/core/overlay.less',
		CHILD_LIB . 'assets/less/core/utility.less',
		CHILD_LIB . 'assets/less/core/variables.less',
		CHILD_LIB . 'assets/less/layout/default.less',
		CHILD_LIB . 'assets/less/layout/content.less',
		CHILD_LIB . 'assets/less/layout/header.less',
		CHILD_LIB . 'assets/less/layout/footer.less',
		CHILD_LIB . 'assets/less/utilities/mixins.less',
		CHILD_LIB . 'assets/less/plugins/facebook-feed.less',
		CHILD_LIB . 'assets/less/plugins/feature-a-page.less',

	), 'less' );
}

beans_add_smart_action( 'beans_uikit_enqueue_scripts', 'ehc_enqueue_uikit_assets', 5 );
/**
 * Enqueue UIkit assets using Beans Compiler API.
 *
 * @since 1.0.0
 *
 * @return void
 */
function ehc_enqueue_uikit_assets() {
	beans_compiler_add_fragment( 'uikit', array(
		CHILD_JS . 'animatedtext.js',
		CHILD_JS . 'theme.js'
	), 'js' );

	beans_uikit_enqueue_components( array(
		'modal',
		'overlay',
		'description-list'
	) );
	beans_uikit_enqueue_components( array(
		'slideshow',
		'slider',
		'grid',
		'slidenav'
	),
		'add-ons' );
}

add_action( 'wp_enqueue_scripts', 'ehc_add_google_fonts' );
/**
 * Enqueue Google fonts.
 *
 * @since 1.0.0
 *
 * @return void
 */
function ehc_add_google_fonts() {
	wp_enqueue_style( 'pp-google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,600|Raleway:400,400i', false );
}
