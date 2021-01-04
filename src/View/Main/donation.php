<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../../../assets/css/include.css">
</head>

<script>var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<body style="background-color:white">

<?php include("../includes/main/navigation.php");?>
<?php include("../includes/main/header.php");?>

<h1 style="font-weight:bold" class="text-center">Donate to help each other</h1><br>
<p class="text-center">By making a much needed donation you will join us to confirm and find the solutions we need to our most important environmental issues.
<br><br>
<button style="width:auto;"><a href="register.php" style="color:white" >Donate</a></button></p><br>

<?php include("../includes/main/footer.php");?>

</body>
</html>