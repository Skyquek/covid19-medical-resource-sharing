<style>	
	.column {
	float: left;
	width: 33.33%;
	}
	.form-group{
		width: 70%;
		padding: 3px;
		margin: 5、px 0 22px 0;
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
		padding: 10px;
		margin: 5px 0 22px 0;
		display: inline-block;
		border: none;
		background: #f1f1f1;
		}
	input[type=password]{
		width: 70%;
		padding: 10px;
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


/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0px;
  top: 0px;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 3% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close1 {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
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
}</style>
 
 <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close1" title="Close Modal">&times;</span>
    </div>
	<div class="container">
	<h1 class="text-center">Sign up with Mail</h1>
    <p class="text-center">Please fill in this form to sign up.</p><hr>
		<div class="row" style="margin-left:100px">
			<div class="col-lg-6">
				<label for="organization"><b>Organization Type</b></label><br>
				<div class="form-group">
					<select class="form-control" name="organization">
						<option value="ngo">NGO</option>
						<option value="industry">Industry</option>
						<option value="government">Government</option>
						<option value="medical_agency">Medical Agency</option>
						<option value="individual">Individual</option>
						<option value="educational">Educational</option>
					</select>
				</div>
				<br>
				<label for="name"><b>Organization Name</b></label><br>
				<input type="text" placeholder="Enter Name" name="name" required>
				<br>
				<label for="phone"><b>Phone Number</b></label><br>
				<input type="phone" placeholder="Enter Phone Number" name="phone" required>
				<br>
				<label for="mail"><b>E-Mail</b></label><br>
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
				<input id="psw" type="password" placeholder="Enter Password" name="psw" required>
			</div>
			
			<div class="col-lg-6">
				<label for="psw-repeat"><b>Comfirmed Password</b></label><br>
				<input type="password" placeholder="Repeat Password" name="psw-repeat" required>
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
				<label for="remember">Remember Me</label>
      			<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px">
				<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
				<div class="clearfix">
					<button type="submit" class="signupbtn">Sign Up</button>
				</div>
			</div>
		</div>
  </form>
</div>