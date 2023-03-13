<?php 

include_once 'conexion.php';
        $correo=$_POST['correo'];
        $contrasena=$_POST['contrasena'];
        $contrasena_md5=md5($contrasena);

        // $sentencia_buscar = mysqli_query($con,"SELECT COUNT(correo) FROM cuenta WHERE correo='$correo'");
        // echo intval($sentencia_buscar);
        // if($sentencia_buscar==1){
        //         $sentencia_modificar =  mysqli_query($con,"UPDATE cuenta SET contrasena='$contrasena_md5' WHERE correo='$correo'");
        // }else{
        //         echo'no';
        // }
        $sentencia_buscar = mysqli_query($con,"SELECT * FROM cuenta WHERE correo='$correo'");
        $fila = mysqli_num_rows($sentencia_buscar);

        if($fila>0){
                $sentencia_modificar =  mysqli_query($con,"UPDATE cuenta SET contrasena='$contrasena_md5' WHERE correo='$correo'");
                return 1;
                echo'1';
        }else{
                 
        }
        
 
 
        
        //$sentencia_modificar = $con -> query("UPDATE cuenta SET contrasena='$contrasena_md5' WHERE correo='$correo'");
 
        //$sentencia_modificar = "UPDATE cuenta SET contrasena='$contrasena_md5' WHERE correo='$correo'";         
        //echo mysqli_query($con,$sentencia_buscar);

        
        //$fila = mysql_fetch_assoc($sentencia_modificar);
 
        
?>

<!-- 0cc175b9c0f1b6a831c399e269772661 -->

 
 