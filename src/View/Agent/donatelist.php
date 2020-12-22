<!DOCTYPE html>
<html lang="en">
<head>
  <title>COVID CHATBOT</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../../../assets/css/includeagent.css">
  <style>
	#donatelist {
	  font-family: Arial, Helvetica, sans-serif;
	  border-collapse: collapse;
	  width: 100%;
	}

	#donatelist td, #donatelist th 
	{
	  border: 1px solid #ddd;
	  padding: 8px;
	  
	}

	#donatelist tr:nth-child(even)
	{background-color: #f2f2f2;}

	#donatelist tr:hover 
	{background-color: #ddd;}

	#donatelist th 
	{
	  padding-top: 12px;
	  padding-bottom: 12px;
	  text-align: left;
	  background-color: #ff9966;
	  color: white;
	  text-align: center;
	}
</style>
  
</head>
<body>
 <?php include("../includes/agent/navigationagent.php");?>

<div class="main">
<div class="container p-3 my-3 border">
<h1>Donate List</h1>

<table id="donatelist"></b>
  <tr>
    <th>Name</th>
    <th>Address</th>
    <th>Request Item</th>
  </tr>
  <tr>
    <td>Dr. Mellisa</td>
    <td>HOSPITAL SUNGAI BULOH, Jalan Hospital, 47000 Sungai Buloh, Selangor</td>
    <td>PPE</td>
  </tr>
</table>
</div>
</body>
</html>
