<?php

	function junta_directiva($s){
		include_once 'mp/personas.php';

		?>

		<div class="container py-4-r">
		    <div class="fs-3 text-uppercase text-center">Junta Directiva</div>
		    <?=personas($s)?>
		</div>

		<?php
	}

?>