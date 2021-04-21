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

                <section class="faQs-cont">

                  <div class="bgBlueInt"></div>

                  <div class="container">
                    <div class="row">
                      <div class="col-md-12">
                        <h2 class="title-beneficios">Planes de Financiamiento</h2>
                      </div>
                      <div class="col-md-12">

                      <div class="accordion" id="faqsList">
                      <?php for($i = 0; $i < 9; $i ++) { ?>  
                        <div class="card">
                          <div class="card-header" id="faH-<?php echo $i; ?>">
                            <h2 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq-<?php echo $i; ?>" aria-expanded="false" aria-controls="faq-<?php echo $i; ?>">
                                Collapsible Group Item #<?php echo $i; ?>
                                <img src="<?php echo get_template_directory_uri(); ?>assets/img/imgPrueba/mm_flecha.svg" alt="">
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

                      </div>
                    </div>
                  </div>

                </section>
              </article>