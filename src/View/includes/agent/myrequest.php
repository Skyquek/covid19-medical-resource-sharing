<style>
/* Pagination links */
.pagination a {
  color: black;
  float: right;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
}

/* Style the active/current link */
.pagination a.active {
  background-color: dodgerblue;
  color: white;
}

/* Add a grey background color on mouse-over */
.pagination a:hover:not(.active) {background-color: #ddd;}
</style>

<?php 
session_start();
include('../../Model/Request.php');

$request = new Request();
$data = $request->read($_SESSION['user']['id']);

$contents = array();
while($row = $data->fetch_object()){
	array_push($contents, $row);
}

?>
<?php
	foreach($contents as $content){
		$donation = 0;
		$respond = $request->totalDonation($content->request_id);
		if($row = $respond->fetch_object()){
			$donation = (string)$row->sum;
		}
?>
	<div class="row" style="width:1600px">
	<div class="col-sm-3"></div>
	<div class="col-sm-8">
	<!-- <div class="card-body border" style="height:300px"> -->
		<p style="float:left">Organization : <?php echo $content->product_name;?></p><br><br>
		<div class="row">
			<div class="col-sm-8"><p style="float:left">Item request  : <?php echo $content->product_name;?></p></div>
			<div class="col-sm-8"><p style="float:left">Item Category : <?php echo $content->category_name;?></p></div>		
			<div class="col-sm-8"><p style="float:left">Date          : <?php echo $content->date_time;?></p></div>	
			<div class="col-sm-3"><p style="text-align:right">Quantity Request : <?php echo $content->total;?></div>
			<div class="col-sm-3"><p style="text-align:left">Total Respond : <?php echo $donation;?></div>
		</div>

		<?php 
			$percentage = number_format(((float)($donation / $content->total) * 100), 2, ".", "");
			$percentage = $percentage."%";
		?>

		<div class="progress" style="margin-top:90px">
			<div class="progress-bar" style="width:<?php echo $percentage; ?>">
				<?php echo $percentage; ?>
			</div>
		</div>

		<br>
			<a href="../Agent/view.php"><button type="button" class="btn btn-outline-secondary" style="width:100px;float:right">View</button></a>
		<br>
	</div>   
	</div>
	</div>
	<br>

	<?php	}	?>

