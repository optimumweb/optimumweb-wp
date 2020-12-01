<?php

function enqueue() {
	if ( ! is_admin() ) {
	    // libs
	    wpbp_enqueue_lib( array( 'modernizr', 'jquery', 'wpbp', 'aos' ) );
		// scripts
		wp_enqueue_script( 'theme', THEME_URI . '/js/scripts.js', array( 'jquery' ) );
		// styles
        wp_enqueue_style ( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,700;1,400&display=swap' );
		wp_enqueue_style( 'theme', THEME_URI . '/css/master.css', array( 'wpbp' ) );
	}
}
add_action( 'init', 'enqueue' );

wpbp_register_sidebars( array( 'Front Page Hero' ) );

register_nav_menus( array(
    'header_cta_navigation' => __("Header CTA Navigation", 'optimumweb-wp'),
) );

// AOS fix
add_action('wpbp_head', 'insert_aos_fix');
function insert_aos_fix()
{ ?>
    <noscript>
        <style type="text/css">
            [data-aos] {
                opacity: 1 !important;
                transform: translate(0) scale(1) !important;
            }
        </style>
    </noscript>

    <style type="text/css">
        @media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
            [data-aos] {
                opacity: 1 !important;
                transform: translate(0) scale(1) !important;
            }
        }
    </style>
<?php }
