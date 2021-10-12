function eliminar(boton, numero_documento, idtipos_documentos){
  Swal.fire({
  title: 'Está Seguro?',
  text: "No podrás revertir esto!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si, Bórralo!'
    }).then((result) => { //then recibe una función flecla con un objeto como parámetro dependiendo de la respuesta del confirmed del usuario
        if (result.isConfirmed) {
            $.ajax({
                url:'/cliente/'+numero_documento+'/'+idtipos_documentos,
                type: "DELETE",
                /* data: {
                    "_token":$('#token').val(),
                   numero_documento:numero_documento,
                    idtipos_documentos: idtipos_documentos,
                }, */
                //success siempre espera algo de tipo json o xml
                success: function (response) {
                            if(response.success){
                                    Swal.fire("Exitoso",response.msg,"success");      //parents() busca los padres y se detenga en tr
                                    $(boton).parents('tr').fadeOut('slow',function(){ //fadeOut nos recibe dos parámetros un string y una función anonima
                                      $(this).remove();  //este hace referencia a toda la fila por que ya se encontro el tr y elimina toda la fila
                                    });

                            }else{
                                    Swal.fire("Error",response.msg,"error");
                            }

                },
            });

  }
})
}
