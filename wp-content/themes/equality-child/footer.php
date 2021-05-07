
          </div>
        </main><!-- end.Main -->

        <!-- footer -->
        <footer class="g-footer" data-blur-content>
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="g-footer__desc g-footer__desc--up text-center">
                  <!-- Back to top button -->
                  <a id="button" class="btnFx btnFx__generic btnFx__generic--orange"><span><?php _e('Regresar', 'equality-child'); ?></span></a>
                <?php
                  wp_nav_menu( array(
                    'items_wrap'     => '<ul class="menu_footer">%3$s</ul>',
                    'theme_location' => 'menu-footer',
                    'container'       => 'div',
                    'container_class' => 'menuGenFooter',
                    'container_id'    => '',
                    'before'          => '',
                    'after'           => '',
                  ) );
                ?><!-- end.menuGenFooter -->
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
                    <p><?php _e('Todos los Derechos Reservados', 'equality-child'); ?> | &copy; Equality <?php echo wp_date('Y') ?> | <a href="<?php echo esc_url(site_url('')); ?>/<?php $currentLanguage  = get_bloginfo('language'); if($currentLanguage == "en-US") : ?>en/privacy-policy<?php elseif($currentLanguage == "pt-PT") : ?>pt/aviso-de-privacidade<?php else: ?>aviso-de-privacidad<?php endif; ?>"><?php _e('Aviso de Privacidad', 'equality-child'); ?></a>
                    </p>
                  </div>
              <?php if( have_rows('footer', 'option') ): ?>
                  <div class="menuGenFooter">
                    <ul class="socFoo">
              <?php while( have_rows('footer', 'option') ): the_row(); ?>
              <?php if( get_row_layout() == 'sociales_footer' ): ?>
                      <li><a class="tyi-<?php the_sub_field('selecciona_social'); ?>" href="<?php the_sub_field('url_social'); ?>" target="_blank"></a></li>
              <?php endif; ?>
              <?php endwhile; ?>
                    </ul>
                  </div><!-- end.menuGenFooter -->
              <?php endif; ?>
                </div><!-- end.footer__desc--up -->
              </div><!-- end.col-* -->
            </div><!-- end.row -->
          </div><!-- end.container -->
        </footer><!-- end.Footer -->
        
        <?php wp_footer(); ?>

        <script>
          $('body').show();
          // $('.version').text(NProgress.version);
          NProgress.start();
          setTimeout(function () {
            NProgress.done();
            $('.fadeX').addClass('out');
            $('body').removeClass('is-preload');
          }, 1000);

          // $("#b-0").click(function() { NProgress.start(); });
          // $("#b-40").click(function() { NProgress.set(0.4); });
          // $("#b-inc").click(function() { NProgress.inc(); });
          // $("#b-100").click(function() { NProgress.done(); });
        </script>
    </body>
</html>
