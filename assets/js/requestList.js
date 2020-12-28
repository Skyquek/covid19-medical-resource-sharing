var inputNumber = document.getElementsByTagName('input');

function autoChg(target){
	if(target.value.length == 0)target.value = 0;
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
