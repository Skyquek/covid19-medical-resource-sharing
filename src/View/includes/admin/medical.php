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

<br>

<div class="container " style="width:1300px;height:780px"><br>
<div class="row">
<div class="col-sm-8 ">
<h5>Item</h5>
<p>mask<p>
<p>surgery mask<p>

</div>
<div class="col-sm-4" style="text-align:right">
<h5>Amount</h5>
<p>50</p><p>400</p>
</div>
</div>
  <br><br><br><br>
  <div class="pagination" style="margin-left:350px">
  <a href="#">&laquo;</a>
  <a class="active"href="#">1</a>
  <a  href="#">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">&raquo;</a>
</div>
</div>
