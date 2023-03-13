<?php 
        include_once ('../conexion.php');
        include_once ('../login.php');
        //$_POST['dni_f']
        $dni=$_POST['dni_f'];
        $nombres=$_POST['nombres'];
        $telefono=$_POST['telefono'];
        $fecha_nacimiento=$_POST['fecha_nacimiento'];
        $sexo=$_POST['sexo'];
        
        $sentencia_registrar = $con -> query("INSERT INTO paciente (dni,nombres,fecha_nacimiento,telefono,sexo) 
        VALUES ('$dni','$nombres','$fecha_nacimiento','$telefono','$sexo')");
        
        return 1;      
?>