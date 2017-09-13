<?php

class Ficha extends Controller
{
	private $modelFicha = null;

	function __construct()
	{
		$this->modelFicha = $this->loadModel("modelFicha");
	}




	public function index()
	{
		require APP."view/_templates/header.php";		
		require APP."view/ficha/index.php";
		require APP."view/_templates/footer.php";
	}
	
	public function guardarFicha()
	{
		$numero_ficha=$_POST["txtnum_fic"]; 
		$id_programa= $_POST["sltPrograma"];


		$this->modelFicha->__SET("numero_ficha", $numero_ficha);
		$this->modelFicha->__SET("id_programa",$id_programa);
		


		$retorno = $this->modelFicha->guardarFicha();

		if ($retorno != 0) {
			echo json_encode("Ficha guardada exitosamente.");
		}else{
			echo json_encode("Oppss!! Ocurrio un problema. La Ficha no fue guardada. ");
		}

		return;
	}


	public function modificarFicha()
	{

		$numero_ficha=$_POST["txtnum_fic"]; 
		$id_programa= $_POST["sltPrograma"];


		$this->modelFicha->__SET("numero_ficha", $numero_ficha);
		$this->modelFicha->__SET("id_programa",$id_programa);
		



		$retorno = $this->modelFicha->modificarFicha();

		if ($retorno != 0) {
			echo json_encode("Ficha modificada.");
		}else{
			echo json_encode("Oppss!! Ocurrio un problema. La Ficha no fue modificada. ");
		}

		return;
	}



	public function eliminarFicha()
	{

		$numero_ficha= $_POST["txtnum_fic"] ; 


		$this->modelFicha->__SET("numero_ficha",$numero_ficha);
		


		$retorno = $this->modelFicha->eliminarFicha();

		if ($retorno != 0) {
			echo json_encode("Ficha Eliminada exitosamente.");
		}else{
			echo json_encode("Oppss!! Ocurrio un problema. La Ficha no fue Eliminada. ");
		}

		return;
	}
	public function listarPrograma()
	{
		$Ficha= $this->modelFicha -> listarPrograma();
		echo json_encode($Ficha);

	}
	public function listarFicha()
	{
		$Ficha= $this->modelFicha -> listarFicha();
		echo json_encode($Ficha);

	}


	


}