<?php 
require_once "../controladores/controlador.php";
require_once "../modelos/crud.php";

class AjaxProductos{

public $idProducto;

public function verProducto(){
   
      $valor = $this->idProducto;

      $respuesta = MvcController::mostrarProductoController($valor);

      echo json_encode($respuesta);

    

  }

public $buscar; 
public function buscarProductos(){

   $valor = $this->buscar;

   $respuesta = MvcController::buscarProductosController($valor);

   echo json_encode($respuesta);

}

public $contrasena; 
public $usuario;
public function validarContra(){

   $valor = $this->contrasena;
   $valor2 = $this->usuario;

   $respuesta = MvcController::validarContraController($valor,$valor2);

   echo json_encode($respuesta);

}

}




if(isset($_POST["idProducto"])){

   $Producto = new AjaxProductos();
   $Producto -> idProducto = $_POST["idProducto"];
   $Producto -> verProducto();

}


if(isset($_POST["buscar"])){

   $Productobuscar = new AjaxProductos();
   $Productobuscar -> buscar = $_POST["buscar"];
   $Productobuscar -> buscarProductos();

}

if(isset($_POST["usuario"])){

   $Productobuscar = new AjaxProductos();
   $Productobuscar -> contrasena = $_POST["contrasena"];
   $Productobuscar -> usuario = $_POST["usuario"];

   $Productobuscar -> validarContra();

}

?>