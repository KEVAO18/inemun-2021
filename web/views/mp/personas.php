<?php

function personas($s){
	include_once '../config/controllers/sqlController.php';

	$q = new sqlController();

	$p = $q->all('junta_directiva');

	$p2 = $q->countElseWhere('junta_directiva', 'id');

	$i = 0;
	
	$d = 'zoom-in';

	$fn = '';

	foreach ($p as $persona) {
		$i += 1;

		$fn = explode(' ', $persona['name']);

		if ($i == 1) {

		?>

			<div class="row">

		<?php

		}
	?>
				<div class="col-md-3 col-sm-6 my-2-r" data-aos="<?=$d?>" data-aos-easing="ease-in-sine" data-aos-duration="500">
					<div class="card text-center">
						<img class="card-img-top" src="<?=$s.'/assets/media/'.$persona['img']?>" alt="Card image cap">
						<h4 class="card-title pt-2 text-center text-capitalize"><?=$persona['name']?></h4>
						<div class="rounded-bottom bg-main text-center pt-3">
							<ul class="list-unstyled list-inline font-small">
							  <li class="list-inline-item black-text"><?=$persona['cargo']?></li>
							</ul>
						</div>
					</div>
				</div>

	<?php

		if ($i == 4 || ($i <= 3 && $p2 == $persona['id'])) {

			?>

			</div>

			<?php

			$i = 0;

		}
	}
}

?>