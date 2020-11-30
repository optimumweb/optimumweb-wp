<?php

function enqueue() {
	if ( ! is_admin() ) {
	    // libs
	    wpbp_enqueue_lib( array( 'modernizr', 'jquery', 'wpbp' ) );
		// scripts
		wp_enqueue_script( 'theme', THEME_URI . '/js/scripts.js', array( 'jquery' ) );
		// styles
        wp_enqueue_style ( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,700;1,400&display=swap' );
		wp_enqueue_style( 'theme', THEME_URI . '/css/master.css', array( 'wpbp' ) );
	}
}
add_action( 'init', 'enqueue' );

wpbp_register_sidebars( array( 'Header CTA', 'Front Page Hero' ) );

register_nav_menus( array(
    'header_cta_navigation' => __("Header CTA Navigation", 'optimumweb-wp'),
) );
