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
             $sql = "SELECT * FROM donate 
                    INNER JOIN user ON user.user_id = donate.user_id
                    RIGHT JOIN request ON request.request_id = donate.request_id
                    RIGHT JOIN user ON request.user_id = user.user_id";
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


    public function donateHistory() {
        include("connection.php");

        $sql = "SELECT a.product_name AS product_name, a.quantity AS donate_quantity, b.organization_name AS donator_name, b.address AS donator_address, b.postal_code AS donator_postal_code, b.state AS donator_state, d.organization_name AS requester_name, d.address AS requester_address, d.postal_code AS requester_postal_code, d.state AS requester_state 
        FROM donate a
                INNER JOIN user b
                    ON a.user_id = b.user_id
                INNER JOIN request c
                    ON a.request_id = c.request_id
                INNER JOIN user d
                    ON c.user_id = d.user_id";

        $result = $connection->query($sql);

        if($result === TRUE) {

        }
        else {

        }   

        $connection->close();

        return $result;
    }

    public function DonateToRequest($id) {
        include("connection.php");

        $sql = "SELECT a.date_time AS donate_time, a.product_name AS product_name, a.quantity AS donate_quantity, b.organization_name AS donator_name, b.phone AS donator_phone, b.address AS donator_address, b.postal_code AS donator_postal_code, b.state AS donator_state, d.organization_name AS requester_name, d.address AS requester_address, d.postal_code AS requester_postal_code, d.state AS requester_state 
        FROM donate a
                INNER JOIN user b
                    ON a.user_id = b.user_id
                INNER JOIN request c
                    ON a.request_id = c.request_id
                INNER JOIN user d
                    ON c.user_id = d.user_id
                WHERE c.request_id = $id";

        $result = $connection->query($sql);

        if($result === TRUE) {

        }
        else {

        }   

        $connection->close();

        return $result;
    }


    public function AllDonate() {
        include("connection.php");

        $sql = "SELECT COUNT(*) as total_donate FROM donate";
        
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

    public function getDonateNumber(){
        include("connection.php");
        $sql = 'SELECT MONTHNAME(date_time) AS month, COUNT(donate_id) as num FROM donate GROUP BY month(date_time);';

        $result = $connection->query($sql);
        
        $connection->close();
        
        return $result;
    }

    public function getDonateState(){
        include("connection.php");
        $sql = 'SELECT 
            state AS state, 
            COUNT(donate_id) as num 
            FROM donate 
            INNER JOIN user
            ON donate.user_id = user.user_id
            GROUP BY state
            ';

        $result = $connection->query($sql);
        
        $connection->close();
        
        return $result;
    }

    
}

?>