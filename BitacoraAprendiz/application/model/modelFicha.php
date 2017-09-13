<?php

class ModelFicha 
{

	private $nombres; 
	private $id_programa;
	private $numero_ficha;
	

	public function __GET($key){
		return $this->$key;
	}

	public function __SET($key, $value){
		$this->$key = $value;
	}

	function __construct($db)
	{
		try {
			$this->db = $db;
		} catch (PDOException $e) {
			exit('La conexión a la base de datos no es estable. Por favor comuniquese con el administrador del sitio.');
		}
	}

	public function guardarFicha()
	{
		$sql = "INSERT INTO tbl_ficha (numero_ficha, id_programa) VALUES (:numero_ficha, :id_programa)";

		try {

			$query = $this->db->prepare($sql);
			$query->bindValue(":numero_ficha", $this->__GET("numero_ficha") );
			
			$query->bindValue(":id_programa", $this->__GET("id_programa") );

			return $query->execute();

		} catch (Exception $e) {

			return 0;

		}
	}

	public function modificarFicha()
	{
		$sql = "UPDATE tbl_ficha SET numero_ficha=:numero_ficha, id_programa=:id_programa where numero_ficha=:numero_ficha";

		try {
			$query = $this->db->prepare($sql);

			$query->bindValue(":numero_ficha", $this->__GET("numero_ficha") );
			
			$query->bindValue(":id_programa", $this->__GET("id_programa") );

			return $query->execute();

		} catch (Exception $e) {

			return 0;

		}


	}

	public function eliminarFicha()
	{
		$sql = "delete from tbl_ficha where numero_ficha= :numero_ficha";

		try {

			$query = $this->db->prepare($sql);
			
			$query->bindValue(":numero_ficha", $this->__GET("numero_ficha") );
			

			return $query->execute();

		} catch (Exception $e) {

			return 0;

		}

	}
	public function listarPrograma()
	{

		$sql = "SELECT * FROM tbl_programa ";

		$query = $this->db->prepare($sql);
		$query->execute();
		return $query->fetchAll();
	}
	public function listarFicha()
	{

		$sql = "SELECT ficha.numero_ficha, prog.id_programa,prog.nombre FROM tbl_ficha ficha 
		inner join tbl_programa prog on(prog.id_programa=ficha.id_programa)";

		$query = $this->db->prepare($sql);
		$query->execute();
		return $query->fetchAll();
	}

	public function listarAprendizxFicha()
	{

		$sql = "SELECT * FROM tbl_aprendiz where numero_ficha =:numero_ficha";
			$query = $this->db->prepare($sql);
			$query->bindValue(":numero_ficha", $this->__GET("numero_ficha") );
			$query->execute();
			return $query->fetchAll();
		
		
	}
}


?>