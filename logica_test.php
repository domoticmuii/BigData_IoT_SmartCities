<?php
	session_start();
	include "abrirconexion.php";
	$nota=0;
	$aciertos=0;
	$fallos=0;
	$check[]=array();
	$pre;
	for($i=0;$i<10;$i++){
		if(!isset($_POST["$i"]))
			$_POST["$i"]=0;
		switch ($_SESSION['respuestas'][$i]) {
		case 1:
			if(isset($_POST["$i"])&& $_POST["$i"]==1){
				$nota=$nota+1;
				$aciertos++;
				$pre="Correcta";
				array_push($check,$pre);
			}
			else if(isset($_POST["$i"]) && $_POST["$i"]==2){
				$nota=$nota-0.5;
				$fallos++;
				$pre="Incorrecta";
				array_push($check,$pre);
			}
			else{
				$pre="Sin contestar";
				array_push($check,$pre);
			}
			break;
		case 2:
			if(isset($_POST["$i"])&& $_POST["$i"]==2){
				$nota=$nota+1;
				$aciertos++;
				$pre="Correcta";;
				array_push($check,$pre);
			}
			else if(isset($_POST["$i"]) && $_POST["$i"]==1){
				$nota=$nota-0.5;
				$fallos++;
				$pre="Incorrecta";
				array_push($check,$pre);
			}
			else{
				$pre="Sin contestar";
				array_push($check,$pre);
			}
			break;
		}
		$_SESSION['usuario'][$i]=$_POST["$i"];
	}
	var_dump($nota);
	var_dump($check);
	$_SESSION['nota']=$nota;
	$_SESSION['aciertos']=$aciertos;
	$_SESSION['fallos']=$fallos;
	var_dump($_SESSION['respuestas']);
	header('Location:cuestionario_solucion.php');
?>