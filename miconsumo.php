<!DOCTYPE html>
<html lang="en">
<?php
		include 'abrirconexion.php';
		session_start();
	?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Rubén Miguélez Tercero">

    <title>DomoTIC</title>

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
<script> var chart </script>

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
				 <li>
                        <a href="tiempo_real.htm">En directo</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Más gráficos <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        <?php $i=0; ?>
                            <li>
                                <a href="#">Electricidad</a>
                            </li>
                            <li>
                               <a href="#">Agua y jardín</a>
                            </li>
							<li>
                               <a href="#">Calefacción y gas</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">Mi perfil</a>
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
                <h1 class="page-header">Mi consumo
                    <small>DomoTIC</small>
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
		$idcliente=$_SESSION['idcliente'];
		$nombre_usuario=$_SESSION['nombre'];
		$tam="SELECT id,valorDato FROM datos where (idcliente=$idcliente && tipoSensor='1')";
		$resultado_tam = $conexion->query($tam);//nos creamos dos arrays para almacenar el tiempo y el valor numérico
		while ($registro_tam =  $resultado_tam->fetch_assoc ()){
			$valoresArray[$i]=$registro_tam['valorDato'];
			$timeArray[$i]=$registro_tam['id'];
			$i=$i+1;
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
        text: 'Gráfica temperaturas del cliente <?php echo $nombre_usuario; ?>'
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


    </div>
    <!-- /.container -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
