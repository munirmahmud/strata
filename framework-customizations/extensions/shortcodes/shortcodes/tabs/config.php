<?php

if (!defined('FW')) {
    die('Forbidden');
}

$cfg = array(
    'page_builder' => array(
        'title' => esc_html__('Tabs', 'strata'),
        'description' => esc_html__('Add some Tabs', 'strata'),
        'tab' => esc_html__('Content Elements', 'strata'),
        'popup_size' => 'medium'
    )
);
