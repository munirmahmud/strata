<?php
/**
 * ThemesPry's functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage ThemesPry
 * @since 1.0
 */

/**
 * ----------------------------------------------------------------------------------------
 * 1.0 - Theme's Constant
 * ----------------------------------------------------------------------------------------
 */
define('STRATA_THEME', 'Strata WordPress Theme');
define('STRATA_VERSION', '1.0');
define('STRATA_THEMEROOT', get_template_directory_uri());
define('STRATA_THEMEROOT_DIR', get_parent_theme_file_path());
define('STRATA_IMAGES', STRATA_THEMEROOT . '/assets/images');
define('STRATA_IMAGES_DIR', STRATA_THEMEROOT_DIR . '/assets/images');
define('STRATA_CSS', STRATA_THEMEROOT . '/assets/css');
define('STRATA_CSS_DIR', STRATA_THEMEROOT_DIR . '/assets/css');
define('STRATA_SCRIPTS', STRATA_THEMEROOT . '/assets/js');
define('STRATA_SCRIPTS_DIR', STRATA_THEMEROOT_DIR . '/assets/js');
define('STRATA_PHPSCRIPTS', STRATA_THEMEROOT . '/assets/php');
define('STRATA_PHPSCRIPTS_DIR', STRATA_THEMEROOT_DIR . '/assets/php');
define('STRATA_INC', STRATA_THEMEROOT_DIR . '/inc');
define('STRATA_SHORTCODE_DIR', STRATA_INC . '/shortcode');
define('STRATA_SHORTCODE_DIR_STYLE', STRATA_SHORTCODE_DIR . '/style');
define('STRATA_REMOTE_CONTENT', esc_url('http://themespry.com/items/' ));


/**
 * ----------------------------------------------------------------------------------------
 * 2.0 - Set up the content width value based on the theme's design.
 * ----------------------------------------------------------------------------------------
 */
if (!isset($content_width)) {
    $content_width = 800;
}


/**
 * ----------------------------------------------------------------------------------------
 * 3.0 - Sets up theme defaults and registers support for various WordPress features.
 * ----------------------------------------------------------------------------------------
 */
if ( !function_exists('strata_setup')) {

    function strata_setup() {
	/**
	 * Make the theme available for translation.
	 */
	$lang_dir = STRATA_THEMEROOT . '/languages';
	load_theme_textdomain('strata', $lang_dir);


    /**
     * Add support for automatic feed links.
     */
    add_theme_support('automatic-feed-links');


    /**
     * Let WordPress manage the document title.
     */
     add_theme_support( 'title-tag' );


    /**
    * Enable support for Post Thumbnails on posts and pages.
    *
    * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
    */
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'post-thumbnail', 846, 426, true );


    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus( array(
        'primary-menu'    => __( 'Primary Menu', 'strata' ),
        'footer-menu' => __( 'Footer Menu', 'strata' ),
    ) );


    /**
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );


    /**
     * Enable support for Post Formats.
     *
     * See: https://codex.wordpress.org/Post_Formats
     */
    add_theme_support( 'post-formats', array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
        'gallery',
        'audio',
    ) );


    // Add theme support for Custom Logo.
    add_theme_support( 'custom-logo', array(
        'width'       => 250,
        'height'      => 250,
        'flex-width'  => true,
    ) );

    }

    add_action('after_setup_theme', 'strata_setup');
}

/**
 * ----------------------------------------------------------------------------------------
 * 4.0 - theme INC.
 * ----------------------------------------------------------------------------------------
 */
include_once get_template_directory() . '/inc/init.php';