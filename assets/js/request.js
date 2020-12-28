function resetting(target){
	document.getElementsByName(target.id)[0].value = 0;
}

function autoChg(target){
	if(target.value.length == 0)target.value = 0;
}

var inputNumber = document.getElementsByTagName('input["type="number"]');

for(i = 0; i < inputNumber.length; i++){
	inputNumber[i].onkeydown = function(e) {
		if(!((e.keyCode > 95 && e.keyCode < 106)
		  || (e.keyCode > 47 && e.keyCode < 58) 
		  || e.keyCode == 8)) {
			return false;
		}
	}
}
/*
inputNumber[i].onchange = function() {
	alert(inputNumber[i].value);
}
*/	
// // Listen for input event on inputNumber.
// inputNumber.addEventListener('input', function(){
// 	// Let's match only digits.
//     var num = this.value.match(/^\d+$/);
//     if (num === null) {
//         // If we have no match, value will be empty.
//         this.value = "";
// 	}
// 	else {
// 	}
// }, false)


