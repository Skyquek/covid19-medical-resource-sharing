<?php 
include('../../Model/Request.php');
include('../../Model/Donate.php');
include('../../Model/Category.php');

$requestQuery = new Request();
$donateQuery = new Donate();
$categoryQuery = new Category();

$requestData = $requestQuery->AllRequest();
$donateData = $donateQuery->AllDonate();

$total_request = mysqli_fetch_assoc($requestData)['total_request'];
$total_donate = mysqli_fetch_assoc($donateData)['total_donate'];


?>

<head>
<style>
.card-header p {
  white-space: nowrap; 
  width: 300px; 
  overflow: hidden;
  text-overflow: ellipsis; 
}

.card-header p:hover{
    overflow: visible; 
    white-space: normal;
    height:auto;  /* just added this line */
    font-size: 13px;
    cursor: pointer;
}

a:hover {
  text-decoration:none;
}

a:hover p{
  font-size: 30px;
}
</style>
</head>
<div class="container1" style="height:600px">

<hr/>

<div class="row">
  <div class="col-sm-2">
    <div class="card-body border" style="height:180px;width:230px;margin-top:50px">
        <h4>Total Donation</h4>
        <h3><?php echo $total_donate; ?></h3>
    </div>

    <div class="card-body border" style="height:180px;width:230px;margin-top:30px">
      <h4>Total Request</h4>
        <h3><?php echo $total_request; ?></h3>
    </div>
  </div>
		
  <div class="col-sm-6">
    <div class="card-body border" style="height:390px;margin-top:50px">
        <canvas id="historyChart"></canvas>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="card-body border" style="height:300px; margin-top:50px">
        <canvas id="categoryChart"></canvas>
    </div>
  </div>
</div>

<hr />

<br>
<br>

<h3 style="text-align:center; font-weight:bold;">System Recent Request List</h3><br>

<div class="container3" style="height:200px">
<div class="row">
		
        <?php 
        $allRequest = $requestQuery->read("", $order="DESC");

        $x = 0;
        while($row = $allRequest->fetch_object()){
          ?>
          <div class="col-md-3">
            <div class="card card-primary" style="height:180px">
              <div class="card-header">
                    <h3 class='card-title'><?php echo $row->product_name; ?></h3>
                    <p><?php echo $row->organization_name; ?> <p>
                </div>
              <div class="card-body" style="display: block;">
                <a href="requestlist.php" >see more</a>
              </div>
            </div>
          </div>

          <?php
          $x = $x+1;
          if($x == 3)
          {
            break;
          }
        }

        ?>

		<div class="col-md-3">
      <a href="requestlist.php" style="color:black;">
      <div class="card card-primary">
        <div class="card-header" style="height:180px">
          <h6 class="card-title" style="margin-top:70px">
            <p>View all Request</p>
          </h6>
        </div>
      </div>
      </a>
    </div>

</div>
</div>
<br> 

<h3 style="text-align:center; font-weight: bold;">My Request Progress</h3><br>
<div class="container3" style="height:200px">
<div class="row">
		<div class="col-md-9">
        <div class="card card-primary" style="height:180px">
          <div class="card-header">
            <h5 class="card-title" style="text-align:left">Recent Request Progress</h5>
          </div>

          <?php 
            // 1. Get this user recent request limit to 1
            $myRecentQuery = $requestQuery->read("", $order="DESC", $limit=1);
            $result = mysqli_fetch_assoc($myRecentQuery);
            $request_id = $result['request_id'];
            $product_name = $result['product_name'];
            $total = $result['total'];
            
            // 3. Get the total donation he want
            $ttlRespondQuery = $requestQuery->totalDonation($request_id);
            if($ttlRespondQuery->num_rows > 0)
            {
              $resultRespond = mysqli_fetch_assoc($ttlRespondQuery);
              $respond = $resultRespond['sum'];

              $progressWidth = ($respond / $total) * 100;
              $progressWidth = $progressWidth . "%";
            }
            else {
              $progressWidth = "0%";
            }

          ?>

          <div class="card-body" style="display: block;">
            <div class="row">
            </div>
            <div class="card-body">
              <div class="progress">
                <div class="progress-bar bg-primary progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $progressWidth; ?>">
                  <p><?php echo $product_name; ?></p>
                  
                  <span class="sr-only">40% </span>
                </div>
              </div>
              <a href="view.php" style="margin-top:20px;float:right">view</a>
            </div>
          </div>


      </div>
    </div>
		
    <div class="col-md-3">
    <a href="myrequest.php" style="color:black">
      <div class="card card-primary">
        <div class="card-header" style="height:180px">
          <h6 class="card-title" style="margin-top:70px">
          <p>View My Request</p>
          </h6>
        </div>
      </div>
      </a>
    </div>


</div>
</div> 

</div>

<?php

$request = new Request();
$request_num_result = $request->getRequestNumber();

$donate = new Donate();
$donate_num_result = $donate->getDonateNumber();

$record = array(
  "January"   => array("request" => "0", "donation" => "0"),
  "February"  => array("request" => "0", "donation" => "0"),
  "March"     => array("request" => "0", "donation" => "0"),
  "April"     => array("request" => "0", "donation" => "0"),
  "May"       => array("request" => "0", "donation" => "0"),
  "June"      => array("request" => "0", "donation" => "0"),
  "July"      => array("request" => "0", "donation" => "0"),
  "August"    => array("request" => "0", "donation" => "0"),
  "September" => array("request" => "0", "donation" => "0"),
  "October"   => array("request" => "0", "donation" => "0"),
  "November"  => array("request" => "0", "donation" => "0"),
  "December"  => array("request" => "0", "donation" => "0")
);


while($row = $request_num_result->fetch_object()){
    $record[$row->month]["request"] = $row->num;
}
while($row = $donate_num_result->fetch_object()){
  $record[$row->month]["donation"] = $row->num;
}

$allcategory = array();
$categoryData = $categoryQuery->showAllCategory();


$categoryValueCount = array();
while($row = $categoryData->fetch_object()){
  $sum = 0;
  array_push($allcategory, $row->category_name);

  $rowVal = $categoryQuery->countCategoryItems($row->category_id);
  while($row = $rowVal->fetch_object())
  {
    $sum += $row->sum;
  }

  array_push($categoryValueCount, $sum);
}



$arrCategory = "";
foreach($allcategory as $category)
{
  $arrCategory .= "'" . $category . "'" . ",";
}
$arrCategory = rtrim($arrCategory, ",");

$arrCategoryCount = "";
foreach($categoryValueCount as $rowCount)
{
  $arrCategoryCount .= "'" . $rowCount . "'" . ",";
}

$arrCategoryCount = rtrim($arrCategoryCount, ",");


$requestJS = array();
$requestCMD = "";
$donationCMD = "";

foreach($record as $key => $value) {
  // echo $key . " : " . $value["request"] . "<br>";
  $requestCMD .= $value["request"] . ","; 
  $donationCMD .= $value["donation"] . ",";   
}

$requestCMD = rtrim($requestCMD, ',');
$donationCMD = rtrim($donationCMD, ',');

$requestCMD = "[" . $requestCMD . "]";
$donationCMD = "[" . $donationCMD . "]";
$arrCategory = "[" . $arrCategory . "]";
$arrCategoryCount = "[" . $arrCategoryCount . "]";
?>

<script>
var donation_record = <?php echo $donationCMD; ?>;
var request_record = <?php echo $requestCMD; ?>;
var arrCategory = <?php echo $arrCategory; ?>;
var arrCategoryCount = <?php echo $arrCategoryCount; ?>;

</script>
<script src="../../../assets/js/palette.js"></script>
<script src="../../../assets/js/agentHome.js"></script>
