<?php 
$title = "Ingema - Ingenieria y Medio Ambiente";

 ?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <?php include_once 'template/head.php'; ?>
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Cargando...</div>
      </div>
      <?php include 'template/navbar.php'; ?>
      <section class="home-section home-full-height bg-dark-30 parallax-bg" id="home" data-background="assets/images/img_3.jpg">
        <div class="video-player" data-property="{videoURL:'https://www.youtube.com/watch?v=MB80ZuIJATI', containment:'.home-section', startAt:8, mute:false, autoPlay:true, loop:true, opacity:1, showControls:false, showYTLogo:false, vol:100}"></div>
        <div class="video-controls-box ">
          <div class="container ">
            <div class="video-controls"><a class="fa fa-volume-up" id="video-volume" href="#">&nbsp;</a><a class="fa fa-pause" id="video-play" href="#">&nbsp;</a></div>
          </div>
        </div>
        <div class="titan-caption">
          <div class="caption-content">
            <!--<div class="font-alt mb-30 titan-title-size-1">Ingenieria y Medio Ambiente</div>-->
             <!-- <div style="width: 100%;background: linear-gradient(to right,transparent, rgba(255,255,255,0.4) ,transparent);padding: 10px;margin-bottom:10px"> -->
            <div>
               <img src="assets/images/logo-ingema-small.png" width="500" style="opacity: 0.2;" /> 
            </div>
           <!--  <a class="section-scroll btn btn-border-w btn-round" href="#about">Leer más</a> -->
          </div>
        </div>
      </section>
      <div class="main">
        <section class="module pt-0 pb-60 " id="about">
          <div class="row position-relative m-0">
            <div class="col-xs-12 col-md-6 side-image " data-background="assets/images/equipo.png" style="background-image: url(&quot;assets/images/img_1.jpg&quot;);"></div>
            <div class="col-xs-12 col-md-6 col-md-offset-6 side-image-text">
              <div class="row">
                <div class="col-sm-12">
                  <h2 class="module-title font-alt align-left">Acerca de nosotros</h2>
                  <div class="module-subtitle font-serif align-left mb-10">Desde 2001, ofrecemos un asesoramiento integral en el manejo y gestión de Residuos con el fin de ayudar a que la imagen de nuestros clientes y de sus productos obtenga mayor visibilidad y se consolide con más solidez ante sus diferentes públicos y sus mercados</div>
                  
                  <p>Nuestras acciones de comunicación están destinadas a satisfacer dos demandas: la del cliente, que desea dar a conocer su producto o servicio para, con ello, mejorar su reputación o la de su producto; y la de los medios, que ven cubiertas sus necesidades e inquietudes informativas, con documentación de calidad, enfoques originales y portavoces de primera línea.</p>
                  <div class="titan-caption">
                    <div class="caption-content">
                      <a class="section-scroll btn btn-round" style="background:transparent;border: 1px solid #1F3864;" href="#mejor_opcion">
                        <i class="fa fa-fw">&#xF067;</i>
                        Leer más</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section  class="module bg-dark parallax-bg" id="mejor_opcion"  data-background="assets/images/img-6.png">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <h2 class="module-title font-alt align-left">¿Por qué somo la mejor opción?</h2>
                <p class="module-subtitle font-serif align-left">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                <ul class="new-lista-all">
                  <li>Porque prestamos un servicio integral, para que el cliente no tenga que preocuparse.</li>
                  <li>Por nuestra efectividad, aseguramos resultados.</li>
                  <li>Porque somos profesionales y trabajamos para asegurar el éxito de nuestros clientes.</li>
                  <li>Porque realizamos proyectos personalizados a cada cliente.</li>
                  <li>Porque aseguramos el cumplimiento de los plazos establecidos.</li>
                  <li>Porque trabajamos con transparencia, confianza y empatía.</li>
                  <li>Porque tratamos a cada cliente como si fuera el único.</li>
                  <li>Porque su empresa y su proyecto son importantes para nosotros.</li>
                  <li>Porque nos implicamos al cien por cien en cada proyecto.</li>
                  <li>Porque somos flexibles, nos adaptamos a las necesidades de su empresa.</li>
                  <li>Porque nos sentimos parte de su empresa!</li>
                </ul>
                <div class="titan-caption">
                  <div class="caption-content">
                    <a class="btn btn-border-w btn-round video-pop-up" href="https://www.youtube.com/watch?v=TTxZj3DZiIM"><i class="icon-video"></i> Mira nuestro video</a>
                    <a class="section-scroll btn btn-round" style="background:transparent;border: 1px solid white;" href="#team">
                      <i class="fa fa-fw">&#xF067;</i>
                      Leer más</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6"><!--<img src="assets/images/img_2.jpg" alt="">-->
              <div class="row multi-columns-row">                
              <div class="col-md-6 col-sm-6 col-xs-12" style="color: #2558B0;font-weight: bold;text-shadow: 0.5px 0.5px 0.5px black">
                <div class="features-item m-0">
                  <div class="features-icon" style="color: #2558B0"><span class="icon-lightbulb"></span></div>
                  <h3 style="color: #2558B0" class="features-title font-alt">Resultados a través del trabajo en equipo</h3>
                  <p>Colaboramos con eficacia, siempre en busca de formas más eficientes de servir a nuestros clientes.</p>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12" style="color: #C03232;font-weight: bold;text-shadow: 0.5px 0.5px 0.5px black">
                <div class="features-item m-0">
                  <div class="features-icon" style="color: #C03232"><span class="icon-bike"></span></div>
                  <h3 class="features-title font-alt" style="color: #C03232">Integridad absoluta</h3>
                  <p>Somos transparentes, honestos y directos en nuestros tratos. Trabajamos bajo una cultura de inclusión basada en la confianza, el respeto y la dignidad para todos.</p>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12" style="color: #759720;font-weight: bold;text-shadow: 0.5px 0.5px 0.5px black">
                <div class="features-item m-0">
                  <div class="features-icon" style="color: #759720"><span class="icon-tools"></span></div>
                  <h3 class="features-title font-alt" style="color: #759720">Rapidez y agilidad</h3>
                  <p>Somos ingeniosos y flexibles, y obtenemos resultados con mayor rapidez que nuestros competidores.</p>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12" style="color: #B07E13;font-weight: bold;text-shadow: 0.5px 0.5px 0.5px black">
                <div class="features-item m-0">
                  <div class="features-icon" style="color: #B07E13"><span class="icon-gears"></span></div>
                  <h3 class="features-title font-alt" style="color: #B07E13">Logros y contribución</h3>
                  <p>Nos esforzamos por alcanzar la excelencia en todo lo que hacemos. La contribución de cada persona es fundamental para nuestro éxito.</p>
                </div>
              </div>
              
            </div>
              </div>
              
            </div>
          </div>
        </section>
        <section class="module pt-50" id="team">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Nuestro Equipo</h2>
                <div class="module-subtitle font-serif">Conoce a nuestro equipo.</div>
              </div>
            </div>
            <div class="row">
              <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wow fadeInUp">
                <div class="team-item">
                  <div class="team-image"><img src="assets/images/team-1.jpg" alt="Member Photo"/>
                    <div class="team-detail">
                      <h5 class="font-alt">Hi all</h5>
                      <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                      <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a></div>
                    </div>
                  </div>
                  <div class="team-descr font-alt">
                    <div class="team-name">José R. Anicama B.</div>
                    <div class="team-role">Director</div>
                  </div>
                </div>
              </div>
              <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wow fadeInUp">
                <div class="team-item">
                  <div class="team-image"><img src="assets/images/team-2.jpg" alt="Member Photo"/>
                    <div class="team-detail">
                      <h5 class="font-alt">Good day</h5>
                      <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                      <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a></div>
                    </div>
                  </div>
                  <div class="team-descr font-alt">
                    <div class="team-name">J. Carlos Anicama T.</div>
                    <div class="team-role">Gerente General</div>
                  </div>
                </div>
              </div>
              <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wow fadeInUp">
                <div class="team-item">
                  <div class="team-image"><img src="assets/images/team-3.jpg" alt="Member Photo"/>
                    <div class="team-detail">
                      <h5 class="font-alt">Hello</h5>
                      <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                      <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a></div>
                    </div>
                  </div>
                  <div class="team-descr font-alt">
                    <div class="team-name">J. Amparo Tanta T.</div>
                    <div class="team-role">Jefe de operaciones</div>
                  </div>
                </div>
              </div>
              <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wow fadeInUp">
                <div class="team-item">
                  <div class="team-image"><img src="assets/images/team-4.jpg" alt="Member Photo"/>
                    <div class="team-detail">
                      <h5 class="font-alt">Yes, it's me</h5>
                      <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                      <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a></div>
                    </div>
                  </div>
                  <div class="team-descr font-alt">
                    <div class="team-name">J. ALberto Anicama T.</div>
                    <div class="team-role">Auxiliar de servicios</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="titan-caption pt-50">
            <div class="caption-content">
              <a class="section-scroll btn btn-round" style="background:transparent;border: 1px solid #1F3864;" href="#clients">
                <i class="fa fa-fw">&#xF067;</i>
                Leer más</a>
            </div>
          </div>
        </section>
        
        <section class="module bg-light pt-50" id="clients">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Nuestros Clientes</h2>
                <div class="module-subtitle font-serif">Estamos orgullosos de colaborar con:</div>
              </div>
            </div>
            <div class="row client">
              <div class="owl-carousel text-center" data-items="5" data-pagination="true" data-navigation="false">
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/logo-ferreyros.png" alt="Client Logo"/></div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/logo-europlast.png" alt="Client Logo"/></div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/logo-badinotti.png" alt="Client Logo"/></div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/logo-interpaint.png" alt="Client Logo"/></div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/logo-sapolio.png" alt="Client Logo"/></div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/logo-sanjorge.png" alt="Client Logo"/></div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/logo-dina.png" alt="Client Logo"/></div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/logo-inquilima.png" alt="Client Logo"/></div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/logo-reciplast.png" alt="Client Logo"/></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="titan-caption pt-50">
            <div class="caption-content">
              <a class="section-scroll btn btn-round" style="background:transparent;border: 1px solid #1F3864;" href="#experience">
                <i class="fa fa-fw">&#xF067;</i>
                Leer más</a>
            </div>
          </div>
        </section>
        <!--
        <section class="module bg-dark-60 pt-0 pb-0 parallax-bg testimonial" data-background="assets/images/img_5.jpg" id="experience">
          <div class="testimonials-slider pt-140 pb-140">
            <ul class="slides">
              <li>
                <div class="container">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="module-icon"><span class="icon-quote"></span></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                      <blockquote class="testimonial-text font-alt">I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.</blockquote>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4 col-sm-offset-4">
                      <div class="testimonial-author">
                        <div class="testimonial-caption font-alt">
                          <div class="testimonial-title">Jack Woods</div>
                          <div class="testimonial-descr">SomeCompany INC, CEO</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="container">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="module-icon"><span class="icon-quote"></span></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                      <blockquote class="testimonial-text font-alt">I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</blockquote>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4 col-sm-offset-4">
                      <div class="testimonial-author">
                        <div class="testimonial-caption font-alt">
                          <div class="testimonial-title">Jim Stone</div>
                          <div class="testimonial-descr">SomeCompany INC, CEO</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="container">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="module-icon"><span class="icon-quote"></span></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                      <blockquote class="testimonial-text font-alt">I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</blockquote>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4 col-sm-offset-4">
                      <div class="testimonial-author">
                        <div class="testimonial-caption font-alt">
                          <div class="testimonial-title">Adele Snow</div>
                          <div class="testimonial-descr">SomeCompany INC, CEO</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </section>
      -->
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
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>