<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit;

class TP_Project_Widget extends Widget_Base {

    public function get_name() {
        return 'tp-projects';
    }

    public function get_title() {
        return esc_html__( 'Strata Projects', 'strata' );
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
                'label' => esc_html__('Strata Projects', 'strata'),
            ]
        );
    
		$this->add_control(
	      'post_count',
	      [
	        'label'         => esc_html__( 'Post count', 'strata' ),
	        'type'          => Controls_Manager::NUMBER,
	        'default'       => 12,
	      ]
	    );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_style',
            [
                'label' => esc_html__('Styles', 'strata'),
                'tab'   => Controls_Manager::TAB_STYLE
            ]
        );

        $this->add_responsive_control(
            'btn_margin',
            [
                'label' => esc_html__( 'Margin', 'strata' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'default' => [
                    'top' => '',
                    'right' => '',
                    'bottom' => '' ,
                    'left' => '',
                ],
                'selectors' => [
                    '{{WRAPPER}} .xs_btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

	}
    protected function render( ) {

        $settings = $this->get_settings();

        $post_count = $settings['post_count'];


		$project_cat = array(
            'orderby'       => 'ID',
            'order'         => 'DESC', 
            'hide_empty'    => 1,
            'hierarchical'  => 1,
            'taxonomy'      => 'portfolio_cat'
        );

        $categories = get_categories( $project_cat );

    	$query = array(
            'post_type'      => 'projects',
            'post_status'    => 'publish',
            'posts_per_page' => $post_count,
    	);

    	$tp_query = new \WP_Query($query);

        ?>


        <div class="portfolio-content">

            <div class="portfolio-filter-wrap text-center" >

                <?php if($tp_query->have_posts()): ?>
                    <?php if( is_array($categories) ) : ?>

                    <ul class="portfolio-filter hover-style-one">
                        <li class="active"><a href="#" data-filter="*"> All</a></li>
                        <?php
                        foreach ($categories as $category){ ?>
                            <li><a href="#" data-filter=".<?php echo esc_html($category->slug) .' '; ?>"><?php echo esc_html($category->name) .' '; ?></a></li>

                        <?php } ?>
                    </ul>
                <?php endif; ?>
            </div>

            <div class="portfolio portfolio-gutter portfolio-style-2 portfolio-container portfolio-masonry portfolio-column-count-4 ">

                <?php
            while ($tp_query->have_posts()) :
                $tp_query->the_post();

                $img_id = get_post_thumbnail_id();
                $img_url = wp_get_attachment_image_src( $img_id, 'full', true);


                $terms = get_the_terms(get_the_ID(), 'portfolio_cat');
                $filtering_slug = '';

                if ( $terms && ! is_wp_error($terms)) :
                    $filtering_slugs = array();
                    foreach ( $terms as $term ) {
                        $filtering_slugs[] = $term->slug;
                    }
                    $filtering_slug = join(" ", $filtering_slugs);
                endif;
                ?>
                <div class="portfolio-item <?php echo esc_attr($filtering_slug) .' '; ?>">
                    <div class="portfolio-item-content">
                        <div class="item-thumbnail">
                            <!-- Change the dummy image -->
                            <?php if( !empty($img_url)) : ?>
                                <img src="<?php echo esc_url($img_url[0]); ?>" alt="<?php echo get_the_title(); ?>" class="img-fluid">
                            <?php endif; ?>
                        </div>
                        <div class="portfolio-description">
                            <h4><a href="<?php echo get_the_permalink(); ?>" ><?php echo get_the_title(); ?></a></h4>
                            <!-- Change the dummy image -->
                            <a href="<?php echo esc_url($img_url[0]); ?>"><i class="fa fa-search-plus"></i></a>
                            <a target="_blank" href="<?php echo get_the_permalink(); ?>"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>

            </div>
            <?php endif; ?>

        </div>


    <?php wp_reset_postdata();
    }

    protected function _content_template() { }
}
?>