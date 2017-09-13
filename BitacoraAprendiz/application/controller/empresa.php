<?php

class Empresa extends Controller
{
	private $modelEmpresa = null;

	function __construct()
	{
		$this->modelEmpresa = $this->loadModel("modelEmpresa");
	}
	public function index()
	{
		$this->layout="layoutEmpresa";
		$this->render("verAprendices");

		
	}

	public function perfilEmpresa()
	{
		$this->layout="layoutEmpresa";
		$this->render("perfilEmpresa");

		
	}

	public function administrarCoformador()
	{
		$this->layout="layoutEmpresa";
		$this->render("administrarCoformador");

		
	}
	
	public function detallesCoformador($documento)
	{
		$this->modelEmpresa->__SET("documento",$documento);

		$coformador= $this->modelEmpresa->detallesCoformador();

		$this->layout="layoutEmpresa";
		$this->render("detallesCoformador", array('documento' => $documento,'coformador'=>$coformador ));

		
	}
	
	public function guardarEmpresa()
	{
		$nit= $_POST["txtNit"];
		$empresa= $_POST["txtNombre"];
		$telefono= $_POST["txtTelefono"];
		$correo= $_POST["txtCorreo"];
		$direccion= $_POST["txtDireccion"];


		$this->modelEmpresa->__SET("nit",$nit);
		$this->modelEmpresa->__SET("empresa",$empresa);
		$this->modelEmpresa->__SET("telefono",$telefono);
		$this->modelEmpresa->__SET("correo",$correo);
		$this->modelEmpresa->__SET("direccion",$direccion);


		$retorno = $this->modelEmpresa->guardarEmpresa();

		if ($retorno != 0) {
			echo json_encode("Empresa Guardada.");
		}else{
			echo json_encode("Oppss!! Ocurrio un problema. La Empresa no fue guardada. ");
		}

		return;
	}


	public function modificarEmpresa()
	{
		$nit= $_POST["txtNit"];
		$empresa= $_POST["txtNombre"];
		$telefono= $_POST["txtTelefono"];
		$correo= $_POST["txtCorreo"];
		$direccion= $_POST["txtDireccion"];



		$this->modelEmpresa->__SET("nit_empresa",$nit);
		$this->modelEmpresa->__SET("empresa",$empresa);
		$this->modelEmpresa->__SET("telefono",$telefono);
		$this->modelEmpresa->__SET("correo",$correo);
		$this->modelEmpresa->__SET("direccion",$direccion);


	


		$retorno = $this->modelEmpresa->modificarEmpresa();

		if ($retorno != 0) {
			echo json_encode("Empresa Modificada.");
		}else{
			echo json_encode("Oppss!! Ocurrio un problema. La Empresa no fue modificada. ");
		}

		return;
	}


	public function eliminarEmpresa($nit)
	{

		$nit= $_POST["txtNit"]; 


		$this->modelEmpresa->__SET("nit",$nit);
		


		$retorno = $this->modelEmpresa->eliminarEmpresa();

		if ($retorno != 0) {
			echo json_encode("Empresa Eliminada exitosamente.");
		}else{
			echo json_encode("Oppss!! Ocurrio un problema. La Empresa no fue Eliminada. ");
		}

		return;
	}

	
	public function verAprendices()
	{
		$this->layout="layoutEmpresa";
		$this->render("verAprendices");
		
		
	}

	public function listarAprendiz()
	{
		$aprendiz= $this->modelEmpresa -> listarAprendiz();
		echo json_encode($aprendiz);

	}  
	public function listarEmpresa()
	{
		$empresa= $this->modelEmpresa -> listarEmpresa();
		echo json_encode($empresa);

	} 
	public function listarCoformador()
	{
		$coformador= $this->modelEmpresa -> listarCoformador();
		echo json_encode($coformador);

	} 

	public function asignarAprendiz($documento)
	{
		$this->layout="layoutEmpresa";
		$this->render("asignarAprendizACoformador", array('documento' => $documento));

	}

	public function asignarAprendizACoformador()
	{
		
		$documento_a= $_POST["txtDocumento_a"];
		$documento_c=$_POST["txtDocumento_c"];
		
		$this->modelEmpresa->__SET("documento_a", $documento_a);
		$this->modelEmpresa->__SET("documento_c", $documento_c);


		$retorno = $this->modelEmpresa->asignarAprendizACoformador();

		if ($retorno != 0) {
			echo json_encode("Aprendiz asignado.");
		}else{
			echo json_encode("Oppss!! Ocurrio un problema. Aprendiz no ha sido asignado. ");
		}

		return;
	} 


}

