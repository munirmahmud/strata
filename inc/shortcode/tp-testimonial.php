<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit;

class TP_Testimonial_Widget extends Widget_Base {

    public function get_name() {
        return 'tp-testimonial';
    }

    public function get_title() {
        return esc_html__( 'Strata Testimonial', 'strata' );
    }

    public function get_icon() {
        return 'eicon-testimonial';
    }

    public function get_categories() {
        return [ 'strata-elements' ];
    }

    protected function _register_controls() {
        
        $this->start_controls_section(
            'section_tab_style',
            [
                'label' => esc_html__('Strata Testimonial', 'strata'),
            ]
        );


        $this->add_control(
            'testimonial',
            [
                'label' => esc_html__('Client Name', 'strata'),
                'type' => Controls_Manager::REPEATER,
                'separator' => 'before',
                'default' => [
                    [
                        'client_name' => esc_html__('Testimonial #1', 'strata'),
                        'review' => esc_html__('Start working with an company that can do provide every thing at you need to generate awareness, drive traffic, connect with', 'strata'),
                        'designation' => 'CEO, Pranklin Agency',
                        'image' => Utils::get_placeholder_image_src(),
                    ],
                ],
                'fields' => [
                    [
                        'name' => 'client_name',
                        'label' => esc_html__('Client Name', 'strata'),
                        'type' => Controls_Manager::TEXT,
                        'label_block' => true,
                    ],

                    [
                        'name' => 'review',
                        'label' => esc_html__('Testimonial', 'strata'),
                        'type' => Controls_Manager::TEXTAREA,
                        'label_block' => true,
                    ],

                    [
                        'name' => 'designation',
                        'label' => esc_html__('Designation', 'strata'),
                        'type' => Controls_Manager::TEXT,
                        'label_block' => true,
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
                    
                ],
                
                'title_field' => '{{{ client_name }}}',
            ]
        );

        $this->end_controls_section();
        /**
         *
         * Client Name
         *
         */
        

        $this->start_controls_section(
            'section_name_style',
            [
                'label' => esc_html__('Name', 'strata'),
                'tab'   => Controls_Manager::TAB_STYLE
            ]
        );

        $this->add_control(
            'name_color',
            [
                'label' => esc_html__( 'Color', 'strata' ),
                'type' => Controls_Manager::COLOR,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .geobin-best-reviewr-content h3 ' => 'color: {{VALUE}} !important;',
                    '{{WRAPPER}} .geobin-single-testimonial h2 ' => 'color: {{VALUE}}!important;',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'name_typography',
                'label' => esc_html__( 'Typography', 'strata' ),
                'selector' => '{{WRAPPER}} .geobin-best-reviewr-content h3, 
                              {{WRAPPER}} .geobin-single-testimonial h2',
            ]
        );

        $this->end_controls_section();

        /**
         *
         * Testimonial
         *
         */
        

        $this->start_controls_section(
            'section_testimonial_style',
            [
                'label' => esc_html__('Testimonial', 'strata'),
                'tab'   => Controls_Manager::TAB_STYLE
            ]
        );

        $this->add_control(
            'tetimonial_color',
            [
                'label' => esc_html__( 'Color', 'strata' ),
                'type' => Controls_Manager::COLOR,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .geobin-best-reviewr-content p' => 'color: {{VALUE}} !important;',
                    '{{WRAPPER}} .geobin-single-testimonial p ' => 'color: {{VALUE}};',
                ],
            ]
        );



        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'testimonial_typography',
                'label' => esc_html__( 'Typography', 'strata' ),
                'selector' => '{{WRAPPER}} .geobin-best-reviewr-content p,  
                              {{WRAPPER}} .geobin-single-testimonial p',
            ]
        );

        $this->end_controls_section();

        /**
         *
         * Rating
         *
         */
        

        $this->start_controls_section(
            'section_rating_style',
            [
                'label' => esc_html__('Rating', 'strata'),
                'tab'   => Controls_Manager::TAB_STYLE
            ]
        );

        $this->end_controls_section();

    }

    protected function render( ) {

        $settings = $this->get_settings();

        $testimonials = $settings['testimonial'];
        ?>

        <div class="row testimonial">
        <?php if( is_array($testimonials) && !empty($testimonials) ) : ?>

                    <div class="col-md-8 col-md-offset-2">
                        <div class=" testimonial-slide one-item">
                            <div id="testimonial" class="swiper-wrapper owl-carousel">

                                <?php
                                foreach($testimonials as $testimonial):

                                if($testimonial['image'] != ''){
                                $img = tp_img_resize($testimonial['image']['id'] , 110,110,true);
                                }
                                $alt = get_post_meta($testimonial['image']['id'], '_wp_attachment_image_alt', true);
                                ?>
                                <div class="swiper-slide">
                                    <div class="testimonial-item style-4">
                                        <div class="testimonial-thumb">
                                            <!-- image -->
                                            <img src="<?php echo esc_url($img); ?>" alt="<?php echo esc_attr($alt); ?>">
                                        </div>
                                        <div class="review-txt">
                                            <?php if( !empty($testimonial['review']) ) : ?>
                                                <span>&ldquo;</span>
                                                <p><?php echo esc_html( $testimonial['review'] ); ?></p>
                                                <span>&rdquo;</span>
                                            <?php endif; ?>
                                        </div>

                                        <div class="reviewer-details">
                                            <?php if( !empty($testimonial['client_name']) ) : ?>
                                                <h3 class="reviewer-name"> - <?php echo esc_html( $testimonial['client_name'] ); ?></h3>
                                            <?php endif; ?>

                                            <?php if( !empty($testimonial['designation']) ) : ?>
                                                <h4 class="reviewer-deg"><?php echo esc_html( $testimonial['designation'] ); ?></h4>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>

                            </div>
                        </div>
                    </div>

            <?php endif; ?>
        </div>

<?php

    }

    protected function _content_template() { }
}