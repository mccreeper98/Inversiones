<?php
session_start();
	if ($_SESSION) {
  switch ($_SESSION['tipo']) {
    case '0':
        require 'view/perfilCompleto.view.php';
    break;
    
    default:
        require 'view/denegado.view.php';
    break;
  }
}else{
  require 'view/login.view.php';
}

?>