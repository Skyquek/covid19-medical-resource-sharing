<?php

class Donate {

    public function create($user_id, $category_id, $request_id, $product_name, $quantity, $date_time) {    
        include("connection.php");
        $sql = "INSERT INTO donate 
        (user_id, category_id, request_id, product_name, quantity, date_time) 
        VALUES 
        ('$user_id', '$category_id', '$request_id', '$product_name', '$quantity', '$date_time')";
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

        // $sql = "UPDATE user SET organization_name = '$org_name', password='$password', email='$email', org_type='$org_type', 
        // address='$address', state='$state', postal_code='$postal_code', class='$class', phone='$phone' WHERE user_id=$userid";
        
        // if($connection->query($sql) === TRUE) {
        //     return True;
        // }
        // else {
        //     echo "Error: " . $sql . "<br>" . $connection->error;
        //     return False;
        // }

        // $connection->close();

    }

    public function delete() {
        include("connection.php");
        
        // $sql = "INSERT INTO user (organization_name, password, email, org_type, address, state, postal_code, class) VALUES ('$org_name', '$password', '$email', '$org_type', '$address', '$state', '$postal_code', '$class')";
        // if($connection->query($sql) === TRUE) {
        //     echo "New Record created successfully";
        // }
        // else {
        //     echo "Error: " . $sql . "<br>" . $connection->error;
        // }

        // $connection->close();

    }

    public function read($q="") {
        include("connection.php");

        if($q == ''){
             $sql = "SELECT * FROM request 
                    RIGHT JOIN user ON user.user_id = request.user_id
                    RIGHT JOIN category ON category.category_id = request.category_id";
        }
        else{          
            $sql = "SELECT * FROM request 
                    RIGHT JOIN user ON user.user_id = request.user_id
                    RIGHT JOIN category ON category.category_id = request.category_id
                    WHERE request.user_id=$q";
        }
        
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

    public function totalDonation($request_id) {
        include("connection.php");

        $sql = "SELECT SUM(quantity) as sum FROM donate WHERE request_id='$request_id' GROUP BY  request_id";
        
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