<?php
session_start();
include('../../Model/Category.php');

$category_id = $_GET['id'];

$categoryQuery = Category::listCategoryItem($category_id);

$contents = array();
while($row = $categoryQuery->fetch_object())
{
	array_push($contents, $row);
}

?>

<style>
/* Pagination links */
.pagination a {
  color: black;
  float: right;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
}

/* Style the active/current link */
.pagination a.active {
  background-color: dodgerblue;
  color: white;
}

/* Add a grey background color on mouse-over */
.pagination a:hover:not(.active) {
    background-color: #ddd;
}
</style>

<br>

<div class="container" style="width:1300px;height:780px"> 
    <p>
        <a href="manageCategory.php" class="btn btn-info btn-lg">
            <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
        </a>
    </p>
    
    <table class="table table-hover table-condensed">
        <thead>
            <tr>
                <th>Item Name</th>
            </tr>
        </thead>

        <tbody>
            <?php 
            foreach($contents as $content){
            ?>
                <tr>
                    <td><?php echo $content->product_name; ?></td>
                </tr>
            
            <?php } ?>

        </tbody>
    </table>


    


</div>
</div>

<script src="../../../assets/js/category.js"></script>
