<?php

include_once 'conectionController.php';

/**
 * 
 */
class sqlController extends conectionController{

	
	public function doQuery($sql){
		$q = conectionController::con()->prepare($sql);
		$q->execute();
		return $q;
		$q->close();
	}

	public function All($table){

		$q = $this::doQuery("SELECT * FROM $table");

		return $q;

	}

	public function AnyColumn($table, $columna){
		$q = $this::doQuery("SELECT $columna FROM $table");

		return $q;
	}

	public function where($table, $columna, $val, $oper = '='){
		$q = $this::doQuery("SELECT * FROM $table WHERE $columna $oper $val");

		return $q;
	}

	public function Like($table, $columna, $val){
		$q = $this::doQuery("SELECT * FROM $table WHERE $columna LIKE '%$val%'");

		return $q;
	}

	public function limit($table, $columna, $val, $oper = '=', $lim)	{
		$q = $this::doQuery("SELECT * FROM $table WHERE $columna $oper '$val' LIMIT $lim");

		return $q;
	}

	public function limitOrder($table, $columna, $val, $oper = '=', $lim, $order = 'ASC')	{
		$q = $this::doQuery("SELECT * FROM $table WHERE $columna $oper $val ORDER BY id $order LIMIT $lim");

		return $q;
	}

	public function update($table, $columna, $val, $id){
		$q = $this::doQuery("UPDATE `$table` SET `$columna` = '$val' WHERE `$table`.`id` = '$id';");

		return $q;
	}

	public function count($table, $columna, $val, $oper = '='){
		$q = $this::doQuery("SELECT count($columna) FROM $table WHERE $columna $oper '$val'");
		
		foreach ($q as $q) {
			$p = $q['count('.$columna.')'];
		}

		return $p;
	}

	public function countElseWhere($table, $columna){
		$q = $this::doQuery("SELECT count($columna) From $table Where 1");
		
		foreach ($q as $q) {
			$p = $q['count('.$columna.')'];
		}

		return $p;
	}

	public function insert($datos){
		$sql = "INSERT INTO `inscripciones`(`id`, `name`, `age`, `phone`, `email`, `modelos`, `institucion`, `comite1`, `comite2`, `comite3`, `Alim`) VALUES (NULL, :name, :age, :phone, :email, :modelos, :institucion, :comite1, :comite2, :comite3, :Alim);";
		@$q = conectionController::con();
		$query = $q->prepare($sql);
		$query->bindParam(":name", $datos['name'], PDO::PARAM_STR);
		$query->bindParam(":age", $datos['age'], PDO::PARAM_INT);
		$query->bindParam(":phone", $datos['Phone'], PDO::PARAM_STR);
		$query->bindParam(":email", $datos['Email'], PDO::PARAM_STR);
		$query->bindParam(":modelos", $datos['Modelos'], PDO::PARAM_INT);
		$query->bindParam(":institucion", $datos['InstE'], PDO::PARAM_STR);
		$query->bindParam(":comite1", $datos['Comite1'], PDO::PARAM_INT);
		$query->bindParam(":comite2", $datos['Comite2'], PDO::PARAM_INT);
		$query->bindParam(":comite3", $datos['Comite3'], PDO::PARAM_INT);
		$query->bindParam(":Alim", $datos['Alim'], PDO::PARAM_STR);

		$query->execute();

	}

}

?>