<?php
session_start();
if ($_SESSION) {
  switch ($_SESSION['tipo']) {
    case '0':
        header ("Location: index.php");
      break;

    case '1':
        header ("Location: index.php");
      break;
    
    default:
      # code...
      break;
  }
}else{
  require 'view/activar.view.php';
}

?>