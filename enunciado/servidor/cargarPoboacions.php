<?php
	// Conectamos coa base de datos
	require("conexion.php");

	// Collemos as poboacións pertencentes a unha bisbarra para amosalas nun despregábel
   	$consulta = "SELECT idLugar, nome 
				   FROM lugares
				  WHERE bisbarra='".$_GET['codigo']."'
			   ORDER BY nome";

	$saida = array();
	if ($datos = $conexion->query($consulta)) {   		
		while ($poboacions = $datos->fetch_object()) {
			$saida[] = $poboacions;
		}
		$datos->close();
	}
	$conexion->close();
	echo json_encode($saida);
?>