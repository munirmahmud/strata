<?php

if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'feature-picker' => array(
		'type'			 => 'multi-picker',
		'label'			 => false,
		'desc'			 => false,
		'picker'		 => array(
			'features_style' => array(
				'label'		 => esc_html__( 'Feature Style', 'strata' ),
				'desc'		 => esc_html__( 'Choose feature style', 'strata' ),
				'type'		 => 'image-picker',
				'value'		 => 'feature-1',
				'choices'	 => array(
					'feature-1'	 => array(
						'small'	 => array(
							'height' => 70,
							'src'	 => STRATA_IMAGES . '/image-picker/feature/feature1.png'
						),
						'large'	 => array(
							'height' => 208,
							'src'	 => STRATA_IMAGES . '/image-picker/feature/feature1.png'
						),
					),
					'feature-2'	 => array(
						'small'	 => array(
							'height' => 70,
							'src'	 => STRATA_IMAGES . '/image-picker/feature/feature2.png'
						),
						'large'	 => array(
							'height' => 208,
							'src'	 => STRATA_IMAGES . '/image-picker/feature/feature2.png'
						),
					),
					'feature-3'	 => array(
						'small'	 => array(
							'height' => 70,
							'src'	 => STRATA_IMAGES . '/image-picker/feature/feature3.png'
						),
						'large'	 => array(
							'height' => 208,
							'src'	 => STRATA_IMAGES . '/image-picker/feature/feature3.png'
						),
					),
					'feature-4'	 => array(
						'small'	 => array(
							'height' => 70,
							'src'	 => STRATA_IMAGES . '/image-picker/feature/feature4.png'
						),
						'large'	 => array(
							'height' => 208,
							'src'	 => STRATA_IMAGES . '/image-picker/feature/feature4.png'
						),
					),
					'feature-5'	 => array(
						'small'	 => array(
							'height' => 70,
							'src'	 => STRATA_IMAGES . '/image-picker/feature/feature5.png'
						),
						'large'	 => array(
							'height' => 208,
							'src'	 => STRATA_IMAGES . '/image-picker/feature/feature5.png'
						),
					),
					'feature-6'	 => array(
						'small'	 => array(
							'height' => 70,
							'src'	 => STRATA_IMAGES . '/image-picker/feature/feature6.png'
						),
						'large'	 => array(
							'height' => 208,
							'src'	 => STRATA_IMAGES . '/image-picker/feature/feature6.png'
						),
					),
				),
			),
		),
		'choices'		 => array(
			'feature-1'	 => array(
				'icon' => array(
					'type'	 => 'new-icon',
					'value'	 => 'fa fa-heart-o',
					'label'	 => esc_html__( 'Feature Icon', 'strata' ),
				)
			),
			'feature-2'	 => array(
				'icon' => array(
					'type'	 => 'new-icon',
					'value'	 => 'fa fa-heart-o',
					'label'	 => esc_html__( 'Feature Icon', 'strata' ),
				),
			),
			'feature-3'	 => array(
				'image' => array(
					'type' => 'upload',
					'label'	 => esc_html__( 'Image', 'strata' ),
					'desc'	 => esc_html__( 'Description', 'strata' ),
					'help'	 => esc_html__( 'Help tip', 'strata' ),
				),
			),
			'feature-4'	 => array(
				'image' => array(
					'type' => 'upload',
					'label'	 => esc_html__( 'Image', 'strata' ),
					'desc'	 => esc_html__( 'Description', 'strata' ),
					'help'	 => esc_html__( 'Help tip', 'strata' ),
				),
			),
			'feature-5'	 => array(
				'image' => array(
					'type' => 'upload',
					'label'	 => esc_html__( 'Image', 'strata' ),
					'desc'	 => esc_html__( 'Description', 'strata' ),
					'help'	 => esc_html__( 'Help tip', 'strata' ),
				),
			),
			'feature-6'	 => array(
				'icon' => array(
					'type'	 => 'new-icon',
					'value'	 => 'fa fa-heart-o',
					'label'	 => esc_html__( 'Feature Icon', 'strata' ),
				),
			),
		),
		'show_borders'	 => false,
	),
	'title'			 => array(
		'type'	 => 'text',
		'value'	 => esc_html__( 'Clean and modern design', 'strata' ),
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
