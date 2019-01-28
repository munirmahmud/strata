<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit;

class TP_Post_Widget extends Widget_Base {

    public $base;

    public function get_name() {
        return 'tp-blog';
    }

    public function get_title() {
        return esc_html__( 'Strata Post', 'strata' );
    }

    public function get_icon() {
        return 'eicon-posts-grid';
    }

    public function get_categories() {
        return [ 'strata-elements' ];
    }

    protected function _register_controls() {

        $this->start_controls_section(
            'section_tab',
            [
                'label' => esc_html__('Post', 'strata'),
            ]
        );

        $this->add_control(
            'post_count',
            [
                'label'         => esc_html__( 'Post count', 'strata' ),
                'type'          => Controls_Manager::NUMBER,
                'default'       => esc_html__( '3', 'strata' ),

            ]
        );

        $this->add_control(
            'xs_post_cat',
            [
                'label'    => esc_html__( 'Select category', 'strata' ),
                'type'     => Controls_Manager::SELECT,
                'options'  => xs_category_list( 'category' ),
                'default'  => '0'
            ]
        );

        $this->end_controls_section();
    }

    protected function render( ) {
        $settings = $this->get_settings();
        $xs_post_cat = $settings['xs_post_cat'];
        $post_count = $settings['post_count'];

        $paged = 1;
        if ( get_query_var('paged') ) $paged = get_query_var('paged');
        if ( get_query_var('page') ) $paged = get_query_var('page');
        $query = array(
            'post_type'      => 'post',
            'post_status'    => 'publish',
            'posts_per_page' => $post_count,
            'cat' => $xs_post_cat,
            'paged' => $paged,
        );

        $query = new \WP_Query( $query );
        if($query->have_posts()):
            ?>

            <div class="row">
                <?php
                while ($query->have_posts()) :
                    $query->the_post();
                    $terms  = get_the_terms( get_the_ID(), 'category' );
                    if ( $terms && ! is_wp_error( $terms ) ) :
                        $cat_temp = '';
                        foreach ( $terms as $term ) {
                            $cat_temp .= '<a href="'.get_category_link($term->term_id).'">'.$term->name.'</a>';
                        }
                    endif;
                    ?>
                    <div class="col-lg-4 col-md-12">
                        <div class="tw-latest-post">
                            <div class="latest-post-media text-center">
                                <?php
                                if(has_post_thumbnail()):
                                    $img = \xs_resize( get_post_thumbnail_id( $query->ID ), 350, 220 );
                                    ?>
                                    <img src="<?php echo esc_url($img); ?>" alt="<?php echo get_the_title($query->ID); ?>" class="img-fluid">
                                <?php endif; ?>
                            </div>
                            <!-- End Latest Post Media -->
                            <div class="post-body">
                                <div class="post-item-date">
                                    <div class="post-date">
                                        <span class="date"><?php echo get_the_date('d'); ?></span>
                                        <span class="month"><?php echo get_the_date('M'); ?></span>
                                    </div>
                                </div>
                                <!-- End Post Item Date -->
                                <div class="post-info">
                                    <div class="post-meta">
                       <span class="post-author">
                          <?php echo esc_html__('Posted by','strata') ?> <?php the_author_posts_link(); ?>
                       </span>
                                    </div>
                                    <!-- End Post Meta -->
                                    <h3 class="post-title"><a href="<?php echo esc_url(get_the_permalink() );  ?>"><?php the_title(); ?></a></h3>
                                    <div class="entry-content">
                                        <p><?php geobin_excerpt(10); ?></p>
                                    </div>
                                    <!-- End Entry Content -->
                                </div>
                                <!-- End Post info -->
                            </div>
                            <!-- End Post Body -->
                        </div>
                        <!-- End Tw Latest Post -->
                    </div>
                <?php endwhile; ?>
                <!-- End Col -->
            </div>

        <?php
        endif;
        wp_reset_postdata();
    }
    protected function _content_template() { }
}