<?php 
  error_reporting(0);
  session_start();
  if($_SESSION["user"]["class"] != "normal")
  {
    header("Location: ../Main/home.php");
  }
?>