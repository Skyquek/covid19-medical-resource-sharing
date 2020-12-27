<?php
include('../../Model/User.php');

if($_POST["action"] == "register")
{

    $org_type = $_POST["org_type"];
    $org_name = $_POST["organization_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $state = $_POST["state"];
    $postal_code = $_POST["postal_code"];
    $password1 = $_POST["psw"];
    $password_repeat = $_POST["psw_repeat"];

    // Check if User Exists
    $checkUser = AuthController::findUser($email);

    if($checkUser == True)
    {
        $response["status"] = "success";
        $response["message"] = "user created!";
    }
    else
    {
        $response["status"] = "fail";
        $response["message"] = "user exists!";
    }


    echo json_encode($response);


    //$auth = AuthController::createUser();
}

class AuthController {
    // Create a new user
    public function createUser() 
    {
        $user = new User();
        $user->create("Facebook Inc", "dsada", "example@gmail.com", "ngo", "Adsada", "Perak", "17200", "normal");
    }

    public function findUser($email) 
    {
        $user = new User();
        $result = $user->read($email);

        if($result->num_rows > 0) 
        {
            return True;
        }
        else
        {
            return False;
        }
    }
}

?>