<?php

if (!defined('FW')) {
    die('Forbidden');
}

$cfg = array();

$cfg['page_builder'] = array(
    'title' => esc_html__('Testimonials', 'strata'),
    'description' => esc_html__('Add some Testimonials', 'strata'),
    'tab' => esc_html__('Content Elements', 'strata'),
    'popup_size' => 'medium'
);
