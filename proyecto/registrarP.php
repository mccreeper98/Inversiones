<?php
session_start();
if ($_SESSION) {
  switch ($_SESSION['tipo']) {
    case '1':
        require 'view/registrarP.view.php';
      break;
    
    default:
        require 'view/denegado.view.php';
      break;
  }
}else{
  require 'view/index.view.php';
}

?>