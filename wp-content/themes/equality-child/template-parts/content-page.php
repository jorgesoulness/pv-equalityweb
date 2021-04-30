<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Equality_Child
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('bg-gen'); ?>>
<?php // Quienes Somos
	if(is_page(71)) : ?>
				<section id="banner" data-parallax-fx class="bannerInt"
          style="background-image: url(<?php the_field('fondo_banner_hd'); ?>);" data-bg-func
          data-bg-hdesktop="<?php the_field('fondo_banner_hd'); ?>"
          data-bg-desktop="<?php the_field('fondo_banner_hd'); ?>"
          data-bg-tablet="<?php the_field('fondo_banner_tablet'); ?>"
          data-bg-mobile="<?php the_field('fondo_banner_mobile'); ?>">

          <div class="titleInt">
            <div class="container">
              <div class="row">
                <div class="col-12">

                  <h2 class="title-hero"><?php the_title(); ?></h2>
                  <hr>
                  <div class="desc-hero-int">
										<?php the_content(); ?>
                  </div>

                </div><!-- end.col-* -->
              </div><!-- end.row -->
            </div><!-- end.container -->
          </div><!-- end.contHero -->

          <div class="overlayHeroInt"></div><!-- end.overlayHero -->
        </section><!-- end.heroSec -->
<?php
if( have_rows('content_quienes') ): ?>
        <section class="contAboutUs" data-last>
          <div class="container">
<?php
	$inc = 0; $cuenta = 1;
	while( have_rows('content_quienes') ): the_row(); ?>
	<?php if( get_row_layout() == 'cajas_quienes' ): ?>
            <div class="row align-items-center">
              <div class="col-12 col-md-6<?php echo ($cuenta%2 == 0) ? '' : ' order-md-2'; ?>">
                <figure class="<?php if($inc == 2) { echo 'bxAboutContFull'; } else { echo 'bxAboutCont'; } ?>">
                  <img src="<?php the_sub_field('imagen_caja'); ?>" alt="<?php the_sub_field('titulo'); ?>">
                </figure><!-- end.bxAboutCont -->
              </div><!-- end.col-* -->
              <div class="col-12 col-md-6">
                <div class="titleGen small">
                  <h3 class="titleGen__head titleGen__head--left"><?php the_sub_field('titulo'); ?></h3>
                </div>
                <div class="descAboutBox">
									<?php the_sub_field('descripcion'); ?>
                </div><!-- end.descAboutBox -->
              </div><!-- end.col-* -->
              <div class="col-12<?php echo ($cuenta%2 == 0) ? '' : ' order-12'; ?>">
                <hr>
              </div>
            </div><!-- end.row -->
	<?php elseif( get_row_layout() == 'caja_grande' ): ?>
            <div class="row">
              <div class="col-12 text-center">
                <div class="titleGen small center">
                  <h3 class="titleGen__head titleGen__head--center"><?php the_sub_field('titulo_centrado'); ?></h3>
                </div>
                <figure class="circleAbout">
                  <img src="<?php the_sub_field('imagen_centrada'); ?>" alt="<?php the_sub_field('titulo_centrado'); ?>">
                </figure>
              </div>
            </div>
	<?php endif; ?>
<?php $inc ++; $cuenta ++; endwhile; ?>
          </div><!-- end.container -->
        </section><!-- end.contAboutUs -->
<?php else: ?>
				<section>
					<div class="container">
						<div class="row">
							<div class="col-12 text-center">
                <div class="titleGen small center">
                  <h3 class="titleGen__head titleGen__head--center"><?php _e('Lo sentimos', 'equality-child') ?></h3>
                </div>
								<div class="descAboutBox">
                  <p><?php _e('No se encontraron datos en Quienes Somos', 'equality-child') ?></p>
                </div><!-- end.descAboutBox -->
              </div>
						</div>
					</div>
				</section>
<?php endif; ?>

<?php // Contacto
	elseif (is_page(73)) : ?>
				<section id="banner" data-parallax-fx class="bannerInt"
          style="background-image: url(<?php the_field('fondo_banner_hd'); ?>);"
          data-bg-func
          data-bg-hdesktop="<?php the_field('fondo_banner_hd'); ?>"
          data-bg-desktop="<?php the_field('fondo_banner_hd'); ?>"
          data-bg-tablet="<?php the_field('fondo_banner_tablet'); ?>"
          data-bg-mobile="<?php the_field('fondo_banner_mobile'); ?>">

          <div class="titleInt">
            <div class="container">
              <div class="row">
                <div class="col-12">

                  <h2 class="title-hero"><?php the_title(); ?></h2>
                  <hr>
                  <div class="desc-hero-int">
										<?php the_content(); ?>
                  </div>

                </div><!-- end.col-* -->
              </div><!-- end.row -->
            </div><!-- end.container -->
          </div><!-- end.contHero -->

          <div class="overlayHeroInt"></div><!-- end.overlayHero -->
        </section><!-- end.heroSec -->

        <section class="contContact" data-last>
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-6">
                
                <div class="formContacto">
                  <form action="" name="frmcontact" id="frmcontact" method="POST">
                    <div class="form-row">

                      <div class="col-12">
                        <div class="animatedField form-group">
                          <input name="nombreFrm" type="text" class="form-control" id="nombreFrm" required />
                          <label for="nombreFrm"><?php _e('Nombre completo', 'equality-child'); ?></label>
                        </div>
                      </div><!-- end.col-* -->
                      <div class="col-12">
                        <div class="animatedField form-group">
                          <input name="emailFrm" type="email" class="form-control" id="emailFrm" required />
                          <label for="emailFrm"><?php _e('Correo electrónico', 'equality-child'); ?></label>
                        </div>
                      </div><!-- end.col-* -->
                      <div class="col-12 col-md-6">
                        <div class="animatedField form-group">
                          <input name="telFrm" type="text" class="form-control" id="telFrm" required />
                          <label for="telFrm"><?php _e('Teléfono', 'equality-child'); ?></label>
                        </div>
                      </div><!-- end.col-* -->
                      <div class="col-12 col-md-6">
                        <div class="animatedField form-group">
                          <input name="companyFrm" type="text" class="form-control" id="companyFrm" required />
                          <label for="companyFrm"><?php _e('Empresa', 'equality-child'); ?></label>
                        </div>
                      </div><!-- end.col-* -->
                      <div class="col-12">
                        <div class="animatedTextArea form-group">
                          <textarea name="mensajeFrm" id="mensajeFrm" cols="30" rows="5" required></textarea>
                          <label for="mensajeFrm"><?php _e('Mensaje', 'equality-child'); ?></label>
                        </div>
                      </div>
                      <div class="col-12">
                        <fieldset>
                          <input type="checkbox" class="CheckStyle" name="acceptFrm" id="acceptFrm" vlaue="Acepto">
                          <label for="acceptFrm"><?php _e('He leído y acepto el', 'equality-child'); ?> <a href="<?php esc_url(site_url('')); ?>/aviso-de-privacidad"><?php _e('Aviso de Privacidad', 'equality-child'); ?></a></label>
                        </fieldset>
                      </div>
                      <div class="col-12 text-center">
                        <input id="submit" name="submit" class="btnGen btnGen__item btnGen__item--purple" type="submit" value="<?php _e('Enviar', 'equality-child'); ?>">
                      </div>

                    </div><!-- end.col-* -->
                  </form><!-- end.form -->
                </div><!-- end.formContacto -->

              </div><!-- end.col-* -->
              <div class="col-12 col-md-6">
<?php
if( have_rows('content_contacto') ): ?>
                <div class="boxDescContact">
<?php while(have_rows('content_contacto')) : the_row(); ?>
	<?php if( get_row_layout() == 'listado_contacto' ): ?>
                  <div class="boxDescContact__items">
                    <div class="boxContactInfo">
                      <div class="boxContactInfo__circle">
                        <i class="lni lni-<?php the_sub_field('icono'); ?>"></i>
                      </div><!-- end.boxContactInfo__circle -->
                      <div class="boxContactInfo__text">
                        <h4><?php the_sub_field('titulo_listado'); ?></h4>
												<?php the_sub_field('informacion_listado'); ?>
                        <!-- <p><a href="mailto:info@equality.company" target="_blank">info@equality.company</a></p> -->
                      </div><!-- end.boxContactInfo__text -->
                    </div><!-- end.boxContactInfo -->
                  </div><!-- end.boxDescContact__items -->
	<?php endif; ?>
<?php endwhile; ?>
								</div><!-- end.boxDescContact -->
<?php else: ?>
									<div class="boxDescContact__items">
                    <div class="boxContactInfo">
                      <div class="boxContactInfo__circle">
                        <i class="lni lni-close"></i>
                      </div><!-- end.boxContactInfo__circle -->
                      <div class="boxContactInfo__text">
                        <h4><?php _e('Lo sentimos', 'equality-child'); ?></h4>
                        <p><?php _e('No se encontraron datos en Listado Contacto', 'equality-child') ?></p>
                      </div><!-- end.boxContactInfo__text -->
                    </div><!-- end.boxContactInfo -->
                  </div><!-- end.boxDescContact__items -->
									
                </div><!-- end.boxDescContact -->
<?php endif; ?>
              </div><!-- end.col-* -->
            </div><!-- end.row -->
          </div><!-- end.container -->
        </section><!-- end.contContact -->
<?php else: ?>
				<section class="contGeneric" data-last>
          <div class="container">
            <div class="row">

              <div class="col-12">
                <div class="titleGen small">
                  <h2 class="titleGen__head titleGen__head--left"><?php the_title(); ?></h3>
                </div>
              </div><!-- end.col-* -->
              <div class="col-12">
                <div class="rte">
								<?php
									the_content();

									wp_link_pages( array(
										'before' => '<div class="page-links">' . esc_html__( 'Páginas:', 'equality-child' ),
										'after'  => '</div>',
									) );
								?>
                </div><!-- end.rte -->
              </div><!-- end.col-* -->

            </div><!-- end.row -->
          </div><!-- end.container -->
        </section><!-- end.contGeneric -->
<?php endif; ?>
<?php if ( get_edit_post_link() ) : ?>
	<div class="entry-footer editPostGen">
		<?php
		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Editar <span class="screen-reader-text">%s</span>', 'equality-child' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">',
			'</span>'
		);
		?>
	</div><!-- .entry-footer -->
<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
