              <article class="bg-gen">
                <section class="bannerInt comonuevosBanner">
                  <div class="titleInt">
                    <div class="container">
                      <div class="row">
                        <div class="col-12">
                          <img src="<?php echo get_template_directory_uri(''); ?>assets/img/logos/Comonuevos.svg" alt="" class="logoInt">
                          <p>Toyota creó COMONUEVOS, el programa que requiere adquirir automóviles Toyota en prefectas condiciones de funcionamiento, a un precio eccesible y con las ventajas de convertirse en cliente Toyota.</p>
                          <div class="contfrmFiltro">
                            <form action="" method="POST" name="filtroauto" id="filtroauto">
                              <!-- <input type="hidden" name="modelo" id="modelo" value=""> -->
                              <input id="min" type="hidden" name="anioStart" value="">
                              <input id="max" type="hidden" name="anioEnd" value="">
                              <select name="modelo" id="modelo" class="custom-select">
                                <option value="">Selecciona modelo</option>
                              </select><!-- end.selectModelo -->
                              <div class="openAnio">
                                <a href="#" id="openAnioDrop">Año</a><!-- end.btn.openDropDown -->
                                <div id="anioDrop" class="dropContAnio">
                                  <div class="contAnioControls">
                                    <div id="yStart" class="anioFirts" data-year-start="2000">2000</div><!-- end.añoModeloInicio -->
                                    <div id="yEnd" class="anioLast" data-year-end="2018">2018</div><!-- end.añoModeloFin -->
                                    <div id="slider" name="slider"></div>
                                  </div><!-- end.sliderRange -->
                                  <button class="aceptarBtn" type="button" id="aceptar" name="aceptar">Aceptar</button>
                                  <button class="cancelarBtn" type="button" id="cancelar" name="cancelar">Cancelar</button>
                                </div><!-- end.DropdownToolsAño -->
                              </div><!-- end.dropDownAño -->
                              <select name="modelo" id="modelo" class="custom-select smallSelect">
                                <option value="">Precio</option>
                              </select><!-- end.selectPrecio -->
                              <select name="modelo" id="modelo" class="custom-select smallSelect">
                                <option value="">Kilometraje</option>
                              </select><!-- end.selectKilometro -->
                              <div class="btnBuscar">
                                <input type="submit" id="submit" name="submit" value="Buscar">
                              </div>
                            </form><!-- end.formFiltro -->
                          </div><!-- end.contentFiltroFrm -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <picture>
                    <source media="(min-width: 1200px)" srcset="<?php echo get_template_directory_uri(); ?>assets/img/imgPrueba/banner-1.jpg">
                    <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>assets/img/imgPrueba/banner-1-md.jpg">
                    <source media="(min-width: 320px)" srcset="<?php echo get_template_directory_uri(); ?>assets/img/imgPrueba/banner-1-sm.jpg">
                    <img src="<?php echo get_template_directory_uri(); ?>assets/img/imgPrueba/banner-1.jpg" alt="">
                  </picture>
                </section><!-- end.BannerInt -->

                <section class="contAutoNuevosSec">
                  <div class="container">
                    <div class="row">
                      <div class="col-12">
                        <div class="bgSegGris">
                        </div>
                      </div>
                    </div>
                  </div>
                </section>

                <section class="contAutoNuevosSec">
                  <div class="container">
                    <div class="row">
                      <div class="col-12">
                        <div class="bgSegGris">
                          <div class="row align-items-md-center">
                            <div class="col-12">
                              <div class="btnReturn">
                                <h3>Comonuevos<br><small>Inventario de autos</small></h3>
                              </div><!-- end.descripciónSeguros -->
                            </div><!-- end.col -->
                            <div class="col-12">
                              <hr>
                            </div>
                          </div>
                          <div class="row justify-content-md-center">
                          <?php for($i = 1; $i <= 6; $i ++){ ?>
                            <div class="col-md-6 col-lg-4">
                              <figure class="boxModeloNuevos">
                                <img src="<?php echo get_template_directory_uri(''); ?>assets/img/autos/corolla/9_corolla.png" alt="">
                                <figcaption>
                                  <p>Toyota Prius 2018</p>
                                  <h3>$420,319.00</h3>
                                  <p>AUT | 575 KM</p>
                                  <a class="btnsGenericos ani-btn" href="">Ver más</a>
                                </figation>
                              </figure><!-- end.boxModeloNuevos -->
                            </div><!-- end.col4 -->
                          <?php } ?>
                            <div class="col-12 col-md-4">
                              <div class="contPagination">
                                <nav aria-label="Page navigation">
                                  <ul class="pagination">
                                    <li class="page-item">
                                      <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true"><i class="fa fa-chevron-left"></i></span>
                                      </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active" aria-current="page">
                                      <span class="page-link">
                                        2
                                        <span class="sr-only">(current)</span>
                                      </span>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                      <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true"><i class="fa fa-chevron-right"></i></span>
                                      </a>
                                    </li>
                                  </ul>
                                </nav>
                              </div><!-- end.descripciónSeguros -->
                            </div><!-- end.col -->
                          </div>
                        </div><!-- end.contentAutosNueos -->
                      </div><!-- end.col-12 -->
                    </div><!-- end.row -->
                  </div><!-- end.container -->
                </section><!-- end.autosNuevos -->
              </article> 