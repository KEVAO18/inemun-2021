<?php

function login_form($s){
	include_once '../config/controllers/sqlController.php';

	$q = new sqlController();

	?>
		<div class="row my-2-r">
			<div class="col-sm-12 card">
				<h2 class="card-title text-center my-2-r">Iniciar Sesion</h2>
				<form id='login_form' role='form' class="py-2-r px-3-r">
				  <div class="row">
				  	<div class='md-form mt-3 col-sm-12 col-md-12'>
				  	  <input type='text' id='name' class='form-control' name='name' required>
				  	  <label for='userOrEmailSig'><i class="far fa-user"></i> Nombre de usuario </label>
				  	</div>
				  </div>
				  <div class="row">
				  	<div class='md-form mt-3 col-sm-12 col-md-6'>
				  	  <input type='password' id='pass' class='form-control' name='pass' required>
				  	  <label for='pass'><i class="fas fa-key"></i> Contraseña</label>
				  	</div>
				  	<div class='md-form mt-3 col-sm-12 col-md-6'>
				  	  <input type='password' id='repass' class='form-control' name='repass' required>
				  	  <label for='repass'><i class="fas fa-key"></i> Repetir contraseña</label>
				  	</div>
				  </div>
	  			  <div class="text-center">
	  			  	<small>Al iniciar sesion acepto todos los terminos y condiciones</small>
	  			  	<hr>
	                	<button id='login_ok' class='btn bg-3 text-white'>Ok</button>
	  			  </div>
				</form>
			</div>
		</div>
		<script>
		    $(document).on("ready", login());

		    function login(){
		      $("#login_ok").on("click", function(e){
		        e.preventDefault();
		        var frm = $("#login_form").serialize();
		        $.ajax({
		          type: "post",
		          url: "<?=$s?>/config/controllers/login.php",
		          dataType: "json",
		          data: frm
		        }).done(function (info) {
		        	if (info.status == 2) {
		        		Swal.fire(info.msg,'','error');
		        	} else {
		        		let ale = document.getElementById("login_form");
		        		ale.reset();
		        		Swal.fire(info.msg,'','success');
		        		window.location.href = '<?=$s?>/dashboard';
		        	}
		        })
		      });
		    }
		</script>
	<?php

	if ((isset($_SESSION['user_enc'])) && (password_verify($_SESSION['user'], $_SESSION['user_enc']))) {
		?>
		<script>
			window.location.href = '<?=$s?>/dashboard';
		</script>
		<?php
	}
}

?>