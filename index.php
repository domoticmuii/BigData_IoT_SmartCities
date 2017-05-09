<!DOCTYPE html>
<html lang="en">
<?php 
	include 'abrirconexion.php';
	session_start();
?>
<head>
	<meta http-equiv="Content-type"
	content="text/html; charset=utf-8" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DomoTIC - Tu casa en el bolsillo</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="icon" 
      type="image/png" 
      href="imagenes/icono.png"/>


</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">DomoTIC</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <?php $i=0; ?>
            <div class="item active">
                <div class="fill" style="background-image:url('imagenes/slide_domotica4.jpg');"></div></a>
                <div class="carousel-caption">
                </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    DomoTIC: Tu casa en tu bolsillo
                </h1>
            </div>
            <div class="col-md-4">
                 <div id="registrar">
<p><b>¿No eres miembro aún? </b><a href="./php/registro.php"</a>¡Regístrate!</a>
<br><br>
</div> <!-- fin opcion-->
 <?php 
										if(isset($_SESSION['email'])){
											echo 'Bienvenido '.$_SESSION['nombre'];
									?>
										<br></br>
										<a href="cerrarsesion.php"> <u>SALIR</u> </a>
										<?php }
										else{ ?>	
    <div id="envoltura">
        <div id="contenedor">
 
            <div id="cuerpo">
                <form id="form-login" action="index.php" method="post" autocomplete="on">
                    <p><label >Usuario:</label>
                        <input name="usuario" type="text" id="usuario" placeholder="Ingresa Usuario" required="required">
					</p>
                    <p><label>Contraseña:</label>
                        <input name="password" type="password" id="password" placeholder="Ingresa Password" required="required">
					</p>
                    <p id="bot"><input type="submit" id="submit" name="submit" value="Ingresar" class="boton"></p>
                </form>
            </div><!--fin cuerpo-->
        </div><!-- fin contenedor -->
    </div><!--fin envoltura-->
	<?php }
	include "login.php"; ?>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4><em class="fa fa-users"></em> Casos prácticos</h4>
                    </div>
                    <div class="panel-body">
                      <p align="justify">No se conforme con leer la teoría solamente. También podrá consultar los mejores casos prácticos de cada tema y su interpretación siguiendo la legislación vigente.</p>
                      <br><br>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4><em class="fa fa-check-circle"></em> Cuestionarios, curiosidades...</h4>
                    </div>
                    <div class="panel-body">
                      <p align="justify">También podrá poner a prueba sus conocimientos acerca de cada tema mediante cuestionarios y consultar preguntas frecuentes. Además, no se pierda nuestra sección de cine. ¡Disfrute! </p>
                      <p>&nbsp;</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
              <h2 class="page-header">Índice</h2>
            </div>
            <?php $i=0; ?>
            <div class="col-sm-4 col-xs-6">               
                    <img class="img-responsive img-portfolio img-hover" src="imagenes/big_data.png" alt="">
                </a>
            </div>
            <div class="col-sm-4 col-xs-6">
                    <img class="img-responsive img-portfolio img-hover" src="imagenes/iot.png" alt="">
                </a>
            </div>
            <div class="col-sm-4 col-xs-6">
                    <img class="img-responsive img-portfolio img-hover" src="imagenes/smart_cities.png" alt="">
                </a>
            </div>
            <div class="col-sm-4 col-xs-6">
                    <img class="img-responsive img-portfolio img-hover" src="imagenes/bi.png" alt="">
                </a>
            </div>
            <div class="col-sm-4 col-xs-6">
                    <img class="img-responsive img-portfolio img-hover" src="imagenes/itil.png" alt="">
                </a>
            </div>
            <div class="col-sm-4 col-xs-6">
                    <img class="img-responsive img-portfolio img-hover" src="imagenes/nuestras_cuentas.png" alt="">
                </a>
            </div>
        </div>
        <!-- /.row -->
    
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
