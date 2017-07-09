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
}elseif (isset($_FILES['imagen'])){
	
	$cantidad= count($_FILES["imagen"]["tmp_name"]);
	
	for ($i=0; $i<$cantidad; $i++){
	//Comprobamos si el fichero es una imagen
	if ($_FILES['imagen']['type'][$i]=='image/png' || $_FILES['imagen']['type'][$i]=='image/jpeg'){
	
	//Subimos el fichero al servidor
	move_uploaded_file($_FILES["imagen"]["tmp_name"][$i], $_FILES["imagen"]["name"][$i]);
	$validar=true;
	}
	else $validar=false;
	
	
}
}


?>