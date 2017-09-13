<?php

class ModelPrograma 
{	
		
	private $id_programa;
	private $nombre; 
	private $id_cadena;
	


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

	public function guardarPrograma()
	{
		$sql = "INSERT INTO tbl_programa (id_programa, nombre, id_cadena) VALUES (:id_programa, :nombre, :id_cadena)";

		try {

			$query = $this->db->prepare($sql);
			
			$query->bindValue(":id_programa", $this->__GET("id_programa") );
			$query->bindValue(":nombre", $this->__GET("nombre") );

			$query->bindValue(":id_cadena", $this->__GET("id_cadena") );


			return $query->execute();

		} catch (Exception $e) {

			return 0;

		}
	}

	public function modificarPrograma()
	{
		$sql = "UPDATE tbl_programa SET id_programa=:id_programa, nombre=:nombre, id_cadena=:id_cadena where id_programa=:id_programa";

		try {


			$query = $this->db->prepare($sql);
			$query->bindValue(":id_programa", $this->__GET("id_programa") );

			$query->bindValue(":nombre", $this->__GET("nombre") );

			$query->bindValue(":id_cadena", $this->__GET("id_cadena") );

			return $query->execute();

		} catch (Exception $e) {

			return 0;

		}


	}

	public function eliminarPrograma()
	{
		$sql = "delete from tbl_programa where id_programa= :id_programa";


		try {

			$query = $this->db->prepare($sql);
			
			$query->bindValue(":id_programa", $this->__GET("id_programa") );
			

			return $query->execute();

		} catch (Exception $e) {

			return 0;

		}

	}
	public function listarPrograma()
	{

		// $sql = "SELECT pro.id_programa, pro.nombre, cad.cadena
		// FROM tbl_programa pro inner join tbl_cadena cad
		// on(pro.id_cadena=cad.id_cadena)";
		// 
		$sql="SELECT * FROM tbl_programa";

		$query = $this->db->prepare($sql);
		$query->execute();
		return $query->fetchAll();
	}


	public function listarfichasxPrograma()
	{

		$sql = "SELECT *
		FROM tbl_Ficha where id_programa=:id_programa";

		$query = $this->db->prepare($sql);
			$query->bindValue(":id_programa", $this->__GET("id_programa") );
			$query->execute();
			return $query->fetchAll();
	}

}

?>