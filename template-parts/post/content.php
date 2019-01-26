<?php
/**
 * content.php
 *
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage ThemesPry
 * @since 1.0
 * @version 1.0
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('col-md-6 m-b-30'); ?>>
    <div class="grid">
        <?php
        if ( has_post_thumbnail() ) :
            echo '	<div class="entry-header">';
            the_post_thumbnail( 'post-thumbnail', array('class' => 'img img-responsive') );
            echo  '	</div>';
        endif;
        ?>

        <div class="entry-body">
            <?php tp_post_meta_info(); ?>

            <div class="entry-details">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <?php
                    themespry_excerpt( '35' );
                ?>
                <a href="<?php the_permalink(); ?>"><?php echo esc_html__('Read More', 'strata'); ?> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div>