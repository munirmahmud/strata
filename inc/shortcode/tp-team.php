<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit;

class TP_Team_Widget extends Widget_Base {

    public function get_name() {
        return 'tp-team';
    }

    public function get_title() {
        return esc_html__( 'Strata Team', 'strata' );
    }

    public function get_icon() {
        return 'fa fa-user-o';
    }

    public function get_categories() {
        return [ 'strata-elements' ];
    }

    protected function _register_controls() {
        $this->start_controls_section(
            'section_tab',
            [
                'label' => __('Strata Team', 'strata'),
            ]
        );

        $this->add_control(
            'member_name', 
            [
                'label'         => __('Name', 'strata'),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => __('JOHN DOE', 'strata'),
            ]
        );

        $this->add_control(
            'member_designation',
            [
                'label'         => __('Designation', 'strata'),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => __('CEO', 'strata'),
                
            ]
        );

        $this->add_control(
            'image',
            [
                'label'         => __( 'Photograph', 'strata' ),
                'type'          => Controls_Manager::MEDIA,
                'default'       => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Image_Size::get_type(),
            [
                'name' => 'image',
                'label' => esc_html__( 'Image Size', 'strata' ),
                'default' => 'full',
            ]
        );

        $this->add_control(

            'member_show_social', 
            [
                'label'         => esc_html__( 'Show Social', 'strata' ),
                'type'          => Controls_Manager::SWITCHER,
                'default'       => 'yes',
                'label_on'      => esc_html__( 'Yes', 'strata' ),
                'label_off'     => esc_html__( 'No', 'strata' ),
                
            ] 
        );

        $this->add_control(
            'facebook_url',
            [
                'type' => Controls_Manager::TEXT,
                'label' => esc_html__('Facebook URL', 'strata'),
                'description' => esc_html__('Team member\'s Facebook URL.', 'strata'),
                'default'   =>  '#',
                'condition' => [
                    'member_show_social' => 'yes',
                ],
                
            ]
        );

        $this->add_control(
            'twitter_url',
            [
                'type' => Controls_Manager::TEXT,
                'label' => esc_html__('Twitter URL', 'strata'),
                'description' => esc_html__('Team member\'s Twitter URL.', 'strata'),
                'default'   =>  '#',
                'condition' => [
                    'member_show_social' => 'yes',
                ],
                
            ]
        );

        $this->add_control(
            'instagram_url',
            [
                'type' => Controls_Manager::TEXT,
                'label' => esc_html__('Instagram URL', 'strata'),
                'description' => esc_html__('Team member\'s Instagram URL.', 'strata'),
                'default'   =>  '#',
                'condition' => [
                    'member_show_social' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'linkedin_url',
            [
                'type' => Controls_Manager::TEXT,
                'label' => esc_html__('Linkedin URL', 'strata'),
                'description' => esc_html__('Team member\'s Linkedin URL.', 'strata'),
                'default'   =>  '#',
                'condition' => [
                    'member_show_social' => 'yes',
                ],
            ]
        );

        $this->end_controls_section();


        $this->start_controls_section(
            'section_title_style',
            [
                'label'     => esc_html__( 'Team Style', 'strata' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );

        /**
         *
         * Normal Style
         *
         */

        $this->add_control(
            'member_name_color',
            [
                'label'     => esc_html__( 'Name color', 'strata' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .geobin-team-details p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'member_pos_color',
            [
                'label'     => esc_html__( 'Possition color', 'strata' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .geobin-team-details h5' => 'color: {{VALUE}} !important;',
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function render( ) {

        $settings = $this->get_settings();

        $member_name = $settings['member_name'];
        $designation = $settings['member_designation'];

        $member_show_social = $settings['member_show_social'];

        $fb = $settings['facebook_url'];
        $tw = $settings['twitter_url'];
        $instagram = $settings['instagram_url'];
        $linkedin = $settings['linkedin_url'];

        ?>


        <div class="team-single text-center m-b-30">
            <div class="team-img">

                <div class="team-img">
                    <?php echo Group_Control_Image_Size::get_attachment_image_html( $settings); ?>
                </div>
                <?php if($member_show_social): ?>
                    <ul>
                        <?php if(!empty($fb)): ?>
                            <li><a href="<?php echo esc_url($fb); ?>"><i class="fa fa-facebook"></i></a></li>
                        <?php endif; ?>
                        <?php if(!empty($tw)): ?>
                            <li><a href="<?php echo esc_url($tw); ?>"><i class="fa fa-twitter"></i></a></li>
                        <?php endif; ?>
                        <?php if(!empty($instagram)): ?>
                            <li><a href="<?php echo esc_url($instagram); ?>"><i class="fa fa-instagram"></i></a></li>
                        <?php endif; ?>
                        <?php if(!empty($linkedin)): ?>
                            <li><a href="<?php echo esc_url($linkedin); ?>"><i class="fa fa-linkedin"></i></a></li>
                        <?php endif; ?>
                    </ul>
                <?php endif; ?>
            </div>

            <div class="team-content">
                <?php if( !empty($member_name)) : ?>
                    <h3><?php echo esc_html( $member_name ); ?></h3>
                <?php endif; ?>

                <?php if (!empty($designation)) : ?>
                    <span><?php echo esc_html( $designation ); ?></span>
                <?php endif; ?>
            </div>
        </div>
        <?php

    }

    protected function _content_template() { }
}