<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array();

$cfg['page_builder'] = array(
	'title'       => esc_html__( 'Pricing Table', 'strata' ),
	'description' => esc_html__( 'Add a Table', 'strata' ),
	'tab'         => esc_html__( 'Content Elements', 'strata' ),
	'popup_size'  => 'large'
);