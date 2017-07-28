	<?php

if (isset($_POST['correo']) || isset($_POST['psw'])) {

	$correo = trim(filter_var($_POST['correo'], FILTER_SANITIZE_EMAIL));
	$psw = $_POST['psw'];
	$sgrdd = "SHA256";
	//$pswH = hash($sgrdd, $psw);
	$queryUsuario = "SELECT Email,Estado FROM usuario";
	$queryPsw = "SELECT idUsr,Psw,Usuario,Tipo FROM usuario WHERE Email='$correo'"; 

} else {

	$correo = "";
	$psw = "";
	$sgrdd = "";
	$pswH = "";
	$queryUsuario = "";
	$queryPsw = "";

}

if (empty($correo) || empty($psw)) {
	require 'view/login.view.php';
} else {
	try {
		require 'conn.php';
		$buscarUsuario = $conn->query($queryUsuario);
			foreach ($buscarUsuario as $usuario) {
					if ($correo == $usuario['Email'] && $usuario['Estado'] == 1) {
						//echo "Correo encontrado <br>";
						$buscarPass = $conn->query($queryPsw);
						foreach ($buscarPass as $passU) {
							if ($psw == $passU['Psw'] && $passU['Tipo'] == 0) {
								//echo "Contrseña "+$psw;
								session_start();
								$_SESSION['tipo'] = '0';
								$_SESSION['user'] = $passU['Usuario'];
								$_SESSION['id'] = $passU['idUsr']; 
								header("Location: index");
								die();
							}
							elseif ($psw == $passU['Psw'] && $passU['Tipo'] == 1) {
								session_start();
								$_SESSION['tipo'] = '1';
								$_SESSION['user'] = $passU['Usuario'];
								header("Location: admin");
								die();
								}
								else {
								header("Location: login.php?p");
								die();
								}
							}
						}else{
							if ($usuario['Estado']==0) {
								echo "La cuenta debe de ser avtivada";
								die();
							}
						}
					}
				
	echo "No registrado";
	} catch (Exception $e) {
		require 'view/error.view.php';
	}

}

?>

