<?php

add_action( 'wp', 'ehc_set_up_post_structure' );
/**
 * Set up the post structure.
 *
 * @since 1.0.0
 *
 * @return void
 */
function ehc_set_up_post_structure() {
	// Remove the post meta.
	beans_remove_action( 'beans_post_meta' );

	// Align post image to the right.
	beans_add_attribute( 'beans_post_image', 'class', 'uk-float-right uk-margin-top-remove uk-margin-right uk-margin-bottom' );

	// Comments styling.
	beans_remove_attribute( 'beans_comments', 'class', 'uk-panel-box' );
	beans_add_attribute( 'beans_comment_form_wrap', 'class', 'uk-panel-box' );

	// Remove comments from pages.
	if ( ! is_page() ) {
		return;
	}
	remove_post_type_support( 'page', 'comments' );
}
