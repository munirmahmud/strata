<?php

if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array();

$cfg[ 'page_builder' ] = array(
	'title'			 => esc_html__( 'Slider', 'strata' ),
	'description'	 => esc_html__( 'Add a Slider', 'strata' ),
	'tab'			 => esc_html__( 'Media Elements', 'strata' ),
	'popup_size'	 => 'small',
);
