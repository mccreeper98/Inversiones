<?php

	$sgrdd = "SHA256";

	 if (isset($_POST['variable']) AND isset($_POST['correo'])) {


	 	$variable = $_POST['variable'];
	 	$correo = $_POST['correo'];
	 	$confirmacion = "confirmar";
	 	$confirmacionH= hash($sgrdd, $confirmacion);
	 	
	 }
	 else{

	 	$variable = "";
	 	$correo = "";
	 	$confirmacion = "";
	 	$confirmacionH="";
	 }

	 if (empty($variable) || empty($confirmacion) || empty($confirmacionH) || empty($correo))  {
	 	echo "Error";
	 }else{
	 	$comp = "";
	 	try{
	 		require '../conn.php';
	 		$recuperarCorreos = "SELECT Email FROM usuario";
	 		$buscarCorreos = $conn->query($recuperarCorreos);
	 		foreach ($buscarCorreos as $c) {
	 			if ($correo == $c['Email']) {
	 				$comp = "si";
	 				$actualizarEstado = "UPDATE usuario SET Estado = '1' WHERE correo = '$correo'";
			 		if ($conn->query($actualizarEstado);) {
			 			echo "done";
			 		}
			 			
			 		$conn->exit();
	 			}
	 		}
	 		if ($comp != "si") {
	 			echo "existe";
	 		}
	 		
	 	}catch (PDOException $e){
	 		echo "Error";
	 	}
	 }

?>