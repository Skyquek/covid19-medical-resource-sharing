<?php
session_start();
include('../Model/Donate.php');
include('../Model/Request.php');

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

    # Get the donation details and update the request if the total achieved
    $respond = Request::totalDonation($request_id);
    $sum = $respond->fetch_assoc();
    if($sum != null)
    {
        $sum = $sum["sum"];
        $categoryQuery = Request::getByRequestID($request_id);
        
        $contents = array();
        while($row = $categoryQuery->fetch_object())
        {
            array_push($contents, $row);
        }

        # total - sum == 0 
        if($contents[0]->total - $sum == 0)
        {
            # update the status
            $request_id         = $request_id;
            $category_id        = $contents[0]->category_id;
            $product_name       = $contents[0]->product_name;
            $total              = $contents[0]->total;
            $status             = 'complete';

            $request = new Request();
            $request->update($request_id, $category_id, $product_name, $total, $status);

        }

    }

    $response["status"] = "success";
    $response["message"] = "New Donation Added!";

    echo json_encode($response);
    die();
}

?>