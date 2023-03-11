<?php
//include '../model/conexion.php'; 

session_start();
if(!empty($_POST["botoningresar"])){
    if( !empty($_POST["correo"]) and 
        !empty($_POST["contrasena"]) ){



            $correo=$_POST['correo'];
            //$contrasena=$_POST['contrasena'];
            $contrasena_md5=md5($_POST['contrasena']);
            $sentencia = $con -> query("SELECT * FROM cuenta WHERE correo='$correo' AND contrasena='$contrasena_md5'");


            if($datos =$sentencia->fetch_object()){
                $_SESSION["correo"]= $datos->correo; 
                header("location:views/admin.php");           
            }else{
                echo "<div class='alert alert-danger'>Los datos ingresados son incorrectos</div>";
            }               




            
    }    else if(empty($_POST["correo"])){
        echo "<div class='alert alert-danger'>No a ingresado el correo</div>";
    }else if(empty($_POST["contrasena"])){
        echo "<div class='alert alert-danger'>No a ingresado la contraseña</div>";
    }
} 


// if($_POST){
//     $correo=$_POST['correo'];
//     $contrasena=$_POST['contrasena'];
//     //CONSULTA A LA BD               
//     $sentencia = $con -> query("SELECT * FROM cuenta WHERE correo='$correo' AND contrasena='$contrasena'");
//     //$result = $sentencia -> execute([$correo,$contrasena]);
//     //echo $result;           
    // if($datos =$sentencia->fetch_object()){
    //     header("location:../menu_admin.php");
    // }else{
    //     echo "Los datos ingresados son incorrectos";
    // }
// }else{
//     echo "Error de conexion";
// }
?>