<?php
if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$class = '';


if ( isset( $atts[ 'tp_id' ] ) ) {
	$class .= ' tp-text-block-' . $atts[ 'tp_id' ];
}


$class .= isset( $atts[ 'display_desktop' ] ) && $atts[ 'display_desktop' ] != 'yes' ? ' tp-hidden-lg' : '';
$class .= isset( $atts[ 'display_medium' ] ) && $atts[ 'display_medium' ] != 'yes' ? ' tp-hidden-md' : '';
$class .= isset( $atts[ 'display_tablet' ] ) && $atts[ 'display_tablet' ] != 'yes' ? ' tp-hidden-sm' : '';
$class .= isset( $atts[ 'display_phone' ] ) && $atts[ 'display_phone' ] != 'yes' ? ' tp-hidden-xs' : '';

$class .= !empty( $atts[ 'class' ] ) ? ' ' . $atts[ 'class' ] : '';
?>
<div class="tp-text-block <?php echo esc_attr($class); ?>">
	<?php echo do_shortcode( $atts[ 'text' ] ); ?>
</div>