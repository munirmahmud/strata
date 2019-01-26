<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'type' => array(
        'label' => esc_html__('Type', 'strata'),
        'desc' => esc_html__('Select the notification type', 'strata'),
        'value' => 'fw-alert-info',
        'type' => 'image-picker',
        'choices' => array(
            'success' => array(
                'small' => array(
                    'height' => 50,
                    'src' => STRATA_IMAGES . '/image-picker/notification-congratulation.jpg',
                    'title' => esc_html__('Congratulations', 'strata')
                ),
            ),
            'info' => array(
                'small' => array(
                    'height' => 50,
                    'src' => STRATA_IMAGES . '/image-picker/notification-information.jpg',
                    'title' => esc_html__('Information', 'strata')
                ),
            ),
            'warning' => array(
                'small' => array(
                    'height' => 50,
                    'src' => STRATA_IMAGES . '/image-picker/notification-warning.jpg',
                    'title' => esc_html__('Alert', 'strata')
                ),
            ),
            'danger' => array(
                'small' => array(
                    'height' => 50,
                    'src' => STRATA_IMAGES . '/image-picker/notification-error.jpg',
                    'title' => esc_html__('Error', 'strata')
                ),
            ),
        ),
    ),
    'message' => array(
        'label' => esc_html__('Message', 'strata'),
        'desc' => esc_html__('Notification message', 'strata'),
        'type' => 'text',
        'value' => esc_html__('Message!', 'strata'),
    ),
);
