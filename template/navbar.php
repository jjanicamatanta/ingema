<?php
if ($title == "Ingema - Ingenieria y Medio Ambiente") {
    $nb_transparent = "navbar-transparent";
} else {
    $nb_transparent = "";
}
?>
<nav class="navbar navbar-custom navbar-fixed-top <?php echo ($nb_transparent) ?>" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand p-0" href="index.html">
        <img src="assets/images/logo-ingema-small.png" style="width: 130px;padding:5px">
      </a>
    </div>
    <div class="collapse navbar-collapse" id="custom-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/">Ingema</a></li>
        <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Nosotros</a>
          <ul class="dropdown-menu">
            <li><a href="/">Ingema</a></li>
            <li><a href="/#about">Acerca de nosotros</a></li>
            <li><a href="/#mejor_opcion">La mejor opción</a></li>
            <li><a href="/#team">Nuestro Equipo</a></li>
            <li><a href="/#clients">Nuestros Clientes</a></li>
          </ul>
        </li>
        <li  class="dropdown"><a class="dropdown-toggle" href="../../Ingema/services.php"  data-toggle="dropdown">Nuestros Servicios</a>
          <ul class="dropdown-menu">
            <li><a href="../../Ingema/services.php#demo-card--step1">Estudios Ambientales</a></li>
            <li><a href="../../Ingema/services.php#demo-card--step2">Asesoramiento en Materia Jurídica</a></li>
            <li><a href="../../Ingema/services.php#demo-card--step3">Asesoramiento en Materia de emisiones a la atmosfera</a></li>
            <li><a href="../../Ingema/services.php#demo-card--step4">Asesoramiento en Materia de Vertidos</a></li>
            <li><a href="../../Ingema/services.php#demo-card--step5">Asesoramiento Ambiental en RR.SS.</a></li>
            <li><a href="../../Ingema/services.php#demo-card--step6">Asesoramiento Ambiental en Materia de Envases</a></li>
            <li><a href="../../Ingema/services.php#demo-card--step7">Asesoramiento sobre Manejro de RR.SS</a></li>
          </ul>
        </li>
        <li><a href="contact.php">Contacto</a></li>
      </ul>
    </div>
  </div>
</nav>