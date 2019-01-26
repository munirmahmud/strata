<?php

if (!defined('FW')) {
    die('Forbidden');
}

$cfg = array();

$cfg['page_builder'] = array(
    'title' => esc_html__('Text Block', 'strata'),
    'description' => esc_html__('Add a Text Block', 'strata'),
    'tab' => esc_html__('Content Elements', 'strata'),
    'popup_size' => 'medium',
    'title_template' => 'Text Block {{ if (o.text) { }} : {{= o.text}}{{ } }}',
    'popup_header_elements' => '<a class="tp-docs-link" target="_blank" href="http://xpeedstudio.net/documentation/seopress/seopress-documentation/#TextBlock"><span class="tp-docs-info dashicons dashicons-sos"></span>' . esc_html__('Go to Docs', 'strata') . '</a>',
);
