<?php

beans_remove_action( 'beans_loop_template' );

$ehc_slideshow_enabled = (bool) get_option( 'ehc_slideshow', false );

if ( $ehc_slideshow_enabled ) {
	add_action( 'beans_fixed_wrap[_main]_prepend_markup', 'ehc_home_slider_section' );
	/**
	 * Add slideshow to front page using a category of 'slideshow'.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function ehc_home_slider_section() {
		$query = new WP_Query( array( 'post_type' => 'page', 'post__in' => array( 38, 7, 28, 36, 5 ) ) );

		include_once CHILD_THEME_DIR . '/views/slideshow.php';
	}
}

//Home Widgets
beans_add_smart_action( 'beans_fixed_wrap[_main]_append_markup', 'ehc_display_home_widgets' );
/**
 * Display the home widgets.
 *
 * @since 1.0.0
 *
 * @return void
 */
function ehc_display_home_widgets() {
	if ( ! is_active_sidebar( 'home-left-widget' ) ) {
		return;
	} ?>
    <div class="uk-grid" data-uk-grid-match>
        <div class="uk-width-large-1-3 uk-width-medium-1-3 uk-width-small-1-1">
			<?php echo beans_widget_area( 'home-left-widget' ); ?>
        </div>
        <div class="uk-width-large-1-3 uk-width-medium-1-3 uk-width-small-1-1">
			<?php echo beans_widget_area( 'home-center-widget' ); ?>
        </div>
        <div class="uk-width-large-1-3 uk-width-medium-1-3 uk-width-small-1-1">
			<?php echo beans_widget_area( 'home-right-widget' ); ?>
        </div>
    </div>
	<?php
}

add_action( 'beans_footer_before_markup', 'pp_view_pre_footer_content' );
/**
 * Add area for before the footer content.
 *
 * @since 1.0.0
 *
 * @return void
 */
function pp_view_pre_footer_content() {
	include_once CHILD_THEME_DIR . '/views/pre-footer.php';
}

beans_load_document();
