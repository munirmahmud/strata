<?php

if (!defined('FW'))
    die('Forbidden');

$cfg = array(
    'page_builder' => array(
	'tab' => esc_html__('Layout Elements', 'strata'),
	'title' => esc_html__('Section', 'strata'),
	'description' => esc_html__('Add a Section', 'strata'),
	'popup_size' => 'large',
	'title_template' => '{{-title}}{{ if (o.section_title) { }} : <strong>{{= o.section_title}}</strong>{{ } }}',
	'type' => 'section', // WARNING: Do not edit this
	'disable_modal_reset_btn' => true, //	'popup_header_elements' => '<a class="tp-docs-link" target="_blank" href="http://xpeedstudio.net/documentation/seopress/seopress-documentation/#SectionShortcode"><span class="tp-docs-info dashicons dashicons-sos"></span>' . esc_html__('Go to Docs', 'strata') . '</a>',
    ),
);
