<?php 

    if( !empty($_POST["telefono"])){
        $correo=$_SESSION["correo"];  

        $sentencia = $con -> query("SELECT * FROM personal INNER JOIN cuenta on personal.dni = cuenta.dni_personal WHERE correo='$correo'");
        $valores = mysqli_fetch_array($sentencia);  
        
        $telefono=$_POST["telefono"];       
        $dni=$valores['dni'];
        
        $sentencia_buscar = $con -> query("UPDATE personal SET telefono = '$telefono' WHERE dni='$dni'");
        if($sentencia_buscar==true){
            echo "<div class='alert alert-success'>El número de celular se modificó</div>";      
        }else{
            echo "<div class='alert alert-danger'>El número de celular no se modificó</div>";       
        } 
        
    }     
 
?>
 
