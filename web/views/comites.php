<?php

function comites($s){
	include_once 'mp/coms.php';

	?>
	<div class="container mb-4 py-1-r">
    	<div class="fs-3 text-capitalize text-center">Comites</div>
		<?=coms($s)?>
	    <div class="">
	      <a href="<?=$s?>/inscrpciones" class="btn btn-block bg-main">Inscribete</a>
	    </div>
	</div>
	<?php

}

?>