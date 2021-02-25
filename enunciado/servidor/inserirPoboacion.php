<?php
	// Conectamos coa base de datos
	require("conexion.php");
	
	// Collemos o código da bisbarra para inserilo na táboa de poboacións
   	$consulta = "SELECT idBisbarra 
				   FROM bisbarras
				  WHERE nome='".$_POST['bisbarra']."'";

	$saida = "ERRO";
	if ($datos = $conexion->query($consulta)) {   		
		if ($datos->num_rows > 0) {
			$datosBisbarra = $datos->fetch_object();
			$bisbarra = $datosBisbarra->idBisbarra;
			
			// Inserimos a nova poboación e o código da bisbarra na táboa de poboacións
			$consulta = "INSERT INTO lugares (nome,bisbarra)
							  VALUES ('".$_POST['poboacion']."','".$bisbarra."')";

			$conexion->query($consulta);
			$saida = "OK";
		}
		$datos->close();
	}
	$conexion->close();
	echo $saida;
?>