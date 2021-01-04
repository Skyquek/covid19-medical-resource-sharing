<?php 
session_start();
include('../../Model/Donate.php');

$request_id = $_GET["id"];

$donate = new Donate();
$donate_query = $donate->DonateToRequest($request_id);

?>

<br>
<div class="row" style="width:100%">
<div class="col-sm-1"></div>
<div class="container border" style="height:800px">
<a href="completed.php"><button type="button" class="btn btn-outline-secondary" style="width:100px;float:left;margin-top:10px">Back</button></a><br><br>
<hr>

<div class="col-sm-12">
<?php
	while($row = $donate_query->fetch_object()){
?>
		<p style="float:left">Contributor Organization Name: <?php echo $row->donator_name; ?></p><br><br>
		<p style="float:left">Contributor Phone: <?php echo $row->donator_phone; ?></p><br><br>
		<p style="float:left">Contributor Address: <?php echo $row->donator_address . $row->donator_postal_code . $row->donator_state; ?></p><br><br>
		<div class="row">
		<div class="col-sm-6" ><p style="float:left">Donate Quantity: <?php echo $row->donate_quantity; ?></p></div>	
		<div class="col-sm-4"><p style="text-align:right">Date: <?php echo $row->donate_time; ?> </p></div>
		</div><br><br>
		<hr>

<?php	
	}
?>

</div>
</div>
<br>