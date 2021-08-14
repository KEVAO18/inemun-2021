<?php

function fechas($s){

	include_once '../config/controllers/sqlController.php';

	$q = new sqlController();

	$p = $q->all('fechas');

	$p2 = $q->countElseWhere('fechas', 'id');

	$i = 0;
	
	$d = 'zoom-in';

	$iconos = array(
		1 => '<i class="far fa-address-book"></i>',
		2 => '<i class="far fa-file-alt"></i>',
		3 => '<i class="far fa-flag"></i>',
		4 => '<i class="far fa-file"></i>',
		5 => '<i class="fas fa-star"></i>',
		6 => '<i class="fas fa-calendar-day"></i>',
		7 => '<i class="fas fa-briefcase"></i>',
		8 => '<i class="fas fa-calendar-minus"></i>'
	);

	foreach ($p as $fecha) {
		$i += 1;

		$fecha_array = explode("-", $fecha['fecha']);

		$mes = ($fecha_array[1] == "07") ? "Julio" : "Agosto" ;

		if ($i == 1) {

		?>

			<div class="row">

		<?php

		}
	?>
				<div class="col-md-6 my-2-r" data-aos="<?=$d?>" data-aos-easing="ease-in-sine" data-aos-duration="500">
					<div class="card text-center bg-dark text-light py-1">
					<div class="pt-1-r fs-2">
						<?=$iconos[$fecha['id']]?>
					</div>
						<h3 class="card-title text-center text-capitalize mt-2-r"><?=$fecha['Titulo']?></h3>
						<p class="card-body text-capitalize fs-2">
							<?=$mes." - ".$fecha_array[2]?>
						</p>
					</div>
				</div>

	<?php

		if ($i == 2 || $p2 == $fecha['id']) {

			?>

			</div>

			<?php

			$i = 0;

		}
	}
}

?>