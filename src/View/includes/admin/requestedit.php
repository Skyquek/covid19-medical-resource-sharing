<?php 
$id = $_GET["id"];

session_start();
include('../../Model/Request.php');
include('../../Model/Category.php');

$categoryQuery = Request::getByRequestID($id);

$contents = array();
while($row = $categoryQuery->fetch_object())
{
	array_push($contents, $row);
}

$respond = Request::totalDonation($id);
$sum = $respond->fetch_assoc();
if($sum != null)
{
    $sum = $sum["sum"];
}
else 
{
    $sum = 0;
}

$progressbar = ($sum / $contents[0]->total) * 100;
$progressbar = number_format((float)$progressbar, 2, '.', '');
$progressbar = $progressbar . '%';

$categoryQuery = Category::showAllCategory();
$Categorycontents = array();
while($row = $categoryQuery->fetch_object())
{
	array_push($Categorycontents, $row);
}
?>

<br><br>
<div class="container" style="height:800px">
    <a href="requestment.php">
        <button type="button" class="btn btn-outline-secondary" style="width:100px;float:left;margin-top:10px">Back</button>
    </a>

    <?php
    if($sum == 0) {
    ?>
    <button class="btn btn-danger" onclick="delete(this)"style="width:100px;float:right;margin-top:10px" data-toggle="modal" data-target="#delete">Delete</button>
    
    <?php } ?>
    <br><br>
<hr>


<div class="col-sm-12">

<table class="table border table-hover table-condensed">
    <form action="../../Controller/RequestController.php" method="post">
        <tbody>
            <!-- <tr>
                <td>
                    <?php var_dump($contents[0]); ?>
                </td>
            </tr> -->

            <tr>
                <td><b>Request ID</b></td>
                <td><?php echo $contents[0]->request_id; ?></td>
                <input hidden type="text" name="request_id" value="<?php echo $contents[0]->request_id; ?>" />
                <input hidden type="text" name="action" value="update" />
            </tr>

            <tr>
                <td><b>Organization Name</b></td>
                <td><?php echo $contents[0]->organization_name; ?></td>
            </tr>

            <tr>
                <td><b>Status</b></td>
                <td>
                    <select name="status">
                    <?php 
                        if($contents[0]->req_status == 'pending' || $contents[0]->req_status == '') {
                            echo "<option value='pending' selected>Pending</option>";
                            echo "<option value='complete'>Complete</option>";
                        } 
                        else if($contents[0]->req_status == 'complete') {
                            echo "<option value='pending'>Pending</option>";
                            echo "<option value='complete' selected>Complete</option>";
                        }
                    ?>
                    </select>
                </td>

            </tr>

            <tr>
                <td><b>Category</b></td>
                <td>
                    <select name="category_id">
                        <?php foreach ($Categorycontents as $Categorycontent) 
                            { 
                                if($contents[0]->category_id != $Categorycontent->category_id)
                                {
                                    echo "<option value='$Categorycontent->category_id'>$Categorycontent->category_name</option>";
                                }
                                else
                                {
                                    echo "<option value='$Categorycontent->category_id' selected>$Categorycontent->category_name</option>";
                                }
                            } 
                        ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td><b>Product Name</b></td>
                <td><input class="form-control" type="text" name="product_name" value="<?php echo $contents[0]->product_name;?>"></td>
            </tr>

            <tr>
                <td><b>Total Request</b></td>
                <td><input class="form-control" type="number" name="total" min=0 value="<?php echo $contents[0]->total;?>"></td>
            </tr>

            <tr>
                <td><b>Date Time</b></td>
                <td><?php echo $contents[0]->date_time; ?></td>
            </tr>

            <tr>
                <td><b>Progress</b></td>
                <td>
                    <div class="progress" style="margin-bottom:0px">
                        <div class="progress progress-bar" style="width:<?php echo $progressbar; ?>"><?php echo $progressbar; ?></div>
                    </div>
                </td>
            </tr>

            <tr>
                <td colspan="2">
				<button type="submit" class="btn btn-primary" style="float:right">Update</button>
                </td>
            </tr>
        </tbody>
    </form>
</table>

</div>

<br>

    <div class="modal fade" id="delete" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Request</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
					<h6>Confirm Delete?</h6>
                        <form action="../../Controller/RequestController.php" method="post">
                            <input hidden type="text" name="request_id" value="<?php echo $id;?>"/>
                            <input hidden name="action" value="delete"/>

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
	
	<div class="modal fade" id="update" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update Request</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">    
                    <button type="submit" class="btn btn-danger">Update</button>
                </div>
            </div>
        </div>
    </div>
</div>