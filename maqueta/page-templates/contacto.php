              <article class="bg-gen">
                <section class="bannerInt">
                  <div class="titleInt">
                    <div class="container">
                      <div class="row">
                        <div class="col-12">
                          <h2>Contacto</h2>
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

                <section class="contacto-cont">

                  <div class="container">
                    <div class="row justify-content-md-center">
                      <div class="col-12">
                        <div class="contentFormOpContact">
                          <div class="selectFormContact">
                            <a href="#" class="collOpenForm" id="openOpsForms"><span id="textChange">Tema de Contacto</span></a>
                            <nav id="navOpcionform">
                              <ul>
                                <li><a class="btnFormContact" href="#formulario-contacto">Formulario de contacto</a></li>
                                <li><a class="btnFormContact" href="https://www.google.com/">Otras opciones</a></li>
                                <!-- <li><a class="btnFormContact" href="#contBox-autos-3">Línea de trabajo</a></li>
                                <li><a class="btnFormContact" href="#contBox-autos-4">Híbridos</a></li> -->
                              </ul><!-- end.lsitTipoCarro -->
                            </nav>
                          </div><!-- end.SeleccionaOpción -->
                          <div id="formulario-contacto" class="opcionFormulario">
                            <form action="" id="frmContacto" name="frmContacto" method="POST">
                              <div class="form-row justify-content-md-center">
                                <div class="form-group col-12 col-md-5">
                                  <label for="nombre">Nombre*</label>
                                  <div class="inpLay">
                                    <input class="form-control" type="text" name="nombre" id="nombre">
                                  </div>
                                </div><!-- end.inputNombre -->
                                <div class="form-group col-12 col-md-5">
                                  <label for="nombre">Apellidos*</label>
                                  <div class="inpLay">
                                    <input class="form-control" type="text" name="apellido" id="apellido">
                                  </div>
                                </div><!-- end.inputApellido -->
                                <div class="form-group col-12 col-md-5">
                                  <label for="telefono">Teléfono*</label>
                                  <div class="inpLay">
                                    <input class="form-control" type="text" name="telefono" id="telefono">
                                  </div>
                                </div><!-- end.inputTeléfono -->
                                <div class="form-group col-12 col-md-5">
                                  <label for="email">Correco Electrónico*</label>
                                  <div class="inpLay">
                                    <input class="form-control" type="email" name="email" id="email">
                                  </div>
                                </div><!-- end.inputEmail -->
                                <div class="form-group col-12 col-md-10">
                                  <label for="mensaje">Mensaje</label>
                                  <div class="inpLay">
                                    <textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
                                  </div>
                                </div><!-- end.inputMensaje-->
                                <div class="form-group col-12 col-md-10">
                                  <div class="descForm">
                                    <p><small><span>*</span> Campos requeridos</small></p>
                                  </div>
                                </div><!-- end.inputDescripción-->
                                <div class="form-group col-12 col-md-10">
                                  <div class="inpLay">
                                    <input type="checkbox" class="CheckStyle" name="acepto" id="acepto" value="Acepto">
                                    <label for="acepto">He leído y acepto los <a href="<?php echo site_url(); ?>/terminos-y-condiciones">Términos y condiciones</a></label>
                                  </div>
                                </div><!-- end.inputAcpeto-->
                                <div class="form-group col-12 col-md-10 text-right">
                                  <button class="btnsGenericos ani-btn" type="submit" id="submit" name="submit">Enviar</button>
                                </div><!-- end.inputAcpeto-->
                              </div><!-- end.formRow -->
                            </form><!-- end.formContacto-->
                          </div><!-- end.formHidden -->
                        </div><!-- end.contenidoFormulario&Opciones -->
                      </div><!-- end.col-12 -->
                    </div>
                  </div>

                </section>
              </article>