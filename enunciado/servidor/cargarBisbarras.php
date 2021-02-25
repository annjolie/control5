<?php
	// Conectamos coa base de datos
	require("conexion.php");

	// Collemos as bisbarras para amosalas nun despreg�bel
   	$consulta = "SELECT idBisbarra, nome 
				   FROM bisbarras
			   ORDER BY nome";

	$saida = array();
	if ($datos = $conexion->query($consulta)) {   		
		while ($bisbarra = $datos->fetch_object()) {
			$saida[] = $bisbarra;
		}
		$datos->close();
	}
	$conexion->close();
	echo json_encode($saida);
?>