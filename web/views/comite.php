<?php

function comite($s, $id){
	include_once 'mp/comiteView.php';

	?>
		<div class="container mb-4 py-1-r">
			<?=comiteView($s,$id)?>
		</div>
	<?php
}

?>