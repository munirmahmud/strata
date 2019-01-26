<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'title' => array(
        'label' => esc_html__('Title', 'strata'),
        'desc' => esc_html__('This is the text that appears on beside icon', 'strata'),
        'type' => 'text',
    ),
    'icon' => array(
        'type' => 'new-icon',
        'label' => esc_html__('Icon', 'strata')
    ),
);
