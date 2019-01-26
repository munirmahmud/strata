<?php

if (!defined('ABSPATH'))
    die('Direct access forbidden.');
/**
 * Include static files: javascript and css for backend
 */
wp_enqueue_style('tp-admin', STRATA_CSS . '/tp_admin.css', null, STRATA_VERSION);
wp_enqueue_style( 'themify-icons', STRATA_CSS . '/icon-font.css', null, STRATA_VERSION );

wp_enqueue_script('tp-admin-js', STRATA_SCRIPTS . '/tp-admin.js', null, STRATA_VERSION);
