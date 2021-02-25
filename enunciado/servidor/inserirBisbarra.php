<?php
	// Conectamos coa base de datos
	require("conexion.php");
	
	$consulta = "INSERT INTO bisbarras (nome)
				 VALUES ('".$_POST['bisbarra']."')";

	$conexion->query($consulta);
	$conexion->close();
?>