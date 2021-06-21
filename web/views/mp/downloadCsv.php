<?php

	include_once '../../../config/controllers/pageController.php';
	include_once '../../../config/controllers/sqlController.php';

	$q = new sqlController();

	$data = $q->All('inscripciones');

	echo "id,";
	echo "name,";
	echo "age,";
	echo "phone,";		
	echo "email,";
	echo "modelos,";
	echo "institucion,";	
	echo "comite 1,";
	echo "comite 2,";
	echo "comite 3,";
	echo "Alim \n";

	foreach ($data as $val) {
		echo $val['id'].",";
		echo $val['name'].",";
		echo $val['age'].",";
		echo $val['phone'].",";		
		echo $val['email'].",";
		echo $val['modelos'].",";
		echo $val['institucion'].",";		
		echo $val['comite1'].",";
		echo $val['comite2'].",";
		echo $val['comite3'].",";
		echo $val['Alim']."\n";
	}

	header('Content-Type: application/csv');
	header('Content-Disposition: attachment; filename=inscripciones.csv;');
?>