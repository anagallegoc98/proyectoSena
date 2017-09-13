<?php

class ModelSelects 
{

	private $numero_ficha;	
	private $id_cadena;
	private $id_programa;




	
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

	public function listarCiudad()
	{
		$sql="SELECT * FROM tbl_municipio";
		$query=$this->db->prepare($sql);
		$query->execute();
		return $query->fetchAll();
	}
public function listarAlternativa()
	{

		$sql = "SELECT * FROM tbl_alternativapractica";

		$query = $this->db->prepare($sql);
		$query->execute();
		return $query->fetchAll();
	}
	public function listarCadena()
	{

		$sql = "SELECT * FROM tbl_cadena";

		$query = $this->db->prepare($sql);
		$query->execute();
		return $query->fetchAll();
	}




	public function listarPrograma()
	{
		
		$sql = "SELECT * FROM tbl_programa";

		$query = $this->db->prepare($sql);
	

		$query->execute();
		return $query->fetchAll();
	}

	public function listarFicha()
	{

		$sql = "SELECT * FROM tbl_ficha";

		$query = $this->db->prepare($sql);
		$query->execute();
		return $query->fetchAll();
	}



}
?> 