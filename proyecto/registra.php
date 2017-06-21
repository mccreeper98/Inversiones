<?php
session_start();
if ($_SESSION) {
  switch ($_SESSION['tipo']) {
    case '0':
        header('Location: user');
      break;

    case '1':
      header('Location: admin');
      break;
    
    default:
      # code...
      break;
  }
}else{
  require 'view/registro.view.php';
}

?>