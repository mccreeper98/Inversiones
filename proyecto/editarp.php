<?php
session_start();
if ($_SESSION) {
  switch ($_SESSION['tipo']) {

    case '1':
      if (isset($_GET['id'])) {
        $id = $_GET['id'];
      require 'view/edit.view.php';
    }else{
      header ("Location: admin.php");
    }
      break;
    
    default:
      require 'view/index.view.php';
      break;
  }
}else{
  require 'view/index.view.php';
}

?>