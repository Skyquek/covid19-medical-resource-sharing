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
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#newOrganization">
        <i class="fa fa-plus" aria-hidden="true"></i> Add Organization
        </button>
    </p>
    
    <table class="table table-hover table-condensed">
        <thead>
            <tr>
                <th>Organization ID</th>
                <th>Organization Type</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>NGO</td>
                <td>
                    <button class="btn btn-primary update_modal" id="NGO" data-toggle="modal" data-target="#updateOrganization" onclick="chgName(this)">Update</button> 
                    <button class="btn btn-success" value="NGO" onclick="listAgent(this)"> View Agent list</button>
                    <button class="btn btn-danger" name="NGO" onclick="deleteOrganization(this)" data-toggle="modal" data-target="#deleteOrganization">Delete</button>
                </td>   
            </tr>


            <tr>
                <td>2</td>
                <td>Industry</td>
                <td>
                    <button class="btn btn-primary update_modal" id="Industry" data-toggle="modal" data-target="#updateOrganization">Update</button> 
                    <button type='button' class="btn btn-success"> View Agent list</button>
                    <button type='submit' class="btn btn-danger" name="Industry" onclick="deleteOrganization(this)" data-toggle="modal" data-target="#deleteOrganization">Delete</button>
                </td>   
            </tr>


            <tr>
                <td>3</td>
                <td>Goverment</td>
                <td>
                    <button class="btn btn-primary update_modal" id="Goverment" onclick="chgName(this)" data-toggle="modal" data-target="#updateOrganization">Update</button> 
                    <button class="btn btn-success">View Agent list</button>
                    <button class="btn btn-danger" name="Goverment" onclick="deleteOrganization(this)" data-toggle="modal" data-target="#deleteOrganization">Delete</button>
                </td>   
            </tr>


            <tr>
                <td>4</td>
                <td>Medical Agency</td>
                <td>
                    <button class="btn btn-primary update_modal" id="Medical"  onclick="chgName(this)" data-toggle="modal" data-target="#updateOrganization">Update</button> 
                    <button class="btn btn-success">View Agent list</button>
                    <button class="btn btn-danger" name="Medical" onclick="deleteCategory(this)" data-toggle="modal" data-target="#deleteOrganization">Delete</button>
                </td>   
            </tr>


            <tr>
                <td>5</td>
                <td>Individual</td>
                <td>
                    <button class="btn btn-primary"  id='Individual' onclick="chgName(this)" data-toggle="modal" data-target="#updateOrganization">Update</button> 
                    <button class="btn btn-success">View Agent list</button>
                    <button class="btn btn-danger" name="Individual" onclick="deleteOrganization(this)" data-toggle="modal" data-target="#deleteOrganization">Delete</button>
                </td>   
            </tr>

			<tr>
                <td>6</td>
                <td>Educationals</td>
                <td>
                    <button class="btn btn-primary"  id='Educationals' onclick="chgName(this)" data-toggle="modal" data-target="#updateOrganization">Update</button> 
                    <button class="btn btn-success">View Agent list</button>
                    <button class="btn btn-danger" name="Educationals" onclick="deleteOrganization(this)" data-toggle="modal" data-target="#deleteOrganization">Delete</button>
                </td>   
            </tr>
        </tbody>
    </table>


    <div class="modal fade" id="newOrganization" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Organization</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <form method="post">
                        <div class="form-group">
                            <label for="organizationType">Organization Type</label>
                            <input type="text" class="form-control" id="OrganizationType">
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="updateOrganization" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update Organization</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <form method="post">
                        <div class="form-group">
                            <label for="organizationType">Organization Type</label>
                            <input id="updateorganizationType" type="text" class="form-control" >
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="deleteOrganization" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Category</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <form method="post">
                        <div class="form-group">
                            <input id="deleteorganizationType" type="text" class="form-control" readonly>
                        </div>
                        <button type="submit" class="btn btn-danger">Delete Organization</button>
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

<script src="../../../assets/js/organization.js"></script>
