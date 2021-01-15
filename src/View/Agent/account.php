<?php include("session_checker.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>COVID CHATBOT</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../../../assets/css/includeagent1.css">
</head>
<body>
 <?php include("../includes/agent/navigationagent.php");?>

<div class="main">
<br>
  <?php include("../includes/agent/accountagent.php");?>
  <?php include("../includes/agent/chatbot.php");?>

</body>
</html>