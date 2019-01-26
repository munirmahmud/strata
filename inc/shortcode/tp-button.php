<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit;

class TP_Button_Widget extends Widget_Base {

    public function get_name() {
        return 'tp-button';
    }

    public function get_title() {
        return esc_html__( 'Strata Button', 'strata' );
    }

    public function get_icon() {
        return 'eicon-button';
    }

    public function get_categories() {
        return [ 'strata-elements' ];
    }

    protected function _register_controls() {

        $this->start_controls_section(
            'section_tab',
            [
                'label' => esc_html__('Strata Button', 'strata'),
            ]
        );

        $this->add_control(
			'btn_text',
			[
				'label' => esc_html__( 'Button', 'strata' ),
				'label_block'   => true,
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Learn more ', 'strata' ),
				'placeholder' => esc_html__( 'Learn more ', 'strata' ),
			]
		);

		$this->add_control(
			'btn_link',
			[
				'label' => esc_html__( 'Link', 'strata' ),
				'type' => Controls_Manager::URL,
				'placeholder' => esc_html__('http://your-link.com','strata' ),
				'default' => [
					'url' => '#',
				],
			]
		);

		$this->add_responsive_control(
			'btn_align',
			[
				'label' => esc_html__( 'Alignment', 'strata' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left'    => [
						'title' => esc_html__( 'Left', 'strata' ),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'strata' ),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'strata' ),
						'icon' => 'fa fa-align-right',
					],
				],
				'prefix_class' => 'elementor%s-align-',
				'default' => '',
			]
		);

        $this->end_controls_section();


        //Style Tab
        $this->start_controls_section(
			'section_style',
			[
				'label' => esc_html__( 'Button Style', 'strata' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
            'btn_text_color',
            [
                'label' => esc_html__( 'Text Color', 'strata' ),
                'type' => Controls_Manager::COLOR,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .hvr-shutter-out-vertical' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'btn_bg_color',
            [
                'label' => esc_html__( 'Background Color', 'strata' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hvr-shutter-out-vertical' => 'background: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'btn_hover_color',
            [
                'label' => esc_html__( 'Hover Color', 'strata' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hvr-shutter-out-vertical:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'btn_bg_hover_color',
            [
                'label' => esc_html__( 'Background Hover Color', 'strata' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hvr-shutter-out-vertical:hover' => 'background: {{VALUE}};',
                    '{{WRAPPER}} .hvr-shutter-out-vertical:before' => 'background: {{VALUE}};'
                ],
            ]
        );

        $this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'btn_typography',
				'label' => esc_html__( 'Typography', 'strata' ),
				'selector' => '{{WRAPPER}} .hvr-shutter-out-vertical',
			]
		);

		$this->end_controls_section();


    }


    protected function render( ) {
        $settings = $this->get_settings();

        $btn_text = $settings['btn_text'];
		$btn_link = (! empty( $settings['btn_link']['url'])) ? $settings['btn_link']['url'] : '';
		
		$btn_target = ( $settings['btn_link']['is_external']) ? '_blank' : '_self';

        ?>

        <?php if( !empty($btn_text)) : ?>
        <a class="btn btn-default btn-style hvr-shutter-out-vertical" href="<?php echo esc_url( $btn_link ); ?>" target="<?php echo esc_html( $btn_target ); ?>">Read More</a>
        <?php endif; ?>

        <?php
    }

    protected function _content_template() { }
}