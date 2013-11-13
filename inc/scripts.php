<?php
/**
 *  Enqueue scripts and styles
 *
 * @package Starter
 */
 
function starter_scripts() {

	wp_enqueue_style( 'starter-style', get_template_directory_uri() . '/assets/css/app.css', array(), '0.0.1' );

	wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js' );

	wp_enqueue_script( 'alpha-bootstrap', get_template_directory_uri() . '/assets/js/scripts.js', array(), '0.0.1', true );

	wp_enqueue_script( 'alpha-custom', get_template_directory_uri() . '/assets/js/custom.js', array(), '0.0.1', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
}

add_action( 'wp_enqueue_scripts', 'starter_scripts' );