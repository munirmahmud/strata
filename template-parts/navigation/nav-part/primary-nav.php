
<!-- The WordPress Menu goes here -->
<?php
if( has_nav_menu( 'primary-menu') ) {
    wp_nav_menu(
        array(
            'theme_location'    => 'primary-menu',
            'container'         => 'nav',
            'container_class'   => 'header-menu',
            'menu_class'        => 'navigation',
            'fallback_cb'       => 'news247_primary_menu_fallback',
            'menu_id'           => 'main-menu',
            'navwalker'         => new TP_Custom_Navwalker(),
        )
    );
}
?>