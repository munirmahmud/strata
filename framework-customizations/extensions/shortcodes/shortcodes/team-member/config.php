<?php

if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array(
	'page_builder' => array(
		'title'			 => esc_html__( 'Team Member', 'strata' ),
		'description'	 => esc_html__( 'Add a Team Member', 'strata' ),
		'tab'			 => esc_html__( 'Content Elements', 'strata' ),
		'popup_size'	 => 'medium',
		'title_template' => '{{- title }} {{ if (o.title) { }} : {{= o.title}}{{ } }}',
	)
);
