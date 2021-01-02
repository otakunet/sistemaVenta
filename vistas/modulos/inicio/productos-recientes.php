<?php

$item = null;
$valor = null;
$orden = "id";

$productos = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);

 ?>


<div class="box box-primary">

  <div class="box-header with-border">

    <h3 class="box-title">Productos agregados recientemente</h3>

    <div class="box-tools pull-right">

      <button type="button" class="btn btn-box-tool" data-widget="collapse">

        <i class="fa fa-minus"></i>

      </button>

      <button type="button" class="btn btn-box-tool" data-widget="remove">

        <i class="fa fa-times"></i>

      </button>

    </div>

  </div>
  
  <div class="box-body">

    <ul class="products-list product-list-in-box">

    <?php

    $cantidadProducto = count($productos);

    if ($cantidadProducto == 0) {

      echo "<div class='callout callout-warning'>

              <h4>No tienes productos en el inventario</h4>
                  <p><a href='productos' >Agregar productos</a></p> 
            </div>";

    }else { 

      if ($cantidadProducto < 10) {
       
        for($i = 0; $i < $cantidadProducto; $i++){

          echo '<li class="item">

            <div class="product-img">

              <img src="'.$productos[$i]["imagen"].'" alt="Product Image">

            </div>

            <div class="product-info">

              <a href="" class="product-title">

                '.$productos[$i]["descripcion"].'

                <span class=" label-primary pull-right">'.number_format($productos[$i]["precio_venta"],2).' Bsf</span>

              </a>
        
           </div>

          </li>';

        }

      }else { 

        for($i = 0; $i < 10; $i++){

          echo '<li class="item">

            <div class="product-img">

              <img src="'.$productos[$i]["imagen"].'" alt="Product Image">

            </div>

            <div class="product-info">

              <a href="" class="product-title">

                '.$productos[$i]["descripcion"].'

                <span class="label label-warning pull-right">$'.$productos[$i]["precio_venta"].'</span>

              </a>
        
           </div>

          </li>';

        }

      }

     } 

    ?>

    </ul>

  </div>

  <div class="box-footer text-center">

    <a href="productos" class="uppercase">Ver todos los productos</a>
  
  </div>

</div>
