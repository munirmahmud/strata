<?php

$options = array(
	'tp_theme_options' => array(
		'title'				 => esc_html__( 'Theme Options', 'strata' ),
		'options'			 => array(

		    //Header Top Settings
			'header_top_settings' => array(
				'title'		 => esc_html__( 'Header Top Settings', 'strata' ),
				'options'	 => array(

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

				),
			),


			//Header Settings
			'header_settings' => array(
				'title'		 => esc_html__( 'Header Settings', 'strata' ),
				'options'	 => array(

				    //Theme Logo
                    'tp_theme_logo' => array(
                        'label'          => esc_html__( 'Logo', 'strata' ),
                        'type'           => 'upload',
                        'desc'           => esc_html__( 'Upload the a logo with the dimention of 168 x 61', 'strata' ),
                        'images_only'    => true,
                        'files_ext'      => array( 'jpg', 'png', 'jpeg', 'gif', 'svg' ),
                    ),
				),
			),

            'tp_main_menu_styles' => array(
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


			/* Page Settings */
			'tp_page_setting_panel' => array(
				'title'		 => esc_html__( 'Page Settings', 'strata' ),
				'options'	 => array(
					'news_settings'			 => array(
						'label'		 => esc_html__( 'Page Settings', 'strata' ),
						'type'		 => 'select',
						'desc'		 => esc_html__( 'Choose your page style', 'strata' ),
						'choices'	 => array(
							'rightsidebar'	 => esc_html__( 'Right Sidebar', 'strata' ),
							'fullwidth'		 => esc_html__( 'Full Width', 'strata' ),
							'leftsidebar'	 => esc_html__( 'Left Sidebar', 'strata' ),
						),
					),
					'global_page_title'		 => array(
						'label'	 => esc_html__( 'Global Page Title', 'strata' ),
						'type'	 => 'text',
					),
					'global_page_subtitle'		 => array(
						'label'	 => esc_html__( 'Global Subtitle', 'strata' ),
						'type'	 => 'text',
					),
					'global_header_bg'	 => array(
                        'label'	             => __( 'Global Header Background Image', 'strata' ),
                        'type'	             => 'upload',
					),
					'global_page_breadcrumb' => array(
						'type'			 => 'switch',
						'label'			 => __( 'Breadcrumb', 'strata' ),
						'desc'			 => __( 'Do you want to show Breadcrumb?', 'strata' ),
						'left-choice'	 => array(
							'value'	 => 'yes',
							'label'	 => __( 'Yes', 'strata' ),
						),
						'right-choice'	 => array(
							'value'	 => 'no',
							'label'	 => __( 'No', 'strata' ),
						),
					),

                    //Overlay Color
                    'page_banner_overlay' => array(
                        'type'          => 'rgba-color-picker',
                        'value'         => 'rgba(0,0,0,0.7)',
                        // palette colors array
                        //'palettes'      => array( '#ba4e4e', '#0ce9ed', '#941940' ),
                        'label'         => __( 'Overlay Color', 'strata' ),
                    ),

                    //Color Picker
                    'page_heading_color' => array(
                        'type'          => 'color-picker',
                        'value'         => '#FFFFFF',
                        // palette colors array
                        //'palettes'      => array( '#ba4e4e', '#0ce9ed', '#941940' ),
                        'label'         => __( 'Heading Color', 'strata' ),
                    ),
                    'page_subtitle_color' => array(
                        'type'          => 'color-picker',
                        'value'         => '#FFFFFF',
                        // palette colors array
                        //'palettes'      => array( '#ba4e4e', '#0ce9ed', '#941940' ),
                        'label'         => __( 'Subtitle Color', 'strata' ),
                    ),

				),
			),


			/* Blog Settings */
			'tp_blog_setting_panel' => array(
				'title'		 => esc_html__( 'Blog Settings', 'strata' ),
				'options'	 => array(
					'news_settings'			 => array(
						'label'		 => __( 'Blog Settings', 'strata' ),
						'type'		 => 'select',
						'desc'		 => __( 'Choose your blog style', 'strata' ),
						'choices'	 => array(
							'rightsidebar'	 => __( 'Right Sidebar', 'strata' ),
							'fullwidth'		 => __( 'Full Width', 'strata' ),
							'leftsidebar'	 => __( 'Left Sidebar', 'strata' ),
						),
					),
					'global_blog_title'		 => array(
						'label'	 => __( 'Global Blog Title', 'strata' ),
						'type'	 => 'text',
					),
					'global_blog_subtitle'		 => array(
						'label'	 => __( 'Global Subtitle', 'strata' ),
						'type'	 => 'text',
					),
					'global_header_blog_bg'	 => array(
                        'label'	             => __( 'Global Header Background Image', 'strata' ),
                        'type'	             => 'upload',
					),
					'global_blog_breadcrumb' => array(
						'type'			 => 'switch',
						'label'			 => __( 'Breadcrumb', 'strata' ),
						'desc'			 => __( 'Do you want to show Breadcrumb?', 'strata' ),
						'left-choice'	 => array(
							'value'	 => 'yes',
							'label'	 => __( 'Yes', 'strata' ),
						),
						'right-choice'	 => array(
							'value'	 => 'no',
							'label'	 => __( 'No', 'strata' ),
						),
					),
					'blog_author_settings'	 => array(
						'type'			 => 'switch',
						'label'			 => __( 'Blog Author', 'strata' ),
						'desc'			 => __( 'Do you want to show blog author?', 'strata' ),
						'left-choice'	 => array(
							'value'	 => 'no',
							'label'	 => __( 'No', 'strata' ),
						),
						'right-choice'	 => array(
							'value'	 => 'yes',
							'label'	 => __( 'Yes', 'strata' ),
						),
					),


                    //Overlay Color
                    'heading_banner_overlay' => array(
                        'type'          => 'rgba-color-picker',
                        'value'         => '#FFFFFF',
                        'attr'          => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                        // palette colors array
                        //'palettes'      => array( '#ba4e4e', '#0ce9ed', '#941940' ),
                        'label'         => __( 'Overlay Color', 'strata' ),
                    ),

                    //Color Picker
                    'blog_heading_color' => array(
                        'type'          => 'color-picker',
                        'value'         => '#FFFFFF',
                        'attr'          => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                        // palette colors array
                        //'palettes'      => array( '#ba4e4e', '#0ce9ed', '#941940' ),
                        'label'         => __( 'Heading Color', 'strata' ),
                    ),
                    'blog_subtitle_color' => array(
                        'type'          => 'color-picker',
                        'value'         => '#FFFFFF',
                        'attr'          => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                        // palette colors array
                        //'palettes'      => array( '#ba4e4e', '#0ce9ed', '#941940' ),
                        'label'         => __( 'Subtitle Color', 'strata' ),
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
						'value'	 => 'Copyright 2018, All Right Reserved By Themespry',
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
			'tp_google_api_panel' => array(
				'title'		 => esc_html__( 'Google Map API', 'strata' ),
				'options'	 => array(
					'tp_google_api' => array(
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
