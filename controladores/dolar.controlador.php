<?php 


class ControladorDolar{ 


	static public function ctrMostrarPrecioDolar(){

		$tabla = "dolar";

		$respuesta = ModeloDolar::mdlMostrarPrecioDolar($tabla);

		return $respuesta;

	}	
 }



 ?>



