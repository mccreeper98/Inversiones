<?php

	if (isset($_POST['nombre']) || isset($_POST['porcentaje']) || isset($_POST['requerido']) || isset($_POST['inversion']) || isset($_POST['financiamiento']) || isset($_POST['tipo']) || isset($_POST['sector']) || isset($_POST['plazo']) || isset($_POST['taza']) || isset($_POST['descripcion']) || ($_FILES['imagen']['error'] === 4)) {


		$nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		$porcentaje = filter_var($_POST['porcentaje'], FILTER_SANITIZE_STRING, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		$requerido = filter_var($_POST['requerido'], FILTER_SANITIZE_STRING, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		$inversion = filter_var($_POST['inversion'], FILTER_SANITIZE_STRING, FILTER_SANITIZE_FULL_SPECIAL_CHARS);	
		$financiamiento = filter_var($_POST['financiamiento'], FILTER_SANITIZE_STRING, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		$tipo = filter_var($_POST['tipo'], FILTER_SANITIZE_STRING, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		$sector = filter_var($_POST['sector'], FILTER_SANITIZE_STRING, FILTER_SANITIZE_FULL_SPECIAL_CHARS);	
		$plazo = filter_var($_POST['plazo'], FILTER_SANITIZE_STRING, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		$taza = filter_var($_POST['taza'], FILTER_SANITIZE_STRING, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		$des = filter_var($_POST['descripcion'], FILTER_SANITIZE_STRING, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		$descripcion = n12br($des);

		$imagenBinaria = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

		$nombredelArchivo = $_FILES['imagen']['name'];

		$extenciones = array('jpg','jpeg','gif','png','bmp');

		$extencion = strtolower(end(explode('.', $nombredelArchivo)));

		if (!in_array($extencion, $extenciones)) {
			/*die('Solo se permiten archivos con las siguientes extensiones: '.implode(', ', $extenciones));*/
			echo "extencion";
			return false;
		}else{

			$tamanioArchivo = $_FILES['imagen']['size'];
			$tamanioArchivoKB = round(intval(strval($tamanioArchivo / 1024)));

			$tamanioMaximoKB = "2048";
			$tamanioMaximoBytes = $tamanioMaximoKB*1024; // ->2097152 Bytes -> 2MB

			if ($tamanioArchivo > $tamanioMaximoBytes) {
				/*die("El archivo ".$nombredelArchivo." es demaciado grande. El tamaño maximo del archivo es de ".$tamanioMaximoKB."KB");*/
				echo "tamaño";
				return false;
			}else{

				try{

					require '../conn.php';

					$recuperarProyectos = "SELECT Nombre FROM proyectos";
					$buscarProyectos = $conn->query($recuperarProyectos);
					foreach ($buscarProyectos as $p) {
						if ($nombre == $p['Nombre']) {
							echo "existe";
							return false;
						}
					}

					$queryAgregarProyecto = "INSERT INTO proyecto (Por,Nombre,Req,Inv,Fina,Tip,Sector,Plazo,Taza,Des) VALUES ('$porcentaje','$nombre','$requerido','$inversion','$financiamiento','tipo','$sector','$plazo','$taza','$descripcion')";
					$queryAgregarImg = "INSERT INTO images (idProy,img) VALUES ('$nombre','$imagenBinaria')";

					$conn->query($queryAgregarProyecto);
					$conn->query($queryAgregarImg);
					echo "done";

				}catch(PDOException $e){
					echo "Error";
				}

			}

		}

	 }
	 else{
	 	echo "Error";
	 }

?>