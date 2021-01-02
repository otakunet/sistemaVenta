<?php 


/**
 * 
 */
class Url{
	
	static public function texto($nombre){

		$prueba = Prueba::textoPrueba($nombre);

	}
	

}

if (isset($_POST['hola'])) {

	$nombre = $_POST['hola'];
	$url = Url::texto($nombre);
	
}

