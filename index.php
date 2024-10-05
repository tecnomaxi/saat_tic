<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAAT: Inicio de Sesión:.</title>
    <link rel="stylesheet" href="public/css/bootstrap.css" media="screen" >
    <link rel="stylesheet" href="public/css/font-awesome.min.css" media="screen" >
    <link rel="stylesheet" href="public/css/animate-css/animate.min.css" media="screen" >
    <link rel="stylesheet" href="public/css/prism/prism.css" media="screen" >

    <link rel="stylesheet" href="public/css/mainsaat.css" media="screen" >

</head>

<?php
   session_start();
   error_reporting(0);
   include('config/conexion.php');
   if($_SESSION['alogin']!=''){
   $_SESSION['alogin']='';
   }
   if(isset($_POST['login']))
   {
   $uname=$_POST['username'];
   $password=md5($_POST['password']);
   $sql ="SELECT UserName,Password FROM admin WHERE UserName=:uname and Password=:password";
   $query= $dbh -> prepare($sql);
   $query-> bindParam(':uname', $uname, PDO::PARAM_STR);
   $query-> bindParam(':password', $password, PDO::PARAM_STR);
   $query-> execute();
   $results=$query->fetchAll(PDO::FETCH_OBJ);
   if($query->rowCount() > 0)
   {
   $_SESSION['alogin']=$_POST['username'];
   echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
   } else{
       
       echo "<script>alert('Datos Invalidos');</script>";
   
   }
   
   }
   
?>

<body style="background-image: url(public/images/Modernoffice.jpg);
      background-color: #ffffff;
      background-size: cover;
      height: 100%;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;">
    <div class="main-wrapper">
        <div class="row">
            <div class="col-md-offset-7 col-lg-5">
                <section class="section">
                    <div class="row mt-40">
                        <div class="col-md-offset-2 col-md-10  pt-20">
                            <div class="row mt-30 ">
                                <div class="col-md-11">
                                    <div class="panel login-box" style="background: #EFEFFB;">
                                        <div class="panel-heading">
                                            <div class="text-center"><br>
                                                <a href="#">
                                                    <img style="height: 55px" src="public/images/logo1_saat.png">
                                                </a>
                                                 <br>
                                                <h5 style="color: #000000;"> <strong>.::SAAT V.1.1::.</strong></h5>
                                            </div>
                                        </div>
                                        <div class="panel-body p-20">
                                            <form class="admin-login" method="post">
                                                <div class="form-group">
                                                    <label for="user_nom" class="control-label" style="color: #000000;" >Usuario TIC</label>
                                                    <input type="text" name="username" class="form-control" id="user_nom" placeholder="Ingrese su nombre de usuario">
                                                </div>
                                                <div class="form-group">
                                                    <label for="user_pass" class="control-label" style="color: #000000;" >Contraseña</label>
                                                    <input type="password" name="password" class="form-control" id="user_pass" placeholder="Ingrese su contraseña">
                                                </div><br>
                                                <div class="form-group mt-20">
                                                    <button type="submit" name="login" class="btn login-btn">Ingresar</button>
                                                </div>
                                                <br>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <script src="public/js/jquery/jquery-2.2.4.min.js"></script>
    <script src="public/js/bootstrap/bootstrap.min.js"></script>

    <script src="public/js/main.js"></script>

</body>
</html>