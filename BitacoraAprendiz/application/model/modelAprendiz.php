<?php

class ModelAprendiz 
{
	private $nombres; 
	private $apellidos; 
	private $correo; 
	private $telefono; 
	private $numero_ficha; 
	private $documento; 
	private $id_cadena;
	private $id_programa;
	private $nombre;
	private $cadena;
	private $tbl_funcionario_documento;



	
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

	public function guardarAprendiz()
	{
		$sql = "INSERT INTO tbl_aprendiz (nombres, apellidos, correo, telefono, numero_ficha, documento,id_cadena, id_programa) VALUES (:nombres, :apellidos, :correo, :telefono, :numero_ficha, :documento,:id_cadena, :id_programa)";

		try {

			$query = $this->db->prepare($sql);
			$query->bindValue(":nombres", $this->__GET("nombres") );
			$query->bindValue(":apellidos", $this->__GET("apellidos") );
			$query->bindValue(":correo", $this->__GET("correo") );
			$query->bindValue(":telefono", $this->__GET("telefono") );
			$query->bindValue(":numero_ficha", $this->__GET("numero_ficha") );
			$query->bindValue(":documento", $this->__GET("documento") );
			$query->bindValue(":id_cadena", $this->__GET("id_cadena") );
			$query->bindValue(":id_programa", $this->__GET("id_programa") );


			return $query->execute();

		} catch (Exception $e) {

			return 0;

		}
	}

	public function modificarAprendiz()
	{
		$sql = "UPDATE tbl_aprendiz SET nombres = :nombres, apellidos = :apellidos, correo=:correo, telefono=:telefono, numero_ficha=:numero_ficha, documento= :documento,id_cadena=:id_cadena, id_programa=:id_programa where documento= :documento";

		try {

			$query = $this->db->prepare($sql);
			$query->bindValue(":nombres", $this->__GET("nombres") );
			$query->bindValue(":apellidos", $this->__GET("apellidos") );
			$query->bindValue(":correo", $this->__GET("correo") );
			$query->bindValue(":telefono", $this->__GET("telefono") );
			$query->bindValue(":numero_ficha", $this->__GET("numero_ficha") );
			$query->bindValue(":documento", $this->__GET("documento") );
			$query->bindValue(":id_cadena", $this->__GET("id_cadena") );
			$query->bindValue(":id_programa", $this->__GET("id_programa") );

			return $query->execute();

		} catch (Exception $e) {

			return 0;

		}


	}

	public function actualizarPerfilAprendiz()
	{
		$sql = "UPDATE tbl_aprendiz SET nombres = :nombres, apellidos = :apellidos, correo=:correo, telefono=:telefono 
		where documento=:documento";

		try {

			$query = $this->db->prepare($sql);
			$query->bindValue(":documento", $this->__GET("documento") );
			$query->bindValue(":nombres", $this->__GET("nombres") );
			$query->bindValue(":apellidos", $this->__GET("apellidos") );
			$query->bindValue(":correo", $this->__GET("correo") );
			$query->bindValue(":telefono", $this->__GET("telefono") );
			
			return $query->execute();

		} catch (Exception $e) {

			return 0;

		}


	}

	public function eliminarAprendiz()
	{
		$sql = "DELETE from tbl_aprendiz where documento= :documento";

		try {

			$query = $this->db->prepare($sql);
			
			$query->bindValue(":documento", $this->__GET("documento") );
			

			return $query->execute();

		} catch (Exception $e) {

			return 0;

		}

	}

}


?>