<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit;

class TP_Skills_Widget extends Widget_Base {

    public function get_name() {
        return 'tp-skills';
    }

    public function get_title() {
        return __( 'Strata Skills', 'strata' );
    }

    public function get_icon() {
        return 'eicon-testimonial';
    }

    public function get_categories() {
        return [ 'strata-elements' ];
    }

    protected function _register_controls() {

        $this->start_controls_section(
            'section_tab',
            [
                'label' => __('Strata Skills', 'strata'),
            ]
        );

        $this->add_control(
            'fact_name', [
                'label'         => __('Title', 'strata'),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => __('HTML5 & CSS3', 'strata'),
            ]
        );

        $this->add_control(
            'fact_value',
            [
                'label'         => __('Skill Percentage', 'strata'),
                'type'          => Controls_Manager::NUMBER,
                'default'       => __('83', 'strata'),
                'label_block'   => true,
            ]
        );

        $this->end_controls_section();


        $this->start_controls_section(
            'chart_title_color',
            [
                'label' => esc_html__('Title Styles', 'strata'),
                'tab'   => Controls_Manager::TAB_STYLE
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => esc_html__( 'Title Color', 'strata' ),
                'type' => Controls_Manager::COLOR,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .percent-area > p ' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .tw-traffic-counter h3 ' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'chart_title_typography',
                'label' => esc_html__( 'Typography', 'strata' ),
                'selectors' => [
                    '{{WRAPPER}} .percent-area > p',
                    '{{WRAPPER}} .tw-traffic-counter h3'
                ]
            ]
        );

        $this->end_controls_section();

    }

    protected function render( ) {

        $settings = $this->get_settings();

        $fact_name = $settings['fact_name'];
        $fact_value = $settings['fact_value'];
        $fact_icon = $settings['fact_icon'];


        ?>

        <div class="counter-item style-2">
            <div class="counter-item-inner">
                <i class="<?php echo $fact_icon; ?>" aria-hidden="true"></i>
                <h4 class="white-text"><?php echo esc_html($fact_name); ?></h4>

                <?php if( isset($fact_value) ) { ?>
                <span class="counter"><?php echo esc_html($fact_value); ?></span>
                <?php } ?>
            </div>
        </div>

<?php
    }

    protected function _content_template() { }
}