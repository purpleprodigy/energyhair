<?php

add_action( 'wp', 'ehc_set_up_footer_structure' );
/**
 * Set up the footer widgets.
 *
 * @since 1.0.0
 *
 * @return void
 */
function ehc_set_up_footer_structure() {
	beans_wrap_markup( 'beans_footer', 'beans_footer_wrapper', 'div', array( 'class' => 'tm-footer-wrapper' ) );

	//Footer Widgets
	beans_add_smart_action( 'beans_footer_wrapper_prepend_markup', 'ehc_display_footer_widgets' );
	/**
	 * Display the 3 footer widgets.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function ehc_display_footer_widgets() {
		if ( ! is_active_sidebar( 'footer-widget-1' ) ) {
			return;
		} ?>
        <div class="tm-content uk-container uk-container-center uk-grid uk-grid-match"
             data-uk-grid-match="{target:'.uk-panel'}">
            <div class="uk-width-large-1-3 uk-width-medium-1-3 uk-width-small-1-1">
				<?php echo beans_widget_area( 'footer-widget-1' ); ?>
            </div>
            <div class="uk-width-large-1-3 uk-width-medium-1-3 uk-width-small-1-1">
				<?php echo beans_widget_area( 'footer-widget-2' ); ?>
            </div>
            <div class="uk-width-large-1-3 uk-width-medium-1-3 uk-width-small-1-1 uk-panel">
				<?php echo beans_widget_area( 'footer-widget-3' ); ?>
            </div>
        </div>
	<?php }
}

// Overwrite the Footer content
beans_modify_action_callback( 'beans_footer_content', 'beans_child_footer_content' );

function beans_child_footer_content() {
	include_once CHILD_THEME_DIR . '/views/footer.php';
}
