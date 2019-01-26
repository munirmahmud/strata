<?php

if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'left_title'		 => array(
		'label'	 => esc_html__( 'Left List title ', 'strata' ),
		'desc'	 => esc_html__( 'Enter Column List Title', 'strata' ),
		'type'	 => 'text',
	),
	'left_list_items'	 => array(
		'type'				 => 'addable-option',
		'value'				 => array( 'Assisting senior consultants in projects', 'Share best practices and knowledge.' ),
		'label'				 => esc_html__( 'List Items', 'strata' ),
		'desc'				 => esc_html__( 'Add Column List items', 'strata' ),
		'option'			 => array( 'type' => 'text' ),
		'add-button-text'	 => esc_html__( 'Add List', 'strata' ),
		'sortable'			 => true,
	),
	'right_title'		 => array(
		'label'	 => esc_html__( 'Right list title', 'strata' ),
		'desc'	 => esc_html__( 'Enter Column List Title', 'strata' ),
		'type'	 => 'text',
	),
	'right_list_items'	 => array(
		'type'	 => 'addable-option',
		'value'	 => array( 'Assisting senior consultants in projects', 'Share best practices and knowledge.' ),
		'label'				 => esc_html__( 'List Items', 'strata' ),
		'desc'				 => esc_html__( 'Add Column List items', 'strata' ),
		'option'			 => array( 'type' => 'text' ),
		'add-button-text'	 => esc_html__( 'Add List', 'strata' ),
		'sortable'			 => true,
	),
	'class'				 => array(
		'label'	 => esc_html__( 'Custom Class', 'strata' ),
		'desc'	 => esc_html__( 'Enter custom CSS class', 'strata' ),
		'type'	 => 'text',
		'value'	 => '',
		'help'	 => esc_html__( 'You can use this class to further style this shortcode', 'strata' ),
	),
);
