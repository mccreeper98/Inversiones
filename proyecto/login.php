<?php
session_start();
if ($_SESSION) {
  switch ($_SESSION['tipo']) {
    case '0':
      header('Location: index');
      break;

    case '1':
      header('Location: index');
      break;
    
    default:
      require 'view/login.view.php';
    break;
  }
}else{
  require 'view/login.view.php';
}

?>