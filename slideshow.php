<?php
/*
Template Name: Slideshow
*/

//Remove post title and featured image
beans_remove_action( 'beans_post_title' );
beans_remove_action( 'beans_post_image' );

beans_load_document();
