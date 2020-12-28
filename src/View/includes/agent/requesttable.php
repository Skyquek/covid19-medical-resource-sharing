<style>
	.form-control{
		width: 99%;
		margin: 5px 0 10px 0;
	display: inline-block;}
		
input[type=text], input[type=integer]{
		width: 75%;
		padding: 15px;
		margin: 5px 0 22px 0;
		display: inline-block;
		border: none;
		background: #f1f1f1;
		}
</style>
<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="container1 p-3 my-3">
				<div class="navbar" style="background-color:gray;height:50px">	
					<h5>Add new request </h5>
					<div class="justify-content-end">
						<button type="submit" class="btn btn-light" style="height:35px">Publish</button>
					</div>
				</div>
				<form method="post">
				<table id="cart" class="table table-hover table-condensed">
					<thead>	
						<tr>
							<th style="width:75%">Item Description</th>
							<th style="width: 5%">Category</th>
							<th style="width:5%">Quantity</th>
							<th style="width:20%"></th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<td data-th="Item Description">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="n95 mask" class="img-responsive"/></div>
									<div class="col-sm-10">
										<h4 class="nomargin">N95 Mask</h4>
										<p>
											N95 respirators and surgical masks are examples of personal protective equipment that 
											are used to protect the wearer from airborne particles and from liquid contaminating the face.
										</p>
									</div>
								</div>
							</td>
							<td>
								<p>Medical Supplies</p>
							</td>
							<td data-th="Quantity">
								<input name="n95" type="number" min="0" class="form-control text-center" value="0" onchange='autoChg(this)'>
							</td>
							<td class="actions" data-th="">
									<button id="n95" class="btn btn-info btn-sm" onclick="resetting(this);"><i class="fa fa-refresh"></i></button>						
							</td>
						</tr>



						<tr>
							<td data-th="Item Name">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="surgery mask" class="img-responsive"/></div>
									<div class="col-sm-10">
										<h4 class="nomargin">Surgery Mask</h4>
										<p>
											N95 respirators and surgical masks are examples of personal protective equipment that 
											are used to protect the wearer from airborne particles and from liquid contaminating the face.
										</p>
									</div>
								</div>
							</td>
							<td>
								<p>Medical Supplies</p>
							</td>
							<td data-th="Quantity">
								<input name='surgery_mask' type="number" min="0" class="form-control text-center" value="0">
							</td>
							<td class="actions" data-th="">
									<button id='surgery_mask' class="btn btn-info btn-sm" onclick="resetting(this);"><i class="fa fa-refresh"></i></button>
																	
							</td>
						</tr>

						
						<tr>
							<td data-th="Item Name">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="oxygen mask" class="img-responsive"/></div>
									<div class="col-sm-10">
										<h4 class="nomargin">Oxygen Mask</h4>
										<p>
											N95 respirators and surgical masks are examples of personal protective equipment that 
											are used to protect the wearer from airborne particles and from liquid contaminating the face.
										</p>
									</div>
								</div>
							</td>
							<td>
								<p>Medical Supplies</p>
							</td>
							<td data-th="Quantity">
								<input name='surgery_mask'  id="oxygen_mask" type="number" min="0" class="form-control text-center" value="0">
							</td>
							<td class="actions" data-th="">
									<button id="oxygen_mask" class="btn btn-info btn-sm" onclick="resetting(this);"><i class="fa fa-refresh"></i></button>
																	
							</td>
						</tr>


						<tr>
							<td data-th="Item Name">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="Aorosol mask" class="img-responsive"/></div>
									<div class="col-sm-10">
										<h4 class="nomargin">Aorosol Mask</h4>
										<p>
											N95 respirators and surgical masks are examples of personal protective equipment that 
											are used to protect the wearer from airborne particles and from liquid contaminating the face.
										</p>
									</div>
								</div>
							</td>
							<td>
								<p>Medical Supplies</p>
							</td>
							<td data-th="Quantity">
								<input name="aorosol_mask" type="number" min="0" class="form-control text-center" value="0">
							</td>
							<td class="actions" data-th="">
									<button id="aorosol_mask" class="btn btn-info btn-sm" onclick="resetting(this);"><i class="fa fa-refresh"></i></button>
																	
							</td>
						</tr>



						<tr>
							<td data-th="Item Name">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="Hand Sanitizer" class="img-responsive"/></div>
									<div class="col-sm-10">
										<h4 class="nomargin">Hand Sanitizer</h4>
										<p>
											N95 respirators and surgical masks are examples of personal protective equipment that 
											are used to protect the wearer from airborne particles and from liquid contaminating the face.
										</p>
									</div>
								</div>
							</td>
							<td>
								<p>Medical Supplies</p>
							</td>
							<td data-th="Quantity">
								<input name="hand_sanitizer" type="number" min="0" class="form-control text-center" value="0">
							</td>
							<td class="actions" data-th="">
									<button id="hand_sanitizer" class="btn btn-info btn-sm" onclick="resetting(this);"><i class="fa fa-refresh"></i></button>
																	
							</td>
						</tr>



						<tr>
							<td data-th="Item Name">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="Hand Sanitizer" class="img-responsive"/></div>
									<div class="col-sm-10">
										<h4 class="nomargin">First Aid Kit</h4>
										<p>
											N95 respirators and surgical masks are examples of personal protective equipment that 
											are used to protect the wearer from airborne particles and from liquid contaminating the face.
										</p>
									</div>
								</div>
							</td>
							<td>
								<p>Medical Supplies</p>
							</td>
							<td data-th="Quantity">
								<input name="first_aid_kit" type="number" min="0" class="form-control text-center" value="0">
							</td>
							<td class="actions" data-th="">
									<button id="first_aid_kit" class="btn btn-info btn-sm" onclick="resetting(this);"><i class="fa fa-refresh"></i></button>
																	
							</td>
						</tr>



						<tr>
							<td data-th="Item Name">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="Hand Sanitizer" class="img-responsive"/></div>
									<div class="col-sm-10">
										<h4 class="nomargin">Plaster</h4>
										<p>
											N95 respirators and surgical masks are examples of personal protective equipment that 
											are used to protect the wearer from airborne particles and from liquid contaminating the face.
										</p>
									</div>
								</div>
							</td>
							<td>
								<p>Medical Supplies</p>
							</td>
							<td data-th="Quantity">
								<input name="plaster" type="number" min="0" class="form-control text-center" value="0">
							</td>
							<td class="actions" data-th="">
								<button id="plaster" class="btn btn-info btn-sm" onclick="resetting(this);"><i class="fa fa-refresh"></i></button>
																	
							</td>
						</tr>



						<tr>
							<td data-th="Item Name">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="Hand Sanitizer" class="img-responsive"/></div>
									<div class="col-sm-10">
										<h4 class="nomargin">Cotton Wool</h4>
										<p>
											N95 respirators and surgical masks are examples of personal protective equipment that 
											are used to protect the wearer from airborne particles and from liquid contaminating the face.
										</p>
									</div>
								</div>
							</td>
							<td>
								<p>Medical Supplies</p>
							</td>
							<td data-th="Quantity">
								<input name="cotton_wool" type="number" min="0" class="form-control text-center" value="0">
							</td>
							<td class="actions" data-th="">
									<button id="cotton_wool" class="btn btn-info btn-sm" onclick="resetting(this);"><i class="fa fa-refresh"></i></button>								
							</td>
						</tr>

					</tbody>
				</table>
				</form>

			</div>
			<div class="container1 p-3 my-3 ">
				<div class="navbar" style="background-color:gray;height:50px">	
					<h5>Create own request</h5>
					<div class="justify-content-end">
						<button  type="button" class="btn btn-light" style="height:35px" data-toggle="modal" data-target="#newRequest">Request</button>
					</div>
				</div>
		</div>

			
		<div class="col-sm-2"></div>
	</div>
</div>

<div class="modal fade" id="newRequest" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Request</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <form method="post">
                        <div class="form-group">
                            <label for="itemCategory" style="float:left">Category:</label>
                            <input type="text" class="form-control" id="itemCategory" style="margin-left:5px"><br>
							<label for="product" style="float:left">Product :</label>
                            <input type="text" class="form-control" id="product" style="margin-left:10px"><br>
							<label for="total" style="float:left">Total:</label>
                            <input type="integer" class="form-control" id="total" style="margin-left:35px"><br>
                        </div>
                        <button type="submit" class="btn btn-primary" style="float:right">Comfirm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


<script src="../../../assets/js/request.js"></script>
