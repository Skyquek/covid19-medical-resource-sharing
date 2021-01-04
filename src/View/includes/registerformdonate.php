<style>	.column {
	float: left;
	width: 33.33%;
	}
	body {font-family: Arial, Helvetica, sans-serif;}
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
/* Full-width input fields */
* {box-sizing: border-box}
	input[type=text],input[type=name], input[type=phone], input[type=address],input[type=mail]{
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
	input[type=name]:focus,input[type=text]:focus, input[type=password]:focus,input[type=phone]:focus, input[type=address]:focus ,input[type=mail]:focus {
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
  padding: 10px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: -10px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 45%; /* Could be more or less, depending on screen size */
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
}</style>
 
 <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close1" title="Close Modal">&times;</span>
    </div>
	<h1 class="text-center">Sign up with Mail</h1>
    <p class="text-center">Please fill in this form to sign up.</p>
    <div class="container">
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
			</div>
		</div>
	<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
    <div class="container container-fluid" style="background-color:#f1f1f1">
    <button class="signupbtn" type="submit" style="margin-left:280px">Sign Up</button>
    </div>
  </form>
</div>