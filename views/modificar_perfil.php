<?php 
    session_start();
    if(empty($_SESSION["correo"])){
        header("location:../index.php");  
        //header("location:index.php");
    } 
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Perfil</title>
    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="../assets/font/css/all.css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">
    
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <div class="row">
                <!-- <img src="img/san.jpg"> -->

                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
                    <div class="sidebar-brand-text mx-3">Laboratorio clinico</div>
                </a>
            </div>            


            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active"> 
                <a class="nav-link" href="admin.php">
                <i class="fa-solid fa-house"></i>
                    <span>Incio</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                interfaz
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapanalisis"
                    aria-expanded="true" aria-controls="collapanalisis">
                    <i class="fa-sharp fa-solid fa-flask-vial"></i> 
                    <span>Análisis</span>
                </a>
                <div id="collapanalisis" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Tipos de análisis:</h6>
                        <a class="collapse-item" href="buttons.html">Perfil lipídico</a>
                        <a class="collapse-item" href="cards.html">Perfil hepático con QSA</a>
                        <a class="collapse-item" href="cards.html">Hemograma automatizado</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsebuscar"
                    aria-expanded="true" aria-controls="collapsebuscar">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <span>Buscar</span>
                </a>
                <div id="collapsebuscar" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Tipo de búsqueda:</h6>
                        <a class="collapse-item" href="utilities-color.html">Paciente</a>
                        <a class="collapse-item" href="admin.php">Trabajador</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseregistrar"
                    aria-expanded="true" aria-controls="collapseregistrar">
                    <i class="fa-regular fa-address-card"></i>
                    <span>Registrar</span>
                </a>
                <div id="collapseregistrar" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Tipo de búsqueda:</h6>
                        <a class="collapse-item" href="utilities-color.html">Paciente</a>
                        <a class="collapse-item" href="admin.php">Trabajador</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
 

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
 
 

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                <?php
                                    //echo $_SESSION["correo"];
                                    include "../model/conexion.php";
                                    include "../model/buscar_personal.php"; 
                                ?>
                                </span>
                                <img class="img-profile rounded-circle" src="../assets/img/juan.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item"  href="perfil.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <a class="dropdown-item" href="../controller/modificar_perfil.php">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Modificar
                                </a> 
                                <div class="dropdown-divider"></div>                                
                                <a class="dropdown-item"  href="../controller/cerrar_login.php">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar sesión
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Perfil</h1>
                    </div>

                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-12 col-md-12 mb-4 col-12">
                            <div class="row">
                                <div class="col-1"></div>
                                <div class="col-10 card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-10 mr-2">
                                            <div class=" h1 text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                <?php
                                                    echo $valores1['nombre'];
                                                ?>
                                                </div>                                                
                                                <div class="h1 mb-0 font-weight-bold text-gray-800 text-primary ">
                                                    <?php                                                        
                                                        include "../model/buscar_personal.php"; 
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <img class="img-profile rounded-circle" src="../assets/img/juan.png" width="100" height="100"> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1"></div>
                        <div class=" row col-10">
                            <div class="col-12">                            
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Accordion -->
                                    <a href="#collapseCarNombres" class="d-block card-header py-3" data-toggle="collapse"
                                        role="button" aria-expanded="true" aria-controls="collapseCarNombres">
                                                <h6 class="m-0 font-weight-bold text-primary">Nombres y apellidos</h6>                                                                            
                                    </a>
                                    
                                    <!-- Card Content - Collapse -->
                                    <div class="collapse gravity-center show " id="collapseCarNombres">
                                        <div class="row col-12 card-body">
                                            <form class="row needs-validation col-12" method="POST" novalidate>
                                                <div class="col-4 mt-2">
                                                    <strong>
                                                        <?php
                                                            echo $valores['nombres'];
                                                        ?>
                                                    </strong>
                                                </div>
                                                <div class=" col-5"> 
                                                        <input type="text" name="nombres" class="col-12 form-control" id="floatingInput" required>                                                        
                                                </div>
                                                <div class=" col-3">               
                                                <button name="botonmodificar" type="submit" class="btn btn-primary" value="Modificar">Modificar</button>
                                                <button onclick="limpiar();" name="botonlimpiar" type="submit" class="btn btn-primary" value="Limpiar">Limpiar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> 
                                <?php                            
                                    include "../model/modificar_datos_perfil/modificar_nombres.php";
                                ?>  
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Accordion -->
                                    <a href="#collapseCarDni" class="d-block card-header py-3" data-toggle="collapse"
                                        role="button" aria-expanded="true" aria-controls="collapseCarDni">
                                        <h6 class="m-0 font-weight-bold text-primary">DNI</h6>
                                    </a>
                                    <!-- Card Content - Collapse -->
                                    <div class="collapse gravity-center show " id="collapseCarDni">
                                        <div class="row col-12 card-body">
                                            <form method="POST" class="needs-validation row col-12" novalidate>
                                                <div class="col-4 mt-2">
                                                    <strong>
                                                        <?php
                                                            echo $valores['dni'];
                                                        ?>
                                                    </strong>
                                                </div>
                                                <div class=" col-5"> 
                                                        <input type="number" name="dni_f" class="col-12 form-control" id="floatingInput" required>
                                                </div>
                                                <div class=" col-3">                                                   
                                                        <input name="botonmodificar" type="submit" class="btn btn-primary" value="Modificar">                                                        
                                                </div>
                                            </form> 
                                        </div>
                                    </div>
                                </div> 
                                <?php                      
                                    include "../model/modificar_datos_perfil/modificar_dni.php";
                                ?>
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Accordion -->
                                    <a href="#collapseCarTelefono" class="d-block card-header py-3" data-toggle="collapse"
                                        role="button" aria-expanded="true" aria-controls="collapseCarTelefono">
                                        <h6 class="m-0 font-weight-bold text-primary">Telefono</h6>
                                    </a>
                                    <!-- Card Content - Collapse -->
                                    <div class="collapse gravity-center show " id="collapseCarTelefono">
                                        <div class="row col-12 card-body">
                                            <form method="POST" class="needs-validation row col-12" novalidate>                                       
                                                <div class="col-4 mt-2">
                                                    <strong>
                                                        <?php
                                                            echo $valores['telefono'];
                                                        ?>
                                                    </strong>
                                                </div>
                                                <div class=" col-5"> 
                                                        <input type="number" name="telefono" class="col-12 form-control" id="floatingInput" required>
                                                </div>
                                                <div class=" col-3">                                                   
                                                        <input name="botonmodificar" type="submit" class="btn btn-primary" value="Modificar">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> 
                                <?php                      
                                    include "../model/modificar_datos_perfil/modificar_telefono.php";
                                ?>
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Accordion -->
                                    <a href="#collapseCarDireccion" class="d-block card-header py-3" data-toggle="collapse"
                                        role="button" aria-expanded="true" aria-controls="collapseCarDireccion">
                                        <h6 class="m-0 font-weight-bold text-primary">Dirección</h6>
                                    </a>
                                    <!-- Card Content - Collapse -->
                                    <div class="collapse gravity-center show " id="collapseCarDireccion">
                                        <div class="row col-12 card-body">
                                            <form method="POST" class="needs-validation row col-12" novalidate>                                       
                                                <div class="col-4 mt-2">
                                                    <strong>
                                                        <?php
                                                            echo $valores['direccion'];
                                                        ?>
                                                    </strong>
                                                </div>
                                                <div class=" col-5"> 
                                                        <input type="text" name="direccion" class="col-12 form-control" id="floatingInput" required>                                                
                                                </div>
                                                <div class=" col-3">                                                   
                                                        <input name="botonmodificar" type="submit" class="btn btn-primary" value="Modificar">
                                                </div>
                                            </form>
                                        </div>
                                    </div>                                    
                                </div>                                 
                                <?php                      
                                    include "../model/modificar_datos_perfil/modificar_direccion.php";
                                ?>
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Accordion -->
                                    <a href="#collapseCarImagen" class="d-block card-header py-3" data-toggle="collapse"
                                        role="button" aria-expanded="true" aria-controls="collapseCarImagen">
                                        <h6 class="m-0 font-weight-bold text-primary">Foto</h6>
                                    </a>
                                    <!-- Card Content - Collapse -->
                                    <div class="collapse gravity-center show " id="collapseCarImagen">
                                        <div class="row col-12 card-body">
                                            <form method="POST" class="needs-validation row col-12" novalidate>                                       
                                                <div class="col-4 mt-2">
                                                    <strong>
                                                        <?php
                                                            echo $valores['direccion'];
                                                        ?>
                                                    </strong>
                                                </div>
                                                <div class=" col-5 "> 
                                                        <input type="file" id="formFile" class="col-12 form-control" required>
                                                </div>
                                                <div class=" col-3">                                                   
                                                        <input name="botoningresar" type="submit" class="btn btn-primary" value="Modificar">
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    
                                </div>                                  
                            </div>           
                        </div>                        
                        <div class="col-1"></div>

                    </div>

                </div> 
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Juan Miguel Díaz Hernández 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../assets/js/demo/chart-area-demo.js"></script>
    <script src="../assets/js/demo/chart-pie-demo.js"></script>
    <script src="../assets/js/validar_campos_vacios.js"></script>      
    <script src="../assets/js/limpiar.js"></script>      
</body>

</html>