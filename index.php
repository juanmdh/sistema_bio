<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/style.css" />  
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" crossorigin="anonymous">       
    <title>Sistema - Logeo</title>
</head>
<body class="cuerpo-logeo">
    
    <div class="container">
    <div class="row mt-5"></div>
    <div class="row mt-5"></div>
        <div class="row justify-content-center"> 
            <div class="col-4 mt-5">
                <div class="card tarjeta-logeo">
                    <div class="card-header text-center">    
                        <img src="" alt="">                    
                        <h4 class="inicio_sesion">INICIO DE SESIÓN</h4> 
                        <?php
                            
                            include "model/conexion.php";
                            include "model/login.php";
                        ?>
                    </div>
                    
                    <div class="card-body">
                        <form class="needs-validation" method="POST" novalidate>
                            <div class="form-floating mb-3">
                                <input type="email" name="correo" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                                <label for="floatingInput">Correo electrónico</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" name="contrasena" class="form-control" id="floatingPassword" placeholder="Password" required>
                                <label for="floatingPassword">Contraseña</label>
                            </div>    
                            <div class="row">
                                <div class="col-3"></div>
                                <div class="col-6">
                                    <!-- <button name="botoningresar" type="submit" class="btn btn-primary">
                                        Iniciar Sesión
                                    </button>    -->
                                    <input name="botoningresar" type="submit" class="btn btn-primary" value="Iniciar sesión">
                                </div>
                                <div class="col-3"></div>
                            </div>         
                        </form>
                    </div>
                    <div class="pie_tarjeta">                        
                       <a type="button" class="decoration" href="views/cambiar.php">Cambiar contraseña</a>
                    </div>
                </div>

            </div> 
        </div>
    </div>

    <script src="assets/js/index.js"></script>
    <script src="assets/js/sweetalert2@11.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>  
    <script src="assets/js/validar_campos_vacios.js"></script>  
  
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

 