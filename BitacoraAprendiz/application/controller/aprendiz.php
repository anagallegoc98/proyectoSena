<?php

class Aprendiz extends Controller
{
	private $modelAprendiz = null;
	private $modelBitacora = null;
	function __construct()
	{
		$this->modelAprendiz = $this->loadModel("modelAprendiz");
		$this->modelBitacora = $this->loadModel("modelBitacora");
	}


	public function index()
	{
		$bitacora= $this->modelBitacora -> misBitacoras();

		$this->layout="layoutAprendiz";
		$this->render("misBitacoras", array( "bitacora" => $bitacora ));
		
	}
	public function perfil_aprendiz()
	{
		$this->layout="layoutAprendiz";
		$this->render("perfil_aprendiz");
		
	}
	public function nuevaBitacora()
	{
		$this->layout="layoutAprendiz";
		$this->render("newBitacora");
	}

	public function detallesBitacora($id_bitacora)
	{
		$this->modelBitacora->__SET("id_bitacora",$id_bitacora);
		$bitacora= $this->modelBitacora -> detallesBitacora();
		$actividades=$this->modelBitacora -> listarActividades();		

		$this->layout="layoutAprendiz";
		$this->render("verBitacora", array('id_bitacora' => $id_bitacora,'bitacora' => $bitacora,"actividades" => $actividades ));
		

	}

	public function guardarAprendiz()
	{
		$nombres      =$_POST["txtNombre"]; 
		$apellidos    =$_POST["txtApellido"]; 
		$correo       =$_POST["txtCorreo"]; 
		$telefono     =$_POST["txtTelefono"] ; 
		$numero_ficha =$_POST["sltFicha"]; 
		$documento    =$_POST["txtDocumento_apren"] ; 
		$id_cadena    =$_POST["sltCadena"] ;
		$id_programa  =$_POST["sltCadena"];

		$this->modelAprendiz->__SET("nombres", $nombres);
		$this->modelAprendiz->__SET("apellidos",$apellidos);
		$this->modelAprendiz->__SET("correo",$correo);
		$this->modelAprendiz->__SET("telefono",$telefono);
		$this->modelAprendiz->__SET("numero_ficha",$numero_ficha);
		$this->modelAprendiz->__SET("documento",$documento);
		$this->modelAprendiz->__SET("id_cadena",$id_cadena);
		$this->modelAprendiz->__SET("id_programa", $id_programa);

		$retorno = $this->modelAprendiz->guardarAprendiz();

		if ($retorno != 0) {
			echo json_encode("Aprendiz guardado exitosamente.");
		}else{
			echo json_encode("Oppss!! Ocurrio un problema. El Aprendiz no fue guardado. ");
		}

		return;
	}


	public function modificarAprendiz()
	{
		$nombres      = $_POST["txtNombre"]; 
		$apellidos    = $_POST["txtApellido"]; 
		$correo       = $_POST["txtCorreo"]; 
		$telefono     = $_POST["txtTelefono"] ; 
		$numero_ficha = $_POST["sltFicha"]; 
		$documento    = $_POST["txtDocumento_apren"] ; 
		$id_cadena    = $_POST["sltCadena"] ;
		$id_programa  = $_POST["sltPrograma"];

		$this->modelAprendiz->__SET("nombres", $nombres);
		$this->modelAprendiz->__SET("apellidos",$apellidos);
		$this->modelAprendiz->__SET("correo",$correo);
		$this->modelAprendiz->__SET("telefono",$telefono);
		$this->modelAprendiz->__SET("numero_ficha",$numero_ficha);
		$this->modelAprendiz->__SET("documento",$documento);
		$this->modelAprendiz->__SET("id_cadena",$id_cadena);
		$this->modelAprendiz->__SET("id_programa", $id_programa);


		$retorno = $this->modelAprendiz->modificarAprendiz();

		if ($retorno != 0) {
			echo json_encode("Aprendiz modificado.");
		}else{
			echo json_encode("Oppss!! Ocurrio un problema. El Aprendiz no fue modificado. ");
		}

		return;
	}
	public function eliminarAprendiz()
	{

		$documento= $_POST["txtDocumento_apren"] ; 


		$this->modelAprendiz->__SET("documento",$documento);
		


		$retorno = $this->modelAprendiz->eliminarAprendiz();

		if ($retorno != 0) {
			echo json_encode("Eliminado.");
		}else{
			echo json_encode("Oppss!! Ocurrio un problema. El Aprendiz no fue ELiminado. ");
		}

		return;
	}

	public function actualizarPerfilAprendiz()
	{

		$this->modelAprendiz->__SET("documento", $_POST["txtDocumento_apren"]);		
		$this->modelAprendiz->__SET("nombres", $_POST["txtNombre"]);
		$this->modelAprendiz->__SET("nombres", $_POST["txtNombre"]);
		$this->modelAprendiz->__SET("apellidos",$_POST["txtApellido"]);
		$this->modelAprendiz->__SET("correo",$_POST["txtCorreo"]);
		$this->modelAprendiz->__SET("telefono",$_POST["txtTelefono"]);
		
		$retorno = $this->modelAprendiz->actualizarPerfilAprendiz();

		if ($retorno != 0) {
			echo json_encode("Datos Actualizados. los cambios se mostrarán en el proximo inicio de sesion.");
		}else{
			echo json_encode("Error, datos no actualizados.");
		}

		return;
	}

	public function misBitacoras()
	{  
		$bitacora= $this->modelBitacora -> misBitacoras();
		$this->layout="layoutAprendiz";
		$this->render("misBitacoras", array( "bitacora" => $bitacora ));
	}

	public function listarDocentes()
	{
		$aprendiz= $this->modelAprendiz -> listarDocentes();
		echo json_encode($aprendiz);

	}
	public function crearBitacora()
	{


		$this->modelBitacora->__SET("fecha_bitacora", $_POST["txtFechaActual"]);
		$this->modelBitacora->__SET("fecha_inicial",$_POST["txtFechaInicio"]);
		$this->modelBitacora->__SET("fecha_final",$_POST["txtFechaFin"]);
		$this->modelBitacora->__SET("id_ciudad",$_POST["sltCiudad"]);
		$this->modelBitacora->__SET("documento_apren",$_POST["txtDocumento_apren"]);
		$this->modelBitacora->__SET("documento_cof",$_POST["txtDocumento_cof"]);
		$this->modelBitacora->__SET("nit_empresa",$_POST["txtNit"]);
		$this->modelBitacora->__SET("alternativa_prac",$_POST["sltAlternativa"]);

		$retorno = $this->modelBitacora->guardarBitacora();

		$this->crearActividad($retorno);


		if ($retorno != 0) {
			echo json_encode("Bitacora Guardada.");
			
		}else{
			echo json_encode("Error Bitacora No Guarada. ");
		}

		return;
	}
	public function crearActividad($id_bitacora)
	{


		$this->modelBitacora->__SET("actividad", $_POST["txtActividades"]);
		$this->modelBitacora->__SET("dificultades",$_POST["txtDificultades"]);
		$this->modelBitacora->__SET("aprendizajes",$_POST["txtAprendizajes"]);
		$this->modelBitacora->__SET("relacionadaConPrograma",$_POST["rdbRelacion"]);
		$this->modelBitacora->__SET("id_bitacora",$id_bitacora);

		$retorno = $this->modelBitacora->guardarActividad();



		if ($retorno != 0) {
			echo json_encode("Actividad Guardada.");
		}else{
			echo json_encode("Error Actividad No Guarada. ");
		}

		return;
	}

	public function guardarActividadNueva()
	{


		$this->modelBitacora->__SET("actividad", $_POST["txtActividades"]);
		$this->modelBitacora->__SET("dificultades",$_POST["txtDificultades"]);
		$this->modelBitacora->__SET("aprendizajes",$_POST["txtAprendizajes"]);
		$this->modelBitacora->__SET("relacionadaConPrograma",$_POST["rdbRelacion"]);
		$this->modelBitacora->__SET("id_bitacora",$_POST["txtId_Bitacora"]);

		$retorno = $this->modelBitacora->guardarActividad();



		if ($retorno != 0) {
			echo json_encode("Actividad Guardada.");
		}else{
			echo json_encode("Error Actividad No Guarada. ");
		}

		return;
	}
	

	public function eliminarBitacora()
	{
		$id_bitacora   =$_POST["txtNombre"]; 

		$this->modelAprendiz->__SET("id_bitacora", $id_bitacora);
		

		$retorno = $this->modelAprendiz->eliminarBitacora();

		if ($retorno != 0) {
			echo json_encode("Bitacora Elinimada.");
		}else{
			echo json_encode("No Se Ha Podido Eliminar Su Bitacora. ");
		}

		return;
	}

	public function arrayBitacoras()
	{
		$bitacora= $this->modelBitacora -> detallesBitacora();
		echo json_encode($bitacora);
	}

	
	
	

	
}