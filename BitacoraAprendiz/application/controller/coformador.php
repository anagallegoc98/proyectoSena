<?php 
class Coformador extends Controller
{
	private $modelCoformador = null;

	function __construct()
	{
		$this->modelCoformador = $this->loadModel("modelCoformador");
		$this->modelBitacora = $this->loadModel("modelBitacora");
	}


	public function index()
	{
		$this->layout="layoutCoformador";
		$this->render("verAprendices");
		
		
	}

	public function perfilCoformador()
	{
		$this->layout="layoutCoformador";
		$this->render("perfilCoformador");
		
	}

	public function verAprendices()
	{
		$this->layout="layoutCoformador";
		$this->render("verAprendices");
		
		
	}

	public function guardarCoformador()
	{
		$nombres=$_POST["txtNombre"]; 
		$apellidos = $_POST["txtApellido"]; 
		$correo=  $_POST["txtCorreo"]; 
		$telefono= $_POST["txtTelefono"] ; 
		$documento= $_POST["txtDocumento_cof"] ; 
		$id_documento=  $_POST["sltTipodocumento"]; 
		$nit_empresa= $_POST["txtNitEmpresa"] ;


		$this->modelCoformador->__SET("nombres", $nombres);
		$this->modelCoformador->__SET("apellidos",$apellidos);
		$this->modelCoformador->__SET("correo",$correo);
		$this->modelCoformador->__SET("telefono",$telefono);
		$this->modelCoformador->__SET("documento",$documento);
		$this->modelCoformador->__SET("id_documento",$id_documento);
		$this->modelCoformador->__SET("nit_empresa",$nit_empresa);
		

		$retorno = $this->modelCoformador->guardarCoformador();

		if ($retorno != 0) {
			echo json_encode("Coformador guardado exitosamente.");
		}else{
			echo json_encode("Oppss!! Ocurrio un problema. El Coformador no fue guardado. ");
		}

		return;
	}


	public function modificarCoformador()
	{
		$nombres=$_POST["txtNombre"]; 
		$apellidos = $_POST["txtApellido"]; 
		$correo=  $_POST["txtCorreo"]; 
		$telefono= $_POST["txtTelefono"] ; 
		$documento= $_POST["txtDocumento_cof"] ; 
		$id_documento=  $_POST["sltTipodocumento"]; 
		$nit_empresa= $_POST["txtNitEmpresa"] ;


		$this->modelCoformador->__SET("nombres", $nombres);
		$this->modelCoformador->__SET("apellidos",$apellidos);
		$this->modelCoformador->__SET("correo",$correo);
		$this->modelCoformador->__SET("telefono",$telefono);
		$this->modelCoformador->__SET("documento",$documento);
		$this->modelCoformador->__SET("id_documento",$id_documento);
		$this->modelCoformador->__SET("nit_empresa",$nit_empresa);


		
	$retorno = $this->modelCoformador->modificarCoformador();

	if ($retorno != 0) {
		echo json_encode("Coformador modificado.");
	}else{
		echo json_encode("Oppss!! Ocurrio un problema. El Coformador no fue modificado. ");
	}


	return;
}
public function eliminarCoformador()
{

	$documento= $_POST["txtDocumento_cof"] ; 


	$this->modelCoformador->__SET("documento",$documento);



	$retorno = $this->modelCoformador->eliminarCoformador();

	if ($retorno != 0) {
		echo json_encode("Eliminado.");
	}else{
		echo json_encode("Oppss!! Ocurrio un problema. El Coformador no fue ELiminado. ");
	}

	return;
}

public function actualizarPerfilCoformador()
{

	$this->modelCoformador->__SET("nombres", $_POST["txtNombre"]);
	$this->modelCoformador->__SET("apellidos",$_POST["txtApellido"]);
	$this->modelCoformador->__SET("correo",$_POST["txtCorreo"]);
	$this->modelCoformador->__SET("telefono",$_POST["txtTelefono"]);

	$retorno = $this->modelCoformador->actualizarPerfilCoformador();

	if ($retorno != 0) {
		echo json_encode("Datos Actualizados. los cambios se mostrarán en el proximo inicio de sesion.");
	}else{
		echo json_encode("Error, datos no actualizados.");
	}

	return;
}



public function listarCoformador()
{
	$Coformador= $this->modelCoformador -> listarCoformador();
	echo json_encode($Coformador);

}

public function listarAprendiz()
{
	$aprendiz= $this->modelCoformador -> listarAprendiz();
	echo json_encode($aprendiz);

}    
public function BitacorasAprendiz($documento_apren)
{ 
	$this->modelCoformador->__SET("documento_apren",$documento_apren);

	$bitacora= $this->modelCoformador -> bitacorasxAprendiz();

	$this->layout="layoutCoformador";
	$this->render("bitacorasAprendiz", array( "bitacora" => $bitacora));


}

public function listarBitacoras()
{
	$bitacora= $this->modelCoformador -> listarBitacoras();

	$this->layout="layoutCoformador";
	$this->render("listarBitacoras", array( "bitacora" => $bitacora ));


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
public function guardarObservaciones()
{


	$this->modelBitacora->__SET("observacion", $_POST["txtObservaciones"]);

	$this->modelBitacora->__SET("id_bitacora",$_POST["txtId_Bitacora"]);

	$retorno = $this->modelBitacora->guardarObservaciones();



	if ($retorno != 0) {
		echo json_encode("Guardada.");
	}else{
		echo json_encode("Error No Guarada. ");
	}

	return;
}
public function aprobarBitacora()
{

	$this->modelBitacora->__SET("id_bitacora",$_POST["txtId_Bitacora"]);

	$retorno = $this->modelBitacora->aprobarBitacora();

	if ($retorno != 0) {
		echo json_encode("Bitacora Aprobada.");
	}else{
		echo json_encode("Error No Se Ha Podido Aprobar esta bitacora. ");
	}

	return;
}

}
?>