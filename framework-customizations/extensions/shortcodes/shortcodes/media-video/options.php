<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'video' => array(
        'label' => esc_html__('Video', 'strata'),
        'desc' => esc_html__('Enter Youtube or Vimeo video URL', 'strata'),
        'type' => 'text',
    ),
    'width' => array(
        'label' => esc_html__('Width', 'strata'),
        'desc' => esc_html__('Video width in pixels', 'strata'),
        'type' => 'short-text',
        'value' => '',
    ),
    'height' => array(
        'label' => esc_html__('Height', 'strata'),
        'desc' => esc_html__('Video height in pixels', 'strata'),
        'type' => 'short-text',
        'value' => '',
    ),
    'frame' => array(
        'type' => 'switch',
        'value' => '',
        'label' => esc_html__('Video Border', 'strata'),
        'desc' => esc_html__('Add a border to your video?', 'strata'),
        'left-choice' => array(
            'value' => '',
            'label' => esc_html__('No', 'strata'),
        ),
        'right-choice' => array(
            'value' => 'fw-video-frame',
            'label' => esc_html__('Yes', 'strata'),
        )
    ),
    'class' => array(
        'attr' => array('class' => 'border-bottom-none'),
        'label' => esc_html__('Custom Class', 'strata'),
        'desc' => esc_html__('Enter custom CSS class', 'strata'),
        'type' => 'text',
        'help' => esc_html__('You can use this class to further style this shortcode.', 'strata'),
        'value' => '',
    ),
);
