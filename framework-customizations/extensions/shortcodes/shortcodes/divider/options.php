<?php

if (!defined('FW')) {
    die('Forbidden');
}



$options = array(
    'type' => array(
        'label' => esc_html__('Type', 'strata'),
        'desc' => esc_html__('Select divider type', 'strata'),
        'type' => 'image-picker',
        'value' => 'fw-line-solid',
        'choices' => array(
            'fw-line-solid' => array(
                'small' => array(
                    'height' => 50,
                    'src' => STRATA_IMAGES . '/image-picker/solid.jpg',
                    'title' => esc_html__('Solid Line', 'strata')
                ),
            ),
            'fw-line-dashed' => array(
                'small' => array(
                    'height' => 50,
                    'src' => STRATA_IMAGES . '/image-picker/dashed.jpg',
                    'title' => esc_html__('Dashed Line', 'strata')
                ),
            ),
            'fw-line-dotted' => array(
                'small' => array(
                    'height' => 50,
                    'src' => STRATA_IMAGES . '/image-picker/dotted.jpg',
                    'title' => esc_html__('Dotted Line', 'strata')
                ),
            ),
            'fw-line-double' => array(
                'small' => array(
                    'height' => 50,
                    'src' => STRATA_IMAGES . '/image-picker/double.jpg',
                    'title' => esc_html__('Double Line', 'strata')
                ),
            ),
            'fw-line-thick' => array(
                'small' => array(
                    'height' => 50,
                    'src' => STRATA_IMAGES . '/image-picker/thick.jpg',
                    'title' => esc_html__('Thick Line', 'strata')
                ),
            ),
            'fw-divider-space' => array(
                'small' => array(
                    'height' => 50,
                    'src' => STRATA_IMAGES . '/image-picker/space_gap.jpg',
                    'title' => esc_html__('Space', 'strata')
                ),
            ),
        ),
    ),
    'divider_size' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'size' => array(
                'label' => esc_html__('Height', 'strata'),
                'desc' => esc_html__('Select the top and bottom margin in px', 'strata'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'type' => 'radio',
                'choices' => array(
                    'space-sm' => esc_html__('Small', 'strata'),
                    'space-md' => esc_html__('Medium', 'strata'),
                    'space-lg' => esc_html__('Large', 'strata'),
                    'custom' => esc_html__('Custom', 'strata'),
                ),
                'value' => 'space-md'
            ),
        ),
        'choices' => array(
            'custom' => array(
                'margin_top' => array(
                    'label' => esc_html__('Margin Top', 'strata'),
                    'desc' => esc_html__('Enter margin-top in px', 'strata'),
                    'attr' => array('class' => 'fw-option-width-small'),
                    'type' => 'short-text',
                ),
                'margin_bottom' => array(
                    'label' => esc_html__('Margin Bottom', 'strata'),
                    'attr' => array('class' => 'fw-option-width-small'),
                    'desc' => esc_html__('Enter margin-bottom in px', 'strata'),
                    'type' => 'short-text',
                ),
            ),
            'no' => array(),
        ),
        'show_borders' => false,
    ),
    'width' => array(
        'label' => esc_html__('Width', 'strata'),
        'desc' => esc_html__('Select the width size in %', 'strata'),
        'type' => 'radio-text',
        'choices' => array(
            '25' => esc_html__('25%', 'strata'),
            '50' => esc_html__('50%', 'strata'),
            '100' => esc_html__('100%', 'strata'),
        ),
        'custom' => 'custom_width',
        'value' => '100'
    ),
    'bg_color' => array(
        'label' => esc_html__('Color', 'strata'),
        'desc' => esc_html__('Select divider color', 'strata'),
        'type' => 'color-picker'
    ),
    'special_divider' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'selected_value' => array(
                'label' => esc_html__('Add Element', 'strata'),
                'desc' => esc_html__('Make a special divider by adding an icon or text to it', 'strata'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'value' => 'none',
                'type' => 'radio',
                'choices' => array(
                    'none' => esc_html__('None', 'strata'),
                    'text' => esc_html__('Text', 'strata'),
                    'icon' => esc_html__('Icon', 'strata'),
                ),
            )
        ),
        'choices' => array(
            'text' => array(
                'title_text' => array(
                    'label' => '',
                    'desc' => esc_html__('This text will be displayed on the divider', 'strata'),
                    'type' => 'text',
                ),
                'color' => array(
                    'label' => esc_html__('Text Color', 'strata'),
                    'desc' => esc_html__('Select the text color', 'strata'),
                    'type' => 'color-picker'
                ),
                'show_bg' => array(
                    'type' => 'switch',
                    'label' => esc_html__('Background', 'strata'),
                    'desc' => esc_html__('Add a background to your text?', 'strata'),
                    'value' => 'no',
                    'right-choice' => array(
                        'value' => 'yes',
                        'label' => esc_html__('Yes', 'strata'),
                    ),
                    'left-choice' => array(
                        'value' => 'no',
                        'label' => esc_html__('No', 'strata'),
                    ),
                ),
                'position' => array(
                    'label' => esc_html__('Position', 'strata'),
                    'desc' => esc_html__('Select text position', 'strata'),
                    'type' => 'image-picker',
                    'value' => '',
                    'choices' => array(
                        'title-left' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => STRATA_IMAGES . '/image-picker/left-position.jpg',
                                'title' => esc_html__('Left', 'strata')
                            ),
                        ),
                        '' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => STRATA_IMAGES . '/image-picker/center-position.jpg',
                                'title' => esc_html__('Center', 'strata')
                            ),
                        ),
                        'title-right' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => STRATA_IMAGES . '/image-picker/right-position.jpg',
                                'title' => esc_html__('Right', 'strata')
                            ),
                        ),
                    ),
                ),
                'divider_size' => array(
                    'label' => esc_html__('Size', 'strata'),
                    'desc' => esc_html__('Select divider size', 'strata'),
                    'attr' => array('class' => 'fw-checkbox-float-left'),
                    'type' => 'radio',
                    'value' => 'fw-divider-size-md',
                    'choices' => array(
                        'fw-divider-size-sm' => esc_html__('Small', 'strata'),
                        'fw-divider-size-md' => esc_html__('Medium', 'strata'),
                        'fw-divider-size-lg' => esc_html__('Large', 'strata'),
                    ),
                ),
            ),
            'icon' => array(
                'icon_class' => array(
                    'type' => 'icon',
                    'label' =>''
                ),
                'color' => array(
                    'label' => esc_html__('Icon Color', 'strata'),
                    'desc' => esc_html__('Select the icon color', 'strata'),
                    'type' => 'color-picker'
                ),
                'position' => array(
                    'label' => esc_html__('Position', 'strata'),
                    'desc' => esc_html__('Select icon position', 'strata'),
                    'type' => 'image-picker',
                    'choices' => array(
                        'title-left' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => STRATA_IMAGES . '/image-picker/left-position.jpg',
                                'title' => esc_html__('Left', 'strata')
                            ),
                        ),
                        '' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => STRATA_IMAGES . '/image-picker/center-position.jpg',
                                'title' => esc_html__('Center', 'strata')
                            ),
                        ),
                        'title-right' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => STRATA_IMAGES . '/image-picker/right-position.jpg',
                                'title' => esc_html__('Right', 'strata')
                            ),
                        ),
                    ),
                ),
                'divider_size' => array(
                    'label' => esc_html__('Size', 'strata'),
                    'desc' => esc_html__('Select divider size', 'strata'),
                    'attr' => array('class' => 'fw-checkbox-float-left'),
                    'type' => 'radio',
                    'value' => 'fw-divider-size-md',
                    'choices' => array(
                        'fw-divider-size-sm' => esc_html__('Small', 'strata'),
                        'fw-divider-size-md' => esc_html__('Medium', 'strata'),
                        'fw-divider-size-lg' => esc_html__('Large', 'strata'),
                    ),
                ),
            ),
            'none' => array(),
        ),
        'show_borders' => false,
    ),
    'link_id' => array(
        'type' => 'text',
        'label' => esc_html__('Link ID', 'strata'),
        'desc' => esc_html__('Enter a custom CSS id for this divider', 'strata'),
        'help' => sprintf("%s", esc_html__('Use this ID in any URL link in the page in order to anchor link to this divider', 'strata')),
    ),
    'class' => array(
        'label' => esc_html__('Custom Class', 'strata'),
        'desc' => esc_html__('Enter custom CSS class', 'strata'),
        'help' => esc_html__('you can use this options to add a class and further style the shortcode by adding your custom CSS in the style.css file. This file is located on your server in the /wow-child/style.css', 'strata'),
        'type' => 'text',
    ),
);
