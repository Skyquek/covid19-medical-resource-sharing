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
	input[type=text], input[type=phone], input[type=address],input[type=mail]{
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
  </style>
<form action="/action_page.php" style="border:1px solid #ccc">
  <br><div class="container">
    <h1>Sign up with Mail</h1>
    <p>Please fill in this form to sign up.</p>
    <hr>
		<div class="row">
			<div class="col-lg-6">
				<label for="organization"><b>Agent</b></label><br>
				<div class="form-group">
				<select class="form-control" name="organization">
				<option value="">Organization</option>
				<option value="PK">Medical</option>
				<option value="PH">Ngo</option>
				<option value="PL">Perlis</option>
				<option value="SL">Selangor</option>
				<option value="TR">Terengganu</option>
				<option value="KT">Kelantan</option>
				<option value="Lb">Labuan</option>
				</select>
				</div><br>
				<label for="name"><b>Name</b></label><br>
				<input type="text" placeholder="Enter Name" name="name" required>
				<br>
				<label for="phone"><b>Contact</b></label><br>
				<input type="phone" placeholder="Enter Phone Number" name="phone" required>
				<br>
				<label for="mail"><b>Mail</b></label><br>
				<input type="mail" placeholder="Enter Mail" name="mail" required>
				<br>				
			</div>
			<div class="col-lg-6">
				<label for="Address"><b>Address</b></label><br>
				<input type="address" placeholder="Enter Address" name="address" required>
				<br>
				<label for="State"><b>State</b></label><br>
				<div class="form-group">
				<select class="form-control" name="state">
				<option value="">State</option>
				<option value="PK">Perak</option>
				<option value="PH">Pahang</option>
				<option value="PL">Perlis</option>
				<option value="SL">Selangor</option>
				<option value="KL">Kuala Lumpur</option>
				<option value="SR">Sarawak</option>
				<option value="SB">Sabah</option>
				<option value="JH">Johor</option>
				<option value="NS">Negeri Sembilan</option>
				<option value="KD">Kedah</option>
				<option value="MK">Melaka</option>
				<option value="TR">Terengganu</option>
				<option value="KT">Kelantan</option>
				<option value="Lb">Labuan</option>
				</select>
				</div>
				<br>
				<label for="Code"><b>Code</b></label><br>
				<input type="address" placeholder="Enter Code" name="code" required>
				<br>
			</div>
			<div class="col-lg-6">
			<label for="psw"><b>Password</b></label><br>
			<input type="password" placeholder="Enter Password" name="psw" required>
			</div>
			<div class="col-lg-6">
			<label for="psw-repeat"><b>Comfirmed Password</b></label><br>
			<input type="password" placeholder="Repeat Password" name="psw-repeat" required>
			</div>
		</div>
		<label><input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me</label>
		<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
    <div class="clearfix">
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div><br>
</form>