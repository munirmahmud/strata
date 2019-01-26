<?php

if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'list_group' => array(
		'type'		 => 'group',
		'options'	 => array(
			'title'		 => array(
				'label'	 => esc_html__( 'List title', 'strata' ),
				'desc'	 => esc_html__( 'Enter an  classic item in Title', 'strata' ),
				'type'	 => 'text',
			),
			'list_items' => array(
				'type'				 => 'addable-popup',
				'label'				 => esc_html__( 'Classic Items', 'strata' ),
				'desc'				 => esc_html__( 'Add classic list items', 'strata' ),
				'add-button-text'	 => esc_html__( 'Add Classic list item', 'strata' ),
				'template'			 => '{{=name}}',
				'popup-options'		 => array(
					'name'		 => array(
						'label'	 => esc_html__( 'Name', 'strata' ),
						'desc'	 => esc_html__( 'Enter an item name', 'strata' ),
						'type'	 => 'text',
					),
					'details'	 => array(
						'label'	 => esc_html__( 'Details', 'strata' ),
						'desc'	 => esc_html__( 'Enter an item details', 'strata' ),
						'type'	 => 'text',
					),
				),
			),
		)
	),
	'class'		 => array(
		'label'	 => esc_html__( 'Custom Class', 'strata' ),
		'desc'	 => esc_html__( 'Enter custom CSS class', 'strata' ),
		'type'	 => 'text',
		'value'	 => '',
		'help'	 => esc_html__( 'You can use this class to further style this shortcode', 'strata' ),
	),
);
