<?php 
session_start();
// Set the JSON header
header("Content-type: text/json");
// The x value is the current JavaScript time, which is the Unix time multiplied by 1000.
include 'abrirconexion.php';
//session_start();
		date_default_timezone_set('UTC');
		$i=0;
		$idcliente=$_SESSION['idcliente'];
                $nombre_usuario=$_SESSION['nombre'];
                $tam="SELECT fecha,valorDatos FROM datos where (idcliente='$idcliente') ORDER BY fecha ASC";
                $resultado_tam = $conexion->query($tam);//nos creamos dos arrays para almacenar el tiempo y el valor numérico
                //$serie = new StdClass;
		$serie = new StdClass;
                $serie->name = $idcliente;
		while ($registro_tam =  $resultado_tam->fetch_assoc ()) {
                        //$y=$registro_tam['valorDatos'];
                        //$_SESSION['y']=$registro_tam['valorDatos'];
			//$x = $registro_tam['id']
	//		$serie = new StdClass;
	//		$serie->name = '1';
			//echo $timeArray[$i];
			$points[] = array(strtotime($registro_tam['fecha'])*1000, floatval($registro_tam['valorDatos']));
			//$serie->data = $points;
			//$series[] = $serie;
			//$series[] = $serie;
			$i = $i+1;
                }
		 $serie->count = $i;
		 $serie->data = $points;
                 $series[] = $serie;

//$x = time() * 1000;
//$y=rand(0,100);
//$ret = array($i,$timeArray, $valoresArray);
$ret = $series;
echo json_encode($ret);

?>
