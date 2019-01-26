<?php

if (!defined('FW'))
    die('Forbidden');

$cfg = array(
    'page_builder' => array(
	'tab' => esc_html__('Layout Elements', 'strata'),
	'title' => esc_html__('Column', 'strata'),
	'popup_size' => 'large',
	'type' => 'column',
	'popup_header_elements' => '<a class="tp-docs-link" target="_blank" href="http://xpeedstudio.net/documentation/seopress/seopress-documentation/#ColumnsShortcode"><span class="tp-docs-info dashicons dashicons-sos"></span>' . esc_html__('Go to Docs', 'strata') . '</a>',
    )
);
