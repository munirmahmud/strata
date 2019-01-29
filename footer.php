<?php
/**
 * footer.php
 *
 * The template for displaying the footer.
 */

$logo = strata_get_image( 'main_logo', STRATA_IMAGES . '/logo.png' );
if ( defined( 'FW' ) ){
    //$copyright = fw_get_db_customizer_option( 'copyright_info' );
}
?>

<!-- ==== footer section start ==== -->
<footer class="footer-bg section-padding-top footer">
    <div class="footer-widget-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="f-widget">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <img src="<?php echo esc_url( $logo ) ?>" alt="<?php bloginfo( 'name' ); ?>"></a>

                        <p class="m-t-30">Lorem ipsum dolor sit amet, adipiscing elit. Donec elit erat, vestibulum ac luctus id, ultrices.</p>
                        <ul class="f-address">
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i> 25/1 London road, Brighum,London</li>
                            <li><i class="fa fa-phone"></i> +1-1459-236-756</li>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i>  admin@strata.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="f-widget">
                        <div class="f-widget-title">
                            <h4>Useful links</h4>
                        </div>
                        <ul class="useful-links">
                            <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a href="#">General Information For Users</a></li>
                            <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a href="#">Interactive Fairy Tales</a></li>
                            <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a href="#">Official Storybook Maker</a></li>
                            <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a href="#">Everyday Mathematics Links</a></li>
                            <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a href="#">Basic Knowledge</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="f-widget">
                        <div class="f-widget-title">
                            <h4>Instagram Feeds</h4>
                        </div>
                        <ul class="instagram-widget">
                            <li><a href="#"><img src="<?php echo STRATA_IMAGES; ?>/instagram/10.jpg" alt="" class="img-responsive"></a></li>
                            <li><a href="#"><img src="<?php echo STRATA_IMAGES; ?>/instagram/11.jpg" alt="" class="img-responsive"></a></li>
                            <li><a href="#"><img src="<?php echo STRATA_IMAGES; ?>/instagram/12.jpg" alt="" class="img-responsive"></a></li>
                            <li><a href="#"><img src="<?php echo STRATA_IMAGES; ?>/instagram/1.jpg" alt="" class="img-responsive"></a></li>
                            <li><a href="#"><img src="<?php echo STRATA_IMAGES; ?>/instagram/4.jpg" alt="" class="img-responsive"></a></li>
                            <li><a href="#"><img src="<?php echo STRATA_IMAGES; ?>/instagram/5.jpg" alt="" class="img-responsive"></a></li>
                            <li><a href="#"><img src="<?php echo STRATA_IMAGES; ?>/instagram/13.jpg" alt="" class="img-responsive"></a></li>
                            <li><a href="#"><img src="<?php echo STRATA_IMAGES; ?>/instagram/14.jpg" alt="" class="img-responsive"></a></li>
                            <li><a href="#"><img src="<?php echo STRATA_IMAGES; ?>/instagram/15.jpg" alt="" class="img-responsive"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="f-widget">
                        <div class="f-widget-title">
                            <h4>Newsletter</h4>
                        </div>
                        <p>Subscribe to our MailChimp newsletter and stay up to date with all events coming straight in your mailbox:</p>
                        <div class="newsletter">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Your email Address" aria-label="Search for..." autocomplete="off">
                                <span class="input-group-btn">
                      <button class="btn newsletter-btn" type="button"><i class="fa Example of paper-plane fa-paper-plane"></i></button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row text-center">
                <div class="copyright-social">
                    <ul class="social-profile">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                    </ul>
                </div>
                <div class="copyright-text">
                    <?php if ( !empty( $copyright ) ): ?>
                        <div class="copyright-info"><?php echo wp_kses_post( $copyright ); ?></div>
                    <?php
                        else:
                        $url = 'http://themespry.com';
                        ?>
                    <p>&copy; <?php echo esc_html__( 'Copyright 2018. All Rights Reserved. Designed by', 'strata' ); ?> <a href="<?php echo esc_url( $url ); ?>">ThemesPry</a></p>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ==== footer section end ==== -->


<?php wp_footer(); ?>
</body>
</html>