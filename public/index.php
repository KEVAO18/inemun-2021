<?php

include_once '../config/controllers/pageController.php';
include_once '../config/controllers/routes.php';

session_start();

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  <title><?=$appName?></title>

	  <link rel="icon" href="<?=$serve?>/assets/media/<?=$icoName?>.png">

    <!-- Font Awesome -->
  	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.8.2/css/all.css'>
  	<!--Import Google Icon Font-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- css styles import -->
    <link rel="stylesheet" href="<?=$serve?>/assets/css/colores.css">
    <link rel="stylesheet" href="<?=$serve?>/assets/css/padding.css">
    <link rel="stylesheet" href="<?=$serve?>/assets/css/margin.css">
    <link rel="stylesheet" href="<?=$serve?>/assets/css/st1.css">
    <link rel="stylesheet" href="<?=$serve?>/assets/css/hw.css">
    <style>*{margin:0;padding:0;} html,body,#wrapper{width:100%;height:100%;} iframe{border-radius:0 !important;}</style>
		<!-- Bootstrap core CSS -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
		<!-- Material Design Bootstrap -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <!-- swal -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
		<!-- JQuery -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <!-- aos -->
	  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>
  <body>
  	<!--Navbar -->
  	<nav class="mb-1 navbar navbar-expand-lg navbar-dark bg-main fixed-top scrolling-navbar">
  	  <a class="navbar-brand" href="<?=$serve?>/inicio"><?=$appName?></a>
  	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
  	    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
  	    <span class="navbar-toggler-icon"></span>
  	  </button>
  	  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
  	    <ul class="navbar-nav mr-auto">
  	      <li class="nav-item">
  	        <a class="nav-link" href="<?=$serve?>/inscrpciones">Inscrpciones</a>
	          <span class="sr-only">(current)</span>
  	      </li>
  	      <li class="nav-item">
  	        <a class="nav-link" href="<?=$serve?>/comites">Comites</a>
  	      </li>
  	      <li class="nav-item">
  	        <a class="nav-link" href="<?=$serve?>/junta_directiva">Junta directiva</a>
  	      </li>
  	      <li class="nav-item">
  	        <a class="nav-link" href="<?=$serve?>/apoyo">Documentos de apoyo</a>
  	      </li>
  	    </ul>
  	  </div>
  	</nav>
  	<!--/.Navbar -->
    <header>
      <div class="view">
        <div class="full-bg-img">
          <div class="mask rgba-black-strong flex-center">
            <div class="container">
              <div class="white-text text-center mx-auto">
                <center>
                  <img src="<?=$serve?>/assets/media/favicon.png" class="w-30-v py-3-r">
                </center>
                <h1><?=$appName?></h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <?=routes($serve, $appName);?>
  	<!-- Footer -->
  	<footer class="page-footer font-small bg-3 pt-4">
  	  <div class="container text-center text-md-left">
  	    <div class="row">
  	      <div class="col-md-6 mt-md-0 mt-3">
  	        <h5 class="text-uppercase color-2">INEMUN</h5>
  	        <p class="color-2">Somos del porvenir La esperanza, y como tal hay que
                           <br>cumplir. Con fe y con amor vamos a estudiar Y un
                           <br>mejor mañana a construir.</p>
  	      </div>
  	      <hr class="clearfix w-100 d-md-none pb-3">
  	      <div class="col-md-3 mb-md-0 mb-3">
  	        <h5 class="text-uppercase color-2">Utiles</h5>
  	        <ul class="list-unstyled list1">
  	          <li>
  	            <a href="<?=$serve?>/comites" class="color-2">Comites</a>
  	          </li>
  	          <li>
  	            <a href="<?=$serve?>/inscrpciones" class="color-2">Inscrpciones</a>
  	          </li>
              <li>
                <a href="<?=$serve?>/apoyo" class="color-2">Documentos de apoyo</a>
              </li>
              <li>
                <a href="<?=$serve?>/junta_directiva" class="color-2">Junta directiva</a>
              </li>
  	        </ul>
  	      </div>
  	      <hr class="clearfix w-100 d-md-none pb-3">
  	      <div class="col-md-3 mb-md-0 mb-3">
  	        <h5 class="text-uppercase color-2">Nosotros</h5>
  	        <ul class="list-unstyled list1 color-2">
              <li>
                Cra. 48 #1-125, Medellín, Antioquia
              </li>
              <li>
                <i class="fas fa-phone fs-1"></i> (4) 2664600
              </li>
              <li>
                inemun@inemjose.edu.co
              </li>
  	        </ul>
  	      </div>
  	    </div>
  	  </div>
  	  <div class="footer-copyright text-center py-3">© 2021 Copyright:
  	    <a href="http://www.kevao.tech" target="_blank"> kevao.tech</a>
  	  </div>
  	</footer>
  	<!-- Footer -->

  	<!-- aos -->
  	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  	<script>
  		AOS.init();
  	</script>
  	<!-- Bootstrap tooltips -->
  	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  	<!-- Bootstrap core JavaScript -->
  	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
  	<!-- MDB core JavaScript -->
  	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
  </body>
</html>