<?php

class Admin extends Controller
{
	private $modelAdmin = null;

	function __construct()
	{
		$this->modelAdmin = $this->loadModel("modelAdmin");
		$this->modelFicha = $this->loadModel("modelFicha");
		$this->modelPrograma = $this->loadModel("modelPrograma");
	}

	public function index()
	{
		
		$this->layout="layoutAdministrador";
		$this->render("misBitacoras");
		
	}
	
	public function administrarEmpresa()
	{
		$this->layout="layoutAdministrador";
		$this->render("administrarEmpresa");

	}

	
	public function administrarAprendiz()
	{
		$this->layout="layoutAdministrador";
		$this->render("administrarAprendiz");

	}
	public function administrarCadena()
	{
		$this->layout="layoutAdministrador";
		$this->render("administrarCadena");

	}
	public function administrarCentro()
	{
		$this->layout="layoutAdministrador";
		$this->render("administrarCentro");

	}
	public function administrarFicha()
	{
		$this->layout="layoutAdministrador";
		$this->render("administrarFicha");

	}


	public function administrarFuncionario()
	{
		$this->layout="layoutAdministrador";
		$this->render("administrarFuncionario");

	}

	public function administrarPrograma()
	{
		$this->layout="layoutAdministrador";
		$this->render("administrarPrograma");

	}

	public function administrarRegional()
	{
		$this->layout="layoutAdministrador";
		$this->render("administrarRegional");

	}

	public function detallesFuncionario($documento)
	{
		$this->modelAdmin->__SET("documento",$documento);

		$funcionario= $this->modelAdmin->detallesFuncionario();

		$this->layout="layoutAdministrador";
		$this->render("funcionario/detallesFuncionario", array('documento' => $documento,'funcionario'=>$funcionario ));
		

	}

	public function detallesAprendiz($documento)
	{
		$this->modelAdmin->__SET("documento",$documento);

		$aprendiz= $this->modelAdmin->detallesAprendiz();

		$this->layout="layoutAdministrador";
		$this->render("aprendiz/detallesAprendiz", array('documento' => $documento,'aprendiz'=>$aprendiz ));
		

	}
	


	public function aprendizxFicha($numero_ficha)
	{		
		$this->modelFicha->__SET("numero_ficha",$numero_ficha);

		$aprendices= $this->modelFicha->listarAprendizxFicha();

		$this->layout="layoutAdministrador";
		$this->render("ficha/aprendizxFicha", array('numero_ficha' => $numero_ficha, "aprendices" => $aprendices ));
	}

	public function detallesEmpresa($nit_empresa)
	{
		$this->modelAdmin->__SET("nit_empresa",trim($nit_empresa));
		
		$empresa= $this->modelAdmin->listarEmpresa();

		$this->layout="layoutAdministrador";
		$this->render("empresa/detallesEmpresa", array('nit_empresa' => $nit_empresa,'empresa'=>$empresa));
	}

	public function fichasxPrograma($id_programa)
	{		
		$this->modelPrograma->__SET("id_programa",$id_programa);

		$fichas= $this->modelPrograma->listarfichasxPrograma();

		$this->layout="layoutAdministrador";
		$this->render("programa/fichasxPrograma", array('id_programa' => $id_programa, "fichas" => $fichas ));
	}

	public function listarAprendiz()
	{
		$aprendiz= $this->modelAdmin -> listarAprendiz();
		echo json_encode($aprendiz);

	}  
	public function asignarFichas($documento)
	{
		
		$this->layout="layoutAdministrador";
		$this->render("asignarFichasAFuncionario", array('documento' => $documento));
		
	}

	public function asignarAprendiz($nit)
	{
		$this->layout="layoutAdministrador";
		$this->render("asignarAprendizAEmpresa", array('nit' => $nit));	
	}



	public function asignarFichasAFuncionario()
	{

		$numero_ficha =$_POST["txtFicha"];
		$documento    =$_POST["txtDocumento"];
		
		$this->modelAdmin->__SET("numero_ficha", $numero_ficha);
		$this->modelAdmin->__SET("documento", $documento);


		$retorno = $this->modelAdmin->asignarFichasAFuncionario();

		if ($retorno != 0) {
			echo json_encode("fichas asignadas.");
		}else{
			echo json_encode("Oppss!! Ocurrio un problema. las Fichas no han sigo asignadas. ");
		}

		return;
	}

	public function asignarAprendizAEmpresa()
	{

		$nit_empresa = $_POST["txtNit"];
		$documento   =$_POST["txtDocumento"];
		
		$this->modelAdmin->__SET("nit_empresa", $nit_empresa);
		$this->modelAdmin->__SET("documento", $documento);


		$retorno = $this->modelAdmin->asignarAprendizAEmpresa();

		if ($retorno != 0) {
			echo json_encode("Empresa asignada.");
		}else{
			echo json_encode("Oppss!! Ocurrio un problema. la Empresa no ha sido asignada. ");
		}

		return;
	}

}

?>

