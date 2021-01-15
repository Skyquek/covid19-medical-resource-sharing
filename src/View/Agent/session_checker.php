<?php 
  session_start();
  if($_SESSION["user"]["class"] != "normal")
  {
    header("Location: ../Main/home.php");
  }
?>