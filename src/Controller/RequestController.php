<?php
session_start();
include('../Model/Request.php');

$action = $_POST["action"];
if($action == "commonCreate")
{   
    $quantity = json_decode( $_POST['q'], true);

    $items = array(
        'n95'               => array("category_id"=>"1", "product_name" => 'N95 Mask', "total" => $quantity[0]),
        'surgery_mask'      => array("category_id"=>"1", "product_name" => 'Oxygen Mask', "total" => $quantity[1]),
        'oxygen_mask'       => array("category_id"=>"1", "product_name" => 'Aorosol Mask', "total" => $quantity[2]),
        'aorosol_mask'      => array("category_id"=>"1", "product_name" => 'Hand Sanitizer', "total" => $quantity[3]),
        'hand_sanitizer'    => array("category_id"=>"1", "product_name" => 'First Aid Kit', "total" => $quantity[4]),
        'first_aid_kit'     => array("category_id"=>"1", "product_name" => 'Plaster', "total" => $quantity[5]),
        'plaster'           => array("category_id"=>"1", "product_name" => 'Cotton Wool', "total" => $quantity[6]),
        'cotton_wool'       => array("category_id"=>"1", "product_name" => 'N95 Mask', "total" => $quantity[0]),
    );

    $request = new Request();

    foreach($items as $item)
    {
        if($item["total"] != 0)
        {
            $query = $request->create($_SESSION["user"]["id"], $item["category_id"], $item["product_name"], $item["total"], "ongoing", date('Y-m-d H:i:s'));

            if($query != True)
            {
                break;
            }
        }
    }

    if($query)
    {
        $response["status"] = "success";
        $response["message"] = "New Request Added!";

        echo json_encode($response);
        die();
    }
    else 
    {
        $response["status"] = "fail";
        $response["message"] = "Add Request Fail!";

        echo json_encode($response);
        die();
    }
}



?>