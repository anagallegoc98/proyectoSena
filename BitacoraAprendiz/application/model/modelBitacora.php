<?php

class ModelBitacora
{
	private $id_bitacora;
	private $fecha_bitacora ;
	private $fecha_inicial ;
	private $fecha_final ;
	private $id_ciudad ;
	private $nit_empresa ;
	private $documento_apren;
	private $documento;
	private $documento_cof;
	private $alternativa_prac ;
	private $observacion;



	
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

	public function guardarBitacora()
	{
		$sql = "INSERT INTO tbl_bitacora (fecha_bitacora, alternativa_prac, fecha_inicial, fecha_final, id_ciudad, nit_empresa, documento_apren,documento_cof) values  (:fecha_bitacora, :alternativa_prac, :fecha_inicial, :fecha_final, :id_ciudad, :nit_empresa, :documento_apren,:documento_cof) ";


		try {

			$query = $this->db->prepare($sql);
			$query->bindValue(":fecha_bitacora", $this->__GET("fecha_bitacora") );
			$query->bindValue(":fecha_inicial", $this->__GET("fecha_inicial") );
			$query->bindValue(":fecha_final", $this->__GET("fecha_final") );
			$query->bindValue(":id_ciudad", $this->__GET("id_ciudad") );
			$query->bindValue(":nit_empresa", $this->__GET("nit_empresa") );
			$query->bindValue(":documento_apren", $this->__GET("documento_apren") );
			$query->bindValue(":documento_cof", $this->__GET("documento_cof") );		
			$query->bindValue(":alternativa_prac", $this->__GET("alternativa_prac") );

			$query->execute();

			return $this->db->lastInsertId();

		} catch (Exception $e) {

			return 0;

		}

	}
	public function guardarActividad()
	{
		$sql = "INSERT INTO tbl_act_bitacora (actividad, aprendizajes, dificultades, relacionadaConPrograma, id_bitacora) VALUES (:actividad,:aprendizajes,:dificultades,:relacionadaConPrograma,:id_bitacora)";


		try {

			$query = $this->db->prepare($sql);
			$query->bindValue(":actividad", $this->__GET("actividad") );
			$query->bindValue(":dificultades", $this->__GET("dificultades") );
			$query->bindValue(":aprendizajes", $this->__GET("aprendizajes") );
			$query->bindValue(":relacionadaConPrograma", $this->__GET("relacionadaConPrograma") );
			$query->bindValue(":id_bitacora", $this->__GET("id_bitacora") );
			
			return	$query->execute();

			
		} catch (Exception $e) {

			return 0;

		}
	}
	public function guardarObservaciones()
	{
		$sql = "INSERT INTO tbl_observaciones( observacion, id_bitacora) VALUES (:observacion, :id_bitacora)";


		try {

			$query = $this->db->prepare($sql);
			$query->bindValue(":observacion", $this->__GET("observacion") );
			$query->bindValue(":id_bitacora", $this->__GET("id_bitacora") );
			
			return	$query->execute();

			
		} catch (Exception $e) {

			return 0;

		}
	}
	public function aprobarBitacora()
	{
		$sql = "UPDATE tbl_bitacora SET aprobada=1 WHERE id_bitacora=:id_bitacora";


		try {

			$query = $this->db->prepare($sql);
			$query->bindValue(":id_bitacora", $this->__GET("id_bitacora") );
			
			return	$query->execute();

			
		} catch (Exception $e) {

			return 0;

		}
	}

		public function revisarBitacora()
	{
		$sql = "UPDATE tbl_bitacora SET revisada=1 WHERE id_bitacora=:id_bitacora";


		try {

			$query = $this->db->prepare($sql);
			$query->bindValue(":id_bitacora", $this->__GET("id_bitacora") );
			
			return	$query->execute();

			
		} catch (Exception $e) {

			return 0;

		}

	}

	public function misBitacoras()
	{
	
		$sql="SELECT * FROM tbl_bitacora where documento_apren= '".$_SESSION["documento"]."'";


		$query = $this->db->prepare($sql);
	
		$query->execute();
		return $query->fetchAll();	
	}

	public function detallesBitacora()
	{

		$sql="SELECT b.fecha_bitacora, b.alternativa_prac, b.fecha_inicial, b.fecha_final, b.id_ciudad, b.nit_empresa, b.documento_apren,b.documento_cof,b.aprobada,b.revisada, a.nombres,a.apellidos,a.telefono,a.correo,a.id_cadena,a.id_programa,a.numero_ficha,ac.actividad, ac.aprendizajes, ac.dificultades, ac.relacionadaConPrograma,cad.cadena,prog.nombre as programa,m.municipio,e.empresa,e.direccion,al.alternativa,cof.Nombres,cof.correo as correo_cof,cof.telefono as telefono_cof
		FROM tbl_bitacora as b 
		left join tbl_aprendiz as a on b.documento_apren=a.documento
		left join tbl_coformador as cof on b.documento_cof=cof.documento 
		left join tbl_act_bitacora as ac on b.id_bitacora = ac.id_bitacora 
		left join tbl_cadena as cad on a.id_cadena = cad.id_cadena
		left join tbl_programa as prog on a.id_programa = prog.id_programa
		left join tbl_municipio as m on b.id_ciudad = m.id_municipio
		left join tbl_empresa as e on b.nit_empresa = e.nit_empresa
		left join tbl_alternativapractica as al on b.alternativa_prac = al.id_Alternativa
		where b.id_bitacora=:id_bitacora";


		$query = $this->db->prepare($sql);
		$query->bindValue(":id_bitacora", $this->__GET("id_bitacora") );
		$query->execute();
		return $query->fetch();	
	}

	public function listarActividades()
	{

		$sql="SELECT b.id_bitacora, ac.* FROM tbl_act_bitacora as ac left join tbl_bitacora as b on b.id_bitacora = ac.id_bitacora 
		where ac.id_bitacora=:id_bitacora";


		$query = $this->db->prepare($sql);
		$query->bindValue(":id_bitacora", $this->__GET("id_bitacora") );
		$query->execute();
		return $query->fetchAll();	
	}

		public function listarObservaciones()
	{
		$sql="SELECT * FROM tbl_observaciones  where id_bitacora= :id_bitacora  ";


		$query = $this->db->prepare($sql);
		$query->bindValue(":id_bitacora", $this->__GET("id_bitacora") );
		$query->execute();
		return $query->fetchAll();

	}
	

}