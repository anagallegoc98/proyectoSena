<?php

class Cadena extends Controller
{
	private $modelCadena = null;

	function __construct()
	{
		$this->modelCadena = $this->loadModel("modelCadena");
	}




	public function index()
	{
		require APP."view/_templates/header.php";
		
			//aca coloco las vistas que son diferentes para cada acción del sistema
		require APP."view/cadena/index.php";

		require APP."view/_templates/footer.php";
	}
	
	
	public function guardarCadena()
	{
		$cadena= $_POST["txtnom_cad"];
		$id_centro= $_POST["sltCentro"];


		$this->modelCadena->__SET("cadena",$cadena);
		$this->modelCadena->__SET("id_centro",$id_centro);
		


		$retorno = $this->modelCadena->guardarCadena();

		if ($retorno != 0) {
			echo json_encode("Cadena guardada exitosamente.");
		}else{
			echo json_encode("Oppss!! Ocurrio un problema. La Cadena no fue guardada. ");
		}

		return;
	}






	public function modificarCadena()
	{

		$id_cadena=$_POST["txtcod_cad"]; 
		$cadena= $_POST["txtnom_cad"];
		$id_centro= $_POST["sltCentro"];


		$this->modelCadena->__SET("id_cadena", $id_cadena);
		$this->modelCadena->__SET("cadena",$cadena);
		$this->modelCadena->__SET("id_centro",$id_centro);
		
		

		$retorno = $this->modelCadena->modificarCadena();

		if ($retorno != 0) {
			echo json_encode("Cadena modificada.");
		}else{
			echo json_encode("Oppss!! Ocurrio un problema. La Cadena no fue modificada. ");
		}

		return;
	}



	public function eliminarCadena()
	{

		$id_cadena=$_POST["txtcod_cad"]; 


		$this->modelCadena->__SET("id_cadena",$id_cadena);
		


		$retorno = $this->modelCadena->eliminarCadena();

		if ($retorno != 0) {
			echo json_encode("Cadena Eliminada exitosamente.");
		}else{
			echo json_encode("Oppss!! Ocurrio un problema. La Cadena no fue Eliminada. ");
		}

		return;
	}
		public function listarCentro()
	{
	$cadena= $this->modelCadena -> listarCentro();
    echo json_encode($cadena);	
	}

	public function listarCadena()
	{	
		$cadena= $this->modelCadena -> listarCadena();
		echo json_encode($cadena);

	}



}

