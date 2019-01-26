<?php

if (!defined('FW'))
    die('Forbidden');

$options = array(
    'twitter_user_id' => array(
        'type' => 'text',
        'label' => esc_html__('Twitter ID', 'strata'),
        'value' => '644499500418117632',
        'desc' => wp_kses_post('<p>You can create your own Twitter user ID & here is the help URL :<b><i> http://bit.ly/1VXXo2N</i></b></p>', 'strata'),
    )
);
