<?php

add_action( 'widgets_init', 'ehc_remove_sidebars' );
/**
 * Unregister primary and secondary sidebars.
 *
 * @since 1.0.0
 *
 * @return void
 */
function ehc_remove_sidebars() {
	beans_deregister_widget_area( 'sidebar_primary' );
	beans_deregister_widget_area( 'sidebar_secondary' );
}
