<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage ThemesPry
 * @since 1.0
 * @version 1.0
 */
get_header();

get_template_part( 'template-parts/header/content', 'blog-header' );
?>

<section class="blog-main-section section-padding">
    <div class="container">
        <div class="row">

            <div class="col col-lg-9">
                <div class="blog-grids-s2 blog-content-wrapper">
                    <div class="row">
                        <!-- 1st post start -->
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                                <?php get_template_part( 'template-parts/post/content', get_post_format() ); ?>

                            <?php endwhile; ?>

                            <?php strata_paging_nav(); ?>

                        <?php else : ?>

                            <?php get_template_part( 'template-parts/post/content', 'none' ); ?>

                        <?php endif; ?>

                    </div><!-- row end -->
                </div><!-- blog-content-wrapper end -->
			</div><!-- Content Col end -->

			<?php get_sidebar(); ?>

		</div><!-- /.row -->
	</div><!-- /.Container -->
</section><!-- /.wrap -->

<?php get_footer(); ?>