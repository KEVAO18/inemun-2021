<?php

function ver_inscripciones($s){
	
	include_once '../config/controllers/sqlController.php';

	$q = new sqlController();

	$data = $q->All('inscripciones');


?>

  	<table class="table table-hover">
  	  <caption>CAE (Condicion Alimenticia Especial)</caption>
  	  <thead>
  	    <tr>
  	      <th scope="col">#</th>
  	      <th scope="col">Nombre</th>
  	      <th scope="col">Edad</th>
  	      <th scope="col">Telefono</th>
  	      <th scope="col">E-Mail</th>
  	      <th scope="col">Modelos</th>
  	      <th scope="col">Institucion</th>
  	      <th scope="col">Comite 1</th>
  	      <th scope="col">Comite 2</th>
  	      <th scope="col">Comite 3</th>
  	      <th scope="col">CAE</th>
  	    </tr>
  	  </thead>
  	  <tbody>
<?php
	foreach ($data as $d) {
		?>
	      	    <tr>
	      	      <th scope="row"><?=$d['id']?></th>
	      	      <td><?=$d['name']?></td>
	      	      <td><?=$d['age']?></td>
	      	      <td><?=$d['phone']?></td>
	      	      <td><?=$d['email']?></td>
	      	      <td><?=$d['modelos']?></td>
	      	      <td><?=$d['institucion']?></td>
	      	      <td><?=$d['comite1']?></td>
	      	      <td><?=$d['comite2']?></td>
	      	      <td><?=$d['comite3']?></td>
	      	      <td><?=$d['Alim']?></td>
	      	    </tr>

		<?php
	}
	?>
  	    </tbody>
    </table>
    <a href="<?=$s?>/web/views/mp/downloadCsv.php" title="">Descargar en csv</a>
	<?php

}

?>