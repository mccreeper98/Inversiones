<?php 

if (isset($_POST['correo'])) {

	$correo = trim(filter_var($_POST['correo'], FILTER_SANITIZE_EMAIL));
	//$pswH = hash($sgrdd, $psw);
	$queryUsuario = "SELECT Email FROM usuario";
	$queryPsw = "SELECT idUsr,Psw,Usuario,Tipo FROM usuario WHERE Email='$correo'"; 

} else {

	$correo = "";
	$queryUsuario = "";
	$queryPsw = "";

}

if (empty($correo)) {
	require 'view/login.view.php';
} else {
	try {
		require '../conn.php';
		$buscarUsuario = $conn->query($queryUsuario);
			foreach ($buscarUsuario as $usuario) {
					if ($correo === $usuario['Email']) {
						//echo "Correo encontrado <br>";
						$buscarPass = $conn->query($queryPsw);
						foreach ($buscarPass as $passU) {
							if ($passU['Tipo'] == 0) {
								//echo "Contrseña "+$psw;
								session_start();
								$_SESSION['tipo'] = '0';
								$_SESSION['user'] = $passU['Usuario'];
								$_SESSION['id'] = $passU['idUsr']; 
								echo 'entro';
								die();
							}
							}
						}
					}
					echo'registro';
	} catch (Exception $e) {
		require 'view/error.view.php';
	}

}

?>
