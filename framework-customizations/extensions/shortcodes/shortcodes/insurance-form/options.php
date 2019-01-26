<?php

if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}


if ( function_exists( 'wpcf7' ) ) {

	function themespry_select_contact_form() {
		$wpcf7_form_list = get_posts( array(
			'post_type'	 => 'wpcf7_contact_form',
			'showposts'	 => 999,
		) );
		$posts			 = array();

		if ( !empty( $wpcf7_form_list ) && !is_wp_error( $wpcf7_form_list ) ) {
			foreach ( $wpcf7_form_list as $post ) {
				$options[ $post->ID ] = $post->post_title;
			}
			return $options;
		}
	}

	$options = array(
		'tabs' => array(
			'type'				 => 'addable-popup',
			'size'				 => 'large',
			'label'				 => esc_html__( 'Tabs Items', 'strata' ),
			'popup-title'		 => esc_html__( 'Add/Edit Tabs', 'strata' ),
			'add-button-text'	 => esc_html__( 'Add Insurance tab item', 'strata' ),
			'desc'				 => esc_html__( 'Add your Insurance tab items.', 'strata' ),
			'template'			 => '{{=title}}',
			'popup-options'		 => array(
				'icon'		 => array(
					'type'	 => 'new-icon',
					'label'	 => esc_html__( 'Title icon', 'strata' ),
					'desc'	 => esc_html__( 'Enter tabs icon', 'strata' )
				),
				'title'		 => array(
					'type'	 => 'text',
					'label'	 => esc_html__( 'Tabs Title', 'strata' ),
					'value'	 => esc_html__( 'Section 1', 'strata' ),
					'desc'	 => esc_html__( 'Enter tabs main title', 'strata' )
				),
				'quoteform'	 => array(
					'type'		 => 'select',
					'value'		 => '',
					'label'		 => esc_html__( 'Select Contact form style', 'strata' ),
					'desc'		 => esc_html__( 'Select Contact form style from the list', 'strata' ),
					'choices'	 => themespry_select_contact_form()
				),
			)
		)
	);
}