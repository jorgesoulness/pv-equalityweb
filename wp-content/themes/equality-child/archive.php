<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Equality_Child
 */

get_header();
?>

		<?php if ( have_posts() ) : ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<section class="contArchive">
					<div class="container">
						<div class="row">
								<div class="col-12">
									<div class="titleGen full">
										<h2 class="titleGen__head titleGen__head--center"><?php the_archive_title(); ?></h2>
									</div>
								</div>
						</div>
					</div>
				</section>
				<section class="contAboutUs" data-last>
          <div class="container">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile; ?>
					</div><!-- end.container -->
        </section><!-- end.contAboutUs -->
</article><!-- #post-<?php the_ID(); ?> -->

<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>
</article><!-- #post-<?php the_ID(); ?> -->
<?php endif; ?>
<?php
get_footer();
