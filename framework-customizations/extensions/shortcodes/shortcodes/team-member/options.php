<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'team_style_settings' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'team_style' => array(
                'label' => esc_html__('Team Style', 'strata'),
                'type' => 'image-picker',
                'value' => 'team_style_one',
                'desc' => esc_html__('Select Team style.', 'strata'),
                'choices' => array(
                    'team-1' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => STRATA_IMAGES . '/image-picker/team/team-1.png'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => STRATA_IMAGES . '/image-picker/team/team-1.png'
                        ),
                    ),
                    'team-2' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => STRATA_IMAGES . '/image-picker/team/team-2.png'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => STRATA_IMAGES . '/image-picker/team/team-2.png'
                        ),
                    ),
                    'team-3' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => STRATA_IMAGES . '/image-picker/team/team-3.png'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => STRATA_IMAGES . '/image-picker/team/team-3.png'
                        ),
                    ),
                ),
            ),
        ),
    ),
    'image' => array(
        'type' => 'upload',
        'label' => esc_html__('Photo', 'strata'),
        'desc' => esc_html__('Add your team member photo', 'strata'),
    ),
    'title' => array(
        'type' => 'text',
        'label' => esc_html__('Title', 'strata'),
        'desc' => esc_html__('Add your team member title', 'strata'),
        'value' => esc_html__('Vosgi Varduh', 'strata')
    ),
    'position' => array(
        'type' => 'text',
        'label' => esc_html__('Position', 'strata'),
        'desc' => esc_html__('Add your team member position', 'strata'),
        'value' => esc_html__('Web Designer', 'strata')
    ),
    'message' => array(
        'type' => 'textarea',
        'label' => esc_html__('Info', 'strata'),
        'desc' => wp_kses_post('Add your team member message text (<b>Note: Message text is allow for Team Style 2 And Team Style 3</b>)', 'strata'),
        'value' => esc_html__('Eradicate invest honesty human rights accessibility theory of social change. Diversity experience in the field compassion, inspire breakthroughs planned giving.', 'strata')
    ),
    'socials' => array(
        'type' => 'addable-popup',
        'label' => esc_html__('Social Icon', 'strata'),
        'size' => 'large',
        'template' => '{{- title }}',
        'add-button-text' => esc_html__('Add Icon', 'strata'),
        'limit' => 5,
        'popup-options' => array(
            'title' => array(
                'type' => 'text',
                'label' => esc_html__('Title', 'strata'),
                'desc' => esc_html__('Write the social icon title but it does not show in the front-end', 'strata'),
                'value' => esc_html__('Facebook', 'strata')
            ),
            'link' => array(
                'type' => 'text',
                'label' => esc_html__('Link', 'strata'),
                'desc' => esc_html__('Insert your social URL', 'strata'),
                'value' => '#'
            ),
            'icon' => array(
                'type' => 'new-icon',
                'label' => esc_html__('Icon', 'strata'),
                'desc' => esc_html__('Add your social icon', 'strata'),
                'value' => 'fa fa-facebook',
            ),
            'hover' => array(
                'type' => 'color-picker',
                'label' => esc_html__('Hover Color', 'strata'),
                'desc' => esc_html__('Select your social icon hover color', 'strata'),
                'value' => '#325c94',
            ),
        ),
    ),
);
