<?php 

require_once "../controladores/dolar.controlador.php";
require_once "../modelos/dolar.modelo.php";



class dolarAjax{


	 public function dolarPrecio(){

	 	$respuesta = ControladorDolar::ctrMostrarPrecioDolar();
		echo json_encode($respuesta);

	 }

	


}

if(isset($_POST['dolar'])){

$dolar = new dolarAjax();
$dolar->dolarPrecio();

}






 ?>