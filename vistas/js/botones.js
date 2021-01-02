$('#actualizarPrecio').on('click',function(){

const dolar = true;
alert('si hay respuesta');
  $.ajax({

      url:"ajax/dolar.ajax.php",
      method: "POST",
      data: dolar,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){
              

        alert('si hay respuesta'+respuesta);

       
  }

})

})