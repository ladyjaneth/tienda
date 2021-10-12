$('#crearProducto').click(function(event){
    event.preventDefault();
    var form=$('#crear')
    $.ajax({
        url:'productos', //url de donde voy a guardar/ como le coloque en el route web
        data:form.serialize(), //esta información la envia a la URL
        type:'POST',
        success: function (response) { //cuando es exitoso el envio
            if(response.success){ //es el json
                Swal.fire("Exitoso",response.msg,"success"); //el que retorna del controlador
            }else{
                Swal.fire("Error",response.msg,"error");
            }
        },

    });
});

