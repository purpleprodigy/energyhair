<?php

add_action( 'admin_init', 'ehc_beans_child_options' );
/**
 * Add Options in Beans Settings.
 *
 * @since 1.0.0
 *
 * @return void
 */
function ehc_beans_child_options() {
	$fields = array(
		array(
			'id'          => 'css_dev_mode',
			'label'       => 'CSS dev mode',
			'description' => __( 'Check this if you want to use your own compiler during development in
			order to display source maps. Uncheck this in production.', CHILD_TEXT_DOMAIN ),
			'type'        => 'checkbox',
			'default'     => false
		),
		array(
			'id'          => 'ehc_slideshow',
			'label'       => 'Slideshow',
			'description' => __( 'Check this if you want display a slideshow on your home page. To use the slideshow option, add required images to the featured image of individual posts using the slideshow category.', CHILD_TEXT_DOMAIN ),
			'type'        => 'checkbox',
			'default'     => false
		),
	);

	beans_register_options( $fields, 'beans_settings', 'options', array( 'title' => 'Purple Prodigy Child Theme Options' ) );
}
