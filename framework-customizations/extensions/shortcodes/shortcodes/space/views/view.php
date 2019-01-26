<?php
if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$height = '';
if ( $atts[ 'height' ] == 'space-sm' || $atts[ 'height' ] == 'space-md' || $atts[ 'height' ] == 'space-lg' ) {
	$height = $atts[ 'height' ];
}

$show_device = isset( $atts[ 'display_desktop' ][ 'selected' ] ) && $atts[ 'display_desktop' ][ 'selected' ] != 'yes' ? 'tp-hidden-lg ' : '';
$show_device .= isset( $atts[ 'display_medium' ] ) && $atts[ 'display_medium' ] != 'yes' ? 'tp-hidden-md ' : '';
$show_device .= isset( $atts[ 'display_tablet' ] ) && $atts[ 'display_tablet' ] != 'yes' ? 'tp-hidden-sm ' : '';
$show_device .= isset( $atts[ 'display_phone' ] ) && $atts[ 'display_phone' ] != 'yes' ? 'tp-hidden-xs ' : '';
?>
<div id="<?php echo isset( $atts[ 'tp_id' ] ) ? 'tp-sc-' . $atts[ 'tp_id' ] : 'space' ?>" class="fw-divider-space <?php echo esc_attr($height); ?>"></div>