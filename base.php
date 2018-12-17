<?php require_once 'ti.php' ?>
<link href="css/clean-blog.css" rel="stylesheet">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>
       <?php startblock('title') ?>
       <?php endblock() ?>
    </title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/clean-blog.css" rel="stylesheet">
</head>

<body>
    <!-- Navegación -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.php">Riesgo en CDMX</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menú
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <!-- Descripción del proyecto-->
              <a class="nav-link" href="proyecto.php">Nuestro proyecto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="nosotros.php">¿Quiénes somos?</a>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="Inicio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Proyectos
               </a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Página">
                 <a href="tendedero.php" class="dropdown-item" >Tendedero</a>
                 <a href="compromisos.php" class="dropdown-item" >Compromisos</a>
                 <a href="eventos.php" class="dropdown-item" >Eventos</a>
               </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="educacion.php">Educación</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="reflexion.php">Reflexión</a>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="Inicio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Acciones
               </a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Página">
                 <a href="sismos.php" class="dropdown-item" >Sismos</a>
                 <a href="erupcion.php" class="dropdown-item" >Erupción volcánica</a>
                 <a href="inestabilidad.php" class="dropdown-item" >Inestabilidad de laderas</a>
                 <a href="asteroides.php" class="dropdown-item" >Asteroides y cometas</a>
                 <a href="inundaciones.php" class="dropdown-item" >Inundaciones</a>
               </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contacto.php">Contacto</a>
            </li>
          </ul>
        </div>
      </div>
      <li>
        <a class="fa fa-instagram " href="https://www.instagram.com"></a>
        <a class="fa fa-facebook " href="https://www.facebook.com"></a>
        <a class="fa fa-twitter " href="https://www.twitter.com"></a>
      </li>
      </nav>
    
    <!-- Contenido principal -->
    <?php startblock('principal') ?>
    <?php endblock() ?>

    <!-- Bootstrap y Javascripts -->
    <script src="vendor/jquery/jquery.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="js/clean-blog.js"></script>

</body>