<?php

$options = array(
	'tp_theme_options' => array(
		'title'				 => esc_html__( 'Theme Options', 'strata' ),
		'options'			 => array(
			'header_top_settings' => array(
				'title'		 => esc_html__( 'Header Top Settings', 'strata' ),
				'options'	 => array(
					'geobin_header' => array(
						'type'			 => 'multi-picker',
						'label'			 => esc_html__( 'Themespry Header', 'strata' ),
						'picker'		 => array(
							'menu_style' => array(
								'label'		 => esc_html__( 'Menu Style', 'strata' ),
								'type'		 => 'image-picker',
								'value'		 => 'menu-1',
								'desc'		 => esc_html__( 'Select Menu style.', 'strata' ),
								'choices'	 => array(
									'menu-1' => array(
										'small'	 => array(
											'height' => 30,
											'src'	 => GEOBIN_IMAGES . '/image-picker/header/header1.png'
										),
										'large'	 => array(
											'width'	 => 370,
											'src'	 => GEOBIN_IMAGES . '/image-picker/header/header1.png'
										),
									),
									'menu-2' => array(
										'small'	 => array(
											'height' => 30,
											'src'	 => GEOBIN_IMAGES . '/image-picker/header/header2.png'
										),
										'large'	 => array(
											'width'	 => 370,
											'src'	 => GEOBIN_IMAGES . '/image-picker/header/header2.png'
										),
									),
									'menu-3' => array(
										'small'	 => array(
											'height' => 30,
											'src'	 => GEOBIN_IMAGES . '/image-picker/header/header3.png'
										),
										'large'	 => array(
											'width'	 => 370,
											'src'	 => GEOBIN_IMAGES . '/image-picker/header/header3.png'
										),
									),
									'menu-4' => array(
										'small'	 => array(
											'width'	 => 260,
											'src'	 => GEOBIN_IMAGES . '/image-picker/header/header4.png'
										),
										'large'	 => array(
											'width'	 => 370,
											'src'	 => GEOBIN_IMAGES . '/image-picker/header/header4.png'
										),
									),
									'menu-5' => array(
										'small'	 => array(
											'height' => 30,
											'src'	 => GEOBIN_IMAGES . '/image-picker/header/header5.png'
										),
										'large'	 => array(
											'width'	 => 370,
											'src'	 => GEOBIN_IMAGES . '/image-picker/header/header5.png'
										),
									),
									'menu-6' => array(
										'small'	 => array(
											'height' => 30,
											'src'	 => GEOBIN_IMAGES . '/image-picker/header/header6.png'
										),
										'large'	 => array(
											'width'	 => 370,
											'src'	 => GEOBIN_IMAGES . '/image-picker/header/header6.png'
										),
									),
									'menu-7' => array(
										'small'	 => array(
											'width'	 => 260,
											'src'	 => GEOBIN_IMAGES . '/image-picker/header/header7.png'
										),
										'large'	 => array(
											'width'	 => 370,
											'src'	 => GEOBIN_IMAGES . '/image-picker/header/header7.png'
										),
									),
									'menu-8' => array(
										'small'	 => array(
											'width'	 => 260,
											'src'	 => GEOBIN_IMAGES . '/image-picker/header/header8.png'
										),
										'large'	 => array(
											'width'	 => 370,
											'src'	 => GEOBIN_IMAGES . '/image-picker/header/header8.png'
										),
									),
								),
							),
						),
						'no-validate'	 => false,
					),

					'header_top_contact_details' => array(
						'type'				 => 'addable-popup',
						'add-button-text'	 => esc_html__( 'Header Top Details', 'strata' ),
						'label'				 => esc_html__( 'Header Top Contact Details', 'strata' ),
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
						),
					),
					'header_top_social_details' => array(
						'type'				 => 'addable-popup',
						'add-button-text'	 => esc_html__( 'Add Social Icon', 'strata' ),
						'label'				 => esc_html__( 'Social Details', 'strata' ),
						'desc'				 => esc_html__( 'Add Social information in the header top right corner.', 'strata' ),
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

					'geobin_main_logo' => array(
						'label'			 => esc_html__( 'Menu Logo', 'strata' ),
						'type'			 => 'upload',
						'desc'			 => esc_html__( 'Upload the a logo with the dimention of 168 x 61', 'strata' ),
						'images_only'	 => true,
						'files_ext'		 => array( 'jpg', 'png', 'jpeg', 'gif', 'svg' ),
					),
					'header_right_offcanvas' => array(
						'type'			 => 'multi-picker',
						'label'			 => false,
						'desc'			 => false,
						'picker'		 => array(
							'hr_offcanvas' => array(
								'label'			 => esc_html__( 'Offcanvas', 'strata' ),
								'desc'			 => esc_html__( 'Do you want to show offcanvas?', 'strata' ),
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
								'offcanvas_logo'		 => array(
									'label'			 => esc_html__( 'Offcanvas Logo', 'strata' ),
									'type'			 => 'upload',
									'desc'			 => esc_html__( 'Upload the a logo with the dimention of 168 x 61', 'strata' ),
									'images_only'	 => true,
									'files_ext'		 => array( 'jpg', 'png', 'jpeg', 'gif', 'svg' ),
								),
								'offcanvas_content'		 => array(
									'type'	 => 'textarea',
									'value'	 => '',
									'label'	 => esc_html__( 'Content', 'strata' ),
									'desc'	 => esc_html__( 'Insert texts here', 'strata' ),
								),
								'offcanvas_city_name'	 => array(
									'type'	 => 'text',
									'value'	 => 'New York, USA',
									'label'	 => esc_html__( 'City Name', 'strata' ),
									'desc'	 => esc_html__( 'Insert here your city name.', 'strata' ),
								),
								'offcanvas_address'		 => array(
									'type'	 => 'text',
									'value'	 => '1010 Grand Avenue',
									'label'	 => esc_html__( 'Address', 'strata' ),
									'desc'	 => esc_html__( 'Insert here your address details.', 'strata' ),
								),
								'offcanvas_contact_no'		 => array(
									'type'	 => 'text',
									'value'	 => '009-215-5596',
									'label'	 => esc_html__( 'Phone Number', 'strata' ),
									'desc'	 => esc_html__( 'Insert here your phone number.', 'strata' ),
								),
								'offcanvas_contact_slogan'	 => array(
									'type'	 => 'text',
									'value'	 => 'Give us a call',
									'label'	 => esc_html__( 'Subtitle/Slogan', 'strata' ),
									'desc'	 => esc_html__( 'Insert here a subtitle.', 'strata' ),
								),
								'offcanvas_contact_email'		 => array(
									'type'	 => 'text',
									'value'	 => 'mail@example.com',
									'label'	 => esc_html__( 'Email', 'strata' ),
									'desc'	 => esc_html__( 'Insert here your email address.', 'strata' ),
								),
								'offcanvas_contact_email_slogan' => array(
									'type'	 => 'text',
									'value'	 => '24/7 online support',
									'label'	 => esc_html__( 'Subtitle/Slogan', 'strata' ),
									'desc'	 => esc_html__( 'Insert here a subtitle.', 'strata' ),
								),
								'offcanvas_social_share' => array(
									'type'	 => 'multi-picker',
									'label'	 => false,
									'desc'	 => false,
									'picker' => array(
										'social_shares_switcher' => array(
											'label'			 => esc_html__( 'Social Share for offcanvas menu', 'strata' ),
											'desc'			 => esc_html__( 'Do you want to show social icons?', 'strata' ),
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
										//'type'  => 'addable-option',
										'yes'	 => array(
											'social_url' => array(
												'label'			 => esc_html__( 'Social Details', 'strata' ),
												'template'		 => '{{=title}}',
												'type'			 => 'addable-popup',
												'popup-options'	 => array(
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
												'value'			 => array(
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
												),
												'sortable'		 => true,
											),
										),
										'no'	 => array(),
									),
									'show_borders'	 => false,
								),
								'offcanvas_subscribe_box' => array(
									'type'	 => 'textarea',
									'label'	 => esc_html__( 'Subscribe box', 'strata' ),
								),
							),
							'no'	 => array(),
						),
						'show_borders'	 => false,
					),
				),
			),
			/* Theme Styling Panel */
			'styling_panel' => array(
				'title'		 => esc_html__( 'Theme Styling', 'strata' ),
				'options'	 => array(
					'geobin_theme_color' => array(
						'label'	 => esc_html__( 'Theme Color', 'strata' ),
						'type'	 => 'color-picker',
						'desc'	 => esc_html__( 'You can use any color in your theme', 'strata' ),
					),
					'theme_secondary_color' => array(
						'label'	 => esc_html__( 'Secondary Color', 'strata' ),
						'type'	 => 'color-picker',
						'desc'	 => esc_html__( 'You can use any color in your theme', 'strata' ),
						'value'	 => '#FA6742',
					),
					'geobin_body_font' => array(
						'type'		 => 'typography-v2',
						'value'		 => array(
							'family'		 => 'Nunito',
							'size'			 => 16,
							'line-height'	 => 28,
						),
						'components' => array(
							'family'		 => true,
							// 'style', 'weight', 'subset', 'variation' will appear and disappear along with 'family'
							'size'			 => true,
							'style'			 => false,
							'subset'		 => false,
							'variation'		 => false,
							'line-height'	 => true,
							'letter-spacing' => false,
							'color'			 => false
						),
						'label'		 => esc_html__( 'Body Font', 'strata' ),
						'desc'		 => esc_html__( 'This is default body font for your site', 'strata' ),
					),
					'geobin_heading_title'	 => array(
						'type'		 => 'typography-v2',
						'value'		 => array(
							'family'		 => 'Nunito',
							'variation'		 => '800',
							'line-height'	 => 15,
							'letter-spacing' => 0,
						),
						'components' => array(
							'family'		 => true,
							'style'			 => false,
							'weight'		 => true,
							'size'			 => false,
							'line-height'	 => false,
							'letter-spacing' => false,
							'color'			 => true
						),
						'label'		 => esc_html__( 'Heading Fonts', 'strata' ),
						'desc'		 => esc_html__( 'This is for heading google fonts', 'strata' ),
					),
					'primary_heading_font'	 => array(
						'label'	 => esc_html__( 'Heading Font Weight h1, h2', 'strata' ),
						'type'	 => 'text',
					),
					'secondary_heading_font' => array(
						'label'	 => esc_html__( 'Heading Font Weight h3, h4, h5, h6', 'strata' ),
						'type'	 => 'text',
					),
				),
			),
			/* Footer Bottom Section */
			'menu_styles' => array(
				'title'		 => esc_html__( 'Menu Settings', 'strata' ),
				'options'	 => array(
					'menu_bg_color' => array(
						'label'	 => esc_html__( 'Menu Background Color', 'strata' ),
						'type'	 => 'color-picker',
					),
					'menu_text_color' => array(
						'label'	 => esc_html__( 'Menu Color', 'strata' ),
						'type'	 => 'color-picker',
					),
					'menu_hover_color' => array(
						'label'	 => esc_html__( 'Menu Hover Color', 'strata' ),
						'type'	 => 'color-picker',
					),
					'menu_dropdown_bg_color' => array(
						'label'	 => esc_html__( 'Menu Dropdown Background Color', 'strata' ),
						'type'	 => 'color-picker',
					),
					'menu_dropdown_text_color' => array(
						'label'	 => esc_html__( 'Menu Dropdown Text Color', 'strata' ),
						'type'	 => 'color-picker',
					),
					'menu_dropdown_hover_color' => array(
						'label'	 => esc_html__( 'Menu Dropdown Text Hover Color', 'strata' ),
						'type'	 => 'color-picker',
					),
				),
			),
			/* Blog Settings */
			'news_setting_panel' => array(
				'title'		 => esc_html__( 'Blog Settings', 'strata' ),
				'options'	 => array(
					'news_settings'			 => array(
						'label'		 => esc_html__( 'Blog Settings', 'strata' ),
						'type'		 => 'select',
						'desc'		 => esc_html__( 'Choose your blog style', 'strata' ),
						'choices'	 => array(
							'rightsidebar'	 => esc_html__( 'Right Sidebar', 'strata' ),
							'fullwidth'		 => esc_html__( 'Full Width', 'strata' ),
							'leftsidebar'	 => esc_html__( 'Left Sidebar', 'strata' ),
						),
					),
					'global_blog_title'		 => array(
						'label'	 => esc_html__( 'Global Blog Title', 'strata' ),
						'type'	 => 'text',
					),
					'global_header_image'	 => array(
						'label'	 => esc_html__( 'Global Header Background Image', 'strata' ),
						'type'	 => 'upload',
					),
					'global_blog_breadcrumb' => array(
						'type'			 => 'switch',
						'label'			 => esc_html__( 'Breadcrumb', 'strata' ),
						'desc'			 => esc_html__( 'Do you want to show Breadcrumb?', 'strata' ),
						'left-choice'	 => array(
							'value'	 => 'yes',
							'label'	 => esc_html__( 'Yes', 'strata' ),
						),
						'right-choice'	 => array(
							'value'	 => 'no',
							'label'	 => esc_html__( 'No', 'strata' ),
						),
					),
					'blog_author_settings'	 => array(
						'type'			 => 'switch',
						'label'			 => esc_html__( 'Blog Author', 'strata' ),
						'desc'			 => esc_html__( 'Do you want to show blog author?', 'strata' ),
						'left-choice'	 => array(
							'value'	 => 'no',
							'label'	 => esc_html__( 'No', 'strata' ),
						),
						'right-choice'	 => array(
							'value'	 => 'yes',
							'label'	 => esc_html__( 'Yes', 'strata' ),
						),
					),
				),
			),
			/* Footer Bottom Section */
			'footer_panel' => array(
				'title'		 => esc_html__( 'Footer Settings', 'strata' ),
				'options'	 => array(
					'footer_bg_color' => array(
						'label'	 => esc_html__( 'Footer Background Color', 'strata' ),
						'type'	 => 'color-picker',
						'desc'	 => esc_html__( 'You can change the footer\'s background color with rgba color or solid color', 'strata' ),
					),
					'footer_top_bg_color' => array(
						'label'	 => esc_html__( 'Footer Top Background Color', 'strata' ),
						'type'	 => 'color-picker',
					),
					'widget_title_color' => array(
						'label'	 => esc_html__( 'Widget Title Color', 'strata' ),
						'type'	 => 'color-picker',
					),
					'widget_text_color' => array(
						'label'	 => esc_html__( 'Widget Text Color', 'strata' ),
						'type'	 => 'color-picker',
					),
					'widget_link_color' => array(
						'label'	 => esc_html__( 'Widget URL Color', 'strata' ),
						'type'	 => 'color-picker',
					),
					'widget_link_hover_color' => array(
						'label'	 => esc_html__( 'Widget URL Hover Color', 'strata' ),
						'type'	 => 'color-picker',
					),
					'copyright_info'		 => array(
						'label'	 => esc_html__( 'Copyright Info', 'strata' ),
						'type'	 => 'textarea',
						'value'	 => 'Copyright 2018, All Right Reserved Seobin',
						'desc'	 => false,
					),
					'copyright_text_color'	 => array(
						'label'	 => esc_html__( 'Copyright Text Color', 'strata' ),
						'type'	 => 'color-picker',
					),
					'footer_award_info'		 => array(
						'label'	 => esc_html__( 'Award Texts', 'strata' ),
						'type'	 => 'text',
						'desc'	 => false,
						'value'	 => 'Best Seo Company 2018',
					),
					'footer_award_logo' => array(
						'label'	 => esc_html__( 'Award Logo', 'strata' ),
						'type'	 => 'upload',
						'desc'	 => false,
					),
					'back_to_top' => array(
						'type'			 => 'switch',
						'value'			 => 'hello',
						'label'			 => esc_html__( 'Back to top icon', 'strata' ),
						'desc'			 => esc_html__( 'Do you want to show back to top icon?', 'strata' ),
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
			/* Google API */
			'xs_google_api_panel' => array(
				'title'		 => esc_html__( 'Google API', 'strata' ),
				'options'	 => array(
					'xs_google_api' => array(
						'label'	 => esc_html__( 'Google API', 'strata' ),
						'type'	 => 'text',
						'desc'	 => esc_html__( 'Put here your google API key.', 'strata' ),
					),
				),
			),
		),
		'wp-customizer-args' => array(
			'priority' => 3,
		),
	),
);
