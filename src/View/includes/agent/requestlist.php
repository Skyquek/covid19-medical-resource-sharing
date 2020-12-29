<?php 

include('../../Model/Request.php');
include('../../Model/Donate.php');


$request = new Request();
$data = $request->read();

# $donate = new Donate();

$contents = array();
while($row = $data->fetch_object()){
	array_push($contents, $row);
}

?>

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
<div class="main">
<div class="container p-3 my-3 ">

<form id="donateForm">
<table id="donatelist"></b>
  <tr>
    <th>Organization Name</th>
    <th>Address</th>
    <th>Category Name</th>
	<th>Product Name</th>
	<th>Organization Request</th>
	<th>Past Donation</th>
	<th>Donate Quantity</th>
	<th>Action</th>
  </tr>

<?php 
$n = 0;

foreach($contents as $content)
{
	$donate = new Donate();
	$donation = 0;
	$respond = $donate->totalDonation($content->request_id);
	if($row = $respond->fetch_object()){
		$donation = $row->sum;
	}

	if($donation <= $content->total){
		$remain = $content->total-$donation;
		echo "<tr><td>".$content->organization_name."</td>";
		echo "<td>".$content->address . $content->state ."</td>";
		echo "<td>".$content->category_name."</td>";
		echo "<td>".$content->product_name."</td>";
		echo "<td>".$content->total."</td>";	
		echo "<td>".$donation."</td>";
		?>
		<input hidden name="category_id"  value="<?php echo $content->category_id; ?>"/>
		<input hidden name="request_id"   value="<?php echo $content->request_id; ?>"/>
		<input hidden name="product_name" value="<?php echo $content->product_name; ?>"/>

		<td><input type="number" id="quantity" name="quantity" min="0" value="0" max=<?php echo $remain;?> onchange="autoChg(this)"></td>
		<td>
			<button class="button" id='<?php echo $n;?>' type="button" onclick="donate(this);">Donate</button>
			<a href="home.php" class="button button1" style="text-decoration: none; color:white;">Cancel</a>
		</td>
	</tr>
		<?php
$n += 1;
	} }
	
	
?>
		


</table>
</form>

</div>
</body>
<script src="../../../assets/js/requestList.js"></script>

</html>


