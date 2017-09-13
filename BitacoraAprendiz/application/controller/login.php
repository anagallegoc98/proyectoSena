<?php
class Login extends Controller
{

	private $modelLogin= null;

    function __construct()
    {
       $this->modelLogin= $this->loadModel("modelLogin");

   }

   public function index()
   {
    $this->render("index", null, false);
    
}

public function validarAprendiz(){

   $documento = $_POST["documento"];
   $contrasena = $_POST["contrasena"];
   $rol = $_POST["rol"];

   $this->modelLogin->__SET("documento", $documento);
   $this->modelLogin->__SET("id_rol", $rol);


   $resultado=$this->modelLogin->validarAprendiz();

   if($resultado != false){

    if($contrasena == $resultado->contrasena)
    {

        $_SESSION["isLogin"]= true;
        $_SESSION["documento"]= $resultado->documento;
        $_SESSION["nombres"]=$resultado->nombres;
        $_SESSION["apellidos"]=$resultado->apellidos;
        $_SESSION["correo"]=$resultado->correo;
        $_SESSION["telefono"]=$resultado->telefono;
        $_SESSION["id_cadena"]=$resultado->id_cadena;
        $_SESSION["cadena"]=$resultado->cadena;
        $_SESSION["id_programa"]=$resultado->id_programa;
        $_SESSION["programa"]=$resultado->programa;
        $_SESSION["numero_ficha"]=$resultado->numero_ficha;
        $_SESSION["id_Alternativa"]= $resultado->id_Alternativa;
        $_SESSION["nit_empresa"]= $resultado->nit_empresa;
        $_SESSION["empresa"]= $resultado->empresa;
        $_SESSION["telefono_e"]=$resultado->telefono_e;
        $_SESSION["Nombres"]= $resultado->Nombres;
        $_SESSION["direccion"]= $resultado->direccion;
        $_SESSION["documento_cof"]= $resultado->documento_c;
        $_SESSION["correo_c"]=$resultado->correo_c;
        $_SESSION["telefono_c"]=$resultado->telefono_c;

        echo json_encode(array("usuarioValido" => true, "mensaje"=> "Bienvenido al sistema", "rol" => $rol,));
    }
    else {
        echo json_encode(array("usuarioValido" => false, "mensaje"=> "usuario o contraseña no son validos"));
    }
}
else{
    echo json_encode(array("usuarioValido" => false, "mensaje"=> "usuario o contraseña no son validos"));

}
return;

}

public function validarFuncionario(){

   $documento = $_POST["documento"];
   $contrasena = $_POST["contrasena"];
   $rol = $_POST["rol"];

   $this->modelLogin->__SET("documento", $documento);
   $this->modelLogin->__SET("id_rol", $rol);


   $resultado=$this->modelLogin->validarFuncionario();

   if($resultado != false){

    if($contrasena == $resultado->contrasena)
    {

        $_SESSION["isLogin"]= true;
        $_SESSION["documento"]= $resultado->documento;
        $_SESSION["nombres"]=$resultado->nombres;
        $_SESSION["apellidos"]=$resultado->apellidos;
        $_SESSION["correo"]=$resultado->correo;
        $_SESSION["telefono"]=$resultado->telefono;
        $_SESSION["id_cadena"]=$resultado->id_cadena;
        $_SESSION["cadena"]=$resultado->cadena;
        // $_SESSION["id_programa"]=null;
        // $_SESSION["programa"]=null;
        // $_SESSION["numero_ficha"]=null;
        // $_SESSION["id_Alternativa"]=null;
        // $_SESSION["nit_empresa"]= null;
        // $_SESSION["empresa"]= null;
        // $_SESSION["telefono_e"]=null;
        // $_SESSION["Nombres"]=null;
        // $_SESSION["direccion"]= null;
        // $_SESSION["documento_cof"]=null;
        // $_SESSION["correo_c"]=null;
        // $_SESSION["telefono_c"]=null;


        echo json_encode(array("usuarioValido" => true, "mensaje"=> "Bienvenido al sistema", "rol" => $rol,));
    }
    else {
        echo json_encode(array("usuarioValido" => false, "mensaje"=> "usuario o contraseña no son validos"));
    }
}
else{
    echo json_encode(array("usuarioValido" => false, "mensaje"=> "usuario o contraseña no son validos"));

}
return;

}

public function validarCoformador(){

   $documento = $_POST["documento"];
   $contrasena = $_POST["contrasena"];
   $rol = $_POST["rol"];

   $this->modelLogin->__SET("documento", $documento);
   $this->modelLogin->__SET("id_rol", $rol);


   $resultado=$this->modelLogin->validarCoformador();

   if($resultado != false){

    if($contrasena == $resultado->contrasena)
    {

        $_SESSION["isLogin"]= true;
        $_SESSION["documento"]= $resultado->documento;
        $_SESSION["nombres"]=$resultado->Nombres;
        $_SESSION["apellidos"]=$resultado->Apellidos;
        $_SESSION["correo"]=$resultado->correo;
        $_SESSION["telefono"]=$resultado->telefono;
        $_SESSION["nit_empresa"]= $resultado->nit_empresa;
        $_SESSION["empresa"]= $resultado->empresa;
       


        echo json_encode(array("usuarioValido" => true, "mensaje"=> "Bienvenido al sistema", "rol" => $rol,));
    }
    else {
        echo json_encode(array("usuarioValido" => false, "mensaje"=> "usuario o contraseña no son validos"));
    }
}
else{
    echo json_encode(array("usuarioValido" => false, "mensaje"=> "usuario o contraseña no son validos"));

}
return;

}
public function validarEmpresa(){

   $documento = $_POST["documento"];
   $contrasena = $_POST["contrasena"];
   $rol = $_POST["rol"];

   $this->modelLogin->__SET("documento", $documento);
   $this->modelLogin->__SET("id_rol", $rol);


   $resultado=$this->modelLogin->validarEmpresa();

   if($resultado != false){

    if($contrasena == $resultado->contrasena)
    {

        $_SESSION["isLogin"]= true;
        $_SESSION["documento"]= $resultado->documento;
        $_SESSION["empresa"]= null;
        $_SESSION["nombres"]=null;
        $_SESSION["apellidos"]=null;
        $_SESSION["correo"]=$resultado->correo;
        $_SESSION["telefono"]=$resultado->telefono;
        $_SESSION["id_cadena"]=null;
        $_SESSION["id_programa"]=null;
        $_SESSION["numero_ficha"]=null;


        echo json_encode(array("usuarioValido" => true, "mensaje"=> "Bienvenido al sistema", "rol" => $rol,));
    }
    else {
        echo json_encode(array("usuarioValido" => false, "mensaje"=> "usuario o contraseña no son validos"));
    }
}
else{
    echo json_encode(array("usuarioValido" => false, "mensaje"=> "usuario o contraseña no son validos"));

}
return;

}

public function logout()
{
    session_destroy();
    session_unset();
    header('location: '.URL. 'login/index');
}

public function listar_roles()
{
    $roles= $this->modelLogin -> listar_roles();
    echo json_encode($roles);

}
}