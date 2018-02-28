<?php

add_action( 'after_setup_theme', 'ehc_set_up_child_theme' );
/**
 * Set up the child theme.
 *
 * @since 1.0.0
 *
 * @return void
 */
function ehc_set_up_child_theme() {
	ehc_add_new_image_sizes();
}

/**
 * Add new image sizes.
 *
 * @since 1.0.0
 *
 * @return void
 */
function ehc_add_new_image_sizes() {
	$config = array(
		'featured-image' => array(
			'width'  => 720,
			'height' => 400,
			'crop'   => true,
		),
		'home-widget' => array(
			'width'  => 480,
			'height' => 480,
			'crop'   => true,
		),
		'slideshow' => array(
			'width'  => 1144,
			'height' => 763,
			'crop'   => true,
		),
	);
	foreach ( $config as $name => $args ) {
		$crop = array_key_exists( 'crop', $args ) ? $args['crop'] : false;

		add_image_size( $name, $args['width'], $args['height'], $crop );
	}
}

add_filter( 'beans_edit_post_image_args', 'ehc_post_image_edit_args' );

function ehc_post_image_edit_args( $args ) {

	return array_merge( $args, array(
		'resize' => array( 400, 300, true ),
	) );

}