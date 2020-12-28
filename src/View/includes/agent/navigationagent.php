<style>
.dropbtn {
  background-color: orange;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  width:100px;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: lightgray;
}

.dropdown {
  float: right;
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  right: 0;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>


<nav class="navbar navbar-light sticky-top ">
  <a class="navbar-brand" style="margin:center;" href="home.php">
    <img src="../../../assets/img/logo.png" alt="Logo" style="width:120px;">
	</a>
	<div class="dropdown">
	<button onclick="myFunction()" class="dropbtn"><i class="fas fa-bars fa-lg"></i></button>
	<div id="myDropdown" class="dropdown-content">
    <a href ="home.php"> Home</a>
    <a href="account.php"> Account </a>
    <a href="myrequest.php">My request</a>
	<a href="requestlist.php">Request list</a>
	<a href ="donatelist.php">Donation list </a>
	<a href ="request.php"> Make Request </a>
	<a href ="#"> Logout </a>
	</div>
	</div>
</nav>

