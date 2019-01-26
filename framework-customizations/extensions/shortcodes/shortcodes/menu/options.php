<?php if(!defined('FW')){
    die('Forbidden');
}

$options = array(

   'title' => array(
     'type' => 'text',
     'label' => esc_html__('Title', 'strata'),
     'desc' => esc_html__('Text use as a widget title', 'strata')
   ),

  'tp_menu_list'  =>  array(
      'label'   => esc_html__('Custom Menu', 'strata'),
      'type'    => 'select',
      'value'   => '',
      'desc'    => esc_html__('Select your content font weight.', 'strata'),
      'choices' => themespry_get_menu_list(),
  ),

  'class'             => array(
      'type'    => 'text',
      'label'   => esc_html__( 'Custom Class', 'strata' ),
      'desc'    => esc_html__( 'Enter a custom CSS class', 'strata' ),
      'help'    => esc_html__( 'You can use this class to further style this shortcode by adding your custom CSS.', 'strata' ),
   ),


);
