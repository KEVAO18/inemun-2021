<?php

function inicio($appName, $serve){
	include_once 'mp/fechas.php';

	?>
	<div class="container mb-4 py-1-r">
    <div class="fs-3 text-capitalize text-center">fechas para tener en cuenta</div>
		<?=fechas($serve)?>
    <div class="">
      <a href="<?=$serve?>/inscrpciones" class="btn btn-block bg-main">Inscribete</a>
    </div>
	</div>
	<?php

}

?>