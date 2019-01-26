<?php

if ( ! defined( 'ABSPATH' ) ) exit;

class TP_Elementor_Shortcode{

	/**
     * Holds the class object.
     *
     * @since 1.0
     *
     */
	public static $_instance;

	/**
     * Load Construct
     * 
     * @since 1.0
     */

	public function __construct(){

		add_action('elementor/init', array($this, 'tp_elementor_init'));
        add_action('elementor/widgets/widgets_registered', array($this, 'tp_shortcode_elements'));
        add_action( 'elementor/frontend/before_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
	}


    /**
     * Enqueue Scripts
     *
     * @return void
     */
    
     public function enqueue_scripts() {
        wp_enqueue_script( 'tp-elementor', STRATA_SCRIPTS . '/elementor.js',array( 'jquery', 'elementor-frontend' ), STRATA_VERSION, true );
    }

    
	/**
     * Elementor Initialization
     *
     * @since 1.0
     *
     */

    public function tp_elementor_init(){
        \Elementor\Plugin::$instance->elements_manager->add_category(
            'strata-elements',
            [
                'title' => esc_html__( 'Strata', 'strata' ),
                'icon' => 'fa fa-plug',
            ],
            1
        );
    }

    public function tp_shortcode_elements($widgets_manager){

        require_once STRATA_SHORTCODE_DIR . '/tp-slider.php';
        require_once STRATA_SHORTCODE_DIR . '/tp-heading.php';
        require_once STRATA_SHORTCODE_DIR . '/tp-button.php';
        require_once STRATA_SHORTCODE_DIR . '/tp-services.php';
        require_once STRATA_SHORTCODE_DIR . '/tp-team.php';
        require_once STRATA_SHORTCODE_DIR . '/tp-fun-fact.php';
        require_once STRATA_SHORTCODE_DIR . '/tp-price.php';
        require_once STRATA_SHORTCODE_DIR . '/tp-project.php';
        require_once STRATA_SHORTCODE_DIR . '/tp-testimonial.php';
        require_once STRATA_SHORTCODE_DIR . '/tp-small-box.php';
        require_once STRATA_SHORTCODE_DIR . '/tp-map.php';
        require_once STRATA_SHORTCODE_DIR . '/tp-skills.php';


        $widgets_manager->register_widget_type(new Elementor\TP_Slider_Widget());
        $widgets_manager->register_widget_type(new Elementor\TP_Heading_Widget());
        $widgets_manager->register_widget_type(new Elementor\TP_Button_Widget());
        $widgets_manager->register_widget_type(new Elementor\TP_Services_Widget());
        $widgets_manager->register_widget_type(new Elementor\TP_Team_Widget());
        $widgets_manager->register_widget_type(new Elementor\TP_Fun_Fact_Widget());
        $widgets_manager->register_widget_type(new Elementor\TP_Price_Widget());
        $widgets_manager->register_widget_type(new Elementor\TP_Project_Widget());
        $widgets_manager->register_widget_type(new Elementor\TP_Testimonial_Widget());
        $widgets_manager->register_widget_type(new Elementor\TP_Small_Box_Widget());
        $widgets_manager->register_widget_type(new Elementor\TP_Maps_Widget());
        $widgets_manager->register_widget_type(new Elementor\TP_Skills_Widget());
        
    }
    
	public static function tp_get_instance() {
        if (!isset(self::$_instance)) {
            self::$_instance = new TP_Elementor_Shortcode();
        }
        return self::$_instance;
    }

}
$tp_el_shortcode = TP_Elementor_Shortcode::tp_get_instance();
