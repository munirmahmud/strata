<?php
/**
 * Template part for displaying gallery posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <!-- Post Thmbnail -->
    <?php if ( '' !== get_the_post_thumbnail() && ! is_single() && ! get_post_gallery() ) :
        echo '	<div class="post-media post-image">';
        the_post_thumbnail( 'post-thumbnail' );
        echo  '	</div>';
    endif;
    ?>

    <div class="entry-content">

        <?php themespry_post_meta_left(); ?>
        <!-- Post meta left -->

        <div class="entry-header">
            <?php themespry_post_meta(); ?>
        </div><!-- header end -->

        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <div class="post-content">
            <?php
            themespry_content_read_more( '35' );
            ?>
        </div>
    </div><!-- /.entry-content -->

</article><!-- post end -->