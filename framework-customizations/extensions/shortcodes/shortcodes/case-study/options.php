<?php

if ( !defined( 'FW' ) )
	die( 'Forbidden' );

$options = array(
	'case-study' => array(
		'type'				 => 'addable-popup',
		'label'				 => esc_html__( 'Case Study', 'strata' ),
		'desc'				 => esc_html__( 'Add Your Case Study .', 'strata' ),
		'template'			 => '{{- title }}',
		'popup-title'		 => null,
		'size'				 => 'small', // small, medium, large
		'limit'				 => 4, // limit the number of popup`s that can be added
		'add-button-text'	 => esc_html__( 'Add Case Study', 'strata' ),
		'sortable'			 => true,
		'popup-options'		 => array(
			'image'		 => array(
				'type' => 'upload',
				'label'	 => esc_html__( 'Image', 'strata' ),
				'desc'	 => esc_html__( 'Add your case study image', 'strata' ),
				'images_only' => true,
//				'files_ext' => array( 'doc', 'pdf', 'zip' ),
//				'extra_mime_types' => array( 'audio/x-aiff, aif aiff' )
			),
			'title'		 => array(
				'type'	 => 'text',
				'label'	 => esc_html__( 'Title', 'strata' ),
				'value'	 => esc_html__( 'Marketing Growth', 'strata' ),
			),
			'subtitle'	 => array(
				'type'	 => 'text',
				'label'	 => esc_html__( 'Title', 'strata' ),
				'value'	 => esc_html__( ' Modern Woodman Ltd.', 'strata' ),
			),
			'content'	 => array(
				'type'	 => 'textarea',
				'label'	 => esc_html__( 'Title', 'strata' ),
				'value'	 => esc_html__( 'A business strategy is the means by which it sets out to achieve its desired ends. You have ideas, goals, and dreams. We have a culturally diverse, forward thinking team looking for talent like you and make your dream come true.', 'strata' ),
			),
			'button'	 => array(
				'type'			 => 'popup',
				'label'			 => esc_html__( 'Button', 'strata' ),
				'desc'			 => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'strata' ),
				'popup-title'	 => esc_html__( 'Button settings', 'strata' ),
				'button'		 => esc_html__( 'Add Button', 'strata' ),
				'popup-title'	 => null,
				'size'			 => 'small', // small, medium, large
				'popup-options'	 => array(
					'label'	 => array(
						'label'	 => esc_html__( 'Button Label', 'strata' ),
						'desc'	 => esc_html__( 'This is the text that appears on your button', 'strata' ),
						'type'	 => 'text',
						'value'	 => esc_html__( 'Read More', 'strata' )
					),
					'link'	 => array(
						'label'	 => esc_html__( 'Button Link', 'strata' ),
						'desc'	 => esc_html__( 'Where should your button link to', 'strata' ),
						'type'	 => 'text',
						'value'	 => '#'
					),
					'target' => array(
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
				),
			),
		),
	),
);
