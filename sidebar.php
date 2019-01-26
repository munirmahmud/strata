<?php
/**
 * sidebar.php
 *
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage ThemesPry
 * @since 1.0
 * @version 1.0
 */

if ( ! is_active_sidebar( 'blog_sidebar' ) ) {
    return;
}
?>

<aside id="sidebar" class="col col-lg-3" role="complementary">
    <div class="blog-sidebar">
        <?php dynamic_sidebar( 'blog_sidebar' ); ?>
    </div>
</aside> <!-- end sidebar -->


