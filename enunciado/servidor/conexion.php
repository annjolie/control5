<?php
	$servidor="localhost";
	$usuario="root";
	$contrasinal="abc123.";
	$baseDatos="bisbarras";

	// Creamos a conexión
	$conexion = new mysqli($servidor, $usuario, $contrasinal, $baseDatos);
	$conexion->query("SET NAMES 'utf8'");
?>
