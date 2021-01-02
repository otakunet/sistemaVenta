<?php 


static public function FunctionName()
{	$tabla = 'productos';
		$item = null;
		$valor = null;
		$orden = 'precio_venta';


		$respuestaProductos = ModeloProductos::mdlMostrarProductos($tabla, $item, $valor, $orden);

		return $respuestaProductos;
}	


	

 ?>