<?php 
  $title = "Contacto";
 ?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <?php include 'template/head.php'; ?>
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Cargando...</div>
      </div>
      <?php include 'template/navbar.php'; ?>
      <div class="main">
        <section class="parallax-bg module new-module bg-dark-60 contact-page-header bg-dark" data-background="assets/images/img_4.jpg">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <h2 class="module-title new-module-title font-alt titulo-modulo">Contactanos</h2>
                <!--<div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>-->
              </div>
            </div>
          </div>
        </section>
        <section class="module new-module">
          <div class="container">
            <div class="row">
              <div class="col-sm-3">
                <div class="alt-features-item">
                  <div class="alt-features-icon"><span class="icon-megaphone"></span></div>
                  <h3 class="alt-features-title font-alt">Donde encontrarnos</h3>J.A. Ingema S.A.C.<br>Jr. Acuarinas N° 253<br> Los Olivos - Lima
                </div>  
                <div class="alt-features-item mt-xs-60">
                  <div class="alt-features-icon"><span class="icon-map"></span></div>
                  <h3 class="alt-features-title font-alt">Ponte en contacto</h3>Email: contacto@ingema.com<br>Tlf: 983427545
                </div>
              </div>
              <div class="col-sm-6 mb-50">
                <h4 class="font-alt">Contacto</h4><br/>
                <form id="contactForm" role="form" method="post" action="php/contact.php">
                  <div class="form-group">
                    <label class="sr-only" for="name">Nombre</label>
                    <input class="form-control" type="text" id="name" name="name" placeholder="Tu nombre*" required="required" data-validation-required-message="Please enter your name."/>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="email">Email</label>
                    <input class="form-control" type="email" id="email" name="email" placeholder="Tu Email*" required="required" data-validation-required-message="Please enter your email address."/>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" rows="7" id="message" name="message" placeholder="Tu mensaje*" required="required" data-validation-required-message="Please enter your message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="text-center">
                    <button class="btn btn-block btn-round btn-d" id="cfsubmit" type="submit">Enviar</button>
                  </div>
                </form>
                <div class="ajax-response font-alt" id="contactFormResponse"></div>
              </div>
              <div class="col-sm-3">
                <div class="alt-features-item">
                  <h4 class="alt-features-title font-alt">Información Adicional</h4>
                  <p>Llene el formulario y nos pondremos en contacto lo antes posible.</p>  
                </div>
                <div class="alt-features-item">
                  <h4 class="alt-features-title font-alt">Horario de ateción</h4>
                  <ul class="list-unstyled">
                    <li>Lunes - Viernes: 8am a 1pm / 2pm a 6pm</li>
                    <li>Sabado: 8am a 1pm</li>
                  </ul>  
                </div>
              </div>
            </div>
          </div>
        </section>
        <section id="map-section">
          <div id="map"></div>
        </section>
        <?php include 'template/footer.php'; ?>
        
      </div>
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
    <!--  
    JavaScripts
    =============================================
    -->
    <script src="assets/lib/jquery/dist/jquery.js"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/lib/wow/dist/wow.js"></script>
    <script src="assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="assets/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="assets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="assets/lib/smoothscroll.js"></script>
    <script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDK2Axt8xiFYMBMDwwG1XzBQvEbYpzCvFU"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>