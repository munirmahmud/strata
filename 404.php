<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage ThemesPry
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>


<?php get_template_part('template-parts/header/content-page', 'header')?>

<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="error-page-content">
                    <h3><?php esc_html_e('The page you are looking for does not exist.', 'strata') ?></h3>
                    <p><?php esc_html_e('We are sorry but we can not seem to find the page you requested. This might be because you have typed the web address incorrectly.', 'strata') ?></p>
                    <a class="btn btn-default btn-style hvr-shutter-out-vertical" href="<?php echo esc_url(home_url()) ?>"><?php esc_html_e('Go to Home', 'strata') ?></a>
                </div>
            </div>
            <div class="col-md-5">
                <div class="error-text text-center">
                    <h2><?php esc_html_e( '404', 'strata' ); ?></h2>
                    <span><?php _e( 'Oops!', 'strata' ); ?> <i class="fa fa-meh-o" aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>