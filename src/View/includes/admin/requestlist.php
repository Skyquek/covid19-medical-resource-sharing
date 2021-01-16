<?php 
session_start();
include('../../Model/Request.php');

$categoryQuery = Request::viewAllRequest();

$contents = array();$x=0;
while($row = $categoryQuery->fetch_object())
{
	array_push($contents, $row);
}
?>

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
<!---->

<?php 

foreach($contents as $content){

	$respond = Request::totalDonation($content->request_id);
	
	$sum = $respond->fetch_assoc();
	if($sum != null)
	{
		$sum = $sum["sum"];
	}
	else {
		$sum = 0;
	}

	$progressbar = ($sum / $content->total) * 100;
	$progressbar = number_format((float)$progressbar, 2, '.', '');
	$progressbar = $progressbar . '%';
	$request_id = $content->request_id;
?>

<div class="row" style="width:100%">
	<div class="col-sm-2">
	</div>
	<div class="col-sm-8">
		<div class="card-body border" style="height:350px">
			<p>Organization: <?php echo $content->organization_name; ?></p>
			<div class="row">
				<div class="col-sm-8"><p>Item request: <?php echo $content->product_name; ?> </p></div>	
				<div class="col-sm-3"><p style="text-align:right">Date: <?php echo $content->date_time; ?></p></div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<p>Quantity: <?php echo $content->total;?></p>
					<p>Respond: <?php echo $sum; ?></p>
				</div>
			</div>
			<div class="progress" style="margin-top:50px">
				<div class="progress-bar" style="<?php echo 'width:'.$progressbar;?>"><?php echo $progressbar; ?></div>
			</div>
			<br>
			<a href=<?php echo "../Admin/requestedit.php?id=$request_id" ?>>
				<button type="button" class="btn btn-outline-secondary" style="width:100px;float:right">Modify</button>
			</a>
			
			<br>
		</div> 
			<br>
	</div>
	<br>
</div>
<?php } ?>
<!---->