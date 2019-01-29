<?php
/**
 * Template part for displaying image posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage ThemesPry
 * @since 1.0
 * @version 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <!-- Post Thumbnail -->
    <?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
        <div class="post-thumbnail">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
            </a>
        </div><!-- .post-thumbnail -->
    <?php endif; ?>

    <div class="entry-content">

        <?php strata_post_meta_left(); ?>
        <!-- Post meta left -->

        <div class="entry-header">
            <?php strata_post_meta(); ?>
        </div><!-- header end -->

        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <div class="post-content">
            <?php
            strata_content_read_more( '35' );
            ?>
        </div>
    </div><!-- /.entry-content -->

</article><!-- post end -->