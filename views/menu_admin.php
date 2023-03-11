<?php 
    session_start();
    if(empty($_SESSION["correo"])){
        header("location:index.php");  
        //header("location:index.php");
    } 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
            
    <link rel="stylesheet" href="css/style.css" />  
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">      

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
                        <h1 class="">MENU ADMIN</h1>
                        <?php
                            echo $_SESSION["correo"];
                        ?>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation" method="POST" action="controler/login.php" novalidate>
                            <div class="form-floating mb-3">
                                <input type="email" name="correo" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                                <label for="floatingInput">Correo electrónico</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" name="contrasena" class="form-control" id="floatingPassword" placeholder="Password" required>
                                <label for="floatingPassword">Contraseña</label>
                            </div> 
                            <a href="controler/cerrar_login.php">SALIR</a>       
                            <div class="row">
                                <div class="col-3"></div>
                                <div class="col-6">
                                    <button type="submit" name="