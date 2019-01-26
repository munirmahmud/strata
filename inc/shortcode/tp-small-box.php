<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit;

class TP_Small_Box_Widget extends Widget_Base {

    public function get_name() {
        return 'tp-box';
    }

    public function get_title() {
        return esc_html__( 'Strata Box', 'geobin' );
    }

    public function get_icon() {
        return 'eicon-insert-image';
    }

    public function get_categories() {
        return [ 'strata-elements' ];
    }

    protected function _register_controls() {
        $this->start_controls_section(
            'section_tab',
            [
                'label' => esc_html__('Strata Box', 'strata'),
            ]
        );

        $this->add_control(
            'box_icon',
            [
                'label'         => __( 'Icon', 'strata' ),
                'type'          => Controls_Manager::ICON,
                'label_block'   => true,
                'default'       => 'fa fa-phone',
            ]
        );

        $this->add_control(
            'title',
            [
                'label'         => esc_html__( 'Title', 'strata' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'placeholder'   => esc_html__( 'Add title', 'strata' ),
                'default'       => esc_html__( 'Add Title', 'strata' ),
            ]
        );

        $this->add_control(
            'sub_title',
            [
                'label'         => __( 'Sub Title', 'strata' ),
                'type'          => Controls_Manager::TEXTAREA,
                'label_block'   => true,
                'default'       => __( 'admin@themespry.com', 'strata' ),
            ]
        );

        $this->end_controls_section();

        /**
		 *
		 *Title Style
		 *
		*/
        $this->start_controls_section(
			'section_title_tab',
			[
				'label' => esc_html__( 'Title', 'geobin' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'title_color',
			[
				'label' => esc_html__( 'Title Color', 'geobin' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .features-box h3' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .tw-service-features-box h3' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .tw-award-box h3' => 'color: {{VALUE}};',
				],
			]
		);

        $this->add_control(
            'title_hover_color',
            [
                'label' => esc_html__( 'Title Hover Color', 'geobin' ),
                'type' => Controls_Manager::COLOR,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .tw-award-box:hover h3' => 'color: {{VALUE}};',
                ],
            ]
        );

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'label' => esc_html__( 'Typography', 'geobin' ),
				'selectors' => '{{WRAPPER}} .features-box h3, .tw-service-features-box h3',
			]
		);

		$this->end_controls_section();


		/**
		 *
		 *Sub Title Style
		 *
		*/

        $this->start_controls_section(
			'section_sub_title_tab',
			[
				'label' => esc_html__( 'Sub Title', 'geobin' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'sub_title_color',
			[
				'label' => esc_html__( 'Color', 'geobin' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .features-box p ' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'sub_title_typography',
				'label' => esc_html__( 'Typography', 'geobin' ),
				'selector' => '{{WRAPPER}} .features-box p',
			]
		);


		$this->end_controls_section();

    }

    protected function render( ) {
    	
        $settings = $this->get_settings();
        $icon = $settings['box_icon'];
        $title = $settings['title'];
        $sub_title = $settings['sub_title'];

        ?>

        <div class="contact-info text-center">
            <?php if($icon): ?>
                <span><i class="<?php echo esc_attr($icon); ?>"></i></span>
            <?php endif; ?>

            <?php if($title): ?>
                <h4><?php echo esc_html($title); ?></h4>
            <?php endif; ?>

            <?php if($sub_title): ?>
                <h6><?php echo esc_html($sub_title); ?></h6>
            <?php endif; ?>
        </div>

<?php

    }



    protected function _content_template() { }
}