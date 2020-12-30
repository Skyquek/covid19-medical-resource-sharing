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

    public function countCategoryItems($id) {
        include("connection.php");
        $sql = "SELECT category_id, product_name, COUNT(product_name) as sum FROM request WHERE category_id=$id GROUP BY product_name;";

        $result = $connection->query($sql);
        $connection->close();

        return $result;
    }

}

?>