<?php 

$autor = "Kevin Orrego";

$appName = "INEMUN";

$email = "kevao.dev@gmail.com";

$date = date("Y-m-d");

$icoName = "logo";

$serve = "http://localhost/proyectos/php/inemun";

function loginIcon($s){
	@session_start();
	if (isset($_SESSION['user'])) {
		if (password_verify($_SESSION['user'], $_SESSION['user_enc'])) {
			?>
			<li class="nav-item">
			  <a class="nav-link waves-effect waves-light" href="<?=$s?>/dashboard">
			    <?=$_SESSION['user']?>
			  </a>
			</li>
			<?php
		}
	}else{
			?>
			<li class="nav-item">
			  <a class="nav-link waves-effect waves-light" href="<?=$s?>/login">
			    <i class="fas fa-user"></i>
			  </a>
			</li>
			<?php
		}
}

?>