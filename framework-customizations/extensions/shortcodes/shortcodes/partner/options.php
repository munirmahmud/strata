<?php

if (!defined('FW'))
    die('Forbidden');

$options = array(
    'partners' => array(
	'type' => 'addable-popup',
	'size' => 'medium',
	'label' => esc_html__('Partner Brand Image', 'strata'),
	'value' => esc_html__('Image 1', 'strata'),
	'desc' => esc_html__(' Use maximum 5 in one row.', 'strata'),
	'template' => '{{- title }}',
	'add-button-text' => esc_html__('Add Partner', 'strata'),
	'popup-options' => array(
	    'title' => array(
		'label' => esc_html__('Title', 'strata'),
		'type' => 'text',
		'value' => esc_html__('Partner Image 1', 'strata'),
		'desc' => esc_html__('Add your partner title but its does not show in the front-end', 'strata'),
	    ),
	    'image' => array(
		'label' => esc_html__('Image', 'strata'),
		'type' => 'upload',
		'desc' => esc_html__('Upload your partner brand image', 'strata'),
	    ),
	    'border' => array(
		'type' => 'switch',
		'value' => 'light-item',
		'label' => esc_html__('Border Hover Color', 'strata'),
		'desc' => esc_html__('Select the partner image border hover color', 'strata'),
		'right-choice' => array(
		    'value' => 'light-item',
		    'label' => esc_html__('Lightness', 'strata'),
		),
		'left-choice' => array(
		    'value' => '',
		    'label' => esc_html__('Darkness', 'strata'),
		),
	    ),
	    'link' => array(
		'label' => esc_html__('Link', 'strata'),
		'type' => 'text',
		'value' => '#',
		'desc' => esc_html__('Add your partner image link', 'strata'),
	    ),
	    'target' => array(
		'type' => 'switch',
		'label' => esc_html__('Open Link in New Window', 'strata'),
		'desc' => esc_html__('Select here if you want to open the linked page in a new window', 'strata'),
		'right-choice' => array(
		    'value' => '_blank',
		    'label' => esc_html__('Yes', 'strata'),
		),
		'left-choice' => array(
		    'value' => '_self',
		    'label' => esc_html__('No', 'strata'),
		),
	    ),
	),
    ),
);
