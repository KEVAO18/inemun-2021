<?php

include_once 'sqlController.php';

/**
 * 
 */
class enrollments extends sqlController{
	
	private $name;
	private $age;
	private $phone;
	private $email;
	private $reemail;
	private $modelos;
	private $instE;
	private $comite1;
	private $comite2;
	private $comite3;
	private $Alim;


	function __construct(){
		$this->name;	
		$this->age;
		$this->phone;
		$this->email;
		$this->reemail;
		$this->modelos;
		$this->instE;
		$this->comite1;
		$this->comite2;
		$this->comite3;
		$this->Alim;
	}

	public function setName($name){
		return $this->name = $name;
	}

	public function getName(){
		return $this->name;
	}

	public function setAge($age){
		return $this->age = $age;
	}

	public function getAge(){
		return $this->age;
	}

	public function setPhone($phone){
		return $this->phone = $phone;
	}

	public function getPhone(){
		return $this->phone;
	}

	public function setEmail($email){
		return $this->email = $email;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setReemail($reemail){
		return $this->reemail = $reemail;
	}

	public function getReemail(){
		return $this->reemail;
	}

	public function setModelos($modelos){
		return $this->modelos = $modelos;
	}

	public function getModelos(){
		return $this->modelos;
	}

	public function setInstE($instE){
		return $this->instE = $instE;
	}

	public function getInstE(){
		return $this->instE;
	}

	public function setComite1($comite1){
		return $this->comite1 = $comite1;
	}

	public function getComite1(){
		return $this->comite1;
	}

	public function setComite2($comite2){
		return $this->comite2 = $comite2;
	}

	public function getComite2(){
		return $this->comite2;
	}

	public function setComite3($comite3){
		return $this->comite3 = $comite3;
	}

	public function getComite3(){
		return $this->comite3;
	}

	public function setAlim($Alim){
		return $this->Alim = $Alim;
	}

	public function getAlim(){
		return $this->Alim;
	}
	

	public function insert_data(){
		if ($this->getReemail() == $this->getEmail()) {
			$datos = array(
				'name' => $this->getName(),
				'age' => $this->getAge(),
				'Phone' => $this->getPhone(),
				'Email' => $this->getEmail(),
				'Reemail' => $this->getReemail(),
				'Modelos' => $this->getModelos(),
				'InstE' => $this->getInstE(),
				'Comite1' => $this->getComite1(),
				'Comite2' => $this->getComite2(),
				'Comite3' => $this->getComite3(),
				'Alim' => $this->getAlim()
			);

			$q = new sqlController();

			$q->insert($datos);

			$msg = array('msg' => 'Complete', 'status' => 1);

			return json_encode($msg);

		}else{

			$msg = array('msg' => 'Los E-mails Son diferentes', 'status' => 2);

			return json_encode($msg);
		}
	}
	
}

$a = new enrollments();

$a->setName($_POST['name']);

$a->setAge($_POST['edad']);

$a->setPhone($_POST['phone']);

$a->setEmail($_POST['email']);

$a->setReemail($_POST['reemail']);

$a->setModelos($_POST['modelos']);

$a->setInstE($_POST['instE']);

$a->setComite1($_POST['comite1']);

$a->setComite2($_POST['comite2']);

$a->setComite3($_POST['comite3']);

$a->setAlim($_POST['Alim']);

echo $a->insert_data();
?>