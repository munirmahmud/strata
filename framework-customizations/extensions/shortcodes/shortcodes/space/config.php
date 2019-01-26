<?php

if ( !defined( 'FW' ) )
	die( 'Forbidden' );

$cfg = array(
	'page_builder' => array(
		'title'					 => esc_html__( 'Extra Space', 'strata' ),
		'description'			 => esc_html__( 'Add a Space', 'strata' ),
		'tab'					 => esc_html__( 'Content Elements', 'strata' ),
		'title_template'		 => 'Extra Space{{ if (o.height) { }} : <strong>{{= o.height}}</strong>{{ } }}',
		'popup_header_elements'	 => '<a class="tp-docs-link" target="_blank" href="http://xpeedstudio.net/documentation/seopress/seopress-documentation/#ExtraSpace"><span class="tp-docs-info dashicons dashicons-sos"></span>' . esc_html__( 'Go to Docs', 'strata' ) . '</a>',
	)
);
