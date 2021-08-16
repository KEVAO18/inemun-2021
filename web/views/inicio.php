<?php

function inicio($appName, $serve){
	include_once 'mp/fechas.php';
	include_once 'mp/docs.php';

	?>
	<div class="container mb-4 py-1-r">
    <div class="fs-3 text-uppercase text-center">fechas para tener en cuenta</div>
		<?=fechas($serve)?>
    <div class="">
      <a href="<?=$serve?>/inscrpciones" class="btn btn-block bg-3 text-light" style="font-size: 1.5rem;">Inscribete</a>
    </div>
    <div class="container mt-5-r b-round">
      <div class="fs-3 text-uppercase text-center">Nuestros principios</div>
      <div class="row">
      	<div class="col-sm-12 col-md-4 py-3-r text-center">
      		<div class="card bg-dark text-light py-2 px-4" data-aos="fade-up" data-aos-duration="1000">
      			<span><i class="fas fa-user-tie fs-4 my-2-r"></i></span>
      			<h3>Creando líderes</h3>
      			<p class="my-2-r">El pilar fundamental de INEMUN es educar hacia el liderazgo. En nuestras sesiones de simulación hacemos énfasis en el empoderamiento de la palabra, la construcción de ideas propositivas, el respeto y la seguridad en la toma de decisiones.</p>
      		</div>
      	</div>
      	<div class="col-sm-12 col-md-4 py-3-r text-center">
      		<div class="card bg-dark text-light py-2 px-4" data-aos="fade-up" data-aos-duration="1000">
						<span><i class="fas fa-book fs-4 my-2-r"></i></span>
			  		<h3>Aprendizaje integral</h3>
			  		<p class="my-2-r">Desde nuestros semilleros buscamos que los delegados comprendan su realidad político social, y mediante un análisis crítico, aprendar a actuar en consecuencia. No sólo incluímos simulaciones de MUN, sino también actividades como cine-foros, charlas y conversatorios.</p>
      		</div>
      	</div>
      	<div class="col-sm-12 col-md-4 py-3-r text-center">
      		<div class="card bg-dark text-light py-2 px-4" data-aos="fade-up" data-aos-duration="1000">
      			<span><i class="fas fa-globe fs-4 my-2-r"></i></span>
      			<h3>Abiertos al mundo</h3>
      			<p class="my-2-r">Nuestro proyecto pretende darle a sus participantes una enseñanza de mente abierta, donde todas las opiniones son válidas. Enfatizamos en el respeto por las ideologías y una capacidad analítica de las problemáticas mundiales</p>
      		</div>
      	</div>
      </div>
    </div>
    <div class="container" id="documentos">
    	<?=docs($serve)?>
    </div>
	</div>
	<?php

}

?>