function resetting(target){
	document.getElementsByName(target.id)[0].value = 0;
}

function autoChg(target){
	if(target.value.length == 0)target.value = 0;
}

var inputNumber = document.getElementsByTagName('input');

for(i = 0; i < inputNumber.length; i++){
	inputNumber[i].onkeydown = function(e) {
		if(!((e.keyCode > 95 && e.keyCode < 106)
		  || (e.keyCode > 47 && e.keyCode < 58) 
		  || e.keyCode == 8)) {
			return false;
		}
	}
}


$("#commonRequestForm").submit(function(e) {
	e.preventDefault();
	var quantity = document.getElementsByTagName('input');
	
	var quantity_array = [];
	var sum = 0;

	for (i = 0; i < quantity.length-1; i++){
		quantity_array.push(quantity[i].value);
		sum += quantity[i].value;
	}

	//alert(quantity_array);

	if(sum <=0){
		alert('Please select at least one items or make your own request item.');
	}
	else{
		$.ajax({
			url: "../../Controller/RequestController.php",
			type: "POST",
			data: {
				action: 'commonCreate',
				q: JSON.stringify(quantity_array),
			},
			dataType: "json",
			success: function(data) {
				if(data.status == 'success')
				{
					alert(data.message);
					window.location.replace('../agent');
				}
				else
				{
					alert(data.message);
				}
			},
			error: function (data) {
				console.log('An error occurred.');
				console.log(data);
			}
		});
	}
	
	
	return false;
});
