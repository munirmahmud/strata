<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'image' => array(
        'type' => 'upload',
        'label' => esc_html__('Choose Image', 'strata'),
        'desc' => esc_html__('Either upload a new, or choose an existing image from your media library', 'strata')
    ),
    'image_size' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'select_size' => array(
                'label' => esc_html__('Size', 'strata'),
                'desc' => esc_html__('Select the image size', 'strata'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'type' => 'radio',
                'value' => 'auto',
                'choices' => array(
                    'auto' => esc_html__('auto', 'strata'),
                    'custom' => esc_html__('Custom', 'strata')
                ),
            ),
        ),
        'choices' => array(
            'custom' => array(
                'width' => array(
                    'label' => '',
                    'desc' => esc_html__('Image width in pixels', 'strata'),
                    'type' => 'short-text',
                    'value' => '',
                ),
                'position' => array(
                    'label' => '',
                    'desc' => esc_html__('Select image position', 'strata'),
                    'type' => 'image-picker',
                    'value' => 'fw-single-image-center',
                    'choices' => array(
                        'fw-single-image-left' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => STRATA_IMAGES . '/image-picker/left-position.jpg',
                                'title' => esc_html__('Left', 'strata')
                            ),
                        ),
                        'fw-single-image-center' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => STRATA_IMAGES . '/image-picker/center-position.jpg',
                                'title' => esc_html__('Center', 'strata')
                            ),
                        ),
                        'fw-single-image-right' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => STRATA_IMAGES . '/image-picker/right-position.jpg',
                                'title' => esc_html__('Right', 'strata')
                            ),
                        ),
                    ),
                ),
            ),
        )
    ),
    'height' => array(
        'label' => esc_html__('Height', 'strata'),
        'type' => 'radio-text',
        'value' => 'auto',
        'choices' => array(
            'auto' => esc_html__('auto', 'strata'),
        ),
        'custom' => 'custom_height',
        'help' => esc_html__('This option to use your custom height to like just add 500 (dont include with px)', 'strata'),
    ),
    'image-link-group' => array(
        'type' => 'group',
        'options' => array(
            'link' => array(
                'type' => 'text',
                'label' => esc_html__('Image Link', 'strata'),
                'desc' => esc_html__('Where should your image link to?', 'strata')
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
        )
    ),
    'class'				 => array(
        'label'	 => esc_html__( 'Custom Class', 'strata' ),
        'desc'	 => esc_html__( 'Enter custom CSS class', 'strata' ),
        'type'	 => 'text',
        'value'	 => '',
        'help'	 => esc_html__( 'You can use this class to further style this shortcode', 'strata' ),
    )
);

