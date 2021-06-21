<?php

function data(){
	include_once '../config/controllers/sqlController.php';

	$q = new sqlController();

	$user = $_SESSION['user'];

	$data = $q->doQuery("SELECT * FROM `junta_directiva` WHERE name = '$user'");

	foreach ($data as $datos) {

		if ($datos['estado'] == 1) {
			$estado = 'Online';
		}
		$data_profile = array(
			'name' => $datos['name'],
			'img' => $datos['img'],
			'cargo' => $datos['cargo'],
			'estado' => $estado
		);
		return $data_profile;
	}
}

?>