<?php
if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'general' => array(
		'title'		 => esc_html__( 'General', 'strata' ),
		'type'		 => 'tab',
		'options'	 => array(
			'general-box' => array(
				'title'		 => esc_html__( 'General Settings', 'strata' ),
				'type'		 => 'box',
				'options'	 => array(
					'menu_logo' => array(
						'label'	 => esc_html__( 'Menu Logo', 'strata' ),
						'desc'	 => esc_html__( 'Add your website menu logo', 'strata' ),
						'type'	 => 'upload',
					),
					'loader'	 => array(
						'type'			 => 'switch',
						'value'			 => 'yes',
						'label'			 => esc_html__( 'Pre Loader', 'strata' ),
						'desc'			 => esc_html__( 'Are you interested to use preloader?', 'strata' ),
						'right-choice'	 => array(
							'value'	 => 'yes',
							'label'	 => esc_html__( 'Yes', 'strata' ),
						),
						'left-choice'	 => array(
							'value'	 => 'no',
							'label'	 => esc_html__( 'No', 'strata' ),
						),
					),
					'scrollup'	 => array(
						'type'			 => 'switch',
						'label'			 => esc_html__( 'Scrollup', 'strata' ),
						'desc'			 => esc_html__( 'Are you interested to use scrollup?', 'strata' ),
						'value'			 => 'yes',
						'right-choice'	 => array(
							'value'	 => 'yes',
							'label'	 => esc_html__( 'Yes', 'strata' ),
						),
						'left-choice'	 => array(
							'value'	 => 'no',
							'label'	 => esc_html__( 'No', 'strata' ),
						),
					),
					'smoothscroll'	 => array(
						'type'			 => 'switch',
						'label'			 => esc_html__( 'Use smoothscroll', 'strata' ),
						'desc'			 => esc_html__( 'Are you interested to use scrollup?', 'strata' ),
						'value'			 => 'yes',
						'right-choice'	 => array(
							'value'	 => 'yes',
							'label'	 => esc_html__( 'Yes', 'strata' ),
						),
						'left-choice'	 => array(
							'value'	 => 'no',
							'label'	 => esc_html__( 'No', 'strata' ),
						),
					),
				),
			),
		)
	)
);
