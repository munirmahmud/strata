<?php

if ( !defined( 'FW' ) )
	die( 'Forbidden' );

$options = array(
	'funfact_style_settings' => array(
		'type'			 => 'multi-picker',
		'label'			 => false,
		'desc'			 => false,
		'picker'		 => array(
			'funfact_style' => array(
				'label'		 => esc_html__( 'Funfact Style', 'strata' ),
				'type'		 => 'image-picker',
				'value'		 => 'funfact-1',
				'desc'		 => false,
				'choices'	 => array(
					'funfact-1'	 => array(
						'small'	 => array(
							'height' => 70,
							'src'	 => STRATA_IMAGES . '/image-picker/fact/fact1.png'
						),
						'large'	 => array(
							'height' => 214,
							'src'	 => STRATA_IMAGES . '/image-picker/fact/fact1.png'
						),
					),
					'funfact-2'	 => array(
						'small'	 => array(
							'height' => 70,
							'src'	 => STRATA_IMAGES . '/image-picker/fact/fact2.png'
						),
						'large'	 => array(
							'height' => 214,
							'src'	 => STRATA_IMAGES . '/image-picker/fact/fact2.png'
						),
					),
					'funfact-3'	 => array(
						'small'	 => array(
							'height' => 70,
							'src'	 => STRATA_IMAGES . '/image-picker/fact/fact3.png'
						),
						'large'	 => array(
							'height' => 214,
							'src'	 => STRATA_IMAGES . '/image-picker/fact/fact3.png'
						),
					),
				),
			),
		),
		'choices'		 => array(
			'funfact-1'	 => array(
				'show-in-row'	 => array(
					'type'			 => 'short-select',
					'value'			 => '2',
					'label'			 => esc_html__( 'Show in row', 'strata' ),
					'desc'			 => esc_html__( 'Show in single row. If you select 2 only two will be show in single row.and rest will be show in next row.', 'strata' ),
					'choices'		 => array(
						'2'	 => esc_html__( 'Two', 'strata' ),
						'3'	 => esc_html__( 'Three', 'strata' ),
						'4'	 => esc_html__( 'Four', 'strata' ),
					),
					'no-validate'	 => false,
				),
				'funfact-loop'	 => array(
					'type'				 => 'addable-popup',
					'label'				 => esc_html__( 'Funfact', 'strata' ),
					'desc'				 => esc_html__( 'Funfact will be load with one column.', 'strata' ),
					'template'			 => '{{- title }}',
					'popup-title'		 => null,
					'size'				 => 'small', // small, medium, large
					'add-button-text'	 => esc_html__( 'Add funfact', 'strata' ),
					'sortable'			 => true,
					'popup-options'		 => array(
						'title'	 => array(
							'type'	 => 'text',
							'label'	 => esc_html__( 'Title', 'strata' ),
							'value'	 => esc_html__( 'Clients', 'strata' ),
						),
						'number' => array(
							'type'	 => 'text',
							'label'	 => esc_html__( 'Number', 'strata' ),
							'value'	 => esc_html__( '1200', 'strata' ),
						),
						'icon'	 => array(
							'type'	 => 'new-icon',
							'label'	 => esc_html__( 'Icon', 'strata' ),
							'value'	 => esc_html__( 'ti-user', 'strata' ),
						),
					),
				),
			),
			
			'funfact-2'	 => array(
				'title'	 => array(
					'type'	 => 'text',
					'label'	 => esc_html__( 'Title', 'strata' ),
					'value'	 => esc_html__( 'Clients', 'strata' ),
				),
				'number' => array(
					'type'	 => 'text',
					'label'	 => esc_html__( 'Number', 'strata' ),
					'value'	 => esc_html__( '1200', 'strata' ),
				),
				'icon'	 => array(
					'type'	 => 'new-icon',
					'label'	 => esc_html__( 'Icon', 'strata' ),
					'value'	 => esc_html__( 'icon icon-pie-chart2', 'strata' ),
				),
			),
			'funfact-3'	 => array(
				'show-in-row'	 => array(
					'type'			 => 'short-select',
					'value'			 => '2',
					'label'			 => esc_html__( 'Show in row', 'strata' ),
					'desc'			 => esc_html__( 'Show in single row. If you select 2 only two will be show in single row.and rest will be show in next row.', 'strata' ),
					'choices'		 => array(
						'2'	 => esc_html__( 'Two', 'strata' ),
						'3'	 => esc_html__( 'Three', 'strata' ),
						'4'	 => esc_html__( 'Four', 'strata' ),
					),
					'no-validate'	 => false,
				),
				'funfact-loop'	 => array(
					'type'				 => 'addable-popup',
					'label'				 => esc_html__( 'Funfact', 'strata' ),
					'desc'				 => esc_html__( 'Funfact will be load with one column.', 'strata' ),
					'template'			 => '{{- title }}',
					'popup-title'		 => null,
					'size'				 => 'small', // small, medium, large
					'add-button-text'	 => esc_html__( 'Add funfact', 'strata' ),
					'sortable'			 => true,
					'popup-options'		 => array(
						'title'	 => array(
							'type'	 => 'text',
							'label'	 => esc_html__( 'Title', 'strata' ),
							'value'	 => esc_html__( 'Clients', 'strata' ),
						),
						'number' => array(
							'type'	 => 'text',
							'label'	 => esc_html__( 'Number', 'strata' ),
							'value'	 => esc_html__( '1200', 'strata' ),
						),
						'icon'	 => array(
							'type'	 => 'new-icon',
							'label'	 => esc_html__( 'Icon', 'strata' ),
							'value'	 => esc_html__( 'ti-user', 'strata' ),
						),
					),
				),
			),
		),
		'show_borders'	 => false,
	),
);
