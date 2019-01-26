<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'category' => array(
        'label' => esc_html__('Display From', 'strata'),
        'desc' => esc_html__('Select a blog category', 'strata'),
        'type' => 'select',
        'value' => '',
        'choices' => themespry_get_category_term_list(),
    )
);
