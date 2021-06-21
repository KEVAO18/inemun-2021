<?php

function login($s){
	include_once 'mp/login_form.php';
	?>

	<div class="container mt-5-r ">
		<?=login_form($s);?>
	</div>

	<?php
}

?>