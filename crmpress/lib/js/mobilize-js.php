<?php
/**
 *
 * This file mobilizes all the JavaScript used within the CRM Press theme.
 *
 * @package CRM Press
 *
 */

add_action( 'init', 'crmpress_load_jquery', 9 );
/**
 *
 * This function loads jQuery from Google instead of from the installed WordPress library.
 *
 * @since 1.0
 *
 */
function crmpress_load_jquery() {

	if ( !is_admin() ) {
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js', false );
		wp_enqueue_script( 'jquery' );
	}
	
}