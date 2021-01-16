<?php 
session_start();
include('../../Model/Request.php');
include('../../Model/Category.php');

$completedRequestQuery = Request::viewCompletedRequest();

$contents = array();
while($row = $completedRequestQuery->fetch_object())
{
	array_push($contents, $row);
}

?>
<style>
.ribbon {
   position: absolute;
   right: -5px; top: -5px;
   z-index: 1;
   overflow: hidden;
   width: 75px; height: 75px; 
   text-align: right;
}
.ribbon span {
   font-size: 10px;
   color: #fff; 
   text-transform: uppercase; 
   text-align: center;
   font-weight: bold; line-height: 20px;
   transform: rotate(45deg);
   -webkit-transform: rotate(45deg); /* Needed for Safari */
   width: 100px; display: block;
   background: #79A70A;
   background: linear-gradient(#9BC90D 0%, #79A70A 100%);
   box-shadow: 0 3px 10px -5px rgba(0, 0, 0, 1);
   position: absolute;
   top: 19px; right: -21px;
}
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


<?php foreach($contents as $content) { ?>
<div class="row" style="width:100%">
	<div class="col-sm-2">
	</div>
	<div class="col-sm-8">
		<div class="card-body border" style="height:250px">
			<div class="ribbon" style="margin-right:20px;margin-top:5px"><span>Completed</span></div>
				<p>Organization: <?php echo $content->organization_name ?></p>
				<div class="row">
					<div class="col-sm-8"><p>Item request: <?php echo $content->product_name ?></p></div>	
					<div class="col-sm-8"><p>Quantity: <?php echo $content->total ?></p></div>	

					<div class="col-sm-3"><p style="text-align:right">Date: <?php echo $content->date_time ?></p></div>
				</div><br>
				<a href="<?php echo "../Admin/viewcom.php?id=" . $content->request_id ?>">
					<button type="button" class="btn btn-outline-secondary" style="width:100px;float:right">View</button>
				</a>
				
				<br>
			</div>   
		</div>
	</div>
<br>

<?php } ?>