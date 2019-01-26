<?php

if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}


$options = array(
	'genarel-options'		 => array(
		'title'		 => esc_html__( 'General', 'strata' ),
		'type'		 => 'tab',
		'options'	 => array(
			'tp_id'	 => array(
				'type'	 => 'unique',
				'length' => 8
			),
			'text'	 => array(
				'type'	 => 'wp-editor',
				'label'	 => esc_html__( 'Content', 'strata' ),
				'desc'	 => esc_html__( 'Enter some content for this texblock', 'strata' ),
				'attr'	 => array( 'class' => 'tp-wp-editor' ),
			),
		),
	),
	'tp_responsive_options'	 => array(
		'title'		 => esc_html__( 'Responsive', 'strata' ),
		'type'		 => 'tab',
		'options'	 => array(
			'display_desktop'	 => array(
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
		)
	),
	'custom-css-options'	 => array(
		'title'		 => esc_html__( 'Custom Css', 'strata' ),
		'type'		 => 'tab',
		'options'	 => array(
			'class' => array(
				'type'	 => 'text',
				'label'	 => esc_html__( 'Custom Class', 'strata' ),
				'desc'	 => esc_html__( 'Enter a custom CSS class', 'strata' ),
				'help'	 => esc_html__( 'You can use this class to further style this shortcode by adding your custom CSS.', 'strata' ),
			),
		),
	),
);
