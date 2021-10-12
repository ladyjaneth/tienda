$('#editarCliente').click(function(event){
    event.preventDefault();
    var form=$('#editar');
   //var numeroDocumento = document.getElementById('val1').value;
    var idDocumento = document.getElementById('val2').value;

    /*  var idDocumento = document.getElementById('numero_documento').value; //id de editar
    var idDocumento = document.getElementById('idtipos_documentos').value; //id de editar
 */

    $.ajax({
       url:'/cliente/'+$('#val1').val()+'/'+idDocumento,


       data:form.serialize(),
       type:'PUT',
       success: function (response) {
           if(response.success){
                Swal.fire("Exitoso",response.msg,"success");
           }else{
               Swal.fire("Error",response.msg,"error");
           }

       },

    });
});
