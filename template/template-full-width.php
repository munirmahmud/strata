<?php
/**
 * Template Name: Full Width
 * Template Post Type: service, projects, page
 *
 * The full width template file
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

get_header(); ?>


<?php get_template_part( 'template-parts/header/content', 'page-header' ); ?>

<div class="page-builder">
    <?php while ( have_posts() ) : the_post(); ?>

        <!-- full-width-content -->
        <div id="post-<?php the_ID(); ?>" <?php post_class('full-width-content');?>>

            <?php the_content(); ?>

        </div>
        <!-- /.full-width-content -->
    <?php endwhile; ?>
</div>
<!-- /.page-builder -->

<?php get_footer(); ?>