<?php

if (!defined('FW'))
    die('Forbidden');

$options = array(
    'portfolios_style' => array(
        'label' => esc_html__('Portfolio Style', 'strata'),
        'desc' => esc_html__('Choose portfolio style', 'strata'),
        'type' => 'image-picker',
        'value' => '',
        'choices' => array(
            'portfolio-1' => array(
                'small' => array(
                    'height' => 70,
                    'src' => STRATA_IMAGES . '/image-picker/portfolio-style-1.png'
                ),
                'large' => array(
                    'height' => 208,
                    'src' => STRATA_IMAGES . '/image-picker/portfolio-style-1.png'
                ),
            ),
            'portfolio-2' => array(
                'small' => array(
                    'height' => 70,
                    'src' => STRATA_IMAGES . '/image-picker/portfolio-style-2.png'
                ),
                'large' => array(
                    'height' => 208,
                    'src' => STRATA_IMAGES . '/image-picker/portfolio-style-2.png'
                ),
            ),
        ),
    )
);
