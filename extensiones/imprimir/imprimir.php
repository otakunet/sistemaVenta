<?php 


require_once("src/Codadry/JY/Epl/ExisteImpresoraWindows.php");
require_once("src/Codadry/JY/Epl/ImprimirEpl.php");

$existeImpresora = new ExisteImpresoraWindows();
$elp= new ImprimirEpl();

$impresora = "impresora";

$texto1 = "quiero ser exitoso";
$texto2 = "sere exitoso y no me dejare pisotear";

if($existeImpresora->verificarImpresora($impresora, false)){

$etiqueta = $elp->escribirTexto($texto1, 170, 10, 1, false, 0, 3, 3);
$etiqueta = $elp->escribirTexto($texto2, 200, 210, 4, false, 0, 3, 3);

$elp->imprimir($elp->construirEtiqueta($etiqueta, 1),$impresora, true, true);


}else{
	echo "no funciono";
}


 ?>