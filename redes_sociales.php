<!DOCTYPE html>
<html lang="en">
<?php
		include 'abrirconexion.php';
	?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Harry el Limpio también está presente en las Redes Sociales. Aquí podrás seguir nuestra acción en ellas y ¡No olvides seguirnos!">
    <meta name="author" content="Rubén Miguélez Tercero">

    <title>Redes Sociales - Harry el Limpio</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="icon" 
      type="image/png" 
      href="imagenes/icono.png"/>
       <script src="https://apis.google.com/js/platform.js" async defer>
  {lang: 'es'}
</script> 

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
                        </ul>
                    </li>
                    <li>
                        <a href="cine.php">Sesión de Cine</a>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Más <b class="caret"></b></a>
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
                <h1 class="page-header">Redes Sociales
                    <small>Harry el Limpio</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Redes Sociales</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

		<?php	
		$i=0;
		$tam="SELECT * FROM temperatura";
		$resultado_tam = $conexion->query($tam);//nos creamos dos arrays para almacenar el tiempo y el valor numérico
		while ($registro_tam =  $resultado_tam->fetch_assoc ()){
			$valoresArray[$i]=$registro_tam['Grados'];
			$timeArray[$i]=$registro_tam['Tiempo'];
			/*echo($limite); 
			echo(" ");
			echo($limite2);
			echo(" ");*/
			$i=$i+1;
			/*echo($i);
			echo "<br>";*/
		}
		$tam=$i
?>
       <div id="contenedor"></div>

		<script src="https://code.jquery.com/jquery.js"></script>
    <!-- Importo el archivo Javascript de Highcharts directamente desde su servidor -->
<script src="http://code.highcharts.com/stock/highstock.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<script>

chartCPU = new Highcharts.StockChart({
    chart: {
        renderTo: 'contenedor'
        //defaultSeriesType: 'spline'

    },
    rangeSelector : {
        enabled: false
    },
    title: {
        text: 'Gráfica de prueba del Maestro Miguélez'
    },
    xAxis: {
        type: 'number'
        //tickPixelInterval: 150,
        //maxZoom: 20 * 1000
    },
    yAxis: {
        minPadding: 0.2,
        maxPadding: 0.2,
        title: {
            text: 'Temperatura',
            margin: 10
        }
    },
    series: [{
        name: 'valor',
        data: (function() {
                // generate an array of random data
                var data = [];
                <?php
                    for($i = 0 ;$i<$tam;$i++){
                ?>
                data.push([<?php echo $timeArray[$i];?>,<?php echo $valoresArray[$i];?>]);
                <?php } ?>
                return data;
            })()
    }],
    credits: {
            enabled: false
    }
});

</script>  
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
