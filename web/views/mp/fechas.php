<?php

function fechas($s){

	include_once '../config/controllers/sqlController.php';

	$q = new sqlController();

	$p = $q->all('fechas');

	$p2 = $q->countElseWhere('fechas', 'id');

	$i = 0;
	
	$d = 'zoom-in';

	foreach ($p as $fecha) {
		$i += 1;

		if ($i == 1) {

		?>

			<div class="row">

		<?php

		}
	?>
				<div class="col-md-6 my-2-r" data-aos="<?=$d?>" data-aos-easing="ease-in-sine" data-aos-duration="500">
					<div class="card text-center">
						<h3 class="card-title pt-2 text-center text-capitalize"><?=$fecha['Titulo']?></h3>
						<p class="card-body p-2">
							<?=$fecha['fecha']?>
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