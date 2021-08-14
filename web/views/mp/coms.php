<?php

function coms($s){
	include_once '../config/controllers/sqlController.php';

	$q = new sqlController();

	$p = $q->all('comites');

	$p2 = $q->countElseWhere('comites', 'id');

	$i = 0;
	
	$d = 'zoom-in';

	$fn = '';

	foreach ($p as $com) {
		$i += 1;

		if ($i == 1) {

		?>

			<div class="row">

		<?php

		}
	?>				
				<div class="col-md-4 col-sm-6 my-2-r" data-aos="<?=$d?>" data-aos-easing="ease-in-sine" data-aos-duration="500">
					<a href="<?=$s?>/comite/<?=$com['id']?>" class="text-white hover">
						<div class="card text-center bg-dark text-light">
							<img class="card-img-top" src="<?=$s.'/assets/media/'.$com['foto']?>" alt="<?=$com['foto']?>">
							<h4 class="card-title pt-1-r px-1-r text-center text-capitalize"><?=$com['nombre']?></h4>
						</div>
					</a>
				</div>

	<?php

		if ($i == 3 || ($i <= 2 && $p2 == $com['id'])) {

			?>

			</div>

			<?php

			$i = 0;

		}
	}
}

?>