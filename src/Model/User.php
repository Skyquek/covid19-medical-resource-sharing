<?php

class User {

    public function create($org_name, $password, $email, $org_type, $address, $state, $postal_code, $class, $phone) {    
        include("connection.php");
        $sql = "INSERT INTO user (organization_name, password, email, org_type, address, state, postal_code, class, phone) VALUES ('$org_name', '$password', '$email', '$org_type', '$address', '$state', '$postal_code', '$class', '$phone')";
        if($connection->query($sql) === TRUE) {
            return True;
        }
        else {
            echo "Error: " . $sql . "<br>" . $connection->error;
            return False;
        }

        $connection->close();
    }

    public function update($userid, $org_name, $password, $email, $org_type, $address, $state, $postal_code, $class, $phone) {
        include("connection.php");

        $sql = "UPDATE user SET organization_name = '$org_name', password='$password', email='$email', org_type='$org_type', 
        address='$address', state='$state', postal_code='$postal_code', class='$class', phone='$phone' WHERE user_id=$userid";
        
        if($connection->query($sql) === TRUE) {
            return True;
        }
        else {
            echo "Error: " . $sql . "<br>" . $connection->error;
            return False;
        }

        $connection->close();

    }

    public function delete() {
        include("connection.php");
        
        $sql = "INSERT INTO user (organization_name, password, email, org_type, address, state, postal_code, class) VALUES ('$org_name', '$password', '$email', '$org_type', '$address', '$state', '$postal_code', '$class')";
        if($connection->query($sql) === TRUE) {
            echo "New Record created successfully";
        }
        else {
            echo "Error: " . $sql . "<br>" . $connection->error;
        }

        $connection->close();

    }

    public function read($email) {
        include("connection.php");

        $sql = "SELECT * FROM user WHERE email='$email' OR user_id='$email'";
        $result = $connection->query($sql);
        if($result === TRUE) {
            // echo "New Record created successfully";
        }
        else {
            // echo "Error: " . $sql . "<br>" . $connection->error;
        }
        $connection->close();
        
        return $result;

    }
    
}

?>