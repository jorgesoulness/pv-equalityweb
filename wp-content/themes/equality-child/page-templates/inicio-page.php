<?php
/*
* Template Name: Inicio Template
* @package Equality_Child
*/
get_header();
global $post;
?>      

<?php if(have_posts()): while(have_posts()) : the_post(); ?>
      <article class="bg-gen">  
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
    'order'       => 'ASC',
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
    'order'       => 'ASC',
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
                      <!-- <p>Gestión de crédito marca blanca que permite automatizar procesos y gestión de financiamiento desde la originación hasta la cobranza final, permitiendote crear o transformar tu negocio de crédito.</p>
                      <ul>
                        <li>Originación y gestión de crédito 100% dígital</li>
                        <li>Marca blanca</li>
                        <li>Escalable y ágil</li>
                      </ul> -->
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
                    <form action="">
                      <div class="boxRowNews">
                      
                        <div class="boxRowNews__input boxRowNews__input--left">
                          <div class="animatedField">
                            <input name="email" type="email" class="form-control" id="email" required>
                            <label for="email"><?php _e('Correo electrónico', 'equality-child'); ?></label>
                          </div><!-- end.animatedField -->
                        </div><!-- end.boxRowNews__input--left -->
                        <div class="boxRowNews__input boxRowNews__input--right">
                          <input type="submit" class="btnGen btnGen__item btnGen__item--purple" value="<?php _e('Suscríbete', 'equality-child'); ?>">
                        </div><!-- end.boxRowNews__input--right -->

                      </div><!-- end.boxRowNews --> 
                    </form><!-- end.formNews -->
                  </div><!-- end.contNewsletter__form -->
                </div><!-- end.col-* -->
              </div><!-- end.row -->
            </div><!-- end.container -->
          </div><!-- end.contNewsletter__desc -->
        </section><!-- end.contNewsletter -->

      </article><!-- end.article inicio -->
<?php endwhile; else: ?>

<?php endif; ?>

<?php
get_footer();