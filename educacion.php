<?php include 'base.php' ?>
<html lang="es">

  <?php startblock('title') ?>
    Educación
  <?php endblock() ?>

  <?php startblock('principal') ?>


    <!-- Contenido Principal -->

    <hr>

    <!-- Contenido Principal -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-18">
          <h1 class="section-heading">¿Qué es el riesgo?</h1>
          <p align = "justify">

Es la probabilidad latente de que ocurra un hecho que produzca ciertos efectos, la combinación de la 
probabilidad de la ocurrencia de un evento y la magnitud del impacto que puede causar.

<hr>
         </p>

          <hr>

          <h2 align="center">¿Para qué eventos existe algún riesgo en la CDMX?</h2>
          
          <hr>
          </div>

          <div id="caja_izq">
          <div id="caja_der">
          <div class="columna_izquierda">
            <h4> Sismos</h4>
            <p align="justify">
            <img class="img-fluid" src="img/sismo.png" alt="">


            <a class="nav-link" href="proyecto.php">Ver más</a>
            </p>

            <hr>

            <h4> Inestabilidad de ladera</h4>
            <p align="justify">
            <img class="img-fluid" src="img/ladera.jpg" alt="">

            <a class="nav-link" href="proyecto.php">Ver más</a>
            </p>

            <hr>

            <h4> Inundacciones</h4>
            <p align="justify">
            <img class="img-fluid" src="img/inundaciones.jpg" alt="">

            <a class="nav-link" href="proyecto.php">Ver más</a>
            </p>
          </div>

          <div class="columna_derecha">
            <h4> Erupción volcánica</h4>
            <p align="justify">
            <img class="img-fluid" src="img/erupcion.jpg" alt="">

            <a class="nav-link" href="volc.php">Ver más</a>
            </p>

            <hr>

            <h4> Asteroides y cometas</h4>
            <p align="justify">
            <img class="img-fluid" src="img/cometa.jpg" alt="">

            <a class="nav-link" href="proyecto.php">Ver más</a>
            </p>
          </div>
      </div>
    </div>

    <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-18">
        <hr>
        <h1 class="section-heading">Glosario</h1>
        <p align = "justify" id = "corriente_piroclastica">
        <b>Piroclastos:</b> 
        <br>
        <b>Corriente piroclástica:</b> Mezcla compuesta por rocas y gases muy calientes (???)
        que descienden por las laderas de un volcán a gran velocidad.
        <br>
        <b>Caida piroclástica:</b> Mezcla compuesta por rocas y gases muy calientes (???)
        que descienden por las laderas de un volcán a gran velocidad.
        <br>
        <b id ="gases">Gases: </b> Agua, dióxido de carbono y azufre.
        <br>
        <b>Amenaza:</b> Potencial ocurrencia de un hecho que pueda manifestarse en un lugar específico.
        <br>
        <b>Vulnerabilidad:</b> Debilidad o grado de exposición de un sujeto, objeto o sistema. 
        <br>
        </p>


    <hr>

  <?php endblock() ?>

  <footer>
  <p align = "justify">
  [1] UNISDR, Terminología sobre Reducción de Riesgo de Desastres 2009  para los conceptos de Amenaza, vulnerabilidad y riesgo.
  </p>
  </footer>

</html>
