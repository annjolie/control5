<?php
	// Conectamos coa base de datos
	require("conexion.php");

	$consulta = "DELETE
				   FROM lugares
				  WHERE idLugar = '".$_POST['codigo']."'";

	$conexion->query($consulta);
	$conexion->close();
?>