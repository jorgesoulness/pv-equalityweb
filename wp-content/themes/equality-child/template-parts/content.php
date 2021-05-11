<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Equality_Child
 */

?>

<?php if(is_single()): ?>
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
                    <?php the_field('descripcion_hero'); ?>
                  </div>

                </div><!-- end.col-* -->
              </div><!-- end.row -->
            </div><!-- end.container -->
          </div><!-- end.contHero -->

          <div class="overlayHeroInt"></div><!-- end.overlayHero -->
        </section><!-- end.heroSec -->

        <section class="contSingelPage">
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-5 col-lg-5">
                <figure class="imageSingle">
<?php if(has_post_thumbnail()) : ?>
                  <?php echo the_post_thumbnail() ?>
<?php else:  ?>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/imgprueba/administracion_icono-01.svg" alt="<?php the_title(); ?>">
<?php endif; ?>
                </figure>
              </div><!-- end.col-* -->
              <div class="col-12 col-md-7 col-lg-7">
                <div class="tabsContSingle">
                  
                  <ul class="nav nav-tabs listSingle" id="descSingle" role="tablist">
                    <li class="nav-item" role="presentation">
                      <a class="nav-link active" id="desc-0-tab" data-toggle="tab" href="#desc-0" role="tab" aria-controls="desc-0" aria-selected="true"><?php _e('Beneficios', 'equality-child'); ?></a>
                    </li><!-- end.listItem -->
                    <li class="nav-item" role="presentation">
                      <a class="nav-link" id="desc-1-tab" data-toggle="tab" href="#desc-1" role="tab" aria-controls="desc-1" aria-selected="false"><?php _e('Características', 'equality-child'); ?></a>
                    </li><!-- end.listItem -->
                  </ul><!-- end#descSingle --> 
                  <div class="tab-content descSingle" id="contentSingle">
                    <div class="tab-pane fade show active" id="desc-0" role="tabpanel" aria-labelledby="desc-0-tab">
                      <div class="rte">
												<?php the_field('beneficios'); ?>
                        <div class="btnRte">
                          <a class="btnFx btnFx__generic btnFx__generic--orange" href="#informacion"><span><?php _e('Solicita una demo', 'equality-child'); ?></span></a>
                        </div>
                      </div>
                    </div><!-- end.contentDesc -->
                    <div class="tab-pane fade" id="desc-1" role="tabpanel" aria-labelledby="desc-1-tab">
                      <div class="rte">
												<?php the_content(); ?>
                        <div class="btnRte">
                          <a class="btnFx btnFx__generic btnFx__generic--orange" href="#informacion"><span><?php _e('Solicita una demo', 'equality-child'); ?></span></a>
                        </div>
                      </div>
                    </div><!-- end.contentDesc -->
                  </div><!-- end#contentSingle -->

                </div><!-- end.tabsContSingle -->
              </div><!-- end.col-* -->
            </div><!-- end.row -->
          </div><!-- end.container -->
        </section><!-- end.contSingelPage -->

        <section id="informacion" class="contContact" data-last>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12">
                <div class="titleGen full">
                  <h2 class="titleGen__head titleGen__head--center"><?php _e('MÁS INFORMACIÓN', 'equality-child'); ?></h3>
                </div>
              </div>
              <div class="col-12 col-md-8 col-lg-6">

                <div class="formContacto">
                    <div class="form-row">

                      <div class="col-12">
                        <div class="descForm">
                          <p><?php _e('DEJANOS TUS DATOS EN EL SIGUIENTE FORMULARIO Y PRONTO TE CONTACTAREMOS.', 'equality-child'); ?></p>
                        </div>
                      </div>
                      <!-- <div class="col-12">
                        <div class="animatedField form-group">
                          <input name="nombre" type="text" class="form-control" id="nombre" required />
                          <label for="nombre"><?php _e('Nombre completo', 'equality-child'); ?></label>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="animatedField form-group">
                          <input name="email" type="email" class="form-control" id="email" required />
                          <label for="email"><?php _e('Correo electrónico', 'equality-child'); ?></label>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="animatedField form-group">
                          <input name="telefono" type="text" class="form-control" id="telefono" required />
                          <label for="telefono"><?php _e('Teléfono', 'equality-child'); ?></label>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="animatedTextArea form-group">
                          <textarea name="mensaje" id="mensaje" cols="30" rows="5" required></textarea>
                          <label for="mensaje"><?php _e('Mensaje', 'equality-child'); ?></label>
                        </div>
                      </div>
                      <div class="col-12">
                        <fieldset>
                          <input type="checkbox" class="CheckStyle" name="acepto" id="acepto" vlaue="Acepto">
                          <label for="acepto"><?php _e('He leído y acepto el', 'equality-child'); ?> <a href="<?php esc_url(site_url('')); ?>/aviso-de-privacidad"><?php _e('Aviso de Privacidad', 'equality-child'); ?></a></label>
                        </fieldset>
												<input type="hidden" name="lead" id="lead" value="<?php the_title(); ?>">
                      </div>
                      <div class="col-12 text-center">
                        <input id="submit" name="submit" class="btnGen btnGen__item btnGen__item--purple" type="submit"
                          value="<?php _e('Enviar', 'equality-child'); ?>">
                      </div> -->
                      <div class="col-12">
                      <?php
                        if ( get_field('campo_formulario') ) {
                          echo do_shortcode( get_field('campo_formulario') );
                        }
                      ?>
                      </div>

                    </div><!-- end.col-* -->
                </div><!-- end.formContacto -->

              </div><!-- end.col-* -->
            </div><!-- end.row -->
          </div><!-- end.container -->
        </section><!-- end.contContact -->
<?php elseif(is_archive()): ?>

            <div class="row align-items-center">
              <div class="col-12 col-md-6<?php if( $wp_query->current_post % 2 ) { echo ' order-md-2'; } ?>">
                <figure class="bxAboutCont bxAboutContArch">
<?php if(has_post_thumbnail()) : ?>
                  <?php echo the_post_thumbnail() ?>
<?php else:  ?>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/imgprueba/administracion_icono-01.svg" alt="<?php the_title(); ?>">
<?php endif; ?>
                </figure><!-- end.bxAboutCont -->
              </div><!-- end.col-* -->
              <div class="col-12 col-md-6">
                <div class="titleGen small">
                  <h3 class="titleGen__head titleGen__head--left"><?php the_title(); ?></h3>
                </div>
                <div class="descAboutBox">
									<?php the_excerpt(); ?>
                </div><!-- end.descAboutBox -->
								<div class="btnArchive">
									<a class="btnFx btnFx__generic btnFx__generic--orange" href="<?php the_permalink(); ?>"><span><?php _e('Más información', 'equality-child'); ?></span></a>
									<a class="btnFx btnFx__generic btnFx__generic--purple" href="<?php the_permalink(); ?>#informacion"><span><?php _e('Solicita una demo', 'equality-child'); ?></span></a>
								</div>
              </div><!-- end.col-* -->
              <div class="col-12<?php if( $wp_query->current_post % 2 ) { echo ' order-12'; } ?>">
                <hr>
              </div>
            </div><!-- end.row -->

<?php else: ?>
	<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'equality-child' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );
	?>
<?php endif; ?>

