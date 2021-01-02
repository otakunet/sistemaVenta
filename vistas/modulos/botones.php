<?php 


class Botones
{
	
	function mostrar()
	{
		
		$stmt = Conexion::conectar()->prepare("SELECT * FROM productos");

		$stmt -> execute();

	    return  $stmt -> fetch();



	}
}



if (isset($_POST['actualizarPrecioProductoDolar'])) {



	$respuesta = new Botones();
	$respuesta -> mostrar();


	

	echo'<script>

				swal({
					  type: "success",
					  title: "'.  .'",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "productos";

								}
							})

				</script>';

}