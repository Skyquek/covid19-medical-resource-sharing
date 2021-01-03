<?php

class Request {

    public function create($user_id, $category_id, $product_name, $total, $status, $date_time) {    
        include("connection.php");
        $sql = "INSERT INTO request 
        (user_id, category_id, product_name, total, status, date_time) 
        VALUES 
        ('$user_id', '$category_id', '$product_name', '$total', '$status', '$date_time')";
        if($connection->query($sql) === TRUE) {
            return True;
        }
        else {
            echo "Error: " . $sql . "<br>" . $connection->error;
            return False;
        }

        $connection->close();
    }

    public function update($request_id, $category_id, $product_name, $total, $status) {
        include("connection.php");

        $sql = "UPDATE request SET 
        category_id = '$category_id', product_name = '$product_name', total = '$total', status = '$status'
        WHERE 
        request_id=$request_id";
        
        if($connection->query($sql) === TRUE) {
            return True;
        }
        else {
            echo "Error: " . $sql . "<br>" . $connection->error;
            return False;
        }

        $connection->close();

    }

    public function delete($request_id) {
        include("connection.php");
        
        $sql = "DELETE FROM request WHERE request_id=$request_id";

        if($connection->query($sql) === TRUE) {
            return True;
        }
        else {
            echo "Error: " . $sql . "<br>" . $connection->error;
        }

        $connection->close();

    }

    public function getByRequestID($id) {
        include("connection.php");
        $sql = "SELECT * FROM request 
                        INNER JOIN user ON user.user_id = request.user_id
                        INNER JOIN category ON category.category_id = request.category_id 
                        WHERE request.request_id = $id";

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

    public function read($q="", $order="ASC", $limit="") {
        include("connection.php");

        if($limit == "")
        {
            if($q == ''){
                 $sql = "SELECT * FROM request 
                        INNER JOIN user ON user.user_id = request.user_id
                        INNER JOIN category ON category.category_id = request.category_id ORDER BY request_id $order";
            }
            else{          
                $sql = "SELECT * FROM request 
                        INNER JOIN user ON user.user_id = request.user_id
                        INNER JOIN category ON category.category_id = request.category_id
                        WHERE request.user_id=$q ORDER BY request_id $order";
            }
        }
        else {
            if($q == ''){
                $sql = "SELECT * FROM request 
                       INNER JOIN user ON user.user_id = request.user_id
                       INNER JOIN category ON category.category_id = request.category_id ORDER BY request_id $order LIMIT $limit";
           }
           else{          
               $sql = "SELECT * FROM request 
                       INNER JOIN user ON user.user_id = request.user_id
                       INNER JOIN category ON category.category_id = request.category_id
                       WHERE request.user_id=$q ORDER BY request_id $order LIMIT $limit";
           }
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

    // Get who respond to trhe request
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

    public function AllRequest() {
        include("connection.php");
        $sql = "SELECT COUNT(*) as total_request FROM request";

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

    public function getRequestNumber(){
        include("connection.php");
        $sql = 'SELECT MONTHNAME(date_time) AS month, COUNT(request_id) as num FROM request GROUP BY month(date_time);';
        $result = $connection->query($sql);
        
        $connection->close();
        
        return $result;
    }

    public function viewAllRequest(){
        include("connection.php");
        $sql = "SELECT * FROM request INNER JOIN user ON request.user_id = user.user_id";
        $result = $connection->query($sql);
        
        $connection->close();
        
        return $result;
    }

    public function viewCompletedRequest(){
        include("connection.php");
        $sql = "SELECT * FROM request INNER JOIN user ON request.user_id = user.user_id WHERE request.status='complete'";
        $result = $connection->query($sql);
        
        $connection->close();
        
        return $result;
    }

    
}

?>