<?php
/**
 * Template part for displaying audio posts
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
    <?php
    if ( has_post_thumbnail() ) :
        echo '	<div class="post-media post-image">';
        the_post_thumbnail( 'post-thumbnail' );
        echo  '	</div>';
    endif;
    ?>

    <div class="entry-content">

        <?php strata_post_meta_left(); ?>
        <!-- Post meta left -->

        <div class="entry-header">
            <?php strata_post_meta(); ?>
        </div><!-- header end -->

        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <div class="post-content">
            <?php
            $content = apply_filters( 'the_content', get_the_content() );
            $audio = false;

            // Only get audio from the content if a playlist isn't present.
            if ( false === strpos( $content, 'wp-playlist-script' ) ) {
                $audio = get_media_embedded_in_content( $content, array( 'audio' ) );
            }

            ?>
        </div>
    </div><!-- /.entry-content -->

</article><!-- post end -->