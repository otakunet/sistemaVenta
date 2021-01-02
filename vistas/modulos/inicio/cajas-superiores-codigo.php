<?php 


$item = null;

$valor = null;

$orden = "id";

$a = 0;

$ventas = ControladorVentas::ctrSumaTotalVentas();

$dolar = ControladorDolar::ctrMostrarPrecioDolar();

$b = $ventas['total'] /$dolar[0][1];

$categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

$totalCategorias = count($categorias);

$clientes = ControladorClientes::ctrMostrarClientes($item, $valor);

$totalClientes = count($clientes);

$productos = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);

$totalProductos = count($productos);

$comprasTotal = ControladorProductos::ctrMostrarSumaCompras();

for ($i=0; $i < $totalProductos ; $i++) { 
 
  $r = $productos[$i][8]/$productos[$i][6];

  $a = $a + $r;

}

