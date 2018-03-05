<?php

//* Add Custom Favicon
function pp_add_custom_favicon() {
    ?>
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo CHILD_IMG ?>apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo CHILD_IMG ?>apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo CHILD_IMG ?>apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo CHILD_IMG ?>apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo CHILD_IMG ?>apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo CHILD_IMG ?>apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo CHILD_IMG ?>apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" href="<?php echo CHILD_IMG ?>apple-touch-icon.png">
	<?php
}
add_action( 'wp_head', 'pp_add_custom_favicon' );
