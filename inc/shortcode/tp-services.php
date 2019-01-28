<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit;

class TP_Services_Widget extends Widget_Base {

    public function get_name() {
        return 'tp-services';
    }

    public function get_title() {
        return esc_html__( 'Strata Services', 'strata' );
    }

    public function get_icon() {
        return 'fa fa-folder-open';
    }

    public function get_categories() {
        return [ 'strata-elements' ];
    }

    protected function _register_controls() {
        $this->start_controls_section(
            'section_tab',
            [
                'label' => esc_html__('Strata Service', 'strata'),
            ]
        );
    
		$this->add_control(
	      'service_icon', [
	        'label'         => __( 'Icon', 'strata' ),
                'label_block'	 => true,
	        'type'          => Controls_Manager::ICON,
	        'default'       => 'fa fa-gg',
	      ]
	    );

		$this->add_control(
	      'title', [
	        'label'         => __( 'Title', 'strata' ),
            'label_block'	=> true,
	        'type'          => Controls_Manager::TEXT,
	        'default'       => __('Financial Planning', 'strata'),
	      ]
	    );

        $this->add_control(
            'service_desc', [
                'label'			 => __( 'Service Description', 'strata' ),
                'type'			 => Controls_Manager::TEXTAREA,
                'label_block'	 => true,
                'default'        => __( 'Business Loan Our cross stage cunt be applications intended for iPhone, Blackberry, Android and so on run consist', 'strata'),
            ]
        );

        $this->add_control(
            'page_url',
            [
                'label' => __( 'URL', 'strata' ),
                'type' => Controls_Manager::URL,
                'default' => [
                    'url' => 'http://strata.com',
                    'is_external' => '',
                ],
                'show_external' => true, // Show the 'open in new tab' button.
            ]
        );

		$this->end_controls_section();


        //Styling Tab
		$this->start_controls_section(
            'section_genarel_styling',
            [
                'label' => esc_html__('General Setting', 'strata'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

		$this->add_control(
            'gutter',
            [
                'label' => esc_html__('Gutter', 'strata'),
                'description' => esc_html__('Space between columns in the grid.', 'strata'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .geobin-photo-gallery-grid-v3-item' => 'padding: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .geobin-photo-gallery-grid-item' => 'padding: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

	}
    protected function render( ) {

        $settings = $this->get_settings();

        $icon = $settings[ 'service_icon' ];
        $title = $settings[ 'title' ];
        $description = $settings[ 'service_desc' ];
        $page_url = (!empty($settings['page_url']['url']) ? $settings['page_url']['url'] : '');
        $target = $settings['page_url']['is_external'] ? '_blank' : '_self';

        ?>

        <div class="content service-grid-s1">

            <div class="grid">
                <?php if( $icon != '') : ?>
                    <div class="icon">
                        <i class="<?php echo esc_attr($icon); ?>"></i>
                    </div>
                <?php endif; ?>

                <div class="details">
                    <?php if( $title != '') : ?>
                        <h3><a href="<?php echo esc_url($page_url); ?>" target="<?php echo esc_attr($target); ?>"><?php echo esc_html($title); ?></a></h3>
                    <?php endif; ?>
                    <?php if( $description != '') : ?>
                        <p><?php echo esc_html($description); ?></p>
                    <?php endif; ?>
                </div>
            </div>

        </div>
        <!--End Service-->

<?php

    }

    protected function _content_template() { }
}
?>