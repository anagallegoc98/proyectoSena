<?php 

class ModelCoformador  
	
{

	private $nombres; 
	private $apellidos; 
	private $correo; 
	private $telefono; 
	private $documento;
	private $documento_apren; 
	private $id_documento; 
	private $nit_empresa;
	
	

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

	public function guardarCoformador()
	{
		$sql = "INSERT INTO tbl_coformador(documento, nombres, apellidos, telefono, correo, nit_empresa) values (:documento, :nombres, :apellidos, :telefono, :correo, :nit_empresa)";

		try {

			$query = $this->db->prepare($sql);
			$query->bindValue(":documento", $this->__GET("documento") );
			$query->bindValue(":nombres", $this->__GET("nombres") );
			$query->bindValue(":apellidos", $this->__GET("apellidos") );
			$query->bindValue(":correo", $this->__GET("correo") );
			$query->bindValue(":telefono", $this->__GET("telefono") );		
			$query->bindValue(":nit_empresa", $this->__GET("nit_empresa") );
			
		

			return $query->execute();

		} catch (Exception $e) {

			return 0;

		}
	}

	public function modificarCoformador()
	{
		$sql = "UPDATE tbl_coformador SET documento=:documento,nombres=:nombres,apellidos=
		:apellidos,telefono=:telefono,correo=:correo,nit_empresa=:nit_empresa WHERE documento=:documento";

		try {

			$query = $this->db->prepare($sql);
			$query->bindValue(":documento", $this->__GET("documento") );
			$query->bindValue(":nombres", $this->__GET("nombres") );
			$query->bindValue(":apellidos", $this->__GET("apellidos") );
			$query->bindValue(":correo", $this->__GET("correo") );
			$query->bindValue(":telefono", $this->__GET("telefono") );		
			$query->bindValue(":nit_empresa", $this->__GET("nit_empresa") );
			
		

			return $query->execute();

		} catch (Exception $e) {

			return 0;

		}
	}

	public function actualizarPerfilCoformador()
	{
		$sql = "UPDATE tbl_coformador SET nombres=:nombres,apellidos=
		:apellidos,telefono=:telefono,correo=:correo WHERE documento='".$_SESSION["documento"]."'";

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
	public function eliminarCoformador()
	{
		$sql = "DELETE FROM `tbl_coformador` WHERE documento=:documento";

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
		$sql = "SELECT nombres, apellidos, correo, telefono, numero_ficha, documento, id_programa FROM tbl_aprendiz 
		where tbl_coformador_documento = '".$_SESSION["documento"]. "'";

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
	public function bitacorasxAprendiz()
	{
		$sql="SELECT b.*,a.nombres,a.apellidos FROM tbl_bitacora as b
		inner join tbl_aprendiz as a on b.documento_apren=a.documento where documento_apren= :documento_apren order by fecha_bitacora desc ";


		$query = $this->db->prepare($sql);
		$query->bindValue(":documento_apren", $this->__GET("documento_apren") );
		$query->execute();
		return $query->fetchAll();

	}
	public function listarBitacoras()
	{
		$sql="SELECT b.*,a.nombres,a.apellidos FROM tbl_bitacora as b 
		inner join tbl_aprendiz as a on b.documento_apren=a.documento  
		where documento_cof= '".$_SESSION["documento"]. "'";


		$query = $this->db->prepare($sql);
		$query->execute();
		return $query->fetchAll();

	}
}

 ?>