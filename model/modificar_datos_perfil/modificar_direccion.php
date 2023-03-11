<?php 

    if( !empty($_POST["direccion"])){
        $correo=$_SESSION["correo"];  

        $sentencia = $con -> query("SELECT * FROM personal INNER JOIN cuenta on personal.dni = cuenta.dni_personal WHERE correo='$correo'");
        $valores = mysqli_fetch_array($sentencia);  
        
        $direccion=$_POST["direccion"];       
        $dni=$valores['dni'];
        
        $sentencia_buscar = $con -> query("UPDATE personal SET direccion = '$direccion' WHERE dni='$dni'");
        if($sentencia_buscar==true){
            echo "<div class='alert alert-success'>La dirección se modificó</div>";      
        }else{
            echo "<div class='alert alert-danger'>La dirección no se modificó</div>";       
        } 
        
    }     
 
?>
 
