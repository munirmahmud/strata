<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit;

class TP_Slider_Widget extends Widget_Base {

    public function get_name() {
        return 'tp-slider';
    }

    public function get_title() {
        return esc_html__( 'Strata Slider', 'strata' );
    }

    public function get_icon() {
        return 'eicon-slider-push';
    }

    public function get_categories() {
        return [ 'strata-elements' ];
    }

    protected function _register_controls() {
        $this->start_controls_section(
            'section_tab',
            [
                'label' => esc_html__('Strata Slider', 'strata'),
            ]
        );

        $this->add_control(
            'sliders',
            [
                'label' => esc_html__('Slider', 'strata'),
                'type' => Controls_Manager::REPEATER,
                'separator' => 'before',
                'default' => [
                    [
                        'title' => esc_html__('Add Title', 'strata'),
                        'description' => esc_html__('Allow our team of beauty specialists to help you prepare for your wedding and enhance your special.', 'strata'),
                        'btn_label_one' => esc_html__('Learn More', 'strata'),
                    ],

                    [
                        'title' => esc_html__('Add Title', 'strata'),
                        'description' => esc_html__('Allow our team of beauty specialists to help you prepare for your wedding and enhance your special.', 'strata'),
                        'btn_label_one' => esc_html__('Learn More', 'strata'),
                    ],

                    [
                        'title' => esc_html__('Add Title', 'strata'),
                        'description' => esc_html__('Allow our team of beauty specialists to help you prepare for your wedding and enhance your special.', 'strata'),
                        'btn_label_one' => esc_html__('Learn More', 'strata'),
                    ],
                ],
                'fields' => [

                        [

                        'name'          => 'slider_bg_img_color',
                        'label'         => esc_html__( 'Background Image or Color?', 'strata' ),
                        'type'          => Controls_Manager::SWITCHER,
                        'default'       => 'yes',
                        'label_on'      => esc_html__( 'Color', 'strata' ),
                        'label_off'     => esc_html__( 'Image', 'strata' ),
                    ],

                    [
                        'name' => 'slider_bg_color',
                        'label' => esc_html__('Background Color', 'strata'),
                        'type' => Controls_Manager::COLOR,
                        'condition' =>  [
                            'slider_bg_img_color' => 'yes'
                        ]
                    ],

                    [
                        'name' => 'slider_image',
                        'label' => esc_html__('Background Image', 'strata'),
                        'type' => Controls_Manager::MEDIA,
                        'default' => [
                            'url' => Utils::get_placeholder_image_src(),
                        ],
                        'condition' =>  [
                            'slider_bg_img_color' => ''
                        ]
                    ],

                    [
                        'name' => 'image',
                        'label' => esc_html__('Image', 'strata'),
                        'type' => Controls_Manager::MEDIA,
                        'default' => [
                            'url' => Utils::get_placeholder_image_src(),
                        ],
                        'label_block' => true,
                    ],

                    [
                        'name'  =>  'alignment',
                        'label'     => esc_html__( 'Image Alignment', 'strata' ),
                        'type'      => Controls_Manager::CHOOSE,
                        'options'   => [
                            'left'      => [
                                'title' => esc_html__( 'Left', 'strata' ),
                                'icon'  => 'fa fa-align-left',
                            ],
                            'right'     => [
                                'title' => esc_html__( 'Right', 'strata' ),
                                'icon'  => 'fa fa-align-right',
                            ],
                        ],
                    ],

                    [
                        'name'          => 'title',
                        'label'         => esc_html__('Title', 'strata'),
                        'label_block'   => true,
                        'type'          => Controls_Manager::TEXT,
                    ],

                    [
                        'name'   => 'slider_title_margin',
                        'label' => esc_html__( 'Title Margin Top', 'strata' ),
                        'type' => Controls_Manager::NUMBER,
                    ],

                    [
                        'name' => 'title_color',
                        'label' => esc_html__( 'Title Color', 'strata' ),
                        'type'  => Controls_Manager::COLOR,
                    ],

                    [
                        'name' => 'main_keyword_color',
                        'label' => esc_html__( 'Main Keyword Color', 'strata' ),
                        'type'  => Controls_Manager::COLOR,
                    ],

                    [
                        'name' => 'description',
                        'label' => esc_html__('Description', 'strata'),
                        'type' => Controls_Manager::TEXTAREA,
                    ],
                    [
                        'name' => 'description_color',
                        'label' => esc_html__( 'Description Color', 'strata' ),
                        'type'  => Controls_Manager::COLOR,
                    ],

                    [
                        'name' => 'btn_label_one',
                        'label' => esc_html__('Button Label', 'strata'),
                        'type' => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default'   => esc_html__('LEARN MORE', 'strata'),
                    ],

                    [
                        'name'  =>  'btn_link_one',
                        'label' => esc_html__( 'Link', 'strata' ),
                        'type' => Controls_Manager::URL,
                        'placeholder' => esc_html__('http://your-link.com','strata' ),
                        'default' => [
                            'url' => '',
                        ],
                    ],

                    [
                        'name' => 'btn_color',
                        'label' => esc_html__('Button Color', 'strata'),
                        'type' => Controls_Manager::COLOR,
                    ],

                    [
                        'name' => 'btn_hover_color',
                        'label' => esc_html__('Button Hover Color', 'strata'),
                        'type' => Controls_Manager::COLOR,
                    ],

                    [
                        'name' => 'btn_bg_color',
                        'label' => esc_html__('Button Background Color', 'strata'),
                        'type' => Controls_Manager::COLOR,
                    ],
                    [
                        'name' => 'btn_bg_hover_color',
                        'label' => esc_html__('Button Background Hover Color', 'strata'),
                        'type' => Controls_Manager::COLOR,
                    ],
                ],
                'title_field' => '{{{ title }}}',
            ]
        );

        $this->end_controls_section();

        //Title Style

        $this->start_controls_section(
            'section_title_style',
            [
                'label'     => esc_html__( 'Title', 'strata' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'label' => esc_html__( 'Typography', 'strata' ),
                'selector' => '{{WRAPPER}} .slider-content h1',
            ]
        );

        $this->add_control(
            'margin_bottom',
            [
                'label' => esc_html__( 'Margin Bottom', 'strata' ),
                'type' => Controls_Manager::SLIDER,
                'default' => [
                    'size' => '',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'size_units' => ['px'],
                'selectors' => [
                    '{{WRAPPER}} .slider-content h1' => 'margin-bottom: {{SIZE}}px;',
                ],
            ]
        );
        $this->end_controls_section();

        //Decription Style
        $this->start_controls_section(
            'section_desc_style',
            [
                'label'     => esc_html__( 'Description', 'strata' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'desc_typography',
                'label' => esc_html__( 'Typography', 'strata' ),
                'selector' => '{{WRAPPER}} .slider-content p',
            ]
        );

        $this->end_controls_section();
    }

    protected function render( ) {
        $settings = $this->get_settings();

        $sliders = $settings['sliders'];

        require STRATA_SHORTCODE_DIR_STYLE . '/slider/style.php';
    }

    protected function _content_template() { }
}
?>