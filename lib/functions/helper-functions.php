<?php

add_action( 'wp_head', 'add_google_analytics_to_header_scripts' );
/**
 * Add Google Analytics gtag script file to the <head>.
 *
 * @since 1.0.0
 *
 * @return void
 */
function add_google_analytics_to_header_scripts() {
	include_once CHILD_JS . 'gtag.js';
}
