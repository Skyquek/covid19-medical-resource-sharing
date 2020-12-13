<!DOCTYPE html>
<html lang="en">
<head>
  <title>COVID CHATBOT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <script>var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}</script>
  <style>
	.jumbotron {
	background-image: url("virus-4835301_1920.jpg");
	opacity:0.9;
	height:250px;
	}
	.jumbotron1 {
	background-color:gray;
	}
	.jumbotron2 {
	background-color:#990012;
	height:300px;
	}
	.navbar{
	background-color:#9F000F;
	
	}
	.carousel-inner img {
    width: 100%;
    height: 100%;
	}
	.jumbotron3{
	background-image: url("WASHING-HANDS.jpg")
	}
	.column {
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
  margin: 24px 0 12px 0;
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
}
  </style>
</head>
<body>
<div class="alert alert-warning alert-dismissible fade show text-center"style="color:black;margin-bottom:0px">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Warning!</strong> visit <a href="http://covid-19.moh.gov.my/" class="alert-link">Kementerian Kesihatan Malaysia</a> to get latetest information
</div>
 <nav class="navbar navbar-expand-sm navbar-dark justify-content-center sticky-top" style="margin-top:0px" data-spy="affix" >
	<ul class="navbar-nav">
		<li class="nav-item " style="color:white">
        <a class="nav-link" href="home.html" >Home</a>
		</li>
	  <li class="nav-item" style="color:white">
        <a class="nav-link " href="about us.html" >About Us</a>
      </li>
	  <li class="nav-item" style="color:white">
        <a class="nav-link" href="donation.html">Donation</a>
      </li>
       <li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Account</a>
				<div class="dropdown-menu dropdown-menu-right">
					<a class="dropdown-item" href="signin.html">Sign In</a>
					<a class="dropdown-item" href="register.html">Sign Up</a>
					<a class="dropdown-item" href="forget.html">Forget Password</a>
				</div>
		</li>  
	</ul>
</nav>
<div class="jumbotron text-center" style="margin-bottom:0px;margin-top:0px">
  <h1 style="font-size:50px;color:white">Contribute to help other</h1>
  <p style="font-size:15px;color:white">Help us provide resources for the fight against Covid-19</p> 
</div>
<nav class="navbar justify-content-end" style="background-color:gray;height:20px"></nav><br>
<div><h1 style="font-weight:bold" class="text-center">Donate to help each other</h1><br>
<p class="text-center">By making a much needed donation you will join us to comfirm  and find the solutions we need to our most important environmental issues.</p>
<p></p>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;margin-left:900px">Donate</button>
<div id="id01" class="modal">
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close1" title="Close Modal">&times;</span>
    </div>
	<h1 class="text-center">Sign up with Mail</h1>
    <p class="text-center">Please fill in this form to sign up.</p>
    <div class="container">
		<div class="row" style="margin-left:100px">
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
				</div>
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
		</div>
    </div>

    <div class="container container-fluid" style="background-color:#f1f1f1">
    <button class="signupbtn" type="submit" style="margin-left:280px">Sign Up</button>
    </div>
  </form>
</div>

</div><br>
<div class="jumbotron3" style="margin-bottom:-10px;height:280px text-align: right">
  <h1 style="font-size:130px;color:white;font-weight:bold;margin-left:60px">Please Wash</h1>
  <p style="font-size:50px;color:white;font-weight:bold;margin-left:60px">Your Hand</p>
</div>
<div class="container-fluid p-2 my-1 border text-center">
<h2 style="font-size:50px;margin-left:10px">Any Question?</h2>
<button type="button" class="btn btn-outline-danger">Send Us Feedback</button></h2>
</div>
<div class="jumbotron1" style="margin-bottom:0px;height:180px">
  <div class="container container-fluid text-left" >         
  <table class="table table-borderless ">
      <tr>
        <th style="color:white">Contact Us</th>
      </tr>
    <tbody>
        <td style="color:white">Phone: xxx-xxxxxxx<br>Mobile: xxx-xxxxxxx<br>Email: zhongheng98@hotmail.com<br>Web: </td>
		<td>
    </tbody>
  </table>
</div>
</div>
<div class="jumbotron2 text-center" style="margin-bottom:0px;height:30px">
  <p style="font-size:10px;color:white">Copyright 2018 ASHIC | All Rights Reserved | xxxxxx</p> 
</div>
</body>
</body>