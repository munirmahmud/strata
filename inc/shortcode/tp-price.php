<?php

namespace Elementor;

use function Couchbase\defaultDecoder;

if ( ! defined( 'ABSPATH' ) ) exit;

class TP_Price_Widget extends Widget_Base {

    public function get_name() {
        return 'tp-price';
    }

    public function get_title() {
        return __( 'Strata Pricing Table', 'strata' );
    }

    public function get_icon() {
        return 'eicon-price-table';
    }

    public function get_categories() {
        return [ 'strata-elements' ];
    }

    protected function _register_controls() {

        $this->start_controls_section(
            'pricing_plan',
            [
                'label' => __('Pricing Plans', 'strata'),
            ]
        );


        /*Pricing Table Style 1*/
        $this->add_control(
            'starta_pricing_table',
            [
                'type' => Controls_Manager::REPEATER,
                'default' => [
                    [
                        'table_title' => __("PROFESSIONAL", 'strata'),
                    ],
                ],
                'fields' => [
                    [
                        'name'          => 'featured_table',
                        'type'          => Controls_Manager::SWITCHER,
                        'label'         => __('Do you want to feature it?', 'strata'),
                        'label_block'       => true,
                        'default'       => 'label_off',
                        'label_on'      => __( 'Yes', 'strata' ),
                        'label_off'     => __( 'No', 'strata' ),
                    ],

                    [
                        'name'          => 'table_title',
                        'type'          => Controls_Manager::TEXT,
                        'label'         => __('Table Title', 'strata'),
                        'label_block'   => true,
                    ],


                    [
                        'name'          => 'currency_icon',
                        'type'          => Controls_Manager::TEXT,
                        'label'         => __('Currency', 'strata'),
                        'default'       => '$',
                        'label_block'   => true,
                    ],

                    [
                        'name'          => 'table_price',
                        'type'          => Controls_Manager::TEXT,
                        'label'         => esc_html__('Price', 'strata'),
                        'default'       => '29.99',
                        'label_block'   => true,
                    ],

                    [
                        'name'          => 'table_duration',
                        'type'          => Controls_Manager::TEXT,
                        'label'         => __('Duration', 'strata'),
                        'default'       => __('Month', 'strata'),
                        'label_block'   => true,
                    ],

                    [
                        'name'          => 'table_content',
                        'type'          => Controls_Manager::TEXTAREA,
                        'label'         => __('Table Content', 'strata'),
                        'label_block'   => true,
                    ],

                    [
                        'name'          => 'button_text',
                        'type'          => Controls_Manager::TEXT,
                        'label'         => __('Button Text', 'strata'),
                        'default'       => __('Order Now', 'strata'),
                        'label_block'   => true,
                    ],

                    [
                        'name'          => 'button_url',
                        'type'          => Controls_Manager::URL,
                        'label'         => __('Button URL', 'strata'),
                        'placeholder'   => 'http://example.com',
                        'label_block'   => true,
                    ],

                ],
                'title_field' => '{{{ table_title }}}',
            ]
        );



        $this->add_control(
            'table_top_image', [
                'label'			 => esc_html__( 'Table Top Image', 'strata' ),
                'type' => Controls_Manager::SWITCHER,
                'label' => esc_html__('Do you want to insert image?', 'strata'),
                'label_block'       => true,
                'default' => 'label_off',
                'label_on' => esc_html__( 'Yes', 'strata' ),
                'label_off' => esc_html__( 'No', 'strata' ),
                'condition'      => [
                    'pricing_table_style'     => 'style2',
                ]
            ]
        );

        $this->add_control(
            'package_title', [
                'label'			 => esc_html__( 'Table Title', 'strata' ),
                'type'			 => Controls_Manager::TEXT,
                'label_block'	 => true,
                'placeholder'	 => esc_html__( 'Put here a title', 'strata' ),
                'default'        => esc_html__('Starter Plan', 'strata'),
                'condition'      => [
                    'pricing_table_style'     => 'style2',
                ]
            ]
        );

        $this->add_control(
            'currency_icon', [
                'label'			 => esc_html__( 'Currency Icon', 'strata' ),
                'type'			 => Controls_Manager::TEXT,
                'label_block'	 => true,
                'placeholder'	 => esc_html__( 'Currency Icon', 'strata' ),
                'default'        => '$',
                'condition'      => [
                    'pricing_table_style'     => 'style2',
                ]
            ]
        );

        $this->add_control(
            'price_amount', [
                'label'			 => esc_html__( 'Price Amount', 'strata' ),
                'type'			 => Controls_Manager::TEXT,
                'label_block'	 => true,
                'placeholder'	 => esc_html__( 'Amount', 'strata' ),
                'default'        => '49.99',
                'condition'      => [
                    'pricing_table_style'     => 'style2',
                ]
            ]
        );

        $this->add_control(
            'general_table_duration', [
                'label'			 => esc_html__( 'Duration', 'strata' ),
                'type'			 => Controls_Manager::TEXT,
                'label_block'	 => true,
                'default'   => esc_html__('/Mo', 'strata'),
                'condition'      => [
                    'pricing_table_style'     => 'style2',
                ]
            ]
        );

        $this->add_control(
            'general_table_content', [
                'label'			 => esc_html__( 'Table Content...', 'strata' ),
                'type'			 => Controls_Manager::TEXTAREA,
                'label_block'	 => true,
                'placeholder'	 => esc_html__( 'Price Amount', 'strata' ),
                'default'        => false,
                'condition'      => [
                    'pricing_table_style'     => 'style2',
                ]
            ]
        );

        $this->add_control(
            'general_buy_btn', [
                'label'			 => esc_html__( 'Button Text', 'strata' ),
                'type'			 => Controls_Manager::TEXT,
                'label_block'	 => true,
                'placeholder'	 => esc_html__( 'Button Text', 'strata' ),
                'default'        => 'Buy Now',
                'condition'      => [
                    'pricing_table_style'     => 'style2',
                ]
            ]
        );

        $this->add_control(
            'general_buy_btn_url', [
                'label'			 => esc_html__( 'Button URL', 'strata' ),
                'type'			 => Controls_Manager::TEXT,
                'label_block'	 => true,
                'placeholder'	 => esc_html__( 'Button URL', 'strata' ),
                'default'        => 'http://example.com',
                'condition'      => [
                    'pricing_table_style'     => 'style2',
                ]
            ]
        );

        /*Pricing Tab style 3*/
        $this->add_control(
            'monthly_table_name_style3',
            [
                'type' => Controls_Manager::REPEATER,
                'default' => [
                    [
                        'pricing_title' => esc_html__("Monthly Package", 'strata'),
                    ],
                ],
                'fields' => [

                    [
                        'name' => 'table_background_color',
                        'type' => Controls_Manager::COLOR,
                        'label' => esc_html__('Table Background Color', 'strata'),
                        'label_block' => true,
                        'default'       => '#2BC2A7',
                    ],

                    [
                        'name' => 'table_btn_color',
                        'type' => Controls_Manager::COLOR,
                        'label' => esc_html__('Table Button Color', 'strata'),
                        'label_block' => true,
                        'default'       => '#2BC2A7',
                    ],

                    [
                        'name' => 'table_image',
                        'type' => Controls_Manager::MEDIA,
                        'label' => esc_html__('Table Image', 'strata'),
                        'label_block' => true,
                    ],

                    [
                        'name' => 'table_title',
                        'type' => Controls_Manager::TEXT,
                        'label' => esc_html__('Table Title', 'strata'),
                        'default' => esc_html__('Starter Plan', 'strata'),
                        'label_block' => true,
                    ],

                    [
                        'name' => 'currency_icon',
                        'type' => Controls_Manager::TEXT,
                        'label' => esc_html__('Currency', 'strata'),
                        'default'   => '$',
                        'label_block' => true,
                    ],

                    [
                        'name' => 'table_price',
                        'type' => Controls_Manager::TEXT,
                        'label' => esc_html__('Price', 'strata'),
                        'default'   => '29.99',
                        'label_block' => true,
                    ],

                    [
                        'name' => 'table_duration',
                        'type' => Controls_Manager::TEXT,
                        'label' => esc_html__('Duration', 'strata'),
                        'default'   => esc_html__('/yr', 'strata'),
                        'label_block' => true,
                    ],

                    [
                        'name' => 'table_content',
                        'type' => Controls_Manager::TEXTAREA,
                        'label' => esc_html__('Table Content', 'strata'),
                        'label_block' => true,
                    ],

                    [
                        'name' => 'button_text',
                        'type' => Controls_Manager::TEXT,
                        'label' => esc_html__('Button Text', 'strata'),
                        'default'   => 'Buy Now',
                        'label_block' => true,
                    ],

                    [
                        'name'          => 'button_url',
                        'type'          => Controls_Manager::URL,
                        'label'         => esc_html__('Button URL', 'strata'),
                        'placeholder'   => 'http://example.com',
                        'label_block'   => true,
                    ],

                ],
                'title_field' => '{{{ pricing_title }}}',
                'condition'     => ['pricing_table_style' => 'style3']
            ]
        );

        /*Yearly Package Repeater*/
        $this->add_control(
            'yearly_table_name_style3',
            [
                'type' => Controls_Manager::REPEATER,
                'default' => [
                    [
                        'pricing_title' => esc_html__("Yearly Table", 'strata'),
                    ],
                ],
                'fields' => [

                    [
                        'name' => 'table_background_color',
                        'type' => Controls_Manager::COLOR,
                        'label' => esc_html__('Table Background Color', 'strata'),
                        'label_block' => true,
                        'default'       => '#2BC2A7',
                    ],

                    [
                        'name' => 'table_btn_color',
                        'type' => Controls_Manager::COLOR,
                        'label' => esc_html__('Table Button Color', 'strata'),
                        'label_block' => true,
                        'default'       => '#2BC2A7',
                    ],

                    [
                        'name' => 'table_top_image',
                        'type' => Controls_Manager::MEDIA,
                        'label' => esc_html__('Table Top Image', 'strata'),
                        'label_block' => true,
                    ],

                    [
                        'name' => 'table_title',
                        'type' => Controls_Manager::TEXT,
                        'label' => esc_html__('Table Title', 'strata'),
                        'label_block' => true,
                    ],

                    [
                        'name' => 'table_content',
                        'type' => Controls_Manager::TEXTAREA,
                        'label' => esc_html__('Table Content', 'strata'),
                        'label_block' => true,
                    ],

                    [
                        'name' => 'currency_icon',
                        'type' => Controls_Manager::TEXT,
                        'label' => esc_html__('Currency', 'strata'),
                        'default'   => '$',
                        'label_block' => true,
                    ],

                    [
                        'name' => 'table_price',
                        'type' => Controls_Manager::TEXT,
                        'label' => esc_html__('Price', 'strata'),
                        'default'   => '29.99',
                        'label_block' => true,
                    ],

                    [
                        'name' => 'table_duration',
                        'type' => Controls_Manager::TEXT,
                        'label' => esc_html__('Duration', 'strata'),
                        'default'   => esc_html__('/yr', 'strata'),
                        'label_block' => true,
                    ],

                    [
                        'name' => 'button_text',
                        'type' => Controls_Manager::TEXT,
                        'label' => esc_html__('Button Text', 'strata'),
                        'default'   => 'Buy Now',
                        'label_block' => true,
                    ],

                    [
                        'name'          => 'button_url',
                        'type'          => Controls_Manager::URL,
                        'label'         => esc_html__('Button URL', 'strata'),
                        'placeholder'   => 'http://example.com',
                        'label_block'   => true,
                    ],

                ],
                'title_field' => '{{{ pricing_title }}}',
                'condition'     => ['pricing_table_style' => 'style3']
            ]
        );

        $this->end_controls_section();


        $this->start_controls_section(
			'section_title_style',
			[
				'label' 	=> esc_html__( 'Tab Styles', 'strata' ),
				'tab' 		=> Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'table_title_color',
			[
				'label'		=> esc_html__( 'Table Title Color', 'strata' ),
				'type'		=> Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pricing-feaures h3' => 'color: {{VALUE}} !important;',
				],
			]
		);

		$this->add_control(
			'package_title_hover_color',
			[
				'label'		=> esc_html__( 'Table Title Hover Color', 'strata' ),
				'type'		=> Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .tw-pricing-box:hover .pricing-feaures h3' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'tab_price_color',
			[
				'label'		=> esc_html__( 'Price Color', 'strata' ),
				'type'		=> Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pricing-price sup' => 'color: {{VALUE}};',
					'{{WRAPPER}} .pricing-price strong' => 'color: {{VALUE}};',
					'{{WRAPPER}} .pricing-price small' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'tab_price_content_color',
			[
				'label'		=> esc_html__( 'Table Content Color', 'strata' ),
				'type'		=> Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pricing-feaures ul li' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'tab_price_btn_color',
			[
				'label'		=> esc_html__( 'Button Color', 'strata' ),
				'type'		=> Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .tw-pricing-box .btn' => 'color: {{VALUE}};',
				]
			]
		);

		$this->add_control(
			'tab_btn_hover_color',
			[
				'label'		=> esc_html__( 'Button Hover Color', 'strata' ),
				'type'		=> Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .tw-pricing-box:hover .btn' => 'color: {{VALUE}} !important;'
				],
			]
		);

		$this->add_control(
			'tab_price_btn_bg',
			[
				'label'		=> esc_html__( 'Button BG Color', 'strata' ),
				'type'		=> Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .tw-pricing-box a.btn-dark' => 'background-color: {{VALUE}} !important;'
				],
			]
		);

		$this->add_control(
			'tab_btn_hover_bg',
			[
				'label'		=> esc_html__( 'Button Hover BG Color', 'strata' ),
				'type'		=> Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .tw-pricing-box:hover .btn' => 'background-color: {{VALUE}} !important;;'
				],
			]
		);

		$this->end_controls_section();


		/*General Package Table (style2)*/
        $this->start_controls_section(
            'general_table_style',
            [
                'label' 	=> esc_html__( 'General Table Style', 'strata' ),
                'tab' 		=> Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'general_table_bg_color',
            [
                'label'		=> esc_html__( 'Background Color', 'strata' ),
                'type'		=> Controls_Manager::COLOR,
                'default'	=> '#2BC2A7',
                'selectors' => [
                    '{{WRAPPER}} .tw-price-box' => '    background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'general_table_price_color',
            [
                'label'		=> esc_html__( 'Price, Currency Color', 'strata' ),
                'type'		=> Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tw-price-box .pricing-price strong' => ' color: {{VALUE}};',
                    '{{WRAPPER}} .tw-price-box .pricing-price sup' => ' color: {{VALUE}};',
                    '{{WRAPPER}} .tw-price-box .pricing-price small' => ' color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'general_table_title_color',
            [
                'label'		=> esc_html__( 'Background Color', 'strata' ),
                'type'		=> Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing-feaures h3' => ' color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'general_table_content_color',
            [
                'label'		=> esc_html__( 'Table Content Color', 'strata' ),
                'type'		=> Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing-feaures ul li' => ' color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'general_table_btn_bg_color',
            [
                'label'		=> esc_html__( 'Button Background', 'strata' ),
                'type'		=> Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tw-price-box .btn-dark' => ' background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'general_table_btn_hover',
            [
                'label'		=> esc_html__( 'Button Background Hover Color', 'strata' ),
                'type'		=> Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tw-price-box:hover .btn-dark' => ' background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'general_table_btn_color',
            [
                'label'		=> esc_html__( 'Button Color', 'strata' ),
                'type'		=> Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tw-price-box a.btn' => ' color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'general_table_btn_hover_color',
            [
                'label'		=> esc_html__( 'Button Hover Color', 'strata' ),
                'type'		=> Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tw-price-box:hover .btn-dark' => ' color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'general_table_btn_border_color',
            [
                'label'		=> esc_html__( 'Button Border Color', 'strata' ),
                'type'		=> Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tw-price-box a.btn' => ' border-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

    }

    protected function render( ) {
        $settings = $this->get_settings();

        $tables = $settings['starta_pricing_table'];
?>
        <?php foreach ( $tables as $table ) :
        $active = ($table['featured_table'] == 'yes') ? 'active-pricing' : '';

            ?>

        <div class="col-md-3">
            <div class="pricing-item text-center <?php echo esc_attr($active); ?>">
                <div class="pricing-heading">
                    <?php if( !empty( $table['table_title'] ) ) : ?>
                        <h6 class="title"><?php echo esc_html($table['table_title']); ?></h6>
                    <?php endif; ?>
                </div>

                <div class="pricing-body">

                    <div class="rate">
                        <?php if( !empty($table['table_price']) ) : ?>
                            <h3 class="amount"><?php echo esc_html($table['currency_icon']); ?><?php echo esc_html($table['table_price']); ?></h3>
                        <?php endif;
                        if( !empty($table['table_duration']) ) : ?>
                            <h6 class="validity"><?php echo esc_html($table['table_duration']); ?></h6>
                        <?php endif; ?>

                    </div>

                    <ul class="pricing-list">
                        <?php
                        $table_contents = preg_split('/\r\n|[\r\n]/', $table['table_content'] );

                        if( is_array( $table_contents ) && !empty( $table_contents ) ) :
                            foreach ($table_contents as $tab_text) :
                                ?>
                                <li><?php echo esc_html($tab_text); ?></li>
                            <?php endforeach; endif; ?>
                    </ul>

                    <?php if( !empty($table['button_text']) ) : ?>
                        <a href="<?php echo esc_url($table['button_url']['url']); ?>" class="button btn btn-default btn-style hvr-shutter-out-vertical"><?php echo esc_html($table['button_text']); ?></a>
                    <?php endif; ?>

                </div>
            </div>
        </div>
        <?php endforeach; ?>

<?php

    }


    protected function _content_template() { }
}