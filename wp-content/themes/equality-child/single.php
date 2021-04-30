<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Equality_Child
 */

get_header();
?>
<?php if(have_posts()): ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

		endwhile; // End of the loop.
		?>
</article><!-- #post-<?php the_ID(); ?> -->
<?php endif; ?>
<?php
get_footer();
