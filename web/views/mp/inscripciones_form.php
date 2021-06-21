<?php

function inscrpciones_form($s){

	include_once '../config/controllers/sqlController.php';

	$q = new sqlController();

	$p = $q->all('comites');
	$p2 = $q->all('comites');
	$p3 = $q->all('comites');

	?>

	<div class="row my-2-r">
		<div class="col-sm-12 card">
			<h2 class="card-title text-center my-2-r">Inscrpciones</h2>
			<form id='ins_form' role='form' class="py-2-r px-3-r">
			  <h4 class="card-title text-center my-2-r">Datos personales</h4>
			  <div class="row">
			  	<div class='md-form mt-3 col-sm-12 col-md-6'>
			  	  <input type='text' id='name' class='form-control' name='name' required>
			  	  <label for='userOrEmailSig'><i class="far fa-user"></i> Nombre </label>
			  	</div>
			  	<div class='md-form mt-3 col-sm-12 col-md-3'>
			  	  <input type='number' id='edad' class='form-control' name='edad' required>
			  	  <label for='edad'><i class="fas fa-sort-numeric-up"></i> Edad</label>
			  	</div>
			  	<div class='md-form mt-3 col-sm-12 col-md-3'>
			  	  <input type='number' id='phone' class='form-control' name='phone' required>
			  	  <label for='phone'><i class="fas fa-mobile-alt"></i> Telefono Movil</label>
			  	</div>
			  </div>
			  <div class="row">
			  	<div class='md-form mt-3 col-sm-12 col-md-6'>
			  	  <input type='email' id='email' class='form-control' name='email' required>
			  	  <label for='email'><i class="far fa-envelope"></i> E-mail </label>
			  	</div>
			  	<div class='md-form mt-3 col-sm-12 col-md-6'>
			  	  <input type='email' id='reemail' class='form-control' name='reemail' required>
			  	  <label for='reemail'><i class="fas fa-redo"></i> confirma tu E-mail </label>
			  	</div>

			  </div>
			  <h4 class="card-title text-center my-2-r">Informacion del modelo</h4>
			  <div class="row">
				<div class='md-form mt-3 col-sm-12 col-md-4'>
				  <input type='number' id='modelos' class='form-control' name='modelos' required>
				  <label for='modelos'><i class="fas fa-list-ol"></i> N° de Modelos</label>
				</div>
				<div class='md-form mt-3 col-sm-12 col-md-4'>
				  <input type='text' id='instE' class='form-control' name='instE' required>
				  <label for='instE'><i class="fas fa-university"></i> Institucion Edu. </label>
				</div>
				<div class='md-form mt-3 col-sm-12 col-md-4'>
				  <input type='text' id='Alim' class='form-control' name='Alim' required>
				  <label for='Alim'><i class="fas fa-cookie"></i> Condicion Alimenticia Especial </label>
				</div>
			  </div>
			  <div class="row">
			  	<div class='md-form mt-3 col-sm-12 col-md-4'>
			  		<select name="comite1" id="comite1" class="browser-default custom-select sel" required>
			  		  <option value='0' selected>Comite de preferencia</option>
			  		<?php foreach ($p as $p_q): ?>
			  		  <option value="<?=$p_q['id']?>"><?=$p_q['nombre']?></option>
			  		<?php endforeach ?>
			  		</select>
			  	</div>
			  	<div class='md-form mt-3 col-sm-12 col-md-4'>
			  		<select name="comite2" id="comite2" class="browser-default custom-select sel" required>
			  		  <option value='0' selected>Segunda opción</option>
			  		<?php foreach ($p2 as $p_q2): ?>
			  		  <option value="<?=$p_q2['id']?>"><?=$p_q2['nombre']?></option>
			  		<?php endforeach ?>
			  		</select>
			  	</div>
			  	<div class='md-form mt-3 col-sm-12 col-md-4'>
			  		<select name="comite3" id="comite3" class="browser-default custom-select sel">
			  		  <option value='0' selected>Tercera opción</option>
			  		<?php foreach ($p3 as $p_q3): ?>
			  		  <option value="<?=$p_q3['id']?>"><?=$p_q3['nombre']?></option>
			  		<?php endforeach ?>
			  		</select>
			  	</div>
			  </div>
			  <div class="text-center">
			  	<small>Al registrarse acepta tanto los términos y condiciones como el tratamiento de datos de inemun</small>
			  	<hr>
              	<button id='ins_ok' class='btn bg-3 text-white'>Ok</button>
			  </div>
			</form>
		</div>
	</div>

	<script>
	    $(document).on("ready", Register());

	    function Register(){
	      $("#ins_ok").on("click", function(e){
	        e.preventDefault();
	        var frm = $("#ins_form").serialize();
	        $.ajax({
	          type: "post",
	          url: "<?=$s?>/config/controllers/enrollments.php",
	          dataType: "json",
	          data: frm
	        }).done(function (info) {
	        	if (info.status == 2) {
	        		Swal.fire(info.msg,'','error');
	        	} else {
	        		let ale = document.getElementById("ins_form");
	        		ale.reset();
	        		Swal.fire(info.msg,'','success');
	        	}
	        })
	      });
	    }
	</script>
	<?php

}

?>