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

    $arrayUser = array(
        'org_type'  => $org_type,
        'org_name'  => $org_name,
        'email'     => $email,
        'phone'     => $phone,
        'address'   => $address,
        'state'     => $state,
        'postal_code' => $postal_code,
        'password1' => $password1,
        'password_repeat' => $password_repeat
    );

    // Check if User Exists
    $checkUser = AuthController::findUser($email);

    if($checkUser == True)
    {
        if($password1 != $password_repeat)
        {
            $response["status"] = "fail";
            $response["message"] = "Password Not Match!";

            echo json_encode($response);
            die();
        }
        else
        {
            // True: No user inside the database yet
            // $auth = AuthController::createUser($org_type, $org_name, $email, $phone, $address, $state, $postal_code, $password1, $password_repeat);
            $auth = AuthController::createUser($arrayUser);

            if($auth == True)
            {
                session_start();
                $_SESSION['user'] = $arrayUser;
                
                $response["status"] = "success";
                $response["message"] = "user created!";
            }
            else 
            {
                $response["status"] = "fail";
                $response["message"] = "user fail to create!";
            }
        }
    }
    else
    {
        $response["status"] = "fail";
        $response["message"] = "user exists!";
    }


    echo json_encode($response);
}

class AuthController {
    // Create a new user
    public function createUser($arrayUser) 
    {
        $user = new User();
        if($user->create(
            $arrayUser["org_name"], 
            hash("sha256", $arrayUser["password1"]), 
            $arrayUser["email"], 
            $arrayUser["org_type"],
            $arrayUser["address"],
            $arrayUser["state"],
            $arrayUser["postal_code"],
            'normal'))
        {
            return True;
        }
        else{
            return False;
        }

    }

    public function findUser($email) 
    {
        $user = new User();
        $result = $user->read($email);
        
        if($row = $result->fetch_object()) 
        {
            // User Existed
            return False;
        }
        else
        {
            // User Not Exist
            return True;
        }
    }
}

?>