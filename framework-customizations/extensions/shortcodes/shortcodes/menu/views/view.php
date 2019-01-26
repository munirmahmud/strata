<?php
if (!defined('FW')) {
    die('Forbidden');
}

/*
 * view process section 
 */

$tp_menu_list = '';
if($atts['tp_menu_list'] != ''){
    $tp_menu_list = $atts['tp_menu_list'];
}

$nav_menu_args = array(
	'fallback_cb' => '',
	'menu'        => $tp_menu_list,
   'menu_class'  => 'tp-custom-menu'
);

wp_nav_menu( $nav_menu_args );