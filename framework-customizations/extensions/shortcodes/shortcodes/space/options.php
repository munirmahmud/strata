<?php

if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$template_directory	 = get_template_directory_uri();
$options			 = array(
	'genarel-options'		 => array(
		'title'		 => esc_html__( 'Custom css', 'strata' ),
		'type'		 => 'tab',
		'options'	 => array(
			'tp_id'	 => array(
				'type'	 => 'unique',
				'length' => 8
			),
			'height' => array(
				'label'		 => esc_html__( 'Height', 'strata' ),
				'desc'		 => esc_html__( 'Select the space height in px (Small = 30px, Medium = 60px, Large = 100px) also you can use custom height according to your need.', 'strata' ),
				'type'		 => 'radio-text',
				'choices'	 => array(
					'space-sm'	 => esc_html__( 'Small', 'strata' ),
					'space-md'	 => esc_html__( 'Medium', 'strata' ),
					'space-lg'	 => esc_html__( 'Large', 'strata' ),
				),
				'value'		 => 'space-md',
				'custom'	 => 'custom_height',
			),
		)
	),
	'tp_responsive_options'	 => array(
		'title'		 => esc_html__( 'Responsive', 'strata' ),
		'type'		 => 'tab',
		'options'	 => array(
			'display_desktop'	 => array(
				'type'	 => 'multi-picker',
				'label'	 => false,
				'desc'	 => false,
				'picker' => array(
					'selected' => array(
						'type'			 => 'switch',
						'value'			 => 'yes',
						'label'			 => esc_html__( 'Desktop', 'strata' ),
						'desc'			 => esc_html__( 'Display this on desktop?', 'strata' ),
						'help'			 => esc_html__( 'Applies to devices with the resolution higher then 1200px (desktops and laptops)', 'strata' ),
						'left-choice'	 => array(
							'value'	 => 'no',
							'label'	 => esc_html__( 'No', 'strata' ),
						),
						'right-choice'	 => array(
							'value'	 => 'yes',
							'label'	 => esc_html__( 'Yes', 'strata' ),
						)
					),
				),
			),
			'display_medium'	 => array(
				'type'			 => 'switch',
				'value'			 => 'yes',
				'label'			 => esc_html__( 'Medium Device & Tablet Landscape', 'strata' ),
				'desc'			 => esc_html__( 'Display this  on tablet landscape?', 'strata' ),
				'help'			 => esc_html__( 'Applies to devices with the resolution between 992px - 1199px (Medium device and tablet landscape)', 'strata' ),
				'left-choice'	 => array(
					'value'	 => 'no',
					'label'	 => esc_html__( 'No', 'strata' ),
				),
				'right-choice'	 => array(
					'value'	 => 'yes',
					'label'	 => esc_html__( 'Yes', 'strata' ),
				)
			),
			'medium_height'		 => array(
				'label'		 => esc_html__( 'Medium Height', 'strata' ),
				'help'		 => esc_html__( 'Select the space height in px (Small = 30px, Medium = 60px, Large = 100px) also you can use custom height according to your need.', 'strata' ),
				'type'		 => 'radio-text',
				'choices'	 => array(
					'default' => esc_html__( 'Default', 'strata' ),
				),
				'value'		 => 'default',
				'custom'	 => 'custom_height',
			),
			'display_tablet'	 => array(
				'type'			 => 'switch',
				'value'			 => 'yes',
				'label'			 => esc_html__( 'Tablet Portrait', 'strata' ),
				'desc'			 => esc_html__( 'Display this on tablet portrait?', 'strata' ),
				'help'			 => esc_html__( 'Applies to devices with the resolution between 768px - 991px (tablet portrait)', 'strata' ),
				'left-choice'	 => array(
					'value'	 => 'no',
					'label'	 => esc_html__( 'No', 'strata' ),
				),
				'right-choice'	 => array(
					'value'	 => 'yes',
					'label'	 => esc_html__( 'Yes', 'strata' ),
				)
			),
			'tablet_height'		 => array(
				'label'		 => esc_html__( 'Tablet Height', 'strata' ),
				'help'		 => esc_html__( 'Select the space height in px (Small = 30px, Medium = 60px, Large = 100px) also you can use custom height according to your need.', 'strata' ),
				'type'		 => 'radio-text',
				'choices'	 => array(
					'default' => esc_html__( 'Default', 'strata' ),
				),
				'value'		 => 'default',
				'custom'	 => 'custom_height',
			),
			'display_phone'		 => array(
				'type'			 => 'switch',
				'value'			 => 'yes',
				'label'			 => esc_html__( 'Smartphone', 'strata' ),
				'desc'			 => esc_html__( 'Display this on smartphone?', 'strata' ),
				'help'			 => esc_html__( 'Applies to devices with the resolution up to 767px (smartphones both portrait and landscape as well as some low-resolution tablets)', 'strata' ),
				'left-choice'	 => array(
					'value'	 => 'no',
					'label'	 => esc_html__( 'No', 'strata' ),
				),
				'right-choice'	 => array(
					'value'	 => 'yes',
					'label'	 => esc_html__( 'Yes', 'strata' ),
				)
			),
			'phone_height'		 => array(
				'label'		 => esc_html__( 'Phone Height', 'strata' ),
				'help'		 => esc_html__( 'Select the space height in px (Small = 30px, Medium = 60px, Large = 100px) also you can use custom height according to your need.', 'strata' ),
				'type'		 => 'radio-text',
				'choices'	 => array(
					'default' => esc_html__( 'Default', 'strata' ),
				),
				'value'		 => 'default',
				'custom'	 => 'custom_height',
			),
		)
	),
	'custom-options'		 => array(
		'title'		 => esc_html__( 'Custom css', 'strata' ),
		'type'		 => 'tab',
		'options'	 => array(
			'class' => array(
				'label'	 => esc_html__( 'CSS Class', 'strata' ),
				'desc'	 => esc_html__( 'Enter custom CSS class', 'strata' ),
				'type'	 => 'text',
				'value'	 => '',
			),
		)
	),
);
