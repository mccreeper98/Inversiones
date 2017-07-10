<?php

	$sgrdd = "SHA256";

	 if (isset($_POST['correo']) || isset($_POST['nombre']) || isset($_POST['app']) || isset($_POST['apm']) || isset($_POST['psw'])) {


	 	$correo = trim(filter_var($_POST['correo'], FILTER_SANITIZE_EMAIL));
	 	$psw = trim($_POST['psw']);
	 	$nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	 	$app = filter_var($_POST['app'], FILTER_SANITIZE_STRING, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	 	$apm = filter_var($_POST['apm'], FILTER_SANITIZE_STRING, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	 	$pswH = hash($sgrdd, $psw);
	 	$confirmacion = "confirmar";
	 	$confirmacionH= hash($sgrdd, $confirmacion);
	 	
	 }
	 else{

	 	$correo = "";
		$psw = "";
	 	$nombre = "";
	 	$app = "";
	 	$apm = "";
	 	$pswH = "";
	 	$confirmacion = "";
	 	$confirmacionH="";
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

	 		// Destinatario
			$para  = $correo;

			// título
			$título = 'Activacion de Perfil de Inversiones';

			// mensaje
			$mensaje = '
			<html>
			<head>
			  <title>Confirmacion de Correo</title>
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
			  <h3>Confirmacion de Correo</h3>
			  <br>
			  <p>Si se ha registrado en la pagina de inversiones</p>
			  <p>de click en el siguiente enlace para confirmar su correo:</p>
			  <br>
			  <a href="https://antxtolentino.000webhostapp.com/activar.php?v=<?php echo $confirmacionH;?>&c=<?php echo $correo;?>"><button class="boton">Confirmar Correo</button></a>
			  <br>
			  <br>
			  <p>De lo contrario ignore este email.</p>
			</body>
			</html>
			';

			// Para enviar un correo HTML, debe establecerse la cabecera Content-type
			$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
			$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

			// Cabeceras adicionales
			$cabeceras .= 'To:'.$nombre.' <'.$correo.'>' . "\r\n";
			$cabeceras .= 'From: Activacion <contacto@example.com>' . "\r\n";

	 		$queryAgregar = "INSERT INTO usuario (Nombre,App,Apm,Email,Psw,Tipo,Estado) VALUES ('$nombre','$app','$apm','$correo','$pswH','0','0')";
	 		$conn->query($queryAgregar);
	 		if (mail($para, $título, $mensaje, $cabeceras);) {
	 			echo "done";
	 		}else{
	 			echo "correo";
	 		}
	 		$conn->exit();
	 		
	 	}catch (PDOException $e){
	 		echo "Error";
	 	}
	 }

?>