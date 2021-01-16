<?php
session_start();
$id = $_SESSION['user']['id'];
$organization_name = $_SESSION['user']['organization_name'];
$email = $_SESSION['user']['email'];
$org_type = $_SESSION['user']['org_type'];
$address = $_SESSION['user']['address'];
$state = $_SESSION['user']['state'];
$postal_code = $_SESSION['user']['postal_code'];
$class = $_SESSION['user']['class'];
$phone = $_SESSION['user']['phone'];
?>

<style>
.btn{
	float:right;
}
</style>
<h2 style="text-align:center">Account</h2>
	<div class="row" style="width:100%">
		<div class="col-sm-3">
		</div>
		<div class="col-sm-6">
		<div class="container1 p-3 my-3 border"><br>
		<div class="column" style="background-color:#aaa;">
			<img src="../../../assets/img/1200px-User_font_awesome.svg.png" class="center" alt="It is secret file!!!" width="200"height="200"/>
		</div><br>
		<div class="column">
			<table class="table table-hover table-condensed">
				<tbody>
					<tr>
						<td>
							<b>Organization Name</b>
						</td>
						<td>
							<?php echo $organization_name; ?></h6>
						</td>
					</tr>

					<tr>
						<td>
							<b>Organization Type</b>
						</td>
						<td>
							<?php echo ucfirst(str_replace("_", " ", $org_type)); ?></h6>
						</td>
					</tr>

					<tr>
						<td>	
							<b>Email</b>
						</td>
						<td>
							<?php echo $email; ?>
						</td>
					</tr>

					<tr>
						<td>	
							<b>Phone</b>
						</td>
						<td>
							<?php echo $phone; ?>
						</td>
					</tr>

					<tr>
						<td>
							<b>Address</b>
						</td>
						<td>
							<?php echo $address . $postal_code . " " . $state; ?>
						</td>
					</tr>
				</tbody>	
			</table>
			<br>
			<a href="updateAccount.php" class="btn btn-primary btn-lg">Edit Profile</a>
		</div>
		
		</div>
		</div>
		<div class="col-sm-2">
		</div>
		</div>