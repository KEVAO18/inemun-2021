<?php

function exit_session($s){
	include_once '../config/controllers/sqlController.php';
	
	$q = new sqlController();

	$user = $_SESSION['user'];

	$data = $q->doQuery("UPDATE `junta_directiva` SET `estado` = '0' WHERE `junta_directiva`.`name` = '$user';");

	session_destroy();
	?>
	<script>
		window.location.href = '<?=$s?>/login';
	</script>
	<?php
}

?>