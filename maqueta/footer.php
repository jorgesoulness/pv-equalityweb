        
          </div>
        </main><!-- end.Main -->

      <!-- footer --> 
        <footer class="g-footer" data-blur-content>
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="g-footer__desc g-footer__desc--up text-center">
                  <!-- Back to top button -->
                  <a id="button" class="btnFx btnFx__generic btnFx__generic--orange"><span>Regresar</span></a>
                  <div class="menuGenFooter">
                    <ul class="menu_footer">
                      <li><a href="">Inicio</a></li>
                      <li><a href="">Equality</a></li>
                      <li><a href="">Soluciones</a></li>
                      <li><a href="">Contacto</a></li>
                    </ul>
                  </div><!-- end.menuGenFooter --> 
                </div><!-- end.footer__desc--up -->
              </div><!-- end.col-* -->
            </div><!-- end.row -->
          </div><!-- end.container -->
          <hr>
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="g-footer__desc g-footer__desc--down">
                  <div class="copyFooter">
                    <p>Todos los Derechos Reservados | &copy; Equality <?php echo date('Y'); ?> | <a href="#">Aviso de Privacidad</a></p>
                  </div>
                  <div class="menuGenFooter">
                    <ul class="socFoo">
                      <li><a class="tyi-facebook" href="#" target="_blank"></a></li>
                      <li><a class="tyi-linkedin" href="#" target="_blank"></a></li>
                    </ul>
                  </div><!-- end.menuGenFooter --> 
                </div><!-- end.footer__desc--up -->
              </div><!-- end.col-* --> 
            </div><!-- end.row -->
          </div><!-- end.container -->
        </footer><!-- end.Footer -->
        
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/js/plugins/nprogress.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/vendor/popper.js/dist/umd/popper.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/js/vendor/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/vendor/greensock/dist/TweenMax.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/js/plugins/jquery.validate.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/js/plugins/additional-methods.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/js/plugins/wow.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/js/plugins/slick.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/js/plugins/jquery.scrolly.min.js"></script>
			  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/js/plugins/jquery.scrollex.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/js/plugins/browser.min.js"></script>
			  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/js/plugins/breakpoints.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/js/scripts/parallaxscript.min.js?ver=<?php echo rand(); ?>"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/js/scripts/layoutScripts.js?ver=<?php echo rand(); ?>"></script>

        <script>
          $('body').show();
          // $('.version').text(NProgress.version);
          NProgress.start();
          setTimeout(function() {
            NProgress.done();
            $('.fadeX').addClass('out');
            $('body').removeClass('is-preload');
          }, 1000);

          <?php if($_GET['sec'] == ''): ?>
            // $(document).ready(function(){
            //   $("#videoHome").get(0).play();
            // });
          <?php endif; ?>

          // $("#b-0").click(function() { NProgress.start(); });
          // $("#b-40").click(function() { NProgress.set(0.4); });
          // $("#b-inc").click(function() { NProgress.inc(); });
          // $("#b-100").click(function() { NProgress.done(); });
        </script>
    </body>
</html>