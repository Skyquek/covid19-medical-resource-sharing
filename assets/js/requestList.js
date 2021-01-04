var inputNumber = document.getElementsByTagName('input');

function autoChg(target){
	if(target.value.length == 0)target.value = 0;

	else if(parseInt(target.max) < parseInt(target.value)){
		target.value = parseInt(target.max);
	}
}


for(i = 0; i < inputNumber.length; i++){
	inputNumber[i].onkeydown = function(e) {
		if(!((e.keyCode > 95 && e.keyCode < 106)
		  || (e.keyCode > 47 && e.keyCode < 58) 
		  || e.keyCode == 8)) {
			return false;
		}
	}
}

function donate(target) {

	x = confirm('Are you sure to donate?');

	if(x == true){

		selected_row = target.id;
		
		// All requirements pass
		$.ajax({
			url: "../../Controller/DonateController.php",
			type: "POST",
			data: {
				action: 'donate',
				quantity: document.getElementsByName("quantity")[selected_row].value,
				category_id: document.getElementsByName("category_id")[selected_row].value,
				request_id: document.getElementsByName("request_id")[selected_row].value,
				product_name: document.getElementsByName("product_name")[selected_row].value
			},
			dataType: "json",
			success: function(data) {
			if(data.status == 'success')
			{
				alert(data.status);
				window.location.replace('donatelist.php');
			}
			else
			{
				alert(data.status);
				// // successBox.style.display = "none";
				// errorBox.innerHTML = "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" + "<i class='fa fa-times'></i> " + data.message;
				// errorBox.style.display = "block";
			}
			},
			error: function (data) {
			console.log('An error occurred.');
			console.log(data);
			}
		});
	}
    
        
}
