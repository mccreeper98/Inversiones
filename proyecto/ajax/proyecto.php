<?php 

require '../conn.php';//Archivo de conexion a la base de datos

//Definicion de las variables necesarias
$nombre = $_POST['nombre'];
$porcentaje = $_POST['porcentaje'];
$requerido = $_POST['requerido'];
$inversion = $_POST['inversion'];
$financiamieto = $_POST['financiamieto'];
$tipo = $_POST['tipo'];
$sector = $_POST['sector'];
$plazo = $_POST['plazo'];
$taza = $_POST['taza'];
$descripcion = $_POST['descripcion'];

//Filtro anti-XSS
$caracteres_malos = array("<", ">", "\"", "'", "/", "<", ">", "'", "/");
$caracteres_buenos = array("&lt;", "&gt;", "&quot;", "&#x27;", "&#x2F;", "&#060;", "&#062;", "&#039;", "&#047;");

$nombre = str_replace($caracteres_malos,$caracteres_buenos ,$nombre);
$porcentaje = str_replace($caracteres_malos,$caracteres_buenos ,$porcentaje);
$requerido = str_replace($caracteres_malos,$caracteres_buenos ,$requerido);
$inversion = str_replace($caracteres_malos,$caracteres_buenos ,$inversion);
$financiamieto = str_replace($caracteres_malos,$caracteres_buenos ,$financiamieto);
$tipo = str_replace($caracteres_malos,$caracteres_buenos ,$tipo);
$sector = str_replace($caracteres_malos,$caracteres_buenos ,$sector);
$plazo = str_replace($caracteres_malos,$caracteres_buenos ,$plazo);
$taza = str_replace($caracteres_malos,$caracteres_buenos ,$taza);
$descripcion = str_replace($caracteres_malos,$caracteres_buenos ,$descripcion);
$descripcion = nl2br($descripcion);

if (empty($nombre)) {
	echo "Es necesario un nombre";
}elseif (empty($porcentaje)) {
	echo "Es necesario un porcentaje";
}elseif (empty($requerido)) {
	echo "Es necesario un monto requerido";
}elseif (empty($inversion)) {
	echo "Es necesaria una inversion minima";
}elseif (empty($financiamieto)) {
	echo "Es necesario un tipo de financiamieto";
}elseif (empty($tipo)) {
	echo "Es necesario un tipo de proyecto";
}elseif (empty($sector)) {
	echo "Es necesario un sector";
}elseif (empty($plazo)) {
	echo "Es necesario un plazo";
}elseif (empty($taza)) {
	echo "Es necesaria una taza";
}elseif (empty($descripcion)) {
	echo "Es necesaria una descripcion";
}elseif (isset($nombre) AND isset($porcentaje) AND isset($requerido) AND isset($inversion) AND isset($financiamieto) AND isset($tipo) AND isset($sector) AND isset($plazo) AND isset($taza) AND isset($descripcion)) {
	
	if (isset($_FILES['imagen'])) {
	
	//Cantidad de imagenes	
	$cantidad= count($_FILES["imagen"]["tmp_name"]);

	//Extensiones permitidas
	$extensiones = array('jpg', 'jpeg', 'gif', 'png', 'bmp');

	//Insercion de los datos
	$subirDatos = "INSERT INTO proyecto (Por, Nombre, Req, Inv, Fina, Tip, Sector, Plazo, Taza, Des) VALUES ('$porcentaje', '$nombre', '$requerido', '$inversion', '$financiamieto', 'tipo', 'sector', 'plazo','$taza', '$descripcion')";
	if ($conn->query($subirDatos)) {
		$last_id = $conn->lastInsertId();
		echo $cantidad;
	/*	
	for ($i=0; $i<$cantidad; $i++){
	
	if ($_FILES["imagen"]['error'][$i] === 0) {
		//Comvertimos las imagenes a binarias	
		$imagenBinaria = addslashes(file_get_contents($_FILES['imagen']['tmp_name'][$i]));

		$nombreArchivo = $_FILES['imagen']['name'][$i];

		//Obtenemos la extensino para poder comparar
		$extebsionimg = strtolower(end(explode('.', $nombreArchivo)));
		//Verificamos que sea una extension permitida, si no lo es mostramos un mensaje de error
		if (!in_array($extebsionimg, $extennsiones)) {
			echo "Solo se permiten archivos con las siguientes extensiones : ".implode(',', $extennsiones)."";
		}else{
			//Si la extensión es correcta, procedemos a comprobar el tamaño del archivo subido
		//Y definimos el máximo que se puede subir
		//Por defecto el máximo es de 2 MB, pero se puede aumentar desde el .htaccess o en la directiva 'upload_max_filesize' en el php.ini
			$tamañoArchivo = $_FILES['imagen']['size'][$i];//obtenemos el tamaño del archivo en Bytes
			$tamañoArchivoKB = round(intval(strval($tamañoArchivo/ 1024)));//Pasamos el tamaño del archivo a KB
			$tamañoMaximoKB = "2048";//Tamño maximo expresado en KB
			$tamañoMaximoBytes = $tamañoMaximoKB * 1024; // ->2097152 Bytes - 2MB

			//Comprobamos el tamaño del archivo, y mostramos un mensaje si es mayor al tamao expresado en Bytes
			if ($tamañoArchivo > $tamañoMaximoBytes) {
				echo "El archivo ".$nombreArchivo." es demasiado grande. El tamaño maximo de archivo es de ".$tamañoMaximoKB."Kb.";
			}else{
				//Si el tamaño es correcto, subimos los datos
				$subirImg = "INSERT INTO images (idProy, img) VALUES ('$last_id','$imagenBinaria')";
				if ($conn->query($subirImg)) {
					if ($cantidad === $i) {
						echo "done";
					}
				}else{
					echo "Error al subir imagen";
				}

			}//Fin condicional tamaño

		}//Fin condicional extennsiones
	}//Fin error img
	
	}//Fin for*/
	}else{
		echo "Parece que ha habido un error Recargue la página e intentelo nuevamente.";
	}//Fin InsertDatos
	}else{
		echo "Seleccione una imagen.";
	}

}//Fin condicional para saber si todos los campos estan completos

?>