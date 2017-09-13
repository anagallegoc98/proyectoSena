<?php 

class ModelFuncionario 

{

	private $nombres; 
	private $apellidos; 
	private $correo; 
	private $telefono; 
	private $documento; 
	private $id_cadena;
	private $id_programa;

	

	function __construct($db)
	{
		try {
			$this->db = $db;
		} catch (PDOException $e) {
			exit('La conexión a la base de datos no es estable. Por favor comuniquese con el administrador del sitio.');
		}
	}

	public function __GET($key){
		return $this->$key;
	}

	public function __SET($key, $value)
	{
		$this->$key = $value;
	}

	public function guardarFuncionario()
	{
		$sql = "INSERT INTO tbl_funcionario ( documento, nombres, apellidos, telefono, correo, id_cadena) VALUES ( :documento, :nombres, :apellidos, :telefono, :correo, :id_cadena)";

		try {

			$query = $this->db->prepare($sql);
			$query->bindValue(":documento", $this->__GET("documento") );
			$query->bindValue(":nombres", $this->__GET("nombres") );
			$query->bindValue(":apellidos", $this->__GET("apellidos") );
			$query->bindValue(":correo", $this->__GET("correo") );
			$query->bindValue(":telefono", $this->__GET("telefono") );		
			$query->bindValue(":id_cadena", $this->__GET("id_cadena") );


			return $query->execute();

		} catch (Exception $e) {

			return 0;

		}
	}

	public function modificarFuncionario()
	{
		$sql = "UPDATE tbl_funcionario SET documento=:documento,nombres=:nombres,apellidos=:apellidos,telefono=:telefono,correo=:correo,id_cadena=:id_cadena WHERE documento=:documento";

		try {

			$query = $this->db->prepare($sql);
			$query->bindValue(":documento", $this->__GET("documento") );
			$query->bindValue(":nombres", $this->__GET("nombres") );
			$query->bindValue(":apellidos", $this->__GET("apellidos") );
			$query->bindValue(":correo", $this->__GET("correo") );
			$query->bindValue(":telefono", $this->__GET("telefono") );		
			$query->bindValue(":id_cadena", $this->__GET("id_cadena") );


			return $query->execute();

		} catch (Exception $e) {

			return 0;

		}
	}
	public function eliminarFuncionario()
	{
		$sql = "DELETE FROM tbl_funcionario WHERE documento=:documento";

		try {

			$query = $this->db->prepare($sql);
			$query->bindValue(":documento", $this->__GET("documento") );



			return $query->execute();

		} catch (Exception $e) {

			return 0;

		}
	}
	
	public function listarAprendiz()
	{
		$sql = "SELECT nombres, apellidos, correo, telefono, numero_ficha, documento, id_cadena, id_programa FROM tbl_aprendiz";

		$query = $this->db->prepare($sql);
		$query->execute();
		return $query->fetchAll();
	}

	public function listarFuncionario()
	{
		
		$sql = "SELECT f.*,c.cadena from tbl_funcionario as f inner join tbl_cadena as c on f.id_cadena=c.id_cadena ";


		$query = $this->db->prepare($sql);
		$query->execute();
		return $query->fetchAll();
	}

		public function listarPrograma()
	{

		$sql = "SELECT * from tbl_programa ";
		

		$query = $this->db->prepare($sql);
		$query->execute();
		return $query->fetchAll();
	}


	public function listarFicha()
	{
		$sql = "SELECT * FROM tbl_ficha where id_programa=:id_programa";

		$query = $this->db->prepare($sql);
		$query->bindValue(":id_programa", $this->__GET("id_programa"));
		$query->execute();
		return $query->fetchAll();
	}

	public function detallesBitacora()
	{
		$sql="SELECT * FROM tbl_bitacora WHERE id_bitacora=:id_bitacora";
		$query = $this->db->prepare($sql);
		$query->bindValue(":id_bitacora", $this->__GET("id_bitacora"));
		$query->execute();
		return $query->fetch();

	}


	public function actualizarPerfilFuncionario()
	{
		$sql = "UPDATE tbl_funcionario SET nombres=:nombres,apellidos=:apellidos,telefono=:telefono,correo=:correo
		WHERE documento='".$_SESSION["documento"]."'";

		try {

			$query = $this->db->prepare($sql);
			$query->bindValue(":nombres", $this->__GET("nombres") );
			$query->bindValue(":apellidos", $this->__GET("apellidos") );
			$query->bindValue(":correo", $this->__GET("correo") );
			$query->bindValue(":telefono", $this->__GET("telefono") );		


			return $query->execute();

		} catch (Exception $e) {

			return 0;

		}
	}

	public function bitacorasxAprendiz()
	{
		$sql="SELECT b.*,a.nombres,a.apellidos FROM tbl_bitacora as b
		inner join tbl_aprendiz as a on b.documento_apren=a.documento where documento_apren= :documento_apren order by fecha_bitacora desc ";


		$query = $this->db->prepare($sql);
		$query->bindValue(":documento_apren", $this->__GET("documento_apren") );
		$query->execute();
		return $query->fetchAll();

	}

	

}

?>
