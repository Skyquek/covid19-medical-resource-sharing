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
        <h3>60</h3>
    </div>

    <div class="card-body border" style="height:180px;width:230px;margin-top:30px">
      <h4>Total Request</h4>
        <h3>40</h3>
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

<h3 style="text-align:center">Request List</h3><br>
<div class="container3" style="height:200px">
<div class="row">
		<div class="col-md-3">
      <div class="card card-primary" style="height:180px">
        <div class="card-header">
          <h3 class="card-title">Surgical Mask etc</h3>
          <p>Senior Garden Elderly Care Centre<p>
        </div>
        <div class="card-body" style="display: block;">
          <a href="donatelist.php" >see more</a>
        </div>
      </div>
    </div>
		
		<div class="col-md-3">
      <div class="card card-primary" style="height:180px">
        <div class="card-header">
          <h3 class="card-title">Hand Sanitizer etc</h3>
          <p>SMK Simpang Bekoh<p>
          </div>
        <div class="card-body" style="display: block;">
          <a href="donatelist.php" >see more</a>
        </div>
      </div>
    </div>
		
		
		<div class="col-md-3">
      <div class="card card-primary" style="height:180px">
        <div class="card-header">
          <h3 class="card-title">N95 Face Mask</h3>
          <p>Jabatan Hal Ehwal Kesatuan Sekerja Melaka<p>
          </div>
        <div class="card-body" style="display: block;">
          <a href="donatelist.php" >see more</a>
        </div>
      </div>
    </div>
		
		
		<div class="col-md-3">
      <a href="donatelist.php" style="color:black;">
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

<h3 style="text-align:center">Request Progress</h3><br>
<div class="container3" style="height:200px">
<div class="row">
		<div class="col-md-9">
        <div class="card card-primary" style="height:180px">
          <div class="card-header">
            <h5 class="card-title" style="text-align:left">Recent Request Progress</h5>
          </div>

          <div class="card-body" style="display: block;">
            <div class="row">
            </div>
            <div class="card-body">
              <div class="progress">
                <div class="progress-bar bg-primary progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
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


<script src="../../../assets/js/agentHome.js"></script>
