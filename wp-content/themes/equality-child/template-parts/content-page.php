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
<?php // Paginas de Inicio
  if(is_page(array(39, 80, 81))) : ?>
        <section id="banner" data-parallax-fx class="hero-sec" style="background-image: url(<?php the_field('fondo_hero_hd'); ?>);"
          data-bg-func
          data-bg-hdesktop="<?php the_field('fondo_hero_hd'); ?>"
          data-bg-desktop="<?php the_field('fondo_hero_desktop'); ?>"
          data-bg-tablet="<?php the_field('fondo_hero_tablet'); ?>"
          data-bg-mobile="<?php the_field('fondo_hero_mobile'); ?>"  
        >

          <div class="contHero">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="slide-principal">

                    <div>
                      <?php the_content(); ?>
                  <?php 
                    $link = get_field('url_boton_hero');
                    if( $link ): ?>
                      <div class="btn-hero">
                        <a class="btnFx btnFx__generic btnFx__generic--purple" href="<?php echo esc_url( $link ); ?>"><span><?php the_field('nombre_boton_hero'); ?></span></a>
                      </div>
                  <?php endif; ?>
                    </div><!-- end.itemSlide -->

                  </div><!-- edn.slide-principal --> 
                </div><!-- end.col-* -->
              </div><!-- end.row -->
            </div><!-- end.container -->
          </div><!-- end.contHero -->

          <div class="overlayHero"></div><!-- end.overlayHero -->
          <a href="#one" class="scrollNext scrolly"><span></span></a>
          <div class="header-title" style="opacity: 0.0"></div>
        </section><!-- end.heroSec -->

        <section id="one" class="slideServicios">
          <div class="gridServicios">
            <div class="gridServicios__listado" datat-slider-servicios-thumbs>
<?php
  $thumbs = array(
    'post_type'   => 'servicio',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'order'       => 'DESC',
   );
   $in = 0;
   $slideThumbs = new WP_Query( $thumbs );
?>
<?php if($slideThumbs->have_posts()) : while($slideThumbs->have_posts()) : $slideThumbs->the_post(); ?>
              <div class="gridServicios__colsList">
                <div class="boxThumbServicios" data-numbre-box="<?php echo $in; ?>">
                  <div class="boxThumbServicios__icono">
                    <div class="boxThumbServicios__icono--circle">
              <?php if(has_post_thumbnail()) : ?>
                      <?php echo the_post_thumbnail(); ?>
              <?php else: ?>
                      <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/imgprueba/evaluacion_icono-01.svg" alt="Administración">
              <?php endif; ?>
                    </div>
                  </div>
                  <div class="boxThumbServicios__titulo">
                    <h4><?php the_title(); ?></h4>
                  </div>
                </div>
              </div><!-- end.gridServicios__colsList --> 
<?php $in ++; endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>
            </div><!-- edn.gridServicios__listado --> 
          </div><!-- end.gridServicios -->

          <div class="contSlideServicios">
            <h2 class="title-servicios"><?php _e('Soluciones', 'equality-child'); ?></h2>
            <div class="sliderWrp">
<?php
  $slide = array(
    'post_type'   => 'servicio',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'order'       => 'DESC',
   );
   $i = 0;
   $sliderServ = new WP_Query( $slide );
?>
<?php if($sliderServ->have_posts()) : ?>
              <div class="slider-servicios">
<?php while($sliderServ->have_posts()) : $sliderServ->the_post(); ?>
                <div>
                  <div class="boxServiciosHome">
                    <div class="boxServiciosHome__image">
              <?php if(has_post_thumbnail()) : ?>
                      <?php echo the_post_thumbnail(); ?>
              <?php else: ?>
                      <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/imgprueba/evaluacion_icono-01.svg" alt="">
              <?php endif; ?>
                    </div>
                    <div class="boxServiciosHome__desc">
                      <div class="titleGen small">
                        <h4 class="titleGen__head titleGen__head--left"><?php the_title(); ?></h4>
                      </div>
                      <?php the_content(); ?>
                      <div class="btnServicios">
                        <a class="btnFx btnFx__generic btnFx__generic--purple" href="<?php the_permalink(); ?>"><span><?php _e('Más información', 'equality-child'); ?></span></a>
                        <a class="btnFx btnFx__generic btnFx__generic--orange" href="<?php the_permalink(); ?>#informacion"><span><?php _e('Solicita una demo', 'equality-child'); ?></span></a>
                      </div>
                    </div>
                  </div><!-- end.itemSlide -->
                </div>
<?php $i ++; endwhile; ?>
              </div><!-- end.slider-servicios -->
<?php endif; ?>
<?php wp_reset_query(); ?>
            </div><!-- end.sliderWrp -->
          </div><!-- end.contSlideServicios -->
          <a class="btnSlideProd bLeftP" href="#" id="prevslideHomeMain"></a><!-- end.btnSlidePrev -->
          <a class="btnSlideProd nRightP" href="#" id="nextslideHomeMain"></a><!-- end.btnSlideNext -->

        </section><!-- end.slideServicios -->

        <section class="contNewsletter" data-parallax-fx
          data-last
          style="background-image: url(<?php the_field('fondo_newsletter_hd'); ?>);"
          data-bg-func
          data-bg-hdesktop="<?php the_field('fondo_newsletter_hd'); ?>"
          data-bg-desktop="<?php the_field('fondo_newsletter_hd'); ?>"
          data-bg-tablet="<?php the_field('fondo_newsletter_hd'); ?>"
          data-bg-mobile="<?php the_field('fondo_newsletter_mobile'); ?>"
        >
          <div class="contNewsletter__desc">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 text-center">
                  <div class="titleGen small center">
                    <h4 class="titleGen__head titleGen__head--center"><?php the_field('titulo_newsletter'); ?></h4>
                  </div><!-- end.titleGen -->
                </div><!-- end.col-* -->
                <div class="col-12 col-md-10 col-lg-8">
                  <div class="newsTestDesc">
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quos id quaerat non minima pariatur omnis blanditiis sint, excepturi reiciendis sequi unde cum, ducimus distinctio ipsa laboriosam. Voluptatum, illum molestiae.</p> -->
                    <?php the_field('descripcion_newsletter'); ?>
                  </div><!-- end.newsTestDesc -->
                </div><!-- end.col-* -->
                <div class="col-12 col-md-10 col-lg-8">
                  <div class="contNewsletter__form">
                    <!-- <form action="<?php echo esc_url(site_url('')); ?>" name="frmNewsletter" id="frmNewsletter" method="post"> -->
                      <div class="boxRowNews">
                      
                        <!-- <div class="boxRowNews__input boxRowNews__input--left">
                          <div class="animatedField">
                            <input name="email" type="email" class="form-control" id="email" required>
                            <label for="email"><?php _e('Correo electrónico', 'equality-child'); ?></label>
                          </div>
                        </div>
                        <div class="boxRowNews__input boxRowNews__input--right">
                          <input type="hidden" name="fuente_de_lead" id="fuente_de_lead" value="Newsletter Equality">
                          <input type="submit" class="btnGen btnGen__item btnGen__item--purple" value="<?php _e('Suscríbete', 'equality-child'); ?>">
                        </div> -->
                        <?php echo do_shortcode('[hubspot type=form portal=8252034 id=7104691b-fb02-487e-88a6-26716ca9e8c7]'); ?>

                      </div><!-- end.boxRowNews --> 
                    <!-- </form> -->
                  </div><!-- end.contNewsletter__form -->
                </div><!-- end.col-* -->
              </div><!-- end.row -->
            </div><!-- end.container -->
          </div><!-- end.contNewsletter__desc -->
        </section><!-- end.contNewsletter -->
<?php // Quienes Somos
	elseif(is_page(array(71, 197, 194))) : ?>
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
	elseif (is_page(array(73, 192, 190))) : ?>
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
                  <!-- <form action="" name="frmcontact" id="frmcontact" method="POST">
                    <div class="form-row">

                      <div class="col-12">
                        <div class="animatedField form-group">
                          <input name="nombreFrm" type="text" class="form-control" id="nombreFrm" required />
                          <label for="nombreFrm"><?php _e('Nombre completo', 'equality-child'); ?></label>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="animatedField form-group">
                          <input name="emailFrm" type="email" class="form-control" id="emailFrm" required />
                          <label for="emailFrm"><?php _e('Correo electrónico', 'equality-child'); ?></label>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="animatedField form-group">
                          <input name="telFrm" type="text" class="form-control" id="telFrm" required />
                          <label for="telFrm"><?php _e('Teléfono', 'equality-child'); ?></label>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="animatedField form-group">
                          <input name="companyFrm" type="text" class="form-control" id="companyFrm" required />
                          <label for="companyFrm"><?php _e('Empresa', 'equality-child'); ?></label>
                        </div>
                      </div>
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

                    </div>
                  </form> -->
              <?php $currentLanguage  = get_bloginfo('language');
                    if($currentLanguage == "en-US") : ?>
                  <?php echo do_shortcode('[hubspot type=form portal=8252034 id=6f6478d8-94c7-4088-a10b-bc36a7372591]'); ?>
              <?php elseif($currentLanguage == "pt-PT") : ?>
                  <?php echo do_shortcode('[hubspot type=form portal=8252034 id=9ac7b5a6-35f8-49a9-9b72-dee572edf453]'); ?>
              <?php else: ?>
                  <?php echo do_shortcode('[hubspot type=form portal=8252034 id=2d70b0c5-47f7-48ef-be3a-9de0abf233f1]'); ?>
              <?php endif; ?>
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

<?php // Pagina Soluciones
  elseif(is_page(array(170, 182, 184))): ?>
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

				<section class="contAboutUs" data-last>
          <div class="container">
<?php
  $solu = array(
    'post_type'   => 'servicio',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'order'       => 'DESC',
  );
  $isol = 0;
  $countsol = 1;
  $soluciones = new WP_Query( $solu );
?>
<?php if($soluciones->have_posts()) : while($soluciones->have_posts()) : $soluciones->the_post(); ?>
            <div class="row align-items-center">
              <div class="col-12 col-md-6<?php echo ($countsol%2 == 0) ? '' : ' order-md-2'; ?>">
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
              <div class="col-12<?php echo ($countsol%2 == 0) ? '' : ' order-12'; ?>">
                <hr>
              </div>
            </div><!-- end.row -->
<?php $isol ++; $countsol ++; endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>
          </div><!-- end.container -->
        </section><!-- end.contAboutUs -->

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
