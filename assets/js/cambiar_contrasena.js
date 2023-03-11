function modificar(){
 
    var datos=$("#formulario").serialize();
    $.ajax({
        method:"POST",
        url:"../model/cambiar.php",                
        data:datos,
        success:function(e){
            if(e==1){ 
                alert("Modificacion exitoso");
            }else{
                alert("Error al modificar");
            }
        }            
    });

    return false;
}


