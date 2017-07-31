<?php 

require '../conn.php';//Archivo de conexion a la base de datos

//Definicion de las variables necesarias
$nombre = $_POST['nombre'];
$id = $_POST['id'];
$estatus = $_POST['estatus'];
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
$estatus = str_replace($caracteres_malos,$caracteres_buenos ,$estatus);
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
}elseif (empty($estatus)) {
    echo"Es necesario un estatus";
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
}elseif (isset($nombre) AND isset($porcentaje) AND isset($estatus) AND isset($requerido) AND isset($inversion) AND isset($financiamieto) AND isset($tipo) AND isset($sector) AND isset($plazo) AND isset($taza) AND isset($descripcion)) {

	//Actualizacion de los datos
	$subirDatos = "UPDATE proyecto SET Por = '$porcentaje', Nombre = '$nombre', Req = '$requerido', Inv = '$inversion', Inv = '$inversion', Fina = '$financiamieto', Tip = '$tipo', Sector = '$sector', Plazo = '$plazo', Taza = '$taza', Estatus = '$estatus', Des = '$descripcion' WHERE idProy = $id";
	if ($conn->query($subirDatos)) {
        echo "done";
	}else{
		echo "Parece que ha habido un error Recargue la página e intentelo nuevamente.";
	}//Fin InsertDatos

}//Fin condicional para saber si todos los campos estan completos

 ?>