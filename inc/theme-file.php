<?php

if ( !defined( 'ABSPATH' ) )
	die( 'Direct access forbidden.' );
/**
 * Enqueue all theme scripts and styles
 *

  /** --------------------------------------
 * ** REGISTERING THEME ASSETS
 * ** ------------------------------------ */
/**
 * Enqueue styles.
 */
if ( !is_admin() ) {

	wp_enqueue_style( 'bootstrap', STRATA_CSS . '/bootstrap.min.css', null, STRATA_VERSION );
	wp_enqueue_style( 'animate', STRATA_CSS . '/animate.min.css', null, STRATA_VERSION );
	wp_enqueue_style( 'owl-carousel', STRATA_CSS . '/owl.carousel.css', null, STRATA_VERSION );
	wp_enqueue_style( 'slick', STRATA_CSS . '/slick.css', null, STRATA_VERSION );
	wp_enqueue_style( 'slicknav', STRATA_CSS . '/slicknav.min.css', null, STRATA_VERSION );
	wp_enqueue_style( 'slick-theme', STRATA_CSS . '/slick-theme.css', null, STRATA_VERSION );
	wp_enqueue_style( 'font-awesome', STRATA_CSS . '/font-awesome.min.css', null, STRATA_VERSION );
	wp_enqueue_style( 'icon-font', STRATA_CSS . '/icofont.css', null, STRATA_VERSION );
	wp_enqueue_style( 'icofont', STRATA_CSS . '/icon-font.css', null, STRATA_VERSION );
	wp_enqueue_style( 'jquery-lineProgressbar', STRATA_CSS . '/jquery.lineProgressbar.min.css', null, STRATA_VERSION );
	wp_enqueue_style( 'owl-theme', STRATA_CSS . '/owl.theme.default.css', null, STRATA_VERSION );
	wp_enqueue_style( 'magnific-popup', STRATA_CSS . '/magnific-popup.css', null, STRATA_VERSION );


	wp_enqueue_style( 'blog-style', STRATA_CSS . '/blog-style.css', microtime(), STRATA_VERSION );
	wp_enqueue_style( 'theme-style', STRATA_CSS . '/style.css', microtime(), STRATA_VERSION );
	wp_enqueue_style( 'responsive', STRATA_CSS . '/responsive.css', microtime(), STRATA_VERSION );

    // Theme stylesheet.
    wp_enqueue_style( 'strata-style', get_stylesheet_uri() );

}



/**
 * Enqueue scripts.
 */
if ( !is_admin() ) {
	// wp_enqueue_script() syntax, $handle, $src, $deps, $version, $in_footer(boolean)

	//Bootstrap Main JS
	wp_enqueue_script( 'bootstrap', STRATA_SCRIPTS . '/bootstrap.min.js', array( 'jquery' ), STRATA_VERSION, true );
	wp_enqueue_script( 'jquery-parallax', STRATA_SCRIPTS . '/jquery.parallax-1.1.3.js', array( 'jquery' ), STRATA_VERSION, true );
	wp_enqueue_script( 'slick-min', STRATA_SCRIPTS . '/slick.min.js', array( 'jquery' ), STRATA_VERSION, true );
	wp_enqueue_script( 'magnific-popup', STRATA_SCRIPTS . '/jquery.magnific-popup.min.js', array( 'jquery' ), STRATA_VERSION, true );
	wp_enqueue_script( 'isotope', STRATA_SCRIPTS . '/isotope.js', array( 'jquery' ), STRATA_VERSION, true );
	wp_enqueue_script( 'owl-carousel', STRATA_SCRIPTS . '/owl.carousel.min.js', array( 'jquery' ), STRATA_VERSION, true );
	wp_enqueue_script( 'jquery-waypoints', STRATA_SCRIPTS . '/jquery.waypoints.min.js', array( 'jquery' ), STRATA_VERSION, true );
	wp_enqueue_script( 'lineProgressbar', STRATA_SCRIPTS . '/jquery.lineProgressbar.js', array( 'jquery' ), STRATA_VERSION, true );
	wp_enqueue_script( 'jquery-counterup', STRATA_SCRIPTS . '/jquery.counterup.min.js', array( 'jquery' ), STRATA_VERSION, true );
	wp_enqueue_script( 'slicknav', STRATA_SCRIPTS . '/jquery.slicknav.min.js', array( 'jquery' ), STRATA_VERSION, true );
	wp_enqueue_script( 'gmap3', STRATA_SCRIPTS . '/gmap3.min.js', array( 'jquery' ), STRATA_VERSION, true );
	wp_enqueue_script( 'tweetie', STRATA_SCRIPTS . '/tweetie.js', array( 'jquery' ), STRATA_VERSION, true );

    if( defined( 'FW') ) :
        $map_api_code = fw_get_db_customizer_option('tp_google_api');
        $api_key		 = ($map_api_code != '') ? '?key=' . $map_api_code : '';
    endif;

    if(!empty($api_key)){
        wp_enqueue_script( 'map-googleapis', '//maps.googleapis.com/maps/api/js' . $api_key, array( 'jquery' ), '', TRUE );
    }

	wp_enqueue_script( 'theme-custom', STRATA_SCRIPTS . '/main.js', array( 'jquery' ), STRATA_VERSION, true );


	// Load WordPress Comment js
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}


