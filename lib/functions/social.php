<?php

add_action( 'beans_primary_menu_append_markup', 'ehc_add_menu_items' );
/**
 * Add social media items to menu.
 *
 * @since 1.0.0
 *
 * @return void
 */
function ehc_add_menu_items() {
    ?>
    <div class="uk-float-right uk-margin-left">
	    <a href="https://www.facebook.com/EnergyHairCo" class="uk-icon-button uk-button-primary uk-icon-hover uk-icon-facebook uk-margin-small-left"></a>
        <a href="https://www.instagram.com/energyhairconoosa/" class="uk-icon-button uk-button-primary uk-icon-instagram  uk-margin-small-left"></a>
    </div>
    <?php
}
