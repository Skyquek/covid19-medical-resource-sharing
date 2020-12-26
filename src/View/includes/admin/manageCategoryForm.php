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
            <tr>
                <td>1</td>
                <td>Medical Supplies</td>
                <td>
                    <button class="btn btn-primary update_modal" id="Medical_Supplies" data-toggle="modal" data-target="#updateCategory" onclick="chgName(this)">Update</button> 
                    <button class="btn btn-success" value="Medical Supplies" onclick="listItems(this)"> View Product</button>
                    <button class="btn btn-danger" name="Medical Supplies" onclick="deleteCategory(this)" data-toggle="modal" data-target="#deleteCategory">Delete</button>
                </td>   
            </tr>


            <tr>
                <td>2</td>
                <td>Food</td>
                <td>
                    <button class="btn btn-primary update_modal" id="Food" data-toggle="modal" data-target="#updateCategory">Update</button> 
                    <button type='button' class="btn btn-success"> View Product</button>
                    <button type='submit' class="btn btn-danger" name="Food" onclick="deleteCategory(this)" data-toggle="modal" data-target="#deleteCategory">Delete</button>
                </td>   
            </tr>


            <tr>
                <td>3</td>
                <td>Drinks</td>
                <td>
                    <button class="btn btn-primary update_modal" id="Drinks" onclick="chgName(this)" data-toggle="modal" data-target="#updateCategory">Update</button> 
                    <button class="btn btn-success"> View Product</button>
                    <button class="btn btn-danger" name="Drinks" onclick="deleteCategory(this)" data-toggle="modal" data-target="#deleteCategory">Delete</button>
                </td>   
            </tr>


            <tr>
                <td>4</td>
                <td>Shirts</td>
                <td>
                    <button class="btn btn-primary update_modal" id="Shirts"  onclick="chgName(this)" data-toggle="modal" data-target="#updateCategory">Update</button> 
                    <button class="btn btn-success"> View Product</button>
                    <button class="btn btn-danger" name="Shirts" onclick="deleteCategory(this)" data-toggle="modal" data-target="#deleteCategory">Delete</button>
                </td>   
            </tr>


            <tr>
                <td>5</td>
                <td>Services</td>
                <td>
                    <button class="btn btn-primary"  id='Services' onclick="chgName(this)" data-toggle="modal" data-target="#updateCategory">Update</button> 
                    <button class="btn btn-success"> View Product</button>
                    <button class="btn btn-danger" name="Services" onclick="deleteCategory(this)" data-toggle="modal" data-target="#deleteCategory">Delete</button>
                </td>   
            </tr>
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
                    <form method="post">
                        <div class="form-group">
                            <label for="categoryName">Category Name</label>
                            <input type="text" class="form-control" id="categoryName">
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
                    <form method="post">
                        <div class="form-group">
                            <label for="categoryName">Category Name</label>
                            <input id="updateCategoryName" type="text" class="form-control" >
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
                    <form method="post">
                        <div class="form-group">
                            <input id="deleteCategoryName" type="text" class="form-control" readonly>
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
