<?php

include 'abrirconexion.php';

										
if (isset($_POST['usuario'])){
	$email = $_POST["usuario"];
	$password = $_POST["password"];
	// Creamos la consulta SQL
	$consulta = "SELECT * FROM usuario WHERE email='$email'";
	$resultado = $conexion->query($consulta);
	if (!$resultado) {
		die("No se puede realizar la consulta $conexion->errno: $conexion->error");
	}
	if($resultado->num_rows>0){
		if ($registro = $resultado->fetch_assoc()){
			$_SESSION['id'] = $registro['id'];
			$_SESSION['nombre'] = $registro['nombre'];
			$_SESSION['email'] = $registro['email'];
			}
		header('Location: ../www/redes_sociales.php');
	} else {
			echo "Email o clave incorrecta";
			}
										
	// Liberamos el recurso $resultado
		$resultado->free();
} 
?>