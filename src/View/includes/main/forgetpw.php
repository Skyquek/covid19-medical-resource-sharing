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
	input[type=text]:focus, input[type=password]:focus,input[type=phone]:focus, input[type=address]:focus ,input[type=email]:focus {
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

<?php 

function randomPassword() {
    $alphabet = 'ab!@#$cde!@#fghijklmn!@#$opqrs!@#tuvwxy!@#$zABCDEF!#@GHIJKLMNOPQ!@#$RSTUVWXYZ1234567890!@#$';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 10; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}


if(isset($_POST["email"]))
{	
	error_reporting(0);
	include('../../Controller/Auth/AuthController.php');
	include('../../Model/connection.php');

	$email = $_POST["email"];

	// 1. Check if this user is inside the system
	$checkUser = AuthController::findUser("login", $email);

	// 2. Random a password to that user
	$strong_password = randomPassword();

	// 3. Hash the Random Password
	$pass = hash('sha256', $strong_password);
	
	// 4. Update the database model password
	$sql = "UPDATE user SET password='$pass' WHERE email='$email'";
	
	if($connection->query($sql) === TRUE) {
	}
	else {
	}

	$connection->close();

	// 5. Show user the new password
	echo 
	'
	<script>
	alert("User Detected! Password change to ' . $strong_password . '");
	</script>
	';

}

?>

<form action="" method="post" style="border:1px solid #ccc">
  <br><div class="container">
    <h1>Forget Password</h1>
    <p>Please fill in this form to find back password.</p>
    <hr>
			
			<label for="email"><b>email</b></label><br>
			<input type="email" placeholder="Enter Mail" name="email" required>
		<br>

    <div class="clearfix">
      <button type="submit" class="signupbtn">Send</button>
    </div>
  </div><br>
</form>