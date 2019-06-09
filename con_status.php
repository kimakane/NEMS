<?php
  session_start();
  if (isset($_SESSION['connect'])){
    if($_SESSION['connect'] == 2){
      session_destroy();
      exit();
    }
  }
  else{
    $_SESSION['connect'] = 0;
  }
?>
