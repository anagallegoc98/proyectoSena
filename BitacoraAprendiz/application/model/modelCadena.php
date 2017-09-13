<?php

class ModelCadena
{
	
	private $tbl_cadena="tbl_cadena";
	private $tbl_centro= "tbl_centro";



	private $id_cadena; 
	private $cadena;
	private $id_centro;
	
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

	public function guardarCadena()
	{
		$sql = "INSERT INTO tbl_cadena (cadena, id_centro) VALUES (:cadena, :id_centro)";

		try {

			$query = $this->db->prepare($sql);
			$query->bindValue(":cadena", $this->__GET("cadena") );
			$query->bindValue(":id_centro", $this->__GET("id_centro") );



			return $query->execute();

		} catch (Exception $e) {

			return 0;

		}
	}

	public function modificarCadena()
	{
		$sql = "UPDATE tbl_cadena SET id_cadena=:id_cadena, cadena=:cadena, id_centro=:id_centro where id_cadena=:id_cadena";

		try {

			$query = $this->db->prepare($sql);

			$query->bindValue(":id_cadena", $this->__GET("id_cadena") );
			
			$query->bindValue(":cadena", $this->__GET("cadena") );

			$query->bindValue(":id_centro", $this->__GET("id_centro") );

			return $query->execute();

		} catch (Exception $e) {

			return 0;

		}


	}

	public function eliminarCadena()
	{
		$sql = "delete from tbl_cadena where id_cadena= :id_cadena";

		try {

			$query = $this->db->prepare($sql);
			
			$query->bindValue(":id_cadena", $this->__GET("id_cadena") );
			

			return $query->execute();

		} catch (Exception $e) {

			return 0;

		}

	}

		public function listarCentro()
	{

		$sql = "SELECT * FROM tbl_centro";

				$query = $this->db->prepare($sql);
				$query->execute();
				return $query->fetchAll();
	}
		public function listarCadena()
	{

		$sql = "SELECT cad.id_cadena, cad.cadena, cen.centro
		 FROM tbl_cadena cad
		 inner join  tbl_centro cen on( cad.id_centro=cen.id_centro)";

				$query = $this->db->prepare($sql);
				$query->execute();
				return $query->fetchAll();
	}



}


?>