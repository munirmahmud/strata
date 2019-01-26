<?php

if ( !defined( 'FW' ) )
	die( 'Forbidden' );

$cfg = array(
	'page_builder' => array(
		'title'			 => esc_html__( 'Services', 'strata' ),
		'description'	 => esc_html__( 'Show Services', 'strata' ),
		'tab'			 => esc_html__( 'Content Elements', 'strata' ),
		'icon'			 => 'fa fa-home',
		'title_template' => 'Services {{ if (o.posts_per_page) { }} : {{= o.posts_per_page}}{{ } }} posts',
	)
);
