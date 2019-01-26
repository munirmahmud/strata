<?php

if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'styling_settings' => array(
		'title'		 => esc_html__( 'Styling Settings', 'strata' ),
		'type'		 => 'tab',
		'options'	 => array(
			'header-styling-box' => array(
				'title'		 => esc_html__( 'Styling Settings', 'strata' ),
				'type'		 => 'box',
				'options'	 => array(
					'main_color'		 => array(
						'type'	 => 'color-picker',
						'label'	 => 'Theme Color',
						'desc'	 => 'You can use any color in your theme',
						'value'	 => '#FF6600'
					),
					'secondary_color'	 => array(
						'type'	 => 'color-picker',
						'label'	 => 'Secondary Color',
						'desc'	 => 'You can use any color in your theme',
						'value'	 => '#fc6a2a'
					),
					'others_color'	 => array(
						'type'	 => 'color-picker',
						'label'	 => 'Others Color',
						'desc'	 => 'Somke color need different exposure into theme',
						'value'	 => '#fc6a2a'
					),
					'typography-global'	 => array(
						'title'		 => esc_html__( 'Global Typography', 'strata' ),
						'type'		 => 'box',
						'options'	 => array(
							'body_font'		 => array(
								'type'		 => 'typography-v2',
								'value'		 => array(
									'family'		 => 'Asap',
									// For standard fonts, instead of subset and variation you should set 'style' and 'weight'.
									'style'			 => 'regular',
									'weight'		 => 400,
									'subset'		 => 'latin-ext',
									'size'			 => 16,
									'line-height'	 => 30,
//									'letter-spacing' => '',
									'color'			 => '#6a6a6a'
								),
								'components' => array(
									'family'		 => true,
									'style'			 => true,
									'weight'		 => true,
									// 'style', 'weight', 'subset', 'variation' will appear and disappear along with 'family'
									'size'			 => true,
									'line-height'	 => true,
									'letter-spacing' => false,
									'color'			 => true
								),
								'label'		 => esc_html__( 'Body Font', 'strata' ),
								'desc'		 => esc_html__( 'This is default body font for your site', 'strata' ),
							),
							'heading_title'	 => array(
								'type'		 => 'typography-v2',
								'value'		 => array(
									'family'		 => 'gilroyextrabold',
									'style'			 => 'normal',
									'weight'		 => 400,
									'subset'		 => 'latin-ext',
									'variation'		 => 300,
//									'size'			 => 14,
									'line-height'	 => 15,
									'letter-spacing' => 0,
									'color'			 => '#252a37'
								),
								'components' => array(
									'family'		 => true,
									'style'			 => true,
									'weight'		 => true,
									'size'			 => false,
									'line-height'	 => false,
									'letter-spacing' => false,
									'color'			 => true
								),
								'label'		 => esc_html__( 'Heading Fonts', 'strata' ),
								'desc'		 => esc_html__( 'This is for heading google fonts', 'strata' ),
							),
							'extra_fonts'	 => array(
								'type'		 => 'typography-v2',
								'value'		 => array(
									'family'		 => 'Asap',
									'style'			 => 'italic',
									'weight'		 => 400,
									'subset'		 => 'latin-ext',
									'variation'		 => 'italic',
//									'size'			 => 14,
									'line-height'	 => 15,
									'letter-spacing' => 0,
									'color'			 => '#252a37'
								),
								'components' => array(
									'family'		 => true,
									'style'			 => true,
									'weight'		 => true,
									'size'			 => false,
									'line-height'	 => false,
									'letter-spacing' => false,
									'color'			 => false
								),
								'label'		 => esc_html__( 'Extra Fonts', 'strata' ),
								'desc'		 => esc_html__( 'This for Extra font load in google fonts. This is optional', 'strata' ),
							),
							'extra_fonts_2'	 => array(
								'type'		 => 'typography-v2',
								'value'		 => array(
									'family'		 => 'Asap',
									'style'			 => 'normal',
									'weight'		 => 500,
									'subset'		 => 'latin-ext',
									'variation'		 => 500,
//									'size'			 => 14,
									'line-height'	 => 15,
									'letter-spacing' => 0,
									'color'			 => '#252a37'
								),
								'components' => array(
									'family'		 => true,
									'style'			 => true,
									'weight'		 => true,
									'size'			 => false,
									'line-height'	 => false,
									'letter-spacing' => false,
									'color'			 => false
								),
								'label'		 => esc_html__( 'Extra Fonts 2', 'strata' ),
								'desc'		 => esc_html__( 'This for Extra font load in google fonts. This is optional', 'strata' ),
							),
						),
					),
				)
			),
			'css-box'			 => array(
				'title'		 => esc_html__( 'EXTRA CSS', 'strata' ),
				'type'		 => 'box',
				'options'	 => array(
					'custom_css' => array(
						'label'	 => esc_html__( 'Custom CSS', 'strata' ),
						'desc'	 => esc_html__( 'Custom Css changes that will be applied to the theme', 'strata' ),
						'help'	 => esc_html__( 'If you need to change major portions of the theme please add your custom CSS in the style.css file. This file is located on your server in the <strong>/child-theme/style.css</strong>', 'strata' ),
						'type'	 => 'textarea',
						'value'	 => '',
					),
				)
			),
		),
	),
);
