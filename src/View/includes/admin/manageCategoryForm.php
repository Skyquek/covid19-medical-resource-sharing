<?php
session_start();
include('../../Model/Category.php');

$categoryQuery = Category::showAllCategory();

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
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#newCategory">
        <i class="fa fa-plus" aria-hidden="true"></i> Add Category
        </button>
    </p>
    
    <table class="table table-hover table-condensed">
        <thead>
            <tr>
                <th>Category ID</th>
                <th>Category Name</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php 

            foreach($contents as $content){
            ?>
            
            <tr>
                <td><?php echo $content->category_id; ?></td>
                <td><?php echo $content->category_name; ?></td>
                <td>
                    <button class="btn btn-primary update_modal" id="<?php echo $content->category_name; ?>" name="<?php echo $content->category_id; ?>" data-toggle="modal" data-target="#updateCategory" onclick="chgName(this)">Update</button> 
                    <button class="btn btn-success" value="<?php echo $content->category_id; ?>" onclick="listItems(this)"> View Product</button>
                    <button class="btn btn-danger" id="<?php echo $content->category_id; ?>" name="<?php echo $content->category_name; ?>" onclick="deleteCategory(this)" data-toggle="modal" data-target="#deleteCategory">Delete</button>
                </td>   
            </tr>
            
            <?php
            }
            ?>
        </tbody>
    </table>


    <div class="modal fade" id="newCategory" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Category</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <form action="../../Controller/CategoryController.php" method="post" id="addCategoryForm">
                        <div class="form-group">
                            <input hidden type="text" value="add" name="action">
                            <label for="categoryName">Category Name</label>
                            <input type="text" class="form-control" id="categoryName" name="category_name">
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="updateCategory" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update Category</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <form action="../../Controller/CategoryController.php" method="post">
                        <div class="form-group">
                            <label for="categoryName">Category Name</label>
                            <input hidden type="text" value="update" name="action">
                            <input hidden id="updateCategoryID" type="text" class="form-control" name="category_id">
                            <input id="updateCategoryName" type="text" class="form-control" name="category_name">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="deleteCategory" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Category</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <form action="../../Controller/CategoryController.php" method="post">
                        <div class="form-group">
                            <input hidden type="text" value="delete" name="action">
                            <input id="deleteCategoryName" type="text" class="form-control" readonly>
                            <input id="deleteCategoryID" hidden type="text" name="category_id">
                        </div>
                        <button type="submit" class="btn btn-danger">Delete Category</button>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    


</div>
</div>

<script src="../../../assets/js/category.js"></script>
