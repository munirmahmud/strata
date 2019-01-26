<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'blog_settings' => array(
        'title' => esc_html__('Blog Settings', 'strata'),
        'type' => 'tab',
        'options' => array(
            'header-posts-box' => array(
                'title' => esc_html__('Posts Header', 'strata'),
                'type' => 'box',
                'options' => array(
                    'general_posts_header' => array(
                        'type' => 'multi',
                        'label' => false,
                        'attr' => array(
                            'class' => 'fw-option-type-multi-show-borders',
                        ),
                        'inner-options' => array(
                            'posts_header_group' => array(
                                'type' => 'group',
                                'options' => array(
                                    'breadcrumb' => array(
                                        'type' => 'switch',
                                        'label' => esc_html__('Breadcrumb', 'strata'),
                                        'desc' => esc_html__('Are you want to disable  breadcrumb?', 'strata'),
                                        'right-choice' => array(
                                            'value' => 'yes',
                                            'label' => esc_html__('Yes', 'strata'),
                                        ),
                                        'left-choice' => array(
                                            'value' => 'no',
                                            'label' => esc_html__('No', 'strata'),
                                        ),
                                    ),
                                    'header_title' => array(
                                        'type' => 'text',
                                        'label' => esc_html__('Blog Title', 'strata'),
                                        'value' => esc_html__('The Future of Web Design is Hidden in the History of Architecture', 'strata'),
                                        'desc' => esc_html__('Add your blog hero title', 'strata')
                                    ),
                                    'header_image' => array(
                                        'label' => esc_html__('Header Image', 'strata'),
                                        'desc' => esc_html__('Upload a header image', 'strata'),
                                        'help' => esc_html__('This default header image will be used for all your posts.', 'strata'),
                                        'type' => 'upload'
                                    ),
                                    'header_overlay_color' => array(
                                        'label' => '',
                                        'desc' => esc_html__('Select the image overlay color', 'strata'),
                                        'type' => 'rgba-color-picker'
                                    ),
                                )
                            ),
                        )
                    )
                )
            ),
            'blog' => array(
                'title' => esc_html__('Blog Settings', 'strata'),
                'type' => 'box',
                'options' => array(
                    'blog_display_settings' => array(
                        'type' => 'multi',
                        'label' => false,
                        'attr' => array(
                            'class' => 'fw-option-type-multi-show-borders',
                        ),
                        'inner-options' => array(
                            'post_date' => array(
                                'label' => esc_html__('Post Date', 'strata'),
                                'desc' => esc_html__('Show post date?', 'strata'),
                                'type' => 'switch',
                                'right-choice' => array(
                                    'value' => 'yes',
                                    'label' => esc_html__('Yes', 'strata')
                                ),
                                'left-choice' => array(
                                    'value' => 'no',
                                    'label' => esc_html__('No', 'strata')
                                ),
                                'value' => 'yes',
                            ),
                            'post_author' => array(
                                'label' => esc_html__('Post Author', 'strata'),
                                'desc' => esc_html__('Show post author?', 'strata'),
                                'type' => 'switch',
                                'right-choice' => array(
                                    'value' => 'yes',
                                    'label' => esc_html__('Yes', 'strata')
                                ),
                                'left-choice' => array(
                                    'value' => 'no',
                                    'label' => esc_html__('No', 'strata')
                                ),
                                'value' => 'yes',
                            ),
                            'post_categories' => array(
                                'label' => esc_html__('Post Categories', 'strata'),
                                'desc' => esc_html__('Show post categories?', 'strata'),
                                'type' => 'switch',
                                'right-choice' => array(
                                    'value' => 'yes',
                                    'label' => esc_html__('Yes', 'strata')
                                ),
                                'left-choice' => array(
                                    'value' => 'no',
                                    'label' => esc_html__('No', 'strata')
                                ),
                                'value' => 'yes',
                            ),
                            'post_comment' => array(
                                'label' => esc_html__('Post Comment', 'strata'),
                                'desc' => esc_html__('Show post Comment?', 'strata'),
                                'type' => 'switch',
                                'right-choice' => array(
                                    'value' => 'yes',
                                    'label' => esc_html__('Yes', 'strata')
                                ),
                                'left-choice' => array(
                                    'value' => 'no',
                                    'label' => esc_html__('No', 'strata')
                                ),
                                'value' => 'yes',
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
);
