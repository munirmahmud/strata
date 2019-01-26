<?php

if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/*
 * {population-method}.php - extra options for concrete population method,
 *  shown after default options on edit slider page.
 *
 */
$options = array(
	'slider_subtitle'	 => array(
		'label'	 => esc_html__( 'Subtitle', 'strata' ),
		'desc'	 => esc_html__( 'This is the text that appears on your slider subtitle', 'strata' ),
		'type'	 => 'text',
		'value'	 => esc_html__( 'What you do today', 'strata' )
	),
	'slider_desc'		 => array(
		'label'	 => esc_html__( 'Descriptions', 'strata' ),
		'desc'	 => esc_html__( 'This is the text that appears on your button', 'strata' ),
		'type'	 => 'textarea',
		'value'	 => esc_html__( 'Nobody"s more committed to connecting you with the exceptional', 'strata' )
	),
	'button_settings'	 => array(
		'type'				 => 'addable-popup',
		'size'				 => 'large',
		'label'				 => esc_html__( 'Button', 'strata' ),
		'add-button-text'	 => esc_html__( 'Add Button', 'strata' ),
		'desc'				 => esc_html__( 'Add your slider button', 'strata' ),
		'template'			 => 'Button : {{- label }}',
		'popup-options'		 => array(
			'style'			 => array(
				'label'		 => esc_html__( 'Style', 'strata' ),
				'desc'		 => esc_html__( 'Choose button style', 'strata' ),
				'type'		 => 'image-picker',
				'value'		 => '',
				'choices'	 => array(
					'primary'	 => array(
						'small'	 => array(
							'height' => 70,
							'src'	 => STRATA_IMAGES . '/image-picker/button-style2.png'
						),
						'large'	 => array(
							'height' => 208,
							'src'	 => STRATA_IMAGES . '/image-picker/button-style2.png'
						),
					),
					'default'	 => array(
						'small'	 => array(
							'height' => 70,
							'src'	 => STRATA_IMAGES . '/image-picker/button-style3.png'
						),
						'large'	 => array(
							'height' => 208,
							'src'	 => STRATA_IMAGES . '/image-picker/button-style3.png'
						),
					),
				),
			),
			'label'			 => array(
				'label'	 => esc_html__( 'Button Label', 'strata' ),
				'desc'	 => esc_html__( 'This is the text that appears on your button', 'strata' ),
				'type'	 => 'text',
				'value'	 => esc_html__( 'Our Services', 'strata' )
			),
			'link'			 => array(
				'label'	 => esc_html__( 'Button Link', 'strata' ),
				'desc'	 => esc_html__( 'Where should your button link to', 'strata' ),
				'type'	 => 'text',
				'value'	 => '#'
			),
			'target'		 => array(
				'type'			 => 'switch',
				'label'			 => esc_html__( 'Open Link in New Window', 'strata' ),
				'desc'			 => esc_html__( 'Select here if you want to open the linked page in a new window', 'strata' ),
				'right-choice'	 => array(
					'value'	 => '_blank',
					'label'	 => esc_html__( 'Yes', 'strata' ),
				),
				'left-choice'	 => array(
					'value'	 => '_self',
					'label'	 => esc_html__( 'No', 'strata' ),
				),
			),
			'btn_icon_group' => array(
				'type'		 => 'group',
				'options'	 => array(
					'icon'			 => array(
						'type'	 => 'new-icon',
						'label'	 => esc_html__( 'Icon', 'strata' )
					),
					'icon_position'	 => array(
						'type'			 => 'switch',
						'label'			 => esc_html__( '', 'strata' ),
						'desc'			 => esc_html__( 'Choose the icon position', 'strata' ),
						'right-choice'	 => array(
							'value'	 => 'pull-right',
							'label'	 => esc_html__( 'Right', 'strata' ),
						),
						'left-choice'	 => array(
							'value'	 => '',
							'label'	 => esc_html__( 'Left', 'strata' ),
						),
					),
				)
			)
		)
	),
	'slider_align'			 => array(
		'label'		 => esc_html__( 'Alignment', 'strata' ),
		'desc'		 => esc_html__( 'Select the alignment for your Slide', 'strata' ),
		'attr'		 => array( 'class' => 'fw-checkbox-float-left' ),
		'type'		 => 'radio',
		'choices'	 => array(
			'text-left'		 => esc_html__( 'Left', 'strata' ),
			'text-center'	 => esc_html__( 'Center', 'strata' ),
			'text-right'	 => esc_html__( 'Right', 'strata' ),
		),
		'value'		 => 'left'
	),
);
