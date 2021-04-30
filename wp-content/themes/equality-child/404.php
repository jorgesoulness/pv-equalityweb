<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Equality_Child
 */

get_header();
?>

<section class="error-404 not-found" data-last>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="notFound">
					<figure class="icon404">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/imgprueba/001-error-404.svg" alt="404 Error">
					</figure>
					<div class="page-header">
						<div class="titleGen full">
							<h1 class="titleGen__head titleGen__head--center"><?php esc_html_e( 'Oops! No se encontró la página', 'equality-child' ); ?></h1>
						</div>
					</div><!-- .page-header -->

					<div class="page-content text-center">
						<p><?php esc_html_e( 'Parece que lo que estás buscando no se encuentra aquí. Intenta con otra dirección.', 'equality-child' ); ?></p> 
					</div><!-- .page-content -->
					<div class="btnGen404">
						<a class="btnFx btnFx__generic btnFx__generic--purple" href="<?php echo esc_url(site_url('')); ?>"><span><?php _e('Regresar al inicio', 'equality-child'); ?></span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- .error-404 -->

<?php
get_footer();
