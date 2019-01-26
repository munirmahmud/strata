<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'button_settings' => array(
        'type' => 'addable-popup',
        'size' => 'large',
        'label' => esc_html__('Button', 'strata'),
        'desc' => esc_html__('Add your button', 'strata'),
        'template' => 'Button : {{- label }}',
        'popup-options' => array(
            'style' => array(
                'label' => esc_html__('Style', 'strata'),
                'desc' => esc_html__('Choose button style', 'strata'),
                'type' => 'image-picker',
                'value' => '',
                'choices' => array(
                    'default' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => STRATA_IMAGES . '/image-picker/button/button1.png'
                        ),
                        'large' => array(
                            'height' => 208,
                            'src' => STRATA_IMAGES . '/image-picker/button/button1.png'
                        ),
                    ),
                    'primary' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => STRATA_IMAGES . '/image-picker/button/button2.png'
                        ),
                        'large' => array(
                            'height' => 208,
                            'src' => STRATA_IMAGES . '/image-picker/button/button2.png'
                        ),
                    ),
                    'dark' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => STRATA_IMAGES . '/image-picker/button/button3.png'
                        ),
                        'large' => array(
                            'height' => 208,
                            'src' => STRATA_IMAGES . '/image-picker/button/button3.png'
                        ),
                    ),
                ),
            ),
            'label' => array(
                'label' => esc_html__('Button Label', 'strata'),
                'desc' => esc_html__('This is the text that appears on your button', 'strata'),
                'type' => 'text',
                'value' => esc_html__('Read More', 'strata')
            ),
            'link' => array(
                'label' => esc_html__('Button Link', 'strata'),
                'desc' => esc_html__('Where should your button link to', 'strata'),
                'type' => 'text',
                'value' => '#'
            ),
            'target' => array(
                'type' => 'switch',
                'label' => esc_html__('Open Link in New Window', 'strata'),
                'desc' => esc_html__('Select here if you want to open the linked page in a new window', 'strata'),
                'right-choice' => array(
                    'value' => '_blank',
                    'label' => esc_html__('Yes', 'strata'),
                ),
                'left-choice' => array(
                    'value' => '_self',
                    'label' => esc_html__('No', 'strata'),
                ),
            ),
            'btn_icon_group' => array(
                'type' => 'group',
                'options' => array(
                    'icon' => array(
                        'type' => 'new-icon',
                        'label' => esc_html__('Icon', 'strata')
                    ),
                    'icon_position' => array(
                        'type' => 'switch',
                        'label' => '',
                        'desc' => esc_html__('Choose the icon position', 'strata'),
                        'right-choice' => array(
                            'value' => 'pull-right',
                            'label' => esc_html__('Right', 'strata'),
                        ),
                        'left-choice' => array(
                            'value' => '',
                            'label' => esc_html__('Left', 'strata'),
                        ),
                    ),
                )
            )
        )
    ),
    'btn_alignment' => array(
        'label' => esc_html__('Alignment', 'strata'),
        'desc' => esc_html__('Choose button or image alignment', 'strata'),
        'type' => 'image-picker',
        'value' => '',
        'choices' => array(
            '' => array(
                'small' => array(
                    'height' => 50,
                    'src' => STRATA_IMAGES . '/image-picker/no-align.jpg',
                    'title' => esc_html__('None', 'strata')
                ),
            ),
            'text-left' => array(
                'small' => array(
                    'height' => 50,
                    'src' => STRATA_IMAGES . '/image-picker/left-position.jpg',
                    'title' => esc_html__('Left', 'strata')
                ),
            ),
            'text-center' => array(
                'small' => array(
                    'height' => 50,
                    'src' => STRATA_IMAGES . '/image-picker/center-position.jpg',
                    'title' => esc_html__('Center', 'strata')
                ),
            ),
            'text-right' => array(
                'small' => array(
                    'height' => 50,
                    'src' => STRATA_IMAGES . '/image-picker/right-position.jpg',
                    'title' => esc_html__('Right', 'strata')
                ),
            ),
        ),
    ),
    'class' => array(
        'label' => esc_html__('Custom Class', 'strata'),
        'desc' => esc_html__('Enter custom CSS class', 'strata'),
        'help' => esc_html__('you can use this options to add a class and further style the shortcode by adding your custom CSS in the style.css file. This file is located on your server in the /themespry-child/style.css', 'strata'),
        'type' => 'text',
        'value' => '',
    ),
);
