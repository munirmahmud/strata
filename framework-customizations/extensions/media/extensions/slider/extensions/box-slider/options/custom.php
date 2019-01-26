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
		'desc'	 => esc_html__( 'To Change Your World', 'strata' ),
		'type'	 => 'text',
		'value'	 => esc_html__( 'What you do today', 'strata' )
	),
	'slider_desc'		 => array(
		'label'	 => esc_html__( 'Descriptions', 'strata' ),
		'desc'	 => esc_html__( 'This is the text that appears on your button', 'strata' ),
		'type'	 => 'textarea',
		'value'	 => esc_html__( 'You have ideas, goals, and dreams. We have a culturally diverse, forward thinking team looking for talent like.', 'strata' )
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
							'src'	 => STRATA_IMAGES . '/image-picker/button/button2.png'
						),
						'large'	 => array(
							'height' => 208,
							'src'	 => STRATA_IMAGES . '/image-picker/button/button2.png'
						),
					),
					'default'	 => array(
						'small'	 => array(
							'height' => 70,
							'src'	 => STRATA_IMAGES . '/image-picker/button/button1.png'
						),
						'large'	 => array(
							'height' => 208,
							'src'	 => STRATA_IMAGES . '/image-picker/button/button1.png'
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
		)
	),
);
