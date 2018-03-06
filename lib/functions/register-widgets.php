<?php

add_action( 'widgets_init', 'ehc_register_widget_areas' );
/**
 * Register the widget areas.
 *
 * @since 1.0.0
 *
 * @return void
 */
function ehc_register_widget_areas() {
	$widgets_areas = array(
		array(
			'name'        => __( 'Header Right', CHILD_TEXT_DOMAIN ),
			'id'          => 'header-right-widget',
			'beans_type'  => 'grid',
			'description' => __( 'This is the widget area for the right of the header.', CHILD_TEXT_DOMAIN )
		),
		array(
			'name'        => __( 'Home Left', CHILD_TEXT_DOMAIN ),
			'id'          => 'home-left-widget',
			'beans_type'  => 'grid',
			'description' => __( 'This is the left widget area for the Home page.', CHILD_TEXT_DOMAIN )
		),
		array(
			'name'        => __( 'Home Center', CHILD_TEXT_DOMAIN ),
			'id'          => 'home-center-widget',
			'beans_type'  => 'grid',
			'description' => __( 'This is the center widget area for the Home page.', CHILD_TEXT_DOMAIN )
		),
		array(
			'name'        => __( 'Home Right', CHILD_TEXT_DOMAIN ),
			'id'          => 'home-right-widget',
			'beans_type'  => 'grid',
			'description' => __( 'This is the right widget area for the Home page.', CHILD_TEXT_DOMAIN )
		),
		array(
			'name'        => __( 'Footer Widget 1', CHILD_TEXT_DOMAIN ),
			'id'          => 'footer-widget-1',
			'beans_type'  => 'grid',
			'description' => __( 'This is the widget area for footer widget 1.', CHILD_TEXT_DOMAIN )
		),
		array(
			'name'        => __( 'Footer Widget 2', CHILD_TEXT_DOMAIN ),
			'id'          => 'footer-widget-2',
			'beans_type'  => 'grid',
			'description' => __( 'This is the widget area for footer widget 3.', CHILD_TEXT_DOMAIN )
		),
		array(
			'name'        => __( 'Footer Widget 3', CHILD_TEXT_DOMAIN ),
			'id'          => 'footer-widget-3',
			'beans_type'  => 'grid',
			'description' => __( 'This is the widget area for footer widget 3.', CHILD_TEXT_DOMAIN )
		),
	);

	foreach ( $widgets_areas as $widget_area ) {
		beans_register_widget_area( $widget_area );
	}
}
