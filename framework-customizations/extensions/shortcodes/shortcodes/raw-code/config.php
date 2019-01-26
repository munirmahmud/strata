<?php

if (!defined('FW')) {
    die('Forbidden');
}

$cfg = array(
    'page_builder' => array(
	'title' => esc_html__('RAW Code', 'strata'),
	'description' => esc_html__('Add a raw code', 'strata'),
	'tab' => esc_html__('Content Elements', 'strata'),
	'popup_header_elements' => '<a class="tp-docs-link" target="_blank" href="http://xpeedstudio.net/documentation/seopress/seopress-documentation/#RAWCode"><span class="tp-docs-info dashicons dashicons-sos"></span>' . esc_html__('Go to Docs', 'strata') . '</a>',
    )
);
