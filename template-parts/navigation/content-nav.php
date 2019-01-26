<?php
/*
 * This is for nav style
 *  */

$logo = themespry_get_image( 'main_logo', STRATA_IMAGES . '/logo.png' );

if( defined('FW')){
    $logo_img = fw_get_db_customizer_option('tp_theme_logo');

    $logo = (isset($logo_img['url']) && !empty($logo_img['url']) ? $logo_img['url'] : $logo);
}

?>

<!-- Header start -->
<header>

    <?php get_template_part( 'template-parts/navigation/content-nav', 'top' ); ?>

    <div class="menu-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo">
                        <!--== change the logo name ==-->
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <img src="<?php echo esc_url( $logo ) ?>" alt="<?php bloginfo( 'name' ); ?>"></a>
                    </div>
                    <!-- Responsive Menu Start -->
                    <div class="responsive-menu"></div>
                    <!-- Responsive Menu End -->
                </div>

                <div class="col-md-9 col-sm-12">
                    <div class="mainmenu">

                        <?php get_template_part( 'template-parts/navigation/nav-part/primary', 'nav' ); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->

