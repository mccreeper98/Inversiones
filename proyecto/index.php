<?php
session_start();
if ($_SESSION) {
  switch ($_SESSION['tipo']) {
    case '0':
        require 'view/user.view.php';
      break;

    case '1':
      require 'view/admin.view.php';
      break;
    
    default:
      # code...
      break;
  }
}else{
  require 'view/index.view.php';
}

?>