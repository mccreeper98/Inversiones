<?php

session_start();

if ($_SESSION) {

  switch ($_SESSION['tipo']) {

    case '1':
      require 'view/estadisticas.view.php';
      break;
    
    default:
      require 'view/index.view.php';
      break;
  }
}else{
  require 'view/index.view.php';
}

?>