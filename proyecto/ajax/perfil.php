<?php
session_start();
//Archivo de conexión a la base de datos
require('../conn.php');
	
//Creamos las variables necesarias
$usuario = $_POST['usuario'];
$telefono = $_POST['telefono'];
$clave = $_POST['clave'];
$rfc = $_POST['rfc'];
$calle = $_POST['calle'];
$ext = $_POST['ext'];
$int = $_POST['int'];
$colonia = $_POST['colonia'];
$cp = $_POST['cp'];
$pais = $_POST['pais'];
$id = $_SESSION['id'];
$_SESSION['user'] = $usuario;

//Filtro anti-XSS
$caracteres_malos = array("<", ">", "\"", "'", "/", "<", ">", "'", "/");
$caracteres_buenos = array("&lt;", "&gt;", "&quot;", "&#x27;", "&#x2F;", "&#060;", "&#062;", "&#039;", "&#047;");

$usuario = str_replace($caracteres_malos, $caracteres_buenos, $usuario);
$telefono = str_replace($caracteres_malos, $caracteres_buenos, $telefono);
$clave = str_replace($caracteres_malos, $caracteres_buenos, $clave);
$rfc = str_replace($caracteres_malos,$caracteres_buenos ,$rfc);
$calle = str_replace($caracteres_malos,$caracteres_buenos ,$calle);
$ext = str_replace($caracteres_malos,$caracteres_buenos ,$ext);
$int = str_replace($caracteres_malos,$caracteres_buenos ,$int);
$colonia = str_replace($caracteres_malos,$caracteres_buenos ,$colonia);
$cp = str_replace($caracteres_malos,$caracteres_buenos ,$cp);
$pais = str_replace($caracteres_malos,$caracteres_buenos ,$pais);

//Cambiamos los ENTER por <br>
//$descripcion = nl2br($descripcion);

//Comprobamos que los inputs no estén vacíos, y si lo están, mandamos el mensaje correspondiente
if (empty($usuario)) {
	echo("Es necesario un telefono");
} elseif(empty($telefono)) {
	echo "Es necesario un telefono";
} elseif(empty($clave)) {
	echo "Es necesaria  una clave interbancaria";
}elseif(empty($rfc)) {
	echo "Es necesario  un RFC ";
}elseif(empty($calle)) {
	echo "Es necesaria  una calle ";
}elseif(empty($ext)) {
	echo "Es necesario  un numero exterior";
}elseif(empty($int)) {
	echo "Es necesario un numero interior";
}elseif(empty($colonia)) {
	echo "Es necesaria  una colonia";
}elseif(empty($cp)) {
	echo "Es necesario un codigo postal";
}elseif(empty($pais)) {
	echo "Es necesario un pais";
}elseif(empty($id)) {
	echo "Es necesario un iniciar sesion";
	//"Error 4" en los array de $_FILES significa que ningún archivo fue subido o incluido en el input
	//Más info en http://php.net/manual/es/features.file-upload.errors.php
} elseif($_FILES['inef']['error'] === 4) {
	echo "Es necesario establecer una imagen frontal para la INE";
} elseif($_FILES['ineb']['error'] === 4) {
	echo "Es necesario establecer una imagen trasera para la INE";
} elseif($_FILES['comp']['error'] === 4) {
	echo "Es necesario establecer una imagen para el comprobante de domicilio";
} elseif($_FILES['est']['error'] === 4) {
	echo "Es necesario establecer una imagen para el estado de cuenta";
	//Si los inputs están seteados y el archivo no tiene errores, se procede
} else if(isset($telefono) AND isset($usuario) AND isset($clave) AND isset($rfc) AND isset($calle) AND isset($ext) AND isset($int) AND isset($colonia) AND isset($cp) AND isset($pais)
	AND $_FILES['inef']['error'] === 0 AND $_FILES['ineb']['error'] === 0 AND $_FILES['comp']['error'] === 0 AND $_FILES['est']['error'] === 0 ) {

	//Convertimos la información de la imagen en binario para insertarla en la BBDD
	$inefBinaria = addslashes(file_get_contents($_FILES['inef']['tmp_name']));
	$inebBinaria = addslashes(file_get_contents($_FILES['ineb']['tmp_name']));
	$compBinaria = addslashes(file_get_contents($_FILES['comp']['tmp_name']));
	$estBinaria = addslashes(file_get_contents($_FILES['est']['tmp_name']));

	//Nombre del archivo
	$nombreArchivoInef = $_FILES['inef']['name'];
	$nombreArchivoIneb = $_FILES['ineb']['name'];
	$nombreArchivoComp = $_FILES['comp']['name'];
	$nombreArchivoEst = $_FILES['est']['name'];

	//Extensiones permitidas
	$extensiones = array('jpg', 'jpeg', 'gif', 'png', 'bmp');

	//Obtenemos la extensión (en minúsculas) para poder comparar
	$extensionInef = strtolower(end(explode('.', $nombreArchivoInef)));
	$extensionIneb = strtolower(end(explode('.', $nombreArchivoIneb)));
	$extensionComp = strtolower(end(explode('.', $nombreArchivoComp)));
	$extensionExt = strtolower(end(explode('.', $nombreArchivoEst)));
	
	//Verificamos que sea una extensión permitida, si no lo es mostramos un mensaje de error
	if(!in_array($extensionInef, $extensiones) || !in_array($extensionIneb, $extensiones) || !in_array($extensionComp, $extensiones) || !in_array($extensionExt, $extensiones)) {
		echo "Sólo se permiten archivos con las siguientes extensiones: ".implode(', ', $extensiones)."";
	} else {
		//Si la extensión es correcta, procedemos a comprobar el tamaño del archivo subido
		//Y definimos el máximo que se puede subir
		//Por defecto el máximo es de 2 MB, pero se puede aumentar desde el .htaccess o en la directiva 'upload_max_filesize' en el php.ini

		$tamañoArchivoInef = $_FILES['inef']['size']; //Obtenemos el tamaño del archivo en Bytes
		$tamañoArchivoIneb = $_FILES['ineb']['size']; //Obtenemos el tamaño del archivo en Bytes
		$tamañoArchivoComp = $_FILES['comp']['size']; //Obtenemos el tamaño del archivo en Bytes
		$tamañoArchivoEst = $_FILES['est']['size']; //Obtenemos el tamaño del archivo en Bytes
		$tamañoArchivoInefKB = round(intval(strval( $tamañoArchivoInef / 1024 ))); //Pasamos el tamaño del archivo a KB
		$tamañoArchivoInebKB = round(intval(strval( $tamañoArchivoIneb / 1024 ))); //Pasamos el tamaño del archivo a KB
		$tamañoArchivoCompKB = round(intval(strval( $tamañoArchivoComp / 1024 ))); //Pasamos el tamaño del archivo a KB
		$tamañoArchivoEstKB = round(intval(strval( $tamañoArchivoEst / 1024 ))); //Pasamos el tamaño del archivo a KB

		$tamañoMaximoKB = "2048"; //Tamaño máximo expresado en KB
		$tamañoMaximoBytes = $tamañoMaximoKB * 1024; // -> 2097152 Bytes -> 2 MB

		//Comprobamos el tamaño del archivo, y mostramos un mensaje si es mayor al tamaño expresado en Bytes
		if($tamañoArchivoInef > $tamañoMaximoBytes) {
			echo "El archivo ".$nombreArchivoInef." es demasiado grande. El tamaño máximo del archivo es de ".$tamañoMaximoKB."Kb.";
		}elseif ($tamañoArchivoIneb > $tamañoMaximoBytes) {
			echo "El archivo ".$nombreArchivoIneb." es demaciado grande. El tamaño máximo de archivo es de ".$tamañoMaximoKB."Kb.";
		}elseif ($tamañoArchivoComp > $tamañoMaximoBytes) {
			echo "El archivo ".$nombreArchivoComp." es demaciado grande. El tamaño máximo de archivo es de ".$tamañoMaximoKB."Kb.";
		}elseif ($tamañoArchivoEst > $tamañoMaximoBytes) {
			echo "El archivo ".$nombreArchivoEst." es demaciado grande. El tamaño máximo de archivo es de ".$tamañoMaximoKB."Kb.";
		}else {
			//Si el tamaño es correcto, subimos los datos
			$consulta = "INSERT INTO perfil (idUsr, Tel, Clave, Rfc, Calle, Ext, Inte, Col, Cp, Pais, IneF, IneB, Comp, Est) VALUES ('$id', '$telefono', '$clave', '$rfc', '$calle', '$ext', '$int', '$colonia', '$cp', '$pais', '$inefBinaria', '$inebBinaria', '$compBinaria', '$estBinaria')";
			$actualizacion = "UPDATE usuario SET Usuario = '$usuario' WHERE idUsr = '$id'";
			//Hacemos la inserción, y si es correcta, se procede
			if($conn->query($consulta)) {
				if ($conn->query($actualizacion)) {
					//Mostramos un mensaje
					echo "done";	
				}else{
					echo "Error al actualizar";
				}
				
			} else {
				//Si hay algún error con la inserción, se muestra un mensaje
				echo "Parece que ha habido un error. Recargue la página e inténtelo nuevamente.";
			};

		};//Fin condicional tamaño archivo

	};//Fin condicional extensiones

};//Fin condicional para saber si todos los campos necesarios están completos
?>