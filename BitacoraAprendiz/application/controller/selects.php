<?php

class Selects extends Controller
{
	private $modelSelects = null;
		function __construct()
	{
		$this->modelSelects = $this->loadModel("modelSelects");
		
	}
	public function listarCiudad()
	{
		$ciudad= $this->modelSelects -> listarCiudad();
		echo json_encode($ciudad);

	}

	public function listarAlternativa()
	{
		$ciudad= $this->modelSelects -> listarAlternativa();
		echo json_encode($ciudad);

	}	
	public function listarCadena()
	{	
		$cadena= $this->modelSelects -> listarCadena();
		echo json_encode($cadena);

	}
	public function listarPrograma()
	{	
		$programa= $this->modelSelects -> listarPrograma();
		echo json_encode($programa);

	}
	public function listarFicha()
	{	
		$ficha= $this->modelSelects -> listarFicha();
		echo json_encode($ficha);

	}
}