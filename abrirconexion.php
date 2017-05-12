<?php

// Definimos los parámetros
           $host = "localhost";
           $user = "miguelm";
           $password = "7Ujm6Yhn";
           $database = "domotic";


        // **************** ORIENTADO A OBJETOS ***************
        // Nos conectamos a nuestra base de datos
            $conexion= new mysqli($host, $user,$password,$database);
            if ($conexion->connect_errno) {
                die("Error de conexión $conexion->connect_errno: $conexion->connect_error");
            }
			$conexion->query("SET NAMES 'utf8'");

?>