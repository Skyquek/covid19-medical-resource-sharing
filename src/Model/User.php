<?php

class User {

    public function create($org_name, $password, $email, $org_type, $address, $state, $postal_code, $class) {    
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

    public function update() {
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

        $sql = "SELECT * FROM user WHERE email='$email'";

        $result = $connection->query($sql);
        $connection->close();
        
        return $result;

    }
}

?>