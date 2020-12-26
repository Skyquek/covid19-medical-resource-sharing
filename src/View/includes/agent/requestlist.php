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

<table id="donatelist"></b>
  <tr>
    <th>Requester Name</th>
    <th>Address</th>
    <th>Request Item</th>
	<th>Quantity</th>
	<th>Action</th>
  </tr>
  <tr>
    <td>Dr. Albert</td>
    <td>HOSPITA QUEEN ELIZABETH, 13a, Jalan Penampang, 88200 Kota Kinabalu, Sabah</td>
    <td>PPE</td>
	<td><input type="number" id="quantity" name="quantity" min="1" max="50000"></td>
	<td><a href = "#" ><button class="button" onclick="alert('Are you sure to donate?')">Donate</button>
	<a href = "donatelist.php" ><button class="button button1">Cancel</button> </a>
	</td>
  </tr>
</table>
</div>
</body>
</html>
