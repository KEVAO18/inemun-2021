<?php

function dashboard($s){
	include_once 'mp/data.php';
	include_once 'mp/ver_inscripciones.php';

	$data = data();
	?>

	<div class="container py-2-r">
		<div class="row">
			<div class="col-sm-12 col-md-6 my-1-r">
				<div class="text-center">
					<img class="h-50-v b-round-2" src="<?=$s.'/assets/media/'.$data['img']?>" alt="profile">
				</div>
			</div>
			<div class="col-sm-12 col-md-6">
				<div class="row">
					<div class="col-sm-12 my-1-r">
						<ul class="list-group">
						  <li class="list-group-item disabled"><?=$data['name']?></li>
						  <li class="list-group-item disabled"><?=$data['cargo']?></li>
						</ul>
					</div>
					<div class="col-sm-12 my-1-r">
						<div class="">
							<button type="button" class="btn btn-block btn-outline-info my-2" data-toggle="modal" data-target="#basicExampleModal">
							  Ver inscripciones
							</button>
							<a href="<?=$s?>/exit_session" class="btn btn-block btn-outline-danger" title="Exit">Exit</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade bottom " id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	  aria-hidden="true">
	  <div class="modal-dialog modal-full-height modal-bottom " role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Inscripciones</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<?=ver_inscripciones($s)?>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

	<?php
}

?>


