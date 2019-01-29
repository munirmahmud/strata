<?php

if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'footer_settings' => array(
		'title'		 => esc_html__( 'Footer Settings', 'strata' ),
		'type'		 => 'tab',
		'options'	 => array(
			'footer_box' => array(
				'title'		 => esc_html__( 'Footer Settings', 'strata' ),
				'type'		 => 'box',
				'options'	 => array(
					'footer_top'			 => array(
						'type'			 => 'multi-picker',
						'label'			 => false,
						'desc'			 => false,
						'picker'		 => array(
							'footer_top_part' => array(
								'label'			 => esc_html__( 'Footer top', 'strata' ),
								'desc'			 => esc_html__( 'Are you interested to use footer Top location?', 'strata' ),
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
								'footer_styles' => array(
									'type'			 => 'multi-picker',
									'label'			 => false,
									'desc'			 => false,
									'picker'		 => array(
										'footer_style' => array(
											'label'			 => esc_html__( 'Footer style', 'strata' ),
											'desc'			 => esc_html__( 'Are you interested to use footer Top location?', 'strata' ),
											'type'			 => 'switch',
											'right-choice'	 => array(
												'value'	 => 'one',
												'label'	 => esc_html__( 'Style one', 'strata' )
											),
											'left-choice'	 => array(
												'value'	 => 'two',
												'label'	 => esc_html__( 'Style Two', 'strata' )
											),
											'value'			 => 'one',
										)
									),
									'choices'		 => array(
										'one'	 => array(
											'top_contact_details' => array(
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
														'title'	 => 'Head Office',
														'icon'	 => 'icon icon-map-marker2',
														'info'	 => '1010 Avenue, NY 90001, USA'
													),
													1	 => array(
														'title'	 => 'Call Us',
														'icon'	 => 'icon icon-phone3',
														'info'	 => '(+87) 847-291-4353'
													),
													2	 => array(
														'title'	 => 'Mail Us',
														'icon'	 => 'icon icon-envelope',
														'info'	 => 'info@example.com'
													),
												)
											),
										),
										'two'	 => array(
											'title'		 => array(
												'label'	 => esc_html__( 'Subscribe Title', 'strata' ),
												'value'	 => strata_kses( 'Subscribe to <span class="title-text-color">our newsletter</span>', 'strata' ),
												'desc'	 => esc_html__( 'Enter the top subscribe title', 'strata' ),
												'type'	 => 'text',
											),
											'desc'		 => array(
												'label'	 => esc_html__( 'subscribe info', 'strata' ),
												'value'	 => esc_html__( 'No spam message from us, only give you latest offer which is best for you and your business', 'strata' ),
												'desc'	 => esc_html__( 'Enter the subscribe info or subtitle', 'strata' ),
												'type'	 => 'text',
											),
											'shortcode'	 => array(
												'label'	 => esc_html__( 'Shortcode', 'strata' ),
												'value'	 => '[mc4wp_form id="1264"]',
												'desc'	 => sprintf( esc_html__( 'Genarate a shortcode from <a href="%s">Mailchimp for WP</a>. ', 'strata' ), admin_url( 'admin.php?page=mailchimp-for-wp-forms&view=edit-form' ) ),
												'type'	 => 'text',
											),
										),
									),
									'show_borders'	 => false,
								),
							),
							'no'	 => array(),
						),
						'show_borders'	 => false,
					),
					'footer_widget'			 => array(
						'type'			 => 'multi-picker',
						'label'			 => false,
						'desc'			 => false,
						'picker'		 => array(
							'footer_bg' => array(
								'label'			 => esc_html__( 'Footer Widget', 'strata' ),
								'desc'			 => esc_html__( 'Are you interested to use footer widget?', 'strata' ),
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
								'widgets_count'		 => array(
									'type'		 => 'radio',
									'value'		 => '3',
									'label'		 => __( 'Widgets in footer', 'strata' ),
									'desc'		 => __( 'Hoe many widgets you would like to show in footer?', 'strata' ),
									'choices'	 => array( // Note: Avoid bool or int keys http://bit.ly/1cQgVzk
										'3'	 => __( '3', 'strata' ),
										'4'	 => __( '4', 'strata' ),
									),
									// Display choices inline instead of list
									'inline'	 => true,
								),
								'footer_bg_setting'	 => array(
									'type'			 => 'multi-picker',
									'label'			 => false,
									'desc'			 => false,
									'picker'		 => array(
										'footer_bg' => array(
											'label'			 => esc_html__( 'Background Style', 'strata' ),
											'desc'			 => esc_html__( 'Select your footer background style', 'strata' ),
											'type'			 => 'switch',
											'right-choice'	 => array(
												'value'	 => 'color',
												'label'	 => esc_html__( 'Color', 'strata' )
											),
											'left-choice'	 => array(
												'value'	 => 'image',
												'label'	 => esc_html__( 'Image', 'strata' )
											),
											'value'			 => 'no',
										)
									),
									'choices'		 => array(
										'color'	 => array(
											'bg_color' => array(
												'type'	 => 'color-picker',
												'value'	 => '#191919',
												'label'	 => '',
												'desc'	 => esc_html__( 'Select your footer background color.', 'strata' ),
											),
										),
										'image'	 => array(
											'bg_image'				 => array(
												'type'	 => 'upload',
												'label'	 => '',
												'desc'	 => esc_html__( 'Upload your footer background image.', 'strata' ),
											),
											'widgets_overlay_color'	 => array(
												'label'		 => esc_html__( 'overlay Color', 'strata' ),
												'type'		 => 'rgba-color-picker',
												'value'		 => 'rgba(0, 8, 29, 0.85)',
												'palettes'	 => array( '#ba4e4e', '#0ce9ed', '#941940' ),
												'desc'		 => esc_html__( 'Choose your footer widgets overlay color text color.', 'strata' ),
											),
										),
									),
									'show_borders'	 => false,
								),
								'widgets_text_color' => array(
									'label'	 => esc_html__( 'Text Color', 'strata' ),
									'type'	 => 'color-picker',
									'value'	 => '#ffffff',
									'desc'	 => esc_html__( 'Choose your footer widgets text color.', 'strata' ),
								),
							),
							'no'	 => array(),
						),
						'show_borders'	 => false,
					),
					'footer_copyright_box'	 => array(
						'title'		 => esc_html__( 'Footer bottom  Settings', 'strata' ),
						'type'		 => 'box',
						'options'	 => array(
							'footer_text_color'		 => array(
								'label'	 => esc_html__( 'Footer Text Color', 'strata' ),
								'type'	 => 'color-picker',
								'value'	 => '#ffffff',
								'desc'	 => esc_html__( 'Choose your footer copyright text color.', 'strata' ),
							),
							'footer_bg_color'		 => array(
								'label'	 => esc_html__( 'Footer Background Color', 'strata' ),
								'type'	 => 'color-picker',
								'value'	 => '#00081d',
								'desc'	 => esc_html__( 'Choose your footer copyright background color.', 'strata' ),
							),
							'copyright_style'		 => array(
								'type'			 => 'multi-picker',
								'label'			 => false,
								'desc'			 => false,
								'picker'		 => array(
									'main_footer_logo' => array(
										'label'			 => esc_html__( 'Copyright Style', 'strata' ),
										'desc'			 => esc_html__( 'Do you want to use footer logo?', 'strata' ),
										'type'			 => 'switch',
										'right-choice'	 => array(
											'value'	 => 'one',
											'label'	 => esc_html__( 'One', 'strata' )
										),
										'left-choice'	 => array(
											'value'	 => 'two',
											'label'	 => esc_html__( 'Two', 'strata' )
										),
										'value'			 => 'one',
									)
								),
								'choices'		 => array(
									'one'	 => array(
									),
									'two'	 => array(
										'footer_logo'	 => array(
											'type'	 => 'upload',
											'label'	 => '',
											'desc'	 => esc_html__( 'Upload your favorite footer logo.', 'strata' ),
										),
										'footer_text'	 => array(
											'label'	 => esc_html__( 'Footer Text', 'strata' ),
											'type'	 => 'textarea',
											'value'	 => esc_html__( 'Invest in your drivers, improve their safety and reduce the risk of incidents with our main comprehensive courses and seminars tailored to the needs of your organisation. With a choice of full or half-day sessions. all are flexible to fit with your schedules.', 'strata' ),
											'desc'	 => esc_html__( 'Footer center text', 'strata' ),
										),
										'footer_social'	 => array(
											'type'				 => 'addable-popup',
											'label'				 => esc_html__( 'Social Links', 'strata' ),
											'add-button-text'	 => esc_html__( 'Add Social Icon', 'strata' ),
											'desc'				 => esc_html__( 'Add your footer social icon.', 'strata' ),
											'template'			 => '{{=title}}',
											'popup-options'		 => array(
												'title'	 => array(
													'label'	 => esc_html__( 'Title', 'strata' ),
													'desc'	 => esc_html__( 'Enter a title (it is for internal use and will not appear on the front end)', 'strata' ),
													'type'	 => 'text',
													'value'	 => esc_html__( 'Facebook', 'strata' ),
												),
												'icon'	 => array(
													'type'	 => 'new-icon',
													'value'	 => esc_html__( 'fa-facebook', 'strata' ),
													'label'	 => esc_html__( 'Social Icon', 'strata' )
												),
												'link'	 => array(
													'label'	 => esc_html__( 'Link', 'strata' ),
													'desc'	 => wp_kses_post( 'Enter your social URL link ( dont forget to add <b>http://</b>)', 'strata' ),
													'type'	 => 'text',
													'value'	 => '#',
												)
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
											)
										),
									),
								),
								'show_borders'	 => false,
							),
							'footer_copyright_text'	 => array(
								'label'	 => esc_html__( 'Copyright Text', 'strata' ),
								'type'	 => 'textarea',
								'value'	 => esc_html__( 'Copyright 2018 Craft. All Rights Reserved', 'strata' ),
								'desc'	 => esc_html__( 'Add footer copyright text in here.', 'strata' ),
							),
						),
					),
				),
			),
		),
	),
);
