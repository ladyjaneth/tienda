$('#crearCliente').click(function(event){  //id del boton
    event.preventDefault();
    var form=$('#crear');      //id del formulario
    $.ajax({
       url:'cliente',
       data:form.serialize(), //esta información la envia a la URL
       type:'POST',
       success: function (response) { //cuando es exitoso el envio
            if(response.success){
                Swal.fire("Exitoso",response.msg,"success");
                form[0].reset(); //reiniciar el formulario
            }else{
                Swal.fire("Error",response.msg,"error");
            }
        },

    });
});
