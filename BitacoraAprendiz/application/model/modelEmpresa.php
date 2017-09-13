<?php

class ModelEmpresa
{


	private $nit_empresa; 
	private $empresa;
	private $direccion;
	private $telefono;
	private $correo;
	private $documento;
	private $documento_c;
	private $documento_a;


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


	public function guardarEmpresa()
	{
		$sql = "INSERT INTO tbl_empresa(nit_empresa, empresa, direccion, telefono, correo) VALUES (:nit_empresa, :empresa, :direccion, :telefono, :correo)";

		try {

			$query = $this->db->prepare($sql);
			$query->bindValue(":nit_empresa", $this->__GET("nit") );
			$query->bindValue(":empresa", $this->__GET("empresa") );
			$query->bindValue(":direccion", $this->__GET("direccion") );
			$query->bindValue(":telefono", $this->__GET("telefono") );
			$query->bindValue(":correo", $this->__GET("correo") );

			return $query->execute();

		} catch (Exception $e) {

			return 0;

		}
	}

	public function modificarEmpresa()
	{
		$sql = "UPDATE tbl_empresa SET nit_empresa=:nit_empresa,empresa=:empresa,direccion=:direccion,telefono=:telefono,correo=:correo
		WHERE  nit_empresa='".trim($this->__GET("nit_empresa"))."'";

		try {
			$query = $this->db->prepare($sql);

			$query->bindValue(":nit_empresa", trim($this->__GET("nit_empresa")) );
			$query->bindValue(":empresa", $this->__GET("empresa") );
			$query->bindValue(":direccion", $this->__GET("direccion") );
			$query->bindValue(":telefono", $this->__GET("telefono") );
			$query->bindValue(":correo", $this->__GET("correo") );



			return $query->execute();

		} catch (Exception $e) {

			return 0;

		}


	}

	public function eliminarEmpresa()
	{
		$sql = "DELETE FROM tbl_empresa WHERE nit_empresa=:nit_empresa";

		try {

			$query = $this->db->prepare($sql);
			
			$query->bindValue(":nit_empresa", $this->__GET("nit") );
			

			return $query->execute();

		} catch (Exception $e) {

			return 0;

		}

	}

	public function listarAprendiz()
	{
		// $sql = "SELECT ap.nombres, ap.apellidos, ap.correo, ap.telefono,ap.documento,ap.id_programa FROM tbl_aprendiz ap
		// inner join tbl_empresa emp on(ap.nit_empresa=emp.nit_empresa)";

		$sql="SELECT * from tbl_aprendiz";
		$query = $this->db->prepare($sql);
		$query->execute();
		return $query->fetchAll();
	}
	public function listarEmpresa()
	{
		$sql = "SELECT * FROM tbl_empresa";

		$query = $this->db->prepare($sql);
		$query->execute();
		return $query->fetchAll();
	}

	public function listarCoformador()
	{
		$sql = "SELECT * FROM tbl_coformador";

		$query = $this->db->prepare($sql);
		$query->execute();
		return $query->fetchAll();
	}

	public function detallesCoformador()
	{
		$sql = "SELECT * FROM tbl_coformador WHERE documento = :documento";

		$query = $this->db->prepare($sql);
		$query->bindValue(":documento", $this->__GET("documento"));
		$query->execute();
		return $query->fetch();

		
	}



	public function asignarAprendizACoformador()
	{
		$sql="UPDATE tbl_aprendiz set tbl_coformador_documento= :documento_c where tbl_coformador_documento=:documento_c"; 
		try{

			$query = $this->db->prepare($sql);
			$query->bindValue(":documento_c", $this->__GET("documento_c"));
			$query->bindValue(":documento_a", $this->__GET("documento_a"));
			return $query->execute();
		}
		catch(Exception $e)
		{
			return 0;
		}



	}

}
?>

