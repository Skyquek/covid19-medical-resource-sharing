<?php

class Category {

    public function getCategoryName($category_id="") {
        include("connection.php");

        if($category_id == ""){
             $sql = "";
        }
        else{          
            $sql = "SELECT category_name FROM category 
                    WHERE category_id=$category_id";
        }
        
        $result = $connection->query($sql);
        if($result === TRUE) {
            echo "";
        }
        else {
            // echo "Error: " . $sql . "<br>" . $connection->error;
        }
        $connection->close();
        
        return $result;

    }

    public function showAllCategory(){
        include("connection.php");

        $sql = "SELECT * FROM category";
        $result = $connection->query($sql);
        $connection->close();

        return $result;
    }

    
}

?>