<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/categorias.controlador.php";
require_once "controladores/productos.controlador.php";
require_once "controladores/clientes.controlador.php";
require_once "controladores/ventas.controlador.php";
require_once "controladores/dolar.controlador.php";
require_once "controladores/prueba.controlador.php";

require_once("extensiones/imprimir/src/Codadry/JY/Epl/ExisteImpresoraWindows.php");
require_once("extensiones/imprimir/src/Codadry/JY/Epl/ImprimirEpl.php");
require_once("extensiones/imprimir/src/Codadry/JY/Epl/texto.php");

require_once "modelos/usuarios.modelo.php";
require_once "modelos/categorias.modelo.php";
require_once "modelos/productos.modelo.php";
require_once "modelos/clientes.modelo.php";
require_once "modelos/ventas.modelo.php";
require_once "modelos/dolar.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();