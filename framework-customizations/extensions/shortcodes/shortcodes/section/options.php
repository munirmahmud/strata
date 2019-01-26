<?php

if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'genarel-options'		 => array(
		'title'		 => esc_html__( 'General', 'strata' ),
		'type'		 => 'tab',
		'options'	 => array(
			'tp_id'			 => array(
				'type'	 => 'unique',
				'length' => 8
			),
			'section_title'	 => array(
				'type'	 => 'text',
				'label'	 => esc_html__( 'Sorting title', 'strata' ),
				'desc'	 => esc_html__( 'Enter a name (it is for internal use and will not appear on the front end) ', 'strata' )
			),
			'is_fullwidth'	 => array(
				'label'	 => esc_html__( 'Full Width', 'strata' ),
				'type'	 => 'switch',
			),
			'padding_group'	 => array(
				'type'		 => 'group',
				'options'	 => array(
					'html_label'	 => array(
						'type'	 => 'html',
						'label'	 => esc_html__( 'Inner Spacing', 'strata' ),
						'html'	 => '',
					),
					'padding_top'	 => array(
						'label'	 => false,
						'desc'	 => esc_html__( 'top', 'strata' ),
						'type'	 => 'short-text',
						'value'	 => '100',
					),
					'padding_right'	 => array(
						'label'	 => false,
						'desc'	 => esc_html__( 'right', 'strata' ),
						'type'	 => 'short-text',
						'value'	 => '0',
					),
					'padding_bottom' => array(
						'label'	 => false,
						'desc'	 => esc_html__( 'bottom', 'strata' ),
						'type'	 => 'short-text',
						'value'	 => '100',
					),
					'padding_left'	 => array(
						'label'	 => false,
						'desc'	 => esc_html__( 'left', 'strata' ),
						'type'	 => 'short-text',
						'value'	 => '0',
					),
				)
			),
			'margin_group'	 => array(
				'type'		 => 'group',
				'options'	 => array(
					'html_label'	 => array(
						'type'	 => 'html',
						'label'	 => esc_html__( 'Outer Spacing', 'strata' ),
						'html'	 => '',
					),
					'margin_top'	 => array(
						'label'	 => false,
						'desc'	 => esc_html__( 'top', 'strata' ),
						'type'	 => 'short-text',
						'value'	 => '0',
						'label'	 => false,
					),
					'margin_right'	 => array(
						'label'	 => false,
						'desc'	 => esc_html__( 'right', 'strata' ),
						'type'	 => 'short-text',
						'value'	 => '0',
					),
					'margin_bottom'	 => array(
						'label'	 => false,
						'desc'	 => esc_html__( 'bottom', 'strata' ),
						'type'	 => 'short-text',
						'value'	 => '0',
					),
					'margin_left'	 => array(
						'label'	 => false,
						'desc'	 => esc_html__( 'left', 'strata' ),
						'type'	 => 'short-text',
						'value'	 => '0',
					),
				),
			),
			'height'		 => array(
				'label'		 => esc_html__( 'Height', 'strata' ),
				'desc'		 => themespry_kses( "Select the section's height in px (Ex: 400) (dont include with <b>px</b>)", 'strata' ),
				'type'		 => 'radio-text',
				'value'		 => 'auto',
				'choices'	 => array(
					'auto'					 => esc_html__( 'auto', 'strata' ),
					'tp-section-height-sm'	 => esc_html__( 'small', 'strata' ),
					'tp-section-height-md'	 => esc_html__( 'medium', 'strata' ),
					'tp-section-height-lg'	 => esc_html__( 'large', 'strata' ),
				),
				'custom'	 => 'custom_width',
				'help'		 => esc_html__( 'This option to set extra height in your section. We have used three classes for extra height which small = 350px, medium= 450px , large = 650px. you can use your custom height to like just add 400 (no need to add px)', 'strata' ),
			),
		)
	),
	'style-options'			 => array(
		'title'		 => esc_html__( 'Styles', 'strata' ),
		'type'		 => 'tab',
		'options'	 => array(
			'background_options' => array(
				'type'			 => 'multi-picker',
				'label'			 => false,
				'desc'			 => false,
				'picker'		 => array(
					'background' => array(
						'label'		 => esc_html__( 'Background', 'strata' ),
						'desc'		 => esc_html__( 'Select the background for your section', 'strata' ),
						'attr'		 => array( 'class' => 'fw-checkbox-float-left' ),
						'type'		 => 'radio',
						'choices'	 => array(
							'none'		 => esc_html__( 'None', 'strata' ),
							'image'		 => esc_html__( 'Image', 'strata' ),
							'video'		 => esc_html__( 'Video', 'strata' ),
							'color'		 => esc_html__( 'Color', 'strata' ),
							'gradient'	 => esc_html__( 'Gradient', 'strata' ),
						),
						'value'		 => 'none'
					),
				),
				'choices'		 => array(
					'none'		 => array(),
					'color'		 => array(
						'background_color' => array(
							'label'	 => '',
							'desc'	 => esc_html__( 'Select the background color', 'strata' ),
							'type'	 => 'color-picker'
						),
					),
					'gradient'	 => array(
						'background' => array(
							'type'	 => 'gradient',
							'value'	 => array(
								'primary'	 => '#33001b',
								'secondary'	 => '#ff0084',
							),
							'desc'	 => esc_html__( 'Add your Gradient color', 'strata' ),
						),
					),
					'image'		 => array(
						'background_image'		 => array(
							'label'	 => '',
							'type'	 => 'background-image',
						),
						'image_position_group'	 => array(
							'type'		 => 'group',
							'attr'		 => array( 'class' => 'tp-shortwidth-group' ),
							'options'	 => array(
								'html_label'			 => array(
									'type'	 => 'html',
									'label'	 => esc_html__( 'Position', 'strata' ),
									'html'	 => '',
								),
								'repeat'				 => array(
									'label'		 => false,
									'desc'		 => esc_html__( 'Repeat', 'strata' ),
									'type'		 => 'short-select',
									'choices'	 => array(
										'no-repeat'	 => esc_html__( 'No-Repeat', 'strata' ),
										'repeat'	 => esc_html__( 'Repeat', 'strata' ),
										'repeat-x'	 => esc_html__( 'Repeat-X', 'strata' ),
										'repeat-y'	 => esc_html__( 'Repeat-Y', 'strata' ),
									)
								),
								'bg_position_x'			 => array(
									'label'		 => false,
									'desc'		 => esc_html__( 'horizontal position', 'strata' ),
									'type'		 => 'short-select',
									'choices'	 => array(
										'left'	 => esc_html__( 'Left', 'strata' ),
										'center' => esc_html__( 'Center', 'strata' ),
										'right'	 => esc_html__( 'Right', 'strata' ),
									),
									'value'		 => 'center',
									'attr'		 => array( 'class' => 'tp-shortwidth' ),
								),
								'bg_position_y'			 => array(
									'label'		 => false,
									'desc'		 => esc_html__( 'Vertical position', 'strata' ),
									'type'		 => 'short-select',
									'choices'	 => array(
										'top'	 => esc_html__( 'Top', 'strata' ),
										'center' => esc_html__( 'Center', 'strata' ),
										'bottom' => esc_html__( 'Bottom', 'strata' ),
									),
									'value'		 => 'center',
									'attr'		 => array( 'class' => 'tp-shortwidth' ),
								),
								'bg_size'				 => array(
									'label'		 => false,
									'help'		 => themespry_kses( '<strong>Auto</strong> - Default value, the background image has the original width and height.<br><br><strong>Cover</strong> - Scale the background image so that the background area is completely covered by the image.<br><br><strong>Contain</strong> - Scale the image to the largest size such that both its width and height can fit inside the content area.', 'strata' ),
									'desc'		 => esc_html__( 'Bg Size', 'strata' ),
									'type'		 => 'short-select',
									'value'		 => 'cover',
									'choices'	 => array(
										'auto'		 => esc_html__( 'Auto', 'strata' ),
										'cover'		 => esc_html__( 'Cover', 'strata' ),
										'contain'	 => esc_html__( 'Contain', 'strata' ),
									),
									'attr'		 => array( 'class' => 'tp-shortwidth' ),
								),
								'background_attachment'	 => array(
									'label'		 => false,
									'help'		 => esc_html__( 'The background-attachment property sets whether a background image is fixed or scrolls with the rest of the page.', 'strata' ),
									'desc'		 => esc_html__( 'Attachement', 'strata' ),
									'type'		 => 'short-select',
									'value'		 => 'scroll',
									'choices'	 => array(
										'scroll' => esc_html__( 'scroll', 'strata' ),
										'fixed'	 => esc_html__( 'fixed', 'strata' ),
									)
								),
								'parallax'				 => array(
									'type'			 => 'switch',
									'label'			 => esc_html__( 'Text white', 'strata' ),
									'desc'			 => esc_html__( 'Enable parllax effect in this image?', 'strata' ),
									'value'			 => 'no',
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
						'tab_item'				 => array(
							'type'			 => 'multi-picker',
							'label'			 => false,
							'desc'			 => false,
							'picker'		 => array(
								'selected_value' => array(
									'label'		 => esc_html__( 'Overlay', 'strata' ),
									'desc'		 => esc_html__( 'Select the tab type', 'strata' ),
									'attr'		 => array( 'class' => 'fw-checkbox-float-left' ),
									'value'		 => 'overlay11',
									'type'		 => 'radio',
									'choices'	 => array(
										'overlay11'	 => esc_html__( 'Overlay', 'strata' ),
										'gradient11' => esc_html__( 'Gradient', 'strata' ),
									),
								)
							),
							'choices'		 => array(
								'overlay11'	 => array(
									'background' => array(
										'label'	 => esc_html__( '', 'strata' ),
										'desc'	 => esc_html__( 'Select the overlay color', 'strata' ),
										'value'	 => 'rgba(0,0,0,0.35)',
										'type'	 => 'rgba-color-picker'
									),
								),
								'gradient11' => array(
									'background'			 => array(
										'type'	 => 'gradient',
										'value'	 => array(
											'primary'	 => '#33001b',
											'secondary'	 => '#ff0084',
										),
										'help'	 => esc_html__( 'Help tip', 'strata' ),
									),
									'gradient_trnsparent'	 => array(
										'type'		 => 'slider',
										'value'		 => 85,
										'properties' => array(
											'min'	 => 30,
											'max'	 => 90,
											'step'	 => 1, // Set slider step. Always > 0. Could be fractional.
										),
										'attr'		 => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
										'label'		 => esc_html__( ' ', 'strata' ),
										'desc'		 => esc_html__( 'Set your Gradient color', 'strata' ),
									)
								),
							),
							'show_borders'	 => false,
						),
					),
					'video'		 => array(
						'video_type'		 => array(
							'type'			 => 'multi-picker',
							'label'			 => false,
							'desc'			 => false,
							'attr'			 => array( 'class' => 'tp-video-background-image' ),
							'picker'		 => array(
								'select_video_xs' => array(
									'label'		 => esc_html__( 'Video Type', 'strata' ),
									'desc'		 => esc_html__( 'Select the video type', 'strata' ),
									'attr'		 => array( 'class' => 'fw-checkbox-float-left' ),
									'type'		 => 'radio',
									'choices'	 => array(
										'youtube'		 => esc_html__( 'Youtube', 'strata' ),
										'media_upload'	 => esc_html__( 'Upload', 'strata' ),
									),
									'value'		 => 'youtube'
								),
							),
							'choices'		 => array(
								'youtube'		 => array(
									'video'		 => array(
										'label'	 => esc_html__( '', 'strata' ),
										'desc'	 => esc_html__( 'Insert a YouTube video URL', 'strata' ),
										'type'	 => 'text',
									),
									'video_img'	 => array(
										'label'	 => esc_html__( 'Replacement Image', 'strata' ),
										'type'	 => 'background-image',
										'help'	 => esc_html__( 'This image will replace the video on mobile devices that disable background videos', 'strata' ),
									),
								),
								'media_upload'	 => array(
									'video'		 => array(
										'label'			 => esc_html__( '', 'strata' ),
										'desc'			 => esc_html__( 'Upload a video', 'strata' ),
										'images_only'	 => false,
										'type'			 => 'upload',
									),
									'video_img'	 => array(
										'label'	 => esc_html__( 'Alternate Image', 'strata' ),
										'type'	 => 'background-image',
										'help'	 => esc_html__( 'This image will replace the video on mobile devices that disable background videos', 'strata' ),
									),
								),
							),
							'show_borders'	 => false,
						),
						'overlay_options'	 => array(
							'type'		 => 'multi-picker',
							'label'		 => false,
							'desc'		 => false,
							'picker'	 => array(
								'overlay' => array(
									'type'			 => 'switch',
									'label'			 => esc_html__( 'Overlay Color', 'strata' ),
									'desc'			 => esc_html__( 'Enable video overlay color?', 'strata' ),
									'value'			 => 'no',
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
							'choices'	 => array(
								'no'	 => array(),
								'yes'	 => array(
									'background' => array(
										'label'	 => esc_html__( '', 'strata' ),
										'desc'	 => esc_html__( 'Select the overlay color', 'strata' ),
										'value'	 => 'rgba(0,0,0,0.25)',
										'type'	 => 'rgba-color-picker'
									),
								),
							),
						),
					),
				),
				'show_borders'	 => false,
			),
			'section_element'	 => array(
				'type'		 => 'group',
				'attr'		 => array( 'class' => 'tp-group' ),
				'options'	 => array(
					'html_label' => array(
						'type'	 => 'html',
						'value'	 => '',
						'label'	 => esc_html__( 'Element Style', 'strata' ),
						'html'	 => '',
					),
					'display'	 => array(
						'desc'		 => esc_html__( 'Display', 'strata' ),
						'type'		 => 'select',
						'choices'	 => array(
							''				 => esc_html__( '', 'strata' ),
							//'none'			 => esc_html__( 'None', 'strata' ), //
							'block'			 => esc_html__( 'Block', 'strata' ),
							'inline-block'	 => esc_html__( 'inline-block', 'strata' ),
							'inline'		 => esc_html__( 'inline', 'strata' ),
						),
						'value'		 => '',
						'label'		 => false,
					),
					'overflow'	 => array(
						'desc'		 => esc_html__( 'Overflow', 'strata' ),
						'type'		 => 'select',
						'choices'	 => array(
							''			 => esc_html__( '', 'strata' ),
							'hidden'	 => esc_html__( 'hidden', 'strata' ),
							'scroll'	 => esc_html__( 'scroll', 'strata' ),
							'visible'	 => esc_html__( 'visible', 'strata' ),
							'auto'		 => esc_html__( 'auto', 'strata' ),
						),
						'value'		 => 'hidden',
						'label'		 => false,
					),
					'overflow-x' => array(
						'desc'		 => esc_html__( 'Overflow-X', 'strata' ),
						'type'		 => 'select',
						'choices'	 => array(
							''			 => esc_html__( '', 'strata' ),
							'hidden'	 => esc_html__( 'hidden', 'strata' ),
							'scroll'	 => esc_html__( 'scroll', 'strata' ),
							'visible'	 => esc_html__( 'visible', 'strata' ),
							'auto'		 => esc_html__( 'auto', 'strata' ),
						),
						'value'		 => '',
						'label'		 => false,
					),
					'overflow-y' => array(
						'desc'		 => esc_html__( 'Overflow-Y', 'strata' ),
						'type'		 => 'select',
						'choices'	 => array(
							''			 => esc_html__( '', 'strata' ),
							'hidden'	 => esc_html__( 'hidden', 'strata' ),
							'scroll'	 => esc_html__( 'scroll', 'strata' ),
							'visible'	 => esc_html__( 'visible', 'strata' ),
							'auto'		 => esc_html__( 'auto', 'strata' ),
						),
						'value'		 => '',
						'label'		 => false,
					),
					'z-index'	 => array(
						'desc'	 => esc_html__( 'Z-index', 'strata' ),
						'type'	 => 'short-text',
						'value'	 => '',
						'label'	 => false,
					),
				)
			),
		),
	),
	'tp_responsive_options'	 => array(
		'title'		 => esc_html__( 'Responsive', 'strata' ),
		'type'		 => 'tab',
		'options'	 => array(
			'display_desktop'	 => array(
				'type'	 => 'multi-picker',
				'label'	 => false,
				'desc'	 => false,
				'picker' => array(
					'selected' => array(
						'type'			 => 'switch',
						'value'			 => 'yes',
						'label'			 => esc_html__( 'Desktop', 'strata' ),
						'desc'			 => esc_html__( 'Display this on desktop?', 'strata' ),
						'help'			 => esc_html__( 'Applies to devices with the resolution higher then 1200px (desktops and laptops)', 'strata' ),
						'left-choice'	 => array(
							'value'	 => 'no',
							'label'	 => esc_html__( 'No', 'strata' ),
						),
						'right-choice'	 => array(
							'value'	 => 'yes',
							'label'	 => esc_html__( 'Yes', 'strata' ),
						)
					),
				),
			),
			'display_medium'	 => array(
				'type'			 => 'switch',
				'value'			 => 'yes',
				'label'			 => esc_html__( 'Medium Device & Tablet Landscape', 'strata' ),
				'desc'			 => esc_html__( 'Display this  on tablet landscape?', 'strata' ),
				'help'			 => esc_html__( 'Applies to devices with the resolution between 992px - 1199px (Medium device and tablet landscape)', 'strata' ),
				'left-choice'	 => array(
					'value'	 => 'no',
					'label'	 => esc_html__( 'No', 'strata' ),
				),
				'right-choice'	 => array(
					'value'	 => 'yes',
					'label'	 => esc_html__( 'Yes', 'strata' ),
				)
			),
			'display_tablet'	 => array(
				'type'			 => 'switch',
				'value'			 => 'yes',
				'label'			 => esc_html__( 'Tablet Portrait', 'strata' ),
				'desc'			 => esc_html__( 'Display this on tablet portrait?', 'strata' ),
				'help'			 => esc_html__( 'Applies to devices with the resolution between 768px - 991px (tablet portrait)', 'strata' ),
				'left-choice'	 => array(
					'value'	 => 'no',
					'label'	 => esc_html__( 'No', 'strata' ),
				),
				'right-choice'	 => array(
					'value'	 => 'yes',
					'label'	 => esc_html__( 'Yes', 'strata' ),
				)
			),
			'display_phone'		 => array(
				'type'			 => 'switch',
				'value'			 => 'yes',
				'label'			 => esc_html__( 'Smartphone', 'strata' ),
				'desc'			 => esc_html__( 'Display this on smartphone?', 'strata' ),
				'help'			 => esc_html__( 'Applies to devices with the resolution up to 767px (smartphones both portrait and landscape as well as some low-resolution tablets)', 'strata' ),
				'left-choice'	 => array(
					'value'	 => 'no',
					'label'	 => esc_html__( 'No', 'strata' ),
				),
				'right-choice'	 => array(
					'value'	 => 'yes',
					'label'	 => esc_html__( 'Yes', 'strata' ),
				)
			),
		)
	),
	'custom-options'		 => array(
		'title'		 => esc_html__( 'Custom css', 'strata' ),
		'type'		 => 'tab',
		'options'	 => array(
			'class'		 => array(
				'label'	 => esc_html__( 'CSS Class', 'strata' ),
				'desc'	 => esc_html__( 'Enter custom CSS class', 'strata' ),
				'type'	 => 'text',
				'value'	 => '',
			),
			'link_id'	 => array(
				'label'	 => esc_html__( 'CSS ID', 'strata' ),
				'desc'	 => esc_html__( 'Enter custom CSS ID', 'strata' ),
				'type'	 => 'text',
				'value'	 => '',
			),
		)
	),
);
