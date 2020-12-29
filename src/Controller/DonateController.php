<?php
session_start();
include('../Model/Donate.php');

$action = $_POST["action"];
if($action == "donate")
{
    $quantity     = $_POST["quantity"];
    $category_id  = $_POST["category_id"];
    $request_id   = $_POST["request_id"];
    $product_name = $_POST["product_name"];

    $donate = new Donate();
    $status = $donate->create(
        $_SESSION["user"]["id"], $category_id,  $request_id,
        $product_name, $quantity, date('Y-m-d H:i:s'));

    echo $status;
}

?>