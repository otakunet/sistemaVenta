<?php 

require_once "conexion.php";


class ModeloDolar{

	static public function mdlMostrarPrecioDolar($tabla){


		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY ID DESC");

		$stmt -> execute();

		return $stmt -> fetchAll();



	}


	static public function mdlActualizarPrecioProducto($tabla,$item,$id,$valor){


		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item = $valor WHERE id = $id");


		$stmt -> execute();


	}
	
}







 ?>