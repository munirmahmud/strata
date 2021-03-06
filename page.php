<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage ThemesPry
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<?php get_template_part( 'template-parts/header/content-page', 'header' ); ?>
<div class="wrap"  role="main">
    <div class="container">
        <div class="row">

            <div class="col-md-8">
				<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<!-- Article header -->
						<header class="entry-header"> <?php
							if ( has_post_thumbnail() && !post_password_required() ) :
								?>
								<figure class="entry-thumbnail"><?php the_post_thumbnail(); ?></figure>
							<?php endif; ?>

							<h2><?php the_title(); ?></h2>
						</header> <!-- end entry-header -->

						<!-- Article content -->
						<div class="entry-content">
							<?php the_content(); ?>
							<?php wp_link_pages(); ?>
						</div> <!-- end entry-content -->

						<!-- Article footer -->
						<footer class="entry-footer">
							<?php
							if ( is_user_logged_in() ) {
								echo '<p>';
								edit_post_link( esc_html__( 'Edit', 'strata' ), '<span class="meta-edit">', '</span>' );
								echo '</p>';
							}
							?>
						</footer> <!-- end entry-footer -->
					</article>

					<?php comments_template(); ?>

				<?php endwhile; ?>

            </div> <!-- end main-content -->

			<?php get_sidebar(); ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>