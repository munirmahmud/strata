<?php

if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'contact_info_picker' => array(
		'type'			 => 'multi-picker',
		'label'			 => false,
		'desc'			 => false,
		'picker'		 => array(
			'contact_info_style' => array(
				'label'		 => esc_html__( 'Contact info Style', 'strata' ),
				'desc'		 => esc_html__( 'Choose contact style', 'strata' ),
				'type'		 => 'image-picker',
				'value'		 => 'contact_info-1',
				'choices'	 => array(
					'contact_info-1'	 => array(
						'small'	 => array(
							'height' => 70,
							'src'	 => STRATA_IMAGES . '/image-picker/features-style1.png'
						),
						'large'	 => array(
							'height' => 208,
							'src'	 => STRATA_IMAGES . '/image-picker/features-style1.png'
						),
					),
					'contact_info-2'	 => array(
						'small'	 => array(
							'height' => 70,
							'src'	 => STRATA_IMAGES . '/image-picker/features-style1.png'
						),
						'large'	 => array(
							'height' => 208,
							'src'	 => STRATA_IMAGES . '/image-picker/features-style1.png'
						),
					),
				),
			),
		),
		'choices'		 => array(
			'contact_info-1'	 => array(
				'icon' => array(
					'type'	 => 'new-icon',
					'value'	 => 'fa fa-heart-o',
					'label'	 => esc_html__( 'Contact Icon', 'strata' ),
				)
			),
			'contact_info-2'	 => array(
				'icon' => array(
					'type'	 => 'new-icon',
					'value'	 => 'fa fa-heart-o',
					'label'	 => esc_html__( 'Contact Icon', 'strata' ),
				),
			),
		),
		'show_borders'	 => false,
	),
	'title'			 => array(
		'type'	 => 'text',
		'value'	 => esc_html__( 'Find Us', 'strata' ),
		'label'	 => esc_html__( 'Title of the Box', 'strata' ),
	),
	'content'		 => array(
		'label'	 => esc_html__( 'Box Description', 'strata' ),
		'desc'	 => esc_html__( 'Add the box description text', 'strata' ),
		'type'	 => 'textarea',
		'value'	 => esc_html__( 'Bras urna felis accumsan at ultrde cesid posuere masa socis nautoque penat', 'strata' )
	),
	'class' => array(
        'label' => esc_html__('Custom Class', 'strata'),
        'desc' => esc_html__('Enter custom CSS class', 'strata'),
        'help' => esc_html__('you can use this options to add a class and further style the shortcode by adding your custom CSS in the style.css file. This file is located on your server in the /themespry-child/style.css', 'strata'),
        'type' => 'text',
        'value' => '',
    ),
);
