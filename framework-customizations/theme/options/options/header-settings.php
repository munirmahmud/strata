<?php

if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'header' => array(
		'title'		 => esc_html__( 'Header', 'strata' ),
		'type'		 => 'tab',
		'options'	 => array(
			'header-box' => array(
				'title'		 => esc_html__( 'General Settings', 'strata' ),
				'type'		 => 'box',
				'options'	 => array(
					'mainmenu_style'		 => array(
						'type'			 => 'multi-picker',
						'label'			 => false,
						'desc'			 => false,
						'picker'		 => array(
							'menu_style' => array(
								'label'		 => esc_html__( 'Menu Style', 'strata' ),
								'type'		 => 'image-picker',
								'value'		 => 'menu-1',
								'desc'		 => esc_html__( 'Select Menu style.', 'strata' ),
								'choices'	 => array(
									'menu-1' => array(
										'small'	 => array(
											'height' => 70,
											'src'	 => STRATA_IMAGES . '/image-picker/header/header1.png'
										),
										'large'	 => array(
											'height' => 214,
											'src'	 => STRATA_IMAGES . '/image-picker/header/header1.png'
										),
									),
									'menu-2' => array(
										'small'	 => array(
											'height' => 70,
											'src'	 => STRATA_IMAGES . '/image-picker/header/header2.png'
										),
										'large'	 => array(
											'height' => 214,
											'src'	 => STRATA_IMAGES . '/image-picker/header/header2.png'
										),
									),
									'menu-3' => array(
										'small'	 => array(
											'height' => 70,
											'src'	 => STRATA_IMAGES . '/image-picker/header/header3-4-5.png'
										),
										'large'	 => array(
											'height' => 214,
											'src'	 => STRATA_IMAGES . '/image-picker/header/header3-4-5.png'
										),
									),
									
									'menu-5' => array(
										'small'	 => array(
											'height' => 70,
											'src'	 => STRATA_IMAGES . '/image-picker/header/header6-7-8.png'
										),
										'large'	 => array(
											'height' => 214,
											'src'	 => STRATA_IMAGES . '/image-picker/header/header6-7-8.png'
										),
									),
									'menu-4' => array(
										'small'	 => array(
											'height' => 70,
											'src'	 => STRATA_IMAGES . '/image-picker/header/header9.png'
										),
										'large'	 => array(
											'height' => 214,
											'src'	 => STRATA_IMAGES . '/image-picker/header/header9.png'
										),
									),
								),
							),
						),
						'choices'		 => array(
							array(
								'for'		 => array( 'menu-3', 'menu-5' ),
								'options'	 => array(
									'boxed' => array(
										'type'			 => 'switch',
										'value'			 => 'no',
										'label'			 => esc_html__( 'Boxed menu', 'strata' ),
										'desc'			 => esc_html__( 'Are you like to use boxed menu', 'strata' ),
										'left-choice'	 => array(
											'value'	 => 'yes',
											'label'	 => esc_html__( 'Yes', 'strata' ),
										),
										'right-choice'	 => array(
											'value'	 => 'no',
											'label'	 => esc_html__( 'No', 'strata' ),
										),
									),
								),
							),
							'menu-2' => array(),
							'menu-5' => array(
								'center-color' => array(
									'type'			 => 'switch',
									'value'			 => 'white',
									'label'			 => esc_html__( 'Bg Color', 'strata' ),
									'desc'			 => esc_html__( 'Either use trnsparent or white background color. This option for only boxed layout', 'strata' ),
									'left-choice'	 => array(
										'value'	 => 'white',
										'label'	 => esc_html__( 'White', 'strata' ),
									),
									'right-choice'	 => array(
										'value'	 => 'transparent',
										'label'	 => esc_html__( 'Trnsparent', 'strata' ),
									),
								),
							),
						),
						'show_borders'	 => false,
					),
					'top_contact_details'	 => array(
						'type'				 => 'addable-popup',
						'add-button-text'	 => esc_html__( 'Add Contact Details', 'strata' ),
						'label'				 => esc_html__( 'Contact Details', 'strata' ),
						'desc'				 => esc_html__( 'Add contact information details items', 'strata' ),
						'limit'				 => 3,
						'template'			 => '{{=title}}',
						'popup-options'		 => array(
							'title'	 => array(
								'label'	 => esc_html__( 'Title', 'strata' ),
								'value'	 => esc_html__( 'Address', 'strata' ),
								'desc'	 => esc_html__( 'Enter the contact information title', 'strata' ),
								'type'	 => 'text',
							),
							'info'	 => array(
								'label'	 => esc_html__( 'Information', 'strata' ),
								'value'	 => esc_html__( '1877 Perry Street Swartz Creekson, MI 48473', 'strata' ),
								'desc'	 => esc_html__( 'Enter the main contact information', 'strata' ),
								'type'	 => 'text',
							),
							'icon'	 => array(
								'type'	 => 'new-icon',
								'label'	 => 'Icon',
							),
						),
						'value'				 => array(
							0	 => array(
								'title'	 => 'Call us now',
								'icon'	 => 'icon icon-phone3',
								'info'	 => '1+(91) 458 654 528'
							),
							1	 => array(
								'title'	 => 'Drop us line',
								'icon'	 => 'icon icon-envelope',
								'info'	 => 'mail@example.com'
							),
							2	 => array(
								'title'	 => 'Visit Our Office',
								'icon'	 => 'icon icon-map-marker2',
								'info'	 => '1010 Avenue, NY, USA'
							),
						)
					),
					'cta_button_settings'	 => array(
						'type'			 => 'multi-picker',
						'label'			 => false,
						'desc'			 => false,
						'picker'		 => array(
							'cta_button' => array(
								'label'			 => esc_html__( 'Menu Cta button', 'strata' ),
								'desc'			 => esc_html__( 'Are you interested to use Menu Cta Button in menu 4 and menu 5 styles?', 'strata' ),
								'type'			 => 'switch',
								'right-choice'	 => array(
									'value'	 => 'yes',
									'label'	 => esc_html__( 'Yes', 'strata' )
								),
								'left-choice'	 => array(
									'value'	 => 'no',
									'label'	 => esc_html__( 'No', 'strata' )
								),
								'value'			 => 'yes',
							)
						),
						'choices'		 => array(
							'yes'	 => array(
								'title'	 => array(
									'label'	 => esc_html__( 'CTA Button text', 'strata' ),
									'value'	 => esc_html__( 'Get A quote', 'strata' ),
									'desc'	 => esc_html__( 'Cta Button text', 'strata' ),
									'type'	 => 'text',
								),
								'url'	 => array(
									'label'	 => esc_html__( 'CTA url', 'strata' ),
									'value'	 => '#',
									'desc'	 => esc_html__( 'Enter the Cta Button URL', 'strata' ),
									'type'	 => 'text',
								),
							),
							'no'	 => array(),
						),
						'show_borders'	 => false,
					),
					'top_social_details'	 => array(
						'type'				 => 'addable-popup',
						'add-button-text'	 => esc_html__( 'Add Social Icon', 'strata' ),
						'label'				 => esc_html__( 'Social Details', 'strata' ),
						'desc'				 => esc_html__( 'Add Social information in sidebar', 'strata' ),
						'template'			 => '{{=title}}',
						'popup-options'		 => array(
							'title'	 => array(
								'label'	 => esc_html__( 'Title', 'strata' ),
								'value'	 => esc_html__( 'Facebook', 'strata' ),
								'desc'	 => esc_html__( 'Enter the title', 'strata' ),
								'type'	 => 'text',
							),
							'link'	 => array(
								'label'	 => esc_html__( 'Link', 'strata' ),
								'value'	 => esc_html__( '#', 'strata' ),
								'desc'	 => esc_html__( 'Add your social link', 'strata' ),
								'type'	 => 'text',
							),
							'icon'	 => array(
								'type'	 => 'new-icon',
								'value'	 => esc_html__( 'icon icon-social-2', 'strata' ),
								'label'	 => 'Icon',
							),
						),
						'value'				 => array(
							0	 => array(
								'title'	 => 'Twitter',
								'icon'	 => 'fa fa-twitter',
								'link'	 => '#'
							),
							1	 => array(
								'title'	 => 'Facebook',
								'icon'	 => 'fa fa-facebook',
								'link'	 => '#'
							),
							2	 => array(
								'title'	 => 'instagram',
								'icon'	 => 'fa fa-instagram',
								'link'	 => '#'
							),
							3	 => array(
								'title'	 => 'g+',
								'icon'	 => 'fa fa-google-plus',
								'link'	 => '#'
							),
							4	 => array(
								'title'	 => 'linkedin',
								'icon'	 => 'fa fa-linkedin',
								'link'	 => '#'
							),
						)
					),


					'topbar_menu_color'		 => array(
						'label'		 => esc_html__( 'Topbar Color', 'strata' ),
						'type'		 => 'rgba-color-picker',
						'value'		 => '',
						// palette colors array
						'palettes'	 => array( 'rgba(0,0,0,.5)', '#0f2765', '#fafafa' ),
						'desc'		 => esc_html__( 'You can change the color with rgba color or solid color', 'strata' ),
					),
					'topbar_text_color'		 => array(
						'label'		 => esc_html__( 'Topbar Text color', 'strata' ),
						'type'		 => 'color-picker',
						'value'		 => '',
						// palette colors array
						'palettes'	 => array( 'rgba(0,0,0,.5)', '#0f2765', '#fafafa' ),
						'desc'		 => esc_html__( 'You can change the topbar text color from here', 'strata' ),
					),
					'main_menu_color'		 => array(
						'label'		 => esc_html__( 'Menu bg color', 'strata' ),
						'type'		 => 'color-picker',
						'value'		 => '',
						// palette colors array
						'palettes'	 => array( '#0f2765', '#ffffff', '#FF6600', '#a2df48', '#2d3559' ),
						'desc'		 => esc_html__( 'You can change the menu color with any color', 'strata' ),
					),
					'menu_text_color'		 => array(
						'label'		 => esc_html__( 'Menu Text color', 'strata' ),
						'type'		 => 'color-picker',
						'value'		 => '',
						// palette colors array
						'palettes'	 => array( '#0f2765', '#ffffff', '#FF6600', '#a2df48', '#2d3559' ),
						'desc'		 => esc_html__( 'You can change the menu text color from here', 'strata' ),
					),
				),
			),
		)
	)
);
