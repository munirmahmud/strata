<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage ThemesPry
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<?php get_template_part( 'template-parts/header/content', 'blog-header' ); ?>

<div class="wrap posts-wrapper">
    <div class="container">
        <div class="row">

            <div class="col-md-8 col-sm-12">
                <?php
                while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/content', 'single' );

                    themespry_post_nav();

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;

                endwhile;
                ?>
            </div> <!-- end main-content -->

            <?php get_sidebar(); ?>

        </div>
    </div>
    <!-- /.container-->
</div>
<!-- /.wrap -->

<?php get_footer(); ?>