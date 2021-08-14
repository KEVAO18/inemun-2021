<?php

function inscrpciones($s){
	include_once 'mp/inscripciones_form.php';
	?>

	<div class="h-100-v">
		<?=inscrpciones_form($s);?>
	</div>

	<?php
}

?>