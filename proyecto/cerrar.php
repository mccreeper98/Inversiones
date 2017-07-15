<?php

session_start();
session_destroy(); //Destruir SESSION
$_SESSION =  array(); //Limpiar SESSION
header ("Location: index");

?>
