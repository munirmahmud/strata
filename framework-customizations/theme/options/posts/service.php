<?php

if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'side' => array(
		'title'		 => esc_html__( 'Page Settings', 'strata' ),
		'type'		 => 'box',
		'priority'	 => 'high',
		'options'	 => array(
			'header_title'	 => array(
				'type'	 => 'text',
				'label'	 => esc_html__( 'Banner title', 'strata' ),
				'desc'	 => esc_html__( 'Add your Service hero title', 'strata' ),
				'value'	 => esc_html__( 'Our Services', 'strata' ),
			),
			'header_image'	 => array(
				'label'	 => esc_html__( ' Banner Image', 'strata' ),
				'desc'	 => esc_html__( 'Upload a Page header image', 'strata' ),
				'help'	 => esc_html__( "This default header image will be used for all your Service.", 'strata' ),
				'type'	 => 'upload'
			),
			'service_icon'			 => array(
				'type'	 => 'new-icon',
				'label'	 => esc_html__( 'Side Icon', 'strata' ),
				'value'	 => esc_html__( 'icon icon-pie-chart2', 'strata' ),
			),
		),
	),
);
