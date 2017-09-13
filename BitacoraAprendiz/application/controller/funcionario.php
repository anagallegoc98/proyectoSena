<?php 
class Funcionario extends Controller
{
	private $modelFuncionario = null;

	function __construct()
	{
		$this->modelFuncionario = $this->loadModel("modelFuncionario");
		$this->modelFicha = $this->loadModel("modelFicha");
		$this->modelBitacora = $this->loadModel("modelBitacora");
	}


	public function index()
	{
		$programa= $this->modelFuncionario -> listarprograma();
		$fichas= $this->modelFuncionario -> listarFicha();

		$this->layout="layoutFuncionario";
		$this->render("verProgramas", array('programa' =>$programa,'fichas'=>$fichas));
		
		
	}
	
	public function perfilFuncionario()
	{	

		$this->layout="layoutFuncionario";
		$this->render("perfilFuncionario");
		


	}


	public function verProgramas()
	{
		$programa= $this->modelFuncionario -> listarprograma();
		$fichas= $this->modelFuncionario -> listarFicha();

		$this->layout="layoutFuncionario";
		$this->render("verProgramas", array('programa' =>$programa,'fichas'=>$fichas));

		
		
	}
	public function aprendizxFicha($numero_ficha)
	{		
		$this->modelFicha->__SET("numero_ficha",$numero_ficha);

		$aprendices= $this->modelFicha->listarAprendizxFicha();

		$this->layout="layoutFuncionario";
		$this->render("aprendizxFicha", array('numero_ficha' => $numero_ficha, "aprendices" => $aprendices ));
	}

	public function listarBitacoras()
	{
		$bitacora= $this->modelBitacora -> misBitacoras();
	
		$this->layout="layoutFuncionario";
		$this->render("verBitacoras", array( "bitacora" => $bitacora ));
		
		
	}
	public function detallesBitacora($id_bitacora)
	{
		$this->modelBitacora->__SET("id_bitacora",$id_bitacora);

		$bitacora= $this->modelBitacora->detallesBitacora();
		$actividades=$this->modelBitacora -> listarActividades();		
		$observaciones=$this->modelBitacora -> listarObservaciones();

		$this->layout="layoutCoformador";
		$this->render("detallesBitacora", array('id_bitacora' => $id_bitacora,'bitacora'=>$bitacora,"actividades" => $actividades,"observaciones"=>$observaciones));
		

	}
	


	
	public function guardarFuncionario()
	{
		$nombres=$_POST["txtNombre"]; 
		$apellidos = $_POST["txtApellido"]; 
		$correo=  $_POST["txtCorreo"]; 
		$telefono= $_POST["txtTelefono"] ; 
		$documento= $_POST["txtDocumento_fun"] ; 
		$id_documento=  $_POST["sltTipodocumento"]; 
		$id_cadena= $_POST["sltCadena"] ;


		$this->modelFuncionario->__SET("nombres", $nombres);
		$this->modelFuncionario->__SET("apellidos",$apellidos);
		$this->modelFuncionario->__SET("correo",$correo);
		$this->modelFuncionario->__SET("telefono",$telefono);
		$this->modelFuncionario->__SET("documento",$documento);
		$this->modelFuncionario->__SET("id_documento",$id_documento);
		$this->modelFuncionario->__SET("id_cadena",$id_cadena);
		

		$retorno = $this->modelFuncionario->guardarFuncionario();

		if ($retorno != 0) {
			echo json_encode("Funcionario guardado exitosamente.");
		}else{
			echo json_encode("Oppss!! Ocurrio un problema. El funcionario no fue guardado. ");
		}

		return;
	}


	public function modificarFuncionario()
	{
		$nombres=$_POST["txtNombre"]; 
		$apellidos = $_POST["txtApellido"]; 
		$correo=  $_POST["txtCorreo"]; 
		$telefono= $_POST["txtTelefono"] ; 
		$documento_fun= $_POST["txtDocumento_fun"] ;
		$id_cadena= $_POST["sltCadena"] ;

		$this->modelFuncionario->__SET("nombres", $nombres);
		$this->modelFuncionario->__SET("apellidos",$apellidos);
		$this->modelFuncionario->__SET("correo",$correo);
		$this->modelFuncionario->__SET("telefono",$telefono);
		$this->modelFuncionario->__SET("documento_fun",$documento_fun);

		$this->modelFuncionario->__SET("id_cadena",$id_cadena);
		


		$retorno = $this->modelFuncionario->modificarFuncionario();

		if ($retorno != 0) {
			echo json_encode("Funcionario modificado.");
		}else{
			echo json_encode("Oppss!! Ocurrio un problema. El funcionario no fue modificado. ");
		}

		return;
	}
	public function eliminarFuncionario()
	{

		$documento_fun= $_POST["txtDocumento_fun"] ; 


		$this->modelFuncionario->__SET("documento_fun",$documento_fun);
		


		$retorno = $this->modelFuncionario->eliminarFuncionario();

		if ($retorno != 0) {
			echo json_encode("Eliminado.");
		}else{
			echo json_encode("Oppss!! Ocurrio un problema. El funcionario no fue ELiminado. ");
		}

		return;
	}

	public function detallesFuncionario()
	{	
		$documento= $_POST["txtdocumento"] ; 


		$this->modelFuncionario->__SET("documento",$documento);	


		$retorno = $this->modelFuncionario->detallesFuncionario();
		
		echo json_encode($retorno);
		
		
	}

	public function listarFuncionario()
	{
		$funcionario= $this->modelFuncionario -> listarFuncionario();
		echo json_encode($funcionario);

	}

	

	public function listarAprendiz()
	{
		$aprendiz= $this->modelFuncionario -> listarAprendiz();
		echo json_encode($aprendiz);

	}   
	
	public function listarFicha()
	{
		$funcionario= $this->modelFuncionario -> listarFicha();
		echo json_encode($funcionario);

	}
	public function listarCadena()
	{
		$funcionario= $this->modelFuncionario -> listarCadena();
		echo json_encode($funcionario);

	}
	public function listar_roles()
	{
		$funcionario= $this->modelLogin -> listar_roles();
		echo json_encode($funcionario);

	}
	

		public function listarFichas($id_programa)
	{
		$this->modelFuncionario->__SET("id_programa",$id_programa);

		$fichas= $this->modelFuncionario -> listarFicha();
		
		$this->layout = "layoutFuncionario";
		$this->render("verFichas", array('fichas'=>$fichas));
		

	} 

	public function actualizarPerfilFuncionario()
	{

		$this->modelFuncionario->__SET("nombres", $_POST["txtNombre"]);
		$this->modelFuncionario->__SET("apellidos",$_POST["txtApellido"]);
		$this->modelFuncionario->__SET("correo",$_POST["txtCorreo"]);
		$this->modelFuncionario->__SET("telefono",$_POST["txtTelefono"]);
		
		$retorno = $this->modelFuncionario->actualizarPerfilFuncionario();

		if ($retorno != 0) {
			echo json_encode("Datos Actualizados. los cambios se mostrarán en el proximo inicio de sesion.");
		}else{
			echo json_encode("Error, datos no actualizados.");
		}

		return;
	}
public function bitacorasAprendiz($documento_apren)
	{ 
		$this->modelFuncionario->__SET("documento_apren",$documento_apren);

		$bitacora= $this->modelFuncionario -> bitacorasxAprendiz();
		
		$this->layout="layoutFuncionario";
		$this->render("bitacorasAprendiz", array( "bitacora" => $bitacora));
		
		
	}

	public function revisarBitacora()
	{
		
		$this->modelBitacora->__SET("id_bitacora",$_POST["txtId_Bitacora"]);
		
		$retorno = $this->modelBitacora->revisarBitacora();

		if ($retorno != 0) {
			echo json_encode("Bitacora Aprobada.");
		}else{
			echo json_encode("Error No Se Ha Podido Aprobar esta bitacora. ");
		}

		return;
	}
 


}
?>