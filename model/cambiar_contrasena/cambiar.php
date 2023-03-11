<?php 
if(!empty($_POST["botonbuscar"])){
    if( !empty($_POST["correo"])){
        $correo=$_POST['correo'];
        $contrasena=$_POST['contrasena'];
        $contrasena_md5=md5($_POST['contrasena']);

        $sentencia_buscar = $con -> query("SELECT * FROM cuenta WHERE correo='$correo'");

        if(!empty($_POST["contrasena"])){
            $sentencia_modificar = $con -> query("UPDATE cuenta SET contrasena='$contrasena_md5' WHERE correo='$correo'");
            // if($datos =$sentencia->fetch_object()){
            //     $_SESSION["correo"]= $datos->correo; 
            //     header("location:menu_admin.php");           
            // }else{
            //     echo "<div class='alert alert-danger'>Los datos ingresados son incorrectos</div>";
            // }               
            echo "<div class='alert alert-success'>Contraseña modificada</div>";              
        }else{
            echo "<div class='alert alert-danger'>No a ingresado su nueva contraseña</div>";
        } 
    }else{
        echo "<div class='alert alert-danger'>No a ingresado el correo</div>";
    } 
} 
?>