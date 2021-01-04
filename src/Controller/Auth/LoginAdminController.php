<?php 

// echo $_POST["adminIdD"]; 
// echo $_POST["pass"];

// Check if User Exists
$response["status"] = "success";
$response["message"] = "user found";
// else
// $response["status"] = "error";
// $response["message"] = "user not found";

echo json_encode($response);

?>