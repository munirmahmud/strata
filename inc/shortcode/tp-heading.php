<?php

namespace Elementor;

if ( !defined( 'ABSPATH' ) )
	exit;

class TP_Heading_Widget extends Widget_Base {

	public function get_name() {
		return 'tp-heading';
	}

	public function get_title() {
		return esc_html__( 'Strata Heading', 'strata' );
	}

	public function get_icon() {
		return 'eicon-type-tool';
	}

	public function get_categories() {
		return [ 'strata-elements' ];
	}

	protected function _register_controls() {
		$this->start_controls_section(
			'section_tab', [
				'label' => esc_html__( 'Strata Heading', 'strata' ),
			]
		);

		$this->add_control(
			'title_text', [
				'label'			 => esc_html__( 'Heading Title', 'strata' ),
				'type'			 => Controls_Manager::TEXT,
				'label_block'	 => true,
				'placeholder'	 => esc_html__( 'Add title here', 'strata' ),
                'default'        => esc_html__( 'Add a title here', 'strata'),
			]
		);

		$this->add_responsive_control(
			'title_align', [
				'label'			 => esc_html__( 'Alignment', 'strata' ),
				'type'			 => Controls_Manager::CHOOSE,
				'options'		 => [

					'left'		 => [
						'title'	 => esc_html__( 'Left', 'strata' ),
						'icon'	 => 'fa fa-align-left',
					],
					'center'	 => [
						'title'	 => esc_html__( 'Center', 'strata' ),
						'icon'	 => 'fa fa-align-center',
					],
					'right'		 => [
						'title'	 => esc_html__( 'Right', 'strata' ),
						'icon'	 => 'fa fa-align-right',
					],
					'justify'	 => [
						'title'	 => esc_html__( 'Justified', 'strata' ),
						'icon'	 => 'fa fa-align-justify',
					],
				],
				'default'		 => 'center',
				'prefix_class'   => 'elementor%s-align-',
			]
		);
		$this->end_controls_section();

		//Title Style Section
		$this->start_controls_section(
			'section_title_style', [
				'label'	 => esc_html__( 'Title', 'strata' ),
				'tab'	 => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'title_color', [
				'label'		 => esc_html__( 'Title color', 'strata' ),
				'type'		 => Controls_Manager::COLOR,
				'selectors'	 => [
					'{{WRAPPER}} .section-title h2' => 'color: {{VALUE}};'
				],
			]
		);

		$this->add_control(
			'title_highlight_color', [
				'label'		 => esc_html__( 'Title Highlight color', 'strata' ),
				'type'		 => Controls_Manager::COLOR,
				'selectors'	 => [
					'{{WRAPPER}} .section-title h2>span' => 'color: {{VALUE}};'
				],
			]
		);

		$this->add_control(
			'title_margin_bottom', [
				'label'			 => esc_html__( 'Margin Bottom', 'strata' ),
				'type'			 => Controls_Manager::SLIDER,
				'default'		 => [
					'size' => '',
				],
				'range'			 => [
					'px' => [
						'min'	 => 0,
						'step'	 => 5,
					],
				],
				'size_units'	 => ['px'],
				'selectors'		 => [
					'{{WRAPPER}} .section-title h2'	=> 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
			'name'		 => 'title_typography',
			'selector'	 => '{{WRAPPER}} .section-title h2',
			]
		);

		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings();

		$title = $settings[ 'title_text' ];
		?>

        <div class="section-title">
            <h2><?php echo themespry_kses( sprintf( $title, '<span>', '</span>')) ?></h2>
            <span class="s-title-icon"><i class="icofont icofont-diamond"></i></span>
        </div>

<?php

	}

	protected function _content_template() {

	}
}
