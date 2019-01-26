<div class="hidden-xs hidden-sm nav-top primary-bg">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="nav-top-access">
                    <!-- Social links -->
                    <ul>
                        <?php
                        if ( defined( 'FW' ) ):
                            $header_top_info = fw_get_db_customizer_option( 'header_top_contact_details' );

                            foreach ( $header_top_info as $info ):
                                ?>
                                <li><i class="<?php echo esc_attr( $info[ 'icon' ] ) ?>"></i> <?php echo esc_html( $info[ 'info' ] ) ?></li>

                            <?php
                            endforeach;
                        endif;
                        ?>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 text-right">
                <div class="nav-top-social">
                    <ul>
                        <?php
                        if ( defined( 'FW' ) ):
                            $top_social = fw_get_db_customizer_option( 'header_top_social_details' );

                            foreach ( $top_social as $social ):
                                ?>
                                <li><a href="<?php echo esc_url( $social[ 'link' ] ) ?>" title="<?php echo esc_attr( $social[ 'title' ] ) ?>"><i class="<?php echo esc_attr( $social[ 'icon' ] ) ?>"></i></a></li>
                            <?php
                            endforeach;
                        endif;
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>