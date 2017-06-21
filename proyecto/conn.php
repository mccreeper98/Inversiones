<?php

$host = "127.0.0.1";
$db = "inversiones";
$userDB = "root";
$passDB = "";

try {
  	$conn = new PDO("mysql:host=$host;dbname=$db", $userDB, $passDB);
} catch (PDOException $e) {
   echo "Erro con la DB";
}

?>