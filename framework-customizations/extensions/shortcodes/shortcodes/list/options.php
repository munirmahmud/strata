<?php

if (!defined('FW')) {
    die('Forbidden');
}

$template_directory = get_template_directory_uri();
$options = array(
    'list_group' => array(
        'type' => 'group',
        'options' => array(
            'list_items' => array(
                'type' => 'addable-popup',
                'label' => esc_html__('List Items', 'strata'),
                'desc' => esc_html__('Add list items', 'strata'),
                'template' => '{{=item}}',
                'popup-options' => array(
                    'sublist_group' => array(
                        'type' => 'group',
                        'options' => array(
                            'item' => array(
                                'label' => esc_html__('Item', 'strata'),
                                'desc' => esc_html__('Enter an item in list', 'strata'),
                                'type' => 'text',
                            ),
                            'sublist_items' => array(
                                'type' => 'addable-popup',
                                'label' => esc_html__('Sublist Items', 'strata'),
                                'desc' => esc_html__('Add sublist items', 'strata'),
                                'template' => '{{=subitem}}',
                                'popup-options' => array(
                                    'subitem' => array(
                                        'label' => esc_html__('Sublist Item', 'strata'),
                                        'desc' => esc_html__('Enter a sublist item', 'strata'),
                                        'type' => 'text',
                                    ),
                                    'btn_link_group' => array(
                                        'type' => 'group',
                                        'options' => array(
                                            'link' => array(
                                                'label' => esc_html__('Link', 'strata'),
                                                'desc' => esc_html__('you can add link if you want', 'strata'),
                                                'type' => 'text',
                                            ),
                                            'target_subitem' => array(
                                                'type' => 'switch',
                                                'label' => '',
                                                'desc' => esc_html__('Open link in new window?', 'strata'),
                                                'value' => '_self',
                                                'right-choice' => array(
                                                    'value' => '_blank',
                                                    'label' => esc_html__('Yes', 'strata'),
                                                ),
                                                'left-choice' => array(
                                                    'value' => '_self',
                                                    'label' => esc_html__('No', 'strata'),
                                                ),
                                            ),
                                        )
                                    ),
                                ),
                            ),
                        )
                    ),
                    'btn_link_group' => array(
                        'type' => 'group',
                        'options' => array(
                            'link' => array(
                                'label' => esc_html__('Link', 'strata'),
                                'desc' => esc_html__('you can add link if you want', 'strata'),
                                'type' => 'text',
                            ),
                            'target' => array(
                                'type' => 'switch',
                                'label' => '',
                                'desc' => esc_html__('Open link in new window?', 'strata'),
                                'value' => '_self',
                                'right-choice' => array(
                                    'value' => '_blank',
                                    'label' => esc_html__('Yes', 'strata'),
                                ),
                                'left-choice' => array(
                                    'value' => '_self',
                                    'label' => esc_html__('No', 'strata'),
                                ),
                            ),
                        )
                    ),
                ),
            ),
            'separator' => array(
                'type' => 'switch',
                'label' => '',
                'desc' => esc_html__('Separate each list item by a line?', 'strata'),
                'value' => '_self',
                'right-choice' => array(
                    'value' => 'list-bordered',
                    'label' => esc_html__('Yes', 'strata'),
                ),
                'left-choice' => array(
                    'value' => '',
                    'label' => esc_html__('No', 'strata'),
                ),
            ),
        )
    ),
    'list_type' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'selected_value' => array(
                'label' => esc_html__('Add Element', 'strata'),
                'desc' => esc_html__('Make a numbered list or add an icon to list items', 'strata'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'value' => 'list-default',
                'type' => 'radio',
                'choices' => array(
                    'list-default' => esc_html__('None', 'strata'),
                    'list-numbers' => esc_html__('Number', 'strata'),
                    'list-icon' => esc_html__('Icon', 'strata'),
                ),
            )
        ),
        'choices' => array(
            'list-default' => array(),
            'list-numbers' => array(),
            'list-icon' => array(
                'icon' => array(
                    'type' => 'icon',
                    'label' => ''
                ),
            ),
        ),
        'show_borders' => false,
    ),
    'class' => array(
        'label' => esc_html__('Custom Class', 'strata'),
        'desc' => esc_html__('Enter custom CSS class', 'strata'),
        'type' => 'text',
        'help' => esc_html__('You can use this class to further style this shortcode', 'strata'),
    ),
);
