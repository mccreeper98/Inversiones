<?php

	$sgrdd = "SHA256";

	 if (isset($_POST['correo']) || isset($_POST['nombre']) || isset($_POST['app']) || isset($_POST['apm']) || isset($_POST['psw'])) {


	 	$correo = trim(filter_var($_POST['correo'], FILTER_SANITIZE_EMAIL));
	 	$psw = trim($_POST['psw']);
	 	$nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	 	$app = filter_var($_POST['app'], FILTER_SANITIZE_STRING, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	 	$apm = filter_var($_POST['apm'], FILTER_SANITIZE_STRING, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	 	$pswH = hash($sgrdd, $psw);
	 }
	 else{

	 	$correo = "";
		$psw = "";
	 	$nombre = "";
	 	$app = "";
	 	$apm = "";
	 	$pswH = "";
	 }

	 if (empty($correo) || empty($psw) || empty($nombre) || empty($app) || empty($apm))  {
	 	echo "Error";
	 }else{
	 	try{
	 		require '../conn.php';
	 		$recuperarCorreos = "SELECT Email FROM usuario";
	 		$buscarCorreos = $conn->query($recuperarCorreos);
	 		foreach ($buscarCorreos as $c) {
	 			if ($correo == $c['Email']) {
	 				echo "existe";
	 				return false;
	 			}
	 		}

	 		$queryAgregar = "INSERT INTO usuario (Nombre,App,Apm,Email,Psw,Tipo) VALUES ('$nombre','$app','$apm','$correo','$pswH','0')";
	 		$conn->query($queryAgregar);
	 		echo "done";
	 	}catch (PDOException $e){
	 		echo "Error";
	 	}
	 }

?>