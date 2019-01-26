<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array();

$cfg['page_builder'] = array(
	'title'       => esc_html__( 'Map', 'strata' ),
	'description' => esc_html__( 'Add a Map', 'strata' ),
	'tab'         => esc_html__( 'Content Elements', 'strata' )
);