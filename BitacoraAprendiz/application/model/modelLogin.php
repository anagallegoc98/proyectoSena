<?php

class ModelLogin 
{

	private $contrasena; 
	private $documento;




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

	public function __SET($key, $value){
		$this->$key = $value;
	}



	public function validarAprendiz()
	{

		$sql = "SELECT a.documento,a.nombres,a.apellidos,a.telefono,a.contrasena,a.correo,a.id_cadena,a.id_programa,a.numero_ficha,a.id_Alternativa,a.nit_empresa , e.empresa,e.direccion,e.telefono as telefono_e,c.Nombres,c.documento as documento_c,c.correo as correo_c ,c.telefono as telefono_c, cad.cadena,prog.nombre as programa 
		FROM tbl_aprendiz as a 
		left join tbl_empresa as e on a.nit_empresa = e.nit_empresa  
		left join tbl_coformador as c on a.tbl_coformador_documento = c.documento
		left join tbl_cadena as cad on a.id_cadena = cad.id_cadena
		left join tbl_programa as prog on a.id_programa = prog.id_programa
		WHERE a.documento = :documento";
		$query = $this->db->prepare($sql);
		$query->bindValue(":documento", $this->__GET("documento") );
		$query->execute();
		$resultado = $query->fetch();
		return $resultado;
	}
	public function validarCoformador()
	{
		$sql = "SELECT c.*,e.nit_empresa,e.empresa FROM tbl_coformador as c
		inner join tbl_empresa as e on c.nit_empresa = e.nit_empresa  WHERE documento = :documento";
		$query = $this->db->prepare($sql);
		$query->bindValue(":documento", $this->__GET("documento") );
		$query->execute();
		$resultado = $query->fetch();
		return $resultado;

	}

	public function validarEmpresa()
	{

		$sql = "SELECT *, nit_empresa AS documento FROM tbl_empresa WHERE nit_empresa = :nit_empresa";
		$query = $this->db->prepare($sql);
		$query->bindValue(":nit_empresa", $this->__GET("documento") );
		$query->execute();
		$resultado = $query->fetch();
		return $resultado;
	}

	public function validarFuncionario()
	{
		$sql = "SELECT f.*, c.cadena FROM tbl_funcionario as f
		inner join tbl_cadena as c on f.id_cadena=c.id_cadena
		WHERE documento = :documento";
		$query = $this->db->prepare($sql);
		$query->bindValue(":documento", $this->__GET("documento") );
		$query->execute();
		$resultado = $query->fetch();
		return $resultado;
	}

	public function listar_roles()
	{
		$sql = "SELECT id_rol,nombrerol FROM tbl_rol ";
		$query = $this->db->prepare($sql);
		$query->execute();
		return $query->fetchAll();
	}
}

?>