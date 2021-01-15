<?php include("session_checker.php");?>

<?php
include('../../Model/Donate.php');

$donate = new Donate();
$historyquery = $donate->donateHistory();

$contents = array();
while($row = $historyquery->fetch_object()){
	array_push($contents, $row);
}
?>

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
	
	.button
	{
		background-color: #4CAF50;
		border: none;
		color: white;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		margin: 4px 2px;
		cursor: pointer;
	}
	
	.button1 
	{
		background-color: #f44336;
	}
	
</style>
  
</head>
<body>
 <?php include("../includes/agent/navigationagent.php");?><?php include("../includes/agent/chatbot.php");?>

<div class="main">
<div class="container p-3 my-3">
<h1>Donate List</h1>

<table id="donatelist"></b>
  <tr>
    <th>Contributor</th>
    <th>Contributor Address</th>
    <th>Donate Item</th>
    <th>Quantity</th>
    <th>Receiver</th>
    <th>Receiver Address</th>
	<th></th>
  </tr>

<?php
foreach($contents as $content)
{
?>
  <tr>
    <td><?php echo $content->donator_name; ?></td>
    <td><?php echo $content->donator_address. $content->donator_postal_code . " " . $content->donator_state; ?></td>
    <td><?php echo $content->product_name; ?></td>
    <td><?php echo $content->donate_quantity; ?></td>
    <td><?php echo $content->requester_name; ?></td>
    <td><?php echo $content->requester_address . $content->requester_postal_code . " " . $content->requester_state; ?></td>
	<td><a href="requestlist.php" >View</a></td>
  </tr>

<?php } ?>

</table>

</div>
</body>
</html>

