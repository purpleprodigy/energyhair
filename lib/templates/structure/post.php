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

	// Comments styling.
	beans_remove_attribute( 'beans_comments', 'class', 'uk-panel-box' );
	beans_add_attribute( 'beans_comment_form_wrap', 'class', 'uk-panel-box' );

	// Remove comments from pages.
	if ( ! is_page() ) {
		return;
	}
	remove_post_type_support( 'page', 'comments' );
}
