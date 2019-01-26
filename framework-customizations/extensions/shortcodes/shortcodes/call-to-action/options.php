<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'title' => array(
        'type' => 'text',
        'label' => esc_html__('Main Title', 'strata'),
        'value' => esc_html__('Join with BizCraft and Give Your Website a Brand New Look.', 'strata'),
        'desc' => esc_html__('Add call to action main title.', 'strata')
    ),
    'content' => array(
        'label' => esc_html__('Box Description', 'strata'),
        'desc' => esc_html__('Add the box description text', 'strata'),
        'type' => 'textarea',
        'value' => esc_html__('Bras urna felis accumsan at ultrde cesid posuere masa socis nautoque penat', 'strata')
    ),
    'label' => array(
        'label' => esc_html__('Button Text', 'strata'),
        'desc' => esc_html__('This is the text that appears on your button', 'strata'),
        'type' => 'text',
        'value' => esc_html__('Purchase Now', 'strata')
    ),
    'class' => array(
        'label' => esc_html__('Custom Class', 'strata'),
        'desc' => esc_html__('Enter custom CSS class', 'strata'),
        'help' => esc_html__('you can use this options to add a class and further style the shortcode by adding your custom CSS in the style.css file. This file is located on your server in the /themespry-child/style.css', 'strata'),
        'type' => 'text',
        'value' => '',
    ),
);
