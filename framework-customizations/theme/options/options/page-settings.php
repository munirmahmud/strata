<?php

if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'page_settings' => array(
		'title'		 => esc_html__( 'Banner Settings', 'strata' ),
		'type'		 => 'tab',
		'options'	 => array(
			'header-page-box' => array(
				'title'		 => esc_html__( 'Banner Settings', 'strata' ),
				'type'		 => 'box',
				'options'	 => array(
					'global_header_image'	 => array(
						'label'	 => esc_html__( 'Page Header Image', 'strata' ),
						'desc'	 => esc_html__( 'Upload a Page header image', 'strata' ),
						'help'	 => esc_html__( 'This default header image will be used for all your Page.', 'strata' ),
						'type'	 => 'upload'
					),
					'global_header_title'	 => array(
						'type'	 => 'text',
						'label'	 => esc_html__( ' Header Title', 'strata' ),
						'value'	 => esc_html__( 'Strata', 'strata' ),
						'desc'	 => esc_html__( 'Add your portfolio hero title', 'strata' )
					),
					'breadcrumb'		 => array(
						'type'			 => 'switch',
						'label'			 => esc_html__( 'Breadcrumb', 'strata' ),
						'desc'			 => esc_html__( 'Are you want to disable  breadcrumb?', 'strata' ),
						'value'			 => 'no',
						'right-choice'	 => array(
							'value'	 => 'yes',
							'label'	 => esc_html__( 'Yes', 'strata' ),
						),
						'left-choice'	 => array(
							'value'	 => 'no',
							'label'	 => esc_html__( 'No', 'strata' ),
						),
					),
				)
			),
		),
	),
);
