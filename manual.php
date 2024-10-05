<?php
session_start();
error_reporting(0);
include('config/conexion.php');
{
?>

            <!-- ========== TOP NAVBAR ========== -->
            <?php include('view/topbar.php');?>   
       
            <div class="content-wrapper">
                <div class="content-container">


<?php include('view/leftbar.php');?>                   


                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Acerca de SAAT</h2>
                                </div>
                                
                            </div>
                      
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="dashboard.php"><i class="fa fa-home"></i> Inicio</a></li>
            							<li>Acerca de SAAT</li>
            							
            						</ul>
                                </div>
                               
                            </div>
                      
                        </div>
               

                        <section class="section" style="background-color: #ffffff; text-align: justify;">
                            <div class="container-fluid">

                             

                              

                                <div class="row">


                                    <div class="col-md-8 col-md-offset-2">


                                        <div class="panel" style="background-color: #f7f7f7;">
                                            <div class="panel-heading">
<br><div class="container">
        <div class="panel-title">
                                                
                             <span style="background-color: #0b2a97;
    padding: 2px 10px;    
    color: #fff;">Sistema Automatizado de Activos de Tecnología</span><br><br>

FUNCIONES DEL SISTEMA<br><br>
GESTIÓN DE USUARIOS <br>
GESTIÓN DE ACTIVOS <br>
GESTIÓN DE ASIGNACIONES<br>
CAMBIO DE CLAVE

<br>
<br>

<a href="#" target="BLANK"> <img src="public/images/PDF_file_icon.svg.PNG" width="23"> DESCARGAR MANUAL DE USUARIO</a>
                                            <div class="panel-body">
                                                
<br>
                                                       

                                                    
                                               

                                              
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-8 col-md-offset-2 -->
                                </div>
                                <!-- /.row -->

                               
                               

                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->

                    </div>
                    <!-- /.main-page -->

                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->
    <?php include('view/footer.php');?>

<?php  } ?>
