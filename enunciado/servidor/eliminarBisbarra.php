<?php
	// Conectamos coa base de datos
	require("conexion.php");

	$consulta = "DELETE
				   FROM lugares
				  WHERE bisbarra = '".$_POST['codigo']."'";

	$conexion->query($consulta);
	
	$consulta = "DELETE
				   FROM bisbarras
				  WHERE idBisbarra = '".$_POST['codigo']."'";

	$conexion->query($consulta);
	$conexion->close();
?>