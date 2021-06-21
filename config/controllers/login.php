<?php

include_once 'sqlController.php';

/**
 * 
 */
class login extends sqlController{
	
	private $user;
	private $pass;
	private $re_pass;


	function __construct(){
		$this->user;	
		$this->pass;
		$this->re_pass;
	}

	public function setUser($user){
		return $this->user = $user;
	}

	public function getUser(){
		return $this->user;
	}	

	public function setPass($pass){
		return $this->pass = password_hash($pass, PASSWORD_BCRYPT, ['cost' => 10]);
	}

	public function getPass(){
		return $this->pass;
	}	

	public function setRe_pass($re_pass){
		return $this->re_pass = password_hash($re_pass, PASSWORD_BCRYPT, ['cost' => 10]);
	}

	public function getRe_pass(){
		return $this->re_pass;
	}

	public function login(){
		$q = new sqlController();

		$user = $this->getUser();

		$a = $q->doQuery("SELECT * FROM `junta_directiva` WHERE name = '$user'");

		$update = $q->doQuery("UPDATE `junta_directiva` SET `estado` = '1' WHERE `junta_directiva`.`name` = '$user';");

		foreach ($a as $us) {
			if (password_verify($us['contraseña'], $this->getPass())) {
				session_start();
				$_SESSION['user_enc'] = password_hash($this->getUser(), PASSWORD_BCRYPT, ['cost' => 10]);
				$_SESSION['user'] = $this->getUser();

				$msg = array('msg' => 'Complete', 'status' => 1);

				return json_encode($msg);
			}else{

				$msg = array('msg' => 'contraseña incorrecta', 'status' => 2);

				return json_encode($msg);
			}
		}

	}
	
}

$a = new login();

$a->setUser($_POST['name']);

$a->setPass($_POST['pass']);

$a->setRe_pass($_POST['repass']);

echo $a->login();
?>