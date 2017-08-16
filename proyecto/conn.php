<?php

$host = "localhost";
$db = "inversiones";
$userDB = "root";
$passDB = "";

try {
  	$conn = new PDO("mysql:host=$host;dbname=$db", $userDB, $passDB);
} catch (PDOException $e) {
   echo "Erro con la DB";
}

?>
