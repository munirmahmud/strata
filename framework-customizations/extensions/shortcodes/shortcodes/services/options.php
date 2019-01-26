<?php

if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'style'			 => array(
		'type'		 => 'radio',
		'label'		 => esc_html__( 'Service Style', 'strata' ),
		'desc'		 => esc_html__( 'Which service style you would like to use', 'strata' ),
		'value'		 => '3',
		'choices'	 => array(
			'fin'	 => esc_html__( 'Finances style', 'strata' ),
			'ins'	 => esc_html__( 'Insurance style', 'strata' ),
		),
		'inline'	 => true,
	),
	'posts_per_page' => array(
		'type'		 => 'radio',
		'attr'		 => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		'label'		 => esc_html__( 'Select Post Number', 'strata' ),
		'desc'		 => esc_html__( 'How many post do you show in a row?', 'strata' ),
		'value'		 => '3',
		'choices'	 => array(
			'4'	 => esc_html__( '3', 'strata' ),
			'8'	 => esc_html__( '6', 'strata' ),
			'12' => esc_html__( '9', 'strata' ),
			'-1' => esc_html__( 'all', 'strata' ),
		),
		'inline'	 => true,
	),
);
