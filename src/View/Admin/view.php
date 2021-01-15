<?php 
include("session_checker.php");
?>

<br>
<div class="container border" style="height:800px">
<a href="requestment.php"><button type="button" class="btn btn-outline-secondary" style="width:100px;float:left;margin-top:10px">Back</button></a><br><br>
<hr>
<div class="col-sm-12">

		<p>Contributor: <input type ="text" id="reqcont" name="reqcont"></p><br>
		<p>Address: <input type ="text" id="reqadd" name="reqadd"></p><br>
		<div class="row">
		<div class="col-sm-6"><p>Item Request: <input type ="text" id="reqitem" name="reqitem"></p></div>	
		<div class="col-sm-4"><p style="text-align:right">Date: <input type ="text" id="reqdate" name="reqdate"></p></div>
		<div class="col-sm-2"><p style="text-align:right">Amount: <input type ="text" id="reqamount" name="reqamount"></p></div>
		</div>
        <hr>
  <p>Receiver: <input type ="text" id="donaterec" name="donaterec"></p><br>
		<p>Address: <input type ="text" id="donateadd" name="donateadd"></p><br>
		<div class="row">
		<div class="col-sm-6"><p>Item Donate: <input type ="text" id="donateitem" name="donateitem"></p></div>	
		<div class="col-sm-4"><p style="text-align:right">Date: <input type ="text" id="donatedate" name="donatedate"></p></div>
		<div class="col-sm-2"><p style="text-align:right">Amount: <input type ="text" id="donateamount" name="donateamount"></p></div>
		</div></div> 
<div class="progress" style="margin-bottom:0px">
			<div class="progress-bar" style="width:70%">70%</div>
		</div><br>
		<br>
</div>
<br>
