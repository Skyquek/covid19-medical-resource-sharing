<br>
<div class="container border" style="height:800px">
<a href="requestment.php"><button type="button" class="btn btn-outline-secondary" style="width:100px;float:left;margin-top:10px">Back</button></a>
<button class="btn  btn-outline-secondary" name="Medical Supplies" onclick="delete(this)"style="width:100px;float:right;margin-top:10px" data-toggle="modal" data-target="#delete">Delete</button></a><br><br>
<hr>
<div class="col-sm-12">
		<p>Contributor:</p><br>
		<p>Address:<p><br>
		<div class="row">
		<div class="col-sm-6"><p>Item Request:</p></div>	
		<div class="col-sm-4"><p style="text-align:right">Date:</p></div>
		<div class="col-sm-2"><p style="text-align:right">Amount:</p></div>
		<button class="btn btn-outline-secondary update_modal"  data-toggle="modal" data-target="#update">Update</button></a><br>
		</div>
        <hr>
		<p>Receiver:</p><br>
		<p>Address:<p><br>
		<div class="row">
		<div class="col-sm-6"><p>Item Donate:</p></div>	
		<div class="col-sm-4"><p style="text-align:right">Date:</p></div>
		<div class="col-sm-2"><p style="text-align:right">Amount:</p></div>
		</div></div> 
<div class="progress" style="margin-bottom:0px">
			<div class="progress-bar" style="width:70%">70%</div>
		</div>
		<br>
		<br>
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
					<h6>Comfirm delete?</h6>
                        
                    <button type="submit" class="btn btn-danger">Delete</button>
                 
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