function eliminar(carta, id){
    Swal.fire({
        title: 'Está Seguro?',
        text: "No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Bórralo!'
        }).then((result)=>{
            if(result.isConfirmed){
                $ajax({
                    url:'',
                    type:'DELETE',
                    success:function(response){
                        if(response.success){
                            Swall.fire("Exitoso",response.msg,"success");
                            $(carta).parents('.card').fadeOut('slow',function(){
                            $(this).remove();
                            });
                        }else{
                            Swall.fire("Error",response.msg);
                        }
                    },

                });

            }

        })

}

