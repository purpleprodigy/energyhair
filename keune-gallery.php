<?php
/*
Template Name: Keune Gallery
*/

add_action( 'beans_post_body', 'ehc_keune_gallery' );
/**
 * Add slideshow to the Keune Gallery page using a category of 'keune-gallery'.
 *
 * @since 1.0.0
 *
 * @return void
 */
function ehc_keune_gallery() {
	$query = new WP_Query( array(
		'category_name'  => 'keune-gallery',
		'paged'          => get_query_var( 'paged' ),
		'nopaging'       => false,
		'posts_per_page' => 50
	) );

	include_once CHILD_THEME_DIR . '/views/keune-gallery.php';
}

beans_load_document();
