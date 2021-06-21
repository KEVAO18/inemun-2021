<?php

function inscrpciones($s){
	include_once 'mp/inscripciones_form.php';
	?>

	<div class="container mt-5-r ">
		<?=inscrpciones_form($s);?>
	</div>

	<?php
}

?>