<?php

	 if (isset($_POST['correo']) || isset($_POST['nombre']) || isset($_POST['app']) || isset($_POST['psw'])) {


	 	$correo = trim(filter_var($_POST['correo'], FILTER_SANITIZE_EMAIL));
	 	$psw = trim($_POST['psw']);
	 	$nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	 	$app = filter_var($_POST['app'], FILTER_SANITIZE_STRING, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	 	$pswH = hash($sgrdd, $psw);
	 	
	 }else{

	 	$correo = "";
		$psw = "";
	 	$nombre = "";
	 	$app = "";
	 	$apm = "";
	 	$pswH = "";
	 	$confirmacion = "";
	 	$confirmacionH="";
	 }

	 if (empty($correo) || empty($psw) || empty($nombre) || empty($app)){
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

	 		// Destinatario
			$para  = $correo;

			// título
			$título = 'Activacion de Cuenta de Inversiones';

			// mensaje
			$mensaje = '
			<html>
			<head>
			  <title>Confirmacion de Cuenta</title>
			</head>
			<style type="text/css">
			  .boton{
			        font-size:10px;
			        font-family:Verdana,Helvetica;
			        font-weight:bold;
			        color:white;
			        background:#638cb5;
			        border:0px;
			        width:80px;
			        height:25px;
			       }

			</style>
			<body align="center">
			  <h3>Confirmacion de Cuenta</h3>
			  <br>
			  <p>Se ha registrado en la pagina de inversiones</p>
			  <p>con Facebook su contraseña es:</p>
			  <br>
			  <p>'.$psw.'</p>
			  <br>
			  <br>
			  <p>De lo contrario ignore este email y revise sus accesos de Facebook.</p>
			</body>
			</html>
			';

			// Para enviar un correo HTML, debe establecerse la cabecera Content-type
			$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
			$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

			// Cabeceras adicionales
			$cabeceras .= 'To:'.$nombre.' <'.$correo.'>' . "\r\n";
			$cabeceras .= 'From: Activacion <contacto@example.com>' . "\r\n";

	 		$queryAgregar = "INSERT INTO usuario (Nombre,App,Email,Psw,Tipo,Estado) VALUES ('$nombre','$app','$correo','$psw','0','1')";
	 		$bool = mail($para, $título, $mensaje, $cabeceras);
	 		if ($bool) {
	 			if($conn->query($queryAgregar)){
	 			echo "bien";
	 			}else{
	 				echo "insert";
	 			}
	 		}else{
	 			echo "correo";
	 		}
	 		
	 	}catch (PDOException $e){
	 		echo "Error";
	 	}
	 }

?>
