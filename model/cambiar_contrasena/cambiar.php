<?php 

include_once '../conexion.php';
        $correo=$_POST['correo'];
        $contrasena=$_POST['contrasena'];
        $contrasena_md5=md5($contrasena);

        $sentencia_buscar = mysqli_query($con,"SELECT * FROM cuenta WHERE correo='$correo'");
        $fila = mysqli_num_rows($sentencia_buscar);

        if($fila>0){
                $sentencia_modificar =  mysqli_query($con,"UPDATE cuenta SET contrasena='$contrasena_md5' WHERE correo='$correo'");
                return 1;
                echo'1';
        }
?>