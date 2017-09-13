<?php


class Programa extends Controller
{
	private $modelPrograma= null;

	function __construct()
	{
		$this->modelPrograma = $this->loadModel("modelPrograma");
	}




	public function index()
	{
		require APP."view/_templates/header.php";
		
			//aca coloco las vistas que son diferentes para cada acción del sistema
		require APP."view/programa/index.php";

		require APP."view/_templates/footer.php";
	}
	
	
	public function guardarPrograma()
	{
		$id_programa= $_POST["txtcod_pro"];
		$nombre=$_POST["txtnom_pro"]; 
		$id_cadena= $_POST["sltCadena"];


		$this->modelPrograma->__SET("nombre", $nombre);
		$this->modelPrograma->__SET("id_programa",$id_programa);
		$this->modelPrograma->__SET("id_cadena",$id_cadena);
		


		$retorno = $this->modelPrograma->guardarPrograma();

		if ($retorno != 0) {
			echo json_encode("Programa guardado exitosamente.");
		}else{
			echo json_encode("Oppss!! Ocurrio un problema. El Programa no fue guardado. ");
		}

		return;
	}

	public function modificarPrograma()
	{

		$id_programa= $_POST["txtcod_pro"];
		$nombre=$_POST["txtnom_pro"]; 
		$id_cadena= $_POST["sltCadena"];


		$this->modelPrograma->__SET("nombre", $nombre);
		$this->modelPrograma->__SET("id_programa",$id_programa);
		$this->modelPrograma->__SET("id_cadena",$id_cadena);



		$retorno = $this->modelPrograma->modificarPrograma();

		if ($retorno != 0) {
			echo json_encode("Programa modificado exitosamente.");
		}else{
			echo json_encode("Oppss!! Ocurrio un problema. El Programa no fue modificado. ");
		}

		return;
	}


	public function eliminarPrograma()
	{

		$id_programa= $_POST["txtcod_pro"] ; 


		$this->modelPrograma->__SET("id_programa",$id_programa);



		$retorno = $this->modelPrograma->eliminarPrograma();

		if ($retorno != 0) {
			echo json_encode("Programa Elimidado.");
		}else{
			echo json_encode("Oppss!! Ocurrio un problema. El Programa no fue Elimidado. ");
		}

		return;

	}

	public function listarPrograma()
	{
	
		$programa= $this->modelPrograma -> listarprograma();
		echo json_encode($programa);

	} 
	
	public function listarProgramas()
	{
	
		$query= $this->modelPrograma -> listarprograma();
			$this->layout = "layoutFuncionario";
		$this->render("verAprendices", array('query'=>$query));
		

	} 

	
	

}