<?php
/*
Template Name: Salon Gallery
*/

//Remove featured image
beans_remove_action( 'beans_post_image' );

add_action( 'beans_post_body', 'ehc_salon_gallery' );
/**
 * Add slideshow to the Salon Gallery page using a category of 'salon-gallery'.
 *
 * @since 1.0.0
 *
 * @return void
 */
function ehc_salon_gallery() {
	$query = new WP_Query( array(
		'category_name'  => 'salon-gallery',
		'paged'          => get_query_var( 'paged' ),
		'nopaging'       => false,
		'posts_per_page' => 50
	) );

	include_once CHILD_THEME_DIR . '/views/salon-gallery.php';
}

beans_load_document();
