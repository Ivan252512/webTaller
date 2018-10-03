<?php include 'base.php' ?>
<html lang="es">

  <?php startblock('title') ?>
    Educación
  <?php endblock() ?>

  <?php startblock('principal') ?>

    <!-- Cabecera -->
    <header class="masthead" style="background-image: url('img/popo.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h2><big>Universidad Nacional Autónoma de México</big></h2>
              <span class="subheading">Facultad de Ciencias, Ciudad Universitaria</span>
              <span class="subheading">Ciencias de la Tierra</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Contenido Principal -->

    <!-- Contenido Principal -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-18">
          <h1 class="section-heading">¿Qué es el riesgo?</h1>
          <hr>

          <p align = "justify">
          El riesgo se define como la combinación de la probabilidad de que se produzca un evento y sus consecuencias negativas[1].
          Los factores que lo componen son la amenaza y la vulnerabilidad.
          </p>

          <h2>Two Equal Columns</h2>

          <div class="row">
            <div class="column" >
              <h2>Column 1</h2>
              <p>Some text..</p>
            </div>
            <div class="column">
              <h2>Column 2</h2>
              <p>Some text..</p>
            </div>
          </div>
          
      </div>
    </div>

    <div class="container">
      <div class="container">
        <!-- UNAM -->
        <div class="row project">
          <div class="col-lg-3 col-md-4 offset-lg-1">
            <img class="img-fluid" src="img/cu.JPG" alt="">
          </div>
          <div class="col-lg-7 col-md-8">
            <h2 class="section-heading title">Ciudad Universitaria</h2>
            <p>Av Universidad 3000, Cd. Universitaria, Coyoacán, 04510 Ciudad de México, México.</p>
            <p><a href="http://www.comitedeanalisis.unam.mx">Más información</a></p>
          </div>
        </div>
        <!-- Proyecto -->
        <div class="row project">
          <div class="col-lg-3 col-md-4 offset-lg-1">
            <img class="img-fluid" src="img/prome.JPG" alt="">
          </div>
          <div class="col-lg-7 col-md-8">
            <h2 class="section-heading title">Facultad de Ciencias</h2>
            <p>Facultad de Ciencias, UNAM
              Av. Universidad 3000, Circuito Exterior S/N
              Delegación Coyoacán, C.P. 04510
              Ciudad Universitaria, D.F.
              México</p>
            <p><a href="http://www.fciencias.unam.mx/contacto">Más información</a></p>
          </div>
        </div>
      </div>
    </div>

    <hr>

  <?php endblock() ?>

  <footer>
  <p align = "justify">
  [1] UNISDR, Terminología sobre Reducción de Riesgo de Desastres 2009  para los conceptos de Amenaza, vulnerabilidad y riesgo.
  </p>
  </footer>

</html>
