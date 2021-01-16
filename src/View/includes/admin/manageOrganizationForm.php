<?php 
session_start();
include('../../Model/User.php');


if(isset($_POST['update'])){
    $act = User::updateStatus($_POST['userID'], $_POST['status']);
}


$userQuery = User::viewAllUser();
$contents = array();

while($row = $userQuery->fetch_object())
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
<div class="container" style="width:70%;margin-left:50px">
    
        <table class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Organization Name</th>
                    <th>Email</th>
                    <th>Type</th>
                    <th>Address</th>
                    <th>State</th>
                    <th>Postal Code</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($contents as $content) { ?>

                <form method='post' action="">
                <tr>
                    <td><?php echo $content->user_id; ?></td>
                    <td><?php echo $content->organization_name; ?></td>
                    <td><?php echo $content->email; ?></td>
                    <td><?php echo $content->org_type; ?></td>
                    <td><?php echo $content->address; ?></td>
                    <td><?php echo $content->state; ?></td>
                    <td><?php echo $content->postal_code; ?></td>
                    <td><?php echo $content->class; ?></td>
                    <td>
                    <select name='status'>
                    <?php 
                        if($content->status == 'active')
                        {
                            echo "<option value='active' selected>active</option>";
                            echo "<option value='suspend'>suspend</option>";
                        }
                        else
                        {
                            //echo "<input hidden type='text' name='status' value='active'/>";
                            echo "<option value='active'>active</option>";
                            echo "<option value='suspend' selected>suspend</option>";
                        }
                        
                    ?>
                    </selected>
                    </td>
                    <td><?php echo $content->phone; ?></td>
                    <td>
                        <input hidden type='text' name='userID' value='<?php echo $content->user_id; ?>'/>
                        <button type="submit" class="btn btn-primary" name='update'>Update</button> 
                    </td>   
                </tr>
                </form>
                <?php } ?>
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
<br><br>

<script src="../../../assets/js/organization.js"></script>