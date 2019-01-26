<?php
/**
 * Blog Header
 *
 */

$bg_image	 = $page_title	 =   $heading_color =  $subtitle_title  = $overlay = $page_subtitle =  $subtitle_color = $breadcrumb = '';

$image_url = themespry_get_image( 'header_bg', STRATA_IMAGES . '/header-bg.jpg' );
$bg_image = 'style="background: url('. $image_url .')"';

if ( defined( 'FW' ) ) {

	///Global optipn
    $global_page_title	 = fw_get_db_customizer_option( 'global_page_title' );
	$page_subtitle		 = fw_get_db_customizer_option( 'global_page_subtitle' );
    $header_global_bg	 = fw_get_db_customizer_option( 'global_header_bg' );
    $breadcrumb			 = fw_get_db_customizer_option( 'global_page_breadcrumb' );

    $banner_overlay			     = fw_get_db_customizer_option( 'page_banner_overlay' );
    $heading_color			 = fw_get_db_customizer_option( 'page_heading_color' );
    $subtitle_color			 = fw_get_db_customizer_option( 'page_subtitle_color' );

    //fw_print($page_title);


    $bg_image = (isset( $header_global_bg['url'] ) && $header_global_bg['url'] != '' ) ? 'style="background: url(' . $header_global_bg['url'] . ')"' : $bg_image;

    $page_title = $global_page_title != '' ? $global_page_title : get_the_title();

    $overlay = (isset($banner_overlay) && !empty($banner_overlay)) ? 'style=background-color:'. $banner_overlay .'' : '';
    $heading_color = (isset($heading_color) && !empty($heading_color)) ? 'style=color:'. $heading_color .'' : '';
    $subtitle_color = (isset($subtitle_color) && !empty($subtitle_color)) ? 'style=color:'. $subtitle_color .'' : '';

}
?>


<div id="banner-area" class="banner-area" <?php echo wp_kses_post( $bg_image ); ?>>

    <div class="overlay" <?php echo esc_attr($overlay); ?>></div>

	<div class="container">
		<div class="row">
			<div class="col-tp-12">
				<div class="banner-heading page-title">

                    <?php if($page_title) : ?>
                        <h2 class="banner-title" <?php echo esc_attr($heading_color); ?>><?php echo esc_html( $page_title ); ?></h2>
                    <?php endif; ?>
                    <?php if($page_subtitle) : ?>
                        <h3 class="banner-subtitle" <?php echo esc_attr($subtitle_color); ?>><?php echo esc_html( $page_subtitle ); ?></h3>
                    <?php endif; ?>

					<?php
                        if ( $breadcrumb == 'yes' ):
                             echo themespry_get_breadcrumbs();
                        endif;
                    ?>
				</div>
			</div><!-- Col end -->
		</div><!-- Row end -->
	</div><!-- Container end -->
</div><!-- Banner area end --> 

