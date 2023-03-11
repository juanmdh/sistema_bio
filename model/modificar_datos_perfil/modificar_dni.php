<?php 
 
    
    if(!empty($_POST["dni_f"])){
        $correo=$_SESSION["correo"];  

        $sentencia = $con -> query("SELECT * FROM personal INNER JOIN cuenta on personal.dni = cuenta.dni_personal WHERE correo='$correo'");
        $valores = mysqli_fetch_array($sentencia);              
        $dni=$valores['dni'];
        
        $dni_f=$_POST["dni_f"];  

        $sentencia_buscar = $con -> query("UPDATE personal SET dni = '$dni_f' WHERE dni='$dni'");
     
        if($sentencia_buscar==true){
            echo "<div class='alert alert-success'>El Dni se modificó</div>";      
        }else{
            echo "<div class='alert alert-danger'>El Dni no se modificó</div>";       
        } 
        
    }     
 
?>
 
