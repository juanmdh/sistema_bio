<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
            
    <link rel="stylesheet" href="../assets/css/style.css" />  
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" crossorigin="anonymous">      
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/modificar_datos.js"></script>
    <title>Sistema - Recuperar</title>
</head>
<body class="cuerpo-logeo">
    
    <div class="container">
    <div class="row mt-5"></div>
    <div class="row mt-5"></div>
        <div class="row justify-content-center">
            <div class="col-6 mt-4">
                <div class="card tarjeta-logeo">
                    <div class="card-header text-center">
                        <h4   h4 class="cambiar_contrasena">CAMBIO DE CONTRASEÑA</h4> 
                    </div>
                    <div class="card-body">
                        <form  id="formulario_contrasena"  method="POST"   >
                            <div class="row">
                                <div class="col-12">
                                    
                                <div class="form-floating mb-3">
                                        <input type="email" name="correo" class="form-control" id="correo" placeholder="name@example.com" required>
                                        <label for="floatingInput">Ingrese el correo</label>
                                    </div> 
                                    <div class="form-floating mb-3">
                                        <input type="text" name="contrasena" class="form-control" id="contrasena" placeholder="name@example.com" required>
                                        <label for="floatingInput">Ingrese su nueva contraseña</label>
                                    </div> 
                                    <button id="botonmodificar_contrasena" name="botonmodificar_contrasena" type="submit" class="btn btn-primary" value="Modificar">Modificar</button>
                                </div> 
                            </div>
                        </form> 
                        <div id="resultado_m">

                        </div>                      
                    </div>
                    <div class="pie_tarjeta">                        
                       <a class="decoration" href="../index.php">Regresar al inicio</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    <script>
        $(document).ready(function(){
            $("#botonmodificar_contrasena").on('click',function(e){ 
                e.preventDefault();
                modificar_contrasena();
            });
        })
    </script> 
    <script src="../assets/js/sweetalert2@11.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>  
    <script>
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
                }, false)
            })
        })()
    </script> 
</body>
</html>

















<?php
        // $variable_uno="Hola";
        // $variable_dos="Mundo";
        // echo "<h1 class='text-center'>".$variable_uno. " ".$variable_dos."</h1>";
        // $variable_nmr_uno=5;
        // $variable_nmr_dos=3;
        // $resultado = $variable_nmr_uno + $variable_nmr_dos;
        // $resultado1 = $variable_nmr_uno - $variable_nmr_dos;
        // $resultado2 = $variable_nmr_uno * $variable_nmr_dos;
        // $resultado3 = $variable_nmr_uno / $variable_nmr_dos;
        
        // echo "<h4>Resultado: ".$resultado."</h4>";
        // echo "<h4>Resultado: ".$resultado1."</h4>";
        // echo "<h4>Resultado: ".$resultado2."</h4>";
        // echo "<h4>Resultado: ".round($resultado3,2)."</h4>";

        // $arreglo = array("lunes","martes","miercoles","jueves","viernes","sabado","domingo");
        // // echo implode("-",$arreglo);
        // echo $arreglo[0];

        // $variable1=10;
        // $variable2=50;
        // CONDICIONAL SIMPLE EXTENDIDA
        // if($variable1==$variable2){
        //     echo"Las variables son iguales";
        // }else{
        //     echo"Las variables son diferentes";
        // }

        // CONDICIONAL SIMPLE CORTA
        // ($variable1==$variable2)? print "Las variables son iguales": print "Las variables son diferentes";

        // CONDICIONAL COMPUESTA
        // switch ($variable2) {
        //     case 20:
        //         echo "La variable ".$variable2." es 20"; 
        //         break;

        //     case 100:
        //         echo "La variable ".$variable2." es 100"; 
        //         break;                
            
        //     default:
        //         echo "La variable ".$variable2." es número natural"; 
        //         break;
        // }
        
        // include_once('model/persona.php');
        // $persona1 = new Persona("Juan","Miguel","Gomez","Gutierres",25);
        // $persona2 = new Persona("Alex","Wilber","Garibay","Guardia",20);
        // $persona3 = new Persona("Alexander","Ivan","Goñe","Manriquez",20);
        // $arreglo_personas = array($persona1,$persona2,$persona3);
        // for ($i=0; $i < sizeof($arreglo_personas); $i++) { 
        //     echo "<p>".$arreglo_personas[$i]->getPrimerNombre()."</p>";
        // }

        // foreach ($arreglo_personas as $persona) {
        //     echo "<p>".$persona->getPrimerNombre()."</p>";
        // }

        
    ?>

 