<?php

if (!defined('FW'))
    die('Forbidden');

$options = array(
    'screenshots' => array(
        'label' => esc_html__('Screenshots', 'strata'),
        'type' => 'addable-popup',
        'desc' => esc_html__('Add your favorite screenshot images', 'strata'),
        'template' => '{{- title}}',
        'popup-options' => array(
            'title' => array(
                'label' => esc_html__('Recognise Name', 'strata'),
                'desc' => esc_html__('Add a name for internal use.', 'strata'),
                'type' => 'text',
            ),
            'image' => array(
                'label' => esc_html__('Slide Image', 'strata'),
                'desc' => esc_html__('Upload Slide Image.', 'strata'),
                'type' => 'upload',
            ),
        )
    ),
);
