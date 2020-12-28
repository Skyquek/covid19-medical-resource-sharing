<?php
session_start();

$id = $_SESSION['user']['id'];
$organization_name = $_SESSION['user']['organization_name'];
$email = $_SESSION['user']['email'];
$org_type = $_SESSION['user']['org_type'];
$address = $_SESSION['user']['address'];
$state = $_SESSION['user']['state'];
$postal_code = $_SESSION['user']['postal_code'];
$class = $_SESSION['user']['class'];
$phone = $_SESSION['user']['phone'];
$password = $_SESSION['user']['password'];

?>

<style>
.column {
	float: left;
	width: 33.33%;
	}
	.form-group{
	width: 70%;
		padding: 3px;
		margin: 5px 0 22px 0;
		display: inline-block;
		border: none;
		background: #f1f1f1;
	}
	.form-control{
		width: 99%;
		margin: 5px 0 10px 0;
		display: inline-block;
		border: none;
		background: #f1f1f1;
	}
	body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
	input[type=text], input[type=tel], input[type=address],input[type=email]{
		width: 70%;
		padding: 15px;
		margin: 5px 0 22px 0;
		display: inline-block;
		border: none;
		background: #f1f1f1;
		}
	input[type=password]{
		width: 70%;
		padding: 15px;
		margin: 5px 0 22px 0;
		display: inline-block;
		border: none;
		background: #f1f1f1;
		}
	input[type=text]:focus, input[type=password]:focus,input[type=phone]:focus, input[type=address]:focus ,input[type=mail]:focus {
		background-color: #ddd;
		outline: none;
		}

	hr {
		border: 1px solid #f1f1f1;
		margin-bottom: 25px;
		}

	/* Set a style for all buttons */
	button {
		background-color: #4CAF50;
		color: white;
		padding: 14px 20px;
		margin: 0px 0;
		border: none;
		cursor: pointer;
		opacity: 0.9;
		}

	button:hover {
		opacity:1;
	}

	/* Extra styles for the cancel button */
	.cancelbtn {
		padding: 14px 20px;
		background-color: #f44336;
		}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 30%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
  text-align: left;
  max-width: max-content;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}

/* Password Strength Checker ***************************/
/* Style all input fields */
input {
 	padding: 12px;
  	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
	margin-top: 6px;
	margin-bottom: 16px;
}

/* Style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
}

/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
</style>

<form id="updateForm" method="post" style="border:1px solid #ccc">
  <br><div class="container">
		<div class="row">
			<div class="col-lg-6">
				<label for="organization"><b>Organization Type</b></label><br>
				<div class="form-group">
					<select class="form-control" name="org_type" required>
						<option value="">Select Organization</option>
						<option value="ngo" <?php if($org_type == "ngo") echo "selected";?>>NGO</option>
						<option value="industry" <?php if($org_type == "industry") echo "selected";?>>Industry</option>
						<option value="government" <?php if($org_type == "government") echo "selected";?>>Government</option>
						<option value="medical_agency" <?php if($org_type == "medical_agency") echo "selected";?>>Medical Agency</option>
						<option value="individual" <?php if($org_type == "individual") echo "selected";?>>Individual</option>
						<option value="educational" <?php if($org_type == "educational") echo "selected";?>>Educational</option>
					</select>
				</div>
				<br>

				<label for="name"><b>Organization Name</b></label><br>
				<input type="text" placeholder="Enter Organization Name" value="<?php echo $organization_name?>"  name="organization_name" required>
				<br>

				<label for="mail"><b>Email</b></label><br>
				<input type="email" placeholder="Enter email" value="<?php echo $email?>" name="email" required>
				<br>
				
				<label for="phone"><b>Phone Number</b></label><br>
				<input type="tel" id="phone" name="phone" value="<?php echo $phone?>" placeholder="10 digits number (Ex. 6011123456798)" pattern="[0-9]{8,12}" required>
				<br>
				
								
			</div>

			<div class="col-lg-6">
				<label for="address"><b>Address</b></label><br>
				<input type="address" placeholder="Enter Address" value="<?php echo $address; ?>" name="address" required>
				<br>
				
				<label for="State"><b>State</b></label><br>
				<div class="form-group">
					<select class="form-control" name="state" required>
						<option value="">State</option>
						<option value="Perak" <?php if($state == "Perak") echo "selected";?>>Perak</option>
						<option value="Pahang" <?php if($state == "Pahang") echo "selected";?>>Pahang</option>
						<option value="Perlis" <?php if($state == "Perlis") echo "selected";?>>Perlis</option>
						<option value="Selangor" <?php if($state == "Selangor") echo "selected";?>>Selangor</option>
						<option value="Kuala Lumpur" <?php if($state == "Kuala Lumpur") echo "selected";?>>Kuala Lumpur</option>
						<option value="Sarawak" <?php if($state == "Kuala Lumpur") echo "selected";?>>Sarawak</option>
						<option value="Sabah" <?php if($state == "Sabah") echo "selected";?>>Sabah</option>
						<option value="Johor" <?php if($state == "Johor") echo "selected";?>>Johor</option>
						<option value="Negeri Sembilan" <?php if($state == "Negeri Sembilan") echo "selected";?>>Negeri Sembilan</option>
						<option value="Kedah" <?php if($state == "Kedah") echo "selected";?>>Kedah</option>
						<option value="Melaka" <?php if($state == "Melaka") echo "selected";?>>Melaka</option>
						<option value="Terengganu" <?php if($state == "Terengganu") echo "selected";?>>Terengganu</option>
						<option value="Kelantan" <?php if($state == "Kelantan") echo "selected";?>>Kelantan</option>
						<option value="Labuan" <?php if($state == "Labuan") echo "selected";?>>Labuan</option>
					</select>
				</div>
				
				<br>
				<label for="code"><b>Postal Code</b></label><br>
				<input type="text" pattern="[0-9]{5}" placeholder="5 digit post code (Ex. 15200)" value="<?php echo $postal_code?>" name="postal_code" required>
				<br>
			</div>

            <div class="col-lg-6">
                <button id="btnChgPsw" type="button">Change Password</button>
                <br>
                <br>
            </div>
            
			<div id="chgPsw">
                <div class="col-lg-12">
                    <label for="psw"><b>Old Password</b></label><br>
                    <input id="psw-old" type="password" placeholder="Enter Password" name="old_psw">
                </div>

                <div class="col-lg-12">
                    <label for="psw"><b>Password</b></label><br>
                    <input id="psw" type="password" placeholder="Enter Password" name="psw">
                </div>
                
                <div class="col-lg-12 chg-pass">
                    <label for="psw-repeat"><b>Confirmed Password</b></label><br>
                    <input id="psw-repeat" type="password" placeholder="Repeat Password" name="psw_repeat">
                </div>
            </div>

			<div class="col-lg-12">
				<div id="message">
					<h3>Password must contain the following:</h3>
					<p id="letter" class="invalid">A <b>lowercase</b> letter</p>
					<p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
					<p id="number" class="invalid">A <b>number</b></p>
					<p id="length" class="invalid">Minimum <b>8 characters</b></p>
				</div>
			</div>

			<div class="col-lg-12">
				<div id="error-box" class="alert alert-danger alert-dismissible"  style="display: none;">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<p>This alert box could indicate a dangerous or potentially negative action.</p>
				</div>
			</div>

		</div>
	    
	<div class="clearfix">
      <button type="submit" id="registerBtn" class="signupbtn">Update</button>
    </div>
	
  </div>
  <br>
</form>

<script src="../../../assets/js/updateUserValidation.js"></script>
<script>
$('chgPsw').hide();


</script>
