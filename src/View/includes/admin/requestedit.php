<br>
<div class="container border" style="height:800px">
<a href="requestment.php"><button type="button" class="btn btn-outline-secondary" style="width:100px;float:left;margin-top:10px">Back</button></a>
<button class="btn  btn-outline-secondary" name="Medical Supplies" onclick="delete(this)"style="width:100px;float:right;margin-top:10px" data-toggle="modal" data-target="#delete">Delete</button></a><br><br>
<hr>
<div class="col-sm-12">
		<p>Contributor: <input type ="text" id="cont" name="cont"></p><br>
		<p>Address: <input type ="text" id="contadd" name="contadd"><p><br>
		<div class="row">
		<div class="col-sm-5"><p>Item Request: <input type ="text" id="contitem" name="contitem"></p></div>	
		<div class="col-sm-3"><p style="text-align:right">Date: <input type ="text" id="contdate" name="contdate"></p></div>
		<div class="col-sm-0"><p style="text-align:right">Amount: <input type ="text" id="contamt" name="contamt"></p></div>

		</div>
        <hr>
		<p>Receiver: <input type ="text" id="reqitem" name="reqitem"></p><br>
		<p>Address: <input type ="text" id="reqadd" name="reqadd"><p><br>
		<div class="row">
		<div class="col-sm-5"><p>Item Donate: <input type ="text" id="reqitem" name="reqitem"></p></div>	
		<div class="col-sm-3"><p style="text-align:right">Date: <input type ="text" id="reqdate" name="reqdate"></p></div>
		<div class="col-sm-0"><p style="text-align:right">Amount: <input type ="text" id="reqamt" name="reqamt"></p></div>
		</div></div> 

		<br><br><button class="btn btn-outline-secondary update_modal"  data-toggle="modal" data-target="#update">Update</button></a><br>
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
					
                        
                    <button type="submit" class="btn btn-danger"><a href="requestment.php">Update</button>
                 
                </div>
            </div>
        </div>
    </div>
