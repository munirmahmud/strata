<?php

if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$manifest = array();

$manifest[ 'name' ]			 = esc_html__( 'Strata', 'strata' );
$manifest[ 'uri' ]			 = esc_url( 'http://themespry.com/items/strata' );
$manifest[ 'description' ]	 = esc_html__( 'Strata WordPress theme', 'strata' );
$manifest[ 'version' ]		 = '1.0';
$manifest[ 'author' ]			 = 'ThemesPry';
$manifest[ 'author_uri' ]		 = esc_url( 'http://themespry.com/items/strata' );
$manifest[ 'requirements' ]	 = array(
	'wordpress' => array(
		'min_version' => '5',
	),
);

$manifest[ 'id' ] = 'scratch';

$manifest[ 'supported_extensions' ] = array(
	'backups'		 => array(),
);
