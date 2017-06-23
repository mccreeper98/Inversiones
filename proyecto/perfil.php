<?php
session_start();
	if ($_SESSION) {
  switch ($_SESSION['tipo']) {
    case '0':
        require 'view/perfil.view.php';
      break;
    
    default:
        require 'view/denegado.view.php';
      break;
  }
}else{
  require 'view/index.view.php';
}

?>