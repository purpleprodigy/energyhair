<?php

/**
 * Load non admin files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function ehc_load_nonadmin_files() {
	$filenames = array(
		'setup.php',
		'functions/enqueue-assets.php',
		'functions/helper-functions.php',
		'functions/register-widgets.php',
		'templates/structure/archive.php',
		'templates/structure/header.php',
		'templates/structure/post.php',
		'templates/structure/sidebar.php',
		'templates/structure/menu.php',
		'templates/structure/footer.php',
		'functions/social.php',
	);
	ehc_load_specified_files( $filenames );
}

/**
 * Load admin files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function ehc_load_admin_files() {
	$filenames = array(
		'admin/options.php',
	);
	ehc_load_specified_files( $filenames );
}

/**
 * Load each of the specified files.
 *
 * @since 1.0.0
 *
 * @param array $filenames
 * @param string $folder_root
 *
 * @return void
 */
function ehc_load_specified_files( array $filenames, $folder_root = '' ) {
	$folder_root = $folder_root ?: CHILD_LIB;
	foreach ( $filenames as $filename ) {
		include( $folder_root . $filename );
	}
}

ehc_load_nonadmin_files();
ehc_load_admin_files();
