<style>
	.column {
	float: left;
	width: 33.33%;
	}
	body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
	input[type=text], input[type=phone], input[type=address],input[type=email] {
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
		button1 {
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
.signinbtn, .signupbtn {
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

<form id="loginForm" style="border:1px solid #ccc">
  <br><div class="container">
    <h1>Login with email</h1>
    <hr>
		<label for="mail"><b>Email</b></label><br>
		<input id="loginID" type="email" placeholder="Email address" name="mail" required>
		<br>				
		
		<label for="psw"><b>Password</b></label><br>
		<input id="loginPass" type="password" placeholder="Password" name="psw" required><br>
		
	
		<div id="error-box" class="alert alert-danger alert-dismissible"  style="display: none;">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<p>This alert box could indicate a dangerous or potentially negative action.</p>
		</div>

		<span class="psw">Forget <a href="forget.html">Password?</a></span><br><br>

    	<div class="clearfix">
      		<button type="submit" class="signinbtn">Login</button>
    	</div>
  </div><br>
</form>

<script src="../../../assets/js/loginValidation.js"></script>