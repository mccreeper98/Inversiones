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

	try {

	//conmprobamos si existe el areglo de imagenes
    if(isset($_FILES['file_array'])){

   	//almacenamos las propiedades de las imagenes
    $name_array     = $_FILES['file_array']['name'];
    $tmp_name_array = $_FILES['file_array']['tmp_name'];
    $size_array     = $_FILES['file_array']['size'];
    $error_array    = $_FILES['file_array']['error'];

	}else{
		echo "No se ha elegido ninguna imagen";
	}//fin existe archivo

	$cantidad = count($tmp_name_array);

	for($x = 0; $x < $cantidad; $x++){

    // errores de $_FILES.
    switch ($error_array[$x]) {
        case UPLOAD_ERR_OK:
            break;
        case UPLOAD_ERR_NO_FILE:
            throw new RuntimeException('No se ha seleccionado una imagen.');
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
            throw new RuntimeException('Imagen demasiado grande.');
        default:
            throw new RuntimeException('Error desconocido a subir las imagenes.');
    }//fin errores de archivo

    // Se verifica el tamaño de las imagenes. 
    if ($size_array[$x] > 2000000) {
        throw new RuntimeException('se excedio el tamaño maximo de imagen.');
    }//fin condicion tamaño

    // Se verifica que los archivos sean imagenes.
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    if (false === $ext = array_search(
        $finfo->file($tmp_name_array[$x]),
        array(
            'jpg' => 'image/jpeg',
            'png' => 'image/png',
            'gif' => 'image/gif',
        ),
        true
    )) {
        throw new RuntimeException('Formato de imagen no valido.');
    }//fin condicion tipo de archivo
	}//fin del for validacion de imagenes

	//Insercion de los datos
	$subirDatos = "INSERT INTO proyecto (Por, Nombre, Req, Inv, Fina, Tip, Sector, Plazo, Taza, Des) VALUES ('$porcentaje', '$nombre', '$requerido', '$inversion', '$financiamieto', 'tipo', 'sector', 'plazo','$taza', '$descripcion')";
	if ($conn->query($subirDatos)) {
		$idproy = $conn->lastInsertId();
		$path = "../proyectos/img/";
		
		//recorremos el array de imagenes para subirlas al simultaneo
    for($i = 0; $i < $cantidad; $i++){
        if(move_uploaded_file($tmp_name_array[$i],$path.$name_array[$i])){

            //guardamos en la base de datos el nombre
            $upload = "INSERT INTO images (idProy, img) VALUES
             ($idproy,'$name_array[$i]')";
            if($conn -> query($upload)){

            	if ($i == $cantidad) {
            		echo "done";
            	}

	        }else{
            //si ocurre algún problema al subir el archivo 
            echo "Error al subir el archivo ".$name_array[$i]." a la base de datos";
        	}
    	}else{
			echo "Error al mover el archivo ".$name_array[$i]."";
    	}
	}
	
	}else{
		echo "Parece que ha habido un error Recargue la página e intentelo nuevamente.";
	}//Fin InsertDatos

	} catch (RuntimeException $e) {

		echo $e->getMessage();

	}//fin try catch

}//Fin condicional para saber si todos los campos estan completos

 ?>