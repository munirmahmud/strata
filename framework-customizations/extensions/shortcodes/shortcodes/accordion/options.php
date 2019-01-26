<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'tabs' => array(
        'type' => 'addable-popup',
        'size' => 'medium',
        'label' => esc_html__('Accordion Tabs', 'strata'),
        'popup-title' => esc_html__('Add/Edit Accordion Tabs', 'strata'),
        'desc' => esc_html__('Create your tabs', 'strata'),
        'template' => '{{=tab_title}}',
        'popup-options' => array(
            'tab_title' => array(
                'type' => 'text',
                'label' => esc_html__('Title', 'strata')
            ),
            'tab_content' => array(
                'type' => 'wp-editor',
                'label' => esc_html__('Content', 'strata')
            )
        )
    )
);
