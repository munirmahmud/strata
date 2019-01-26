<?php

if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$map_shortcode	 = fw_ext( 'shortcodes' )->get_shortcode( 'map' );
$options		 = array(
	'data_provider'		 => array(
		'type'			 => 'multi-picker',
		'label'			 => false,
		'desc'			 => false,
		'picker'		 => array(
			'population_method' => array(
				'label'		 => esc_html__( 'Population Method', 'strata' ),
				'desc'		 => esc_html__( 'Select map population method (Ex: events, custom)', 'strata' ),
				'type'		 => 'select',
				'choices'	 => $map_shortcode->_get_picker_dropdown_choices(),
			)
		),
		'choices'		 => $map_shortcode->_get_picker_choices(),
		'show_borders'	 => false,
	),
	'gmap-key'			 => array_merge(
	array(
		'label'	 => esc_html__( 'Google Maps API Key', 'strata' ),
		'desc'	 => sprintf(
		__( 'Create an application in %sGoogle Console%s and add the Key here.', 'strata' ), '<a href="https://console.developers.google.com/flows/enableapi?apiid=places_backend,maps_backend,geocoding_backend,directions_backend,distance_matrix_backend,elevation_backend&keyType=CLIENT_SIDE&reusekey=true">', '</a>'
		),
	), version_compare( fw()->manifest->get_version(), '2.5.7', '>=' ) ? array(
		'type' => 'gmap-key',
	) : array(
		'type'		 => 'text',
		'fw-storage' => array(
			'type'		 => 'wp-option',
			'wp_option'	 => 'fw-option-types:gmap-key',
		),
	)
	),
	'map_type'			 => array(
		'type'		 => 'select',
		'label'		 => esc_html__( 'Map Type', 'strata' ),
		'desc'		 => esc_html__( 'Select map type', 'strata' ),
		'choices'	 => array(
			'roadmap'	 => esc_html__( 'Roadmap', 'strata' ),
			'terrain'	 => esc_html__( 'Terrain', 'strata' ),
			'satellite'	 => esc_html__( 'Satellite', 'strata' ),
			'hybrid'	 => esc_html__( 'Hybrid', 'strata' )
		)
	),
	'map_height'		 => array(
		'label'	 => esc_html__( 'Map Height', 'strata' ),
		'desc'	 => esc_html__( 'Set map height (Ex: 300)', 'strata' ),
		'type'	 => 'text'
	),
	'map_zoom'			 => array(
		'type'		 => 'slider',
		'value'		 => 15,
		'properties' => array(
			'min'	 => 0,
			'max'	 => 21,
			'sep'	 => 1,
		),
		'label'		 => esc_html__( 'Map Zoom', 'strata' ),
		'desc'		 => esc_html__( 'Select map zoom', 'strata' ),
	),
	'map_style'			 => array(
		'label'	 => esc_html__( 'Map Style', 'strata' ),
		'desc'	 => esc_html__( 'Copy/Paste map styles from <a target="_blank" href="https://snazzymaps.com/explore">https://snazzymaps.com/</a>', 'strata' ),
		'type'	 => 'textarea',
	),
	'map_pin'         => array(
		'label' => esc_html__( 'Map Pin', 'strata' ),
		'desc'  => esc_html__( 'Upload a pin for your location(s) (64x64)', 'strata' ),
		'type'  => 'upload',
	),
	'disable_scrolling'	 => array(
		'type'			 => 'switch',
		'value'			 => false,
		'label'			 => esc_html__( 'Disable zoom on scroll', 'strata' ),
		'desc'			 => esc_html__( 'Prevent the map from zooming when scrolling until clicking on the map', 'strata' ),
		'left-choice'	 => array(
			'value'	 => false,
			'label'	 => esc_html__( 'Yes', 'strata' ),
		),
		'right-choice'	 => array(
			'value'	 => true,
			'label'	 => esc_html__( 'No', 'strata' ),
		),
	),
);
