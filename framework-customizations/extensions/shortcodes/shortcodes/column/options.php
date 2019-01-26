<?php

if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$margin_and_padding_group = array(
	'padding_group'	 => array(
		'type'		 => 'group',
		'options'	 => array(
			'html_label'	 => array(
				'type'	 => 'html',
				'value'	 => '',
				'label'	 => esc_html__( 'Inner Spacing', 'strata' ),
				'html'	 => '',
			),
			'padding_top'	 => array(
				'label'	 => false,
				'desc'	 => esc_html__( 'top', 'strata' ),
				'type'	 => 'short-text',
				'value'	 => '0',
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
				'value'	 => '0',
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
				'value'	 => '',
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
);

$text_align	 = array(
	'txt_align' => array(
		'label'		 => esc_html__( 'Text Alignment', 'strata' ),
		'desc'		 => esc_html__( 'Select the alignment for your column', 'strata' ),
		'attr'		 => array( 'class' => 'fw-checkbox-float-left' ),
		'type'		 => 'radio',
		'choices'	 => array(
			'none'			 => esc_html__( 'None', 'strata' ),
			'text-left'		 => esc_html__( 'Left', 'strata' ),
			'text-center'	 => esc_html__( 'Center', 'strata' ),
			'text-right'	 => esc_html__( 'Right', 'strata' ),
		),
		'value'		 => 'none'
	),
);
$height		 = array(
	'height' => array(
		'label'		 => esc_html__( 'Height', 'strata' ),
		'type'		 => 'radio-text',
		'value'		 => 'auto',
		'choices'	 => array(
			'auto' => esc_html__( 'auto', 'strata' ),
		),
		'custom'	 => 'custom_height',
		'help'		 => esc_html__( 'This option to use your custom height to like just add 500 ', 'strata' ),
	)
);


$options = array(
	'column-options'		 => array(
		'title'		 => esc_html__( 'General', 'strata' ),
		'type'		 => 'tab',
		'options'	 => array(
			'tp_id'				 => array(
				'type'	 => 'unique',
				'length' => 8
			),
			'default_padding'	 => array(
				'type'			 => 'switch',
				'label'			 => esc_html__( 'Default Spacing', 'strata' ),
				'desc'			 => esc_html__( 'Use default left and right spacing?', 'strata' ),
				'help'			 => esc_html__( 'Default left and right spacings are set to 15px', 'strata' ),
				'attr'			 => array( 'class' => 'tp_column' ),
				'value'			 => '',
				'right-choice'	 => array(
					'value'	 => '',
					'label'	 => esc_html__( 'Yes', 'strata' ),
				),
				'left-choice'	 => array(
					'value'	 => 'tp-col-no-padding',
					'label'	 => esc_html__( 'No', 'strata' ),
				),
			),
			$margin_and_padding_group,
			$height,
			'txtcolor'			 => array(
				'label'	 => esc_html__( 'Text Color', 'strata' ),
				'type'	 => 'color-picker',
				'desc'	 => 'Change text color in this column.  Note some times its not work for default color',
			),
			$text_align,
		)
	),
	'column_style'			 => array(
		'title'		 => esc_html__( 'Style', 'strata' ),
		'type'		 => 'tab',
		'options'	 => array(
			'background_options' => array(
				'type'			 => 'multi-picker',
				'label'			 => false,
				'desc'			 => false,
				'attr'			 => array( 'class' => 'tp_column_background' ),
				'picker'		 => array(
					'background' => array(
						'label'		 => esc_html__( 'Background', 'strata' ),
						'desc'		 => esc_html__( 'Select the background for your column', 'strata' ),
						'attr'		 => array( 'class' => 'fw-checkbox-float-left' ),
						'type'		 => 'radio',
						'choices'	 => array(
							'none'		 => esc_html__( 'None', 'strata' ),
							'image'		 => esc_html__( 'Image', 'strata' ),
							'bgcolor'	 => esc_html__( 'Color', 'strata' ),
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
					'image'		 => array(
						'background_image'		 => array(
							'label'	 =>  '',

							'type'	 => 'background-image',
						),
						'image_position_group'	 => array(
							'type'		 => 'group',
							'options'	 => array(
								'html_label'	 => array(
									'type'	 => 'html',
									'label'	 => esc_html__( 'Position', 'strata' ),
									'html'	 => '',
								),
								'repeat'		 => array(
									'label'		 => false,
									'desc'		 => esc_html__( 'Repeat', 'strata' ),
									'type'		 => 'select',
									'choices'	 => array(
										'no-repeat'	 => esc_html__( 'No-Repeat', 'strata' ),
										'repeat'	 => esc_html__( 'Repeat', 'strata' ),
										'repeat-x'	 => esc_html__( 'Repeat-X', 'strata' ),
										'repeat-y'	 => esc_html__( 'Repeat-Y', 'strata' ),
									)
								),
								'bg_position_x'	 => array(
									'label'		 => false,
									'desc'		 => esc_html__( 'horizontal position', 'strata' ),
									'type'		 => 'select',
									'choices'	 => array(
										'left'	 => esc_html__( 'Left', 'strata' ),
										'center' => esc_html__( 'Center', 'strata' ),
										'right'	 => esc_html__( 'Right', 'strata' ),
									),
									'value'		 => 'center',
								),
								'bg_position_y'	 => array(
									'label'		 => false,
									'desc'		 => esc_html__( 'Vertical position', 'strata' ),
									'type'		 => 'select',
									'choices'	 => array(
										'top'	 => esc_html__( 'Top', 'strata' ),
										'center' => esc_html__( 'Center', 'strata' ),
										'bottom' => esc_html__( 'Bottom', 'strata' ),
									),
									'value'		 => 'center',
								),
								'bg_size'		 => array(
									'label'		 => false,
									'help'		 => themespry_kses( '<strong>Auto</strong> - Default value, the background image has the original width and height.<br><br><strong>Cover</strong> - Scale the background image so that the background area is completely covered by the image.<br><br><strong>Contain</strong> - Scale the image to the largest size such that both its width and height can fit inside the content area.', 'strata' ),
									'desc'		 => esc_html__( 'Bg Size', 'strata' ),
									'type'		 => 'select',
									'choices'	 => array(
										'auto'		 => esc_html__( 'Auto', 'strata' ),
										'cover'		 => esc_html__( 'Cover', 'strata' ),
										'contain'	 => esc_html__( 'Contain', 'strata' ),
									)
								),
							)
						),
						'overlay_options'		 => array(
							'type'		 => 'multi-picker',
							'label'		 => false,
							'desc'		 => false,
							'picker'	 => array(
								'overlay' => array(
									'type'			 => 'switch',
									'label'			 => esc_html__( 'Image Overlay', 'strata' ),
									'desc'			 => esc_html__( 'Enable image overlay color?', 'strata' ),
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
										'label'	 =>  '',

										'desc'	 => esc_html__( 'Select the overlay color', 'strata' ),
										'type'	 => 'rgba-color-picker',
										'value'	 => 'rgba(0,0,0,0.30)'
									),
								),
							),
						),
					),
					'bgcolor'	 => array(
						'background_color' => array(
							'label'	 =>  '',
							'desc'	 => esc_html__( 'Select the background color', 'strata' ),
							'type'	 => 'color-picker'
						),
					)
				),
				'show_borders'	 => false,
			),
			'animation'			 => array(
				'type'			 => 'switch',
				'label'			 => esc_html__( 'Animation Effect', 'strata' ),
				'desc'			 => esc_html__( 'Enable column animation effect?', 'strata' ),
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
			'column_border'		 => array(
				'type'		 => 'multi-picker',
				'label'		 => false,
				'desc'		 => false,
				'picker'	 => array(
					'selected' => array(
						'type'			 => 'switch',
						'value'			 => 'no',
						'label'			 => esc_html__( 'Border', 'strata' ),
						'desc'			 => esc_html__( 'Want to add border this column ?', 'strata' ),
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
				'choices'	 => array(
					'yes' => array(
						'border_option' => array(
							'type'		 => 'group',
							'options'	 => array(
								'html_label'	 => array(
									'type'	 => 'html',
									'value'	 => '',
									'label'	 => esc_html__( 'Border Option', 'strata' ),
									'html'	 => '',
								),
								'border'		 => array(
									'label'		 => false,
									'desc'		 => esc_html__( 'Border', 'strata' ),
									'type'		 => 'select',
									'choices'	 => array(
										'border'		 => esc_html__( 'border', 'strata' ),
										'border-top'	 => esc_html__( 'border-top', 'strata' ),
										'border-right'	 => esc_html__( 'border-right', 'strata' ),
										'border-bottom'	 => esc_html__( 'border-bottom', 'strata' ),
										'border-left'	 => esc_html__( 'border-left', 'strata' ),
									),
								),
								'border_size'	 => array(
									'label'	 => false,
									'desc'	 => esc_html__( 'Size', 'strata' ),
									'type'	 => 'short-text',
									'help'	 => esc_html__( 'Border size in pixels. NO need to add "px"', 'strata' ),
									'value'	 => '1',
								),
								'border_style'	 => array(
									'label'		 => false,
									'desc'		 => esc_html__( 'Style', 'strata' ),
									'type'		 => 'select',
									'choices'	 => array(
										'solid'	 => esc_html__( 'solid', 'strata' ),
										'dotted' => esc_html__( 'dotted', 'strata' ),
										'dashed' => esc_html__( 'dashed', 'strata' ),
										'double' => esc_html__( 'double', 'strata' ),
									),
								),
								'border_color'	 => array(
									'label'	 => false,
									'desc'	 => esc_html__( 'Color', 'strata' ),
									'help'	 => esc_html__( 'Select border color', 'strata' ),
									'type'	 => 'color-picker'
								),
							)
						),
					)
				)
			),
			'column_radius'		 => array(
				'type'		 => 'multi-picker',
				'label'		 => false,
				'desc'		 => false,
				'picker'	 => array(
					'selected' => array(
						'type'			 => 'switch',
						'value'			 => 'no',
						'label'			 => esc_html__( 'Border Radius', 'strata' ),
						'desc'			 => esc_html__( 'Want to add border Radius this column ?', 'strata' ),
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
				'choices'	 => array(
					'yes' => array(
						'border_option' => array(
							'type'		 => 'group',
							'options'	 => array(
								'html_label'	 => array(
									'type'	 => 'html',
									'value'	 => '',
									'label'	 => esc_html__( 'Radius', 'strata' ),
									'html'	 => '',
								),
								'top_left'		 => array(
									'label'	 => false,
									'desc'	 => esc_html__( 'Top Left', 'strata' ),
									'type'	 => 'short-text',
									'value'	 => '5',
								),
								'top_right'		 => array(
									'label'	 => false,
									'desc'	 => esc_html__( 'Top Right', 'strata' ),
									'type'	 => 'short-text',
									'value'	 => '5',
								),
								'bottom_right'	 => array(
									'label'	 => false,
									'desc'	 => esc_html__( 'Bottom Right', 'strata' ),
									'type'	 => 'short-text',
									'value'	 => '5',
								),
								'bottom_left'	 => array(
									'label'	 => false,
									'desc'	 => esc_html__( 'Bottom Left', 'strata' ),
									'type'	 => 'short-text',
//									'help'	 => esc_html__( 'Border Radius  will be like ', 'strata' ),
									'value'	 => '5',
								),
							)
						),
					)
				)
			),
			'column_shadow'		 => array(
				'type'		 => 'multi-picker',
				'label'		 => false,
				'desc'		 => false,
				'picker'	 => array(
					'selected' => array(
						'type'			 => 'switch',
						'value'			 => '',
						'label'			 => esc_html__( 'Shadow', 'strata' ),
						'desc'			 => esc_html__( 'Want to Add a shadow?', 'strata' ),
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
				'choices'	 => array(
					'yes' => array(
						'shadow_option' => array(
							'type'		 => 'group',
							'options'	 => array(
								'html_label'		 => array(
									'type'	 => 'html',
									'value'	 => '',
									'label'	 => esc_html__( 'Shadow Option', 'strata' ),
									'html'	 => '',
								),
								'shadow_horiontal'	 => array(
									'desc'	 => esc_html__( 'Horizontal', 'strata' ),
									'type'	 => 'short-text',
									'value'	 => '10',
									'label'	 => false,
								),
								'shadow_vertical'	 => array(
									'desc'	 => esc_html__( 'Vertical', 'strata' ),
									'type'	 => 'short-text',
									'value'	 => '10',
									'label'	 => false,
								),
								'shadow_blur'		 => array(
									'desc'	 => esc_html__( 'Blur distance', 'strata' ),
									'type'	 => 'short-text',
									'value'	 => '5',
									'label'	 => false,
								),
								'shadow_size'		 => array(
									'desc'	 => esc_html__( 'Size of shadow', 'strata' ),
									'type'	 => 'short-text',
									'value'	 => '10',
									'label'	 => false,
								),
								'shadow_color'		 => array(
									'desc'	 => esc_html__( 'Color', 'strata' ),
									'type'	 => 'rgba-color-picker',
									'value'	 => '#e30707',
									'label'	 => false,
								),
							)
						),
					)
				)
			),
		)
	),
	'advanced'				 => array(
		'title'		 => esc_html__( 'Advanced', 'strata' ),
		'type'		 => 'tab',
		'options'	 => array(
			'column_offset'			 => array(
				'type'				 => 'fw-multi-inline',
				'label'				 => esc_html__( 'Column Offset', 'strata' ),
				'desc'				 => esc_html__( 'Move columns to the right. Offset uses left padding to offset the Column.', 'strata' ),
				'help'				 => esc_html__( 'These classes increase the left margin of a column by * columns. For example, .fw-col-md-offset-4 moves .fw-col-md-4 over four columns.', 'strata' ),
				'attr'				 => array( 'class' => 'tp_responsive_column_offset' ),
				'value'				 => array(
					'md_offset'	 => '',
					'sm_offset'	 => '',
				),
				'fw_multi_options'	 => array(
					'md_offset'	 => array(
						'title'		 => esc_html__( 'Large Device md', 'strata' ),
						'type'		 => 'select',
						'choices'	 => array(
							''					 => esc_html__( 'Default', 'strata' ),
							'fw-col-md-offset-1' => esc_html__( 'moves 1 column', 'strata' ),
							'fw-col-md-offset-2' => esc_html__( 'moves 2 column', 'strata' ),
							'fw-col-md-offset-3' => esc_html__( 'moves 3 column', 'strata' ),
							'fw-col-md-offset-4' => esc_html__( 'moves 4 column', 'strata' ),
							'fw-col-md-offset-5' => esc_html__( 'moves 5 column', 'strata' ),
							'fw-col-md-offset-6' => esc_html__( 'moves 6 column', 'strata' ),
						)
					),
					'sm_offset'	 => array(
						'title'		 => esc_html__( 'Small Device sm', 'strata' ),
						'type'		 => 'select',
						'choices'	 => array(
							''					 => esc_html__( 'Default', 'strata' ),
							'fw-col-sm-offset-1' => esc_html__( 'moves 1 column', 'strata' ),
							'fw-col-sm-offset-2' => esc_html__( 'moves 2 column', 'strata' ),
							'fw-col-sm-offset-3' => esc_html__( 'moves 3 column', 'strata' ),
							'fw-col-sm-offset-4' => esc_html__( 'moves 4 column', 'strata' ),
							'fw-col-sm-offset-5' => esc_html__( 'moves 5 column', 'strata' ),
							'fw-col-sm-offset-6' => esc_html__( 'moves 6 column', 'strata' ),
						)
					),
				)
			),
			'column_element'		 => array(
				'type'		 => 'group',
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
						'value'		 => '',
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
			'last_column'			 => array(
				'type'		 => 'group',
				'attr'		 => array( 'class' => 'tp-group' ),
				'options'	 => array(
					'html_label'				 => array(
						'type'	 => 'html',
						'value'	 => '',
						'label'	 => esc_html__( 'Last Column', 'strata' ),
						'html'	 => '',
					),
					'last_column_large_device'	 => array(
						'label'		 => false,
						'desc'		 => esc_html__( 'Large Device md', 'strata' ),
						'type'		 => 'select',
						'choices'	 => array(
							'no'	 => esc_html__( 'no', 'strata' ),
							'yes'	 => esc_html__( 'yes', 'strata' ),
						),
					),
					'last_column_small_device'	 => array(
						'desc'		 => esc_html__( 'Small Device sm', 'strata' ),
						'type'		 => 'select',
						'choices'	 => array(
							'no'	 => esc_html__( 'no', 'strata' ),
							'yes'	 => esc_html__( 'yes', 'strata' ),
						),
						'help'		 => esc_html__( 'Last column will apply "clearfix" after this Column to reset the floating. So the next Column after this one will be pushed onto a new line.', 'strata' ),
						'label'		 => false,
					),
				)
			),
			'tp_column_pull_push'	 => array(
				'type'		 => 'multi-picker',
				'attr'		 => array( 'class' => 'tp_column_pull_pushoption' ),
				'label'		 => false,
				'desc'		 => false,
				'picker'	 => array(
					'selected' => array(
						'type'			 => 'switch',
						'value'			 => 'no',
						'label'			 => esc_html__( 'Push Pull', 'strata' ),
						'desc'			 => esc_html__( 'Easily change the order of our built-in grid columns with .fw-col-md-push-* and .fw-col-md-pull-* modifier classes. <b>Do NOT change</b> if you dont have idea about this', 'strata' ),
						'right-choice'	 => array(
							'value'	 => 'yes',
							'label'	 => esc_html__( 'Yes', 'strata' ),
						),
						'left-choice'	 => array(
							'value'	 => 'no',
							'label'	 => esc_html__( 'No', 'strata' ),
						)
					),
				),
				'choices'	 => array(
					'yes'	 => array(
						'column_push'	 => array(
							'type'				 => 'fw-multi-inline',
							'label'				 => esc_html__( 'Column Push Right', 'strata' ),
							'desc'				 => esc_html__( 'Column Push allows you to change the order of your Columns left column to right column for different breakpoints.', 'strata' ),
							'help'				 => esc_html__( 'Easily change the order of our built-in grid columns with .col-md-push-* and .col-md-pull-* modifier classes.', 'strata' ),
							'attr'				 => array( 'class' => 'tp_responsive_column_offset' ),
							'value'				 => array(
								'column_md_push' => '',
								'column_sm_push' => '',
							),
							'fw_multi_options'	 => array(
								'column_md_push' => array(
									'title'		 => esc_html__( 'Large Device md', 'strata' ),
									'type'		 => 'select',
									'choices'	 => array(
										''					 => esc_html__( 'Default', 'strata' ),
										'fw-col-md-push-1'	 => esc_html__( 'Push 1 column', 'strata' ),
										'fw-col-md-push-2'	 => esc_html__( 'Push 2 column', 'strata' ),
										'fw-col-md-push-3'	 => esc_html__( 'Push 3 column', 'strata' ),
										'fw-col-md-push-4'	 => esc_html__( 'Push 4 column', 'strata' ),
										'fw-col-md-push-5'	 => esc_html__( 'Push 5 column', 'strata' ),
										'fw-col-md-push-6'	 => esc_html__( 'Push 6 column', 'strata' ),
										'fw-col-md-push-7'	 => esc_html__( 'Push 7 column', 'strata' ),
										'fw-col-md-push-8'	 => esc_html__( 'Push 8 column', 'strata' ),
									)
								),
								'column_sm_push' => array(
									'title'		 => esc_html__( 'Small Device sm', 'strata' ),
									'type'		 => 'select',
									'choices'	 => array(
										''					 => esc_html__( 'Default', 'strata' ),
										'fw-col-sm-push-1'	 => esc_html__( 'Push 1 column', 'strata' ),
										'fw-col-sm-push-2'	 => esc_html__( 'Push 2 column', 'strata' ),
										'fw-col-sm-push-3'	 => esc_html__( 'Push 3 column', 'strata' ),
										'fw-col-sm-push-4'	 => esc_html__( 'Push 4 column', 'strata' ),
										'fw-col-sm-push-5'	 => esc_html__( 'Push 5 column', 'strata' ),
										'fw-col-sm-push-6'	 => esc_html__( 'Push 6 column', 'strata' ),
										'fw-col-sm-push-7'	 => esc_html__( 'Push 7 column', 'strata' ),
										'fw-col-sm-push-8'	 => esc_html__( 'Push 8 column', 'strata' ),
									)
								),
							)
						),
						'column_pull'	 => array(
							'type'				 => 'fw-multi-inline',
							'label'				 => esc_html__( 'Column Pull Left', 'strata' ),
							'desc'				 => esc_html__( 'Column Pull allows you to change the order of your right Column to left for different breakpoints.', 'strata' ),
							'help'				 => esc_html__( 'Easily change the order of our built-in grid columns with .col-md-push-* and .col-md-pull-* modifier classes.', 'strata' ),
							'attr'				 => array( 'class' => 'tp_responsive_column_offset' ),
							'value'				 => array(
								'column_md_pull' => '',
								'column_sm_pull' => '',
							),
							'fw_multi_options'	 => array(
								'column_md_pull' => array(
									'title'		 => esc_html__( 'Large Device md', 'strata' ),
									'type'		 => 'select',
									'choices'	 => array(
										''					 => esc_html__( 'Default', 'strata' ),
										'fw-col-md-pull-1'	 => esc_html__( 'Pull 1 column', 'strata' ),
										'fw-col-md-pull-2'	 => esc_html__( 'Pull 2 column', 'strata' ),
										'fw-col-md-pull-3'	 => esc_html__( 'Pull 3 column', 'strata' ),
										'fw-col-md-pull-4'	 => esc_html__( 'Pull 4 column', 'strata' ),
										'fw-col-md-pull-5'	 => esc_html__( 'Pull 5 column', 'strata' ),
										'fw-col-md-pull-6'	 => esc_html__( 'Pull 6 column', 'strata' ),
										'fw-col-md-pull-7'	 => esc_html__( 'Pull 7 column', 'strata' ),
										'fw-col-md-pull-8'	 => esc_html__( 'Pull 8 column', 'strata' ),
									)
								),
								'column_sm_pull' => array(
									'title'		 => esc_html__( 'Small Device sm', 'strata' ),
									'type'		 => 'select',
									'choices'	 => array(
										''					 => esc_html__( 'Default', 'strata' ),
										'fw-col-sm-pull-1'	 => esc_html__( 'Pull 1 column', 'strata' ),
										'fw-col-sm-pull-2'	 => esc_html__( 'Pull 2 column', 'strata' ),
										'fw-col-sm-pull-3'	 => esc_html__( 'Pull 3 column', 'strata' ),
										'fw-col-sm-pull-4'	 => esc_html__( 'Pull 4 column', 'strata' ),
										'fw-col-sm-pull-5'	 => esc_html__( 'Pull 5 column', 'strata' ),
										'fw-col-sm-pull-6'	 => esc_html__( 'Pull 6 column', 'strata' ),
										'fw-col-sm-pull-7'	 => esc_html__( 'Pull 7 column', 'strata' ),
										'fw-col-sm-pull-8'	 => esc_html__( 'Pull 8 column', 'strata' ),
									)
								),
							)
						),
					),
					'no'	 => array(),
				)
			),
			'info'					 => array(
				'type'	 => 'html',
				'label'	 => false,
				'html'	 => 'More detailed information about the Bootstrap Grid can be <a href="http://getbootstrap.com/css/#grid" target="_blank">found here</a>'
			),
		)
	),
	'tp_responsive_options'	 => array(
		'title'		 => esc_html__( 'Responsive', 'strata' ),
		'type'		 => 'tab',
		'options'	 => array(
			'responsive_layout'	 => array(
				'type'				 => 'fw-multi-inline',
				'label'				 => esc_html__( 'Responsive Layout', 'strata' ),
				'desc'				 => esc_html__( 'Choose the responsive tablet and phone display for this column.', 'strata' ),
				'help'				 => esc_html__( 'Use this option in order to control how this column behaves on tablets (and devices with the resoution between 768px - 990px for tablet, and less than 768px for mobile ). Note that on phones all the columns are 1/1 by default.', 'strata' ),
				'attr'				 => array( 'class' => 'tp_responsive_layout_postion' ),
				'value'				 => array(
					'desktop'	 => '',
					'tablet'	 => '',
					'phonexs'	 => 'fw-col-tp-12',
				),
				'fw_multi_options'	 => array(
					'desktop'	 => array(
						'title'		 => esc_html__( 'For Large Device', 'strata' ),
						'type'		 => 'select',
						'choices'	 => array(
							''				 => esc_html__( 'Default layout', 'strata' ),
							'fw-col-lg-2'	 => esc_html__( 'Make it a 1/6', 'strata' ),
							'fw-col-lg-3'	 => esc_html__( 'Make it a 1/4', 'strata' ),
							'fw-col-lg-4'	 => esc_html__( 'Make it a 1/3', 'strata' ),
							'fw-col-lg-6'	 => esc_html__( 'Make it a 1/2', 'strata' ),
							'fw-col-lg-8'	 => esc_html__( 'Make it a 2/3', 'strata' ),
							'fw-col-lg-9'	 => esc_html__( 'Make it a 3/4', 'strata' ),
							'fw-col-lg-12'	 => esc_html__( 'Make it a 1/1', 'strata' ),
						)
					),
					'tablet'	 => array(
						'title'		 => esc_html__( 'For Tablet', 'strata' ),
						'type'		 => 'select',
						'choices'	 => array(
							''				 => esc_html__( 'Default layout', 'strata' ),
							'fw-col-sm-2'	 => esc_html__( 'Make it a 1/6', 'strata' ),
							'fw-col-sm-3'	 => esc_html__( 'Make it a 1/4', 'strata' ),
							'fw-col-sm-4'	 => esc_html__( 'Make it a 1/3', 'strata' ),
							'fw-col-sm-6'	 => esc_html__( 'Make it a 1/2', 'strata' ),
							'fw-col-sm-8'	 => esc_html__( 'Make it a 2/3', 'strata' ),
							'fw-col-sm-9'	 => esc_html__( 'Make it a 3/4', 'strata' ),
							'fw-col-sm-12'	 => esc_html__( 'Make it a 1/1', 'strata' ),
						)
					),
					'phonexs'	 => array(
						'title'		 => esc_html__( 'For Phones', 'strata' ),
						'type'		 => 'select',
						'choices'	 => array(
							'fw-col-tp-2'	 => esc_html__( 'Make it a 1/6', 'strata' ),
							'fw-col-tp-3'	 => esc_html__( 'Make it a 1/4', 'strata' ),
							'fw-col-tp-4'	 => esc_html__( 'Make it a 1/3', 'strata' ),
							'fw-col-tp-6'	 => esc_html__( 'Make it a 1/2', 'strata' ),
							'fw-col-tp-8'	 => esc_html__( 'Make it a 2/3', 'strata' ),
							'fw-col-tp-9'	 => esc_html__( 'Make it a 3/4', 'strata' ),
							'fw-col-tp-12'	 => esc_html__( 'Default 1/1', 'strata' ),
						)
					),
				)
			),
			'display_desktop'	 => array(
				'type'	 => 'multi-picker',
				'label'	 => false,
				'desc'	 => false,
				'picker' => array(
					'selected' => array(
						'type'			 => 'switch',
						'value'			 => 'yes',
						'label'			 => esc_html__( 'Desktop', 'strata' ),
						'desc'			 => esc_html__( 'Display this column on desktop?', 'strata' ),
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
				'type'		 => 'multi-picker',
				'label'		 => false,
				'desc'		 => false,
				'picker'	 => array(
					'selected' => array(
						'type'			 => 'switch',
						'value'			 => 'yes',
						'label'			 => esc_html__( 'Medium Device & Tablet Landscape', 'strata' ),
						'desc'			 => esc_html__( 'Display this column on tablet landscape?', 'strata' ),
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
				),
				'choices'	 => array(
					'yes' => array(
						$margin_and_padding_group,
						'change_height' => array(
							'type'		 => 'multi-picker',
							'label'		 => false,
							'desc'		 => false,
							'picker'	 => array(
								'selected' => array(
									'type'			 => 'switch',
									'value'			 => 'no',
									'label'			 => esc_html__( 'Height', 'strata' ),
									'desc'			 => esc_html__( 'Change this column height medium device?', 'strata' ),
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
							'choices'	 => array(
								'yes' => array(
									$height,
								),
							)
						),
						$text_align,
					),
				)
			),
			'display_tablet'	 => array(
				'type'		 => 'multi-picker',
				'label'		 => false,
				'desc'		 => false,
				'picker'	 => array(
					'selected' => array(
						'type'			 => 'switch',
						'value'			 => 'yes',
						'label'			 => esc_html__( 'Tablet Portrait', 'strata' ),
						'desc'			 => esc_html__( 'Display this column on tablet portrait?', 'strata' ),
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
				),
				'choices'	 => array(
					'yes' => array(
						$margin_and_padding_group,
						'change_height' => array(
							'type'			 => 'multi-picker',
							'label'			 => false,
							'desc'			 => false,
							'picker'		 => array(
								'selected' => array(
									'type'			 => 'switch',
									'value'			 => 'no',
									'label'			 => esc_html__( 'Height', 'strata' ),
									'desc'			 => esc_html__( 'Change this column height medium device?', 'strata' ),
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
							'choices'		 => array(
								'yes' => array(
									$height,
								),
							),
							'show_borders'	 => false,
						),
						$text_align,
					),
				)
			),
			'display_phone'		 => array(
				'type'		 => 'multi-picker',
				'label'		 => false,
				'desc'		 => false,
				'picker'	 => array(
					'selected' => array(
						'type'			 => 'switch',
						'value'			 => 'yes',
						'label'			 => esc_html__( 'Smartphone', 'strata' ),
						'desc'			 => esc_html__( 'Display this column on smartphone?', 'strata' ),
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
				),
				'choices'	 => array(
					'yes' => array(
						$margin_and_padding_group,
						'change_height' => array(
							'type'		 => 'multi-picker',
							'label'		 => false,
							'desc'		 => false,
							'picker'	 => array(
								'selected' => array(
									'type'			 => 'switch',
									'value'			 => 'no',
									'label'			 => esc_html__( 'Height', 'strata' ),
									'desc'			 => esc_html__( 'Change this column height medium device?', 'strata' ),
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
							'choices'	 => array(
								'yes' => array(
									$height,
								),
							)
						),
						$text_align,
					),
				)
			),
		)
	),
	'custom_css'			 => array(
		'title'		 => esc_html__( 'Custom Css', 'strata' ),
		'type'		 => 'tab',
		'options'	 => array(
			'class'		 => array(
				'label'	 => esc_html__( 'Custom Class', 'strata' ),
				'desc'	 => esc_html__( 'Enter custom CSS class', 'strata' ),
				'help'	 => esc_html__( 'You can use this options to add a class and further style the shortcode by adding your custom CSS in the style.css file. This file is located on your server in the /themespry-child/style.css', 'strata' ),
				'type'	 => 'text',
				'value'	 => '',
			),
			'custom_id'	 => array(
				'label'	 => esc_html__( 'Custom ID', 'strata' ),
				'desc'	 => esc_html__( 'Enter custom CSS ID', 'strata' ),
				'help'	 => esc_html__( 'You can use this options to add a Css ID and further style the shortcode by adding your custom CSS in the style.css file. This file is located on your server in the /themespry-child/style.css', 'strata' ),
				'type'	 => 'text',
				'value'	 => '',
			),
		)
	),
);
