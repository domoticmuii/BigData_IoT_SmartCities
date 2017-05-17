<?php

// Definimos los parámetros
           $host = "10.0.0.4";
           $user = "root";
           $password = "patata06";
           $database = "Domotic";


        // **************** ORIENTADO A OBJETOS ***************
        // Nos conectamos a nuestra base de datos
            $conexion= new mysqli($host, $user,$password,$database);
            if ($conexion->connect_errno) {
                die("Error de conexión $conexion->connect_errno: $conexion->connect_error");
            }
			$conexion->query("SET NAMES 'utf8'");

?>
