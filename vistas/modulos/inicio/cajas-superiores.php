<?php

  include "cajas-superiores-codigo.php"

?>

     <!--=====================================
        TOTAL EN DOLARES
        CONVERSION DE BOLIVARES
     ======================================-->

      <div class="col-lg-3 col-xs-6">

      <div class="small-box bg-green">
        
        <div class="inner">
          
          <h4><?php echo number_format($a,2) ?> $</h4>

          <p>Gasto en dolares de </p>
          <p>productos de compras</p>
        
        </div>
        
        <div class="icon">
          
          <i class="ion ion-social-usd"></i>
        
        </div>
        
        <a href="productos" class="small-box-footer">
          
          Más info <i class="fa fa-arrow-circle-right"></i>
        
        </a>

      </div>

    </div>

    <div class="col-lg-3 col-xs-6">

  <div class="small-box bg-teal-gradient">
    
    <div class="inner">
      
    <h4><?php  echo number_format($comprasTotal["comprasTotal"],2); ?> BsF</h4>

      <p>Gasto total de</p> 
      
      <p>productos de compras</p>
    
    </div>
    
    <div class="icon">
      
      <i class="ion ion-ios-cart"></i>
    
    </div>
    
    <a href="productos" class="small-box-footer">
      
      Más info <i class="fa fa-arrow-circle-right"></i>
    
    </a>

  </div>

</div>

<!--=====================================
        TOTAL EN DOLARES
        CONVERSION DE BOLIVARES
     ======================================-->

  <div class="col-lg-3 col-xs-6">

  <div class="small-box bg-green">
        
    <div class="inner">
          
      <h4><?php echo number_format($b,2); ?> $</h4>

      <p>Total de las ventas </p>

      <p>en dolares</p>
        
    </div>
        
    <div class="icon">
          
      <i class="ion ion-social-usd"></i>
        
    </div>
        
    <a href="ventas" class="small-box-footer">
          
      Más info <i class="fa fa-arrow-circle-right"></i>
        
    </a>

  </div>

</div>

<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-aqua">
    
    <div class="inner">
      
      <h4><?php echo number_format($ventas["total"],2); ?> Bsf</h4>

      <p>Total de las </p>
      <p>ventas</p>

    </div>
    
    <div class="icon">
      
      <i class="ion ion-social-usd"></i>
    
    </div>
    
    <a href="ventas" class="small-box-footer">
      
      Más info <i class="fa fa-arrow-circle-right"></i>
    
    </a>

  </div>

</div>

<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-green">
    
    <div class="inner">
    
      <h3><?php echo number_format($totalCategorias); ?></h3>

      <p>Categorías</p><br>
    
    </div>
    
    <div class="icon">
    
      <i class="ion ion-clipboard"></i>
    
    </div>
    
    <a href="categorias" class="small-box-footer">
      
      Más info <i class="fa fa-arrow-circle-right"></i>
    
    </a>

  </div>

</div>

<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-red">
  
    <div class="inner">
    
      <h3><?php echo number_format($totalProductos); ?></h3>

      <p>Productos</p><br>
    
    </div>
    
    <div class="icon">
      
      <i class="ion ion-ios-cart"></i>
    
    </div>
    
    <a href="productos" class="small-box-footer">
      
      Más info <i class="fa fa-arrow-circle-right"></i>
    
    </a>

  </div>

</div>

<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-yellow">
    
    <div class="inner">
    
      <h3><?php echo number_format($totalClientes); ?></h3>

      <p>Clientes</p><br>
  
    </div>
    
    <div class="icon">
    
      <i class="ion ion-person-add"></i>
    
    </div>
    
    <a href="clientes" class="small-box-footer">

      Más info <i class="fa fa-arrow-circle-right"></i>

    </a>

  </div>

</div>


