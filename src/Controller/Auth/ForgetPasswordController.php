<?php 

// echo $_POST["email"];

// Check if User Exists
$response["status"] = "success";
$response["message"] = "email found.";

// else
// $response["status"] = "error";
// $response["message"] = "user not found";

echo json_encode($response);

?>