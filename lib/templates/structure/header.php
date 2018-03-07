<?php

add_action( 'wp', 'ehc_set_up_header_structure' );
/**
 * Set up the header structure.
 *
 * @since 1.0.0
 *
 * @return void
 */
function ehc_set_up_header_structure() {
	// Remove Tagline
	beans_remove_action( 'beans_site_title_tag' );

	// Remove Breadcrumbs
	beans_remove_action( 'beans_breadcrumb' );

	// Display header right widget
	add_action( 'beans_header', 'ehc_display_header_right_widget' );

	beans_remove_attribute( 'beans_widget_panel_above-header-widget', 'class', 'uk-panel-box' );
	beans_add_attribute( 'beans_widget_panel_above-header-widget', 'class', 'uk-hidden-small' );
}

/**
 * Display header right widget.
 *
 * @since 1.0.0
 *
 * @return void
 */
function ehc_display_header_right_widget() {
	if ( ! is_active_sidebar( 'header-right-widget' ) ) {
		return;
	} ?>

    <div class="header-right-widget">
		<?php echo beans_widget_area( 'header-right-widget' ); ?>
    </div>
<?php }
