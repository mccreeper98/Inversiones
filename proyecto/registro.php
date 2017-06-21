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


	 $AltaUsuario = " INSERT INTO usuario (Nombre,App,Apm,Email,Psw,Tipo) VALUES ('$nombre','$app','$apm','$correo','$pswH','0')";
	 $recuperarCorreos = "SELECT Email FROM usuario";

	 if (empty($correo) || empty($psw) || empty($nombre) || empty($app) || empty($apm))  {
	 	require 'view/registro.view.php';
	 }
	 else{
	 	try {
      		require 'conn.php';//archivo connecion
			$buscarCorreo = $conn->query($recuperarCorreos);
			foreach ($buscarCorreo as $c) {
				if ($correo == $c['Email'] ) {
					echo "!!!Ya Existe Una Cuenta Con Este Correo!!";
					return false;
				}
			}
				$conn->query($AltaUsuario);	
					echo "Cuenta Registrada";
					header("Location: registra?exito");
      		die();
		}
		catch (PDOException $e) {

			require 'view/error.view.php';

		}
	}
?>
