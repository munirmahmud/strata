<?php

if (!defined('FW'))
    die('Forbidden');

$cfg = array();

$cfg['page_builder'] = array(
    'title' => esc_html__('Contact Info', 'strata'),
    'description' => esc_html__('Add a Info With Icon', 'strata'),
    'tab' => esc_html__('Content Elements', 'strata'),
		'title_template' => 'Title {{ if (o.title) { }} : {{= o.title}}{{ } }}',

);
