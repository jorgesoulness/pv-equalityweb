              <article class="bg-gen">
                <section class="bannerInt">
                  <picture>
                    <source media="(min-width: 1200px)" srcset="<?php echo get_template_directory_uri(); ?>assets/img/imgPrueba/banner-1.jpg">
                    <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>assets/img/imgPrueba/banner-1-md.jpg">
                    <source media="(min-width: 320px)" srcset="<?php echo get_template_directory_uri(); ?>assets/img/imgPrueba/banner-1-sm.jpg">
                    <img src="<?php echo get_template_directory_uri(); ?>assets/img/imgPrueba/banner-1.jpg" alt="">
                  </picture>
                </section><!-- end.BannerInt -->

                <section class="navSectionsLinks">
                  <div class="container">
                    <div class="row">
                      <div class="col-6 col-md-6 col-lg-7">
                        <ul>
                          <li><a href="#diseno">Diseño</a></li>
                          <li><a href="#versiones">Versiones</a></li>
                          <li><a href="#galeria">Galería</a></li>
                        </ul>
                      </div><!-- end-menu#1 -->
                      <div class="col-6 col-md-6 col-lg-5">
                        <ul class="menuSecundario">
                          <li><a href="">Cotízalo</a></li>
                          <li><a href="">Manéjalo</a></li>
                        </ul>
                      </div><!-- end-menu#1 -->
                    </div>
                  </div>
                </section><!-- end.navSections -->

                <section id="diseno" class="intModelo">
                  <div class="container">
                    <div class="row align-items-md-center">
                      <div class="col-md-5 col-lg-4">
                        <div class="tituloModelo">
                          <h2>Corolla<small>Modelo 2020</small></h2>
                        </div><!-- end.TítuloModelo -->
                        <div class="precioModelo">
                          <h3><small>Desde</small>$294,500.00</h3>
                        </div><!-- end.PrecioModelo -->
                        <div class="toolsModelo">
                          <a href="<?php echo site_url(''); ?>contacto"><div class="circleTag"><i class="fa fa-whatsapp"></i></div>Contáctanos</a>
                          <a href="" download><div class="circleTag"><i class="fa fa-download"></i></div>Descarga la ficha técnica</a>
                        </div><!-- end.ToolsModelo -->
                        <div class="btnsModelo">
                          <a href="" class="btnsGenericos ani-btn">Cotízalo</a>
                          <a href="" class="btnsGenericos ani-btn">Manéjalo</a>
                        </div><!-- end.btnModelo -->
                      </div><!-- end.descModelo -->
                      <div class="col-md-7 col-lg-8">
                        <div class="contimg3d" data-modelo="corolla"><!-- <===Modelo auto: slug_modelo (Carpeta de fotos: slug_modelo) -->
                          <div id="modeloToyota" class="imgrotate3d">
                          </div><!-- end.div3dModelo -->
                        </div>
                      </div><!-- end.modelo3d -->
                    </div>
                  </div>
                </section><!-- end.disenoSec -->
                <section class="intModelo">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-8">
                        <div class="imageColor">
                          <img class="activeColor" src="<?php echo get_template_directory_uri(''); ?>assets/img/imgPrueba/cambio_modelo/corolla/corolla_blanco.png" alt="" data-color-modelo="blanco">
                          <img class="" src="<?php echo get_template_directory_uri(''); ?>assets/img/imgPrueba/cambio_modelo/corolla/corolla_blancoperlado.png" alt="" data-color-modelo="blancoperlado">
                          <img class="" src="<?php echo get_template_directory_uri(''); ?>assets/img/imgPrueba/cambio_modelo/corolla/corolla_rojo.png" alt="" data-color-modelo="rojo">
                        </div>
                      </div><!-- end.col#1 -->
                      <div class="col-lg-4">
                        <div class="titleColors">
                          <h3>Color</h3>
                          <p>Elige el color</p>
                        </div><!-- end.TítuloColor -->
                        <div class="controlsColorCont">

                          <div class="boxColor">
                            <input data-color-modelo="blanco" type="radio" id="blanco" name="color_modelo" checked>
                            <label style="--color-modelo: #fff;" for="blanco"><span></span></label>
                          </div><!-- end.boxColor -->
                          <div class="boxColor">
                            <input data-color-modelo="blancoperlado" type="radio" id="blancoperlado" name="color_modelo">
                            <label style="--color-modelo: #eaeaea;" for="blancoperlado"><span></span></label>
                          </div><!-- end.boxColor -->
                          <div class="boxColor">
                            <input data-color-modelo="rojo" type="radio" id="rojo" name="color_modelo">
                            <label style="--color-modelo: #f00;" for="rojo"><span></span></label>
                          </div><!-- end.boxColor -->

                        </div><!-- end.contentInputsColors -->
                      </div><!-- end.col#2 -->
                    </div><!-- end.row -->
                  </div><!-- end.container -->
                </section><!-- end.versionesSec -->
                <section id="versiones" class="intModelo">
                  <div class="container">
                    <div class="row">
                      <div class="col-12">
                        <div class="bgSegGris">
                          <div class="row">
                            <div class="col-12">
                              <div class="descGen">
                                <h3>Versiones</h3>
                              </div><!-- end.descripciónSeguros -->
                            </div><!-- end.col -->
                          </div>
                          <div class="row justify-content-md-center">
                          <?php for($i = 1; $i <= 4; $i ++){ ?>
                            <div class="col-12 col-md-6 col-lg-4 d-none d-md-block">
                              <figure class="boxDescInterna">
                                <div class="imgHoverBoxCar">
                                  <img src="<?php echo get_template_directory_uri(); ?>assets/img/imgPrueba/RAV4_10.png" alt="">
                                  <div class="hideBox">
                                    <img src="<?php echo get_template_directory_uri(); ?>assets/img/imgPrueba/RAV4_28.png" alt="">
                                  </div>
                                </div>
                                <figcaption>
                                  <h3>Base MT</h3>
                                  <p>Desde<br><span>$294,500.00</span></p>
                                </figcaptio>
                                <a href="">Ver modelo</a>
                              </figure><!-- end.boxDescInterna -->
                            </div><!-- end.col4 -->
                          <?php } ?>

                            <div class="col-12 d-block d-md-none">
                              <div class="slideInternaModeloMobile">
                          <?php for($s = 1; $s <= 4; $s ++){ ?>
                                <div>
                                  <figure class="boxDescInterna">
                                    <div class="imgHoverBoxCar">
                                      <img src="<?php echo get_template_directory_uri(); ?>assets/img/imgPrueba/RAV4_10.png" alt="">
                                      <div class="hideBox">
                                        <img src="<?php echo get_template_directory_uri(); ?>assets/img/imgPrueba/RAV4_28.png" alt="">
                                      </div>
                                    </div>
                                    <figcaption>
                                      <h3>Base MT</h3>
                                      <p>Desde<br><span>$294,500.00</span></p>
                                    </figcaptio>
                                    <a href="">Ver modelo</a>
                                  </figure><!-- end.boxDescInterna -->
                                </div><!-- end.itemSlider -->
                            <?php } ?>
                              </div><!-- end.contentSliderMobile -->
                            </div><!-- end.col-12 -->

                          </div>
                        </div><!-- end.contentSegruos -->
                      </div><!-- end.col-12 -->
                    </div><!-- end.row -->
                  </div><!-- end.container -->
                </section><!-- end.versionesSec -->
                <section id="galeria" class="intModelo">
                  <div class="container">
                    <div class="row">
                      <div class="col-12">
                        <div class="bgSegGris">
                          <div class="descGen">
                              <h3>Galería</h3>
                          </div><!-- end.descripciónGalería -->
                          <div class="contentGallery">
                            <div class="listFilterGalerry">
                              <ul>
                                <li><a class="filter-button" data-filtro="all" href="#">Todo</a></li>
                                <li><a class="filter-button" data-filtro="interior" href="#">Interior</a></li>
                                <li><a class="filter-button" data-filtro="exterior" href="#">Exterior</a></li>
                              </ul>
                            </div><!-- end.galleryFilter -->
                            <div class="contBoxGallery">

                              <div class="boxGallery filter interior">
                                <img src="<?php echo get_template_directory_uri(''); ?>assets/img/autos/corolla/galeria/control_puertas.png" alt="">
                                <a href=""></a>
                              </div>
                              <div class="boxGallery filter exterior">
                                <img src="<?php echo get_template_directory_uri(''); ?>assets/img/autos/corolla/galeria/GRAN_INT_COROLLA.png" alt="">
                                <a href=""></a>
                              </div>
                              <div class="boxGallery filter interior">
                                <img src="<?php echo get_template_directory_uri(''); ?>assets/img/autos/corolla/galeria/interior_copiloto.png" alt="">
                                <a href=""></a>
                              </div>
                              <div class="boxGallery filter interior">
                                <img src="<?php echo get_template_directory_uri(''); ?>assets/img/autos/corolla/galeria/pantalla_completa_1.png" alt="">
                                <a href=""></a>
                              </div>
                              <div class="boxGallery filter interior">
                                <img src="<?php echo get_template_directory_uri(''); ?>assets/img/autos/corolla/galeria/pantalla_completa_2.png" alt="">
                                <a href=""></a>
                              </div>
                              <div class="boxGallery filter interior">
                                <img src="<?php echo get_template_directory_uri(''); ?>assets/img/autos/corolla/galeria/pantalla_completa_6.png" alt="">
                                <a href=""></a>
                              </div>
                              <div class="boxGallery filter interior">
                                <img src="<?php echo get_template_directory_uri(''); ?>assets/img/autos/corolla/galeria/tablero_completo.png" alt="">
                                <a href=""></a>
                              </div>
                              <div class="boxGallery filter interior">
                                <img src="<?php echo get_template_directory_uri(''); ?>assets/img/autos/corolla/galeria/tablero_desde_piloto.png" alt="">
                                <a href=""></a>
                              </div>
                              <div class="boxGallery filter interior">
                                <img src="<?php echo get_template_directory_uri(''); ?>assets/img/autos/corolla/galeria/volante.png" alt="">
                                <a href=""></a>
                              </div>

                            </div><!-- end.boxGallery -->
                          </div><!-- end.col-12 -->
                        </div><!-- end.bgGris -->
                      </div><!-- end.col-12 -->
                    </div><!-- end.row -->
                  </div><!-- end.container -->
                </section><!-- end.galeriaSec -->
              </article>