<?php 

include('../model/conexion.php');
        $correo=$_POST['correo'];
        $contrasena=$_POST['contrasena'];
        $contrasena_md5=md5($contrasena);
//        $sentencia_buscar = $con -> query("SELECT * FROM cuenta WHERE correo='$correo'");
        $sentencia_modificar = "UPDATE cuenta SET contrasena='$contrasena_md5' WHERE correo='$correo'";         
        echo mysqli_query($con,$sentencia_modificar);

        
        //$fila = mysql_fetch_assoc($sentencia_modificar);
 
        
?>

<!-- 0cc175b9c0f1b6a831c399e269772661 -->

 
 