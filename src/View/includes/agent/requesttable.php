<div class="row"> 
		<div class="col-sm-2"></div> 
 
		<div class="col-sm-8"> 
			<div class="container1 p-3 my-3 "> 
 
			<form id="commonRequestForm" method="post"> 
				<div class="navbar" style="background-color:gray">	 
					<h5>Add new request </h5> 
					<div class="justify-content-end"> 
						<button type="submit" class="btn btn-light">Publish</button> 
					</div> 
				</div> 
 
				 
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
								<button id="n95" type="button" class="btn btn-info btn-sm" onclick="resetting(this);"><i class="fa fa-refresh"></i></button>						 
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
									<button id='surgery_mask' type="button" class="btn btn-info btn-sm" onclick="resetting(this);"><i class="fa fa-refresh"></i></button> 
																	 
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
								<input name='oxygen_mask'  id="oxygen_mask" type="number" min="0" class="form-control text-center" value="0"> 
							</td> 
							<td class="actions" data-th=""> 
									<button id="oxygen_mask" type="button" class="btn btn-info btn-sm" onclick="resetting(this);"><i class="fa fa-refresh"></i></button> 
																	 
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
									<button id="aorosol_mask" type="button" class="btn btn-info btn-sm" onclick="resetting(this);"><i class="fa fa-refresh"></i></button> 
																	 
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
									<button id="hand_sanitizer" type="button" class="btn btn-info btn-sm" onclick="resetting(this);"><i class="fa fa-refresh"></i></button> 
																	 
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
									<button id="first_aid_kit" type="button" class="btn btn-info btn-sm" onclick="resetting(this);"><i class="fa fa-refresh"></i></button> 
																	 
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
								<button id="plaster" type="button" class="btn btn-info btn-sm" onclick="resetting(this);"><i class="fa fa-refresh"></i></button> 
																	 
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
									<button id="cotton_wool" type="button" class="btn btn-info btn-sm" onclick="resetting(this);"><i class="fa fa-refresh"></i></button>								 
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
                    <form id="newUniqueRequest"> 
                        <div class="form-group"> 
							<label for="itemCategory" style="float:left">Category:</label> 
							 <div class="form-group"> 
								<?php 
									include('../../Model/Category.php'); 
 
									$category = new Category(); 
									$data = $category->showAllCategory(); 
 
									$contents = array(); 
									while($row = $data->fetch_object()){ 
										array_push($contents, $row); 
									} 
 
								?> 
 
								<select class="form-control" id="itemCategory"  required> 
									<?php foreach ($data as $row) { ?> 
										<option value="<?php echo $row["category_id"]; ?>"><?php echo $row["category_name"]; ?></option> 
									<?php }?> 
								</select> 
 
 
								</div> 
								<br> 
							<label for="productName" style="float:left">Product Name</label> 
                            <input type="text" class="form-control" id="productName" placeholder="Enter product name"><br> 
							 
							<label for="product_total" style="float:left">Total</label> 
                            <input type="number"  class="form-control"  min="0" placeholder="Enter number" id="product_total"><br> 
							 
                        </div><br> 
 
                        <button type="submit" class="btn btn-primary">Create</button> 
 
                    </form> 
                </div> 
            </div> 
        </div> 
    </div> 
 
 
 
 
<script src="../../../assets/js/request.js"></script> 
