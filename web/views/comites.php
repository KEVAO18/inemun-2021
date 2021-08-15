<?php

function comites($s){
	include_once 'mp/coms.php';

	?>
	<div class="container mb-4 py-1-r">
    	<div class="fs-3 text-center text-uppercase">Comités</div>
		<?=coms($s)?>
	    <div class="">
	      <a href="<?=$s?>/inscrpciones" class="btn btn-block bg-3 color-2">Inscribete</a>
	    </div>
	</div>
	<?php

}

?>