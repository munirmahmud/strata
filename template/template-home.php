<?php
/**
 * Template Name: Home Page
 *
 * The home page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage ThemesPry
 * @since 1.0
 * @version 1.0
 */

get_header();

while (have_posts()) :

    the_post();

    the_content();

endwhile;

get_footer();


