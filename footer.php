        
          </div>
        </main><!-- end.Main -->

        <footer class="g-footer">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-12">
                <div class="menuGenFooter">
                  <ul class="socFoo">
                    <li><a href="" target="_blank"><i class="fa fa-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-12">
                <div class="copyFooter">
                  <p>&reg; <?php echo date('Y'); ?> CIE Logistics | Todos los Derechos Reservados.</p>
                </div>
              </div>

            </div>
          </div>
        </footer><!-- end.Footer -->

        <!-- Back to top button -->
        <a id="button"></a>

        <div class="overlayGenerico">
          <div id="modalInfo" class="modalAviso">
            <button id="closeModal" class="btnCloseModal" data-close-modal="#modalInfo"><i class="fa fa-times"></i></button>
            <div class="contentInfo">
              <h2>Simpre listos.</h2>
              <p>Estamos aquí, para ayudar a que tus negocios no tengan contratiempos.</p>
              <ul>
                <li><a href="https://wa.me/5213143580844?text=Hola%2C%20me%20interesa%20m%C3%A1s%20informaci%C3%B3n%20sobre%20los%20servicios%20CIE%20Logistics" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
              </ul>
              <p><small><strong>Teléfonos:</strong> <a href="tel:523143580844" target="_blank">314 358 08 44</a></small></p>
            </div>
          </div>
        </div>
        
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/js/plugins/nprogress.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/vendor/popper.js/dist/umd/popper.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/js/vendor/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/vendor/greensock/dist/TweenMax.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/js/plugins/jquery.validate.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/js/plugins/additional-methods.min.js"></script>
        <!-- <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/js/plugins/jquery.steps.min.js"></script>s -->
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/js/plugins/wow.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/js/plugins/slick.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/js/plugins/paper-full.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/js/scripts/layoutScripts.min.js?ver=<?php echo rand(); ?>"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/js/scripts/formCie.min.js?ver=<?php echo rand(); ?>"></script>

        <script>
          $('body').show();
          $('.version').text(NProgress.version);
          NProgress.start();
          setTimeout(function() {
            NProgress.done(); $('.fadeX').addClass('out');
          }, 1000);

          <?php if($_GET['sec'] == ''): ?>
            // $(document).ready(function(){
            //   $("#videoHome").play();
            // });
          <?php endif; ?>

          // $("#b-0").click(function() { NProgress.start(); });
          // $("#b-40").click(function() { NProgress.set(0.4); });
          // $("#b-inc").click(function() { NProgress.inc(); });
          // $("#b-100").click(function() { NProgress.done(); });
        </script>
    </body>
</html>