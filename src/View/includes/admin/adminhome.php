<?php 
include('../../Model/Request.php');
include('../../Model/Donate.php');
include('../../Model/Category.php');
include('../../Model/User.php');

error_reporting(E_ERROR | E_PARSE);


$requestQuery = new Request();
$donateQuery = new Donate();
$categoryQuery = new Category();
$userQuery = new User();

$requestData = $requestQuery->AllRequest();
$donateData = $donateQuery->AllDonate();
$countUserData = $userQuery->countAllUser();


$total_request = mysqli_fetch_assoc($requestData)['total_request'];
$total_donate = mysqli_fetch_assoc($donateData)['total_donate'];
$total_user = mysqli_fetch_assoc($countUserData)['total_user'];

?>

<div class="main">
	<div class="container1" style="width:100%">
	<h2 style="text-align:center">Overview</h2>

		<div class="row" style="width:100%">
		<div class="col-sm-2"></div>
			<div class="card-body">
				<div class="row">
					<div class="col-sm-3">
<<<<<<< HEAD
						<div class="card-body border bg-warning"style="color:white">
=======
						<div class="card-body border bg-warning"style="color:white;font-size:20px">
>>>>>>> php-code-admin
							Total User:<br>
							<?php echo $total_user; ?>
						</div>
					</div>

					<div class="col-sm-3">
<<<<<<< HEAD
						<div class="card-body border bg-success" style="color:white">
=======
						<div class="card-body border bg-success" style="color:white;font-size:20px">
>>>>>>> php-code-admin
							Total Request: <br>
							<?php echo $total_request; ?>
						</div>
					</div>

					<div class="col-sm-3">
<<<<<<< HEAD
						<div class="card-body border bg-info" style="color:white">
=======
						<div class="card-body border bg-info" style="color:white;font-size:20px">
>>>>>>> php-code-admin
							Total Donate: <br>
							<?php echo $total_donate; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>
		<br>
					<br><br>
			<div class="row" style="width:100%">
				<div class="col-sm-1"></div>
				<div class="col-sm-5">
<<<<<<< HEAD
					<div class="card-body border"  style="height:400px">
=======
					<div class="card-body border"  style="height:auto">
					<br>
>>>>>>> php-code-admin
						<canvas id="historyChart"></canvas>
					</div>
				</div>

				<div class="col-sm-5">
<<<<<<< HEAD
					<div class="card-body border" style="height:400px">
=======
					<div class="card-body border" style="height:auto"><br>
>>>>>>> php-code-admin
						<canvas id="categoryChart"></canvas>
					</div>
				</div>
			</div>
			<br><br><br><br>
			<div class="row" style="width:100%">
			<div class="col-sm-1"></div>
				<div class="col-sm-5">
<<<<<<< HEAD
					<div class="card-body border"   style="height:400px">
=======
					<div class="card-body border"   style="height:auto"><br>
>>>>>>> php-code-admin
						<canvas id="userStateChart"></canvas>
					</div>
				</div>
	
				<div class="col-sm-5">
<<<<<<< HEAD
					<div class="card-body border"   style="height:400px">
=======
					<div class="card-body border"  style="height:auto"><br>
>>>>>>> php-code-admin
						<canvas id="requestStateChart"></canvas>
					</div>
				</div>
			</div>
			</div>
			<br><br>
		</div>


<?php
$request = new Request();
$request_num_result = $request->getRequestNumber();
$request_state_result = $request->getRequestState();

$donate = new Donate();
$donate_num_result = $donate->getDonateNumber();
$donate_state_result = $donate->getDonateState();

$user = new User();
$user_count_query = $user->countUserByState();

$user_state_count_array = array();

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

$malaysia_state_array = array(
	"Perlis"			=> array("user" => 0, "request" => "0", "donation" => "0"),
	"Kedah"				=> array("user" => 0, "request" => "0", "donation" => "0"),
	"Penang"			=> array("user" => 0, "request" => "0", "donation" => "0"),
	"Perak"				=> array("user" => 0, "request" => "0", "donation" => "0"),
	"Selangor"			=> array("user" => 0, "request" => "0", "donation" => "0"),
	"Negeri Sembilan"	=> array("user" => 0, "request" => "0", "donation" => "0"),
	"Melaka"			=> array("user" => 0, "request" => "0", "donation" => "0"),
	"Johor"				=> array("user" => 0, "request" => "0", "donation" => "0"),
	"Pahang"			=> array("user" => 0, "request" => "0", "donation" => "0"),
	"Terengganu"		=> array("user" => 0, "request" => "0", "donation" => "0"),
	"Kelantan"			=> array("user" => 0, "request" => "0", "donation" => "0"),
	"Sarawak"			=> array("user" => 0, "request" => "0", "donation" => "0"),
	"Sabah"				=> array("user" => 0, "request" => "0", "donation" => "0"),
);


while($row = $request_num_result->fetch_object()){
    $record[$row->month]["request"] = $row->num;
}

while($row = $donate_num_result->fetch_object()){
  $record[$row->month]["donation"] = $row->num;
}

//////////////// By state Analysis (update the array result) //////////////////
// User Registered by state
while($row = $user_count_query->fetch_object()) {
	$malaysia_state_array[$row->state]["user"] = $row->ttl_state_user;
}

// Request by State
while($row = $request_state_result->fetch_object()) {
	$malaysia_state_array[$row->state]["request"] = $row->num;
}

// Donate by State
while($row = $donate_state_result->fetch_object()) {
	$malaysia_state_array[$row->state]["donation"] = $row->num;
}

// user and state
$userStateCMD = "";
foreach($malaysia_state_array as $key => $value) {
	$userStateCMD .= $value["user"] . ","; 
}
$userStateCMD = rtrim($userStateCMD, ',');
$userStateCMD = "[" . $userStateCMD . "]";

// request and state
$requestStateCMD = "";
foreach($malaysia_state_array as $key => $value) {
	$requestStateCMD .= $value["request"] . ","; 
}
$requestStateCMD = rtrim($requestStateCMD, ',');
$requestStateCMD = "[" . $requestStateCMD . "]";


// donate and state
$donateStateCMD = "";
foreach($malaysia_state_array as $key => $value) {
	$donateStateCMD .= $value["donation"] . ","; 
}
$donateStateCMD = rtrim($donateStateCMD, ',');
$donateStateCMD = "[" . $donateStateCMD . "]";


/////////////////////////////////////////////


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

var userStateCMD = <?php echo $userStateCMD; ?>;
var requestStateCMD = <?php echo $requestStateCMD; ?>;
var donateStateCMD = <?php echo $donateStateCMD; ?>;
</script>

<script src="../../../assets/js/palette.js"></script>
<script src="../../../assets/js/adminHome.js"></script>