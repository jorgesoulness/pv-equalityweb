              <article class="bg-gen">
                <section class="bannerInt">
                  <div class="titleInt">
                    <div class="container">
                      <div class="row">
                        <div class="col-12">
                          <h2>Toyota Financial Service</h2>
                          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto similique, perferendis assumenda doloremque obcaecati at quibusdam ab excepturi.</p>
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

                <section class="navSectionsLinks">
                  <div class="container">
                    <div class="row">
                      <div class="col-12">
                        <ul>
                          <li><a href="#planes-fincanciamiento">Planes de financiamiento</a></li>
                          <li><a href="#proteccion-extendida">Protección extendida</a></li>
                          <li><a href="#seguros">Seguros</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </section><!-- end.navSections -->

                <section id="planes-fincanciamiento" class="faQs-cont">

                  <div class="bgBlueInt"></div>

                  <div class="container">
                    <div class="row">
                      <div class="col-md-12">
                        <h2 class="title-beneficios">Planes de Financiamiento</h2>
                      </div>
                      <div class="col-md-12">

                        <div class="accordion faqStyle" id="faqsList">
                        <?php for($i = 0; $i < 4; $i ++) { ?>  
                          <div class="card">
                            <div class="card-header" id="faH-<?php echo $i; ?>">
                              <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq-<?php echo $i; ?>" aria-expanded="false" aria-controls="faq-<?php echo $i; ?>">
                                  Collapsible Group Item #<?php echo $i; ?>
                                  <i class="fa fa-chevron-down"></i>
                                </button>
                              </h2>
                            </div>

                            <div id="faq-<?php echo $i; ?>" class="collapse" aria-labelledby="faH-<?php echo $i; ?>" data-parent="#faqsList">
                              <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                              </div>
                            </div>
                          </div>
                        <?php } ?>
                        </div>

                      </div><!-- end.faqsFinanciamiento -->
                      <div class="col-md-12">
                        <h2 class="title-beneficios">Requisitos</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam reprehenderit omnis ex odio. Eum minima necessitatibus corporis</p>
                      </div>
                      <div class="col-md-12">

                        <div class="accordion faqStyle" id="requisitos">
                        <?php for($i = 0; $i < 4; $i ++) { ?>  
                          <div class="card">
                            <div class="card-header" id="faR-<?php echo $i; ?>">
                              <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#req-<?php echo $i; ?>" aria-expanded="false" aria-controls="req-<?php echo $i; ?>">
                                  Collapsible Group Item #<?php echo $i; ?>
                                  <i class="fa fa-chevron-down"></i>
                                </button>
                              </h2>
                            </div>

                            <div id="req-<?php echo $i; ?>" class="collapse" aria-labelledby="faHfaR-<?php echo $i; ?>" data-parent="#requisitos">
                              <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                              </div>
                            </div>
                          </div>
                        <?php } ?>
                        </div>

                      </div><!-- end.faqsFinanciamiento -->

                      <div class="col-md-6">
                        <div class="btnfin">
                          <a class="btnsGenericos ani-btn" href="">Descargar solicitud de crédito</a>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="btnfin">
                          <a class="btnsGenericos ani-btn" href="">Contáctanos</a>
                        </div>
                      </div>
                      
                    </div>
                  </div>

                </section><!-- end.planesDeFinanciamiento -->

                <section id="proteccion-extendida" class="prptecFinanSec">
                  <div class="container">
                    <div class="row">
                      <div class="col-12">
                        <figure class="bannerImgPro">
                          <img src="<?php echo get_template_directory_uri(''); ?>assets/img/imgPrueba/banner_hero_cober.jpg" alt="">
                        </figure>
                      </div>
                      <div class="col-md-6">
                        <div class="descPorteccion">
                          <h3>¿Que es protección extendida?</h3>
                          <p>Protección extendida es el respaldo y tranquilidad que necesitas para tu vehículo. Con Protección Extendida ampliarás la garantía ofrecida originalmente por Toyota México hasta por 7 años ó 150,000 kms con cobertura “Defensa a defensa”.</p>
                          <div class="btnLinkPro">
                            <a class="btnsGenericos ani-btn" href="">Contáctanos</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="descCobertura">
                          <h3>Cobertura por antigüedad del vehículo</h3>
                          <ul class="steps">
                            <li><small>1 Año</small></li>
                            <li><small>2 Año</small></li>
                            <li><small>3 Año</small></li>
                            <li class="current"><small>4 Año</small></li>
                            <li><small>5 Año</small></li>
                            <li><small>6 Año</small></li>
                            <li><small>7 Año</small></li>
                          </ul>
                          <figure>
                            <img src="<?php echo get_template_directory_uri(''); ?>assets/img/imgPrueba/banner_seguro_anos.png" alt="">
                          </figure>
                        </div>
                      </div>
                    </div>
                  </div>
                </section><!-- end.proteccionExtendida -->

                <section id="seguros" class="secSeguroCont">
                  <div class="container">
                    <div class="row">
                      <div class="col-12">
                        <div class="bgSegGris">
                          <div class="row">
                            <div class="col-12">
                              <div class="descGen">
                                <h3>Seguros</h3>
                                <p>Protégete desde el primer kilómetro</p>
                              </div><!-- end.descripciónSeguros -->
                            </div><!-- end.col -->
                            <div class="col-md-6 boxSegLine">
                              <div class="boxDescSeguro">
                                <h3>Nos encargamos de que tu coche sea atendido en una agencia Toyota</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, quae similique! Laboriosam ipsa voluptas, doloremque numquam eius qui magnam odio consectetur similique ullam minus odit, sapiente quo! Molestiae, similique nobis?</p>
                              </div><!-- end.boxDescSeguros -->
                            </div><!-- end.col6 -->
                            <div class="col-md-6 boxSegLine">
                              <div class="boxDescSeguro">
                                <h3>Aseguramos tu vehículo a valor factura hasta por 2 años <small>(Autos nuevos)</small></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, quae similique! Laboriosam ipsa voluptas, doloremque numquam eius qui magnam odio consectetur similique ullam minus odit, sapiente quo! Molestiae, similique nobis?</p>
                              </div><!-- end.boxDescSeguros -->
                            </div><!-- end.col6 -->
                            <div class="col-12">
                              <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>assets/img/imgPrueba/seguros_banner.jpg" alt="">
                              </figure>
                            </div>
                          </div>
                        </div><!-- end.contentSegruos -->
                      </div><!-- end.col-12 -->
                      <div class="col-12">
                        <div class="contTableSeguros">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">Coberturas</th>
                                <th scope="col">Plan básico</th>
                                <th scope="col">Plan medio</th>
                                <th scope="col">Plan plus</th>
                              </tr>
                            </thead><!-- end.theadCont -->
                            <tbody>
                              <tr>
                                <th scope="row">Daños materiales:<br><small>daños ocurridos a tu vehículo</small></th>
                                <td>Valor factura / 5%*</td>
                                <td>Valor factura / 5%*</td>
                                <td>Valor factura / 3%*</td>
                              </tr>
                              <tr>
                                <th scope="row">Robo total</th>
                                <td>Valor factura / 10%*</td>
                                <td>Valor factura / 5%*</td>
                                <td>Valor factura / 5%*</td>
                              </tr>
                              <tr>
                                <th scope="row">RC por daños a terceros:<br><small>daños ocasionados con tu vehículo a terceros</small></th>
                                <td>&nbsp;</td>
                                <td>$1,000,000 pesos</td>
                                <td>&nbsp;</td>
                              </tr>
                            </tbody><!-- end.tbodycont -->
                          </table><!-- end.tablecont -->
                        </div><!-- end.TableSeguros -->
                        <div class="btnTable">
                          <a class="btnsGenericos ani-btn" href="">Más información</a>
                        </div>
                      </div><!-- end.col-12 -->
                    </div><!-- end.row -->
                  </div><!-- end.container -->
                </section><!-- end.Seguros -->
              </article>