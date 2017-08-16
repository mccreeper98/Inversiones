<?php
session_start();
if ($_SESSION) {
  switch ($_SESSION['tipo']) {
    case '0':
        require 'view/proyecto.view.php';
      break;

    case '1':
      require 'view/proyecto.view.php';
      break;
    
    default:
      header ("Location: ../login.php?p");
      break;
  }
}else{
	header ("Location: ../login.php?p");
}

?>
