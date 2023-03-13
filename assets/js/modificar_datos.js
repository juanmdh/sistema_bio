function modificar_contrasena(){ 
    
    var datos=$("#formulario_contrasena").serialize();
    $.ajax({
        method:"POST",
        url:"../model/cambiar_contrasena/cambiar.php",                
        data:datos,
        success:function(e){
            
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Contraseña modificada',
                    showConfirmButton: false,
                    timer: 1500
                  })
                document.getElementById("correo").value = "";
                document.getElementById("contrasena").value = "";

        }         
    });
    return false;
}


function modificar_direccion(){ 
    var datos=$("#formulario_direccion").serialize();
    $.ajax({
        method:"POST",
        url:"../model/modificar_datos_perfil/modificar_direccion.php",                
        data:datos,
        success:function(e){
            if(e=1){ 
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Dirección modificada',
                    showConfirmButton: false,
                    timer: 1500
                  })
                document.getElementById("direccion").value = "";
            }else{
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'No se pudo modificar la dirección',
                    showConfirmButton: false,
                    timer: 1500
                  })
            }
        }         
    });
    return false;
}


function modificar_telefono(){ 
    var datos=$("#formulario_telefono").serialize();
    $.ajax({
        method:"POST",
        url:"../model/modificar_datos_perfil/modificar_telefono.php",                
        data:datos,
        success:function(e){
            if(e=1){ 
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Número de telefono modificada',
                    showConfirmButton: false,
                    timer: 1500
                  })
                document.getElementById("telefono").value = "";
            }else{
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'No se pudo modificar el número de telefono',
                    showConfirmButton: false,
                    timer: 1500
                  })
            }
        }         
    });
    return false;
}


function modificar_dni(){ 
    var datos=$("#formulario_dni").serialize();
    $.ajax({
        method:"POST",
        url:"../model/modificar_datos_perfil/modificar_dni.php",                
        data:datos,
        success:function(e){
            if(e=1){ 
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Dirección modificada',
                    showConfirmButton: false,
                    timer: 1500
                  })
                document.getElementById("direccion").value = "";
            }else{
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'La dirección no fue modificada',
                    showConfirmButton: false,
                    timer: 1500
                  })
            }
        }         
    });
    return false;
}


function modificar_nombres(){ 
    var datos=$("#formulario_nombres").serialize();
    $.ajax({
        method:"POST",
        url:"../model/modificar_datos_perfil/modificar_nombres.php",                
        data:datos,
        success:function(e){
            if(e=1){ 
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Los nombres fueron modificados',
                    showConfirmButton: false,
                    timer: 1500
                  })
                document.getElementById("nombres").value = "";
            }else{
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Los nombres no fueron modificados',
                    showConfirmButton: false,
                    timer: 1500
                  })
            }
        }         
    });
    return false;
}

 