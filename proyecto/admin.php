<?php
session_start();
if ($_SESSION) {
  switch ($_SESSION['tipo']) {
    case '0':
        require 'view/user.view.php';
      break;

    case '1':
      require 'view/panel.view.php';
      break;
    
    default:
      require 'view/index.view.php';
      break;
  }
}else{
  require 'view/index.view.php';
}

?>