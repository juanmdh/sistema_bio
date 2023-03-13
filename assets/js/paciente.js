function visible(){     
    var datos=$("#formulario_buscar_pacientes").serialize();
    $.ajax({
        method:"POST",
        url:"../../../model/paciente/buscar_paciente.php",                
        data:datos,
        success:function(e){            
            if(e==1){
                Swal.fire(
                    'El número de DNI ya esta registrado',
                    'Porfavor ingrese otro número de DNI',
                    'warning'
                  )
            }else if(e==0){
                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                      confirmButton: 'btn btn-success',
                      cancelButton: 'btn btn-danger'
                    },
                    buttonsStyling: false
                  })
                  
                  swalWithBootstrapButtons.fire({
                    title: 'El dni no esta registrado',
                    text: "Desea proceder con el registro?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Si',
                    cancelButtonText: 'No',
                    reverseButtons: true
                  }).then((result) => {
                    if (result.isConfirmed) {     
                                document.getElementById("card_buscar_paciente").style.display = "none",
                                document.getElementById("dni_fb").value = "",
                                document.getElementById("card_datos_paciente").style.display = "block"  
                    } else if (
                      /* Read more about handling dismissals below */
                      result.dismiss === Swal.DismissReason.cancel
                    ) {
                      swalWithBootstrapButtons.fire(
                        'Proceso de registro cancelado',
                        'Puede intentar ingresar otro número de DNI',
                        'error'
                      )
                    }
                  }) 

                
            }
        }
    });
    return false;
}

 


function guardar(){     
    var datos=$("#formulario_buscar_pacientes").serialize();
    $.ajax({
        method:"POST",
        url:"../../../model/paciente/buscar_paciente.php",                
        data:datos,
        success:function(e){            
            if(e==1){
                Swal.fire(
                    'El número de DNI ya esta registrado',
                    'Porfavor ingrese otro número de DNI',
                    'warning'
                  )
            }else if(e==0){
                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                      confirmButton: 'btn btn-success',
                      cancelButton: 'btn btn-danger'
                    },
                    buttonsStyling: false
                  })
                  
                  swalWithBootstrapButtons.fire({
                    title: 'El dni no esta registrado',
                    text: "Desea proceder con el registro?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Si',
                    cancelButtonText: 'No',
                    reverseButtons: true
                  }).then((result) => {
                    if (result.isConfirmed) {     
                        guardar_sql()
                    } else if (
                      /* Read more about handling dismissals below */
                      result.dismiss === Swal.DismissReason.cancel
                    ) {
                      swalWithBootstrapButtons.fire(
                        'Proceso de registro cancelado',
                        'Puede intentar ingresar otro número de DNI',
                        'error'
                      )
                    }
                  }) 

                
            }
        }
    });
    return false;
}


function guardar_sql(){     
    var datos=$("#formulario_registro_pacientes").serialize();
    $.ajax({
        method:"POST",
        url:"../../../model/paciente/registrar_paciente.php",                
        data:datos,
        success:function(e){      
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Registro realizado',
                showConfirmButton: false,
                timer: 1500
              })      
            document.getElementById("card_buscar_paciente").style.display = "block",
            document.getElementById("card_datos_paciente").style.display = "none" 
        }
    });
    return false;
}

 
