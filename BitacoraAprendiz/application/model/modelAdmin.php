<?php

class ModelAdmin 
{
	private $numero_ficha;
	private $documento;
	private $nit_empresa;

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

	public function listarAprendiz()
	{
		$sql = "SELECT ap.nombres, ap.apellidos, ap.correo, ap.telefono, ap.numero_ficha, ap.documento,ap.contrasena, ap.id_rol,  ap.tbl_funcionario_documento, ap.id_Alternativa, ap.tbl_coformador_documento, ap.id_cadena, ap.id_programa, ap.nit_empresa, est.estado, pra.alternativa, fun.nombres as nombres_fun,fun.apellidos as apellidos_fun, emp.empresa,pro.id_programa,pro.nombre,cad.id_cadena,cad.cadena
		FROM 
		tbl_aprendiz ap
		
		left join tbl_alternativaPractica pra on (ap.id_Alternativa= pra.id_Alternativa)
		left join tbl_estadoAprendiz est on (ap.id_estado=est.id_estado)
		left join tbl_funcionario fun on (ap.tbl_funcionario_documento=fun.documento)
		left join tbl_empresa emp on(ap.nit_empresa=emp.nit_empresa)
		left join tbl_programa pro on(ap.id_programa=pro.id_programa)
		left join tbl_cadena cad on(ap.id_cadena=cad.id_cadena)";

		$query = $this->db->prepare($sql);
		$query->execute();
		return $query->fetchAll();
	}

	public function listarEmpresa()
	{
		$sql="SELECT * FROM tbl_empresa WHERE nit_empresa=:nit_empresa";
		$query = $this->db->prepare($sql);
		$query->bindValue(":nit_empresa", $this->__GET("nit_empresa"));
		$query->execute();
		return $query->fetch();

	}

	public function detallesFuncionario()
	{
		$sql="SELECT * FROM tbl_funcionario WHERE documento=:documento";
		$query = $this->db->prepare($sql);
		$query->bindValue(":documento", $this->__GET("documento"));
		$query->execute();
		return $query->fetch();

	}

	public function detallesAprendiz()
	{
		$sql = "SELECT ap.nombres, ap.apellidos, ap.correo, ap.telefono, ap.numero_ficha, ap.documento,ap.contrasena, ap.id_rol,  ap.tbl_funcionario_documento, ap.id_Alternativa, ap.tbl_coformador_documento, ap.id_cadena, ap.id_programa, ap.nit_empresa, est.estado, pra.alternativa, fun.nombres as docente, emp.empresa
		FROM 
		tbl_aprendiz ap
		
		INNER join tbl_alternativaPractica pra on (ap.id_Alternativa= pra.id_Alternativa)
		INNER join tbl_estadoAprendiz est on (ap.id_estado=est.id_estado)
		INNER join tbl_funcionario fun on (ap.tbl_funcionario_documento=fun.documento)
		inner join tbl_empresa emp on(ap.nit_empresa=emp.nit_empresa)";
		$query = $this->db->prepare($sql);
		$query->bindValue(":documento", $this->__GET("documento"));
		$query->execute();
		return $query->fetch();

	}
	public function asignarFichasAFuncionario()
	{
		$sql="UPDATE tbl_aprendiz set tbl_funcionario_documento= :documento where numero_ficha= :numero_ficha ";

		try{

			$query = $this->db->prepare($sql);
			$query->bindValue(":documento", $this->__GET("documento"));
			$query->bindValue(":numero_ficha", $this->__GET("numero_ficha"));
			return $query->execute();
		}
		catch(Exception $e)
		{
			return 0;
		}

	}

	public function asignarAprendizAEmpresa()
	{
		$sql="UPDATE tbl_aprendiz set nit_empresa= :nit_empresa where documento= :documento";

		try{

			$query = $this->db->prepare($sql);
			$query->bindValue(":documento", $this->__GET("documento"));
			$query->bindValue(":nit_empresa", $this->__GET("nit_empresa"));
			return $query->execute();
		}
		catch(Exception $e)
		{
			return 0;
		}


	}




}


?>