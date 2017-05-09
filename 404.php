<!DOCTYPE html>
<html lang="en">

<?php
		include 'abrirconexion.php';
		session_start();
		if(!(isset($_SESSION['id_tema']))){
		include 'menu.php';
	}
	?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Harry el Limpio - La Web del Derecho Informático</title>

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
                <a class="navbar-brand" href="index.php">Harry el Limpio</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                   <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Casos prácticos <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        	<?php $i=0; ?>
                        	<li>
                            	<a href="caso_practico.php?id=<?php echo $_SESSION['id_tema'][$i]?>"><?php echo $_SESSION['nombre_tema'][$i];$i++;?></a>
                            </li>
                            <li>
                                <a href="caso_practico.php?id=<?php echo $_SESSION['id_tema'][$i]?>"><?php echo $_SESSION['nombre_tema'][$i];$i++;?></a>
                            </li>
                            <li>
                                <a href="caso_practico.php?id=<?php echo $_SESSION['id_tema'][$i]?>"><?php echo $_SESSION['nombre_tema'][$i];$i++;?></a>
                            </li>
                             <li>
                                <a href="caso_practico.php?id=<?php echo $_SESSION['id_tema'][$i]?>"><?php echo $_SESSION['nombre_tema'][$i];$i++;?></a>
                            </li>
                            <li>
                                <a href="caso_practico.php?id=<?php echo $_SESSION['id_tema'][$i]?>"><?php echo $_SESSION['nombre_tema'][$i];$i++;?></a>
                            </li>
                            <li>
                                <a href="caso_practico.php?id=<?php echo $_SESSION['id_tema'][$i]?>"><?php echo $_SESSION['nombre_tema'][$i];$i++;?></a>
                            </li>
                        </ul>
                    </li>
                   <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cuestionarios <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        	<?php $i=0; ?>
                            <li>
                                <a href="cuestionario.php?id=<?php echo $_SESSION['id_tema'][$i]?>"><?php echo $_SESSION['nombre_tema'][$i];$i++;?></a>
                            </li>
                            <li>
                                <a href="cuestionario.php?id=<?php echo $_SESSION['id_tema'][$i]?>"><?php echo $_SESSION['nombre_tema'][$i];$i++;?></a>
                            </li>
                            <li>
                                <a href="cuestionario.php?id=<?php echo $_SESSION['id_tema'][$i]?>"><?php echo $_SESSION['nombre_tema'][$i];$i++;?></a>
                            </li>
                             <li>
                                <a href="cuestionario.php?id=<?php echo $_SESSION['id_tema'][$i]?>"><?php echo $_SESSION['nombre_tema'][$i];$i++;?></a>
                            </li>
                            <li>
                                <a href="cuestionario.php?id=<?php echo $_SESSION['id_tema'][$i]?>"><?php echo $_SESSION['nombre_tema'][$i];$i++;?></a>
                            </li>
                            <li>
                                <a href="cuestionario.php?id=<?php echo $_SESSION['id_tema'][$i]?>"><?php echo $_SESSION['nombre_tema'][$i];$i++;?></a>
                            </li>
                        </ul>
                    </li>
                   <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">FAQs <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        <?php $i=0; ?>
                            <li>
                                <a href="faq.php?id=<?php echo $_SESSION['id_tema'][$i]?>"><?php echo $_SESSION['nombre_tema'][$i];$i++;?></a>
                            </li>
                            <li>
                               <a href="faq.php?id=<?php echo $_SESSION['id_tema'][$i]?>"><?php echo $_SESSION['nombre_tema'][$i];$i++;?></a>
                            </li>
                            <li>
                                <a href="faq.php?id=<?php echo $_SESSION['id_tema'][$i]?>"><?php echo $_SESSION['nombre_tema'][$i];$i++;?></a>
                            </li>
                             <li>
                                <a href="faq.php?id=<?php echo $_SESSION['id_tema'][$i]?>"><?php echo $_SESSION['nombre_tema'][$i];$i++;?></a>
                            </li>
                            <li>
                                <a href="faq.php?id=<?php echo $_SESSION['id_tema'][$i]?>"><?php echo $_SESSION['nombre_tema'][$i];$i++;?></a>
                            </li>
                            <li>
                                <a href="faq.php?id=<?php echo $_SESSION['id_tema'][$i]?>"><?php echo $_SESSION['nombre_tema'][$i];$i++;?></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="cine.php">Sesión de Cine</a>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Más <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        	<li>
                                <a href="normativa_legislacion.php">Normativa y Legislación</a>
                            </li>
                            <li>
                                <a href="otros_enlaces_legislacion.php">Otros enlaces sobre legislación</a>
                            </li>
                            <li>
                                <a href="accesibilidad.php">Accesibilidad</a>
                            </li>
                            <li>
                                <a href="redes_sociales.php">Redes Sociales</a>
                            </li>
                            <li>
                                <a href="acerca_de.php">Acerca de</a>
                            </li>
                            <li>
                                <a href="contacto.php">Contacto</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Error
                    <small>Página no encontrada</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">404</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">

            <div class="col-lg-12">
                <div class="jumbotron">
                    <h1><span class="error-404">404</span>
                    </h1>
                    <p>La página que está buscando no existe.<br> Compruebe que ha escrito correctamente la dirección.</p>
                </div>
            </div>

        </div>

        <hr>

        <!-- Footer -->
         <footer>
            <div class="row">
                <div class="col-lg-12">
                  <p><b>Copyright &copy; Harry el Limpio 2016</b></p>
                  <p align="center"><b>Síguenos en:</b><br>
                   <a href="https://twitter.com/harrylimpio" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></a>
                   <a href="https://plus.google.com/u/0/104216994864576232076/posts?hl=es" target="_blank"><i class="fa fa-google-plus-square fa-2x"></i></a>
                   </p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
