<?php
/**
 * content.php
 *
 * The default template for displaying content.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-content post-single' ); ?>>

	<?php if ( has_post_thumbnail() && !post_password_required() ) : ?>
		<div class="post-thumbnail">
			<?php
			the_post_thumbnail( 'post-thumbnails' );
			themespry_post_meta_date();
			?>
		</div>
	<?php endif; ?>
	<div class="post-body clearfix">

		<!-- Article header -->
		<header class="entry-header clearfix">
			<?php tp_post_meta_info(); ?>
			<h2 class="entry-title">
				<?php the_title(); ?>
			</h2>
		</header><!-- header end -->

		<!-- Article content -->
		<div class="entry-content">
			<?php
			if ( is_search() ) {
				the_excerpt();
			} else {
				the_content( esc_html__( 'Continue reading &rarr;', 'strata' ) );

				themespry_link_pages();
			}
			?>
		</div> <!-- end entry-content -->

		<?php
            //themespry_single_post_footer
            themespry_single_post_footer();

            $author_setting = '';
            if( defined('FW')){
                $author_setting = fw_get_db_customizer_option('blog_author_settings');
            }
            if( $author_setting == 'yes' ){
                tp_author_info_box();
            }

		?>
    </div> <!-- end post-body -->

</article>