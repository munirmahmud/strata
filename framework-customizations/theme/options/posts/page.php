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
			),
			'header_image'	 => array(
				'label'	 => esc_html__( ' Banner Image', 'strata' ),
				'desc'	 => esc_html__( 'Upload a Page header image', 'strata' ),
				'help'	 => esc_html__( "This default header image will be used for all your Service.", 'strata' ),
				'type'	 => 'upload'
			),
			'overlay'		 => array(
				'type'		 => 'rgba-color-picker',
				'value'		 => '',
				// palette colors array
				'label'		 => esc_html__( 'Overlay', 'strata' ),
				'desc'		 => esc_html__( 'This is optional Overlay', 'strata' ),
			),
		),
	),
);
