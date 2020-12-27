// Name Validation
var letters = /^[A-Za-z\s]+$/;
const name = document.getElementById("name")
name.addEventListener("input", validateName);
function validateName() {
    var val = name.value;
    var valLength = val.length;
    console.log(val.length);
    console.log(val.substring(0, valLength - 1));

    if(val.match(letters))
    {
        console.log("Name is valid");
        document.getElementById('name').style.borderColor = "green";
        return (true)
    }
    else
    {
        alert('Please input alphabet character on your name only');
        document.getElementById('name').style.borderColor = "red";
        name.value = val.substring(0, valLength - 1);
        return (false)    
    }
}

// Email Validation
const email = document.getElementById("email");
function validation()
{
    // Validate Email
    if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email.value))
    {
        console.log("correct email detected");
        document.getElementById('email').style.borderColor = "green";
        return true;
    }
    else
    { 
        alert("You have entered an invalid email address!");
        document.getElementById('email').style.borderColor = "red";
        return false;
    } 
}

$(".color-box-white").click(function(){
    $("body").css({"background-color":"#ffffff"});
});

$(".color-box-orange").click(function(){
    $("body").css({"background-color":"#FF850A"});
});

$(".color-box-green").click(function(){
    $("body").css({"background-color":"#1b45c2"});
});

$(".color-box-blue").click(function(){
    $("body").css({"background-color":"#1bc271"});
});