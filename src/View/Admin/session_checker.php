<?php 
  error_reporting(0);
  session_start();
  if($_SESSION["user"]["class"] != "admin")
  {
    session_destroy();
    header("Location: ../Main/home.php");
  }
?>