<?php

if (!defined('FW'))
    die('Forbidden');

$cfg = array();

$cfg['page_builder'] = array(
    'title' => esc_html__('Features Box', 'strata'),
    'description' => esc_html__('Add a Features With Icon', 'strata'),
    'tab' => esc_html__('Content Elements', 'strata'),
		'title_template' => 'Title {{ if (o.title) { }} : {{= o.title}}{{ } }}',

);
