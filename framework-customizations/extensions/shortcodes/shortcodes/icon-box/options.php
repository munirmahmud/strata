<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'iconbox' => array(
        'type' => 'image-picker',
        'label' => esc_html__('Box Style', 'strata'),
        'choices' => array(
            'fw-iconbox-1' => array(
                'small' => array(
                    'height' => 75,
                    'src' => STRATA_IMAGES . '/image-picker/icon-box-type1.jpg',
                ),
                'large' => array(
                    'height' => 208,
                    'src' => STRATA_IMAGES . '/image-picker/icon-box-type1.jpg'
                ),
            ),
            'fw-iconbox-2' => array(
                'small' => array(
                    'height' => 75,
                    'src' => STRATA_IMAGES . '/image-picker/icon-box-type2.jpg',
                ),
                'large' => array(
                    'height' => 208,
                    'src' => STRATA_IMAGES . '/image-picker/icon-box-type2.jpg'
                ),
            ),
            'fw-iconbox-3' => array(
                'small' => array(
                    'height' => 75,
                    'src' => STRATA_IMAGES . '/image-picker/icon-box-type3.jpg',
                ),
                'large' => array(
                    'height' => 208,
                    'src' => STRATA_IMAGES . '/image-picker/icon-box-type3.jpg'
                ),
            ),
        ),
    ),
    'title' => array(
        'type' => 'text',
        'label' => esc_html__('Title of the Box', 'strata'),
        'value' => esc_html__('Prototyping', 'strata'),
    ),
    'content' => array(
        'label' => esc_html__('Description', 'strata'),
        'desc' => esc_html__('Enter the icon box description', 'strata'),
        'value' => esc_html__('Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'strata'),
        'type' => 'wp-editor',
    ),
    'icon' => array(
        'type' => 'new-icon',
        'label' => esc_html__('Choose an Icon', 'strata'),
    ),
);
